<?php

namespace FormularioBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Facturacion
 *
 * @ORM\Table(name="facturacion")
 * @ORM\Entity(repositoryClass="FormularioBundle\Repository\FacturacionRepository")
 */
class Facturacion
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
     * @ORM\Column(name="NombreEmp", type="string", length=255)
     */
    private $nombreEmp;

    /**
     * @var string
     *
     * @ORM\Column(name="CIF_NIF", type="string", length=255)
     */
    private $cIFNIF;

    /**
     * @var int
     *
     * @ORM\Column(name="TlfEmp", type="integer")
     */
    private $tlfEmp;

    /**
     * @var string
     *
     * @ORM\Column(name="EmailEmp", type="string", length=255)
     */
    private $emailEmp;

    /**
     * @var string
     *
     * @ORM\Column(name="Contacto", type="string", length=255)
     */
    private $contacto;


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
     * Set nombreEmp
     *
     * @param string $nombreEmp
     *
     * @return Facturacion
     */
    public function setNombreEmp($nombreEmp)
    {
        $this->nombreEmp = $nombreEmp;
    
        return $this;
    }

    /**
     * Get nombreEmp
     *
     * @return string
     */
    public function getNombreEmp()
    {
        return $this->nombreEmp;
    }

    /**
     * Set cIFNIF
     *
     * @param string $cIFNIF
     *
     * @return Facturacion
     */
    public function setCIFNIF($cIFNIF)
    {
        $this->cIFNIF = $cIFNIF;
    
        return $this;
    }

    /**
     * Get cIFNIF
     *
     * @return string
     */
    public function getCIFNIF()
    {
        return $this->cIFNIF;
    }

    /**
     * Set tlfEmp
     *
     * @param integer $tlfEmp
     *
     * @return Facturacion
     */
    public function setTlfEmp($tlfEmp)
    {
        $this->tlfEmp = $tlfEmp;
    
        return $this;
    }

    /**
     * Get tlfEmp
     *
     * @return integer
     */
    public function getTlfEmp()
    {
        return $this->tlfEmp;
    }

    /**
     * Set emailEmp
     *
     * @param string $emailEmp
     *
     * @return Facturacion
     */
    public function setEmailEmp($emailEmp)
    {
        $this->emailEmp = $emailEmp;
    
        return $this;
    }

    /**
     * Get emailEmp
     *
     * @return string
     */
    public function getEmailEmp()
    {
        return $this->emailEmp;
    }

    /**
     * Set contacto
     *
     * @param string $contacto
     *
     * @return Facturacion
     */
    public function setContacto($contacto)
    {
        $this->contacto = $contacto;
    
        return $this;
    }

    /**
     * Get contacto
     *
     * @return string
     */
    public function getContacto()
    {
        return $this->contacto;
    }
}

