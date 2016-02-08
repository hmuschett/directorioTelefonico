<?php

namespace diretorioBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Direccion
 *
 * @ORM\Table(name="direccion")
 * @ORM\Entity(repositoryClass="diretorioBundle\Repository\DireccionRepository")
 */
class Direccion
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
     * @ORM\ManyToOne(targetEntity="Empresa", inversedBy="direcciones")
     * @ORM\JoinColumn(name="empresa_id", referencedColumnName="id")
     */
    private $empresa;

    /**
     * @ORM\OneToMany(targetEntity="Departamento", mappedBy="departamento")
     */
    private $departamentos;

    /**
     * @ORM\OneToMany(targetEntity="Telefono", mappedBy="direccion",cascade={"all"})
     */
    private $telefonos;


    /**
     * @ORM\OneToMany(targetEntity="Extencion", mappedBy="direccion")
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
     * Constructor
     */
    public function __construct()
    {
        $this->departamentos = new \Doctrine\Common\Collections\ArrayCollection();
        $this->telefonos = new \Doctrine\Common\Collections\ArrayCollection();
        $this->extenciones = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     *
     * @return Direccion
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
     * Set empresa
     *
     * @param \diretorioBundle\Entity\Empresa $empresa
     *
     * @return Direccion
     */
    public function setEmpresa(\diretorioBundle\Entity\Empresa $empresa = null)
    {
        $this->empresa = $empresa;
    
        return $this;
    }

    /**
     * Get empresa
     *
     * @return \diretorioBundle\Entity\Empresa
     */
    public function getEmpresa()
    {
        return $this->empresa;
    }

    /**
     * Add departamento
     *
     * @param \diretorioBundle\Entity\Departamento $departamento
     *
     * @return Direccion
     */
    public function addDepartamento(\diretorioBundle\Entity\Departamento $departamento)
    {
        $this->departamentos[] = $departamento;
    
        return $this;
    }

    /**
     * Remove departamento
     *
     * @param \diretorioBundle\Entity\Departamento $departamento
     */
    public function removeDepartamento(\diretorioBundle\Entity\Departamento $departamento)
    {
        $this->departamentos->removeElement($departamento);
    }

    /**
     * Get departamentos
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getDepartamentos()
    {
        return $this->departamentos;
    }

    /**
     * Add telefono
     *
     * @param \diretorioBundle\Entity\Telefono $telefono
     *
     * @return Direccion
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
     * @return Direccion
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
        return $this->nombre." (".$this->getEmpresa()
            ->getNombre().")";
        //." (".$this->getEmpresa()..")"
    }
}
