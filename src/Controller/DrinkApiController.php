<?php

namespace App\Controller;

use App\Model\Drink;
use App\Repository\DrinkRepository;
// use Psr\Log\LoggerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DrinkApiController extends AbstractController
{
    #[Route(path: '/api/drinks', name: 'getDrinks')]
    public function getCollection(DrinkRepository $repository): Response
    {
        $var = $repository->findAll();

        // return new Response(json_encode($var));
        return $this->json($var);
    }
}
