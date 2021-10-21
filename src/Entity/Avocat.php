<?php

namespace App\Entity;

use App\Repository\AvocatRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Security\Core\User\PasswordAuthenticatedUserInterface;
use Symfony\Component\Security\Core\User\UserInterface;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=AvocatRepository::class)
 */
class Avocat implements UserInterface, PasswordAuthenticatedUserInterface  
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;
 /**
     * @ORM\Column(type="json")
     */
    private $roles = [];
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
    private $gouvernorat_Ar;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $gouvernorat_Ar;

      /**
     * @ORM\Column(type="string", length=255)
     */
    private $delegationAr;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $delegationFr;

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
    private $subbed;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $img_url;

    /**
     * @var string The hashed password
     * @ORM\Column(type="string", length=255)
     * @Assert\Length(min="8", minMessage="Votre mot de passe doit depassé 8 caractéres")
     */
    private $password;
     /**
     * @Assert\EqualTo(propertyPath="password", message="Vous n'avez pas tapé le méme mot de passe")
     */
    private $confirm_password;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $specialite;
    /**
     * @ORM\Column(type="string", length=255)
     */
    private $tribunal;
    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $commentaire;
    


    /**
     * @ORM\OneToMany(targetEntity=QrUser::class, mappedBy="avocat_id")
     */
    private $qrUsers;

 /**
     * @ORM\OneToMany(targetEntity=RendezVous::class, mappedBy="idavocat")
     */
    private $rendezVouses;

    public function __construct()
    {
        $this->qrUsers = new ArrayCollection();
        $this->rendezVouses = new ArrayCollection();
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

    public function getDelegationFr(): ?string
    {
        return $this->delegationAr;
    }

    public function setDelegationFr(string $delegationFr): self
    {
        $this->delegationFr = $delegationFr;

        return $this;
    }
    public function getDelegationAr(): ?string
    {
        return $this->delegationAr;
    }

    public function setDelegationAr(string $delegationAr): self
    {
        $this->delegationAr = $delegationAr;

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
        return $this->gouvernorat_Ar;
    }

    public function setGouvernoratAr(string $gouvernorat_Ar): self
    {
        $this->gouvernorat_Ar = $gouvernorat_Ar;

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

    public function getSubbed(): ?bool
    {
        return $this->subbed;
    }

    public function setSubbed(bool $subbed): self
    {
        $this->subbed = $subbed;

        return $this;
    }

    public function getImg_Url(): ?string
    {
        return $this->img_url;
    }

    public function setImg_Url(string $img_url): self
    {
        $this->img_url = $img_url;

        return $this;
    }

    public function getPassword(): ?string
    {
        return $this->password;
    }
    public function getConfirmPassword(): ?string
    {
        return $this->confirm_password;
    }

    public function setConfirmPassword(string $confirm_password): self
    {
        $this->confirm_password = $confirm_password;

        return $this;
    }
    public function getSalt(): ?string
    {
        return null;
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
    public function getTribunal(): ?string
    {
        return $this->tribunal;
    }

    public function setTribunal(string $tribunal): self
    {
        $this->tribunal = $tribunal;

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
 /**
     * @return Collection|RendezVous[]
     */
    public function getRendezVouses(): Collection
    {
        return $this->rendezVouses;
    }
    /**
     * @see UserInterface
     */
    public function getRoles(): array
    {
        $roles = $this->roles;
        // guarantee every user at least has ROLE_USER
        $roles[] = 'ROLE_USER';

        return array_unique($roles);
    }
    /**
     * @deprecated since Symfony 5.3, use getUserIdentifier instead
     */
    public function getUsername(): string
    {
        return (string) $this->email;
    }
    public function eraseCredentials()
    {
        // If you store any temporary, sensitive data on the user, clear it here
        // $this->plainPassword = null;
    }
    public function setRoles(array $roles): self
    {
        $this->roles = $roles;

        return $this;
    }
    public function addRendezVouse(RendezVous $rendezVouse): self
    {
        if (!$this->rendezVouses->contains($rendezVouse)) {
            $this->rendezVouses[] = $rendezVouse;
            $rendezVouse->setIduser($this);
        }

        return $this;
    }

    public function removeRendezVouse(RendezVous $rendezVouse): self
    {
        if ($this->rendezVouses->removeElement($rendezVouse)) {
            // set the owning side to null (unless already changed)
            if ($rendezVouse->getIduser() === $this) {
                $rendezVouse->setIduser(null);
            }
        }

        return $this;
    }
}
    
    

