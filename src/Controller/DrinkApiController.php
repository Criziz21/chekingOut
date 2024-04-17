<?php

namespace App\Controller;

use App\Model\Drink;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DrinkApiController extends AbstractController
{
    #[Route(path: '/api/drinks', name: 'getDrinks')]
    public function getCollection(): Response
    {
        $var = [
            new Drink(1, 'Gorrila', 'energy drink', '450', 'lowmid'),
            new Drink(2, 'Drive me', 'energy drink', '300', 'good'),
        ];

        // return new Response(json_encode($var));
        return $this->json($var);
    }
}
