<?php
/**
 * Created by PhpStorm.
 * User: jonathan
 * Date: 29/01/2017
 * Time: 16:57
 */


namespace Portail\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Portail\WebBundle\Form\ContactType;
use Portail\WebBundle\Entity\Contact;

class RegistrationController extends Controller
{
    public function registerAction()
    {
        return $this->render('PortailUserBundle:Registration:register.html.twig');
    }
}
