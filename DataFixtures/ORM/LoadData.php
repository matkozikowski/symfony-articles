<?php

namespace My\FrontendBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use My\FrontendBundle\Entity\Name;

class LoadData implements FixtureInterface
{
	function load(ObjectManager $manager)
	{
		$data = file('data/imiona.txt');
		
		foreach($data as $i){
			$Name = new Name();
			$Name->setCaption(trim($i));
			$manager->persist($Name);
		}
		$manager->flush();
	}
}

?>