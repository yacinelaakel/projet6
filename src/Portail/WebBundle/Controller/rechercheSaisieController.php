<?php

namespace Portail\WebBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Portail\WebBundle\Entity\Observation;
use Portail\WebBundle\Form\ObservationType;

class rechercheSaisieController extends Controller
{
    public function rechercheAction()
    {
        return $this->render('PortailWebBundle:Home:partieRecherche.html.twig');
    }

    public function saisieAction()
    {
        return $this->render('PortailWebBundle:Home:partieSaisie.html.twig');
    }

}
