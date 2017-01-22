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

            $oiseau = explode("Nom latin : ", $oiseau->getNomFr(), 2);

            // On va chercher l'oiseau que l'utilisateur a tapé dans la base de données
            $oiseauChoisi = $repository->oiseauChoisi($oiseau[0], $oiseau[1]);  
            foreach ($oiseauChoisi as $item) {
                $oiseauChoisi = $item->getNomFr();
            }

            return $this->redirectToRoute('portail_web_observationStep2', array('nomFr' => $oiseauChoisi));      
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
            
            if($photo != null) {
                //Fait appel au service portail.file_uploader qui lui même utilise la classe WebBundle/FileUploader/FileUploader.php
                $fileName = $this->get('portail.file_uploader')->upload($photo);

                //C'est le nom de la photo qui sera stocké, et non pas la photo en elle même
                $observation->setPhoto($fileName);
            }

            //Avec addObservation() l'oiseau va ajouter à sa collection l'observation et l'observation va s'associer à son oiseau
            $oiseauChoisi->addObservation($observation);

            //Il faudra ajouter cette observation à la collection d'observations de l'utilisateur concerné
            //Il faudra tester si l'utilisateur est un validateur. Si c'est le cas mettre l'observation à "Validé"

            $em = $this->getDoctrine()->getManager();
            $em->persist($observation);
            $em->flush();

            $request->getSession()->getFlashBag()->add('good', 'Votre observation a bien été validée ! Vous pouvez soumettre de nouvelles observations si vous le souhaitez.');
        	return $this->redirectToRoute('portail_web_observationStep1');
        } 
        
        return $this->render('PortailWebBundle:Home:partieObservationStep2.html.twig', array('form' => $form->createView(), 'oiseauChoisi' => $oiseauChoisi));
    }
}
