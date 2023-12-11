<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class IdController extends AbstractController
{
    #[Route('/genre/id', name: 'app_id')]
    public function index(): Response
    {
        return $this->render('genre/id/index.html.twig', [
            'controller_name' => 'IdController',
        ]);
    }
}
