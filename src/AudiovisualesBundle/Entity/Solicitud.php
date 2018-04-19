<?php

namespace AudiovisualesBundle\Entity;

use Symfony\Component\Validator\Constraints as Assert;
//use Symfony\Component\Validator\Tests\Constraints as Assert;
use Symfony\Component\Validator\Constraints\Expression;

use Doctrine\ORM\Mapping as ORM;

/**
 * Solicitud
 *
 * @ORM\Table(name="solicitud", options={"collate"="utf8_unicode_ci"})
 * @ORM\Entity(repositoryClass="AudiovisualesBundle\Repository\SolicitudRepository")
 */
class Solicitud
{
/*--------------------------- Declaración de variables -------------------------*/
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /*----------------------------- Datos solicitante ------------------------*/

        /**
         * @var string
         *
         * @ORM\Column(name="NombreSolicitante", type="string", length=50)
         */
        protected $nombreSolicitante;

        /**
         * @var string
         *
         * @ORM\Column(name="Apellido1Solicitante", type="string", length=50)
         */
        protected $apellido1Solicitante;

        /**
         * @var string
         *
         * @ORM\Column(name="Apellido2Solicitante", type="string", length=50)
         */
        protected $apellido2Solicitante;

        /**
         * @var int
         *
         * @ORM\Column(name="TelefonoSolicitante", type="integer")
         */
        protected $telefonoSolicitante;

        /**
         * @var string
         *
         * @ORM\Column(name="EmailSolicitante", type="string", length=50)
         */
        protected $emailSolicitante;

    /*----------------------------- Facturacion ------------------------------*/

        /**
         * @var string
         *
         * @ORM\Column(name="empresa", type="string", length=100)
         */
        protected $empresa;

        /**
         * @var string
         *
         * @ORM\Column(name="cif_nif", type="string", length=15)
         */
        protected $cifNif;

        /**
         * @var int
         *
         * @ORM\Column(name="telefono", type="integer")
         */
        protected $telefono;

        /**
         * @var string
         *
         * @ORM\Column(name="email", type="string", length=50)
         */
        protected $email;

        /**
         * @var string
         *
         * @ORM\Column(name="contacto", type="string", length=50)
         */
        protected $contacto;

    /*-------------------------------- Duración -------------------------------*/
/**/       
        /**
         * @var \Date
         *
         * @ORM\Column(name="desde", type="date")
         */
        private $desde;

        /**
         * @var \Date
         *
         * @ORM\Column(name="hasta", type="date")
         * @Assert\GreaterThanOrEqual(propertyPath="desde", message="El evento debe finalizar después de empezar.") 
         */
        private $hasta;

        /**
         * @var int
         *
         * @ORM\Column(name="total_horas", type="integer")
         * @Assert\LessThanOrEqual("propertyPath='desde'*13-propertyPath='hasta'*13",message="Error")
         */
        /*
            La comparativa devuelve FALSE=(0) todo el tiempo, por lo que evalua la condición como un false continuamente .... ¿por que?

        */
        private $totalHoras;

        /**
         * @var string
         *
         * @ORM\Column(name="horario", type="string", length=255, nullable=true)
         */
        private $horario;

    /*---------------------------- Datos del evento --------------------------*/

        /**
         * @var string
         *
         * @ORM\Column(name="LugarEvento", type="string", length=50)
         */
        protected $lugarEvento;

        /**
         * @var array
         *
         * @ORM\Column(name="ServiciosContratados", type="json_array")
         */
        protected $serviciosContratados;

        /**
         * @var string
         *
         * @ORM\Column(name="ImporteTotal", type="decimal", precision=6, scale=2)
         */
        protected $importeTotal;

/*------------------------------ Geters y Seters -------------------------------*/
    /*------------------------------------ ID ---------------------------------*/
        /**
         * Get id
         *
         * @return int
         */
        public function getId()
        {
            return $this->id;
        }

    /*----------------------------- Datos solicitante ------------------------*/

        /**
         * Set nombreSolicitante
         *
         * @param string $nombreSolicitante
         *
         * @return Solicitud
         */
        public function setNombreSolicitante($nombreSolicitante)
        {
            $this->nombreSolicitante = $nombreSolicitante;

            return $this;
        }

        /**
         * Get nombreSolicitante
         *
         * @return string
         */
        public function getNombreSolicitante()
        {
            return $this->nombreSolicitante;
        }

        /**
         * Set apellido1Solicitante
         *
         * @param string $apellido1Solicitante
         *
         * @return Solicitud
         */
        public function setApellido1Solicitante($apellido1Solicitante)
        {
            $this->apellido1Solicitante = $apellido1Solicitante;

            return $this;
        }

        /**
         * Get apellido1Solicitante
         *
         * @return string
         */
        public function getApellido1Solicitante()
        {
            return $this->apellido1Solicitante;
        }

        /**
         * Set apellido2Solicitante
         *
         * @param string $apellido2Solicitante
         *
         * @return Solicitud
         */
        public function setApellido2Solicitante($apellido2Solicitante)
        {
            $this->apellido2Solicitante = $apellido2Solicitante;

            return $this;
        }

        /**
         * Get apellido2Solicitante
         *
         * @return string
         */
        public function getApellido2Solicitante()
        {
            return $this->apellido2Solicitante;
        }

        /**
         * Set telefonoSolicitante
         *
         * @param integer $telefonoSolicitante
         *
         * @return Solicitud
         */
        public function setTelefonoSolicitante($telefonoSolicitante)
        {
            $this->telefonoSolicitante = $telefonoSolicitante;

            return $this;
        }

