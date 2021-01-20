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
        $semaine->setSemaine(46 );
        $semaine->setCM(1);
        $semaine->setTD(2);
        $semaine->setTP(0);
        $semaine->setSurveillances(0);
        $semaine->setCharges(0);
        $semaine->setCommentaires(' TP décalés');
        $manager->persist($semaine);

        $semaine = new Semaine();
        $semaine->setModule($this->getReference('M1103'));
        $semaine->setSemaine(47 );
        $semaine->setCM(1);
        $semaine->setTD(2);
        $semaine->setTP(2);
        $semaine->setSurveillances(0);
        $semaine->setCharges(0);
        $semaine->setCommentaires('');
        $manager->persist($semaine);

        $semaine = new Semaine();
        $semaine->setModule($this->getReference('M1103'));
        $semaine->setSemaine(48 );
        $semaine->setCM(1);
        $semaine->setTD(2);
        $semaine->setTP(2);
        $semaine->setSurveillances(0);
        $semaine->setCharges(0);
        $semaine->setCommentaires('');
        $manager->persist($semaine);

        $semaine = new Semaine();
        $semaine->setModule($this->getReference('M1103'));
        $semaine->setSemaine(49 );
        $semaine->setCM(1);
        $semaine->setTD(2);
        $semaine->setTP(2);
        $semaine->setSurveillances(0);
        $semaine->setCharges(0);
        $semaine->setCommentaires('');
        $manager->persist($semaine);

        $semaine = new Semaine();
        $semaine->setModule($this->getReference('M1103'));
        $semaine->setSemaine(50 );
        $semaine->setCM(1);
        $semaine->setTD(2);
        $semaine->setTP(2);
        $semaine->setSurveillances(0);
        $semaine->setCharges(0);
        $semaine->setCommentaires('');
        $manager->persist($semaine);

        $semaine = new Semaine();
        $semaine->setModule($this->getReference('M1103'));
        $semaine->setSemaine(51 );
        $semaine->setCM(1);
        $semaine->setTD(2);
        $semaine->setTP(2);
        $semaine->setSurveillances(0);
        $semaine->setCharges(0);
        $semaine->setCommentaires('');
        $manager->persist($semaine);

        $semaine = new Semaine();
        $semaine->setModule($this->getReference('M1103'));
        $semaine->setSemaine(02 );
        $semaine->setCM(1);
        $semaine->setTD(2);
        $semaine->setTP(2);
        $semaine->setSurveillances(0);
        $semaine->setCharges(0);
        $semaine->setCommentaires('');
        $manager->persist($semaine);

        $semaine = new Semaine();
        $semaine->setModule($this->getReference('M1103'));
        $semaine->setSemaine(03 );
        $semaine->setCM(1);
        $semaine->setTD(2);
        $semaine->setTP(2);
        $semaine->setSurveillances(0);
        $semaine->setCharges(0);
        $semaine->setCommentaires('');
        $manager->persist($semaine);

        $semaine = new Semaine();
        $semaine->setModule($this->getReference('M1103'));
        $semaine->setSemaine(04 );
        $semaine->setCM(0);
        $semaine->setTD(0);
        $semaine->setTP(2);
        $semaine->setSurveillances(0);
        $semaine->setCharges(0);
        $semaine->setCommentaires('');
        $manager->persist($semaine);

        $semaine = new Semaine();
        $semaine->setModule($this->getReference('M1103'));
        $semaine->setSemaine(04 );
        $semaine->setCM(0);
        $semaine->setTD(0);
        $semaine->setTP(0);
        $semaine->setSurveillances(2);
        $semaine->setCharges(0);
        $semaine->setCommentaires('');
        $manager->persist($semaine);

        $semaine = new Semaine();
        $semaine->setModule($this->getReference('M1104'));
        $semaine->setSemaine(36);
        $semaine->setCM(1);
        $semaine->setTD(1.5);
        $semaine->setTP(0);
        $semaine->setSurveillances(0);
        $semaine->setCharges(0);
        $semaine->setCommentaires('');
        $manager->persist($semaine);

        $semaine = new Semaine();
        $semaine->setModule($this->getReference('M1104'));
        $semaine->setSemaine(37);
        $semaine->setCM(1);
        $semaine->setTD(1.5);
        $semaine->setTP(0);
        $semaine->setSurveillances(0);
        $semaine->setCharges(0);
        $semaine->setCommentaires('');
        $manager->persist($semaine);

        $semaine = new Semaine();
        $semaine->setModule($this->getReference('M1104'));
        $semaine->setSemaine(38);
        $semaine->setCM(1);
        $semaine->setTD(1.5);
        $semaine->setTP(0);
        $semaine->setSurveillances(0);
        $semaine->setCharges(0);
        $semaine->setCommentaires('');
        $manager->persist($semaine);

        $semaine = new Semaine();
        $semaine->setModule($this->getReference('M1104'));
        $semaine->setSemaine(39);
        $semaine->setCM(1);
        $semaine->setTD(1.5);
        $semaine->setTP(0);
        $semaine->setSurveillances(0);
        $semaine->setCharges(0);
        $semaine->setCommentaires('');
        $manager->persist($semaine);

        $semaine = new Semaine();
        $semaine->setModule($this->getReference('M1104'));
        $semaine->setSemaine(40);
        $semaine->setCM(1);
        $semaine->setTD(1.5);
        $semaine->setTP(0);
        $semaine->setSurveillances(0);
        $semaine->setCharges(0);
        $semaine->setCommentaires(' TP décalés...');
        $manager->persist($semaine);

        $semaine = new Semaine();
        $semaine->setModule($this->getReference('M1104'));
        $semaine->setSemaine(41);
        $semaine->setCM(1);
        $semaine->setTD(1.5);
        $semaine->setTP(2);
        $semaine->setSurveillances(0);
        $semaine->setCharges(0);
        $semaine->setCommentaires('');
        $manager->persist($semaine);

        $semaine = new Semaine();
        $semaine->setModule($this->getReference('M1104'));
        $semaine->setSemaine(42);
        $semaine->setCM(1);
        $semaine->setTD(1.5);
        $semaine->setTP(2);
        $semaine->setSurveillances(0);
        $semaine->setCharges(0);
        $semaine->setCommentaires('');
        $manager->persist($semaine);

        $semaine = new Semaine();
        $semaine->setModule($this->getReference('M1104'));
        $semaine->setSemaine(45);
        $semaine->setCM(1);
        $semaine->setTD(1.5);
        $semaine->setTP(2);
        $semaine->setSurveillances(0);
        $semaine->setCharges(0);
        $semaine->setCommentaires('');
        $manager->persist($semaine);

        $semaine = new Semaine();
        $semaine->setModule($this->getReference('M1104'));
        $semaine->setSemaine(46);
        $semaine->setCM(1);
        $semaine->setTD(1.5);
        $semaine->setTP(2);
        $semaine->setSurveillances(0);
        $semaine->setCharges(0);
        $semaine->setCommentaires('');
        $manager->persist($semaine);

        $semaine = new Semaine();
        $semaine->setModule($this->getReference('M1104'));
        $semaine->setSemaine(47);
        $semaine->setCM(1);
        $semaine->setTD(1.5);
        $semaine->setTP(2);
        $semaine->setSurveillances(0);
        $semaine->setCharges(0);
        $semaine->setCommentaires('');
        $manager->persist($semaine);

        $semaine = new Semaine();
        $semaine->setModule($this->getReference('M1104'));
        $semaine->setSemaine(48);
        $semaine->setCM(1);
        $semaine->setTD(1.5);
        $semaine->setTP(2);
        $semaine->setSurveillances(0);
        $semaine->setCharges(0);
        $semaine->setCommentaires('');
        $manager->persist($semaine);

        $semaine = new Semaine();
        $semaine->setModule($this->getReference('M1104'));
        $semaine->setSemaine(49);
        $semaine->setCM(0);
        $semaine->setTD(1.5);
        $semaine->setTP(2);
        $semaine->setSurveillances(0);
        $semaine->setCharges(0);
        $semaine->setCommentaires('');

        $manager->persist($semaine);
        $semaine = new Semaine();
        $semaine->setModule($this->getReference('M1104'));
        $semaine->setSemaine(50);
        $semaine->setCM(0);
        $semaine->setTD(1.5);
        $semaine->setTP(2);
        $semaine->setSurveillances(0);
        $semaine->setCharges(0);
        $semaine->setCommentaires('');
        $manager->persist($semaine);

        $semaine = new Semaine();
        $semaine->setModule($this->getReference('M1104'));
        $semaine->setSemaine(51);
        $semaine->setCM(0);
        $semaine->setTD(1.5);
        $semaine->setTP(2);
        $semaine->setSurveillances(0);
        $semaine->setCharges(0);
        $semaine->setCommentaires('');
        $manager->persist($semaine);

        $semaine = new Semaine();
        $semaine->setModule($this->getReference('M1104'));
        $semaine->setSemaine(02);
        $semaine->setCM(0);
        $semaine->setTD(1.5);
        $semaine->setTP(2);
        $semaine->setSurveillances(0);
        $semaine->setCharges(0);
        $semaine->setCommentaires('');
        $manager->persist($semaine);

        $semaine = new Semaine();
        $semaine->setModule($this->getReference('M1104'));
        $semaine->setSemaine(03);
        $semaine->setCM(0);
        $semaine->setTD(0);
        $semaine->setTP(2);
        $semaine->setSurveillances(0);
        $semaine->setCharges(0);
        $semaine->setCommentaires('');
        $manager->persist($semaine);

        $semaine = new Semaine();
        $semaine->setModule($this->getReference('M1104'));
        $semaine->setSemaine(04);
        $semaine->setCM(0);
        $semaine->setTD(0);
        $semaine->setTP(0);
        $semaine->setSurveillances(2);
        $semaine->setCharges(0);
        $semaine->setCommentaires(' CS en salle machines');
        $manager->persist($semaine);

        $semaine = new Semaine();
        $semaine->setModule($this->getReference('M1105'));
        $semaine->setSemaine(36);
        $semaine->setCM(0);
        $semaine->setTD(0);
        $semaine->setTP(2);
        $semaine->setSurveillances(0);
        $semaine->setCharges(0);
        $semaine->setCommentaires(' bloc bureautique (LibreOffice + LaTeX)');
        $manager->persist($semaine);

        $semaine = new Semaine();
        $semaine->setModule($this->getReference('M1105'));
        $semaine->setSemaine(37);
        $semaine->setCM(0);
        $semaine->setTD(0);
        $semaine->setTP(2);
        $semaine->setSurveillances(0);
        $semaine->setCharges(0);
        $semaine->setCommentaires('');
        $manager->persist($semaine);

        $semaine = new Semaine();
        $semaine->setModule($this->getReference('M1105'));
        $semaine->setSemaine(38);
        $semaine->setCM(0);
        $semaine->setTD(0);
        $semaine->setTP(2);
        $semaine->setSurveillances(0);
        $semaine->setCharges(0);
        $semaine->setCommentaires('');
        $manager->persist($semaine);

        $semaine = new Semaine();
        $semaine->setModule($this->getReference('M1105'));
        $semaine->setSemaine(39);
        $semaine->setCM(0);
        $semaine->setTD(0);
        $semaine->setTP(2);
        $semaine->setSurveillances(0);
        $semaine->setCharges(0);
        $semaine->setCommentaires('');
        $manager->persist($semaine);

        $semaine = new Semaine();
        $semaine->setModule($this->getReference('M1105'));
        $semaine->setSemaine(40);
        $semaine->setCM(0);
        $semaine->setTD(2);
        $semaine->setTP(2);
        $semaine->setSurveillances(0);
        $semaine->setCharges(0);
        $semaine->setCommentaires('');
        $manager->persist($semaine);

        $semaine = new Semaine();
        $semaine->setModule($this->getReference('M1105'));
        $semaine->setSemaine(41);
        $semaine->setCM(0);
        $semaine->setTD(2);
        $semaine->setTP(2);
        $semaine->setSurveillances(0);
        $semaine->setCharges(0);
        $semaine->setCommentaires('');
        $manager->persist($semaine);

        $semaine = new Semaine();
        $semaine->setModule($this->getReference('M1105'));
        $semaine->setSemaine(42);
        $semaine->setCM(0);
        $semaine->setTD(2);
        $semaine->setTP(2);
        $semaine->setSurveillances(0);
        $semaine->setCharges(0);
        $semaine->setCommentaires('');
        $manager->persist($semaine);

        $semaine = new Semaine();
        $semaine->setModule($this->getReference('M1105'));
        $semaine->setSemaine(45);
        $semaine->setCM(0);
        $semaine->setTD(2);
        $semaine->setTP(2);
        $semaine->setSurveillances(0);
        $semaine->setCharges(0);
        $semaine->setCommentaires('');
        $manager->persist($semaine);

        $semaine = new Semaine();
        $semaine->setModule($this->getReference('M1105'));
        $semaine->setSemaine(46);
        $semaine->setCM(0);
        $semaine->setTD(2);
        $semaine->setTP(0);
        $semaine->setSurveillances(0);
        $semaine->setCharges(0);
        $semaine->setCommentaires(' TD machine (site web en equipe)');
        $manager->persist($semaine);

        $semaine = new Semaine();
        $semaine->setModule($this->getReference('M1105'));
        $semaine->setSemaine(47);
        $semaine->setCM(0);
        $semaine->setTD(2);
        $semaine->setTP(0);
        $semaine->setSurveillances(0);
        $semaine->setCharges(0);
        $semaine->setCommentaires('');
        $manager->persist($semaine);

        $semaine = new Semaine();
        $semaine->setModule($this->getReference('M1105'));
        $semaine->setSemaine(48);
        $semaine->setCM(0);
        $semaine->setTD(2);
        $semaine->setTP(0);
        $semaine->setSurveillances(0);
        $semaine->setCharges(0);
        $semaine->setCommentaires('');
        $manager->persist($semaine);

        $semaine = new Semaine();
        $semaine->setModule($this->getReference('M1105'));
        $semaine->setSemaine(49);
        $semaine->setCM(0);
        $semaine->setTD(2);
        $semaine->setTP(0);
        $semaine->setSurveillances(0);
        $semaine->setCharges(0);
        $semaine->setCommentaires('');
        $manager->persist($semaine);

        $semaine = new Semaine();
        $semaine->setModule($this->getReference('M1105'));
        $semaine->setSemaine(50);
        $semaine->setCM(0);
        $semaine->setTD(2);
        $semaine->setTP(0);
        $semaine->setSurveillances(0);
        $semaine->setCharges(0);
        $semaine->setCommentaires('');
        $manager->persist($semaine);

        $semaine = new Semaine();
        $semaine->setModule($this->getReference('M1105'));
        $semaine->setSemaine(51);
        $semaine->setCM(0);
        $semaine->setTD(2);
        $semaine->setTP(0);
        $semaine->setSurveillances(0);
        $semaine->setCharges(0);
        $semaine->setCommentaires('');
        $manager->persist($semaine);

        $semaine = new Semaine();
        $semaine->setModule($this->getReference('M1105'));
        $semaine->setSemaine(02);
        $semaine->setCM(0);
        $semaine->setTD(2);
        $semaine->setTP(0);
        $semaine->setSurveillances(2);
        $semaine->setCharges(0);
        $semaine->setCommentaires('');
        $manager->persist($semaine);

        $semaine = new Semaine();
        $semaine->setModule($this->getReference('M1105'));
        $semaine->setSemaine(03);
        $semaine->setCM(0);
        $semaine->setTD(2);
        $semaine->setTP(0);
        $semaine->setSurveillances(0);
        $semaine->setCharges(0);
        $semaine->setCommentaires('');
        $manager->persist($semaine);

        $semaine = new Semaine();
        $semaine->setModule($this->getReference('M1105'));
        $semaine->setSemaine(04);
        $semaine->setCM(0);
        $semaine->setTD(0);
        $semaine->setTP(2);
        $semaine->setSurveillances(0);
        $semaine->setCharges(0);
        $semaine->setCommentaires(' evaluation en TP (lien avec PTS1)');
        $manager->persist($semaine);

        $semaine = new Semaine();
        $semaine->setModule($this->getReference('M1106'));
        $semaine->setSemaine(36);
        $semaine->setCM(0);
        $semaine->setTD(0);
        $semaine->setTP(0);
        $semaine->setSurveillances(0);
        $semaine->setCharges(0);
        $semaine->setCommentaires('');
        $manager->persist($semaine);

        $semaine = new Semaine();
        $semaine->setModule($this->getReference('M1106'));
        $semaine->setSemaine(37);
        $semaine->setCM(0);
        $semaine->setTD(0);
        $semaine->setTP(0);
        $semaine->setSurveillances(0);
        $semaine->setCharges(0);
        $semaine->setCommentaires('');
        $manager->persist($semaine);

        $semaine = new Semaine();
        $semaine->setModule($this->getReference('M1106'));
        $semaine->setSemaine(38);
        $semaine->setCM(0);
        $semaine->setTD(0);
        $semaine->setTP(0);
        $semaine->setSurveillances(0);
        $semaine->setCharges(0);
        $semaine->setCommentaires('');
        $manager->persist($semaine);

        $semaine = new Semaine();
        $semaine->setModule($this->getReference('M1106'));
        $semaine->setSemaine(39);
        $semaine->setCM(0);
        $semaine->setTD(0);
        $semaine->setTP(0);
        $semaine->setSurveillances(0);
        $semaine->setCharges(0);
        $semaine->setCommentaires('');
        $manager->persist($semaine);

        $semaine = new Semaine();
        $semaine->setModule($this->getReference('M1106'));
        $semaine->setSemaine(40);
        $semaine->setCM(0);
        $semaine->setTD(0);
        $semaine->setTP(0);
        $semaine->setSurveillances(0);
        $semaine->setCharges(0);
        $semaine->setCommentaires('');
        $manager->persist($semaine);

        $semaine = new Semaine();
        $semaine->setModule($this->getReference('M1106'));
        $semaine->setSemaine(41);
        $semaine->setCM(0);
        $semaine->setTD(0);
        $semaine->setTP(0);
        $semaine->setSurveillances(0);
        $semaine->setCharges(0);
        $semaine->setCommentaires('');
        $manager->persist($semaine);

        $semaine = new Semaine();
        $semaine->setModule($this->getReference('M1106'));
        $semaine->setSemaine(42);
        $semaine->setCM(0);
        $semaine->setTD(0);
        $semaine->setTP(0);
        $semaine->setSurveillances(0);
        $semaine->setCharges(0);
        $semaine->setCommentaires('');
        $manager->persist($semaine);

        $semaine = new Semaine();
        $semaine->setModule($this->getReference('M1106'));
        $semaine->setSemaine(45);
        $semaine->setCM(0);
        $semaine->setTD(0);
        $semaine->setTP(0);
        $semaine->setSurveillances(0);
        $semaine->setCharges(0);
        $semaine->setCommentaires('');
        $manager->persist($semaine);

        $semaine = new Semaine();
        $semaine->setModule($this->getReference('M1106'));
        $semaine->setSemaine(46);
        $semaine->setCM(0);
        $semaine->setTD(0);
        $semaine->setTP(0);
        $semaine->setSurveillances(0);
        $semaine->setCharges(0);
        $semaine->setCommentaires('');
        $manager->persist($semaine);

        $semaine = new Semaine();
        $semaine->setModule($this->getReference('M1106'));
        $semaine->setSemaine(47);
        $semaine->setCM(0);
        $semaine->setTD(0);
        $semaine->setTP(0);
        $semaine->setSurveillances(0);
        $semaine->setCharges(0);
        $semaine->setCommentaires('');
        $manager->persist($semaine);

        $semaine = new Semaine();
        $semaine->setModule($this->getReference('M1106'));
        $semaine->setSemaine(48);
        $semaine->setCM(0);
        $semaine->setTD(0);
        $semaine->setTP(0);
        $semaine->setSurveillances(0);
        $semaine->setCharges(0);
        $semaine->setCommentaires('');
        $manager->persist($semaine);

        $semaine = new Semaine();
        $semaine->setModule($this->getReference('M1106'));
        $semaine->setSemaine(49);
        $semaine->setCM(0);
        $semaine->setTD(0);
        $semaine->setTP(0);
        $semaine->setSurveillances(0);
        $semaine->setCharges(0);
        $semaine->setCommentaires('');
        $manager->persist($semaine);

        $semaine = new Semaine();
        $semaine->setModule($this->getReference('M1106'));
        $semaine->setSemaine(50);
        $semaine->setCM(0);
        $semaine->setTD(0);
        $semaine->setTP(0);
        $semaine->setSurveillances(0);
        $semaine->setCharges(0);
        $semaine->setCommentaires(' creneau PTS1 (avec CDIN1 + EC1)');
        $manager->persist($semaine);

        $semaine = new Semaine();
        $semaine->setModule($this->getReference('M1106'));
        $semaine->setSemaine(51);
        $semaine->setCM(0);
        $semaine->setTD(0);
        $semaine->setTP(0);
        $semaine->setSurveillances(0);
        $semaine->setCharges(0);
        $semaine->setCommentaires('');
        $manager->persist($semaine);

        $semaine = new Semaine();
        $semaine->setModule($this->getReference('M1106'));
        $semaine->setSemaine(02);
        $semaine->setCM(0);
        $semaine->setTD(0);
        $semaine->setTP(0);
        $semaine->setSurveillances(0);
        $semaine->setCharges(0);
        $semaine->setCommentaires('');
        $manager->persist($semaine);

        $semaine = new Semaine();
        $semaine->setModule($this->getReference('M1106'));
        $semaine->setSemaine(03);
        $semaine->setCM(0);
        $semaine->setTD(0);
        $semaine->setTP(0);
        $semaine->setSurveillances(0);
        $semaine->setCharges(0);
        $semaine->setCommentaires('évaluation avec CDIN1');
        $manager->persist($semaine);

        $semaine = new Semaine();
        $semaine->setModule($this->getReference('M1106'));
        $semaine->setSemaine(04);
        $semaine->setCM(0);
        $semaine->setTD(0);
        $semaine->setTP(0);
        $semaine->setSurveillances(0);
        $semaine->setCharges(7);
        $semaine->setCommentaires(' (cf. CDIN1)');
        $manager->persist($semaine);

        $semaine = new Semaine();
        $semaine->setModule($this->getReference('M2101'));
        $semaine->setSemaine(05);
        $semaine->setCM(0);
        $semaine->setTD(0); $semaine->setTP(0);
        $semaine->setSurveillances(0);
        $semaine->setCharges(0);
        $semaine->setCommentaires('');
        $manager->persist($semaine);

        $semaine = new Semaine();
        $semaine->setModule($this->getReference('M2101'));
        $semaine->setSemaine(06);
        $semaine->setCM(0);
        $semaine->setTD(0);
        $semaine->setTP(0);
        $semaine->setSurveillances(0);
        $semaine->setCharges(0);
        $semaine->setCommentaires('');
        $manager->persist($semaine);

        $semaine = new Semaine();
        $semaine->setModule($this->getReference('M2101'));
        $semaine->setSemaine(07);
        $semaine->setCM(0);
        $semaine->setTD(0);
        $semaine->setTP(0);
        $semaine->setSurveillances(0);
        $semaine->setCharges(0);
        $semaine->setCommentaires('');
        $manager->persist($semaine);

        $semaine = new Semaine();
        $semaine->setModule($this->getReference('M2101'));
        $semaine->setSemaine(8);
        $semaine->setCM(0);
        $semaine->setTD(0);
        $semaine->setTP(0);
        $semaine->setSurveillances(0);
        $semaine->setCharges(0);
        $semaine->setCommentaires('');
        $manager->persist($semaine);

        $semaine = new Semaine();
        $semaine->setModule($this->getReference('M2101'));
        $semaine->setSemaine(11);
        $semaine->setCM(0);
        $semaine->setTD(0);
        $semaine->setTP(0);
        $semaine->setSurveillances(0);
        $semaine->setCharges(0);
        $semaine->setCommentaires('');
        $manager->persist($semaine);

        $semaine = new Semaine();
        $semaine->setModule($this->getReference('M2101'));
        $semaine->setSemaine(12);
        $semaine->setCM(0);
        $semaine->setTD(0);
        $semaine->setTP(0);
        $semaine->setSurveillances(0);
        $semaine->setCharges(0);
        $semaine->setCommentaires('');
        $manager->persist($semaine);

        $semaine = new Semaine();
        $semaine->setModule($this->getReference('M2101'));
        $semaine->setSemaine(13);
        $semaine->setCM(0);
        $semaine->setTD(0);
        $semaine->setTP(0);
        $semaine->setSurveillances(0);
        $semaine->setCharges(0);
        $semaine->setCommentaires('');
        $manager->persist($semaine);

        $semaine = new Semaine();
        $semaine->setModule($this->getReference('M2101'));
        $semaine->setSemaine(14);
        $semaine->setCM(0);
        $semaine->setTD(0);
        $semaine->setTP(0);
        $semaine->setSurveillances(0);
        $semaine->setCharges(0);
        $semaine->setCommentaires('');
        $manager->persist($semaine);

        $semaine = new Semaine();
        $semaine->setModule($this->getReference('M2101'));
        $semaine->setSemaine(15);
        $semaine->setCM(1);
        $semaine->setTD(2);
        $semaine->setTP(0);
        $semaine->setSurveillances(0);
        $semaine->setCharges(0);
        $semaine->setCommentaires('');
        $manager->persist($semaine);

        $semaine = new Semaine();
        $semaine->setModule($this->getReference('M2101'));
        $semaine->setSemaine(16);
        $semaine->setCM(1);
        $semaine->setTD(2);
        $semaine->setTP(2);
        $semaine->setSurveillances(0);
        $semaine->setCharges(0);
        $semaine->setCommentaires('');
        $manager->persist($semaine);

        $semaine = new Semaine();
        $semaine->setModule($this->getReference('M2101'));
        $semaine->setSemaine(19);
        $semaine->setCM(1);
        $semaine->setTD(2);
        $semaine->setTP(2);
        $semaine->setSurveillances(0);
        $semaine->setCharges(0);
        $semaine->setCommentaires('');
        $manager->persist($semaine);

        $semaine = new Semaine();
        $semaine->setModule($this->getReference('M2101'));
        $semaine->setSemaine(20);
        $semaine->setCM(1);
        $semaine->setTD(2);
        $semaine->setTP(2);
        $semaine->setSurveillances(0);
        $semaine->setCharges(0);
        $semaine->setCommentaires('');
        $manager->persist($semaine);

        $semaine = new Semaine();
        $semaine->setModule($this->getReference('M2101'));
        $semaine->setSemaine(21);
        $semaine->setCM(0);
        $semaine->setTD(0);
        $semaine->setTP(2);
        $semaine->setSurveillances(0);
        $semaine->setCharges(0);
        $semaine->setCommentaires('');
        $manager->persist($semaine);

        $semaine = new Semaine();
        $semaine->setModule($this->getReference('M2101'));
        $semaine->setSemaine(22);
        $semaine->setCM(0);
        $semaine->setTD(2);
        $semaine->setTP(0);
        $semaine->setSurveillances(0);
        $semaine->setCharges(0);
        $semaine->setCommentaires(' salles D303 et D304 (TP en TD...)');
        $manager->persist($semaine);

        $semaine = new Semaine();
        $semaine->setModule($this->getReference('M2101'));
        $semaine->setSemaine(23);
        $semaine->setCM(0);
        $semaine->setTD(2);
        $semaine->setTP(0);
        $semaine->setSurveillances(0);
        $semaine->setCharges(0);
        $semaine->setCommentaires('');
        $manager->persist($semaine);

        $semaine = new Semaine();
        $semaine->setModule($this->getReference('M2101'));
        $semaine->setSemaine(24);
        $semaine->setCM(0);
        $semaine->setTD(2);
        $semaine->setTP(0);
        $semaine->setSurveillances(0);
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
