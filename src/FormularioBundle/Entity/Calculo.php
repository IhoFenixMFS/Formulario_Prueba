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
     * @var string
     *
     * @ORM\Column(name="Fechas", type="string", length=255)
     */
    private $fechas;

    /**
     * @var string
     *
     * @ORM\Column(name="Servicios", type="string", length=255)
     */
    private $servicios;

    /**
     * @var string
     *
     * @ORM\Column(name="ImporteTotal", type="decimal", precision=6, scale=2)
     */
    protected $importeTotal;

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
     * Set fechas
     *
     * @param string $fechas
     *
     * @return Calculo
     */
    public function setFechas($fechas)
    {
        $this->fechas = $fechas;
    
        return $this;
    }

    /**
     * Get fechas
     *
     * @return string
     */
    public function getFechas()
    {
        return $this->fechas;
    }


    /**
     * Set servicios
     *
     * @param array $servicios
     *
     * @return Solicitud
     */
    public function setServicios($servicios)
    {
        $this->servicios = $servicios;

        return $this;
    }

    /**
     * Get servicios
     *
     * @return array
     */
    public function getServicios()
    {
        return $this->servicios;
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

