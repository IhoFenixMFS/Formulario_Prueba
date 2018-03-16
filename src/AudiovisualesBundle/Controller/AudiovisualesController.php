<?php

namespace AudiovisualesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

use Symfony\Component\Form\Extension\HttpFoundation\HttpFoundationExtension;
use Symfony\Component\Form\Forms;

use AudiovisualesBundle\Entity\Solicitud;
use AudiovisualesBundle\Entity\DatosFacturacion;

use AudiovisualesBundle\Form\SolicitudType;
use AudiovisualesBundle\Form\DatosFacturacionType;

class AudiovisualesController extends Controller
{
    public function indexAction()
	    {
	        return $this->render('@Audiovisuales/Default/index.html.twig');
	    }

    public function nuevaAction(Request $request)
    	{
    		$solicitud = new Solicitud();

        	$form = $this->createForm(SolicitudType::class, $solicitud);

			return $this->render('@Audiovisuales/Solicitud/nueva.html.twig', array('form' => $form->createView()));  
    	}
}
