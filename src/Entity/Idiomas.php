<?php

namespace App\Entity;

use ApiPlatform\Metadata\ApiResource;
use App\Repository\IdiomasRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: IdiomasRepository::class)]
#[ApiResource]
class Idiomas
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $idioma = null;

    #[ORM\Column(length: 255)]
    private ?string $Nivel = null;

    #[ORM\Column(length: 255)]
    private ?string $Titulación = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdioma(): ?string
    {
        return $this->idioma;
    }

    public function setIdioma(string $idioma): static
    {
        $this->idioma = $idioma;

        return $this;
    }

    public function getNivel(): ?string
    {
        return $this->Nivel;
    }

    public function setNivel(string $Nivel): static
    {
        $this->Nivel = $Nivel;

        return $this;
    }

    public function getTitulación(): ?string
    {
        return $this->Titulación;
    }

    public function setTitulación(string $Titulación): static
    {
        $this->Titulación = $Titulación;

        return $this;
    }
}
