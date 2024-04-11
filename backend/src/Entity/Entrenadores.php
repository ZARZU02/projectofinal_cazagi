<?php

namespace App\Entity;

use App\Repository\EntrenadoresRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: EntrenadoresRepository::class)]
class Entrenadores
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $nombre = null;

    #[ORM\Column(length: 255)]
    private ?string $apellido = null;

    #[ORM\Column(length: 255)]
    private ?string $especialidad = null;

    #[ORM\Column(length: 255)]
    private ?string $experiencia = null;

    #[ORM\Column(length: 255)]
    private ?string $certificaciones = null;


    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNombre(): ?string
    {
        return $this->nombre;
    }

    public function setNombre(string $nombre): static
    {
        $this->nombre = $nombre;

        return $this;
    }

    public function getApellido(): ?string
    {
        return $this->apellido;
    }

    public function setApellido(string $apellido): static
    {
        $this->apellido = $apellido;

        return $this;
    }

    public function getEspecialidad(): ?string
    {
        return $this->especialidad;
    }

    public function setEspecialidad(string $especialidad): static
    {
        $this->especialidad = $especialidad;

        return $this;
    }

    public function getExperiencia(): ?string
    {
        return $this->experiencia;
    }

    public function setExperiencia(string $experiencia): static
    {
        $this->experiencia = $experiencia;

        return $this;
    }

    public function getCertificaciones(): ?string
    {
        return $this->certificaciones;
    }

    public function setCertificaciones(string $certificaciones): static
    {
        $this->certificaciones = $certificaciones;

        return $this;
    }

   
}
