<?php

namespace App\Entity;

use App\Repository\TribunauxRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=TribunauxRepository::class)
 */
class Tribunaux
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nom_fr;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nom_ar;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $adresse_fr;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $adresse_ar;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $gouvernorat_fr;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $gouvernorat_ar;

    /**
     * @ORM\ManyToOne(targetEntity=Specialty::class, inversedBy="tribunauxes")
     * @ORM\JoinColumn(nullable=false)
     */
    private $type;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomFr(): ?string
    {
        return $this->nom_fr;
    }

    public function setNomFr(string $nom_fr): self
    {
        $this->nom_fr = $nom_fr;

        return $this;
    }

    public function getNomAr(): ?string
    {
        return $this->nom_ar;
    }

    public function setNomAr(string $nom_ar): self
    {
        $this->nom_ar = $nom_ar;

        return $this;
    }

    public function getAdresseFr(): ?string
    {
        return $this->adresse_fr;
    }

    public function setAdresseFr(string $adresse_fr): self
    {
        $this->adresse_fr = $adresse_fr;

        return $this;
    }

    public function getAdresseAr(): ?string
    {
        return $this->adresse_ar;
    }

    public function setAdresseAr(string $adresse_ar): self
    {
        $this->adresse_ar = $adresse_ar;

        return $this;
    }

    public function getGouvernoratFr(): ?string
    {
        return $this->gouvernorat_fr;
    }

    public function setGouvernoratFr(string $gouvernorat_fr): self
    {
        $this->gouvernorat_fr = $gouvernorat_fr;

        return $this;
    }

    public function getGouvernoratAr(): ?string
    {
        return $this->gouvernorat_ar;
    }

    public function setGouvernoratAr(string $gouvernorat_ar): self
    {
        $this->gouvernorat_ar = $gouvernorat_ar;

        return $this;
    }

    public function getType(): ?Specialty
    {
        return $this->type;
    }

    public function setType(?Specialty $type): self
    {
        $this->type = $type;

        return $this;
    }
}
