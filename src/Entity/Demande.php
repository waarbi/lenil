<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\DemandeRepository")
 */
class Demande
{
    const REQUEST_STATUS_ACTIVE = 1; // active
    const REQUEST_STATUS_INACTIVE = 2; // supendue
    const REQUEST_STATUS_INPROGRESS = 3; //en cours de validation
    const REQUEST_STATUS_CANCELLED = 4; // désapprouvé


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
     * @var Category
     *
     * @ORM\ManyToOne(targetEntity="Category")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="category_id", referencedColumnName="id")
     * })
     */
    private $category;

    /**
     * @var SousCategory
     *
     * @ORM\ManyToOne(targetEntity="SousCategory")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="sous_category_id", referencedColumnName="id")
     * })
     */
    private $sousCategory;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Offer", mappedBy="demande")
     */
    private $offers;

    /**
     * @var DeliveryTime
     * @ORM\ManyToOne(targetEntity="DeliveryTime")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="delivery_time", referencedColumnName="id")
     * })
     */
    private $deliveryTime;
    /**
     * @var User
     * @ORM\ManyToOne(targetEntity="User", inversedBy="demandes")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="auteur_id", referencedColumnName="id")
     * })
     */
    private $auteur;
    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $budget;

    /**
     * @ORM\Column(type="integer",name="status_id", nullable=true)
     */
    private $statusId = Demande::REQUEST_STATUS_INPROGRESS;
    /**
     * @ORM\Column(type="datetime")
     */
    private $createdAt;

    public function __construct()
    {
        $this->createdAt = new \DateTime();
        $this->offers = new ArrayCollection();
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

    public function getBudget(): ?int
    {
        return $this->budget;
    }

    public function setBudget(?int $budget): self
    {
        $this->budget = $budget;

        return $this;
    }

    public function getSousCategory(): ?SousCategory
    {
        return $this->sousCategory;
    }

    public function setSousCategory(?SousCategory $sousCategory): self
    {
        $this->sousCategory = $sousCategory;

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

    public function getDeliveryTime(): ?DeliveryTime
    {
        return $this->deliveryTime;
    }

    public function setDeliveryTime(?DeliveryTime $deliveryTime): self
    {
        $this->deliveryTime = $deliveryTime;

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

    public function getCreatedAt(): ?\DateTimeInterface
    {
        return $this->createdAt;
    }

    public function setCreatedAt(\DateTimeInterface $createdAt): self
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * @return Collection|Offer[]
     */
    public function getOffers(): Collection
    {
        return $this->offers;
    }

    public function addOffer(Offer $offer): self
    {
        if (!$this->offers->contains($offer)) {
            $this->offers[] = $offer;
            $offer->setDemande($this);
        }

        return $this;
    }

    public function removeOffer(Offer $offer): self
    {
        if ($this->offers->contains($offer)) {
            $this->offers->removeElement($offer);
            // set the owning side to null (unless already changed)
            if ($offer->getDemande() === $this) {
                $offer->setDemande(null);
            }
        }

        return $this;
    }

    public function getAuteur(): ?User
    {
        return $this->auteur;
    }

    public function setAuteur(?User $auteur): self
    {
        $this->auteur = $auteur;

        return $this;
    }
}
