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

    /**
     * @Route("/login/", name="login")
     */
    public function loginAction(Request $request)
  {
    // Si le visiteur est déjà identifié, on le redirige vers l'accueil
   if ($this->get('security.context')->isGranted('IS_AUTHENTICATED_REMEMBERED')) {
  return $this->redirectToRoute('oc_platform_accueil');
     }
    
    // Le service authentication_utils permet de récupérer le nom d'utilisateur
    // et l'erreur dans le cas où le formulaire a déjà été soumis mais était invalide
    // (mauvais mot de passe par exemple)
    $authenticationUtils = $this->get('security.authentication_utils');

    return $this->render('default/login.html.twig', array(
      'last_username' => $authenticationUtils->getLastUsername(),
      'error'         => $authenticationUtils->getLastAuthenticationError(),
    ));
  }








}
