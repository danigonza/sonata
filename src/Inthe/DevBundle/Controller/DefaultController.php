<?php

namespace Inthe\DevBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('IntheDevBundle:Default:index.html.twig', array('name' => $name));
    }
}
