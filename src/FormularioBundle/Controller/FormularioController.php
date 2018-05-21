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

     public function jqAction(Request $request)
    {
        $duracion = new Duracion();

        $form = $this->createForm(DuracionType::class, $duracion);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) 
            {
                $duracion = $form->getData();

                $entityManager = $this->getDoctrine()->getManager();
                $entityManager->persist($duracion);
                $entityManager->flush();
                
                return $this->redirectToRoute('formulario_pruebasJQuery');   
            }
            
        return $this->render('@Formulario/Formulario/jq.html.twig', array('form' => $form->createView()));
    }


    public function calculoAction(Request $request)
	{
		$calculo = new Calculo();
        $duracion = new Duracion();

        $form = $this->createForm(CalculoType::class, $calculo);
        $form->handleRequest($request);

        $form2 = $this->createForm(DuracionType::class, $duracion);
        $form2->handleRequest($request);


        if ($form->isSubmitted() && $form->isValid()) 
            {
                $solicitud = $form->getData();

                    $entityManager = $this->getDoctrine()->getManager();
                    $entityManager->persist($solicitud);
                    $entityManager->flush();

                    

                    if ($form2->isSubmitted() && $form2->isValid()) 
                        {
                            $duracion = $form2->getData();
                            /*
                                Aquí:
                                    2º. Almacenar en $idsol el id de la solicitud almacenada (de $solicitud)
                            */
                            $idSol = $solicitud->getid();

                            /*
                                Aquí:
                                    2º. Añandir el $idSol al obj $duracion o al $form2
                            */


                            /*
                                Aquí:
                                    3º. Con un solo sub-form "Duracion" almacenar en bbdd ya con el $idSol
                            */ 
                                $entityManager = $this->getDoctrine()->getManager();
                                $entityManager->persist($duracion);
                                $entityManager->flush();


                            /*
                                Aquí:
                                    4º. Por cada sub-form "Duracion" almacenar en bbdd ya con el $idSol
                            */

                            /*
                            foreach(x cada sub duracionType)
                            {
                                    $entityManager = $this->getDoctrine()->getManager();
                                    $entityManager->persist($duracion);
                                    $entityManager->flush();
                            }
                            */

                        }
                
                return $this->redirectToRoute('formulario_datos');   
            }
            
        /* Mediante un array se le pasa la vista generada de ambos formularios */
		return $this->render('@Formulario/Formulario/calculo.html.twig', array('form' => $form->createView(), 'form2' => $form2->createView()));
	}

    public function datosAction(Request $request)
    {
        $datos = new Datos();

        $form = $this->createForm(DatosType::class, $datos);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) 
            {
                $solicitud = $form->getData();

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

    /**
     * Funcion para añadir el subform
     */
    public function executeAddDurForm($request)
    {
         $this->forward404unless($request->isXmlHttpRequest());
         $number = intval($request->getParameter("num"));

         if($card = CardPeer::retrieveByPk($request->getParameter('id'))){
         $form = new CardForm($card);
         }else{
         $form = new CardForm(null);
         }

         $form->addPicture($number);

         return $this->renderPartial('addDur',array('form' => $form, 'num' => $number));
    }

    /**
     * Funcion para poder controlar los datos y así poder almacenarlos
     */
    public function bind(array $taintedValues = null, array $taintedFiles = null)
    {
        foreach($taintedValues['pictures'] as $key=>$newPic)
        {
            if (!isset($this['pictures'][$key]))
            {
                $this->addPicture($key);
            }
        }

        parent::bind($taintedValues, $taintedFiles);
    }
}
