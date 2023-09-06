<?php

namespace App\Entity;

use ApiPlatform\Metadata\ApiResource;
use App\Repository\HBackRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: HBackRepository::class)]
#[ApiResource]
class HBack
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $Nombre = null;

    #[ORM\Column(length: 255)]
    private ?string $logo = null;

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
        return $this->logo;
    }

    public function setLogo(string $logo): static
    {
        $this->logo = $logo;

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
