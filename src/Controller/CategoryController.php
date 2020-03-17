<?php


namespace App\Controller;


use App\Entity\Category;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class CategoryController extends AbstractController
{

    /**
     * @Route("/categories/{slug}", name="category_services")
     * @param Category $categories
     * @return JsonResponse
     */
    public function getServicesByCategory(Category $categories)
    {
        return new JsonResponse('');
    }
}