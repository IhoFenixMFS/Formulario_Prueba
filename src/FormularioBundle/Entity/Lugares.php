<?php

namespace FormularioBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Lugares
 *
 * @ORM\Table(name="lugares")
 * @ORM\Entity(repositoryClass="FormularioBundle\Repository\LugaresRepository")
 */
class Lugares
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
     * @ORM\Column(name="Campus", type="string", length=255)
     */
    private $campus;

    /**
     * @var string
     *
     * @ORM\Column(name="Sala", type="string", length=255)
     */
    private $sala;

    /**
     * @var string
     *
     * @ORM\Column(name="NombreLugar", type="string", length=255)
     */
    private $nombreLugar;


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
     * Set campus
     *
     * @param string $campus
     *
     * @return Lugares
     */
    public function setCampus($campus)
    {
        $this->campus = $campus;
    
        return $this;
    }

    /**
     * Get campus
     *
     * @return string
     */
    public function getCampus()
    {
        return $this->campus;
    }

    /**
     * Set sala
     *
     * @param string $sala
     *
     * @return Lugares
     */
    public function setSala($sala)
    {
        $this->sala = $sala;
    
        return $this;
    }

    /**
     * Get sala
     *
     * @return string
     */
    public function getSala()
    {
        return $this->sala;
    }

    /**
     * Set nombreLugar
     *
     * @param string $nombreLugar
     *
     * @return Lugares
     */
    public function setNombreLugar($nombreLugar)
    {
        $this->nombreLugar = $nombreLugar;
    
        return $this;
    }

    /**
     * Get nombreLugar
     *
     * @return string
     */
    public function getNombreLugar()
    {
        return $this->nombreLugar;
    }
}

