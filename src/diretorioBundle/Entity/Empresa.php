<?php

namespace diretorioBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Empresa
 *
 * @ORM\Table(name="empresa")
 * @ORM\Entity(repositoryClass="diretorioBundle\Repository\EmpresaRepository")
 */
class Empresa
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=100)
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="ubicacion", type="string", length=255)
     */
    private $ubicacion;

    /**
     * @ORM\OneToMany(targetEntity="Direccion", mappedBy="empresa")
     */
    private $direcciones;



    /**
     * @ORM\OneToMany(targetEntity="Telefono", mappedBy="empresa")
     */
    private $telefonos;


    /**
     * @ORM\OneToMany(targetEntity="Pizarra", mappedBy="empresa")
     */
    private $pizarras;

    /**
     * @ORM\OneToMany(targetEntity="Extencion", mappedBy="empresa")
     */
    private $extenciones;


    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     *
     * @return Empresa
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    
        return $this;
    }

    /**
     * Get nombre
     *
     * @return string
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set ubicacion
     *
     * @param string $ubicacion
     *
     * @return Empresa
     */
    public function setUbicacion($ubicacion)
    {
        $this->ubicacion = $ubicacion;
    
        return $this;
    }

    /**
     * Get ubicacion
     *
     * @return string
     */
    public function getUbicacion()
    {
        return $this->ubicacion;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->direcciones = new \Doctrine\Common\Collections\ArrayCollection();
        $this->telefonos = new \Doctrine\Common\Collections\ArrayCollection();
        $this->pizarras = new \Doctrine\Common\Collections\ArrayCollection();
        $this->extenciones = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add direccione
     *
     * @param \diretorioBundle\Entity\Direccion $direccione
     *
     * @return Empresa
     */
    public function addDireccione(\diretorioBundle\Entity\Direccion $direccione)
    {
        $this->direcciones[] = $direccione;
    
        return $this;
    }

    /**
     * Remove direccione
     *
     * @param \diretorioBundle\Entity\Direccion $direccione
     */
    public function removeDireccione(\diretorioBundle\Entity\Direccion $direccione)
    {
        $this->direcciones->removeElement($direccione);
    }

    /**
     * Get direcciones
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getDirecciones()
    {
        return $this->direcciones;
    }

    /**
     * Add telefono
     *
     * @param \diretorioBundle\Entity\Telefono $telefono
     *
     * @return Empresa
     */
    public function addTelefono(\diretorioBundle\Entity\Telefono $telefono)
    {
        $this->telefonos[] = $telefono;
    
        return $this;
    }

    /**
     * Remove telefono
     *
     * @param \diretorioBundle\Entity\Telefono $telefono
     */
    public function removeTelefono(\diretorioBundle\Entity\Telefono $telefono)
    {
        $this->telefonos->removeElement($telefono);
    }

    /**
     * Get telefonos
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getTelefonos()
    {
        return $this->telefonos;
    }

    /**
     * Add pizarra
     *
     * @param \diretorioBundle\Entity\Pizarra $pizarra
     *
     * @return Empresa
     */
    public function addPizarra(\diretorioBundle\Entity\Pizarra $pizarra)
    {
        $this->pizarras[] = $pizarra;
    
        return $this;
    }

    /**
     * Remove pizarra
     *
     * @param \diretorioBundle\Entity\Pizarra $pizarra
     */
    public function removePizarra(\diretorioBundle\Entity\Pizarra $pizarra)
    {
        $this->pizarras->removeElement($pizarra);
    }

    /**
     * Get pizarras
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getPizarras()
    {
        return $this->pizarras;
    }

    /**
     * Add extencione
     *
     * @param \diretorioBundle\Entity\Extencion $extencione
     *
     * @return Empresa
     */
    public function addExtencione(\diretorioBundle\Entity\Extencion $extencione)
    {
        $this->extenciones[] = $extencione;
    
        return $this;
    }

    /**
     * Remove extencione
     *
     * @param \diretorioBundle\Entity\Extencion $extencione
     */
    public function removeExtencione(\diretorioBundle\Entity\Extencion $extencione)
    {
        $this->extenciones->removeElement($extencione);
    }

    /**
     * Get extenciones
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getExtenciones()
    {
        return $this->extenciones;
    }

    public function  __toString()
    {
        return $this->nombre;
    }
}
