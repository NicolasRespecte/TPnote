<?php

namespace App\Entity;

use App\Repository\FilmRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: FilmRepository::class)]
class Film
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 200)]
    private ?string $Titre = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $Image = null;

    #[ORM\Column(length: 200)]
    private ?string $Réalisateur = null;

    #[ORM\Column]
    private ?int $Durée = null;

    #[ORM\Column(length: 200)]
    private ?string $Genre = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitre(): ?string
    {
        return $this->Titre;
    }

    public function setTitre(string $Titre): static
    {
        $this->Titre = $Titre;

        return $this;
    }

    public function getImage(): ?string
    {
        return $this->Image;
    }

    public function setImage(string $Image): static
    {
        $this->Image = $Image;

        return $this;
    }

    public function getRéalisateur(): ?string
    {
        return $this->Réalisateur;
    }

    public function setRéalisateur(string $Réalisateur): static
    {
        $this->Réalisateur = $Réalisateur;

        return $this;
    }

    public function getDurée(): ?int
    {
        return $this->Durée;
    }

    public function setDurée(int $Durée): static
    {
        $this->Durée = $Durée;

        return $this;
    }

    public function getGenre(): ?string
    {
        return $this->Genre;
    }

    public function setGenre(string $Genre): static
    {
        $this->Genre = $Genre;

        return $this;
    }
}
