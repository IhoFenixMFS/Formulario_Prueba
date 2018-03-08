<?php

namespace FormularioBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Resumen
 *
 * @ORM\Table(name="solicitudes")
 * @ORM\Entity(repositoryClass="FormularioBundle\Repository\SolicitudesRepository")
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
     * @var string
     *
     * @ORM\Column(name="CIF_NIF_Factura", type="string", length=10)
     */
    private $cIFNIFFactura;

    /**
     * @var int
     *
     * @ORM\Column(name="idLugar", type="integer")
     */
    private $idLugar;

    /**
     * @var float
     *
     * @ORM\Column(name="TotalCiva", type="float")
     */
    private $totalCiva;

    /**
     * @var float
     *
     * @ORM\Column(name="TotalSiva", type="float")
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
     * @return Resumen
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
     * Set cIFNIFFactura
     *
     * @param string $cIFNIFFactura
     *
     * @return Resumen
     */
    public function setCIFNIFFactura($cIFNIFFactura)
    {
        $this->cIFNIFFactura = $cIFNIFFactura;

        return $this;
    }

    /**
     * Get cIFNIFFactura
     *
     * @return string
     */
    public function getCIFNIFFactura()
    {
        return $this->cIFNIFFactura;
    }

    /**
     * Set idLugar
     *
     * @param integer $idLugar
     *
     * @return Resumen
     */
    public function setIdLugar($idLugar)
    {
        $this->idLugar = $idLugar;

        return $this;
    }

    /**
     * Get idLugar
     *
     * @return int
     */
    public function getIdLugar()
    {
        return $this->idLugar;
    }

    /**
     * Set totalCiva
     *
     * @param float $totalCiva
     *
     * @return Resumen
     */
    public function setTotalCiva($totalCiva)
    {
        $this->totalCiva = $totalCiva;

        return $this;
    }

    /**
     * Get totalCiva
     *
     * @return float
     */
    public function getTotalCiva()
    {
        return $this->totalCiva;
    }

    /**
     * Set totalSiva
     *
     * @param float $totalSiva
     *
     * @return Resumen
     */
    public function setTotalSiva($totalSiva)
    {
        $this->totalSiva = $totalSiva;

        return $this;
    }

    /**
     * Get totalSiva
     *
     * @return float
     */
    public function getTotalSiva()
    {
        return $this->totalSiva;
    }
}

