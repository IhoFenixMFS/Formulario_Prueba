<?php

namespace FormularioBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Symfony\Component\HttpFoundation\Request;

use Symfony\Component\Form\Extension\HttpFoundation\HttpFoundationExtension;
use Symfony\Component\Form\Forms;

use FormularioBundle\Entity\Calculo;
use FormularioBundle\Entity\Datos;
use FormularioBundle\Entity\Duracion;
use FormularioBundle\Entity\Facturacion;
use FormularioBundle\Entity\Lugares;
use FormularioBundle\Entity\Servicios;



use FormularioBundle\Form\CalculoType;
use FormularioBundle\Form\DatosType;
use FormularioBundle\Form\FacturacionType;
use FormularioBundle\Form\DuracionType;

class FormularioController extends Controller
{
    public function indexAction()
    {
        return $this->render('FormularioBundle:Formulario:index.html.twig');
    }

    public function calculoAction(Request $request)
	{
		$calculo = new Calculo();

        $form = $this->createForm(CalculoType::class, $calculo);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) 
            {
                $solicitud = $form->getData();

                // ... perform some action, such as saving the task to the database
                // for example, if Task is a Doctrine entity, save it!
             $entityManager = $this->getDoctrine()->getManager();
                 $entityManager->persist($solicitud);
                 $entityManager->flush();

                return $this->redirectToRoute('formulario_datos');   
        }

		return $this->render('@Formulario/Formulario/calculo.html.twig', array('form' => $form->createView()));  
	}

    public function datosAction(Request $request)
    {
        $datos = new Datos();

        $form = $this->createForm(DatosType::class, $datos);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) 
            {
                $solicitud = $form->getData();

                // ... perform some action, such as saving the task to the database
                // for example, if Task is a Doctrine entity, save it!
                 $entityManager = $this->getDoctrine()->getManager();
                 $entityManager->persist($solicitud);
                 $entityManager->flush();

                return $this->redirectToRoute('formulario_datos');   
        }

        return $this->render('@Formulario/Formulario/datos.html.twig', array('form' => $form->createView()));  
    }

    public function facturacionAction(Request $request)
    {
        $facturacion = new Facturacion();

        $form = $this->createForm(FacturacionType::class, $facturacion);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) 
            {
                $solicitud = $form->getData();

                // ... perform some action, such as saving the task to the database
                // for example, if Task is a Doctrine entity, save it!
                 $entityManager = $this->getDoctrine()->getManager();
                 $entityManager->persist($solicitud);
                 $entityManager->flush();

                return $this->redirectToRoute('formulario_datos');   
        }

        return $this->render('@Formulario/Formulario/facturacion.html.twig', array('form' => $form->createView()));  
    }

    public function duracionAction(Request $request)
    {
        $datos = new Duracion();

        $form = $this->createForm(DuracionType::class, $datos);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) 
            {
                $solicitud = $form->getData();

                // ... perform some action, such as saving the task to the database
                // for example, if Task is a Doctrine entity, save it!
                 $entityManager = $this->getDoctrine()->getManager();
                 $entityManager->persist($solicitud);
                 $entityManager->flush();

                return $this->redirectToRoute('formulario_duracion');   
        }

    return $this->render('@Formulario/Formulario/duracion.html.twig', array('form' => $form->createView()));  
    }

}