        /**
         * Get telefonoSolicitante
         *
         * @return int
         */
        public function getTelefonoSolicitante()
        {
            return $this->telefonoSolicitante;
        }

        /**
         * Set emailSolicitante
         *
         * @param string $emailSolicitante
         *
         * @return Solicitud
         */
        public function setEmailSolicitante($emailSolicitante)
        {
            $this->emailSolicitante = $emailSolicitante;

            return $this;
        }

        /**
         * Get emailSolicitante
         *
         * @return string
         */
        public function getEmailSolicitante()
        {
            return $this->emailSolicitante;
        }

    /*----------------------------- Facturacion ------------------------------*/

        /**
         * Set empresa
         *
         * @param string $empresa
         *
         * @return Solicitud
         */
        public function setEmpresa($empresa)
        {
            $this->empresa = $empresa;

            return $this;
        }

        /**
         * Get empresa
         *
         * @return string
         */
        public function getEmpresa()
        {
            return $this->empresa;
        }

        /**
         * Set cifNif
         *
         * @param string $cifNif
         *
         * @return Solicitud
         */
        public function setCifNif($cifNif)
        {
            $this->cifNif = $cifNif;

            return $this;
        }

        /**
         * Get cifNif
         *
         * @return string
         */
        public function getCifNif()
        {
            return $this->cifNif;
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
         * @return Solicitud
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
         * Set contacto
         *
         * @param string $contacto
         *
         * @return Solicitud
         */
        public function setContacto($contacto)
        {
            $this->contacto = $contacto;

            return $this;
        }

        /**
         * Get contacto
         *
         * @return string
         */
        public function getContacto()
        {
            return $this->contacto;
        }

    /*-------------------------------- Duración -------------------------------*/
/**/
        /**
         * Set desde
         *
         * @param \Date $desde
         *
         * @return Solicitud
         */
        public function setDesde($desde)
        {
            $this->desde = $desde;
        
            return $this;
        }

        /**
         * Get desde
         *
         * @return \Date
         */
        public function getDesde()
        {
            return $this->desde;
        }

/*        public function getHoras()
        {   
            $ini="propertyPath='desde')";
            $fin="propertyPath='hasta')";
            
            $ini = strptime($ini,'%Y%m%d');
            
            //$ini=$this->getDesde()->format("%d");
            //$ini=explode("-",$ini);
            //$ini=mktime(0,0,0,$ini[0],$ini[1],$ini[2]);
            
            $fin = strtotime($fin,'%Y%m%d');

            //$fin=$this->getHasta()->format("%d");
            //$fin=explode("-",$fin);
            //$fin=mktime(0,0,0,$fin[0],$fin[1],$fin[2]);
            
            //$diferencia = $fin->diff($ini);
            //$diferencia=$diferencia->format("%d");

            $diferencia=$ini-$fin;
            $dias = ((( $diferencia / 60 ) / 60 ) / 24);
            $difdias = $dias+1;
            //$horasMax=13*$difdias;


            $dias = (strtotime($ini)-strtotime($fin))/86400;
            $dias = abs($dias); $dias = floor($dias);
            return $dias;


            //return $diferencia;
        }
*/
        function getIntervalDays()
        {   

            $CheckIn = this.getDesde();
            $CheckOut = this.getHasta();

            $CheckInX = explode("-", $CheckIn); 
            $CheckOutX =  explode("-", $CheckOut);

            $date1 =  mktime(0, 0, 0, $CheckInX[1],$CheckInX[2],$CheckInX[0]); 
            $date2 =  mktime(0, 0, 0, $CheckOutX[1],$CheckOutX[2],$CheckOutX[0]); 
            $interval =($date2 - $date1)/(3600*24); 
            $horasTot=1*$interval;
            return  13; 


        }
/**/
        /**
         * Set hasta
         *
         * @param \Date $hasta
         *
         * @return Solicitud
         */
        public function setHasta($hasta)
        {
            $this->hasta = $hasta;
        
            return $this;
        }

        /**
         * Get hasta
         *
         * @return \Date
         */
        public function getHasta()
        {
            return $this->hasta;
        }

        /**
         * Set totalHoras
         *
         * @param integer $totalHoras
         *
         * @return Solicitud
         */
        public function setTotalHoras($totalHoras)
        {
            $this->totalHoras = $totalHoras;
        
            return $this;
        }

        /**
         * Get totalHoras
         *
         * @return integer
         */
        public function getTotalHoras()
        {
            return $this->totalHoras;
        }

        /**
         * Set horario
         *
         * @param string $horario
         *
         * @return Solicitud
         */
        public function setHorario($horario)
        {
            $this->horario = $horario;
        
            return $this;
        }

        /**
         * Get horario
         *
         * @return string
         */
        public function getHorario()
        {
            return $this->horario;
        }

    /*-----------------------------Datos del evento---------------------------*/

        /**
         * Set lugarEvento
         *
         * @param string $lugarEvento
         *
         * @return Solicitud
         */
        public function setLugarEvento($lugarEvento)
        {
            $this->lugarEvento = $lugarEvento;

            return $this;
        }

        /**
         * Get lugarEvento
         *
         * @return string
         */
        public function getLugarEvento()
        {
            return $this->lugarEvento;
        }

        /**
         * Set serviciosContratados
         *
         * @param array $serviciosContratados
         *
         * @return Solicitud
         */
        public function setServiciosContratados($serviciosContratados)
        {
            $this->serviciosContratados = $serviciosContratados;

            return $this;
        }

        /**
         * Get serviciosContratados
         *
         * @return array
         */
        public function getServiciosContratados()
        {
            return $this->serviciosContratados;
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
