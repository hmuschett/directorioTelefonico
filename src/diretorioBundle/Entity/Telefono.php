<?php

namespace diretorioBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Telefono
 *
 * @ORM\Table(name="telefono")
 * @ORM\Entity(repositoryClass="diretorioBundle\Repository\TelefonoRepository")
 */
class Telefono
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
     * @ORM\Column(name="numero", type="string", length=15)
     * */
    private $numero;

    /**
    * @ORM\ManyToOne(targetEntity="Empresa", inversedBy="telefonos")
    * @ORM\JoinColumn(name="empresa_id", referencedColumnName="id")
    */
    private $empresa;

    /**
     * @ORM\ManyToOne(targetEntity="Direccion", inversedBy="telefonos")
     * @ORM\JoinColumn(name="direccion_id", referencedColumnName="id")
     */
    private $direccion;

    /**
     * @ORM\ManyToOne(targetEntity="Departamento", inversedBy="telefonos")
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
     * @return Telefono
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
     * Set empresa
     *
     * @param \diretorioBundle\Entity\Empresa $empresa
     *
     * @return Telefono
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
     * @return Telefono
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
     * @return Telefono
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
