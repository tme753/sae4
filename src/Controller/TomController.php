<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class TomController extends AbstractController{
    #[Route('/home', name: 'app_accueil')]
    public function acceuil(): Response
    {
        return $this->render('tom/accueil.html.twig', [
            'name' => 'Tom',
            'first_name' => 'Morand',
            'groupe_tp' => 'Groupe B1',
        ]);
    }
    #[Route('/plus', name: 'app_plus')]
    public function plus(): Response
    {
        return $this->render('tom/plus.html.twig', [
            'name' => 'Tom',
            'first_name' => 'Morand',
            'groupe_tp' => 'Groupe B1',
        ]);
    }
    #[Route('/cv', name: 'app_cv')]
    public function cv(): Response
    {
        return $this->render('tom/cv.html.twig', [
            'name' => 'Tom',
            'first_name' => 'Morand',
            'groupe_tp' => 'Groupe B1',
        ]);
    }
    #[Route('/Me_contacter', name: 'app_Me_contacter')]
    public function Me_contacter(): Response
    {
        return $this->render('tom/Me_contacter.html.twig', [
            'name' => 'Tom',
            'first_name' => 'Morand',
            'groupe_tp' => 'Groupe B1',
        ]);
    }
    #[Route('/portfolio', name: 'app_portfolio')]
    public function portfolio(): Response
    {
        return $this->render('tom/portfolio.html.twig', [
            'name' => 'Tom',
            'first_name' => 'Morand',
            'groupe_tp' => 'Groupe B1',
        ]);
    }
}
