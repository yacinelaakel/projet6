<?php

namespace Portail\WebBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Portail\WebBundle\Form\ObservationType;
use Portail\WebBundle\Entity\Observation;
use Portail\WebBundle\Form\OiseauxType;
use Portail\WebBundle\Entity\Oiseaux;

// Contrôleur pour la saisie de l'observation des oiseaux
class ObservationController extends Controller
{
    public function observationAction()
    {
        return $this->render('PortailWebBundle:Home:partieObservation.html.twig');
    }
}
