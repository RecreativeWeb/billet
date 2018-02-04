<?php
namespace RW\BlogBundle\DataFixtures\ORM;

use RW\BlogBundle\Entity\Chapitre;
//use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\Persistence\ObjectManager;
//use Doctrine\Bundle\FixturesBundle\ORMFixtureInterface;


class LoadChapitre extends AbstractFixture 
{
	public function load(ObjectManager $manager)
    {
    $chapitre = new Chapitre();
    $chapitre->setTitle("Chapitre 8");
    $chapitre->setResume("Lorem ispum dolores sit amet");
    $chapitre->setContent("Iamque non umbratis fallaciis res agebatur, sed qua palatium est extra muros, armatis omne circumdedit. ingressusque obscuro iam die, ablatis regiis indumentis Caesarem tunica texit et paludamento communi, eum post haec nihil passurum velut mandato principis iurandi crebritate confirmans et statim inquit exsurge et inopinum carpento privato inpositum ad Histriam duxit prope oppidum Polam, ubi quondam peremptum Constantini filium accepimus Crispum.");
    $chapitre->setDatePublication(new \DateTime('now'));
    $chapitre->setPublishable(true);
    $chapitre->setPicture('img/foret.jpg');
    $manager->persist($chapitre);
 
    $chapitre = new Chapitre();
    $chapitre->setTitle("Chapitre 18");
    $chapitre->setResume("Amet sit dolores ipsum lorem");
    $chapitre->setContent("Quam ob rem vita quidem talis fuit vel fortuna vel gloria, ut nihil posset accedere, moriendi autem sensum celeritas abstulit; quo de genere mortis difficile dictu est; quid homines suspicentur, videtis; hoc vere tamen licet dicere, P. Scipioni ex multis diebus, quos in vita celeberrimos laetissimosque viderit, illum diem clarissimum fuisse, cum senatu dimisso domum reductus ad vesperum est a patribus conscriptis, populo Romano, sociis et Latinis, pridie quam excessit e vita, ut ex tam alto dignitatis gradu ad superos videatur deos potius quam ad inferos pervenisse.");
    $chapitre->setDatePublication(new \DateTime('now'));
    $chapitre->setPublishable(false);
    $chapitre->setPicture('img/fleuve.jpg');
    $manager->persist($chapitre);
 
    $manager->flush();
    }
}