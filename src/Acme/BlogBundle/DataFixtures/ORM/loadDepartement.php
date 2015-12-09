<?php


namespace Acme\BlogBundle\DataFixtures\ORM;

use Acme\BlogBundle\Entity\stagiaire;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use etu\doctrineBundle\Entity\departement;
use etu\doctrineBundle\Entity\region;


class LoadStagiaireData implements FixtureInterface
{
    public function load(ObjectManager $manager)
    {

        for($i= 0 ; $i<100 ; $i++) {
            $s = new stagiaire();
            $s->setNom("Nadir Fouka ".$i);
            $s->setMail("Nadir.fouka@dciss.org");
            $s->setNiveau("Bac+5");
            $s->setSujet("Développement web ".$i);

            $manager->persist($s);
            $manager->flush();

        }
    }
}