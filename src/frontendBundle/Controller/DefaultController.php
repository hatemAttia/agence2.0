<?php

namespace frontendBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/fffffffffff/")
     */
    public function indextempalteAction()
    {
        
        
        return $this->render('template/index.html.twig');
    }
 }