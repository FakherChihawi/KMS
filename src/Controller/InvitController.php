<?php

namespace App\Controller;

use App\Entity\Mail;
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
        $mail = new Mail();
        dump($mail);
        die;

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
