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
     * @ORM\Column(name="Campus", type="string", length=25)
     */
    private $campus;

    /**
     * @var string
     *
     * @ORM\Column(name="Aula", type="string", length=30)
     */
    private $aula;


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
     * Set aula
     *
     * @param string $aula
     *
     * @return Lugares
     */
    public function setAula($aula)
    {
        $this->aula = $aula;

        return $this;
    }

    /**
     * Get aula
     *
     * @return string
     */
    public function getAula()
    {
        return $this->aula;
    }
}

