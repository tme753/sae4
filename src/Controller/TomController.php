<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class TomController extends AbstractController{
    #[Route('/tom', name: 'app_tom')]
    public function index(): Response
    {
        return $this->render('tom/index.html.twig', [
            'controller_name' => 'TomController',
        ]);
    }
}
