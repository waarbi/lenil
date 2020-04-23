<?php

namespace App\Entity;

use Cocur\Slugify\Slugify;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\Validator\Constraints as Assert;


/**
 * @ORM\Entity(repositoryClass="App\Repository\CategoriesRepository")
 * @ORM\HasLifecycleCallbacks()
 */
class Category
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
    private $slug;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Assert\File(
     *     mimeTypes={"image/jpeg", "image/png", "image/gif"},
     *     mimeTypesMessage = "Please upload a valid Image"
     *     )
     */
    private $image;

    /**
     * @ORM\Column(type="boolean")
     */
    private $featured;
    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $in_card;
    /**
     * @ORM\Column(type="string", name="card_picture",nullable=true)
      * @Assert\File(
     *     mimeTypes={"image/jpeg", "image/png", "image/gif"},
     *     mimeTypesMessage = "Please upload a valid Image"
     *     )
     */

    private $cardPicture;
    /**
     * @ORM\Column(type="string", length=255)
     */
    private $title;
    /**
     * @ORM\Column(nullable=false, type="datetime")
     */
    private $updatedAt;
    /**
     * @ORM\Column(type="string", length=255)
     */
    private $description;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\SousCategory",cascade={"remove"}, mappedBy="category")
     */
    private $sous_categories;

    private $parent_id;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Proposal", mappedBy="category", orphanRemoval=true)
     */
    private $proposals;


    public function __construct()
    {
        $this->sous_categories = new ArrayCollection();
        $this->proposals = new ArrayCollection();
        $this->updatedAt = new \DateTime('now');

    }
    public function getUpdatedAt(): ?\DateTimeInterface
    {
        return $this->updatedAt;
    }

    public function setUpdatedAt(\DateTimeInterface $updatedAt): self
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }
    public function getId(): ?int
    {
        return $this->id;
    }

    public function getSlug(): ?string
    {
        return $this->slug;
    }

    /**
     * @return mixed
     */
    public function getInCard()
    {
        return $this->in_card;
    }

    /**
     * @param mixed $in_card
     * @return Category
     */
    public function setInCard($in_card): Category
    {
        $this->in_card = $in_card;
        return $this;
    }

    public function setSlug(string $slug): self
    {
        $this->slug = $slug;

        return $this;
    }

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(string $image= null): self
    {
        if ($this->image instanceof UploadedFile){
            $this->updatedAt = new \DateTime('now');
        }
            $this->image = $image;
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

    /**
     * @return mixed
     */
    public function getParentId()
    {
        return $this->parent_id;
    }

    /**
     * @param mixed $parent_id
     */
    public function setParentId($parent_id): void
    {
        $this->parent_id = $parent_id;
    }

    /**
     * @return Collection|SousCategory[]
     */
    public function getSousCategories(): Collection
    {
        return $this->sous_categories;
    }

    public function addSousCategory(SousCategory $sousCategory): self
    {
        if (!$this->sous_categories->contains($sousCategory)) {
            $this->sous_categories[] = $sousCategory;
            $sousCategory->setCategory($this);
        }

        return $this;
    }

    public function removeSousCategory(SousCategory $sousCategory): self
    {
        if ($this->sous_categories->contains($sousCategory)) {
            $this->sous_categories->removeElement($sousCategory);
            // set the owning side to null (unless already changed)
            if ($sousCategory->getCategory() === $this) {
                $sousCategory->setCategory(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Proposal[]
     */
    public function getProposals(): Collection
    {
        return $this->proposals;
    }

    public function addProposal(Proposal $proposal): self
    {
        if (!$this->proposals->contains($proposal)) {
            $this->proposals[] = $proposal;
            $proposal->setCategory($this);
        }

        return $this;
    }

    public function removeProposal(Proposal $proposal): self
    {
        if ($this->proposals->contains($proposal)) {
            $this->proposals->removeElement($proposal);
            // set the owning side to null (unless already changed)
            if ($proposal->getCategory() === $this) {
                $proposal->setCategory(null);
            }
        }

        return $this;
    }

    /**
     * @return mixed
     */
    public function getCardPicture()
    {
        return $this->cardPicture;
    }

    /**
     * @param string $cardPicture
     * @return Category
     * @throws \Exception
     */
    public function setCardPicture(string $cardPicture = null):self
    {
        $this->cardPicture = $cardPicture;
        if ($this->cardPicture instanceof UploadedFile){
            $this->updatedAt = new \DateTime('now');
        }
        $this->cardPicture = $cardPicture;

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
            $this->slug = $slugify->slugify($this->title. ' ' .substr($this->description, 0, 10));
        }
    }


    public function __toString()
    {
        return $this->getTitle();
    }


}
