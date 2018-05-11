<?php

namespace FormularioBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Duracion
 *
 * @ORM\Table(name="duracion")
 * @ORM\Entity(repositoryClass="FormularioBundle\Repository\DuracionRepository")
 */
class Duracion
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
     * @var \Date
     *
     * @ORM\Column(name="dia", type="date")
     */
    private $dia;

    /**
     * @var int
     *
     * @ORM\Column(name="desde", type="integer")
     */
    private $desde;

    /**
     * @var int
     *
     * @ORM\Column(name="hasta", type="integer")
     */
    private $hasta;

    /**
     * @var int
     *
     * @ORM\Column(name="idSolicitud", type="integer")
     */
    private $idSolicitud;

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
     * Set dia
     *
     * @param \Date $dia
     *
     * @return Duracion
     */
    public function setDia($dia)
    {
        $this->dia = $dia;
    
        return $this;
    }

    /**
     * Get dia
     *
     * @return \Date
     */
    public function getDia()
    {
        return $this->dia;
    }

    /**
     * Set desde
     *
     * @param integer $desde
     *
     * @return Duracion
     */
    public function setDesde($desde)
    {
        $this->desde = $desde;
    
        return $this;
    }

    /**
     * Get desde
     *
     * @return integer
     */
    public function getDesde()
    {
        return $this->desde;
    }

    /**
     * Set hasta
     *
     * @param integer $hasta
     *
     * @return Duracion
     */
    public function setHasta($hasta)
    {
        $this->hasta = $hasta;
    
        return $this;
    }

    /**
     * Get hasta
     *
     * @return integer
     */
    public function getHasta()
    {
        return $this->hasta;
    }

    /**
     * Set idSolicitud
     *
     * @param integer $idSolicitud
     *
     * @return Duracion
     */
    public function setIdSolicitud($idSolicitud)
    {
        $this->idSolicitud = $idSolicitud;
    
        return $this;
    }

    /**
     * Get idSolicitud
     *
     * @return integer
     */
    public function getIdSolicitud()
    {
        return $this->idSolicitud;
    }
}

