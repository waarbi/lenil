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
     * @ORM\Column(type="decimal", precision=5, scale=2)
     */
    private $price;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $views;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
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

    public function getViews(): ?string
    {
        return $this->views;
    }

    public function setViews(?string $views): self
    {
        $this->views = $views;

        return $this;
    }

    public function getRating(): ?string
    {
        return $this->rating;
    }

    public function setRating(?string $rating): self
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


}
