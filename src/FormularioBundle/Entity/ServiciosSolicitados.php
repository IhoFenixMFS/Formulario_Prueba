<?php

namespace FormularioBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ListaServicios
 *
 * @ORM\Table(name="servicios_solicitados")
 * @ORM\Entity(repositoryClass="FormularioBundle\Repository\ServiciosSolicitadosRepository")
 */
class ServiciosSolicitados
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
     * @ORM\Column(name="idSolicitudes", type="integer")
     */
    private $idSolicitudes;

    /**
     * @var int
     *
     * @ORM\Column(name="idServicio", type="integer")
     */
    private $idServicio;

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
     * Set idListaServicios
     *
     * @param integer $idListaServicios
     *
     * @return ListaServicios
     */
    public function setIdSolicitudes($idListaServicios)
    {
        $this->idSolicitudes = $idSolicitudes;

        return $this;
    }

    /**
     * Get idListaServicios
     *
     * @return int
     */
    public function getIdSolicitudes()
    {
        return $this->idSolicitudes;
    }

    /**
     * Set idServicio
     *
     * @param integer $idServicio
     *
     * @return ListaServicios
     */
    public function setIdServicio($idServicio)
    {
        $this->idServicio = $idServicio;

        return $this;
    }

    /**
     * Get idServicio
     *
     * @return int
     */
    public function getIdServicio()
    {
        return $this->idServicio;
    }

    /**
     * Set importeServicio
     *
     * @param float $importeServicio
     *
     * @return ListaServicios
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

