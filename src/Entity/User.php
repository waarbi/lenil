<?php

namespace App\Entity;

use Cocur\Slugify\Slugify;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\Collection;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

/**
 * @ORM\Entity(repositoryClass="App\Repository\UserRepository")
 * @ORM\HasLifecycleCallbacks()
 * @UniqueEntity(
 * fields={"email"},
 * message="Un autre utilisateur s'est déja inscrit avec cette adresse email, merci de la modifier"
 * )
 *
 */
class User implements UserInterface
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;
    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank(message="Vous devez renseigner votre prénom !")
     */
    private $firstName;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank(message="Vous devez renseigner votre nom de famille !")
     */
    private $lastName;
    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Pays", inversedBy="users")
     * @ORM\JoinColumn(nullable=true)
     */
    private $pays;
    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\Email(message="Veuillez renseigner un email valide !")
     */
    private $email;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $picture;


    /**
     * @ORM\Column(type="string", length=255)
     */
    private $hash;
    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $confirmationToken;
    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $tokenPassword;
    /**
     * @ORM\Column(type="datetime",nullable=true)
     */
    private $createdTokenPasswordAt;
    /**
     * @ORM\Column(type="boolean")
     */
    private $enabled = false;
    /**
     * @ORM\Column(type="boolean")
     */
    private $online = true;
    /**
     *@Assert\EqualTo(propertyPath="hash", message="Vous n'avez pas correctement confirmé votre mot de passe !")
     *
     */
    public $passwordConfirm;
    /**
     * @ORM\Column(type="text", nullable=true)
     * @Assert\Length(min=100, minMessage="Votre description doit faire au moins 100 caractères")
     */
    private $description;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $slug;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\Role", mappedBy="users")
     */
    private $userRoles;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Comment", mappedBy="author", orphanRemoval=true)
     */
    private $comments;
    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Demande", mappedBy="auteur")
     */
    private $demandes;
    /**
     * @ORM\ManyToMany(targetEntity="Skill", inversedBy="users")
     * @ORM\JoinColumn(nullable=true)
     */
    private $skills;
    /**
     * @ORM\ManyToMany(targetEntity="Language", inversedBy="users")
     * @ORM\JoinColumn(nullable=true)
     */
    private $languages;
    /**
     * @ORM\ManyToOne(targetEntity="SellerLevel", inversedBy="users")
     * @ORM\JoinColumn(nullable=true)
     */
    private $level;

    /**
     * @ORM\Column(type="string", nullable=true)
     * @Assert\Length(min=10, minMessage="Votre specialité doit faire au moins 10 caractères")
     */
    private $specialty;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $recentDelivery;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $connected = false;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getFirstName(): ?string
    {
        return $this->firstName;
    }

    public function setFirstName(string $firstName): self
    {
        $this->firstName = $firstName;

        return $this;
    }

    public function getLastName(): ?string
    {
        return $this->lastName;
    }

    public function setLastName(string $lastName): self
    {
        $this->lastName = $lastName;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getPicture(): ?string
    {
        return $this->picture;
    }

    public function setPicture(?string $picture): self
    {
        $this->picture = $picture;

        return $this;
    }

    public function getHash(): ?string
    {
        return $this->hash;
    }

    public function setHash(string $hash): self
    {
        $this->hash = $hash;

        return $this;
    }
    public function getFullName() {
        return "{$this->firstName} {$this->lastName}";
    }

    /**
     * @return mixed
     */
    public function getTokenPassword()
    {
        return $this->tokenPassword;
    }

    /**
     * @param mixed $tokenPassword
     */
    public function setTokenPassword($tokenPassword): void
    {
        $this->tokenPassword = $tokenPassword;
    }

    /**
     * @return mixed
     */
    public function getCreatedTokenPasswordAt()
    {
        return $this->createdTokenPasswordAt;
    }

    /**
     * @param mixed $createdTokenPasswordAt
     */
    public function setCreatedTokenPasswordAt($createdTokenPasswordAt): void
    {
        $this->createdTokenPasswordAt = $createdTokenPasswordAt;
    }

    /**
     * @ORM\Column(type="datetime")
     */
    private $createdAt;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Proposal", mappedBy="seller", orphanRemoval=true)
     */
    private $proposals;


    /**
     * Permet d'initialiser le  slug !
     *
     * @ORM\PrePersist
     * @ORM\PreUpdate
     *
     * @return void
     */
    public function initializeSlug(){
        if(empty($this->createdAt)){
            $this->createdAt = new \DateTime();
        }

        if(empty($this->slug)){
            $slugify = new Slugify();
            $this->slug = $slugify->slugify($this->firstName. ' ' .$this->lastName);
        }
    }

    public function __construct()
    {
        $this->userRoles = new ArrayCollection();
        $this->comments = new ArrayCollection();
        $this->skills = new ArrayCollection();
        $this->languages = new ArrayCollection();
        $this->demandes = new ArrayCollection();
        $this->proposals = new ArrayCollection();
    }

    public function getRoles()
    {


        $roles = $this->userRoles->map(function($role){
            return $role->getTitle();
        })->toArray();

        $roles[] = 'ROLE_USER';
        return $roles;
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
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * @param mixed $createdAt
     */
    public function setCreatedAt($createdAt): void
    {
        $this->createdAt = $createdAt;
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
    public function getPassword()
    {
        return $this->hash;
    }

    public function getSalt(){}

    public function getUsername()
    {
        return $this->email;
    }
    public function getPays(): ?Pays
    {
        return $this->pays;
    }

    public function setPays(?Pays $pays): self
    {
        $this->pays = $pays;

        return $this;
    }
    public function eraseCredentials(){}

    /**
     * @return Collection|Role[]
     */
    public function getUserRoles(): Collection
    {
        return $this->userRoles;
    }

    /**
     * @return mixed
     */
    public function getConfirmationToken()
    {
        return $this->confirmationToken;
    }

    /**
     * @param mixed $confirmationToken
     */
    public function setConfirmationToken($confirmationToken): void
    {
        $this->confirmationToken = $confirmationToken;
    }

    /**
     * @return mixed
     */
    public function getEnabled()
    {
        return $this->enabled;
    }

    /**
     * @param mixed $enabled
     */
    public function setEnabled($enabled): void
    {
        $this->enabled = $enabled;
    }

    /**
     * @return bool
     */
    public function isOnline(): bool
    {
        return $this->online;
    }

    /**
     * @param bool $online
     */
    public function setOnline(bool $online): void
    {
        $this->online = $online;
    }

    public function addUserRole(Role $userRole): self
    {
        if (!$this->userRoles->contains($userRole)) {
            $this->userRoles[] = $userRole;
            $userRole->addUser($this);
        }

        return $this;
    }

    public function removeUserRole(Role $userRole): self
    {
        if ($this->userRoles->contains($userRole)) {
            $this->userRoles->removeElement($userRole);
            $userRole->removeUser($this);
        }

        return $this;
    }
    /**
     * @return Collection|Comment[]
     */
    public function getComments(): Collection
    {
        return $this->comments;
    }

    public function addComment(Comment $comment): self
    {
        if (!$this->comments->contains($comment)) {
            $this->comments[] = $comment;
            $comment->setAuthor($this);
        }

        return $this;
    }

    public function removeComment(Comment $comment): self
    {
        if ($this->comments->contains($comment)) {
            $this->comments->removeElement($comment);
            // set the owning side to null (unless already changed)
            if ($comment->getAuthor() === $this) {
                $comment->setAuthor(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Skill[]
     */
    public function getSkills(): Collection
    {
        return $this->skills;
    }

    public function addSkill(Skill $skill): self
    {
        if (!$this->skills->contains($skill)) {
            $this->skills[] = $skill;
            $skill->setUser($this);
        }

        return $this;
    }

    public function removeSkill(Skill $skill): self
    {
        if ($this->skills->contains($skill)) {
            $this->skills->removeElement($skill);
            // set the owning side to null (unless already changed)
            if ($skill->getUser() === $this) {
                $skill->setUser(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Language[]
     */
    public function getLanguages(): Collection
    {
        return $this->languages;
    }

    public function addLanguage(Language $language): self
    {
        if (!$this->languages->contains($language)) {
            $this->languages[] = $language;
            $language->setUser($this);
        }

        return $this;
    }

    public function removeLanguage(Language $language): self
    {
        if ($this->languages->contains($language)) {
            $this->languages->removeElement($language);
            // set the owning side to null (unless already changed)
            if ($language->getUser() === $this) {
                $language->setUser(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Demande[]
     */
    public function getDemandes(): Collection
    {
        return $this->demandes;
    }

    public function addDemande(Demande $demande): self
    {
        if (!$this->demandes->contains($demande)) {
            $this->demandes[] = $demande;
            $demande->setAuthor($this);
        }
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
            $proposal->setSeller($this);
        }

        return $this;
    }

    public function removeDemande(Demande $demande): self
    {
        if ($this->demandes->contains($demande)) {
            $this->demandes->removeElement($demande);
            // set the owning side to null (unless already changed)
            if ($demande->getAuthor() === $this) {
                $demande->setAuthor(null);
            }
        }
      return $this;
     }   
      
    public function removeProposal(Proposal $proposal): self
    {
        if ($this->proposals->contains($proposal)) {
            $this->proposals->removeElement($proposal);
            // set the owning side to null (unless already changed)
            if ($proposal->getSeller() === $this) {
                $proposal->setSeller(null);
            }
        }

        return $this;
    }

    public function getLevel(): ?SellerLevel
    {
        return $this->level;
    }

    public function setLevel(?SellerLevel $level): self
    {
        $this->level = $level;

        return $this;
    }

    public function __toString()
    {
        return $this->getFullName();
    }

    public function getOnline(): ?bool
    {
        return $this->online;
    }

    public function getSpecialty(): ?string
    {
        return $this->specialty;
    }

    public function setSpecialty(?string $specialty): self
    {
        $this->specialty = $specialty;

        return $this;
    }

    public function getRecentDelivery(): ?\DateTimeInterface
    {
        return $this->recentDelivery;
    }

    public function setRecentDelivery(?\DateTimeInterface $recentDelivery): self
    {
        $this->recentDelivery = $recentDelivery;

        return $this;
    }

    public function getConnected(): ?bool
    {
        return $this->connected;
    }

    public function setConnected(?bool $connected): self
    {
        $this->connected = $connected;

        return $this;
    }

}
