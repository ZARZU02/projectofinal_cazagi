<?php

namespace App\Entity;

use App\Repository\NoticiasRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: NoticiasRepository::class)]
class Noticias
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $titulo = null;

    #[ORM\Column(length: 255)]
    private ?string $nombre_deporte = null;

    #[ORM\Column(length: 255)]
    private ?string $descripcion_deporte = null;

    #[ORM\Column(length: 255)]
    private ?string $recurso_multimedia = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitulo(): ?string
    {
        return $this->titulo;
    }

    public function setTitulo(string $titulo): static
    {
        $this->titulo = $titulo;

        return $this;
    }

    public function getNombreDeporte(): ?string
    {
        return $this->nombre_deporte;
    }

    public function setNombreDeporte(string $nombre_deporte): static
    {
        $this->nombre_deporte = $nombre_deporte;

        return $this;
    }

    public function getDescripcionDeporte(): ?string
    {
        return $this->descripcion_deporte;
    }

    public function setDescripcionDeporte(string $descripcion_deporte): static
    {
        $this->descripcion_deporte = $descripcion_deporte;

        return $this;
    }

    public function getRecursoMultimedia(): ?string
    {
        return $this->recurso_multimedia;
    }

    public function setRecursoMultimedia(string $recurso_multimedia): static
    {
        $this->recurso_multimedia = $recurso_multimedia;

        return $this;
    }
}
