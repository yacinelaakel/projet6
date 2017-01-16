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

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $observationRemplie = $form->getData();

            $em = $this->getDoctrine()->getManager();
            $em->persist($observationRemplie);
            $em->flush();

            $request->getSession()->getFlashBag()->add('good', 'Votre observation a bien été validée.');
        	return $this->redirectToRoute('portail_web_observation', ['_fragment' => 'saisieOiseau']);
        } 
        
        return $this->render('PortailWebBundle:Home:partieObservation.html.twig', array('form' => $form->createView()));
    }
}
