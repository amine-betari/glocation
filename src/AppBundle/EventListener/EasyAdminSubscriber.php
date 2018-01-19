<?php

namespace AppBundle\EventListener;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\EventDispatcher\GenericEvent;
use AppBundle\Entity\Contrat;

class EasyAdminSubscriber implements EventSubscriberInterface
{
	CONST NUM_CONTRAT = 'LOC0';

	public static function getSubscribedEvents()
    {
        return array(
            'easy_admin.post_persist' => array('OnCreate'),
        );
    }

	
	public function OnCreate(GenericEvent $event) 
	{
		$entity = $event->getSubject();
		$em = $event->getArguments()['em'];
		
		if (!($entity instanceof Contrat)) {
            return;
        }

        $numContrat = self::NUM_CONTRAT.$entity->getId();
        $entity->setNumContrat($numContrat);

		$em->flush();
	}
}
