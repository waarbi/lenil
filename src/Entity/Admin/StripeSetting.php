<?php

namespace App\Entity\Admin;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\StripeSettingRepository")
 */
class StripeSetting
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $enabled;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $secretKey;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $publishableKey;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $currency;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEnabled(): ?bool
    {
        return $this->enabled;
    }

    public function setEnabled(?bool $enabled): self
    {
        $this->enabled = $enabled;

        return $this;
    }

    public function getSecretKey(): ?string
    {
        return $this->secretKey;
    }

    public function setSecretKey(?string $secretKey): self
    {
        $this->secretKey = $secretKey;

        return $this;
    }

    public function getPublishableKey(): ?string
    {
        return $this->publishableKey;
    }

    public function setPublishableKey(?string $publishableKey): self
    {
        $this->publishableKey = $publishableKey;

        return $this;
    }

    public function getCurrency(): ?string
    {
        return $this->currency;
    }

    public function setCurrency(?string $currency): self
    {
        $this->currency = $currency;

        return $this;
    }
}
