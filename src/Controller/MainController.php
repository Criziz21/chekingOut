<?php

namespace App\Controller;

use App\Repository\DrinkRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MainController extends AbstractController
{
    #[Route(path: '/', name: 'home')]
    public function homepage(DrinkRepository $drinks): Response
    {
        $tvar = $drinks->findAll();

        return $this->render('main/homepage.html.twig', [
            'tvar' => $tvar,
        ]);
    }
}
