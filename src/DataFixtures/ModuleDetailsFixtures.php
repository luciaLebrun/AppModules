<?php

namespace App\DataFixtures;

use App\Entity\ModuleDetails;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Persistence\ObjectManager;

class ModuleDetailsFixtures extends Fixture implements DependentFixtureInterface
{
    public function load(ObjectManager $manager)
    {

        $moduledetails = new ModuleDetails();
        $moduledetails->setSemaine(36);
        $moduledetails->setNbGroupe(1);
        $moduledetails->setTypeCour('CM');
        $moduledetails->setTrigramme($this->getReference('ECa'));
        $moduledetails->setPPN($this->getReference('M1102'));
        $manager->persist($moduledetails);

        $moduledetails = new ModuleDetails();
        $moduledetails->setSemaine(36);
        $moduledetails->setNbGroupe(1);
        $moduledetails->setTypeCour('TD');
        $moduledetails->setTrigramme($this->getReference('RC'));
        $moduledetails->setPPN($this->getReference('M1102'));
        $manager->persist($moduledetails);

        $moduledetails = new ModuleDetails();
        $moduledetails->setSemaine(36);
        $moduledetails->setNbGroupe(1);
        $moduledetails->setTypeCour('TD');
        $moduledetails->setTrigramme($this->getReference('FAB'));
        $moduledetails->setPPN($this->getReference('M1102'));
        $manager->persist($moduledetails);

        $moduledetails = new ModuleDetails();
        $moduledetails->setSemaine(36);
        $moduledetails->setNbGroupe(1);
        $moduledetails->setTypeCour('TD');
        $moduledetails->setTrigramme($this->getReference('ECa'));
        $moduledetails->setPPN($this->getReference('M1102'));
        $manager->persist($moduledetails);

        $manager->flush();
    }

    public function getDependencies()
    {
        return array(
            EnseignantFixtures::class,
            ModuleFixtures::class,
        );
    }
}
