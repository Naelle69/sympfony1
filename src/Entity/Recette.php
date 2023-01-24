<?php

namespace App\Entity;

use App\Repository\RecetteRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: RecetteRepository::class)]
class Recette
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $image = null;

    #[ORM\Column(length: 100)]
    private ?string $titre1 = null;

    #[ORM\Column(length: 100)]
    private ?string $titre2 = null;

    #[ORM\Column(length: 100)]
    private ?string $titreback = null;

    #[ORM\Column(length: 255)]
    private ?string $texte = null;

    #[ORM\Column(length: 255)]
    private ?string $imageback = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(string $image): self
    {
        $this->image = $image;

        return $this;
    }

    public function getTitre1(): ?string
    {
        return $this->titre1;
    }

    public function setTitre1(string $titre1): self
    {
        $this->titre1 = $titre1;

        return $this;
    }

    public function getTitre2(): ?string
    {
        return $this->titre2;
    }

    public function setTitre2(string $titre2): self
    {
        $this->titre2 = $titre2;

        return $this;
    }

    public function getTitreback(): ?string
    {
        return $this->titreback;
    }

    public function setTitreback(string $titreback): self
    {
        $this->titreback = $titreback;

        return $this;
    }

    public function getTexte(): ?string
    {
        return $this->texte;
    }

    public function setTexte(string $texte): self
    {
        $this->texte = $texte;

        return $this;
    }

    public function getImageback(): ?string
    {
        return $this->imageback;
    }

    public function setImageback(string $imageback): self
    {
        $this->imageback = $imageback;

        return $this;
    }
}
