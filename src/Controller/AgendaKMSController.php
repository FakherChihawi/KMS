<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

class AgendaKMSController extends AbstractController
{
    /**
     * @Route("/agenda")
     */
    public function index():Response
    {
        return $this->render('agenda/index.html.twig');
    }
}
