<?php

namespace App\Entity;

use App\Repository\CategorieRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=CategorieRepository::class)
 */
class Categorie
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
    private $Libelle_ar;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Libelle_fr;

    /**
     * @ORM\OneToMany(targetEntity=SubCategorie::class, mappedBy="categorie")
     */
    private $subCategories;

    public function __construct()
    {
        $this->subCategories = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLibelleAr(): ?string
    {
        return $this->Libelle_ar;
    }

    public function setLibelleAr(string $Libelle_ar): self
    {
        $this->Libelle_ar = $Libelle_ar;

        return $this;
    }

    public function getLibelleFr(): ?string
    {
        return $this->Libelle_fr;
    }

    public function setLibelleFr(string $Libelle_fr): self
    {
        $this->Libelle_fr = $Libelle_fr;

        return $this;
    }

    /**
     * @return Collection|SubCategorie[]
     */
    public function getSubCategories(): Collection
    {
        return $this->subCategories;
    }

    public function addSubCategory(SubCategorie $subCategory): self
    {
        if (!$this->subCategories->contains($subCategory)) {
            $this->subCategories[] = $subCategory;
            $subCategory->setCategorie($this);
        }

        return $this;
    }

    public function removeSubCategory(SubCategorie $subCategory): self
    {
        if ($this->subCategories->removeElement($subCategory)) {
            // set the owning side to null (unless already changed)
            if ($subCategory->getCategorie() === $this) {
                $subCategory->setCategorie(null);
            }
        }

        return $this;
    }
}
