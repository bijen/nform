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

    	
    	$f = fopen('/tmp/hook.log', 'a+');
    	$d = date('Y-m-d H:i:s');
    	fwrite($f, "---------  DATETIME: $d -----------\n");
    	$data = json_decode(file_get_contents('php://input'));
    	fwrite($f, print_r($data, true));
    	fclose($f);
        fwrite($f, "------------- END -----------\n");
        return $this->render('NFIntegrationnformBundle:Default:index.html.twig');
    }
}
