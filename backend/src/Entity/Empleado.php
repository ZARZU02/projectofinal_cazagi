<?php

namespace App\Entity;

use App\Repository\EmpleadoRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: EmpleadoRepository::class)]
class Empleado
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $apellidos = null;

    #[ORM\Column(length: 255)]
    private ?string $oficio = null;

    #[ORM\Column(length: 255)]
    private ?string $jefe = null;

    #[ORM\OneToMany(mappedBy: 'pagos_no', targetEntity: Pagos::class)]
    private Collection $pagos;

    public function __construct()
    {
        $this->pagos = new ArrayCollection();
    }

   
    public function getId(): ?int
    {
        return $this->id;
    }

    public function getApellidos(): ?string
    {
        return $this->apellidos;
    }

    public function setApellidos(string $apellidos): static
    {
        $this->apellidos = $apellidos;

        return $this;
    }

    public function getOficio(): ?string
    {
        return $this->oficio;
    }

    public function setOficio(string $oficio): static
    {
        $this->oficio = $oficio;

        return $this;
    }

    public function getJefe(): ?string
    {
        return $this->jefe;
    }

    public function setJefe(string $jefe): static
    {
        $this->jefe = $jefe;

        return $this;
    }

    /**
     * @return Collection<int, Pagos>
     */
    public function getPagos(): Collection
    {
        return $this->pagos;
    }

    public function addPago(Pagos $pago): static
    {
        if (!$this->pagos->contains($pago)) {
            $this->pagos->add($pago);
            $pago->setPagosNo($this);
        }

        return $this;
    }

    public function removePago(Pagos $pago): static
    {
        if ($this->pagos->removeElement($pago)) {
            // set the owning side to null (unless already changed)
            if ($pago->getPagosNo() === $this) {
                $pago->setPagosNo(null);
            }
        }

        return $this;
    }

 

    

   

    
       
}
