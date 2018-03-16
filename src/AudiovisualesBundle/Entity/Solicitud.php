<?php

namespace AudiovisualesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Solicitud
 *
 * @ORM\Table(name="solicitud")
 * @ORM\Entity(repositoryClass="AudiovisualesBundle\Repository\SolicitudRepository")
 */
class Solicitud
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @var string
     *
     * @ORM\Column(name="NombreSolicitante", type="string", length=50)
     */
    protected $nombreSolicitante;

    /**
     * @var string
     *
     * @ORM\Column(name="Apellido1Solicitante", type="string", length=50)
     */
    protected $apellido1Solicitante;

    /**
     * @var string
     *
     * @ORM\Column(name="Apellido2Solicitante", type="string", length=50)
     */
    protected $apellido2Solicitante;

    /**
     * @var int
     *
     * @ORM\Column(name="TelefonoSolicitante", type="integer")
     */
    protected $telefonoSolicitante;

    /**
     * @var string
     *
     * @ORM\Column(name="EmailSolicitante", type="string", length=50)
     */
    protected $emailSolicitante;

    /**
     * @var string
     *
     * @ORM\Column(name="LugarEvento", type="string", columnDefinition="ENUM('Rectorado: Salón de Actos', 'Móstoles: Aula Magna 1', 'Móstoles: Aula Magna 2', 'Móstoles: Aula Magna 3', 'Móstoles: Salón de Grados 1', 'Móstoles: Salón de Grados 2', 'Alcorcón: Salón de Actos Gestión', 'Alcorcón: Salón de Actos Departamental 2', 'Alcorcón: Salón de Grados 1', 'Alcorcón: Aula Magna 1', 'Fuenlabrada: Salón de Actos', 'Fuenlabrada: Salón de Grados', 'Fuenlabrada: Aula Magna 1', 'Fuenlabrada: Aula Magna 3', 'Madrid: Salón de Actos Biblioteca', 'Madrid: Salón de Actos Manuel Becerra', 'Madrid: Salón de Grados 1')", length=50)
     */
    protected $lugarEvento;

    /**
     * @var array
     *
     * @ORM\Column(name="ServiciosContratados", type="array")
     */
    protected $serviciosContratados;

    /**
     * @var string
     *
     * @ORM\Column(name="ImporteTotal", type="decimal", precision=6, scale=2)
     */
    protected $importeTotal;


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
     * @return Solicitud
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
     * @return Solicitud
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
     * @return Solicitud
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
     * Set telefonoSolicitante
     *
     * @param integer $telefonoSolicitante
     *
     * @return Solicitud
     */
    public function setTelefonoSolicitante($telefonoSolicitante)
    {
        $this->telefonoSolicitante = $telefonoSolicitante;

        return $this;
    }

    /**
     * Get telefonoSolicitante
     *
     * @return int
     */
    public function getTelefonoSolicitante()
    {
        return $this->telefonoSolicitante;
    }

    /**
     * Set emailSolicitante
     *
     * @param string $emailSolicitante
     *
     * @return Solicitud
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

    /**
     * Set lugarEvento
     *
     * @param string $lugarEvento
     *
     * @return Solicitud
     */
    public function setLugarEvento($lugarEvento)
    {
        $this->lugarEvento = $lugarEvento;

        return $this;
    }

    /**
     * Get lugarEvento
     *
     * @return string
     */
    public function getLugarEvento()
    {
        return $this->lugarEvento;
    }

    /**
     * Set serviciosContratados
     *
     * @param array $serviciosContratados
     *
     * @return Solicitud
     */
    public function setServiciosContratados($serviciosContratados)
    {
        $this->serviciosContratados = $serviciosContratados;

        return $this;
    }

    /**
     * Get serviciosContratados
     *
     * @return array
     */
    public function getServiciosContratados()
    {
        return $this->serviciosContratados;
    }

    /**
     * Set importeTotal
     *
     * @param string $importeTotal
     *
     * @return Solicitud
     */
    public function setImporteTotal($importeTotal)
    {
        $this->importeTotal = $importeTotal;

        return $this;
    }

    /**
     * Get importeTotal
     *
     * @return string
     */
    public function getImporteTotal()
    {
        return $this->importeTotal;
    }
}

