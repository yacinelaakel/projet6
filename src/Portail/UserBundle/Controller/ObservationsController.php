<?php

namespace Portail\UserBundle\Controller;

use FOS\UserBundle\Event\FilterUserResponseEvent;
use FOS\UserBundle\Event\FormEvent;
use FOS\UserBundle\Event\GetResponseUserEvent;
use FOS\UserBundle\Form\Factory\FactoryInterface;
use FOS\UserBundle\FOSUserEvents;
use FOS\UserBundle\Model\UserInterface;
use FOS\UserBundle\Model\UserManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\EventDispatcher\EventDispatcherInterface;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;

/**
 * Controller managing the user profile.
 *
 * @author Christophe Coevoet <stof@notk.org>
 */
class ObservationsController extends Controller
{
    public function observationsAction() {

        $user = $this->getUser();
        if (!is_object($user) || !$user instanceof UserInterface) {
            throw new AccessDeniedException("Cet utilisateur n'a pas accès à cette section.");
        }

        $repository = $this->getDoctrine()->getManager()->getRepository('PortailUserBundle:User');

        $listObservations = $repository->find($user->getId())->getObservations();

        $nomOiseaux = array();
        foreach ($listObservations as $observation) {
            $nomOiseaux[] = array('nomFr' => $observation->getOiseaux()->getNomFr());
        }

        return $this->render('PortailUserBundle:Profile:listObservations.html.twig', array('user' => $user, 'listObservations' => $listObservations, 'nomOiseaux' => $nomOiseaux));
    }

    public function validationsAction(Request $request, $id, $valide, $rejet) {

        //L'utilisateur n'a pas le droit de venir si il n'est pas validateur
        $securityContext = $this->container->get('security.authorization_checker');
        if (!$securityContext->isGranted('ROLE_MODERATEUR')) {
          $request->getSession()->getFlashBag()->add('info', "Vous n'avez pas les droits pour accéder à cette page.");
          return $this->redirectToRoute('portail_user_profile_show');
        }   
         
        $user = $this->getUser();
        if (!is_object($user) || !$user instanceof UserInterface) {
            throw new AccessDeniedException("Cet utilisateur n'a pas accès à cette section.");
        }
        $em = $this->getDoctrine()->getManager();
        $repository = $this->getDoctrine()->getManager()->getRepository('PortailWebBundle:Observations');

        if($id != null) {
            //Si le validateur clique sur validé
            if($valide == true) {
                //Met l'état de l'observation à 2 (validé)
                $repository->find($id)->setEtat(2);
                $em->flush();
            }

            //Si le validateur clique sur rejeté
            if($rejet == true) {
                //Met l'état de l'observation à 0 (rejeté)
                $repository->find($id)->setEtat(0);
                $em->flush();
            }
        }

        //Récupère l'ensemble des observations en attente (1)
        $observationsEnAttente = $repository->observationsEnAttente();

        $nomOiseaux = array();
        $nomObservateur = array();
        foreach ($observationsEnAttente as $observation) {
            $nomOiseaux[] = array('nomFr' => $observation->getOiseaux()->getNomFr());
            $nomObservateurs[] = array('nomObs' => $observation->getUtilisateur()->getName() . ' ' . $observation->getUtilisateur()->getSurname());
        }

        return $this->render('PortailUserBundle:Profile:validationObservations.html.twig', array('user' => $user, 'observationsEnAttente' => $observationsEnAttente, 'nomOiseaux' => $nomOiseaux, 'nomObservateurs' => $nomObservateurs));
    }

}