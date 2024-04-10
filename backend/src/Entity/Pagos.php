<?php

namespace App\Entity;

use App\Repository\PagosRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PagosRepository::class)]
class Pagos
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $pedido_fecha = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $pedido_tipo = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $fecha_envio = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $total = null;

    #[ORM\ManyToOne(inversedBy: 'pagos')]
    private ?Empleado $pagos_no = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPedidoFecha(): ?string
    {
        return $this->pedido_fecha;
    }

    public function setPedidoFecha(?string $pedido_fecha): static
    {
        $this->pedido_fecha = $pedido_fecha;

        return $this;
    }

    public function getPedidoTipo(): ?string
    {
        return $this->pedido_tipo;
    }

    public function setPedidoTipo(?string $pedido_tipo): static
    {
        $this->pedido_tipo = $pedido_tipo;

        return $this;
    }

    public function getFechaEnvio(): ?string
    {
        return $this->fecha_envio;
    }

    public function setFechaEnvio(?string $fecha_envio): static
    {
        $this->fecha_envio = $fecha_envio;

        return $this;
    }

    public function getTotal(): ?string
    {
        return $this->total;
    }

    public function setTotal(?string $total): static
    {
        $this->total = $total;

        return $this;
    }

    public function getPagosNo(): ?Empleado
    {
        return $this->pagos_no;
    }

    public function setPagosNo(?Empleado $pagos_no): static
    {
        $this->pagos_no = $pagos_no;

        return $this;
    }
}
