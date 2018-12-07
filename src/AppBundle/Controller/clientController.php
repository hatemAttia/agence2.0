<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class clientController extends Controller
{
    /**
     * @Route("/client/")
     */
    public function indextempAction()
    {
        
        
        return $this->render('template/index.html.twig');
    }

    /**
     * @Route("client/page/")
     */
    public function pageAction()
    {
        
        
        return $this->render('template/page.html.twig');
    }
    /**
     * @Route("client/contact/")
     */
    public function contactAction()
    {
        
        
        return $this->render('template/contact.html.twig');
    }
     /**
     * @Route("client/about/")
     */
    public function aboutAction()
    {
        
        
        return $this->render('template/about.html.twig');
    }
    
    /**
     * @Route("client/page/produit")
     */
    public function produitAction()
    {
        
        
        return $this->render('template/produit.html.twig');
    }
}
