<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class TomController extends AbstractController{
    #[Route('/accueil', name: 'app_accueil')]
    public function acceuil(): Response
    {
        return $this->render('tom/accueil.html.twig', [
            'name' => 'Tom',
            'first_name' => 'Morand',
            'groupe_tp' => 'Groupe B1',
        ]);
    }
}
