<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DeafultController extends AbstractController
{
    /**
     * @Route("/", name="app_homepage")
     */
    public function homepage(): Response
    {
        return $this->render("homepage/homepage.html.twig");
    }
    /**
     * @Route("/about", name="app_about")
     */
    public function aboutPage(): Response
    {
        return $this->render("homepage/about.html.twig");
    }
}