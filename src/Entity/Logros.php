<?php

namespace App\Entity;

use ApiPlatform\Metadata\ApiResource;
use App\Repository\LogrosRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: LogrosRepository::class)]
#[ApiResource]
class Logros
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $Descripción = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDescripción(): ?string
    {
        return $this->Descripción;
    }

    public function setDescripción(string $Descripción): static
    {
        $this->Descripción = $Descripción;

        return $this;
    }
}
