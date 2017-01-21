<?php

namespace Portail\WebBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Portail\WebBundle\Form\OiseauxType;
use Portail\WebBundle\Entity\Oiseaux;

// Contrôleur pour la recherche des oiseaux
class RechercheController extends Controller
{
    public function rechercheAction()
    {
      $oiseau = new Oiseaux();
      $form = $this->createForm(OiseauxType::class, $oiseau);

        $repository = $this
            ->getDoctrine()
            ->getManager()
            ->getRepository('PortailWebBundle:Oiseaux')
          ;

        $listOiseaux = $repository->findBy(
            array(),                      // Critere
            array('id' => 'desc'),        // Tri
            null,                         // Limite
            null                          // Offset
          );


      return $this->render('PortailWebBundle:Home:partieRecherche.html.twig', array(
        'form' => $form->createView(),
        'listOiseaux' => $listOiseaux,
      ));

    }

    }
