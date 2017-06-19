<?php

namespace NFIntegration\nformBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\Filesystem\Filesystem;
use Symfony\Component\Filesystem\Exception\IOExceptionInterface;
use Symfony\Component\HttpFoundation\Request;


class NFWebhookController extends Controller
{
    /**
     * @Route("/nfhook/")
     * @Template()
     */
    public function indexAction(Request $request)
    {
    	
    	$fs = new Filesystem();	
    	$dt= date('Y-m-d H:i:s');
    	//$data = json_decode(file_get_contents('php://input'));
		//$fs->touch('hook.log');

		$data= $request->get('documentNumber');
		$file = $request->get('files');
    	$fs->dumpFile( 'tmp/hook.log', $dt);
		$fs->dumpFile( 'tmp/hook.log', $data);	
		$fs->dumpFile( 'tmp/hook.log', $file);	

    	/*
    	$f = fopen('tmp/hook.log', 'a+');
    	$date= date('Y-m-d H:i:s');
    	fwrite($f, "---------  DATETIME: $d -----------\n");
    	$data = json_decode(file_get_contents('php://input'));
    	fwrite($f, print_r($data, true));
    	fclose($f);
        fwrite($f, "------------- END -----------\n");
       */
        return $this->render('NFIntegrationnformBundle:Default:index.html.twig');
    }
}

