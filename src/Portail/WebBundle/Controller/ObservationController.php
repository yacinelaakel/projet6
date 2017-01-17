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
            // $file stores the uploaded PDF file
            /** @var Symfony\Component\HttpFoundation\File\UploadedFile $file */
            $photo = $observation->getPhoto();

            // Generate a unique name for the file before saving it
            $fileName = md5(uniqid()).'.'.$photo->guessExtension();

            // Move the file to the directory where brochures are stored
            $photo->move($this->getParameter('dossier_photos'), $fileName);

            // Update the 'brochure' property to store the PDF file name
            // instead of its contents
            $observation->setPhoto($fileName);

            $em = $this->getDoctrine()->getManager();
            $em->persist($observation);
            $em->flush();

            $request->getSession()->getFlashBag()->add('good', 'Votre observation a bien été validée.');
        	return $this->redirectToRoute('portail_web_observation', ['_fragment' => 'saisieOiseau']);
        } 
        
        return $this->render('PortailWebBundle:Home:partieObservation.html.twig', array('form' => $form->createView()));
    }
}
