<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MainController
{
    #[Route(path: '/', name: 'home')]
    public function homepage(): Response
    {
        return new Response('<strong>Hello<strong>');
    }
}
