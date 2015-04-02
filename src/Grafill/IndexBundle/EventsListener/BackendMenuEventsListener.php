<?php

namespace LLPP\IndexBundle\EventsListener;

use Alangemar\AdminBundle\Event\ConfigureMenuEvent;
use Symfony\Component\EventDispatcher\EventDispatcherInterface;
use Alangemar\AdminBundle\Menu\MenuBuilder;
use Alangemar\AdminBundle\Event\MenuEvents;
use Knp\Menu\ItemInterface;
use Alangemar\AdminBundle\EventsListener\MenuEventsListener;

class BackendMenuEventsListener extends MenuEventsListener
{
	/**
	 * 
	 * @param \Knp\Menu\FactoryInterface $factory
	 * @param \Knp\Menu\ItemInterface $menu
	 * @return \Knp\Menu\ItemInterface
	 */
	protected function generateMenu(\Knp\Menu\FactoryInterface $factory, $menu = null)
	{
		$entry = $factory->createItem('Dashboard', array('route' => 'alangemar_admin_homepage'));
			$entry->setExtra(MenuBuilder::ORDER_FIELD, 1);
			$entry->setAttribute('data-icon', 'fa fa-bar-chart');
		$menu->addChild($entry);
		
		/*
		$entry = $factory->createItem('Amministratori', array('route' => 'account'));
				$entry->setExtra(MenuBuilder::ORDER_FIELD, 2);
				$entry->setAttribute('data-icon', 'fa fa-user');
			$child = $factory->createItem('Account', array('route' => 'account'));
				$child->setExtra(MenuBuilder::ORDER_FIELD, 100);
				$child->setAttribute('data-icon', 'fa fa-angle-double-right');
			$entry->addChild($child);
			$child = $factory->createItem('Gruppi utenti', array('route' => 'gruppi_utenti'));
				$child->setExtra(MenuBuilder::ORDER_FIELD, 200);
				$child->setAttribute('data-icon', 'fa fa-angle-double-right');
			$entry->addChild($child);
		$menu->addChild($entry);
		*/

		$entry = $factory->createItem('News', array('route' => 'news'));
				$entry->setExtra(MenuBuilder::ORDER_FIELD, 3);
				$entry->setAttribute('data-icon', 'fa fa-laptop');
			$child = $factory->createItem('News', array('route' => 'news'));
				$child->setExtra(MenuBuilder::ORDER_FIELD, 100);
				$child->setAttribute('data-icon', 'fa fa-angle-double-right');
			$entry->addChild($child);
			$child = $factory->createItem('Nuova News', array('route' => 'news_new'));
				$child->setExtra(MenuBuilder::ORDER_FIELD, 200);
				$child->setAttribute('data-icon', 'fa fa-angle-double-right');
			$entry->addChild($child);
			$child = $factory->createItem('Categorie', array('route' => 'categoria'));
				$child->setExtra(MenuBuilder::ORDER_FIELD, 300);
				$child->setAttribute('data-icon', 'fa fa-angle-double-right');
			$entry->addChild($child);
			$child = $factory->createItem('Tags', array('route' => 'tag'));
				$child->setExtra(MenuBuilder::ORDER_FIELD, 400);
				$child->setAttribute('data-icon', 'fa fa-angle-double-right');
			$entry->addChild($child);
			$child = $factory->createItem('Links Correlati', array('route' => 'linkcorrelato'));
				$child->setExtra(MenuBuilder::ORDER_FIELD, 500);
				$child->setAttribute('data-icon', 'fa fa-angle-double-right');
			$entry->addChild($child);
			$child = $factory->createItem('Files Allegati', array('route' => 'fileallegato'));
				$child->setExtra(MenuBuilder::ORDER_FIELD, 500);
				$child->setAttribute('data-icon', 'fa fa-angle-double-right');
			$entry->addChild($child);
		$menu->addChild($entry);

		/*
		$entry = $factory->createItem('Professional', array('route' => 'professional'));
				$entry->setExtra(MenuBuilder::ORDER_FIELD, 3);
				$entry->setAttribute('data-icon', 'fa fa-laptop');
			$child = $factory->createItem('Professional', array('route' => 'professional'));
				$child->setExtra(MenuBuilder::ORDER_FIELD, 100);
				$child->setAttribute('data-icon', 'fa fa-angle-double-right');
			$entry->addChild($child);
			$child = $factory->createItem('Nuovo professional', array('route' => 'professional_new'));
				$child->setExtra(MenuBuilder::ORDER_FIELD, 200);
				$child->setAttribute('data-icon', 'fa fa-angle-double-right');
			$entry->addChild($child);
			$child = $factory->createItem('Progetti', array('route' => 'progetto'));
				$child->setExtra(MenuBuilder::ORDER_FIELD, 300);
				$child->setAttribute('data-icon', 'fa fa-angle-double-right');
			$entry->addChild($child);
			$child = $factory->createItem('Skills professional', array('route' => 'personaskill'));
				$child->setExtra(MenuBuilder::ORDER_FIELD, 400);
				$child->setAttribute('data-icon', 'fa fa-angle-double-right');
			$entry->addChild($child);
			$child = $factory->createItem('Feebdback', array('route' => 'feedback'));
				$child->setExtra(MenuBuilder::ORDER_FIELD, 500);
				$child->setAttribute('data-icon', 'fa fa-angle-double-right');
			$entry->addChild($child);
		$menu->addChild($entry);

		$entry = $factory->createItem('Aziende', array('route' => 'azienda'));
				$entry->setExtra(MenuBuilder::ORDER_FIELD, 4);
				$entry->setAttribute('data-icon', 'fa fa-building');
			$child = $factory->createItem('Aziende', array('route' => 'azienda'));
				$child->setExtra(MenuBuilder::ORDER_FIELD, 100);
				$child->setAttribute('data-icon', 'fa fa-angle-double-right');
			$entry->addChild($child);
			$child = $factory->createItem('Nuova azienda', array('route' => 'azienda_new'));
				$child->setExtra(MenuBuilder::ORDER_FIELD, 200);
				$child->setAttribute('data-icon', 'fa fa-angle-double-right');
			$entry->addChild($child);
		$menu->addChild($entry);
		
		$entry = $factory->createItem('Cerificati, settori, skills, lingue, contratti', array('route' => 'certificato'));
				$entry->setExtra(MenuBuilder::ORDER_FIELD, 5);
				$entry->setAttribute('data-icon', 'fa fa-tags');
			$child = $factory->createItem('Certificati', array('route' => 'certificato'));
				$child->setExtra(MenuBuilder::ORDER_FIELD, 100);
				$child->setAttribute('data-icon', 'fa fa-angle-double-right');
			$entry->addChild($child);
			$child = $factory->createItem('Settori', array('route' => 'settore'));
				$child->setExtra(MenuBuilder::ORDER_FIELD, 200);
				$child->setAttribute('data-icon', 'fa fa-angle-double-right');
			$entry->addChild($child);
			$child = $factory->createItem('Categorie skills', array('route' => 'categoria'));
				$child->setExtra(MenuBuilder::ORDER_FIELD, 300);
				$child->setAttribute('data-icon', 'fa fa-angle-double-right');
			$entry->addChild($child);
			$child = $factory->createItem('Skills', array('route' => 'skill'));
				$child->setExtra(MenuBuilder::ORDER_FIELD, 400);
				$child->setAttribute('data-icon', 'fa fa-angle-double-right');
			$entry->addChild($child);
			$child = $factory->createItem('Lingue', array('route' => 'lingua'));
				$child->setExtra(MenuBuilder::ORDER_FIELD, 500);
				$child->setAttribute('data-icon', 'fa fa-angle-double-right');
			$entry->addChild($child);
			$child = $factory->createItem('Tipo contratti', array('route' => 'tipocontratto'));
				$child->setExtra(MenuBuilder::ORDER_FIELD, 600);
				$child->setAttribute('data-icon', 'fa fa-angle-double-right');
			$entry->addChild($child);
			$child = $factory->createItem('Disponibilità', array('route' => 'disponibilita'));
				$child->setExtra(MenuBuilder::ORDER_FIELD, 700);
				$child->setAttribute('data-icon', 'fa fa-angle-double-right');
			$entry->addChild($child);
		$menu->addChild($entry);
		
		$entry = $factory->createItem('Messaggi', array('route' => 'messaggio'));
			$entry->setExtra(MenuBuilder::ORDER_FIELD, 6);
			$entry->setAttribute('data-icon', 'fa fa-envelope');
		$menu->addChild($entry);
		*/
		return null;
	}
}
