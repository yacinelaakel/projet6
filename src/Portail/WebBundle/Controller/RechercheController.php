<?php

namespace Portail\WebBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Portail\WebBundle\Form\ObservationType;
use Portail\WebBundle\Entity\Observation;

// Contrôleur pour la recherche des oiseaux
class RechercheController extends Controller
{
    public function rechercheAction()
    {
        return $this->render('PortailWebBundle:Home:partieRecherche.html.twig');
    }

}
