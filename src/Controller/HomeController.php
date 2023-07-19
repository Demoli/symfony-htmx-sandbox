<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    #[Route('/', name: 'home')]
    public function index(): Response
    {
        return $this->render('home/index.html.twig', []);
    }

    #[Route('/clicked', name: 'home_clicked')]
    public function clicked(): Response
    {
        return $this->render('home/clicked.html.twig', []);
    }

    #[Route('/welcome', name: 'home_welcome', methods: ['POST'])]
    public function welcome(Request $request): Response
    {
        return $this->render('home/welcome.html.twig', $request->getPayload()->all());
    }
}
