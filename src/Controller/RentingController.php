<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class RentingController extends AbstractController
{
    #[Route('/renting', name: 'app_renting')]
    public function index(): Response
    {
        return $this->render('renting/index.html.twig', [
            'controller_name' => 'adam',
        ]);
    }
}
