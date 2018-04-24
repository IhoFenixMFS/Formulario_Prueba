<?php

namespace FormularioBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Datos
 *
 * @ORM\Table(name="datos")
 * @ORM\Entity(repositoryClass="FormularioBundle\Repository\DatosRepository")
 */
class Datos
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
     * @ORM\Column(name="Nombre", type="string", length=255)
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="Apellidos", type="string", length=255)
     */
    private $apellidos;


    /**
     * @var int
     *
     * @ORM\Column(name="Telefono", type="integer")
     */
    protected $telefono;

    /**
     * @var string
     *
     * @ORM\Column(name="Email", type="string", length=255)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="DescripcionEvt", type="string", length=255)
     */
    private $descripcionEvt;

    /**
     * @var string
     *
     * @ORM\Column(name="Itinerario", type="string", length=255)
     */
    private $itinerario;


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
     * Set nombre
     *
     * @param string $nombre
     *
     * @return Datos
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    
        return $this;
    }

    /**
     * Get nombre
     *
     * @return string
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set apellidos
     *
     * @param string $apellidos
     *
     * @return Datos
     */
    public function setApellidos($apellidos)
    {
        $this->apellidos = $apellidos;
    
        return $this;
    }

    /**
     * Get apellidos
     *
     * @return string
     */
    public function getApellidos()
    {
        return $this->apellidos;
    }

    /**
     * Set telefono
     *
     * @param integer $telefono
     *
     * @return Solicitud
     */
    public function setTelefono($telefono)
    {
        $this->telefono = $telefono;

        return $this;
    }

    /**
     * Get telefono
     *
     * @return int
     */
    public function getTelefono()
    {
        return $this->telefono;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return Datos
     */
    public function setEmail($email)
    {
        $this->email = $email;
    
        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set descripcionEvt
     *
     * @param string $descripcionEvt
     *
     * @return Datos
     */
    public function setDescripcionEvt($descripcionEvt)
    {
        $this->descripcionEvt = $descripcionEvt;
    
        return $this;
    }

    /**
     * Get descripcionEvt
     *
     * @return string
     */
    public function getDescripcionEvt()
    {
        return $this->descripcionEvt;
    }

    /**
     * Set itinerario
     *
     * @param string $itinerario
     *
     * @return Datos
     */
    public function setItinerario($itinerario)
    {
        $this->itinerario = $itinerario;
    
        return $this;
    }

    /**
     * Get itinerario
     *
     * @return string
     */
    public function getItinerario()
    {
        return $this->itinerario;
    }
}

