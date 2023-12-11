<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class NouveauController extends AbstractController
{
    #[Route('/genre/nouveau', name: 'app_nouveau')]
    public function index(): Response
    {
        return $this->render('genre/nouveau/index.html.twig', [
            'controller_name' => 'NouveauController',
        ]);
    }
}
