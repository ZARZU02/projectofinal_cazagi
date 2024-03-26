<?php

namespace App\Entity;

use App\Repository\InstructoresRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: InstructoresRepository::class)]
class Instructores
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $nombre_instructor = null;

    #[ORM\Column(length: 255)]
    private ?string $especialidad = null;

    #[ORM\OneToMany(targetEntity: Clases::class, mappedBy: 'instructor')]
    private Collection $instructor;

    public function __construct()
    {
        $this->instructor = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNombreInstructor(): ?string
    {
        return $this->nombre_instructor;
    }

    public function setNombreInstructor(string $nombre_instructor): static
    {
        $this->nombre_instructor = $nombre_instructor;

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

    /**
     * @return Collection<int, Clases>
     */
    public function getInstructor(): Collection
    {
        return $this->instructor;
    }

    public function addInstructor(Clases $instructor): static
    {
        if (!$this->instructor->contains($instructor)) {
            $this->instructor->add($instructor);
            $instructor->setInstructor($this);
        }

        return $this;
    }

    public function removeInstructor(Clases $instructor): static
    {
        if ($this->instructor->removeElement($instructor)) {
            // set the owning side to null (unless already changed)
            if ($instructor->getInstructor() === $this) {
                $instructor->setInstructor(null);
            }
        }

        return $this;
    }
}
