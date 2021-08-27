<?php

namespace App\Entity;

use App\Repository\UserRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=UserRepository::class)
 */
class User
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
     * @ORM\Column(type="string", length=255)
     */
    private $password;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $email_token;

    /**
     * @ORM\OneToMany(targetEntity=QrUser::class, mappedBy="user")
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

    public function getNom(): ?string
    {
        return $this->nom;
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
}
