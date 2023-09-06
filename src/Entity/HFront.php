<?php

namespace App\Entity;

use ApiPlatform\Metadata\ApiResource;
use App\Repository\HFrontRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: HFrontRepository::class)]
#[ApiResource]
class HFront
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $Nombre = null;

    #[ORM\Column(length: 255)]
    private ?string $Logo = null;

    #[ORM\Column(length: 255)]
    private ?string $Nivel = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNombre(): ?string
    {
        return $this->Nombre;
    }

    public function setNombre(string $Nombre): static
    {
        $this->Nombre = $Nombre;

        return $this;
    }

    public function getLogo(): ?string
    {
        return $this->Logo;
    }

    public function setLogo(string $Logo): static
    {
        $this->Logo = $Logo;

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
}
