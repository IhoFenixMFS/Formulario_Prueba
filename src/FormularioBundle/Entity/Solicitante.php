<?php

namespace FormularioBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Solicitante
 *
 * @ORM\Table(name="solicitante")
 * @ORM\Entity(repositoryClass="FormularioBundle\Repository\SolicitanteRepository")
 */
class Solicitante
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
     * @ORM\Column(name="NombreSolicitante", type="string", length=20)
     */
    private $nombreSolicitante;

    /**
     * @var string
     *
     * @ORM\Column(name="Apellido1Solicitante", type="string", length=15)
     */
    private $apellido1Solicitante;

    /**
     * @var string
     *
     * @ORM\Column(name="Apellido2Solicitante", type="string", length=15)
     */
    private $apellido2Solicitante;

    /**
     * @var int
     *
     * @ORM\Column(name="telfSolicitante", type="integer")
     */
    private $telfSolicitante;

    /**
     * @var string
     *
     * @ORM\Column(name="emailSolicitante", type="string", length=30)
     */
    private $emailSolicitante;


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
     * Set nombreSolicitante
     *
     * @param string $nombreSolicitante
     *
     * @return Solicitante
     */
    public function setNombreSolicitante($nombreSolicitante)
    {
        $this->nombreSolicitante = $nombreSolicitante;

        return $this;
    }

    /**
     * Get nombreSolicitante
     *
     * @return string
     */
    public function getNombreSolicitante()
    {
        return $this->nombreSolicitante;
    }

    /**
     * Set apellido1Solicitante
     *
     * @param string $apellido1Solicitante
     *
     * @return Solicitante
     */
    public function setApellido1Solicitante($apellido1Solicitante)
    {
        $this->apellido1Solicitante = $apellido1Solicitante;

        return $this;
    }

    /**
     * Get apellido1Solicitante
     *
     * @return string
     */
    public function getApellido1Solicitante()
    {
        return $this->apellido1Solicitante;
    }

    /**
     * Set apellido2Solicitante
     *
     * @param string $apellido2Solicitante
     *
     * @return Solicitante
     */
    public function setApellido2Solicitante($apellido2Solicitante)
    {
        $this->apellido2Solicitante = $apellido2Solicitante;

        return $this;
    }

    /**
     * Get apellido2Solicitante
     *
     * @return string
     */
    public function getApellido2Solicitante()
    {
        return $this->apellido2Solicitante;
    }

    /**
     * Set telfSolicitante
     *
     * @param integer $telfSolicitante
     *
     * @return Solicitante
     */
    public function setTelfSolicitante($telfSolicitante)
    {
        $this->telfSolicitante = $telfSolicitante;

        return $this;
    }

    /**
     * Get telfSolicitante
     *
     * @return int
     */
    public function getTelfSolicitante()
    {
        return $this->telfSolicitante;
    }

    /**
     * Set emailSolicitante
     *
     * @param string $emailSolicitante
     *
     * @return Solicitante
     */
    public function setEmailSolicitante($emailSolicitante)
    {
        $this->emailSolicitante = $emailSolicitante;

        return $this;
    }

    /**
     * Get emailSolicitante
     *
     * @return string
     */
    public function getEmailSolicitante()
    {
        return $this->emailSolicitante;
    }
}

