<?php

namespace Portail\WebBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Portail\WebBundle\Form\ContactType;
use Portail\WebBundle\Entity\Contact;

class HomeController extends Controller
{
    public function indexAction(Request $request)
    {
        $contact = new Contact();
        $form = $this->createForm(ContactType::class, $contact);

        $form->handleRequest($request);

        // On rentre dans le if si l'utilisateur a soumis le formulaire de contact et que les informations sont valide
        if ($form->isSubmitted() && $form->isValid()) {

            $request->getSession()->getFlashBag()->add('good', 'Message bien envoyé.');
            //L'instruction ci dessous permet de renvoyer à la page d'accueil mais à la partie #partContact
            return $this->redirectToRoute('portail_web_homepage', ['_fragment' => 'partContact']);
        } else {
            if($request->isMethod('POST')) {
            	//J'ai crée ce return pour que le navigateur se place sur la partie contact lorsqu'il y a une erreur
                return $this->render('PortailWebBundle:Home:index.html.twig', array('form' => $form->createView(), 'partContact' => 'partContact'));
            }
        }

        return $this->render('PortailWebBundle:Home:index.html.twig', array('form' => $form->createView()));
    }
}
