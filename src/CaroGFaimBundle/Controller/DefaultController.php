<?php

namespace CaroGFaimBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('CaroGFaimBundle:Default:index.html.twig');
    }
}
