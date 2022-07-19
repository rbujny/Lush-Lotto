<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class GameController extends AbstractController
{
    /**
     * @Route("/game/{slug}", name="app_game")
     */
    public function showGamePage(string $slug): Response
    {
        return $this->render('games/game.html.twig', array(
            'slug' => $slug
        ));
    }

}