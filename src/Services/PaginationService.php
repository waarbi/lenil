<?php

namespace App\Services;

use App\Entity\Admin\ProposalSearchProperty;
use App\Entity\Proposal;
use Doctrine\ORM\EntityManagerInterface;
use Twig\Environment;
use Symfony\Component\HttpFoundation\RequestStack;

class PaginationService
{
    private $entityClass;
    private $limit = 15;
    private $currentPage = 1;
    private $manager;
    private $twig;
    private $route;
    private $templatePath;
    private $search;

    public function __construct(EntityManagerInterface $manager, Environment $twig, RequestStack $request, $templatePath)
    {
        $this->route = $request->getCurrentRequest()->attributes->get('_route');
        $this->manager = $manager;
        $this->twig = $twig;
        $this->templatePath = $templatePath;
    }

    public function setTemplatePath()
    {
        $this->templatePath = $templatePath;

        return $this;
    }

    public function getTemplatePath()
    {
        return $this->templatePath;
    }

    public function setRoute($route)
    {
        $this->route = $route;

        return $this;
    }

    /**
     * Get the value of route
     */
    public function getRoute()
    {
        return $route;
    }

    public function display()
    {
        $this->twig->display($this->templatePath, [
            'page' => $this->currentPage,
            'pages' => $this->getPages(),
            'route' => $this->route
        ]);
    }

    public function getPages()
    {
        if (empty($this->entityClass)) {
            throw new \Exception("Vous n'avez pas spécifié l'entité sur laquelle nous devons paginer !
            Utilisez la méthode setPage de votre paginationService !");
        }
        // 1) Connaitre le total des enregistrements de la table
        $repo = $this->manager->getRepository($this->entityClass);
        $total = count($repo->findAll());
        if ($this->entityClass === 'App\Entity\Proposal' && $this->search) {
            $total = count($repo->getSearchAd($this->search, $this->limit, null));
        }
        if ($this->entityClass === 'App\Entity\User' && $this->search) {
            $total = count($repo->getSearchUserByName($this->search, $this->limit, null));
        }
        // 2) Faire la division, l'arrondie et le renvoyer
        $pages = ceil($total / $this->limit);

        return $pages;
    }

    public function getData()
    {

        if (empty($this->entityClass)) {
            throw new \Exception("Vous n'avez pas spécifié l'entité sur laquelle nous devons paginer !
            Utilisez la méthode setEntityClass de votre paginationService !");
        }
        // 1) Calculer l'offset
        $offset = $this->currentPage * $this->limit - $this->limit;
        // 2)Demander au repository de trouver les éléments
        $repo = $this->manager->getRepository($this->entityClass);

        $data = $repo->findBy([], [], $this->limit, $offset);

        if ($this->entityClass === 'App\Entity\Proposal' && $this->search) {
            $data = $repo->getSearchAd($this->search, $this->limit, null);
        }
        if ($this->entityClass === 'App\Entity\User' && $this->search) {
            $data = $repo->getSearchUserByName($this->search, $this->limit, null);
        }

        return $data;
    }


    /**
     * Set the value of currentPage
     *
     * @return  self
     */
    public function setPage($page)
    {
        $this->currentPage = $page;

        return $this;
    }

    /**
     * Get the value of currentPage
     */
    public function getPage()
    {
        return $this->currentPage;
    }

    /**
     * @return mixed
     */
    public function getSearch()
    {
        return $this->search;
    }

    /**
     * @param mixed $search
     */
    public function setSearch($search): void
    {
        $this->search = $search;
    }

    public function setLimit($limit)
    {
        $this->limit = $limit;
    }

    public function getLimit()
    {
        return $this->limit;
    }

    public function setEntityClass($entityClass)
    {
        $this->entityClass = $entityClass;

        return $this;
    }

    public function getEntityClass()
    {
        return $this->entityClass;
    }


}