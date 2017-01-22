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
    public function saisieOiseauAction(Request $request) {
        $oiseau = new Oiseaux();

        $form = $this->createForm(OiseauxType::class, $oiseau);

        $repository = $this->getDoctrine()->getManager()->getRepository('PortailWebBundle:Oiseaux');

        $listOiseaux = $repository->findBy(
            array(),                      // Critere
            array('id' => 'desc'),        // Tri
            null,                         // Limite
            null                          // Offset
        );

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()) {
            //On va chercher l'oiseau que l'utilisateur a tapé
            $oiseauChoisi = $repository->oiseauChoisi($oiseau->getNomFr());

        return $this->render('PortailWebBundle:Home:partieObservationStep1.html.twig', array('form' => $form->createView(), 'listOiseaux' => $listOiseaux, 'oiseauChoisi' => $oiseauChoisi));
        }

        return $this->render('PortailWebBundle:Home:partieObservationStep1.html.twig', array('form' => $form->createView(), 'listOiseaux' => $listOiseaux));

    }

    public function observationAction(Request $request, Oiseaux $oiseauChoisi)
    {   
        $observation = new Observations();

        $form = $this->createForm(ObservationsType::class, $observation);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            //ici $observation est remplie avec les données que l'utilisateur a rentré
            //Récupère la photo que l'utilisateur a upload
            $photo = $observation->getPhoto();

            //Fait appel au service portail.file_uploader qui lui même utilise la classe WebBundle/FileUploader/FileUploader.php
            $fileName = $this->get('portail.file_uploader')->upload($file);

            //C'est le nom de la photo qui sera stocké, et non pas la photo en elle même
            $observation->setPhoto($fileName);

            //Il faudra ajouter cette observation à la collection d'observations de l'oiseau concerné
            //Il faudra ajouter cette observation à la collection d'observations de l'utilisateur concerné
            //Il faudra tester si l'utilisateur est un validateur. Si c'est le cas mettre l'observation à "Validé"

            $em = $this->getDoctrine()->getManager();
            $em->persist($observation);
            $em->flush();

            $request->getSession()->getFlashBag()->add('good', 'Votre observation a bien été validée.');
        	return $this->redirectToRoute('portail_web_observation', ['_fragment' => 'saisieOiseau']);
        } 
        
        return $this->render('PortailWebBundle:Home:partieObservationStep2.html.twig', array('form' => $form->createView(), 'oiseauChoisi' => $oiseauChoisi));
    }
}
