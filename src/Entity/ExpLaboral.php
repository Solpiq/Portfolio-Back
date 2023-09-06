<?php

namespace App\Entity;

use ApiPlatform\Metadata\ApiResource;
use App\Repository\ExpLaboralRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ExpLaboralRepository::class)]
#[ApiResource]
class ExpLaboral
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $N_empresa = null;

    #[ORM\Column(length: 255)]
    private ?string $puesto = null;

    #[ORM\Column(length: 255)]
    private ?string $Descripción = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $F_inicio = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $F_fin = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNEmpresa(): ?string
    {
        return $this->N_empresa;
    }

    public function setNEmpresa(string $N_empresa): static
    {
        $this->N_empresa = $N_empresa;

        return $this;
    }

    public function getPuesto(): ?string
    {
        return $this->puesto;
    }

    public function setPuesto(string $puesto): static
    {
        $this->puesto = $puesto;

        return $this;
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

    public function getFInicio(): ?\DateTimeInterface
    {
        return $this->F_inicio;
    }

    public function setFInicio(\DateTimeInterface $F_inicio): static
    {
        $this->F_inicio = $F_inicio;

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
