<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    #[Route('/', name: 'app_home')]
    public function index(): Response
    {
        // Données factices
        $properties = [
            ['id' => 1, 'title' => 'Villa Casablanca', 'price' => 25000, 'city' => 'Casablanca', 'type' => 'villa'],
            ['id' => 2, 'title' => 'Appartement Rabat', 'price' => 8000, 'city' => 'Rabat', 'type' => 'appartement'],
            ['id' => 3, 'title' => 'Riad Marrakech', 'price' => 12000, 'city' => 'Marrakech', 'type' => 'riad'],
            ['id' => 4, 'title' => 'Studio Fès', 'price' => 1800, 'city' => 'Fès', 'type' => 'studio'],
        ];

        return $this->render('home/index.html.twig', [
            'properties' => $properties,
        ]);
    }

    #[Route('/property', name: 'app_property')] 
    public function property(): Response
    {
        // Mêmes données
        $properties = [
            ['id' => 1, 'title' => 'Villa Casablanca', 'price' => 25000, 'city' => 'Casablanca', 'type' => 'villa', 'surface' => 300, 'bedrooms' => 5],
            ['id' => 2, 'title' => 'Appartement Rabat', 'price' => 8000, 'city' => 'Rabat', 'type' => 'appartement', 'surface' => 120, 'bedrooms' => 3],
            ['id' => 3, 'title' => 'Riad Marrakech', 'price' => 12000, 'city' => 'Marrakech', 'type' => 'riad', 'surface' => 250, 'bedrooms' => 4],
            ['id' => 4, 'title' => 'Studio Fès', 'price' => 1800, 'city' => 'Fès', 'type' => 'studio', 'surface' => 25, 'bedrooms' => 1],
        ];

        return $this->render('home/property.html.twig', [
            'properties' => $properties,
        ]);
    }

    #[Route('/about', name: 'app_about')]
public function about(): Response
{
    return $this->render('home/about.html.twig');
}
}