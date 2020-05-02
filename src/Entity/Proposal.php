<?php

namespace App\Entity;

use Cocur\Slugify\Slugify;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ProposalRepository")
 * @ORM\HasLifecycleCallbacks()
 */
class Proposal
{
    const PROPOSAL_STATUS_ACTIVE = 1; // active
    const PROPOSAL_STATUS_PAUSE = 2; // supendue
    const PROPOSAL_STATUS_INPROGRESS = 3; //en cours de validation
    const PROPOSAL_STATUS_DECLINED = 4; // décline
    const PROPOSAL_STATUS_MODIFICATION_REQUIRED = 5; // soumettre pour modification
    const PROPOSAL_STATUS_TRUSH = 6; // dans la poubelle


    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $title;

    /**
     * @ORM\Column(type="text")
     */
    private $description;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $slug;
    /**
     * @ORM\Column(type="integer",name="status_id", nullable=true)
     */
    private $statusId = Proposal::PROPOSAL_STATUS_INPROGRESS;
    /**
     * @ORM\Column(type="boolean")
     */
    private $featured = 0;
    
    /**
     * @ORM\Column(type="boolean",nullable=true)
     */
    private $topRated;

    /**
     * @ORM\Column(type="decimal")
     */
    private $price;

    /**
     * @ORM\Column(type="integer", length=255, nullable=true)
     */
    private $views;
    

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $rating;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\User", inversedBy="proposals")
     * @ORM\JoinColumn(nullable=false)
     */
    private $seller;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Category", inversedBy="proposals")
     * * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="category_id", referencedColumnName="id")
     * })
     */
    private $category;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\SousCategory", inversedBy="proposals")
     * * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="subcategory_id", referencedColumnName="id")
     * })
     */
    private $subcategory;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\DeliveryTime", inversedBy="proposals")
     * * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="delivery_time_id", referencedColumnName="id")
     * })
     */
    private $deliveryTime;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\ProposalImage", mappedBy="proposal", orphanRemoval=true)
     */
    private $proposalImages;
    

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $tags;



    public function __construct()
    {
        $this->proposalImages = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getSlug(): ?string
    {
        return $this->slug;
    }

    public function setSlug(string $slug): self
    {
        $this->slug = $slug;

        return $this;
    }

    public function getPrice(): ?string
    {
        return $this->price;
    }

    public function setPrice(string $price): self
    {
        $this->price = $price;

        return $this;
    }

    public function getViews(): ?int
    {
        return $this->views;
    }

    public function setViews(?int $views): self
    {
        $this->views = $views;

        return $this;
    }

    public function getRating(): ?int
    {
        return $this->rating;
    }

    public function setRating(?int $rating): self
    {
        $this->rating = $rating;

        return $this;
    }

    public function getSeller(): ?User
    {
        return $this->seller;
    }

    public function setSeller(?User $seller): self
    {
        $this->seller = $seller;

        return $this;
    }

    public function getCategory(): ?Category
    {
        return $this->category;
    }

    public function setCategory(?Category $category): self
    {
        $this->category = $category;

        return $this;
    }


    public function getSubcategory(): ?SousCategory
    {
        return $this->subcategory;
    }

    public function setSubcategory(?SousCategory $subcategory): self
    {
        $this->subcategory = $subcategory;

        return $this;
    }

    public function getDeliveryTime(): ?DeliveryTime
    {
        return $this->deliveryTime;
    }

    public function setDeliveryTime(?DeliveryTime $deliveryTime): self
    {
        $this->deliveryTime = $deliveryTime;

        return $this;
    }

    /**
     * Permet d'initialiser le  slug !
     *
     * @ORM\PrePersist
     * @ORM\PreUpdate
     *
     * @return void
     */
    public function initializeSlug(){

        if(empty($this->slug)){
            $slugify = new Slugify();
            $this->slug = $slugify->slugify($this->title);
        }
    }

    /**
     * @return Collection|ProposalImage[]
     */
    public function getProposalImages(): Collection
    {
        return $this->proposalImages;
    }

    public function addProposalImage(ProposalImage $proposalImage): self
    {
        if (!$this->proposalImages->contains($proposalImage)) {
            $this->proposalImages[] = $proposalImage;
            $proposalImage->setProposal($this);
        }

        return $this;
    }

    public function removeProposalImage(ProposalImage $proposalImage): self
    {
        if ($this->proposalImages->contains($proposalImage)) {
            $this->proposalImages->removeElement($proposalImage);
            // set the owning side to null (unless already changed)
            if ($proposalImage->getProposal() === $this) {
                $proposalImage->setProposal(null);
            }
        }

        return $this;
    }

    public function getStatusId(): ?int
    {
        return $this->statusId;
    }

    public function setStatusId(?int $statusId): self
    {
        $this->statusId = $statusId;

        return $this;
    }
    public function getFeatured(): ?bool
    {
        return $this->featured;
    }

    public function setFeatured(bool $featured): self
    {
        $this->featured = $featured;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getTopRated()
    {
        return $this->topRated;
    }

    public function getTags(): ?string
    {
        return $this->tags;
    }

    public function setTags(?string $tags): self
    {
        $this->tags = $tags;

        return $this;
    }
    

    /**
     * @param mixed $topRated
     */
    public function setTopRated($topRated): void
    {
        $this->topRated = $topRated;
    }

}
