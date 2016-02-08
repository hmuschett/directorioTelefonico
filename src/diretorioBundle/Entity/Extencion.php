<?php

namespace diretorioBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Extencion
 *
 * @ORM\Table(name="extencion")
 * @ORM\Entity(repositoryClass="diretorioBundle\Repository\ExtencionRepository")
 */
class Extencion
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
     * @ORM\Column(name="numero", type="string", length=10)
     */
    private $numero;

    /**
     * @ORM\ManyToOne(targetEntity="Pizarra", inversedBy="extenciones")
     * @ORM\JoinColumn(name="pizarra_id", referencedColumnName="id")
     */
    private $pizarra;

    /**
     * @ORM\ManyToOne(targetEntity="Empresa", inversedBy="extenciones")
     * @ORM\JoinColumn(name="empresa_id", referencedColumnName="id")
     */
    private $empresa;

    /**
     * @ORM\ManyToOne(targetEntity="Direccion", inversedBy="extenciones")
     * @ORM\JoinColumn(name="direccion_id", referencedColumnName="id")
     */
    private $direccion;

    /**
     * @ORM\ManyToOne(targetEntity="Departamento", inversedBy="extenciones")
     * @ORM\JoinColumn(name="departamento_id", referencedColumnName="id")
     */
    private $departamento;

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
     * Set numero
     *
     * @param string $numero
     *
     * @return Extencion
     */
    public function setNumero($numero)
    {
        $this->numero = $numero;
    
        return $this;
    }

    /**
     * Get numero
     *
     * @return string
     */
    public function getNumero()
    {
        return $this->numero;
    }

    /**
     * Set pizarra
     *
     * @param \diretorioBundle\Entity\Pizarra $pizarra
     *
     * @return Extencion
     */
    public function setPizarra(\diretorioBundle\Entity\Pizarra $pizarra = null)
    {
        $this->pizarra = $pizarra;
    
        return $this;
    }

    /**
     * Get pizarra
     *
     * @return \diretorioBundle\Entity\Pizarra
     */
    public function getPizarra()
    {
        return $this->pizarra;
    }

    /**
     * Set empresa
     *
     * @param \diretorioBundle\Entity\Empresa $empresa
     *
     * @return Extencion
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
     * Set direccion
     *
     * @param \diretorioBundle\Entity\Direccion $direccion
     *
     * @return Extencion
     */
    public function setDireccion(\diretorioBundle\Entity\Direccion $direccion = null)
    {
        $this->direccion = $direccion;
    
        return $this;
    }

    /**
     * Get direccion
     *
     * @return \diretorioBundle\Entity\Direccion
     */
    public function getDireccion()
    {
        return $this->direccion;
    }

    /**
     * Set departamento
     *
     * @param \diretorioBundle\Entity\Departamento $departamento
     *
     * @return Extencion
     */
    public function setDepartamento(\diretorioBundle\Entity\Departamento $departamento = null)
    {
        $this->departamento = $departamento;
    
        return $this;
    }

    /**
     * Get departamento
     *
     * @return \diretorioBundle\Entity\Departamento
     */
    public function getDepartamento()
    {
        return $this->departamento;
    }
}
