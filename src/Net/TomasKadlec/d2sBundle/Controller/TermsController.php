<?php
/**
 * Created by PhpStorm.
 * User: kadleto2
 * Date: 1.2.16
 * Time: 18:42
 */

namespace Net\TomasKadlec\d2sBundle\Controller;


use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class TermsController extends Controller
{

    /**
     * @Route("/terms", methods={"GET"})
     * @Template()
     */
    public function indexAction()
    {
        return [];
    }

}