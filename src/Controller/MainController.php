<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MainController extends AbstractController
{
    #[Route(path: '/', name: 'home')]
    public function homepage(): Response
    {
        $testvar = 10;
        return $this->render('main/homepage.html.twig', [
            'testvar' => $testvar
        ]);
    }
}
