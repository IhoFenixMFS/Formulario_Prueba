<?php

namespace FormularioBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use FormularioBundle\Entity\Solicitudes;
use FormularioBundle\Entity\Facturacion;
use FormularioBundle\Entity\Lugares;
use FormularioBundle\Entity\Servicios;
use FormularioBundle\Entity\ServiciosSolicitados;
use FormularioBundle\Entity\Solicitante;
use Symfony\Component\Form\Forms;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\HttpFoundation\HttpFoundationExtension;

use FormularioBundle\Form\FacturacionType;
use FormularioBundle\Form\LugaresType;
use FormularioBundle\Form\ServiciosSolicitadosType;
use FormularioBundle\Form\ServiciosType;
use FormularioBundle\Form\SolicitanteType;
use FormularioBundle\Form\SolicitudesType;




class FormController extends Controller
{   
  /*Acciones básicas*/
    public function homeAction ()
      {   
        $repository = $this->getDoctrine()->getMAnager();
        $solicitudes = $repository->getRepository('FormularioBundle:Solicitudes')->findAll();
        $facturaciones = $repository->getRepository('FormularioBundle:Facturacion')->findAll();
        $lugares = $repository->getRepository('FormularioBundle:Lugares')->findAll();
        $servicios = $repository->getRepository('FormularioBundle:Servicios')->findAll();
        $serSolicitados = $repository->getRepository('FormularioBundle:ServiciosSolicitados')->findAll();
        $solicitantes = $repository->getRepository('FormularioBundle:Solicitante')->findAll(); 
        
        return $this->render('@Formulario/Form/home.html.twig', array('servicios'=> $servicios, 'solicitudes'=> $solicitudes, 'facturaciones'=> $facturaciones, 'lugares'=> $lugares, 'serSolicitados'=> $serSolicitados, 'solicitantes'=> $solicitantes));
      }
    
    public function indexAction()
      {
        $repository = $this->getDoctrine()->getMAnager();
        $solicitudes = $repository->getRepository('FormularioBundle:Solicitudes')->findAll();
        $facturaciones = $repository->getRepository('FormularioBundle:Facturacion')->findAll();
        $lugares = $repository->getRepository('FormularioBundle:Lugares')->findAll();
        $servicios = $repository->getRepository('FormularioBundle:Servicios')->findAll();
        $serSolicitados = $repository->getRepository('FormularioBundle:ServiciosSolicitados')->findAll();
        $solicitantes = $repository->getRepository('FormularioBundle:Solicitante')->findAll(); 
        
        return $this->render('@Formulario/Form/index.html.twig', array('servicios'=> $servicios, 'solicitudes'=> $solicitudes, 'facturaciones'=> $facturaciones, 'lugares'=> $lugares, 'serSolicitados'=> $serSolicitados, 'solicitantes'=> $solicitantes));

      }

    public function viewAction ()
      {   
        $repository = $this->getDoctrine()->getMAnager();
        $solicitudes = $repository->getRepository('FormularioBundle:Solicitudes')->findAll();
        $facturaciones = $repository->getRepository('FormularioBundle:Facturacion')->findAll();
        $lugares = $repository->getRepository('FormularioBundle:Lugares')->findAll();
        $servicios = $repository->getRepository('FormularioBundle:Servicios')->findAll();
        $serSolicitados = $repository->getRepository('FormularioBundle:ServiciosSolicitados')->findAll();
        $solicitantes = $repository->getRepository('FormularioBundle:Solicitante')->findAll(); 
        
        return $this->render('@Formulario/Form/view.html.twig', array('servicios'=> $servicios, 'solicitudes'=> $solicitudes, 'facturaciones'=> $facturaciones, 'lugares'=> $lugares, 'serSolicitados'=> $serSolicitados, 'solicitantes'=> $solicitantes));
      }

    public function formAction(Request $request)
      {
        $curso = new Curso();
        $form = $this->createForm(CursoType::class, $curso);
         
        return $this->render('AppBundle:Pruebas:form.html.twig', array('form' => $form->createView()));
      }

