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
     * @ORM\Column(name="NombreServicio", type="string", length=255, unique=true)
     */
    private $nombreServicio;

    /**
     * @var int
     *
     * @ORM\Column(name="ImporteServicio", type="integer", nullable=true)
     */
    private $importeServicio;


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
     * @param integer $importeServicio
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
     * @return integer
     */
    public function getImporteServicio()
    {
        return $this->importeServicio;
    }
}

