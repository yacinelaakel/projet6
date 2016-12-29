<?php

namespace Portail\WebBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('PortailWebBundle:Default:index.html.twig');
    }
}
