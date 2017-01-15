<?php
/**
 * Created by PhpStorm.
 * User: jonathan
 * Date: 15/01/2017
 * Time: 13:43
 */
namespace Portail\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;


// Contrôleur pour l inscription des membres
class InscriptionController extends Controller
{
    public function InscriptionAction()
    {
        return $this->render('PortailUserBundle:User:inscription.html.twig');
    }
}
