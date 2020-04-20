<?php

namespace App\Entity\Admin;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\GeneralSettingRepository")
 */
class GeneralSetting
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $siteTitle;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $siteDescription;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $siteKeywords;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $siteAuthor;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $siteLogo;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $googleRecaptchaSiteKey;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $googleRecaptchaSecretKey;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $EnableKnowledgeBank;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $EnableMaintenanceMode;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getSiteTitle(): ?string
    {
        return $this->siteTitle;
    }

    public function setSiteTitle(?string $siteTitle): self
    {
        $this->siteTitle = $siteTitle;

        return $this;
    }

    public function getSiteDescription(): ?string
    {
        return $this->siteDescription;
    }

    public function setSiteDescription(?string $siteDescription): self
    {
        $this->siteDescription = $siteDescription;

        return $this;
    }

    public function getSiteKeywords(): ?string
    {
        return $this->siteKeywords;
    }

    public function setSiteKeywords(?string $siteKeywords): self
    {
        $this->siteKeywords = $siteKeywords;

        return $this;
    }

    public function getSiteAuthor(): ?string
    {
        return $this->siteAuthor;
    }

    public function setSiteAuthor(?string $siteAuthor): self
    {
        $this->siteAuthor = $siteAuthor;

        return $this;
    }

    public function getSiteLogo(): ?string
    {
        return $this->siteLogo;
    }

    public function setSiteLogo(?string $siteLogo): self
    {
        $this->siteLogo = $siteLogo;

        return $this;
    }

    public function getGoogleRecaptchaSiteKey(): ?string
    {
        return $this->googleRecaptchaSiteKey;
    }

    public function setGoogleRecaptchaSiteKey(?string $googleRecaptchaSiteKey): self
    {
        $this->googleRecaptchaSiteKey = $googleRecaptchaSiteKey;

        return $this;
    }

    public function getGoogleRecaptchaSecretKey(): ?string
    {
        return $this->googleRecaptchaSecretKey;
    }

    public function setGoogleRecaptchaSecretKey(?string $googleRecaptchaSecretKey): self
    {
        $this->googleRecaptchaSecretKey = $googleRecaptchaSecretKey;

        return $this;
    }

    public function getEnableKnowledgeBank(): ?bool
    {
        return $this->EnableKnowledgeBank;
    }

    public function setEnableKnowledgeBank(?bool $EnableKnowledgeBank): self
    {
        $this->EnableKnowledgeBank = $EnableKnowledgeBank;

        return $this;
    }

    public function getEnableMaintenanceMode(): ?bool
    {
        return $this->EnableMaintenanceMode;
    }

    public function setEnableMaintenanceMode(?bool $EnableMaintenanceMode): self
    {
        $this->EnableMaintenanceMode = $EnableMaintenanceMode;

        return $this;
    }
}
