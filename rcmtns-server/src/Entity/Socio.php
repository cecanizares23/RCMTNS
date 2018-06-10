<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\SocioRepository")
 */
class Socio
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $nombre;

    /**
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    private $nit;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $representante;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $cedulaRepresentante;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $correoRepresentante;

    /**
     * @ORM\Column(type="integer")
     */
    private $telefonoRepresentante;

    /**
     * @ORM\Column(type="date")
     */
    private $fechaIngreso;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\TipoAporte", inversedBy="socios")
     */
    private $tipoAporte;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\TipoSocio", inversedBy="socios")
     * @ORM\JoinColumn(nullable=false)
     */
    private $tipoSocio;

    public function __construct()
    {
        $this->tipoAporte = new ArrayCollection();
    }

    public function getId()
    {
        return $this->id;
    }

    public function getNit(): ?string
    {
        return $this->nit;
    }

    public function setNit(?string $nit): self
    {
        $this->nit = $nit;

        return $this;
    }

    public function getNombre(): ?string
    {
        return $this->nombre;
    }

    public function setNombre(string $nombre): self
    {
        $this->nombre = $nombre;

        return $this;
    }

    public function getRepresentante(): ?string
    {
        return $this->representante;
    }

    public function setRepresentante(string $representante): self
    {
        $this->representante = $representante;

        return $this;
    }

    public function getCedulaRepresentante(): ?string
    {
        return $this->cedulaRepresentante;
    }

    public function setCedulaRepresentante(string $cedulaRepresentante): self
    {
        $this->cedulaRepresentante = $cedulaRepresentante;

        return $this;
    }

    public function getCorreoRepresentante(): ?string
    {
        return $this->correoRepresentante;
    }

    public function setCorreoRepresentante(string $correoRepresentante): self
    {
        $this->correoRepresentante = $correoRepresentante;

        return $this;
    }

    public function getTelefonoRepresentante(): ?int
    {
        return $this->telefonoRepresentante;
    }

    public function setTelefonoRepresentante(int $telefonoRepresentante): self
    {
        $this->telefonoRepresentante = $telefonoRepresentante;

        return $this;
    }

    public function getFechaIngreso(): ?\DateTimeInterface
    {
        return $this->fechaIngreso;
    }

    public function setFechaIngreso(\DateTimeInterface $fechaIngreso): self
    {
        $this->fechaIngreso = $fechaIngreso;

        return $this;
    }

    /**
     * @return Collection|TipoAporte[]
     */
    public function getTipoAporte(): Collection
    {
        return $this->tipoAporte;
    }

    public function addTipoAporte(TipoAporte $tipoAporte): self
    {
        if (!$this->tipoAporte->contains($tipoAporte)) {
            $this->tipoAporte[] = $tipoAporte;
        }

        return $this;
    }

    public function removeTipoAporte(TipoAporte $tipoAporte): self
    {
        if ($this->tipoAporte->contains($tipoAporte)) {
            $this->tipoAporte->removeElement($tipoAporte);
        }

        return $this;
    }

    public function getTipoSocio(): ?TipoSocio
    {
        return $this->tipoSocio;
    }

    public function setTipoSocio(?TipoSocio $tipoSocio): self
    {
        $this->tipoSocio = $tipoSocio;

        return $this;
    }
}
