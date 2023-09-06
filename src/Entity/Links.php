<?php

namespace App\Entity;

use ApiPlatform\Metadata\ApiResource;
use App\Repository\LinksRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: LinksRepository::class)]
#[ApiResource]
class Links
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $Enlace = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEnlace(): ?string
    {
        return $this->Enlace;
    }

    public function setEnlace(string $Enlace): static
    {
        $this->Enlace = $Enlace;

        return $this;
    }
}
