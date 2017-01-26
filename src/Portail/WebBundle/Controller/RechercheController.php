<?php

namespace Portail\WebBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Portail\WebBundle\Form\OiseauxType;
use Portail\WebBundle\Entity\Oiseaux;

// Contrôleur pour la recherche des oiseaux
class RechercheController extends Controller
{
  public function rechercheAction(Request $request)
  {
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
          //Récupère les observations associées à cet oiseau
          $observations = $item->getObservations();
      }      

      if($observations->isEmpty()) {        
        $erreur = true;
      } else {
        $erreur = false;
      } 

      //On va convertir en json les observations pour éviter de passer par le DOM pour les récupérer
      $response = array();
      foreach($observations as $observation) {
        $response[] = array(
          'latitude' => $observation->getLatitude(),
          'longitude' => $observation->getLongitude(),
          'commentaire' => $observation->getCommentaire(),
          'photo' => $observation->getPhoto(),
          'nbIndividus' => $observation->getNbIndividus()
        );
      }

      $jsonResponse = json_encode($response);
      return $this->render('PortailWebBundle:Home:partieRecherche.html.twig', array('form' => $form->createView(),'observations' => $jsonResponse, 'erreur' => $erreur));
    }

    return $this->render('PortailWebBundle:Home:partieRecherche.html.twig', array('form' => $form->createView(),'listOiseaux' => $listOiseaux));
  }

}
