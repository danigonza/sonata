<?php

namespace Tvs\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('TvsAdminBundle:Default:index.html.twig', array('name' => $name));
    }
}
