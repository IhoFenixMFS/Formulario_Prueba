<?php

namespace FormularioBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Servicios
 *
 * @ORM\Table(name="servicios")
 * @ORM\Entity(repositoryClass="FormularioBundle\Repository\ServiciosRepository")
 */
class Servicios
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
     * @ORM\Column(name="NombreServicio", type="string", length=35)
     */
    private $nombreServicio;

    /**
     * @var float
     *
     * @ORM\Column(name="ImporteServicio", type="float")
     */
    private $importeServicio;


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
     * Set nombreServicio
     *
     * @param string $nombreServicio
     *
     * @return Servicios
     */
    public function setNombreServicio($nombreServicio)
    {
        $this->nombreServicio = $nombreServicio;

        return $this;
    }

    /**
     * Get nombreServicio
     *
     * @return string
     */
    public function getNombreServicio()
    {
        return $this->nombreServicio;
    }

    /**
     * Set importeServicio
     *
     * @param float $importeServicio
     *
     * @return Servicios
     */
    public function setImporteServicio($importeServicio)
    {
        $this->importeServicio = $importeServicio;

        return $this;
    }

    /**
     * Get importeServicio
     *
     * @return float
     */
    public function getImporteServicio()
    {
        return $this->importeServicio;
    }
}

