<?php

namespace diretorioBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Pizarra
 *
 * @ORM\Table(name="pizarra")
 * @ORM\Entity(repositoryClass="diretorioBundle\Repository\PizarraRepository")
 */
class Pizarra
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
     * @ORM\ManyToOne(targetEntity="Empresa", inversedBy="pizarras")
     * @ORM\JoinColumn(name="empresa_id", referencedColumnName="id")
     */
    private $empresa;

    /**
     * @ORM\OneToMany(targetEntity="Extencion", mappedBy="pizarra")
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
     * Set numero
     *
     * @param string $numero
     *
     * @return Pizarra
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
     * Constructor
     */
    public function __construct()
    {
        $this->extenciones = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set empresa
     *
     * @param \diretorioBundle\Entity\Empresa $empresa
     *
     * @return Pizarra
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
     * Add extencione
     *
     * @param \diretorioBundle\Entity\Extencion $extencione
     *
     * @return Pizarra
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
