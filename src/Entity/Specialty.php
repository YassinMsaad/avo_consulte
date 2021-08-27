<?php

namespace App\Entity;

use App\Repository\SpecialtyRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=SpecialtyRepository::class)
 */
class Specialty
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\OneToMany(targetEntity=Tribunaux::class, mappedBy="type")
     */
    private $tribunauxes;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $libelle_ar;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $libelle_fr;

    public function __construct()
    {
        $this->tribunauxes = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }


    /**
     * @return Collection|Tribunaux[]
     */
    public function getTribunauxes(): Collection
    {
        return $this->tribunauxes;
    }

    public function addTribunaux(Tribunaux $tribunaux): self
    {
        if (!$this->tribunauxes->contains($tribunaux)) {
            $this->tribunauxes[] = $tribunaux;
            $tribunaux->setType($this);
        }

        return $this;
    }

    public function removeTribunaux(Tribunaux $tribunaux): self
    {
        if ($this->tribunauxes->removeElement($tribunaux)) {
            // set the owning side to null (unless already changed)
            if ($tribunaux->getType() === $this) {
                $tribunaux->setType(null);
            }
        }

        return $this;
    }

    public function getLibelleAr(): ?string
    {
        return $this->libelle_ar;
    }

    public function setLibelleAr(string $libelle_ar): self
    {
        $this->libelle_ar = $libelle_ar;

        return $this;
    }

    public function getLibelleFr(): ?string
    {
        return $this->libelle_fr;
    }

    public function setLibelleFr(string $libelle_fr): self
    {
        $this->libelle_fr = $libelle_fr;

        return $this;
    }
}
