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

    public function doneAction()
        {
            return $this->render('@Audiovisuales/Solicitud/done.html.twig');
        }

    public function errorAction()
        {
            return $this->render('@Audiovisuales/Solicitud/error.html.twig');
        }

    public function nuevaAction(Request $request)
    	{
    		$solicitud = new Solicitud();

        	$form = $this->createForm(SolicitudType::class, $solicitud);

            $form->handleRequest($request);

            if ($form->isSubmitted() && $form->isValid()) 
                {
                    $solicitud = $form->getData();

                    // ... perform some action, such as saving the task to the database
                    // for example, if Task is a Doctrine entity, save it!
                     $entityManager = $this->getDoctrine()->getManager();
                     $entityManager->persist($solicitud);
                     $entityManager->flush();

                    return $this->redirectToRoute('audiovisuales_done');   
            }
            
			return $this->render('@Audiovisuales/Solicitud/nueva.html.twig', array('form' => $form->createView()));  
    	}
}
