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
		return parent::newAction();
    }
	
	/** @Route("/print", name="print") */
	public function printAction()
	{
		$id = $this->request->query->get('id');
		$easyadmin = $this->request->attributes->get('easyadmin');

		$entity = $easyadmin['item'];
		
		$interval = date_diff($entity->getDateDepart(), $entity->getDateRetourPrevu());
		
		$html = $this->renderView('AppBundle:Print:contrat.html.twig', array(
            'contrat'  => $entity,
			'nbrJours' => $interval->format('%a jours'),
        ));
		
		$filename = $entity->getNumContrat();

		return new PdfResponse(
            $this->get('knp_snappy.pdf')->getOutputFromHtml($html),
            ''.$filename.'.pdf'
        );
	}
}
