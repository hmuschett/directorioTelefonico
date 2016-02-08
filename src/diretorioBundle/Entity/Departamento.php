<?php

namespace diretorioBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Departamento
 *
 * @ORM\Table(name="departamento")
 * @ORM\Entity(repositoryClass="diretorioBundle\Repository\DepartamentoRepository")
 */
class Departamento
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
     * @ORM\ManyToOne(targetEntity="Direccion", inversedBy="departamentos")
     * @ORM\JoinColumn(name="direccion_id", referencedColumnName="id")
     */
    private $departamento;

    /**
     * @ORM\OneToMany(targetEntity="Telefono", mappedBy="departemento",cascade={"all"})
     */
    private $telefonos;


    /**
     * @ORM\OneToMany(targetEntity="Extencion", mappedBy="departamento",cascade={"all"})
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
     * @return Departamento
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
     * Constructor
     */
    public function __construct()
    {
        $this->telefonos = new \Doctrine\Common\Collections\ArrayCollection();
        $this->extenciones = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set ubicacion
     *
     * @param string $ubicacion
     *
     * @return Departamento
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
     * Set departamento
     *
     * @param \diretorioBundle\Entity\Direccion $departamento
     *
     * @return Departamento
     */
    public function setDepartamento(\diretorioBundle\Entity\Direccion $departamento = null)
    {
        $this->departamento = $departamento;
    
        return $this;
    }

    /**
     * Get departamento
     *
     * @return \diretorioBundle\Entity\Direccion
     */
    public function getDepartamento()
    {
        return $this->departamento;
    }

    /**
     * Add telefono
     *
     * @param \diretorioBundle\Entity\Telefono $telefono
     *
     * @return Departamento
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
     * Add extencione
     *
     * @param \diretorioBundle\Entity\Extencion $extencione
     *
     * @return Departamento
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
}
