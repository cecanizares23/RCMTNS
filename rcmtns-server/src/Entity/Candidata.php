<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\CandidataRepository")
 */
class Candidata
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=10, nullable=true)
     */
    private $tipoDoc;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $cualTipoDoc;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $numeroID;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $nombres;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $apellidos;

    /**
     * @ORM\Column(type="string",length=100, nullable=true)
     */
    private $fechaNacimiento;

    /**
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    private $email;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $telefono;

    /**
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    private $direccion;

    /**
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    private $estadoCivil;

    /**
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    private $hijos;

    /**
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    private $nivelEstudios;

    /**
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    private $ultimoTitulo;

    /**
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    private $nombreTitulo;

    /**
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    private $actualmenteEstudia;

    /**
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    private $queEstudia;

    /**
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    private $nombreTituloObtener;

    /**
     * @ORM\Column(type="string", length=10, nullable=true)
     */
    private $actualmenteTrabaja;

    /**
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    private $sectorLaboral;

    /**
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    private $cualSector;

    /**
     * @ORM\Column(type="string", length=10, nullable=true)
     */
    private $negocioPropio;

    /**
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    private $formaTrabajo;

    /**
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    private $tipoEmpresa;

    /**
     * @ORM\Column(type="string", length=10, nullable=true)
     */
    private $haTrabajado;

    /**
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    private $tiempoDesempleo;

    /**
     * @ORM\Column(type="string", length=10, nullable=true)
     */
    private $conoceTIC;

    /**
     * @ORM\Column(type="string", length=10, nullable=true)
     */
    private $usaTIC;

    /**
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    private $entretenimientoUso;

    /**
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    private $redesUso;

    /**
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    private $correoUso;

    /**
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    private $comprasUso;

    /**
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    private $ventasUso;

    /**
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    private $comunicaionUso;

    /**
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    private $educacionUso;

    /**
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    private $bancoUso;

    /**
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    private $serviciosPublicosUso;

    /**
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    private $tramitesUso;

    /**
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    private $otroUso;

    /**
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    private $interesTIC;

    /**
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    private $entretenimientoInteres;

    /**
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    private $redesInteres;

    /**
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    private $correoInteres;

    /**
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    private $comprasInteres;

    /**
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    private $ventasInteres;

    /**
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    private $comunicacionInteres;

    /**
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    private $educacionInteres;

    /**
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    private $bancoInteres;

    /**
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    private $serviciosPublicosInteres;

    /**
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    private $tramitesInteres;

    /**
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    private $desinteresTIC;

    /**
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    private $cualDesinteres;

    /**
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    private $cualInteres;

    /**
     * @ORM\Column(type="date")
     */
    private $fechaIngreso;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\TipoCandidata", inversedBy="candidatas")
     */
    private $categorias;

    public function __construct()
    {
        $this->categorias = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTipoDoc(): ?string
    {
        return $this->tipoDoc;
    }

    public function setTipoDoc(?string $tipoDoc): self
    {
        $this->tipoDoc = $tipoDoc;

        return $this;
    }

    public function getCualTipoDoc(): ?string
    {
        return $this->cualTipoDoc;
    }

    public function setCualTipoDoc(?string $cualTipoDoc): self
    {
        $this->cualTipoDoc = $cualTipoDoc;

        return $this;
    }

    public function getNumeroID(): ?int
    {
        return $this->numeroID;
    }

    public function setNumeroID(?int $numeroID): self
    {
        $this->numeroID = $numeroID;

        return $this;
    }

    public function getNombres(): ?string
    {
        return $this->nombres;
    }

    public function setNombres(?string $nombres): self
    {
        $this->nombres = $nombres;

        return $this;
    }

    public function getApellidos(): ?string
    {
        return $this->apellidos;
    }

    public function setApellidos(?string $apellidos): self
    {
        $this->apellidos = $apellidos;

        return $this;
    }

    public function getFechaNacimiento(): ?string
    {
        return $this->fechaNacimiento;
    }

    public function setFechaNacimiento(?string $fechaNacimiento): self
    {
        $this->fechaNacimiento = $fechaNacimiento;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(?string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getTelefono(): ?int
    {
        return $this->telefono;
    }

    public function setTelefono(?int $telefono): self
    {
        $this->telefono = $telefono;

        return $this;
    }

    public function getDireccion(): ?string
    {
        return $this->direccion;
    }

    public function setDireccion(?string $direccion): self
    {
        $this->direccion = $direccion;

        return $this;
    }

    public function getEstadoCivil(): ?string
    {
        return $this->estadoCivil;
    }

    public function setEstadoCivil(?string $estadoCivil): self
    {
        $this->estadoCivil = $estadoCivil;

        return $this;
    }

    public function getHijos(): ?string
    {
        return $this->hijos;
    }

    public function setHijos(?string $hijos): self
    {
        $this->hijos = $hijos;

        return $this;
    }

    public function getNivelEstudios(): ?string
    {
        return $this->nivelEstudios;
    }

    public function setNivelEstudios(?string $nivelEstudios): self
    {
        $this->nivelEstudios = $nivelEstudios;

        return $this;
    }

    public function getUltimoTitulo(): ?string
    {
        return $this->ultimoTitulo;
    }

    public function setUltimoTitulo(?string $ultimoTitulo): self
    {
        $this->ultimoTitulo = $ultimoTitulo;

        return $this;
    }

    public function getNombreTitulo(): ?string
    {
        return $this->nombreTitulo;
    }

    public function setNombreTitulo(?string $nombreTitulo): self
    {
        $this->nombreTitulo = $nombreTitulo;

        return $this;
    }

    public function getActualmenteEstudia(): ?string
    {
        return $this->actualmenteEstudia;
    }

    public function setActualmenteEstudia(?string $actualmenteEstudia): self
    {
        $this->actualmenteEstudia = $actualmenteEstudia;

        return $this;
    }

    public function getQueEstudia(): ?string
    {
        return $this->queEstudia;
    }

    public function setQueEstudia(?string $queEstudia): self
    {
        $this->queEstudia = $queEstudia;

        return $this;
    }

    public function getNombreTituloObtener(): ?string
    {
        return $this->nombreTituloObtener;
    }

    public function setNombreTituloObtener(?string $nombreTituloObtener): self
    {
        $this->nombreTituloObtener = $nombreTituloObtener;

        return $this;
    }

    public function getActualmenteTrabaja(): ?string
    {
        return $this->actualmenteTrabaja;
    }

    public function setActualmenteTrabaja(?string $actualmenteTrabaja): self
    {
        $this->actualmenteTrabaja = $actualmenteTrabaja;

        return $this;
    }

    public function getSectorLaboral(): ?string
    {
        return $this->sectorLaboral;
    }

    public function setSectorLaboral(?string $sectorLaboral): self
    {
        $this->sectorLaboral = $sectorLaboral;

        return $this;
    }

    public function getCualSector(): ?string
    {
        return $this->cualSector;
    }

    public function setCualSector(?string $cualSector): self
    {
        $this->cualSector = $cualSector;

        return $this;
    }

    public function getNegocioPropio(): ?string
    {
        return $this->negocioPropio;
    }

    public function setNegocioPropio(?string $negocioPropio): self
    {
        $this->negocioPropio = $negocioPropio;

        return $this;
    }

    public function getFormaTrabajo(): ?string
    {
        return $this->formaTrabajo;
    }

    public function setFormaTrabajo(?string $formaTrabajo): self
    {
        $this->formaTrabajo = $formaTrabajo;

        return $this;
    }

    public function getTipoEmpresa(): ?string
    {
        return $this->tipoEmpresa;
    }

    public function setTipoEmpresa(?string $tipoEmpresa): self
    {
        $this->tipoEmpresa = $tipoEmpresa;

        return $this;
    }

    public function getHaTrabajado(): ?string
    {
        return $this->haTrabajado;
    }

    public function setHaTrabajado(?string $haTrabajado): self
    {
        $this->haTrabajado = $haTrabajado;

        return $this;
    }

    public function getTiempoDesempleo(): ?string
    {
        return $this->tiempoDesempleo;
    }

    public function setTiempoDesempleo(?string $tiempoDesempleo): self
    {
        $this->tiempoDesempleo = $tiempoDesempleo;

        return $this;
    }

    public function getConoceTIC(): ?string
    {
        return $this->conoceTIC;
    }

    public function setConoceTIC(?string $conoceTIC): self
    {
        $this->conoceTIC = $conoceTIC;

        return $this;
    }

    public function getUsaTIC(): ?string
    {
        return $this->usaTIC;
    }

    public function setUsaTIC(?string $usaTIC): self
    {
        $this->usaTIC = $usaTIC;

        return $this;
    }

    public function getEntretenimientoUso(): ?string
    {
        return $this->entretenimientoUso;
    }

    public function setEntretenimientoUso(?string $entretenimientoUso): self
    {
        $this->entretenimientoUso = $entretenimientoUso;

        return $this;
    }

    public function getRedesUso(): ?string
    {
        return $this->redesUso;
    }

    public function setRedesUso(?string $redesUso): self
    {
        $this->redesUso = $redesUso;

        return $this;
    }

    public function getCorreoUso(): ?string
    {
        return $this->correoUso;
    }

    public function setCorreoUso(?string $correoUso): self
    {
        $this->correoUso = $correoUso;

        return $this;
    }

    public function getComprasUso(): ?string
    {
        return $this->comprasUso;
    }

    public function setComprasUso(?string $comprasUso): self
    {
        $this->comprasUso = $comprasUso;

        return $this;
    }

    public function getVentasUso(): ?string
    {
        return $this->ventasUso;
    }

    public function setVentasUso(?string $ventasUso): self
    {
        $this->ventasUso = $ventasUso;

        return $this;
    }

    public function getComunicaionUso(): ?string
    {
        return $this->comunicaionUso;
    }

    public function setComunicaionUso(?string $comunicaionUso): self
    {
        $this->comunicaionUso = $comunicaionUso;

        return $this;
    }

    public function getEducacionUso(): ?string
    {
        return $this->educacionUso;
    }

    public function setEducacionUso(?string $educacionUso): self
    {
        $this->educacionUso = $educacionUso;

        return $this;
    }

    public function getBancoUso(): ?string
    {
        return $this->bancoUso;
    }

    public function setBancoUso(?string $bancoUso): self
    {
        $this->bancoUso = $bancoUso;

        return $this;
    }

    public function getServiciosPublicosUso(): ?string
    {
        return $this->serviciosPublicosUso;
    }

    public function setServiciosPublicosUso(?string $serviciosPublicosUso): self
    {
        $this->serviciosPublicosUso = $serviciosPublicosUso;

        return $this;
    }

    public function getTramitesUso(): ?string
    {
        return $this->tramitesUso;
    }

    public function setTramitesUso(?string $tramitesUso): self
    {
        $this->tramitesUso = $tramitesUso;

        return $this;
    }

    public function getOtroUso(): ?string
    {
        return $this->otroUso;
    }

    public function setOtroUso(?string $otroUso): self
    {
        $this->otroUso = $otroUso;

        return $this;
    }

    public function getInteresTIC(): ?string
    {
        return $this->interesTIC;
    }

    public function setInteresTIC(?string $interesTIC): self
    {
        $this->interesTIC = $interesTIC;

        return $this;
    }

    public function getEntretenimientoInteres(): ?string
    {
        return $this->entretenimientoInteres;
    }

    public function setEntretenimientoInteres(?string $entretenimientoInteres): self
    {
        $this->entretenimientoInteres = $entretenimientoInteres;

        return $this;
    }

    public function getRedesInteres(): ?string
    {
        return $this->redesInteres;
    }

    public function setRedesInteres(?string $redesInteres): self
    {
        $this->redesInteres = $redesInteres;

        return $this;
    }

    public function getCorreoInteres(): ?string
    {
        return $this->correoInteres;
    }

    public function setCorreoInteres(?string $correoInteres): self
    {
        $this->correoInteres = $correoInteres;

        return $this;
    }

    public function getComprasInteres(): ?string
    {
        return $this->comprasInteres;
    }

    public function setComprasInteres(?string $comprasInteres): self
    {
        $this->comprasInteres = $comprasInteres;

        return $this;
    }

    public function getVentasInteres(): ?string
    {
        return $this->ventasInteres;
    }

    public function setVentasInteres(?string $ventasInteres): self
    {
        $this->ventasInteres = $ventasInteres;

        return $this;
    }

    public function getComunicacionInteres(): ?string
    {
        return $this->comunicacionInteres;
    }

    public function setComunicacionInteres(?string $comunicacionInteres): self
    {
        $this->comunicacionInteres = $comunicacionInteres;

        return $this;
    }

    public function getEducacionInteres(): ?string
    {
        return $this->educacionInteres;
    }

    public function setEducacionInteres(?string $educacionInteres): self
    {
        $this->educacionInteres = $educacionInteres;

        return $this;
    }

    public function getBancoInteres(): ?string
    {
        return $this->bancoInteres;
    }

    public function setBancoInteres(?string $bancoInteres): self
    {
        $this->bancoInteres = $bancoInteres;

        return $this;
    }

    public function getServiciosPublicosInteres(): ?string
    {
        return $this->serviciosPublicosInteres;
    }

    public function setServiciosPublicosInteres(?string $serviciosPublicosInteres): self
    {
        $this->serviciosPublicosInteres = $serviciosPublicosInteres;

        return $this;
    }

    public function getTramitesInteres(): ?string
    {
        return $this->tramitesInteres;
    }

    public function setTramitesInteres(?string $tramitesInteres): self
    {
        $this->tramitesInteres = $tramitesInteres;

        return $this;
    }

    public function getDesinteresTIC(): ?string
    {
        return $this->desinteresTIC;
    }

    public function setDesinteresTIC(?string $desinteresTIC): self
    {
        $this->desinteresTIC = $desinteresTIC;

        return $this;
    }

    public function getCualDesinteres(): ?string
    {
        return $this->cualDesinteres;
    }

    public function setCualDesinteres(?string $cualDesinteres): self
    {
        $this->cualDesinteres = $cualDesinteres;

        return $this;
    }

    public function getCualInteres(): ?string
    {
        return $this->cualInteres;
    }

    public function setCualInteres(?string $cualInteres): self
    {
        $this->cualInteres = $cualInteres;

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
     * @return Collection|TipoCandidata[]
     */
    public function getCategorias(): Collection
    {
        return $this->categorias;
    }

    public function addCategoria(TipoCandidata $categoria): self
    {
        if (!$this->categorias->contains($categoria)) {
            $this->categorias[] = $categoria;
        }

        return $this;
    }

    public function removeCategoria(TipoCandidata $categoria): self
    {
        if ($this->categorias->contains($categoria)) {
            $this->categorias->removeElement($categoria);
        }

        return $this;
    }

}
