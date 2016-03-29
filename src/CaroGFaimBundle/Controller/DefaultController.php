<?php

namespace CaroGFaimBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use CaroGFaimBundle\Entity\diner;
use CaroGFaimBundle\Form\dinerType;


class DefaultController extends Controller
{
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        //$diner = $em->getRepository('CaroGFaimBundle:diner')->findNextDiner();
        $diner = "";

        return $this->render(
            'CaroGFaimBundle:Default:index.html.twig',
            array("diner" => $diner));
    }
}
