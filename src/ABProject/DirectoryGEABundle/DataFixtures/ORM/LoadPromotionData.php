<?php
namespace ABProject\DirectoryGEABundle\DataFixtures\ORM;
 
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use ABProject\DirectoryGEABundle\Entity\Promotion;
 
class LoadPromotionData extends AbstractFixture implements OrderedFixtureInterface
{
  public function load(ObjectManager $em)
  {
    $quatrevingtdixsept = new Promotion();
    $quatrevingtdixsept->setNomPromotion('GEA');
    $quatrevingtdixsept->setAnneePromotion('1997');

    $quatrevingtdixhuit = new Promotion();
    $quatrevingtdixhuit->setNomPromotion('GEA');
    $quatrevingtdixhuit->setAnneePromotion('1998');

    $quatrevingtdixneuf = new Promotion();
    $quatrevingtdixneuf->setNomPromotion('GEA');
    $quatrevingtdixneuf->setAnneePromotion('1999');

    $deuxmille = new Promotion();
    $deuxmille->setNomPromotion('GEA');
    $deuxmille->setAnneePromotion('2000');
 
    $deuxmilleun = new Promotion();
    $deuxmilleun->setNomPromotion('GEA');
    $deuxmilleun->setAnneePromotion('2001');

    $deuxmilledeux = new Promotion();
    $deuxmilledeux->setNomPromotion('GEA');
    $deuxmilledeux->setAnneePromotion('2002');

    $deuxmilletrois = new Promotion();
    $deuxmilletrois->setNomPromotion('GEA');
    $deuxmilletrois->setAnneePromotion('2003');

    $deuxmillequatre = new Promotion();
    $deuxmillequatre->setNomPromotion('GEA');
    $deuxmillequatre->setAnneePromotion('2004');

    $deuxmillecinq = new Promotion();
    $deuxmillecinq->setNomPromotion('GEA');
    $deuxmillecinq->setAnneePromotion('2005');

    $deuxmillesix = new Promotion();
    $deuxmillesix->setNomPromotion('GEA');
    $deuxmillesix->setAnneePromotion('2006');    
    
    $deuxmillesept = new Promotion();
    $deuxmillesept->setNomPromotion('GEA');
    $deuxmillesept->setAnneePromotion('2007');    
    
    $deuxmillehuit = new Promotion();
    $deuxmillehuit->setNomPromotion('GEA');
    $deuxmillehuit->setAnneePromotion('2008');    
    
    $deuxmilleneuf = new Promotion();
    $deuxmilleneuf->setNomPromotion('GEA');
    $deuxmilleneuf->setAnneePromotion('2009');    
    
    $deuxmilledix = new Promotion();
    $deuxmilledix->setNomPromotion('GEA');
    $deuxmilledix->setAnneePromotion('2010');

    $deuxmilleonze = new Promotion();
    $deuxmilleonze->setNomPromotion('GEA');
    $deuxmilleonze->setAnneePromotion('2011');

    $deuxmilledouze = new Promotion();
    $deuxmilledouze->setNomPromotion('GEA');
    $deuxmilledouze->setAnneePromotion('2012');

    $deuxmilletreize = new Promotion();
    $deuxmilletreize->setNomPromotion('GEA');
    $deuxmilletreize->setAnneePromotion('2013');

    $deuxmillequatorze = new Promotion();
    $deuxmillequatorze->setNomPromotion('GEA');
    $deuxmillequatorze->setAnneePromotion('2014');

    $deuxmillequinze = new Promotion();
    $deuxmillequinze->setNomPromotion('GEA');
    $deuxmillequinze->setAnneePromotion('2015');

    $em->persist($quatrevingtdixsept);
    $em->persist($quatrevingtdixhuit);
    $em->persist($quatrevingtdixneuf);
    $em->persist($deuxmille);
    $em->persist($deuxmilleun);
    $em->persist($deuxmilledeux);
    $em->persist($deuxmilletrois);
    $em->persist($deuxmillequatre);
    $em->persist($deuxmillecinq);
    $em->persist($deuxmillesix);
    $em->persist($deuxmillesept);
    $em->persist($deuxmillehuit);
    $em->persist($deuxmilleneuf);
    $em->persist($deuxmilledix);
    $em->persist($deuxmilleonze);
    $em->persist($deuxmilledouze);
    $em->persist($deuxmilletreize);
    $em->persist($deuxmillequatorze);
    $em->persist($deuxmillequinze);
 
    $em->flush();
 
    $this->addReference('promo-quatrevingtdixsept', $quatrevingtdixsept);
    $this->addReference('promo-quatrevingtdixhuit', $quatrevingtdixhuit);
    $this->addReference('promo-quatrevingtdixneuf', $quatrevingtdixneuf);
    $this->addReference('promo-deuxmille', $deuxmille);
    $this->addReference('promo-deuxmilleun', $deuxmilleun);
    $this->addReference('promo-deuxmilledeux', $deuxmilledeux);
    $this->addReference('promo-deuxmilletrois', $deuxmilletrois);
    $this->addReference('promo-deuxmillequatre', $deuxmillequatre);
    $this->addReference('promo-deuxmillecinq', $deuxmillecinq);
    $this->addReference('promo-deuxmillesix', $deuxmillesix);
    $this->addReference('promo-deuxmillesept', $deuxmillesept);
    $this->addReference('promo-deuxmillehuit', $deuxmillehuit);
    $this->addReference('promo-deuxmilleneuf', $deuxmilleneuf);
    $this->addReference('promo-deuxmilledix', $deuxmilledix);
    $this->addReference('promo-deuxmilleonze', $deuxmilleonze);
    $this->addReference('promo-deuxmilledouze', $deuxmilledouze);
    $this->addReference('promo-deuxmilletreize', $deuxmilletreize);
    $this->addReference('promo-deuxmillequatorze', $deuxmillequatorze);
    $this->addReference('promo-deuxmillequinze', $deuxmillequinze);
  }
 
  public function getOrder()
  {
    return 1; // the order in which fixtures will be loaded
  }
}
?>