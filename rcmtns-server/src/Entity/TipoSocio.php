<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\TipoSocioRepository")
 */
class TipoSocio
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
     * @ORM\OneToMany(targetEntity="App\Entity\Socio", mappedBy="tipoSocio")
     */
    private $socios;

    public function __construct()
    {
        $this->socios = new ArrayCollection();
    }

    public function getId()
    {
        return $this->id;
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

    /**
     * @return Collection|Socio[]
     */
    public function getSocios(): Collection
    {
        return $this->socios;
    }

    public function addSocio(Socio $socio): self
    {
        if (!$this->socios->contains($socio)) {
            $this->socios[] = $socio;
            $socio->setTipoSocio($this);
        }

        return $this;
    }

    public function removeSocio(Socio $socio): self
    {
        if ($this->socios->contains($socio)) {
            $this->socios->removeElement($socio);
            // set the owning side to null (unless already changed)
            if ($socio->getTipoSocio() === $this) {
                $socio->setTipoSocio(null);
            }
        }

        return $this;
    }

    public function __toString()
    {
        return strval($this->getNombre());
    }
}
