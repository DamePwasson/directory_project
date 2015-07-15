<?php
namespace ABProject\DirectoryGEABundle\DataFixtures\ORM;
 
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use ABProject\DirectoryGEABundle\Entity\Etudiant;
 
class LoadEtudiantData extends AbstractFixture implements OrderedFixtureInterface
{
  public function load(ObjectManager $em)
  {
    $marie = new Etudiant();
    $marie->setNomEtudiant('Vegas Caradeuc');
    $marie->setPrenomEtudiant('Marie');
    $marie->setNiveauEtude('5');
    $marie->setContact('vegas.marie@hotmail.fr');
    $marie->setCreatedAt(new \DateTime('2015-04-21'));
    $marie->setPromotion($em->merge($this->getReference('promo-deuxmille')));
    $marie->setSpecialite($em->merge($this->getReference('specialite-pmo')));
    $marie->setActivite($em->merge($this->getReference('activite-marie')));

    $guillaume = new Etudiant();
    $guillaume->setNomEtudiant('Launay');
    $guillaume->setPrenomEtudiant('Guillaume');
    $guillaume->setNiveauEtude('3');
    $guillaume->setCreatedAt(new \DateTime('2015-04-21'));
    $guillaume->setPromotion($em->merge($this->getReference('promo-deuxmillecinq')));
    $guillaume->setSpecialite($em->merge($this->getReference('specialite-pmo')));

    $florent = new Etudiant();
    $florent->setNomEtudiant('Gautun');
    $florent->setPrenomEtudiant('Florent');
    $florent->setNiveauEtude('3');
    $florent->setCreatedAt(new \DateTime('2015-04-21'));
    $florent->setPromotion($em->merge($this->getReference('promo-deuxmillecinq')));
    $florent->setSpecialite($em->merge($this->getReference('specialite-pmo')));

    $jb = new Etudiant();
    $jb->setNomEtudiant('Kus');
    $jb->setPrenomEtudiant('Jean-Baptiste');
    $jb->setNiveauEtude('5');
    $jb->setContact('jeanb.kus@gmail.com');
    $jb->setCreatedAt(new \DateTime('2015-04-21'));
    $jb->setPromotion($em->merge($this->getReference('promo-deuxmillecinq')));
    $jb->setSpecialite($em->merge($this->getReference('specialite-pmo')));

    $claire = new Etudiant();
    $claire->setNomEtudiant('Hovasse');
    $claire->setPrenomEtudiant('Claire');
    $claire->setNiveauEtude('5');
    $claire->setContact('clairehovasse@wanadoo.fr');
    $claire->setCreatedAt(new \DateTime('2015-04-21'));
    $claire->setPromotion($em->merge($this->getReference('promo-deuxmillecinq')));
    $claire->setSpecialite($em->merge($this->getReference('specialite-pmo')));

    $alex = new Etudiant();
    $alex->setNomEtudiant('Tabot');
    $alex->setPrenomEtudiant('Alexandre');
    $alex->setNiveauEtude('3');
    $alex->setContact('ccbalexandretabot@orange.fr');
    $alex->setCreatedAt(new \DateTime('2015-04-21'));
    $alex->setPromotion($em->merge($this->getReference('promo-deuxmillecinq')));
    $alex->setSpecialite($em->merge($this->getReference('specialite-pmo')));

    $thomas = new Etudiant();
    $thomas->setNomEtudiant('Lapsolu');
    $thomas->setPrenomEtudiant('Thomas');
    $thomas->setNiveauEtude('2');
    $thomas->setCreatedAt(new \DateTime('2015-04-21'));
    $thomas->setPromotion($em->merge($this->getReference('promo-deuxmillesix')));
    $thomas->setSpecialite($em->merge($this->getReference('specialite-pmo')));

    $morgan = new Etudiant();
    $morgan->setNomEtudiant('Philippe');
    $morgan->setPrenomEtudiant('Morgan');
    $morgan->setNiveauEtude('5');
    $morgan->setCreatedAt(new \DateTime('2015-04-21'));
    $morgan->setPromotion($em->merge($this->getReference('promo-deuxmillesix')));
    $morgan->setSpecialite($em->merge($this->getReference('specialite-pmo')));

    $herve = new Etudiant();
    $herve->setNomEtudiant('Daniel');
    $herve->setPrenomEtudiant('Hervé');
    $herve->setNiveauEtude('5');
    $herve->setCreatedAt(new \DateTime('2015-04-21'));
    $herve->setPromotion($em->merge($this->getReference('promo-deuxmilledix')));
    $herve->setSpecialite($em->merge($this->getReference('specialite-pmo')));

    $pierre = new Etudiant();
    $pierre->setNomEtudiant('Caro');
    $pierre->setPrenomEtudiant('Pierre');
    $pierre->setNiveauEtude('7');
    $pierre->setContact('Pierrec72@hotmail.fr');
    $pierre->setCreatedAt(new \DateTime('2015-04-21'));
    $pierre->setPromotion($em->merge($this->getReference('promo-deuxmilledix')));
    $pierre->setSpecialite($em->merge($this->getReference('specialite-pmo')));

    $quentin = new Etudiant();
    $quentin->setNomEtudiant('Plessis');
    $quentin->setPrenomEtudiant('Quentin');
    $quentin->setNiveauEtude('5');
    $quentin->setContact('quentin-plessis@edu.em-lyon.com');
    $quentin->setCreatedAt(new \DateTime('2015-04-21'));
    $quentin->setPromotion($em->merge($this->getReference('promo-deuxmilledix')));
    $quentin->setSpecialite($em->merge($this->getReference('specialite-pmo')));

    $anaelle = new Etudiant();
    $anaelle->setNomEtudiant('Chauvin');
    $anaelle->setPrenomEtudiant('Anaelle');
    $anaelle->setNiveauEtude('5');
    $anaelle->setCreatedAt(new \DateTime('2015-04-21'));
    $anaelle->setPromotion($em->merge($this->getReference('promo-deuxmilledix')));
    $anaelle->setSpecialite($em->merge($this->getReference('specialite-pmo')));

    $paul = new Etudiant();
    $paul->setNomEtudiant('Cruchet');
    $paul->setPrenomEtudiant('Paul');
    $paul->setNiveauEtude('5');
    $paul->setCreatedAt(new \DateTime('2015-04-21'));
    $paul->setPromotion($em->merge($this->getReference('promo-deuxmilleonze')));
    $paul->setSpecialite($em->merge($this->getReference('specialite-pmo')));

    $julien = new Etudiant();
    $julien->setNomEtudiant('Hatry');
    $julien->setPrenomEtudiant('Julien');
    $julien->setNiveauEtude('5');
    $julien->setCreatedAt(new \DateTime('2015-04-21'));
    $julien->setPromotion($em->merge($this->getReference('promo-deuxmilleonze')));
    $julien->setSpecialite($em->merge($this->getReference('specialite-pmo')));

    $ma = new Etudiant();
    $ma->setNomEtudiant('Le Picard');
    $ma->setPrenomEtudiant('Marc-Antoine');
    $ma->setNiveauEtude('5');
    $ma->setCreatedAt(new \DateTime('2015-04-21'));
    $ma->setPromotion($em->merge($this->getReference('promo-deuxmilleonze')));
    $ma->setSpecialite($em->merge($this->getReference('specialite-pmo')));

    $romain = new Etudiant();
    $romain->setNomEtudiant('Soulard');
    $romain->setPrenomEtudiant('Romain');
    $romain->setNiveauEtude('5');
    $romain->setContact('soulard.r@gmail.com');
    $romain->setCreatedAt(new \DateTime('2015-04-21'));
    $romain->setPromotion($em->merge($this->getReference('promo-deuxmilleonze')));
    $romain->setSpecialite($em->merge($this->getReference('specialite-pmo')));

    $corine = new Etudiant();
    $corine->setNomEtudiant('Breton');
    $corine->setPrenomEtudiant('Corine');
    $corine->setNiveauEtude('5');
    $corine->setContact('breton.corine@gmail.com');
    $corine->setCreatedAt(new \DateTime('2015-04-21'));
    $corine->setPromotion($em->merge($this->getReference('promo-deuxmilleonze')));
    $corine->setSpecialite($em->merge($this->getReference('specialite-pmo')));

    $simon = new Etudiant();
    $simon->setNomEtudiant('Fourreau');
    $simon->setPrenomEtudiant('Simon');
    $simon->setNiveauEtude('5');
    $simon->setContact('simonfourreau@gmail.com');
    $simon->setCreatedAt(new \DateTime('2015-04-21'));
    $simon->setPromotion($em->merge($this->getReference('promo-deuxmilleonze')));
    $simon->setSpecialite($em->merge($this->getReference('specialite-pmo')));

    $alexandre = new Etudiant();
    $alexandre->setNomEtudiant('Weiss');
    $alexandre->setPrenomEtudiant('Alexandre');
    $alexandre->setNiveauEtude('3');
    $alexandre->setContact('weiss.alexandre14@gmail.com');
    $alexandre->setCreatedAt(new \DateTime('2015-04-21'));
    $alexandre->setPromotion($em->merge($this->getReference('promo-deuxmillequatorze')));
    $alexandre->setSpecialite($em->merge($this->getReference('specialite-pmo')));

    $floriane = new Etudiant();
    $floriane->setNomEtudiant('Joubert');
    $floriane->setPrenomEtudiant('Floriane');
    $floriane->setNiveauEtude('6');
    $floriane->setContact('floriane.joubert@laposte.net');
    $floriane->setCreatedAt(new \DateTime('2015-04-21'));
    $floriane->setPromotion($em->merge($this->getReference('promo-quatrevingtdixsept')));
    $floriane->setSpecialite($em->merge($this->getReference('specialite-fc')));

    $jm = new Etudiant();
    $jm->setNomEtudiant('Rakatomanga');
    $jm->setPrenomEtudiant('Jean-Marc');
    $jm->setNiveauEtude('5');
    $jm->setContact('jmrakotomanga@yahoo.fr');
    $jm->setCreatedAt(new \DateTime('2015-04-21'));
    $jm->setPromotion($em->merge($this->getReference('promo-deuxmillecinq')));
    $jm->setSpecialite($em->merge($this->getReference('specialite-fc')));

    $charlotte = new Etudiant();
    $charlotte->setNomEtudiant('Le Garrec');
    $charlotte->setPrenomEtudiant('Charlotte');
    $charlotte->setNiveauEtude('5');
    $charlotte->setContact('Charlotte.legarrec@hotmail.fr');
    $charlotte->setCreatedAt(new \DateTime('2015-04-21'));
    $charlotte->setPromotion($em->merge($this->getReference('promo-deuxmilledix')));
    $charlotte->setSpecialite($em->merge($this->getReference('specialite-fc')));

    $elodie = new Etudiant();
    $elodie->setNomEtudiant('Lemetayer');
    $elodie->setPrenomEtudiant('Elodie');
    $elodie->setNiveauEtude('5');
    $elodie->setContact('lemetayer_elodie@orange.fr');
    $elodie->setCreatedAt(new \DateTime('2015-04-21'));
    $elodie->setPromotion($em->merge($this->getReference('promo-deuxmilleonze')));
    $elodie->setSpecialite($em->merge($this->getReference('specialite-fc')));

    $olivier = new Etudiant();
    $olivier->setNomEtudiant('Patoyt');
    $olivier->setPrenomEtudiant('Olivier');
    $olivier->setNiveauEtude('5');
    $olivier->setCreatedAt(new \DateTime('2015-04-22'));
    $olivier->setPromotion($em->merge($this->getReference('promo-deuxmilleonze')));
    $olivier->setSpecialite($em->merge($this->getReference('specialite-fc')));

    $claire = new Etudiant();
    $claire->setNomEtudiant('Caget');
    $claire->setPrenomEtudiant('Claire');
    $claire->setNiveauEtude('5');
    $claire->setCreatedAt(new \DateTime('2015-04-22'));
    $claire->setPromotion($em->merge($this->getReference('promo-deuxmilledouze')));
    $claire->setSpecialite($em->merge($this->getReference('specialite-fc')));

    $martin = new Etudiant();
    $martin->setNomEtudiant('Bouvier');
    $martin->setPrenomEtudiant('Martin');
    $martin->setNiveauEtude('3');
    $martin->setContact('martin.bouvier@hotmail.fr');
    $martin->setCreatedAt(new \DateTime('2015-04-22'));
    $martin->setPromotion($em->merge($this->getReference('promo-deuxmillequatorze')));
    $martin->setSpecialite($em->merge($this->getReference('specialite-fc')));

    $franck = new Etudiant();
    $franck->setNomEtudiant('Maudoux');
    $franck->setPrenomEtudiant('Franck');
    $franck->setNiveauEtude('2');
    $franck->setCreatedAt(new \DateTime('2015-04-22'));
    $franck->setPromotion($em->merge($this->getReference('promo-quatrevingtdixneuf')));
    $franck->setSpecialite($em->merge($this->getReference('specialite-rh')));

    $alexis = new Etudiant();
    $alexis->setNomEtudiant('Papin');
    $alexis->setPrenomEtudiant('Alexis');
    $alexis->setNiveauEtude('5');
    $alexis->setContact('alexis.papin1@gmail.com');
    $alexis->setCreatedAt(new \DateTime('2015-04-22'));
    $alexis->setPromotion($em->merge($this->getReference('promo-deuxmillequatre')));
    $alexis->setSpecialite($em->merge($this->getReference('specialite-rh')));

    $melanie = new Etudiant();
    $melanie->setNomEtudiant('Hardy');
    $melanie->setPrenomEtudiant('Mélanie');
    $melanie->setNiveauEtude('3');
    $melanie->setCreatedAt(new \DateTime('2015-04-22'));
    $melanie->setPromotion($em->merge($this->getReference('promo-deuxmilleonze')));
    $melanie->setSpecialite($em->merge($this->getReference('specialite-rh')));

    $geoffrey = new Etudiant();
    $geoffrey->setNomEtudiant('Forges');
    $geoffrey->setPrenomEtudiant('Geoffrey');
    $geoffrey->setNiveauEtude('5');
    $geoffrey->setContact('geoffrey.forges@wanadoo.fr');
    $geoffrey->setCreatedAt(new \DateTime('2015-04-22'));
    $geoffrey->setPromotion($em->merge($this->getReference('promo-deuxmilleonze')));
    $geoffrey->setSpecialite($em->merge($this->getReference('specialite-rh')));

    $pierre = new Etudiant();
    $pierre->setNomEtudiant('Lulzac');
    $pierre->setPrenomEtudiant('Pierre');
    $pierre->setNiveauEtude('5');
    $pierre->setCreatedAt(new \DateTime('2015-04-22'));
    $pierre->setPromotion($em->merge($this->getReference('promo-deuxmilleonze')));
    $pierre->setSpecialite($em->merge($this->getReference('specialite-rh')));

    $francois = new Etudiant();
    $francois->setNomEtudiant('Sadeler');
    $francois->setPrenomEtudiant('François');
    $francois->setNiveauEtude('5');
    $francois->setContact('francois.sadeler@orange.fr');
    $francois->setCreatedAt(new \DateTime('2015-04-22'));
    $francois->setPromotion($em->merge($this->getReference('promo-deuxmilleonze')));
    $francois->setSpecialite($em->merge($this->getReference('specialite-rh')));


    $em->persist($marie);
    $em->persist($guillaume);
    $em->persist($florent);
    $em->persist($jb);
    $em->persist($claire);
    $em->persist($alex);
    $em->persist($thomas);
    $em->persist($morgan);
    $em->persist($herve);
    $em->persist($pierre);
    $em->persist($quentin);
    $em->persist($anaelle);
    $em->persist($paul);
    $em->persist($julien);
    $em->persist($ma);
    $em->persist($romain);
    $em->persist($corine);
    $em->persist($simon);
    $em->persist($alexandre);
    $em->persist($floriane);
    $em->persist($jm);
    $em->persist($charlotte);
    $em->persist($elodie);
    $em->persist($olivier);
    $em->persist($claire);
    $em->persist($martin);
    $em->persist($franck);
    $em->persist($alexis);
    $em->persist($melanie);
    $em->persist($geoffrey);
    $em->persist($pierre);
    $em->persist($francois);
 
    $em->flush();
 
  }
 
  public function getOrder()
  {
    return 4; // the order in which fixtures will be loaded
  }
}
?>