<?php

namespace dciss\MyApp\BlogBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use dciss\MyApp\BlogBundle\Entity\Post;
class LoadUserData implements FixtureInterface
{
	public function load(ObjectManager $manager)
	{
		$p1 = new Post() ; 
		$p1->setDate(new \DateTime()) ; 
		$p1->setTitle("Man must explore, and this is exploration at its greatest") ; 
		$p1->setSubtitle("Problems look mighty small from 150 miles up") ;
		$p1->setSubject("Using the translation tags or filters have the same effect, but with one subtle difference: automatic output escaping is only applied to translations using a filter. In other words, if you need to be sure that your translated message is not output escaped, you must apply the raw filter after the translation filter: ") ; 
		
		$manager->persist($p1) ; 
		$manager->flush() ; 
		
		
		$p2 = new Post() ;
		$p2->setDate(new \DateTime()) ;
		$p2->setTitle("I believe every human has a finite number of heartbeats. I don't intend to waste any of mine. ") ;
		$p2->setSubtitle("The locations are listed here with the highest priority first ") ;
		$p2->setSubject("Using the translation tags or filters have the same effect, but with one subtle difference: automatic output escaping is only applied to translations using a filter. In other words, if you need to be sure that your translated message is not output escaped, you must apply the raw filter after the translation filter: ") ;
		
		$manager->persist($p2) ;
		$manager->flush() ;
		
		
		$p3 = new Post() ;
		$p3->setDate(new \DateTime()) ;
		$p3->setTitle("Man must explore, and this is exploration at its greatest") ;
		$p3->setSubtitle("Problems look mighty small from 150 miles up") ;
		$p3->setSubject("Translation Resource/File Names and Locations Symfony looks for message files (i.e. translations) in the following locations: the app/Resources/translations directory; the app/Resources/<bundle name>/translations directory; the Resources/translations/ directory inside of any bundle. The locations are listed here with the highest priority first. That is, you can override the translation messages of a bundle in any of the top 2 directories. The override mechanism works at a key level: only the overridden keys need to be listed in a higher priority message file. When a key is not found in a message file, the translator will automatically fall back to the lower priority message files. ") ;
		
		$manager->persist($p3) ;
		$manager->flush() ;
		
		
		for($i=0 ; $i<50 ; $i++) {
		$px = new Post() ;
		$px->setDate(new \DateTime()) ;
		$px->setTitle("Man must explore, and this is exploration at its greatest ") ;
		$px->setSubtitle("Problems look mighty small from 150 miles up") ;
		$px->setSubject("Translation Resource/File Names and Locations Symfony looks for message files (i.e. translations) in the following locations: the app/Resources/translations directory; the app/Resources/<bundle name>/translations directory; the Resources/translations/ directory inside of any bundle. The locations are listed here with the highest priority first. That is, you can override the translation messages of a bundle in any of the top 2 directories. The override mechanism works at a key level: only the overridden keys need to be listed in a higher priority message file. When a key is not found in a message file, the translator will automatically fall back to the lower priority message files. ") ;
		
		$manager->persist($px) ;
		$manager->flush() ;
		}
		
		
		
	}
}