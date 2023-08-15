<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Main controller
 * A controller for the main page and the menus.
 */
class MainController extends AbstractController{
    #[Route('/', 'accueil')]
    public function index(): Response {
        return new Response('In progress ...');
    }
}
