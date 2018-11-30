<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends Controller
{

    /**
     * @Route("/", name="dashboard")
     */
    public function dashboardAction()
    {
        $title = "Dashboard";
        return $this->render('default/index.html.twig', ["title" => $title]);
    }

    /**
     * @Route("/dashboard/establishments/", name="establishments")
     */
    public function establishmentsAction()
    {
        
        $title = "Establishments";
        return $this->render('default/establishments.html.twig', ["title" => $title]);
    }
    /**
     * @Route("/dashboard/categories/", name="categories")
     */
    public function categoriesAction()
    {
        $title = "Categories";
        return $this->render('default/categories.html.twig', ["title" => $title]);
    }
}
