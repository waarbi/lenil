<?php

namespace App\Entity\Admin;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\HomePageSectionRepository")
 */
class HomePageSection
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
    private $heading;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $shortHeading;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getHeading(): ?string
    {
        return $this->heading;
    }

    public function setHeading(?string $heading): self
    {
        $this->heading = $heading;

        return $this;
    }

    public function getShortHeading(): ?string
    {
        return $this->shortHeading;
    }

    public function setShortHeading(?string $shortHeading): self
    {
        $this->shortHeading = $shortHeading;

        return $this;
    }
}
