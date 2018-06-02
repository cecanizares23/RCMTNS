<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\TipoCandidataRepository")
 */
class TipoCandidata
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
     * @ORM\ManyToMany(targetEntity="App\Entity\Candidata", mappedBy="categorias")
     */
    private $candidatas;

    public function __construct()
    {
        $this->candidatas = new ArrayCollection();
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


    public function __toString()
    {
        return strval($this->getNombre());
    }

    /**
     * @return Collection|Candidata[]
     */
    public function getCandidatas(): Collection
    {
        return $this->candidatas;
    }

    public function addCandidata(Candidata $candidata): self
    {
        if (!$this->candidatas->contains($candidata)) {
            $this->candidatas[] = $candidata;
            $candidata->addCategoria($this);
        }

        return $this;
    }

    public function removeCandidata(Candidata $candidata): self
    {
        if ($this->candidatas->contains($candidata)) {
            $this->candidatas->removeElement($candidata);
            $candidata->removeCategoria($this);
        }

        return $this;
    }
}
