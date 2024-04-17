<?php

namespace App\Controller;

use App\Model\Drink;
use Psr\Log\LoggerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DrinkApiController extends AbstractController
{
    #[Route(path: '/api/drinks', name: 'getDrinks')]
    public function getCollection(LoggerInterface $logger): Response
    {
        // dd($logger);
        $logger->info('Drinks collection retrieved!');
        $var = [
            new Drink(1, 'Gorrila', 'energy drink', '450', 'lowmid'),
            new Drink(2, 'Drive me', 'energy drink', '300', 'good'),
        ];

        // return new Response(json_encode($var));
        return $this->json($var);
    }
}
