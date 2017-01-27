<?php
/**
 * Created by PhpStorm.
 * User: jonathan
 * Date: 15/01/2017
 * Time: 13:43
 */
namespace Portail\UserBundle\Controller;

use Portail\UserBundle\Form\RegistrationType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Portail\UserBundle\Controller\Inscription;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

// Contrôleur pour l inscription des membres
class InscriptionController extends Controller
{
    /**
     * @return \Symfony\Component\HttpFoundation\Response
     * @Route("/inscription", name="Inscription")
     * @Template()
     *
     */
    public function InscriptionAction()
    {
        return $this->render('PortailUserBundle:User:inscription.html.twig');
    }

    public function RegistrationAction(Request $request)
    {

        $form = $this->createForm(new RegistrationType());
        // do your code

        return array(
            'PortailUserBundle:User:inscription.html.twig',
            array('form' => $form->createView()));

    }
}
