<?php

namespace App\DataFixtures;

use App\Entity\Semaine;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Persistence\ObjectManager;

class SemaineFixtures extends Fixture implements DependentFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $semaine = new Semaine();
        $semaine->setModule($this->getReference('M1101'));
        $semaine->setSemaine(36);
        $semaine->setCM(1);
        $semaine->setTD(0);
        $semaine->setTP(2);
        $semaine->setSurveillances(0);
        $semaine->setCharges(0);
        $semaine->setCommentaires('');
        $manager->persist($semaine);

        $semaine = new Semaine();
        $semaine->setModule($this->getReference('M1101'));
        $semaine->setSemaine(37);
        $semaine->setCM(1);
        $semaine->setTD(0);
        $semaine->setTP(2);
        $semaine->setSurveillances(0);
        $semaine->setCharges(0);
        $semaine->setCommentaires('');
        $manager->persist($semaine);

        $semaine = new Semaine();
        $semaine->setModule($this->getReference('M1101'));
        $semaine->setSemaine(38);
        $semaine->setCM(1);
        $semaine->setTD(0);
        $semaine->setTP(2);
        $semaine->setSurveillances(0);
        $semaine->setCharges(0);
        $semaine->setCommentaires('');
        $manager->persist($semaine);

        $semaine = new Semaine();
        $semaine->setModule($this->getReference('M1101'));
        $semaine->setSemaine(39);
        $semaine->setCM(1);
        $semaine->setTD(0);
        $semaine->setTP(2);
        $semaine->setSurveillances(0);
        $semaine->setCharges(0);
        $semaine->setCommentaires('');
        $manager->persist($semaine);

        $semaine = new Semaine();
        $semaine->setModule($this->getReference('M1101'));
        $semaine->setSemaine(40);
        $semaine->setCM(1);
        $semaine->setTD(1.5);
        $semaine->setTP(1.5);
        $semaine->setSurveillances(0);
        $semaine->setCharges(0);
        $semaine->setCommentaires('');
        $manager->persist($semaine);

        $semaine = new Semaine();
        $semaine->setModule($this->getReference('M1101'));
        $semaine->setSemaine(41);
        $semaine->setCM(1);
        $semaine->setTD(1.5);
        $semaine->setTP(1.5);
        $semaine->setSurveillances(0);
        $semaine->setCharges(0);
        $semaine->setCommentaires('');
        $manager->persist($semaine);

        $semaine = new Semaine();
        $semaine->setModule($this->getReference('M1101'));
        $semaine->setSemaine(42);
        $semaine->setCM(1);
        $semaine->setTD(1.5);
        $semaine->setTP(1.5);
        $semaine->setSurveillances(0);
        $semaine->setCharges(0);
        $semaine->setCommentaires('');
        $manager->persist($semaine);

        $semaine = new Semaine();
        $semaine->setModule($this->getReference('M1101'));
        $semaine->setSemaine(45);
        $semaine->setCM(1);
        $semaine->setTD(1.5);
        $semaine->setTP(1.5);
        $semaine->setSurveillances(0);
        $semaine->setCharges(0);
        $semaine->setCommentaires('');
        $manager->persist($semaine);

        $semaine = new Semaine();
        $semaine->setModule($this->getReference('M1101'));
        $semaine->setSemaine(46);
        $semaine->setCM(1);
        $semaine->setTD(0);
        $semaine->setTP(2);
        $semaine->setSurveillances(0);
        $semaine->setCharges(0);
        $semaine->setCommentaires('');
        $manager->persist($semaine);

        $semaine = new Semaine();
        $semaine->setModule($this->getReference('M1101'));
        $semaine->setSemaine(47);
        $semaine->setCM(1);
        $semaine->setTD(0);
        $semaine->setTP(2);
        $semaine->setSurveillances(0);
        $semaine->setCharges(0);
        $semaine->setCommentaires('');
        $manager->persist($semaine);

        $semaine = new Semaine();
        $semaine->setModule($this->getReference('M1101'));
        $semaine->setSemaine(48);
        $semaine->setCM(1);
        $semaine->setTD(0);
        $semaine->setTP(2);
        $semaine->setSurveillances(0);
        $semaine->setCharges(0);
        $semaine->setCommentaires('');
        $manager->persist($semaine);

        $semaine = new Semaine();
        $semaine->setModule($this->getReference('M1101'));
        $semaine->setSemaine(49);
        $semaine->setCM(1);
        $semaine->setTD(0);
        $semaine->setTP(2);
        $semaine->setSurveillances(0);
        $semaine->setCharges(0);
        $semaine->setCommentaires('');
        $manager->persist($semaine);

        $semaine = new Semaine();
        $semaine->setModule($this->getReference('M1101'));
        $semaine->setSemaine(50);
        $semaine->setCM(1);
        $semaine->setTD(1.5);
        $semaine->setTP(2);
        $semaine->setSurveillances(0);
        $semaine->setCharges(0);
        $semaine->setCommentaires('');
        $manager->persist($semaine);

        $semaine = new Semaine();
        $semaine->setModule($this->getReference('M1101'));
        $semaine->setSemaine(51);
        $semaine->setCM(0);
        $semaine->setTD(1.5);
        $semaine->setTP(2);
        $semaine->setSurveillances(0);
        $semaine->setCharges(0);
        $semaine->setCommentaires('');
        $manager->persist($semaine);

        $semaine = new Semaine();
        $semaine->setModule($this->getReference('M1101'));
        $semaine->setSemaine(02);
        $semaine->setCM(1);
        $semaine->setTD(0);
        $semaine->setTP(2);
        $semaine->setSurveillances(0);
        $semaine->setCharges(0);
        $semaine->setCommentaires('');
        $manager->persist($semaine);

        $semaine = new Semaine();
        $semaine->setModule($this->getReference('M1101'));
        $semaine->setSemaine(03);
        $semaine->setCM(0);
        $semaine->setTD(0);
        $semaine->setTP(2);
        $semaine->setSurveillances(0);
        $semaine->setCharges(0);
        $semaine->setCommentaires('');
        $manager->persist($semaine);

        $semaine = new Semaine();
        $semaine->setModule($this->getReference('M1101'));
        $semaine->setSemaine(04);
        $semaine->setCM(0);
        $semaine->setTD(0);
        $semaine->setTP(0);
        $semaine->setSurveillances(0.5);
        $semaine->setCharges(0);
        $semaine->setCommentaires('QCM');
        $manager->persist($semaine);

        $semaine = new Semaine();
        $semaine->setModule($this->getReference('M1102'));
        $semaine->setSemaine(36);
        $semaine->setCM(1);
        $semaine->setTD(2);
        $semaine->setTP(0);
        $semaine->setSurveillances(0);
        $semaine->setCharges(0);
        $semaine->setCommentaires('# TP décalés...');
        $manager->persist($semaine);

        $semaine = new Semaine();
        $semaine->setModule($this->getReference('M1102'));
        $semaine->setSemaine(37);
        $semaine->setCM(1);
        $semaine->setTD(2);
        $semaine->setTP(2);
        $semaine->setSurveillances(0);
        $semaine->setCharges(0);
        $semaine->setCommentaires('');
        $manager->persist($semaine);

        $semaine = new Semaine();
        $semaine->setModule($this->getReference('M1102'));
        $semaine->setSemaine(38);
        $semaine->setCM(1);
        $semaine->setTD(2);
        $semaine->setTP(2);
        $semaine->setSurveillances(0);
        $semaine->setCharges(0);
        $semaine->setCommentaires('');
        $manager->persist($semaine);

        $semaine = new Semaine();
        $semaine->setModule($this->getReference('M1102'));
        $semaine->setSemaine(38);
        $semaine->setCM(0);
        $semaine->setTD(0);
        $semaine->setTP(2);
        $semaine->setSurveillances(0);
        $semaine->setCharges(0);
        $semaine->setCommentaires('');
        $manager->persist($semaine);

        $semaine = new Semaine();
        $semaine->setModule($this->getReference('M1102'));
        $semaine->setSemaine(39);
        $semaine->setCM(1);
        $semaine->setTD(2);
        $semaine->setTP(2);
        $semaine->setSurveillances(0);
        $semaine->setCharges(0);
        $semaine->setCommentaires('');
        $manager->persist($semaine);

        $semaine = new Semaine();
        $semaine->setModule($this->getReference('M1102'));
        $semaine->setSemaine(40);
        $semaine->setCM(1);
        $semaine->setTD(2);
        $semaine->setTP(2);
        $semaine->setSurveillances(0);
        $semaine->setCharges(0);
        $semaine->setCommentaires('');
        $manager->persist($semaine);

        $semaine = new Semaine();
        $semaine->setModule($this->getReference('M1102'));
        $semaine->setSemaine(40);
        $semaine->setCM(0);
        $semaine->setTD(0);
        $semaine->setTP(2);
        $semaine->setSurveillances(0);
        $semaine->setCharges(0);
        $semaine->setCommentaires('');
        $manager->persist($semaine);

        $semaine = new Semaine();
        $semaine->setModule($this->getReference('M1102'));
        $semaine->setSemaine(41);
        $semaine->setCM(1);
        $semaine->setTD(2);
        $semaine->setTP(2);
        $semaine->setSurveillances(0);
        $semaine->setCharges(0);
        $semaine->setCommentaires('');
        $manager->persist($semaine);

        $semaine = new Semaine();
        $semaine->setModule($this->getReference('M1102'));
        $semaine->setSemaine(42);
        $semaine->setCM(1);
        $semaine->setTD(2);
        $semaine->setTP(2);
        $semaine->setSurveillances(0);
        $semaine->setCharges(0);
        $semaine->setCommentaires('');
        $manager->persist($semaine);

        $semaine = new Semaine();
        $semaine->setModule($this->getReference('M1102'));
        $semaine->setSemaine(42);
        $semaine->setCM(0);
        $semaine->setTD(0);
        $semaine->setTP(2);
        $semaine->setSurveillances(0);
        $semaine->setCharges(0);
        $semaine->setCommentaires('');
        $manager->persist($semaine);
        $semaine = new Semaine();

        $semaine->setModule($this->getReference('M1102'));
        $semaine->setSemaine(45);
        $semaine->setCM(1);
        $semaine->setTD(2);
        $semaine->setTP(2);
        $semaine->setSurveillances(0);
        $semaine->setCharges(0);
        $semaine->setCommentaires('');
        $manager->persist($semaine);

        $semaine = new Semaine();
        $semaine->setModule($this->getReference('M1102'));
        $semaine->setSemaine(46);
        $semaine->setCM(0);
        $semaine->setTD(0);
        $semaine->setTP(2);
        $semaine->setSurveillances(0);
        $semaine->setCharges(0);
        $semaine->setCommentaires('');
        $manager->persist($semaine);

        $semaine = new Semaine();
        $semaine->setModule($this->getReference('M1102'));
        $semaine->setSemaine(46);
        $semaine->setCM(0);
        $semaine->setTD(0);
        $semaine->setTP(2);
        $semaine->setSurveillances(0);
        $semaine->setCharges(0);
        $semaine->setCommentaires('');
        $manager->persist($semaine);

        $semaine = new Semaine();
        $semaine->setModule($this->getReference('M1102'));
        $semaine->setSemaine(47);
        $semaine->setCM(0);
        $semaine->setTD(0);
        $semaine->setTP(0);
        $semaine->setSurveillances(2);
        $semaine->setCharges(0);
        $semaine->setCommentaires('');
        $manager->persist($semaine);

        $semaine = new Semaine();
            $semaine->setModule($this->getReference('M1103'));
            $semaine->setSemaine(S46 );
            $semaine->setCM(1);
            $semaine->setTD(2);
            $semaine->setTP(0);
            $semaine->setSurveillances(0);
            $semaine->setCharges(0);
            $semaine->setCommentaires(' TP décalés');
            $manager->persist($semaine);

            $semaine = new Semaine();
            $semaine->setModule($this->getReference('M1103'));
            $semaine->setSemaine(S47 );
            $semaine->setCM(1);
            $semaine->setTD(2);
            $semaine->setTP(2);
            $semaine->setSurveillances(0);
            $semaine->setCharges(0);
            $semaine->setCommentaires('');
            $manager->persist($semaine);

            $semaine = new Semaine();
            $semaine->setModule($this->getReference('M1103'));
            $semaine->setSemaine(S48 );
            $semaine->setCM(1);
            $semaine->setTD(2);
            $semaine->setTP(2);
            $semaine->setSurveillances(0);
            $semaine->setCharges(0);
            $semaine->setCommentaires('');
            $manager->persist($semaine);

            $semaine = new Semaine();
            $semaine->setModule($this->getReference('M1103'));
            $semaine->setSemaine(S49 );
            $semaine->setCM(1);
            $semaine->setTD(2);
            $semaine->setTP(2);
            $semaine->setSurveillances(0);
            $semaine->setCharges(0);
            $semaine->setCommentaires('');
            $manager->persist($semaine);

            $semaine = new Semaine();
            $semaine->setModule($this->getReference('M1103'));
            $semaine->setSemaine(S50 );
            $semaine->setCM(1);
            $semaine->setTD(2);
            $semaine->setTP(2);
            $semaine->setSurveillances(0);
            $semaine->setCharges(0);
            $semaine->setCommentaires('');
            $manager->persist($semaine);

            $semaine = new Semaine();
            $semaine->setModule($this->getReference('M1103'));
            $semaine->setSemaine(S51 );
            $semaine->setCM(1);
            $semaine->setTD(2);
            $semaine->setTP(2);
            $semaine->setSurveillances(0);
            $semaine->setCharges(0);
            $semaine->setCommentaires('');
            $manager->persist($semaine);

            $semaine = new Semaine();
            $semaine->setModule($this->getReference('M1103'));
            $semaine->setSemaine(S02 );
            $semaine->setCM(1);
            $semaine->setTD(2);
            $semaine->setTP(2);
            $semaine->setSurveillances(0);
            $semaine->setCharges(0);
            $semaine->setCommentaires('');
            $manager->persist($semaine);

            $semaine = new Semaine();
            $semaine->setModule($this->getReference('M1103'));
            $semaine->setSemaine(S03 );
            $semaine->setCM(1);
            $semaine->setTD(2);
            $semaine->setTP(2);
            $semaine->setSurveillances(0);
            $semaine->setCharges(0);
            $semaine->setCommentaires('');
            $manager->persist($semaine);

            $semaine = new Semaine();
            $semaine->setModule($this->getReference('M1103'));
            $semaine->setSemaine(S04 );
            $semaine->setCM(0);
            $semaine->setTD(0);
            $semaine->setTP(2);
            $semaine->setSurveillances(0);
            $semaine->setCharges(0);
            $semaine->setCommentaires('');
            $manager->persist($semaine);

            $semaine = new Semaine();
            $semaine->setModule($this->getReference('M1103'));
            $semaine->setSemaine(S04 );
            $semaine->setCM(0);
            $semaine->setTD(0);
            $semaine->setTP(0);
            $semaine->setSurveillances(2);
            $semaine->setCharges(0);
            $semaine->setCommentaires('');
            $manager->persist($semaine);

            

        $manager->flush();
    }

    public function getDependencies()
    {
        return array(
            ModuleFixtures::class,
        );
    }
}
