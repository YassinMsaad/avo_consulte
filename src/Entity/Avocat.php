<?php

namespace App\Entity;

use App\Repository\AvocatRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=AvocatRepository::class)
 */
class Avocat
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=67)
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
    private $gouvernorat_ar;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $gouvernorat_fr;

    /**
     * @ORM\Column(type="integer")
     */
    private $telephone;

    /**
     * @ORM\Column(type="integer")
     */
    private $mobile;

    /**
     * @ORM\Column(type="integer")
     */
    private $fax;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $email;

    /**
     * @ORM\Column(type="boolean")
     */
    private $subed;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $img_url;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $password;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $specialite;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $commentaire;

    /**
     * @ORM\OneToMany(targetEntity=QrUser::class, mappedBy="avocat_id")
     */
    private $qrUsers;

    public function __construct()
    {
        $this->qrUsers = new ArrayCollection();
    }

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

    public function getGouvernoratAr(): ?string
    {
        return $this->gouvernorat_ar;
    }

    public function setGouvernoratAr(string $gouvernorat_ar): self
    {
        $this->gouvernorat_ar = $gouvernorat_ar;

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

    public function getTelephone(): ?int
    {
        return $this->telephone;
    }

    public function setTelephone(int $telephone): self
    {
        $this->telephone = $telephone;

        return $this;
    }

    public function getMobile(): ?int
    {
        return $this->mobile;
    }

    public function setMobile(int $mobile): self
    {
        $this->mobile = $mobile;

        return $this;
    }

    public function getFax(): ?int
    {
        return $this->fax;
    }

    public function setFax(int $fax): self
    {
        $this->fax = $fax;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getSubed(): ?bool
    {
        return $this->subed;
    }

    public function setSubed(bool $subed): self
    {
        $this->subed = $subed;

        return $this;
    }

    public function getImgUrl(): ?string
    {
        return $this->img_url;
    }

    public function setImgUrl(string $img_url): self
    {
        $this->img_url = $img_url;

        return $this;
    }

    public function getPassword(): ?string
    {
        return $this->password;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;

        return $this;
    }

    public function getSpecialite(): ?string
    {
        return $this->specialite;
    }

    public function setSpecialite(string $specialite): self
    {
        $this->specialite = $specialite;

        return $this;
    }

    public function getCommentaire(): ?string
    {
        return $this->commentaire;
    }

    public function setCommentaire(?string $commentaire): self
    {
        $this->commentaire = $commentaire;

        return $this;
    }

    /**
     * @return Collection|QrUser[]
     */
    public function getQrUsers(): Collection
    {
        return $this->qrUsers;
    }

    public function addQrUser(QrUser $qrUser): self
    {
        if (!$this->qrUsers->contains($qrUser)) {
            $this->qrUsers[] = $qrUser;
            $qrUser->setAvocatId($this);
        }

        return $this;
    }

    public function removeQrUser(QrUser $qrUser): self
    {
        if ($this->qrUsers->removeElement($qrUser)) {
            // set the owning side to null (unless already changed)
            if ($qrUser->getAvocatId() === $this) {
                $qrUser->setAvocatId(null);
            }
        }

        return $this;
    }
}