    public function addAction(Request $request)
      {
      /*
            https://symfony.com/doc/3.4/form/direct_submit.html#form-call-submit-directly
            If you need more control over exactly when your form is submitted or which data is passed to it, you can use the submit() for this. Read more about it Calling Form::submit() manually.
        */
          $solicitudes = new Solicitudes();

          $form = $this->createForm(SolicitudesType::class, $solicitudes);

          return $this->render('AppBundle:Pruebas:add.html.twig', array('form' => $form->createView()));
      }

/*
    public function addAction()
      {   
        //1
        while(true)
          {
              $formFactory = Forms::createFormFactory();

              $form = $formFactory->createBuilder() ->add('firstName', 'Symfony\Component\Form\Extension\Core\Type\TextType') ->add('lastName', 'Symfony\Component\Form\Extension\Core\Type\TextType') ->add('age', 'Symfony\Component\Form\Extension\Core\Type\IntegerType') ->add('gender', 'Symfony\Component\Form\Extension\Core\Type\ChoiceType', array( 'choices' => array('Male' => 'm', 'Female' => 'f'), )) ->getForm();

              $formFactory = Forms::createFormFactoryBuilder()
                            ->addExtension(new HttpFoundationExtension())
                            ->getFormFactory();

              $form->handleRequest($request);
              
              $form->handleRequest($request);
              return $this->render('AppBundle:Pruebas:add.html.twig', array('form' => $form->createView()));
          }
        //2
        while(true)
          {
              $solicitud = new Solicitudes();
              $facturacion = new Facturacion();
              $lugares = new Lugares();
              $servicios = new Servicios();
              $servSolicitados = new ServiciosSolicitados();
              $solicitante = new Solicitante();

              $formFactory = Forms::createFormFactory();
              $form->handleRequest($request);
              
              $formFactory = Forms::createFormFactoryBuilder()
                            ->addExtension(new HttpFoundationExtension())
                            ->getFormFactory();
              $form->handleRequest($request);
          }
        
        return $this->render('AppBundle:Pruebas:add.html.twig', array('form' => $form->createView()));
      }
*/

    public function deleteAction ($id)
      {   
        $repository = $this->getDoctrine()->getMAnager();
        $solicitudes = $repository->getRepository('FormularioBundle:Solicitudes')->findAll();
        $facturaciones = $repository->getRepository('FormularioBundle:Facturacion')->findAll();
        $lugares = $repository->getRepository('FormularioBundle:Lugares')->findAll();
        $servicios = $repository->getRepository('FormularioBundle:Servicios')->findAll();
        $serSolicitados = $repository->getRepository('FormularioBundle:ServiciosSolicitados')->findAll();
        $solicitantes = $repository->getRepository('FormularioBundle:Solicitante')->findAll(); 
        
        return $this->render('@Formulario/Form/delete.html.twig', array('servicios'=> $servicios, 'solicitudes'=> $solicitudes, 'facturaciones'=> $facturaciones, 'lugares'=> $lugares, 'serSolicitados'=> $serSolicitados, 'solicitantes'=> $solicitantes));
      }

    public function editAction($id)
      {   
        $repository = $this->getDoctrine()->getMAnager();
        $solicitudes = $repository->getRepository('FormularioBundle:Solicitudes')->findAll();
        $facturaciones = $repository->getRepository('FormularioBundle:Facturacion')->findAll();
        $lugares = $repository->getRepository('FormularioBundle:Lugares')->findAll();
        $servicios = $repository->getRepository('FormularioBundle:Servicios')->findAll();
        $serSolicitados = $repository->getRepository('FormularioBundle:ServiciosSolicitados')->findAll();
        $solicitantes = $repository->getRepository('FormularioBundle:Solicitante')->findAll(); 
        
        return $this->render('@Formulario/Form/edit.html.twig', array('servicios'=> $servicios, 'solicitudes'=> $solicitudes, 'facturaciones'=> $facturaciones, 'lugares'=> $lugares, 'serSolicitados'=> $serSolicitados, 'solicitantes'=> $solicitantes));
      }

    /*Pruebas con las tablas:*/
    public function tablasAction()
      {
          $repository = $this->getDoctrine()->getMAnager();
          
          $facturaciones = $repository->getRepository('FormularioBundle:Facturacion')->findAll();
          $lugares = $repository->getRepository('FormularioBundle:Lugares')->findAll();
          $servicios = $repository->getRepository('FormularioBundle:Servicios')->findAll();
          $serSolicitados = $repository->getRepository('FormularioBundle:ServiciosSolicitados')->findAll();
          $solicitantes = $repository->getRepository('FormularioBundle:Solicitante')->findAll();
          $solicitudes = $repository->getRepository('FormularioBundle:Solicitudes')->findAll();

          return $this->render('@Formulario/Form/tablas.html.twig', array('servicios'=> $servicios, 'solicitudes'=> $solicitudes, 'facturaciones'=> $facturaciones, 'lugares'=> $lugares, 'serSolicitados'=> $serSolicitados, 'solicitantes'=> $solicitantes));
      }

