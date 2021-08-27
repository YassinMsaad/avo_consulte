<?php

namespace App\Entity;

use App\Repository\QrUserRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=QrUserRepository::class)
 */
class QrUser
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
    private $qtitle;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $question;

    /**
     * @ORM\Column(type="string", length=1000, nullable=true)
     */
    private $reponse;

    /**
     * @ORM\ManyToOne(targetEntity=avocat::class, inversedBy="qrUsers")
     */
    private $avocat_id;

    /**
     * @ORM\ManyToOne(targetEntity=user::class, inversedBy="qrUsers")
     * @ORM\JoinColumn(nullable=false)
     */
    private $user;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getQtitle(): ?string
    {
        return $this->qtitle;
    }

    public function setQtitle(string $qtitle): self
    {
        $this->qtitle = $qtitle;

        return $this;
    }

    public function getQuestion(): ?string
    {
        return $this->question;
    }

    public function setQuestion(string $question): self
    {
        $this->question = $question;

        return $this;
    }

    public function getReponse(): ?string
    {
        return $this->reponse;
    }

    public function setReponse(?string $reponse): self
    {
        $this->reponse = $reponse;

        return $this;
    }

    public function getAvocatId(): ?avocat
    {
        return $this->avocat_id;
    }

    public function setAvocatId(?avocat $avocat_id): self
    {
        $this->avocat_id = $avocat_id;

        return $this;
    }

    public function getUser(): ?user
    {
        return $this->user;
    }

    public function setUser(?user $user): self
    {
        $this->user = $user;

        return $this;
    }
}
