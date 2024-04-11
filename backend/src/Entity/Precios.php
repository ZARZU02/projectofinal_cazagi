<?php

namespace App\Entity;

use App\Repository\PreciosRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PreciosRepository::class)]
class Precios
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $nombre_plan = null;

    #[ORM\Column(length: 255)]
    private ?string $Precio = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $duracion = null;


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

    public function getPrecio(): ?string
    {
        return $this->Precio;
    }

    public function setPrecio(string $Precio): static
    {
        $this->Precio = $Precio;

        return $this;
    }

    public function getDuracion(): ?\DateTimeInterface
    {
        return $this->duracion;
    }

    public function setDuracion(\DateTimeInterface $duracion): static
    {
        $this->duracion = $duracion;

        return $this;
    }

   
}