    public function tablaMezclaAction()
        {       
          $repository = $this->getDoctrine()->getMAnager();
          $solicitudes = $repository->getRepository('FormularioBundle:Solicitudes')->findAll();
          $facturaciones = $repository->getRepository('FormularioBundle:Facturacion')->findAll();
          $lugares = $repository->getRepository('FormularioBundle:Lugares')->findAll();
          $servicios = $repository->getRepository('FormularioBundle:Servicios')->findAll();
          $serSolicitados = $repository->getRepository('FormularioBundle:ServiciosSolicitados')->findAll();
          $solicitantes = $repository->getRepository('FormularioBundle:Solicitante')->findAll(); 
          
          return $this->render('@Formulario/Form/tmezcla.html.twig', array('servicios'=> $servicios, 'solicitudes'=> $solicitudes, 'facturaciones'=> $facturaciones, 'lugares'=> $lugares, 'serSolicitados'=> $serSolicitados, 'solicitantes'=> $solicitantes));

        }

    public function tablaFacturacionAction()
        {
           $repository = $this->getDoctrine()->getMAnager();
          $facturaciones = $repository->getRepository('FormularioBundle:Facturacion')->findAll();
         
          return $this->render('@Formulario/Form/facturacion.html.twig', array('facturaciones'=> $facturaciones));
        }

    public function tablaLugaresAction()
        {
          $repository = $this->getDoctrine()->getMAnager();
          $lugares = $repository->getRepository('FormularioBundle:Lugares')->findAll();
         
          return $this->render('@Formulario/Form/lugares.html.twig', array('lugares'=> $lugares));
        }

    public function tablaServiciosAction()
        {
          $repository = $this->getDoctrine()->getMAnager();
          $servicios = $repository->getRepository('FormularioBundle:Servicios')->findAll();
         
          return $this->render('@Formulario/Form/servicios.html.twig', array('servicios'=> $servicios));
        }

    public function tablaServiciosSolicitadosAction()
        {
          $repository = $this->getDoctrine()->getMAnager();
          $serSolicitados = $repository->getRepository('FormularioBundle:ServiciosSolicitados')->findAll();
         
          return $this->render('@Formulario/Form/serSolicitados.html.twig', array('serSolicitados'=> $serSolicitados));

        }

    public function tablaSolicitanteAction()
        {
             $repository = $this->getDoctrine()->getMAnager();
          $solicitantes = $repository->getRepository('FormularioBundle:Solicitante')->findAll(); 
         
          return $this->render('@Formulario/Form/solicitante.html.twig', array('solicitantes'=> $solicitantes));
        }

    public function tablasolicitudesAction()
        {
           $repository = $this->getDoctrine()->getMAnager();
          $solicitudes = $repository->getRepository('FormularioBundle:Solicitudes')->findAll();
         
          return $this->render('@Formulario/Form/solicitudes.html.twig', array('solicitudes'=> $solicitudes));

        }

    /* ejemplos de pruebas */
    public function ejemploAction ($page)
        {
            if ($page==0) {
                $res = '<h1><font style="background-color:#DBA901;" color=#FFFFFF>No ha indicado ningun ejemplo válido.</font></h1>';
            } else {
                
                if (($page%2)==0) {
                    # code...
                    /*$res .= '<font style="background-color:#4A235A;" color=\'white\'>No ha indicado ningun ejemplo válido.</font>';*/
                    $res = '<h1><font style="background-color:#B40486;" color=#F5F6CE>Esto es el ejemplo numero:</font>';
                    $res .= '<font style="background-color:#F5F6CE;" color=#B40486> ' . $page . '.</font></h1>';
                } else {
                    # code...
                    $res = '<h1><font style="background-color:#F5F6CE;" color=#B40486>Esto es el ejemplo numero:</font>';
                    $res .= '<font style="background-color:#B40486;" color=#F5F6CE> ' . $page . '.</font></h1>';
                }
                
                
            }

            return new Response ($res);
        }

    public function ejemplo2Action ()
        {   
            $em = $this->getDoctrine()->getMAnager();

            $servicios = $em->getRepository('FormularioBundle:Servicios')->findAll();

            $res='Lista de servicios: </br>';
            foreach ($servicios as $servicio)
            {
                $res.= $servicio->getNombreServicio() . '</br>';
            }

            return new Response ($res);
        }

}