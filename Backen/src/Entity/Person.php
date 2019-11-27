<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\PersonRepository")
 */
class Person
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
    private $name;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $firstname;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $phone;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $mail;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $note;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Racket", mappedBy="idPerson")
     */
    private $idRacket;

    public function __construct()
    {
        $this->idRacket = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getFirstname(): ?string
    {
        return $this->firstname;
    }

    public function setFirstname(?string $firstname): self
    {
        $this->firstname = $firstname;

        return $this;
    }

    public function getPhone(): ?string
    {
        return $this->phone;
    }

    public function setPhone(string $phone): self
    {
        $this->phone = $phone;

        return $this;
    }

    public function getMail(): ?string
    {
        return $this->mail;
    }

    public function setMail(?string $mail): self
    {
        $this->mail = $mail;

        return $this;
    }

    public function getNote(): ?string
    {
        return $this->note;
    }

    public function setNote(?string $note): self
    {
        $this->note = $note;

        return $this;
    }

    /**
     * @return Collection|Racket[]
     */
    public function getIdRacket(): Collection
    {
        return $this->idRacket;
    }

    public function addIdRacket(Racket $idRacket): self
    {
        if (!$this->idRacket->contains($idRacket)) {
            $this->idRacket[] = $idRacket;
            $idRacket->setIdPerson($this);
        }

        return $this;
    }

    public function removeIdRacket(Racket $idRacket): self
    {
        if ($this->idRacket->contains($idRacket)) {
            $this->idRacket->removeElement($idRacket);
            // set the owning side to null (unless already changed)
            if ($idRacket->getIdPerson() === $this) {
                $idRacket->setIdPerson(null);
            }
        }

        return $this;
    }

    public function __toString() {
        $str = $this->name." ".$this->firstname;
        return $str;
    }
}
