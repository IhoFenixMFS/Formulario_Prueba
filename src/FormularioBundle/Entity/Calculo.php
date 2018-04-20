<?php

namespace FormularioBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Calculo
 *
 * @ORM\Table(name="calculo")
 * @ORM\Entity(repositoryClass="FormularioBundle\Repository\CalculoRepository")
 */
class Calculo
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_sol", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id_sol;

    /**
     * @var string
     *
     * @ORM\Column(name="Lugar", type="string", length=255)
     */
    private $lugar;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Duracion", type="date")
     */
    private $duracion;


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
     * Set lugar
     *
     * @param string $lugar
     *
     * @return Calculo
     */
    public function setLugar($lugar)
    {
        $this->lugar = $lugar;
    
        return $this;
    }

    /**
     * Get lugar
     *
     * @return string
     */
    public function getLugar()
    {
        return $this->lugar;
    }

    /**
     * Set duracion
     *
     * @param \DateTime $duracion
     *
     * @return Calculo
     */
    public function setDuracion($duracion)
    {
        $this->duracion = $duracion;
    
        return $this;
    }

    /**
     * Get duracion
     *
     * @return \DateTime
     */
    public function getDuracion()
    {
        return $this->duracion;
    }
}

