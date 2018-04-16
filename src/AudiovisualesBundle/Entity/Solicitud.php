<?php

namespace AudiovisualesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Solicitud
 *
 * @ORM\Table(name="solicitud", options={"collate"="utf8_unicode_ci"})
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

/*----------------------------- Datos solicitante ------------------------*/

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

/*----------------------------- Facturacion ------------------------------*/

    /**
     * @var string
     *
     * @ORM\Column(name="empresa", type="string", length=100)
     */
    protected $empresa;

    /**
     * @var string
     *
     * @ORM\Column(name="cif_nif", type="string", length=15)
     */
    protected $cifNif;

    /**
     * @var int
     *
     * @ORM\Column(name="telefono", type="integer")
     */
    protected $telefono;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=50)
     */
    protected $email;

    /**
     * @var string
     *
     * @ORM\Column(name="contacto", type="string", length=50)
     */
    protected $contacto;

/*---------------------------- Datos del evento --------------------------*/

    /**
     * @var string
     *
     * @ORM\Column(name="LugarEvento", type="string", length=50)
     */
    protected $lugarEvento;

    /**
     * @var date
     *
     * @ORM\Column(name="Desde", type="date")
     */
    protected $desde;

    /**
     * @var date
     *
     * @ORM\Column(name="Hasta", type="date")
     */
    protected $hasta;


    /**
     * @var array
     *
     * @ORM\Column(name="ServiciosContratados", type="json_array")
     */
    protected $serviciosContratados;

    /**
     * @var string
     *
     * @ORM\Column(name="ImporteTotal", type="decimal", precision=6, scale=2)
     */
    protected $importeTotal;

/*--------------------------- Geters y Seters -----------------------------*/

    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

/*----------------------------- Datos solicitante ------------------------*/

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

/*----------------------------- Facturacion ------------------------------*/

    /**
     * Set empresa
     *
     * @param string $empresa
     *
     * @return DatosFacturacin
     */
    public function setEmpresa($empresa)
    {
        $this->empresa = $empresa;

        return $this;
    }

    /**
     * Get empresa
     *
     * @return string
     */
    public function getEmpresa()
    {
        return $this->empresa;
    }

    /**
     * Set cifNif
     *
     * @param string $cifNif
     *
     * @return DatosFacturacin
     */
    public function setCifNif($cifNif)
    {
        $this->cifNif = $cifNif;

        return $this;
    }

    /**
     * Get cifNif
     *
     * @return string
     */
    public function getCifNif()
    {
        return $this->cifNif;
    }

    /**
     * Set telefono
     *
     * @param integer $telefono
     *
     * @return DatosFacturacin
     */
    public function setTelefono($telefono)
    {
        $this->telefono = $telefono;

        return $this;
    }

    /**
     * Get telefono
     *
     * @return int
     */
    public function getTelefono()
    {
        return $this->telefono;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return DatosFacturacin
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set contacto
     *
     * @param string $contacto
     *
     * @return DatosFacturacin
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

/*-----------------------------Datos del evento---------------------------*/

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

    public function setDesde($desde)
    {
        $this->desde = $desde;

        return $this;
    }

    /**
     * Get lugarEvento
     *
     * @return date
     */
    public function getDesde()
    {
        return $this->desde;
    }

    public function setHasta($hasta)
    {
        $this->hasta = $hasta;

        return $this;
    }

    /**
     * Get lugarEvento
     *
     * @return date
     */
    public function getHasta()
    {
        return $this->hasta;
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

