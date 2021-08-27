<?php

namespace App\Entity;

use App\Repository\QrReponseRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=QrReponseRepository::class)
 */
class QrReponse
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=1000)
     */
    private $question;

    /**
     * @ORM\Column(type="string", length=4000)
     */
    private $reponse;

    /**
     * @ORM\Column(type="string", length=1000)
     */
    private $keywords;

    /**
     * @ORM\Column(type="string", length=500)
     */
    private $meta_tag;

    public function getId(): ?int
    {
        return $this->id;
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

    public function setReponse(string $reponse): self
    {
        $this->reponse = $reponse;

        return $this;
    }

    public function getKeywords(): ?string
    {
        return $this->keywords;
    }

    public function setKeywords(string $keywords): self
    {
        $this->keywords = $keywords;

        return $this;
    }

    public function getMetaTag(): ?string
    {
        return $this->meta_tag;
    }

    public function setMetaTag(string $meta_tag): self
    {
        $this->meta_tag = $meta_tag;

        return $this;
    }
}
