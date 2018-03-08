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
     * @ORM\Column(name="NombreEmpresa", type="string", length=30)
     */
    private $nombreEmpresa;

    /**
     * @var string
     *
     * @ORM\Column(name="CIF_NIF", type="string", length=10)
     */
    private $cIFNIF;

    /**
     * @var string
     *
     * @ORM\Column(name="tlfEmpresa", type="integer")
     */
    private $tlfEmpresa;

    /**
     * @var int
     *
     * @ORM\Column(name="emailEmpresa", type="string", length=0)
     */
    private $emailEmpresa;

    /**
     * @var string
     *
     * @ORM\Column(name="UsrContacto", type="string", length=30)
     */
    private $usrContacto;


    /**
     * Get id
     *
     * @return int
     */
    
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nombreEmpresa
     *
     * @param string $nombreEmpresa
     *
     * @return Facturacion
     */
    public function setNombreEmpresa($nombreEmpresa)
    {
        $this->nombreEmpresa = $nombreEmpresa;

        return $this;
    }

    /**
     * Get nombreEmpresa
     *
     * @return string
     */
    public function getNombreEmpresa()
    {
        return $this->nombreEmpresa;
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
     * Set tlfEmpresa
     *
     * @param string $tlfEmpresa
     *
     * @return Facturacion
     */
    public function setTlfEmpresa($tlfEmpresa)
    {
        $this->tlfEmpresa = $tlfEmpresa;

        return $this;
    }

    /**
     * Get tlfEmpresa
     *
     * @return string
     */
    public function getTlfEmpresa()
    {
        return $this->tlfEmpresa;
    }

    /**
     * Set emailEmpresa
     *
     * @param string $emailEmpresa
     *
     * @return Facturacion
     */
    public function setEmailEmpresa($emailEmpresa)
    {
        $this->emailEmpresa = $emailEmpresa;

        return $this;
    }

    /**
     * Get emailEmpresa
     *
     * @return string
     */
    public function getEmailEmpresa()
    {
        return $this->emailEmpresa;
    }

    /**
     * Set usrContacto
     *
     * @param string $usrContacto
     *
     * @return Facturacion
     */
    public function setUsrContacto($usrContacto)
    {
        $this->usrContacto = $usrContacto;

        return $this;
    }

    /**
     * Get usrContacto
     *
     * @return string
     */
    public function getUsrContacto()
    {
        return $this->usrContacto;
    }
}

