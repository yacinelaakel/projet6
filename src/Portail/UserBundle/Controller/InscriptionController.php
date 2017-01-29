<?php
// src/OC/PlatformBundle/Controller/AdvertController.php

namespace Portail\UserBundle\Controller;


use Symfony\Component\HttpFoundation\Request;
use Portail\UserBundle\Entity\Profile;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Portail\UserBundle\Form\ProfileType;



class InscriptionController extends Controller
{
    public function InscriptionAction(Request $request)
    {
        $profile = new Profile();
        $form = $this->get('form.factory')->create(ProfileType::class, $profile);

        if ($request->isMethod('POST') && $form->handleRequest($request)->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($profile);
            $em->flush();
        } else {
            $request->getSession()->getFlashBag()->add('text', 'test bien enregistrée.');



            return $this->render('PortailUserBundle:User:inscription.html.twig', array(
                'form' => $form->createView(),
            ));
        }
    }
}
