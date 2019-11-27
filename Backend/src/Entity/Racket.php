<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\RacketRepository")
 */
class Racket
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
     * @ORM\Column(type="boolean")
     */
    private $stringed;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Person", inversedBy="idRacket")
     */
    private $idPerson;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\TennisString", mappedBy="idRacket")
     */
    private $idString;

    public function __construct()
    {
        $this->idString = new ArrayCollection();
    }

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

    public function getStringed(): ?bool
    {
        return $this->stringed;
    }

    public function setStringed(bool $stringed): self
    {
        $this->stringed = $stringed;

        return $this;
    }

    public function getIdPerson(): ?Person
    {
        return $this->idPerson;
    }

    public function setIdPerson(?Person $idPerson): self
    {
        $this->idPerson = $idPerson;

        return $this;
    }

    /**
     * @return Collection|TennisString[]
     */
    public function getIdString(): Collection
    {
        return $this->idString;
    }

    public function addIdString(TennisString $idString): self
    {
        if (!$this->idString->contains($idString)) {
            $this->idString[] = $idString;
            $idString->setIdRacket($this);
        }

        return $this;
    }

    public function removeIdString(TennisString $idString): self
    {
        if ($this->idString->contains($idString)) {
            $this->idString->removeElement($idString);
            // set the owning side to null (unless already changed)
            if ($idString->getIdRacket() === $this) {
                $idString->setIdRacket(null);
            }
        }

        return $this;
    }

    public function __toString() {
        $str = $this->brand." ".$this->model;
        return $str;
    }



}
