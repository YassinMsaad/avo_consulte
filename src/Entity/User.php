<?php

namespace App\Entity;

use App\Repository\UserRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Security\Core\User\PasswordAuthenticatedUserInterface;
use Symfony\Component\Security\Core\User\UserInterface;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=UserRepository::class)
 * 
 */
class User implements UserInterface, PasswordAuthenticatedUserInterface  {
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nom;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $prenom;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $email;

    /**
     * @ORM\Column(type="integer")
     */
    private $telephone;

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
    private $email_token;
     /**
     * @ORM\Column(type="json")
     */
    private $roles = [];

    /**
     * @ORM\OneToMany(targetEntity=QrUser::class, mappedBy="user")
     */
    private $qrUsers;

    /**
     * @ORM\OneToMany(targetEntity=RendezVous::class, mappedBy="iduser")
     */
    private $rendezVouses;

    public function getUserIdentifier(): string
    {
        return (string) $this->email;
    }

    public function __construct()
    {
        $this->qrUsers = new ArrayCollection();
        $this->rendezVouses = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }
     /**
     * @deprecated since Symfony 5.3, use getUserIdentifier instead
     */
    public function getUsername(): string
    {
        return (string) $this->email;
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

    public function setRoles(array $roles): self
    {
        $this->roles = $roles;

        return $this;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function setPrenom(string $prenom): self
    {
        $this->prenom = $prenom;

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

    public function getTelephone(): ?int
    {
        return $this->telephone;
    }

    public function setTelephone(int $telephone): self
    {
        $this->telephone = $telephone;

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

    public function getEmailToken(): ?string
    {
        return $this->email_token;
    }

    public function setEmailToken(string $email_token): self
    {
        $this->email_token = $email_token;

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
            $qrUser->setUser($this);
        }

        return $this;
    }

    public function removeQrUser(QrUser $qrUser): self
    {
        if ($this->qrUsers->removeElement($qrUser)) {
            // set the owning side to null (unless already changed)
            if ($qrUser->getUser() === $this) {
                $qrUser->setUser(null);
            }
        }

        return $this;
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

    /**
     * @see UserInterface
     */
    public function eraseCredentials()
    {
        // If you store any temporary, sensitive data on the user, clear it here
        // $this->plainPassword = null;
    }

    /**
     * @return Collection|RendezVous[]
     */
    public function getRendezVouses(): Collection
    {
        return $this->rendezVouses;
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
