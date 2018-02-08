<?php

namespace AppBundle\EventListener;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\EventDispatcher\GenericEvent;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use AppBundle\Entity\Contrat;
use AppBundle\Entity\Locataire;
use AppBundle\Entity\Facture;

class EasyAdminSubscriber implements EventSubscriberInterface
{
	CONST NUM_CONTRAT = 'LOC';
	CONST NUM_FACTURE = 'MA';
	
	public static function getSubscribedEvents()
    {
        return array(
            'easy_admin.post_persist' => array('OnCreate'),
            'easy_admin.post_update'  => array('OnUpdate'),
        );
    }

	public function OnCreate(GenericEvent $event) 
	{
		$entity = $event->getSubject();
		$em = $event->getArguments()['em'];
		
		if (!($entity instanceof Contrat)) {
            return;
        }

        $numContrat = self::NUM_CONTRAT.date('Ym').'-'.$entity->getId();
        $entity->setNumContrat($numContrat);
		
		$facture = new Facture();
		$facture->setNumFacture(self::NUM_FACTURE.date('Ym').'-'.$entity->getId());
		$facture->setNombre($entity->getNombre());
		$facture->setJours($entity->getJours());
		$facture->setMois($entity->getMois());
		$facture->setHeureSupp($entity->getHeureSupp());
		$facture->setPrixUnit($entity->getPrixUnit());
		$facture->setTotalTcc($entity->getTotalTcc());
		$facture->setFraisRemise($entity->getFraisRemise());
		$facture->setTotalTccApayer($entity->getTotalTccApayer());
		$entity->setFacture($facture);
		
		$em->persist($facture);
		$em->flush();
		
		// add fonctionnality to print a pdf
	}
	
	public function OnUpdate(GenericEvent $event) 
	{
		$entity = $event->getSubject();
		$em = $event->getArguments()['em'];
		
		if (!($entity instanceof Contrat)) {
            return;
        }
	
		$facture = $entity->getFacture();
		$facture->setNombre($entity->getNombre());
		$facture->setJours($entity->getJours());
		$facture->setMois($entity->getMois());
		$facture->setHeureSupp($entity->getHeureSupp());
		$facture->setPrixUnit($entity->getPrixUnit());
		$facture->setTotalTcc($entity->getTotalTcc());
		$facture->setFraisRemise($entity->getFraisRemise());
		$facture->setTotalTccApayer($entity->getTotalTccApayer());
		$entity->setFacture($facture);
		
		$em->flush();
	}
	
}
