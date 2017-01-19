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
        
        return $this->render('PortailWebBundle:Home:partieObservation.html.twig', array('form' => $form->createView()));
    }
}
