<?php

namespace FormularioBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Symfony\Component\HttpFoundation\Request;

use Symfony\Component\Form\Extension\HttpFoundation\HttpFoundationExtension;
use Symfony\Component\Form\Forms;

use FormularioBundle\Entity\Calculo;
use FormularioBundle\Entity\Datos;
use FormularioBundle\Entity\Duracion;


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
        //$duracion = new Duracion();

        $form = $this->createForm(CalculoType::class, $calculo);
        //$form2 = $this->createForm(DuracionType::class, $calculo);

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

}
