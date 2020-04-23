<?php

namespace App\Entity\Admin;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\Admin\GeneralPaymentSettingRepository")
 */
class GeneralPaymentSetting
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $priceFeaturedProposal;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $durationFeatured;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $commissionProcessing;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPriceFeaturedProposal(): ?float
    {
        return $this->priceFeaturedProposal;
    }

    public function setPriceFeaturedProposal(?float $priceFeaturedProposal): self
    {
        $this->priceFeaturedProposal = $priceFeaturedProposal;

        return $this;
    }

    public function getDurationFeatured(): ?int
    {
        return $this->durationFeatured;
    }

    public function setDurationFeatured(?int $durationFeatured): self
    {
        $this->durationFeatured = $durationFeatured;

        return $this;
    }

    public function getCommissionProcessing(): ?float
    {
        return $this->commissionProcessing;
    }

    public function setCommissionProcessing(?float $commissionProcessing): self
    {
        $this->commissionProcessing = $commissionProcessing;

        return $this;
    }
}
