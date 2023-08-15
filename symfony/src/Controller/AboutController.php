<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use function Symfony\Component\String\u;


/**
 * class AboutController
 * A controller for the page about.
 */
class AboutController extends AbstractController{
    #[Route('/about/{slug}', 'about')]
    public function about(string $slug = null): Response {
        if ($slug){
            $title = u(str_replace('-', ' ', $slug))->title(true);
        }else{
            $title = "Nous sommes l'association AGLAE.";
        }
        return new Response($title);
    }

}