<?php

namespace App\Entity;

use App\Repository\PlanesPreciosRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PlanesPreciosRepository::class)]
class PlanesPrecios
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $nombre_plan = null;

    #[ORM\Column(length: 255)]
    private ?string $precio_plan = null;

    #[ORM\Column(length: 255)]
    private ?string $descripcion_plan = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNombrePlan(): ?string
    {
        return $this->nombre_plan;
    }

    public function setNombrePlan(string $nombre_plan): static
    {
        $this->nombre_plan = $nombre_plan;

        return $this;
    }

    public function getPrecioPlan(): ?string
    {
        return $this->precio_plan;
    }

    public function setPrecioPlan(string $precio_plan): static
    {
        $this->precio_plan = $precio_plan;

        return $this;
    }

    public function getDescripcionPlan(): ?string
    {
        return $this->descripcion_plan;
    }

    public function setDescripcionPlan(string $descripcion_plan): static
    {
        $this->descripcion_plan = $descripcion_plan;

        return $this;
    }
}
