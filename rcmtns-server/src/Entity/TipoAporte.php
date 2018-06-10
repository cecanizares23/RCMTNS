<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\TipoAporteRepository")
 */
class TipoAporte
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
     * @ORM\ManyToMany(targetEntity="App\Entity\Socio", mappedBy="tipoAporte")
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
            $socio->addTipoAporte($this);
        }

        return $this;
    }

    public function removeSocio(Socio $socio): self
    {
        if ($this->socios->contains($socio)) {
            $this->socios->removeElement($socio);
            $socio->removeTipoAporte($this);
        }

        return $this;
    }

    public function __toString()
    {
        return strval($this->getNombre());
    }
}
