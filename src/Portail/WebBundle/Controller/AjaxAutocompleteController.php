<?php

namespace Portail\WebBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Portail\WebBundle\Entity\Oiseaux;

class AjaxAutocompleteController extends Controller
{
    public function updateDataAction(Request $request)
    {
        $data = $request->get('input');

        $em = $this->getDoctrine()->getManager();

        $query = $em->createQuery(''
                . 'SELECT c.id, c.nomFr '
                . 'FROM PortailWebBundle:Oiseaux c '
                . 'WHERE c.nomFr LIKE :data '
                . 'ORDER BY c.nomFr ASC'
                )
                ->setParameter('data', '%' . $data . '%');
        $results = $query->getResult();

        $oiseauxList = '<ul id="matchList">';
        foreach ($results as $result) {
            $matchStringBold = preg_replace('/('.$data.')/i', '<strong>$1</strong>', $result['nomFr']); // Replace text field input by bold one
            $oiseauxList .= '<li id="'.$result['nomFr'].'">'.$matchStringBold.'</li>'; // Create the matching list - we put maching name in the ID too
        }
        $oiseauxList .= '</ul>';

        $response = new JsonResponse();
        $response->setData(array('oiseauxList' => $oiseauxList));
        return $response;
    }
}