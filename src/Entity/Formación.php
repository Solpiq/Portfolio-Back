<?php

namespace App\Entity;

use ApiPlatform\Metadata\ApiResource;
use App\Repository\FormaciónRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: FormaciónRepository::class)]
#[ApiResource]
class Formación
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $Título = null;

    #[ORM\Column(length: 255)]
    private ?string $Centro = null;

    #[ORM\Column(length: 255)]
    private ?string $Duración = null;

    #[ORM\Column(length: 255)]
    private ?string $Datetime = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $F_fin = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTítulo(): ?string
    {
        return $this->Título;
    }

    public function setTítulo(string $Título): static
    {
        $this->Título = $Título;

        return $this;
    }

    public function getCentro(): ?string
    {
        return $this->Centro;
    }

    public function setCentro(string $Centro): static
    {
        $this->Centro = $Centro;

        return $this;
    }

    public function getDuración(): ?string
    {
        return $this->Duración;
    }

    public function setDuración(string $Duración): static
    {
        $this->Duración = $Duración;

        return $this;
    }

    public function getDatetime(): ?string
    {
        return $this->Datetime;
    }

    public function setDatetime(string $Datetime): static
    {
        $this->Datetime = $Datetime;

        return $this;
    }

    public function getFFin(): ?\DateTimeInterface
    {
        return $this->F_fin;
    }

    public function setFFin(\DateTimeInterface $F_fin): static
    {
        $this->F_fin = $F_fin;

        return $this;
    }
}
