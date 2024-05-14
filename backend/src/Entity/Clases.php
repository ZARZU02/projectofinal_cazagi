<?php

namespace App\Entity;

use App\Repository\ClasesRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ClasesRepository::class)]
class Clases
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $deporte = null;

    #[ORM\Column(length: 255)]
    private ?string $entrenador = null;

    #[ORM\Column(length: 255)]
    private ?string $dia = null;

    #[ORM\Column(type: Types::TIME_MUTABLE)]
    private ?\DateTimeInterface $hora = null;

    #[ORM\OneToMany(mappedBy: 'clase', targetEntity: Alumnos::class)]
    private Collection $alumnos;

    public function __construct()
    {
        $this->alumnos = new ArrayCollection();
    }




 


   

    public function getId(): ?int
    {
        return $this->id;
    }

 



  

    public function getDeporte(): ?string
    {
        return $this->deporte;
    }

    public function setDeporte(string $deporte): static
    {
        $this->deporte = $deporte;

        return $this;
    }

  

   

    public function getEntrenador(): ?string
    {
        return $this->entrenador;
    }

    public function setEntrenador(string $entrenador): static
    {
        $this->entrenador = $entrenador;

        return $this;
    }

    public function getDia(): ?string
    {
        return $this->dia;
    }

    public function setDia(string $dia): static
    {
        $this->dia = $dia;

        return $this;
    }

    public function getHora(): ?\DateTimeInterface
    {
        return $this->hora;
    }

    public function setHora(\DateTimeInterface $hora): static
    {
        $this->hora = $hora;

        return $this;
    }

    /**
     * @return Collection<int, Alumnos>
     */
    public function getAlumnos(): Collection
    {
        return $this->alumnos;
    }

    public function addAlumno(Alumnos $alumno): static
    {
        if (!$this->alumnos->contains($alumno)) {
            $this->alumnos->add($alumno);
            $alumno->setClase($this);
        }

        return $this;
    }

    public function removeAlumno(Alumnos $alumno): static
    {
        if ($this->alumnos->removeElement($alumno)) {
            // set the owning side to null (unless already changed)
            if ($alumno->getClase() === $this) {
                $alumno->setClase(null);
            }
        }

        return $this;
    }



   
    
}
