<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/")
     * @Route("/home", name="home_route")
     */
    public function index(): Response
    {
        $titre = "Home";
        return $this->render('home/index.html.twig', [
            'titre' => $titre,
        ]);
    }
}
