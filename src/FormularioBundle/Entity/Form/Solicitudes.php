<?php

namespace FormularioBundle\Entity\Form;

use Doctrine\ORM\Mapping as ORM;

/**
 * Solicitudes
 *
 * @ORM\Table(name="form_solicitudes")
 * @ORM\Entity(repositoryClass="FormularioBundle\Repository\Form\SolicitudesRepository")
 */
class Solicitudes
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
     * @var int
     *
     * @ORM\Column(name="idSolicitante", type="integer")
     */
    private $idSolicitante;

    /**
     * @var int
     *
     * @ORM\Column(name="Facturacion", type="integer", nullable=true)
     */
    private $facturacion;

    /**
     * @var int
     *
     * @ORM\Column(name="Lugar", type="integer")
     */
    private $lugar;

    /**
     * @var array
     *
     * @ORM\Column(name="ServiciosSol", type="array")
     */
    private $serviciosSol;

    /**
     * @var string
     *
     * @ORM\Column(name="totalSiva", type="decimal", precision=2, scale=2)
     */
    private $totalSiva;


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
     * Set idSolicitante
     *
     * @param integer $idSolicitante
     *
     * @return Solicitudes
     */
    public function setIdSolicitante($idSolicitante)
    {
        $this->idSolicitante = $idSolicitante;

        return $this;
    }

    /**
     * Get idSolicitante
     *
     * @return int
     */
    public function getIdSolicitante()
    {
        return $this->idSolicitante;
    }

    /**
     * Set facturacion
     *
     * @param integer $facturacion
     *
     * @return Solicitudes
     */
    public function setFacturacion($facturacion)
    {
        $this->facturacion = $facturacion;

        return $this;
    }

    /**
     * Get facturacion
     *
     * @return int
     */
    public function getFacturacion()
    {
        return $this->facturacion;
    }

    /**
     * Set lugar
     *
     * @param integer $lugar
     *
     * @return Solicitudes
     */
    public function setLugar($lugar)
    {
        $this->lugar = $lugar;

        return $this;
    }

    /**
     * Get lugar
     *
     * @return int
     */
    public function getLugar()
    {
        return $this->lugar;
    }

    /**
     * Set serviciosSol
     *
     * @param array $serviciosSol
     *
     * @return Solicitudes
     */
    public function setServiciosSol($serviciosSol)
    {
        $this->serviciosSol = $serviciosSol;

        return $this;
    }

    /**
     * Get serviciosSol
     *
     * @return array
     */
    public function getServiciosSol()
    {
        return $this->serviciosSol;
    }

    /**
     * Set totalSiva
     *
     * @param string $totalSiva
     *
     * @return Solicitudes
     */
    public function setTotalSiva($totalSiva)
    {
        $this->totalSiva = $totalSiva;

        return $this;
    }

    /**
     * Get totalSiva
     *
     * @return string
     */
    public function getTotalSiva()
    {
        return $this->totalSiva;
    }
}

