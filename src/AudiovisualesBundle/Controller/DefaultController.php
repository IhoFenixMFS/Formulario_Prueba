<?php

namespace AudiovisualesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('AudiovisualesBundle:Default:index.html.twig');
    }
}
