<?php

namespace App\Entity;

use App\Repository\TestsRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: TestsRepository::class)]
class Tests
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(nullable: true)]
    private ?int $vma = null;

    #[ORM\Column(length: 255)]
    private ?string $cooper = null;

    #[ORM\Column(nullable: true)]
    private ?int $jongle_gauche = null;

    #[ORM\Column(nullable: true)]
    private ?int $jongle_droit = null;

    #[ORM\Column(nullable: true)]
    private ?int $jongle_tete = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $date = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getVma(): ?int
    {
        return $this->vma;
    }

    public function setVma(?int $vma): static
    {
        $this->vma = $vma;

        return $this;
    }

    public function getCooper(): ?string
    {
        return $this->cooper;
    }

    public function setCooper(?string $cooper): self
    {
        $this->cooper = $cooper;

        return $this;
    }

    public function getJongleGauche(): ?int
    {
        return $this->jongle_gauche;
    }

    public function setJongleGauche(?int $jongle_gauche): static
    {
        $this->jongle_gauche = $jongle_gauche;

        return $this;
    }

    public function getJongleDroit(): ?int
    {
        return $this->jongle_droit;
    }

    public function setJongleDroit(?int $jongle_droit): static
    {
        $this->jongle_droit = $jongle_droit;

        return $this;
    }

    public function getJongleTete(): ?int
    {
        return $this->jongle_tete;
    }

    public function setJongleTete(?int $jongle_tete): static
    {
        $this->jongle_tete = $jongle_tete;

        return $this;
    }

    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(?\DateTimeInterface $date): static
    {
        $this->date = $date;

        return $this;
    }
}