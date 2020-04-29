<?php

namespace App\Entity\Admin;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\Admin\PaypalSettingRepository")
 */
class PaypalSetting
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
    private $email;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $currency;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $appClientId;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $AppClientSecret;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $paypalSandbox;

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

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(?string $email): self
    {
        $this->email = $email;

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

    public function getAppClientSecret(): ?string
    {
        return $this->AppClientSecret;
    }

    public function setAppClientSecret(?string $AppClientSecret): self
    {
        $this->AppClientSecret = $AppClientSecret;

        return $this;
    }

    public function getPaypalSandbox(): ?bool
    {
        return $this->paypalSandbox;
    }

    public function setPaypalSandbox(?bool $paypalSandbox): self
    {
        $this->paypalSandbox = $paypalSandbox;

        return $this;
    }

    public function getAppClientId()
    {
        return $this->appClientId;
    }


    public function setAppClientId(?string $appClientId): self
    {
        $this->appClientId = $appClientId;
        return $this;
    }

}
