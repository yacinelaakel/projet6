<?php

namespace Portail\WebBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Portail\WebBundle\Entity\Contact;
use Portail\WebBundle\Form\ContactType;

// Contrôleur qui affiche la vue partieContact.html.twig et qui gère le formulaire de contact
class ContactController extends Controller {

    public function contactAction(Request $request) {
    	$contact = new Contact();
        //Crée un formulaire contact
    	$form = $this->createForm(ContactType::class, $contact);

    	if ($request->isMethod('POST') && $form->handleRequest($request)->isValid()) {
            
    	}	

    	return $this->render('PortailWebBundle:Home:partieContact.html.twig', array('form' => $form->createView()));
    }

}