<?php
// src/AudiovisualesBundle/Validator/Constraints/RestriccionFechas.php
/*namespace AudiovisualesBundle\Validator\Constraints;

use AudiovisualesBundle\Entity\Solicitud;
use Symfony\Component\Validator\Constraint;
use Symfony\Component\Validator\ConstraintValidator;

class RestriccionFechas extends ConstraintValidator
{
	private $h; //recibir fecha hasta
	private $d; //recibir fecha desde
    public function validate($value, Constraint $constraint)
    {	
        if (!preg_match('/^[a-zA-Z0-9]+$/', $value, $matches)) {
            $this->context->buildViolation($constraint->message)
                ->setParameter('{{ string }}', $value)
                ->addViolation();
        } 
    }
}*/