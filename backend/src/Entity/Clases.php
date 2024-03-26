<?php

namespace App\Entity;

use App\Repository\ClasesRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ClasesRepository::class)]
class Clases
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $Nombre_Clase = null;

    #[ORM\Column(length: 255)]
    private ?string $Descripcion_clase = null;

    #[ORM\Column(length: 255)]
    private ?string $horario_clase = null;

    #[ORM\ManyToOne(inversedBy: 'instructor')]
    private ?Instructores $instructor = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNombreClase(): ?string
    {
        return $this->Nombre_Clase;
    }

    public function setNombreClase(string $Nombre_Clase): static
    {
        $this->Nombre_Clase = $Nombre_Clase;

        return $this;
    }

    public function getDescripcionClase(): ?string
    {
        return $this->Descripcion_clase;
    }

    public function setDescripcionClase(string $Descripcion_clase): static
    {
        $this->Descripcion_clase = $Descripcion_clase;

        return $this;
    }

    public function getHorarioClase(): ?string
    {
        return $this->horario_clase;
    }

    public function setHorarioClase(string $horario_clase): static
    {
        $this->horario_clase = $horario_clase;

        return $this;
    }

    public function getInstructor(): ?Instructores
    {
        return $this->instructor;
    }

    public function setInstructor(?Instructores $instructor): static
    {
        $this->instructor = $instructor;

        return $this;
    }
}
