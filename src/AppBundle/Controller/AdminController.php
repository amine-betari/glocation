<?php

namespace AppBundle\Controller;

use EasyCorp\Bundle\EasyAdminBundle\Controller\AdminController as BaseAdminController;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Knp\Bundle\SnappyBundle\Snappy\Response\PdfResponse;



class AdminController  extends BaseAdminController
{
	/** @var array The full configuration of the entire backend */
    protected $config;
    /** @var array The full configuration of the current entity */
    protected $entity;
    /** @var Request The instance of the current Symfony request */
    protected $request;
    /** @var EntityManager The Doctrine entity manager for the current entity */
    protected $em;
	
	/** @Route("/new", name="easyadmin") */
    public function newAction()
    {
        // you can override this method to perform additional checks and to
        // perform more complex logic before redirecting to the other methods
		//dump($this->get('knp_snappy.pdf'));
		//exit;
		return parent::newAction();
    }
	
	/** @Route("/print", name="print") */
	public function printAction()
	{
		$id = $this->request->query->get('id');
		$easyadmin = $this->request->attributes->get('easyadmin');
		// contrat 
		$entity = $easyadmin['item'];
		
		
		
		$html = $this->renderView('AppBundle:Print:contrat.html.twig', array(
            'contrat'  => $entity
        ));
		
		//return $html;
		$filename = $entity->getNumContrat();
		return new PdfResponse(
            $this->get('knp_snappy.pdf')->getOutputFromHtml($html),
            ''.$filename.'.pdf'
        );
	}
}
