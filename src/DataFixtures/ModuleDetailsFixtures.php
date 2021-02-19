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
        $moduledetails->addSemaine($this->getReference('36'));
        $moduledetails->addSemaine($this->getReference('37'));
        $moduledetails->addSemaine($this->getReference('38'));
        $moduledetails->addSemaine($this->getReference('39'));
        $moduledetails->addSemaine($this->getReference('50'));
        $moduledetails->addSemaine($this->getReference('02'));
        $moduledetails->setNbGroupe(1);
        $moduledetails->setTypeCour('CM');
        $moduledetails->setTrigramme($this->getReference('ECa'));
        $moduledetails->setPPN($this->getReference('M1101'));
        $manager->persist($moduledetails);

        $moduledetails = new ModuleDetails();
        $moduledetails->addSemaine($this->getReference('40'));
        $moduledetails->addSemaine($this->getReference('41'));
        $moduledetails->addSemaine($this->getReference('42'));
        $moduledetails->addSemaine($this->getReference('45'));
        $moduledetails->setNbGroupe(1);
        $moduledetails->setTypeCour('CM');
        $moduledetails->setTrigramme($this->getReference('PCo'));
        $moduledetails->setPPN($this->getReference('M1101'));
        $manager->persist($moduledetails);

        $moduledetails = new ModuleDetails();
        $moduledetails->addSemaine($this->getReference('40'));
        $moduledetails->addSemaine($this->getReference('41'));
        $moduledetails->addSemaine($this->getReference('42'));
        $moduledetails->addSemaine($this->getReference('45'));
        $moduledetails->addSemaine($this->getReference('50'));
        $moduledetails->addSemaine($this->getReference('51'));
        $moduledetails->setNbGroupe(1);
        $moduledetails->setTypeCour('TD');
        $moduledetails->setTrigramme($this->getReference('PCo'));
        $moduledetails->setPPN($this->getReference('M1101'));
        $manager->persist($moduledetails);

        $moduledetails = new ModuleDetails();
        $moduledetails->addSemaine($this->getReference('40'));
        $moduledetails->addSemaine($this->getReference('41'));
        $moduledetails->addSemaine($this->getReference('42'));
        $moduledetails->addSemaine($this->getReference('45'));
        $moduledetails->addSemaine($this->getReference('50'));
        $moduledetails->addSemaine($this->getReference('51'));
        $moduledetails->setNbGroupe(1);
        $moduledetails->setTypeCour('TD');
        $moduledetails->setTrigramme($this->getReference('ECa'));
        $moduledetails->setPPN($this->getReference('M1101'));
        $manager->persist($moduledetails);

        $moduledetails = new ModuleDetails();
        $moduledetails->addSemaine($this->getReference('40'));
        $moduledetails->addSemaine($this->getReference('41'));
        $moduledetails->addSemaine($this->getReference('42'));
        $moduledetails->addSemaine($this->getReference('45'));
        $moduledetails->addSemaine($this->getReference('50'));
        $moduledetails->addSemaine($this->getReference('51'));
        $moduledetails->setNbGroupe(2);
        $moduledetails->setTypeCour('TD');
        $moduledetails->setTrigramme($this->getReference('DMo'));
        $moduledetails->setPPN($this->getReference('M1101'));
        $manager->persist($moduledetails);

        $moduledetails = new ModuleDetails();
        $moduledetails->addSemaine($this->getReference('36'));
        $moduledetails->addSemaine($this->getReference('37'));
        $moduledetails->addSemaine($this->getReference('38'));
        $moduledetails->addSemaine($this->getReference('39'));
        $moduledetails->addSemaine($this->getReference('40'));
        $moduledetails->addSemaine($this->getReference('41'));
        $moduledetails->addSemaine($this->getReference('42'));
        $moduledetails->addSemaine($this->getReference('45'));
        $moduledetails->addSemaine($this->getReference('46'));
        $moduledetails->addSemaine($this->getReference('47'));
        $moduledetails->addSemaine($this->getReference('48'));
        $moduledetails->addSemaine($this->getReference('49'));
        $moduledetails->addSemaine($this->getReference('50'));
        $moduledetails->addSemaine($this->getReference('51'));
        $moduledetails->addSemaine($this->getReference('02'));
        $moduledetails->addSemaine($this->getReference('03'));
        $moduledetails->setNbGroupe(2);
        $moduledetails->setTypeCour('TP');
        $moduledetails->setTrigramme($this->getReference('PCo'));
        $moduledetails->setPPN($this->getReference('M1101'));
        $manager->persist($moduledetails);

        $moduledetails = new ModuleDetails();
        $moduledetails->addSemaine($this->getReference('36'));
        $moduledetails->addSemaine($this->getReference('37'));
        $moduledetails->addSemaine($this->getReference('38'));
        $moduledetails->addSemaine($this->getReference('39'));
        $moduledetails->addSemaine($this->getReference('40'));
        $moduledetails->addSemaine($this->getReference('41'));
        $moduledetails->addSemaine($this->getReference('42'));
        $moduledetails->addSemaine($this->getReference('45'));
        $moduledetails->addSemaine($this->getReference('46'));
        $moduledetails->addSemaine($this->getReference('47'));
        $moduledetails->addSemaine($this->getReference('48'));
        $moduledetails->addSemaine($this->getReference('49'));
        $moduledetails->addSemaine($this->getReference('50'));
        $moduledetails->addSemaine($this->getReference('51'));
        $moduledetails->addSemaine($this->getReference('02'));
        $moduledetails->addSemaine($this->getReference('03'));
        $moduledetails->setNbGroupe(2);
        $moduledetails->setTypeCour('TP');
        $moduledetails->setTrigramme($this->getReference('ECa'));
        $moduledetails->setPPN($this->getReference('M1101'));
        $manager->persist($moduledetails);

        $moduledetails = new ModuleDetails();
        $moduledetails->addSemaine($this->getReference('36'));
        $moduledetails->addSemaine($this->getReference('37'));
        $moduledetails->addSemaine($this->getReference('38'));
        $moduledetails->addSemaine($this->getReference('39'));
        $moduledetails->addSemaine($this->getReference('40'));
        $moduledetails->addSemaine($this->getReference('41'));
        $moduledetails->addSemaine($this->getReference('42'));
        $moduledetails->addSemaine($this->getReference('45'));
        $moduledetails->addSemaine($this->getReference('46'));
        $moduledetails->addSemaine($this->getReference('47'));
        $moduledetails->addSemaine($this->getReference('48'));
        $moduledetails->addSemaine($this->getReference('49'));
        $moduledetails->addSemaine($this->getReference('50'));
        $moduledetails->addSemaine($this->getReference('51'));
        $moduledetails->addSemaine($this->getReference('02'));
        $moduledetails->addSemaine($this->getReference('03'));
        $moduledetails->setNbGroupe(4);
        $moduledetails->setTypeCour('TP');
        $moduledetails->setTrigramme($this->getReference('DMo'));
        $moduledetails->setPPN($this->getReference('M1101'));
        $manager->persist($moduledetails);

        $manager->flush();
    }

    public function getDependencies()
    {
        return array(
            EnseignantFixtures::class,
            ModuleFixtures::class,
            SemaineFixtures::class,
        );
    }
}
