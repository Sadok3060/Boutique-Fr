<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class AboutController extends AbstractController
{
    public function about(): Response
    {
        // Render a simple static about page; does not use the database
        return $this->render('about.html.twig');
    }
}
