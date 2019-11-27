<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\TennisStringRepository")
 */
class TennisString
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
    private $brand;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $model;

    /**
     * @ORM\Column(type="float")
     */
    private $gauge;

    /**
     * @ORM\Column(type="integer")
     */
    private $longTension;

    /**
     * @ORM\Column(type="integer")
     */
    private $crossTension;

    /**
     * @ORM\Column(type="date")
     */
    private $date;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Racket", inversedBy="idString")
     */
    private $idRacket;


    public function getId(): ?int
    {
        return $this->id;
    }

    public function getBrand(): ?string
    {
        return $this->brand;
    }

    public function setBrand(string $brand): self
    {
        $this->brand = $brand;

        return $this;
    }

    public function getModel(): ?string
    {
        return $this->model;
    }

    public function setModel(string $model): self
    {
        $this->model = $model;

        return $this;
    }

    public function getGauge(): ?float
    {
        return $this->gauge;
    }

    public function setGauge(float $gauge): self
    {
        $this->gauge = $gauge;

        return $this;
    }

    public function getLongTension(): ?int
    {
        return $this->longTension;
    }

    public function setLongTension(int $longTension): self
    {
        $this->longTension = $longTension;

        return $this;
    }

    public function getCrossTension(): ?int
    {
        return $this->crossTension;
    }

    public function setCrossTension(int $crossTension): self
    {
        $this->crossTension = $crossTension;

        return $this;
    }

    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(\DateTimeInterface $date): self
    {
        $this->date = $date;

        return $this;
    }

    public function getIdRacket(): ?Racket
    {
        return $this->idRacket;
    }

    public function setIdRacket(?Racket $idRacket): self
    {
        $this->idRacket = $idRacket;

        return $this;
    }

}
