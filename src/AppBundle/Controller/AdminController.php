<?php

namespace AppBundle\Controller;

use EasyCorp\Bundle\EasyAdminBundle\Controller\AdminController as BaseAdminController;


class AdminController  extends BaseAdminController
{
	public function persistEntity($entity)
    {
        if (method_exists($entity, 'setNumContrat')) {
            $entity->setNumContrat('LOC0'.$entity->getId());
        }
			var_dump($entity);
			exit;
        parent::persistEntity($entity);
    }
    
}
