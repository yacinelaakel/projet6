<?php

namespace Portail\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('PortailUserBundle:Default:index.html.twig');
    }
}
