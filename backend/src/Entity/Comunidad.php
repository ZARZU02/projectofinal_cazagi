<?php

namespace App\Entity;

use App\Repository\ComunidadRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ComunidadRepository::class)]
class Comunidad
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $nombre_usuario = null;

    #[ORM\Column(length: 255)]
    private ?string $publicacion = null;

   
    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNombreUsuario(): ?string
    {
        return $this->nombre_usuario;
    }

    public function setNombreUsuario(string $nombre_usuario): static
    {
        $this->nombre_usuario = $nombre_usuario;

        return $this;
    }

    public function getPublicacion(): ?string
    {
        return $this->publicacion;
    }

    public function setPublicacion(string $publicacion): static
    {
        $this->publicacion = $publicacion;

        return $this;
    }


}
