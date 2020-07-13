<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class InvitController extends AbstractController
{
    /**
     * @Route("/invit")
     */
    public function index():Response
    {
        return $this->render('invit/index.html.twig');
    }

    /**
     * @Route("/invit/send")
     */
    public function create():Response
    {
        return $this->render('invit/send.html.twig');
    }
}
