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

      $formRempli = $oiseau->getNomFr();

      //Récupérer les observations associés à cet oiseau
      
      return $this->render('PortailWebBundle:Home:partieRecherche.html.twig', array('form' => $form->createView(),'formRempli' => $formRempli));
    }

    return $this->render('PortailWebBundle:Home:partieRecherche.html.twig', array(
      'form' => $form->createView(),
      'listOiseaux' => $listOiseaux,
    ));

  }

}
