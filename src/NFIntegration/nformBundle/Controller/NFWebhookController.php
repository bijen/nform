<?php

namespace NFIntegration\nformBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class NFWebhookController extends Controller
{
    /**
     * @Route("/nfhook/")
     * @Template()
     */
    public function indexAction()
    {

    	/*
    	$f = fopen('/Applications/MAMP/htdocs/bijen/hook.log', 'a+');
    	$d = date('Y-m-d H:i:s');

    	$data = json_decode(file_get_contents('php://input'));
    	fwrite($f, print_r($data, true));
    	fclose($f);
        */
        return $this->render('NFIntegrationnformBundle:Default:index.html.twig');
    }
}
