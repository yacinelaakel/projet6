<?php

namespace Portail\WebBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Portail\WebBundle\Form\ObservationsType;
use Portail\WebBundle\Entity\Observations;
use Portail\WebBundle\Form\OiseauxType;
use Portail\WebBundle\Entity\Oiseaux;

// Contrôleur pour la saisie de l'observation des oiseaux
class ObservationController extends Controller
{
    public function observationAction(Request $request)
    {
        $observation = new Observations();
        $form = $this->createForm(ObservationsType::class, $observation);

        // On rentre dans le if si l'utilisateur a soumis le formulaire de contact et que les informations sont valide
        if ($request->isMethod('POST') && $form->handleRequest($request)->isValid()) {

        	return $this->redirectToRoute('portail_web_observation', ['_fragment' => 'saisieOiseau']);
        } 
        return $this->render('PortailWebBundle:Home:partieObservation.html.twig', array('form' => $form->createView()));
    }
}
