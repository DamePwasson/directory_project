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
    $marie->setActivite($em->merge($this->getReference('activite-marie-2')));

    $guillaume = new Etudiant();
    $guillaume->setNomEtudiant('Launay');
    $guillaume->setPrenomEtudiant('Guillaume');
    $guillaume->setNiveauEtude('3');
    $guillaume->setCreatedAt(new \DateTime('2015-04-21'));
    $guillaume->setPromotion($em->merge($this->getReference('promo-deuxmillecinq')));
    $guillaume->setSpecialite($em->merge($this->getReference('specialite-pmo')));
    $guillaume->setActivite($em->merge($this->getReference('activite-gui')));
    $guillaume->setActivite($em->merge($this->getReference('activite-gui-2')));

    $florent = new Etudiant();
    $florent->setNomEtudiant('Gautun');
    $florent->setPrenomEtudiant('Florent');
    $florent->setNiveauEtude('3');
    $florent->setCreatedAt(new \DateTime('2015-04-21'));
    $florent->setPromotion($em->merge($this->getReference('promo-deuxmillecinq')));
    $florent->setSpecialite($em->merge($this->getReference('specialite-pmo')));
    $florent->setActivite($em->merge($this->getReference('activite-florent')));
    $florent->setActivite($em->merge($this->getReference('activite-florent-2')));

    $jb = new Etudiant();
    $jb->setNomEtudiant('Kus');
    $jb->setPrenomEtudiant('Jean-Baptiste');
    $jb->setNiveauEtude('5');
    $jb->setContact('jeanb.kus@gmail.com');
    $jb->setCreatedAt(new \DateTime('2015-04-21'));
    $jb->setPromotion($em->merge($this->getReference('promo-deuxmillecinq')));
    $jb->setSpecialite($em->merge($this->getReference('specialite-pmo')));
    $jb->setActivite($em->merge($this->getReference('activite-jb')));
    $jb->setActivite($em->merge($this->getReference('activite-jb-2')));
    $jb->setActivite($em->merge($this->getReference('activite-jb-3')));

    $claire = new Etudiant();
    $claire->setNomEtudiant('Hovasse');
    $claire->setPrenomEtudiant('Claire');
    $claire->setNiveauEtude('5');
    $claire->setContact('clairehovasse@wanadoo.fr');
    $claire->setCreatedAt(new \DateTime('2015-04-21'));
    $claire->setPromotion($em->merge($this->getReference('promo-deuxmillecinq')));
    $claire->setSpecialite($em->merge($this->getReference('specialite-pmo')));
    $claire->setActivite($em->merge($this->getReference('activite-claire')));
    $claire->setActivite($em->merge($this->getReference('activite-claire-2')));
    $claire->setActivite($em->merge($this->getReference('activite-claire-3')));
    $claire->setActivite($em->merge($this->getReference('activite-claire-4')));

    $alex = new Etudiant();
    $alex->setNomEtudiant('Tabot');
    $alex->setPrenomEtudiant('Alexandre');
    $alex->setNiveauEtude('3');
    $alex->setContact('ccbalexandretabot@orange.fr');
    $alex->setCreatedAt(new \DateTime('2015-04-21'));
    $alex->setPromotion($em->merge($this->getReference('promo-deuxmillecinq')));
    $alex->setSpecialite($em->merge($this->getReference('specialite-pmo')));
    $alex->setActivite($em->merge($this->getReference('activite-alex')));
    $alex->setActivite($em->merge($this->getReference('activite-alex-2')));
    $alex->setActivite($em->merge($this->getReference('activite-alex-3')));
    $alex->setActivite($em->merge($this->getReference('activite-alex-4')));

    $thomas = new Etudiant();
    $thomas->setNomEtudiant('Lapsolu');
    $thomas->setPrenomEtudiant('Thomas');
    $thomas->setNiveauEtude('2');
    $thomas->setCreatedAt(new \DateTime('2015-04-21'));
    $thomas->setPromotion($em->merge($this->getReference('promo-deuxmillesix')));
    $thomas->setSpecialite($em->merge($this->getReference('specialite-pmo')));
    $thomas->setActivite($em->merge($this->getReference('activite-thomas')));
    $thomas->setActivite($em->merge($this->getReference('activite-thomas-2')));

    $morgan = new Etudiant();
    $morgan->setNomEtudiant('Philippe');
    $morgan->setPrenomEtudiant('Morgan');
    $morgan->setNiveauEtude('5');
    $morgan->setCreatedAt(new \DateTime('2015-04-21'));
    $morgan->setPromotion($em->merge($this->getReference('promo-deuxmillesix')));
    $morgan->setSpecialite($em->merge($this->getReference('specialite-pmo')));
    $morgan->setActivite($em->merge($this->getReference('activite-morgan')));
    $morgan->setActivite($em->merge($this->getReference('activite-morgan-2')));
    $morgan->setActivite($em->merge($this->getReference('activite-morgan-3')));

    $herve = new Etudiant();
    $herve->setNomEtudiant('Daniel');
    $herve->setPrenomEtudiant('Hervé');
    $herve->setNiveauEtude('5');
    $herve->setCreatedAt(new \DateTime('2015-04-21'));
    $herve->setPromotion($em->merge($this->getReference('promo-deuxmilledix')));
    $herve->setSpecialite($em->merge($this->getReference('specialite-pmo')));
    $herve->setActivite($em->merge($this->getReference('activite-herve')));
    $herve->setActivite($em->merge($this->getReference('activite-herve-2')));
    $herve->setActivite($em->merge($this->getReference('activite-herve-3')));

    $pierre = new Etudiant();
    $pierre->setNomEtudiant('Caro');
    $pierre->setPrenomEtudiant('Pierre');
    $pierre->setNiveauEtude('7');
    $pierre->setContact('Pierrec72@hotmail.fr');
    $pierre->setCreatedAt(new \DateTime('2015-04-21'));
    $pierre->setPromotion($em->merge($this->getReference('promo-deuxmilledix')));
    $pierre->setSpecialite($em->merge($this->getReference('specialite-pmo')));
    $pierre->setActivite($em->merge($this->getReference('activite-pierre')));
    $pierre->setActivite($em->merge($this->getReference('activite-pierre-2')));
    $pierre->setActivite($em->merge($this->getReference('activite-pierre-3')));
    $pierre->setActivite($em->merge($this->getReference('activite-pierre-4')));

    $quentin = new Etudiant();
    $quentin->setNomEtudiant('Plessis');
    $quentin->setPrenomEtudiant('Quentin');
    $quentin->setNiveauEtude('5');
    $quentin->setContact('quentin-plessis@edu.em-lyon.com');
    $quentin->setCreatedAt(new \DateTime('2015-04-21'));
    $quentin->setPromotion($em->merge($this->getReference('promo-deuxmilledix')));
    $quentin->setSpecialite($em->merge($this->getReference('specialite-pmo')));
    $quentin->setActivite($em->merge($this->getReference('activite-quentin')));
    $quentin->setActivite($em->merge($this->getReference('activite-quentin-2')));
    $quentin->setActivite($em->merge($this->getReference('activite-quentin-3')));
    $quentin->setActivite($em->merge($this->getReference('activite-quentin-4')));
    $quentin->setActivite($em->merge($this->getReference('activite-quentin-5')));

    $anaelle = new Etudiant();
    $anaelle->setNomEtudiant('Chauvin');
    $anaelle->setPrenomEtudiant('Anaelle');
    $anaelle->setNiveauEtude('5');
    $anaelle->setCreatedAt(new \DateTime('2015-04-21'));
    $anaelle->setPromotion($em->merge($this->getReference('promo-deuxmilledix')));
    $anaelle->setSpecialite($em->merge($this->getReference('specialite-pmo')));
    $anaelle->setActivite($em->merge($this->getReference('activite-anaelle')));
    $anaelle->setActivite($em->merge($this->getReference('activite-anaelle-2')));
    $anaelle->setActivite($em->merge($this->getReference('activite-anaelle-3')));
    $anaelle->setActivite($em->merge($this->getReference('activite-anaelle-4')));

    $paul = new Etudiant();
    $paul->setNomEtudiant('Cruchet');
    $paul->setPrenomEtudiant('Paul');
    $paul->setNiveauEtude('5');
    $paul->setCreatedAt(new \DateTime('2015-04-21'));
    $paul->setPromotion($em->merge($this->getReference('promo-deuxmilleonze')));
    $paul->setSpecialite($em->merge($this->getReference('specialite-pmo')));
    $paul->setActivite($em->merge($this->getReference('activite-paul')));
    $paul->setActivite($em->merge($this->getReference('activite-paul-2')));
    $paul->setActivite($em->merge($this->getReference('activite-paul-3')));
    $paul->setActivite($em->merge($this->getReference('activite-paul-4')));

    $julien = new Etudiant();
    $julien->setNomEtudiant('Hatry');
    $julien->setPrenomEtudiant('Julien');
    $julien->setNiveauEtude('5');
    $julien->setCreatedAt(new \DateTime('2015-04-21'));
    $julien->setPromotion($em->merge($this->getReference('promo-deuxmilleonze')));
    $julien->setSpecialite($em->merge($this->getReference('specialite-pmo')));
    $julien->setActivite($em->merge($this->getReference('activite-julien')));
    $julien->setActivite($em->merge($this->getReference('activite-julien-2')));
    $julien->setActivite($em->merge($this->getReference('activite-julien-3')));

    $ma = new Etudiant();
    $ma->setNomEtudiant('Le Picard');
    $ma->setPrenomEtudiant('Marc-Antoine');
    $ma->setNiveauEtude('5');
    $ma->setCreatedAt(new \DateTime('2015-04-21'));
    $ma->setPromotion($em->merge($this->getReference('promo-deuxmilleonze')));
    $ma->setSpecialite($em->merge($this->getReference('specialite-pmo')));
    $ma->setActivite($em->merge($this->getReference('activite-ma')));
    $ma->setActivite($em->merge($this->getReference('activite-ma-2')));
    $ma->setActivite($em->merge($this->getReference('activite-ma-3')));

    $romain = new Etudiant();
    $romain->setNomEtudiant('Soulard');
    $romain->setPrenomEtudiant('Romain');
    $romain->setNiveauEtude('5');
    $romain->setContact('soulard.r@gmail.com');
    $romain->setCreatedAt(new \DateTime('2015-04-21'));
    $romain->setPromotion($em->merge($this->getReference('promo-deuxmilleonze')));
    $romain->setSpecialite($em->merge($this->getReference('specialite-pmo')));
    $romain->setActivite($em->merge($this->getReference('activite-romain')));
    $romain->setActivite($em->merge($this->getReference('activite-romain-2')));
    $romain->setActivite($em->merge($this->getReference('activite-romain-3')));

    $corine = new Etudiant();
    $corine->setNomEtudiant('Breton');
    $corine->setPrenomEtudiant('Corine');
    $corine->setNiveauEtude('5');
    $corine->setContact('breton.corine@gmail.com');
    $corine->setCreatedAt(new \DateTime('2015-04-21'));
    $corine->setPromotion($em->merge($this->getReference('promo-deuxmilleonze')));
    $corine->setSpecialite($em->merge($this->getReference('specialite-pmo')));
    $corine->setActivite($em->merge($this->getReference('activite-corine')));
    $corine->setActivite($em->merge($this->getReference('activite-corine-2')));
    $corine->setActivite($em->merge($this->getReference('activite-corine-3')));

    $simon = new Etudiant();
    $simon->setNomEtudiant('Fourreau');
    $simon->setPrenomEtudiant('Simon');
    $simon->setNiveauEtude('5');
    $simon->setContact('simonfourreau@gmail.com');
    $simon->setCreatedAt(new \DateTime('2015-04-21'));
    $simon->setPromotion($em->merge($this->getReference('promo-deuxmilleonze')));
    $simon->setSpecialite($em->merge($this->getReference('specialite-pmo')));
    $simon->setActivite($em->merge($this->getReference('activite-simon')));
    $simon->setActivite($em->merge($this->getReference('activite-simon-2')));
    $simon->setActivite($em->merge($this->getReference('activite-simon-3')));

    $alexandre = new Etudiant();
    $alexandre->setNomEtudiant('Weiss');
    $alexandre->setPrenomEtudiant('Alexandre');
    $alexandre->setNiveauEtude('3');
    $alexandre->setContact('weiss.alexandre14@gmail.com');
    $alexandre->setCreatedAt(new \DateTime('2015-04-21'));
    $alexandre->setPromotion($em->merge($this->getReference('promo-deuxmillequatorze')));
    $alexandre->setSpecialite($em->merge($this->getReference('specialite-pmo')));
    $alexandre->setActivite($em->merge($this->getReference('activite-alexandre')));

    $floriane = new Etudiant();
    $floriane->setNomEtudiant('Joubert');
    $floriane->setPrenomEtudiant('Floriane');
    $floriane->setNiveauEtude('6');
    $floriane->setContact('floriane.joubert@laposte.net');
    $floriane->setCreatedAt(new \DateTime('2015-04-21'));
    $floriane->setPromotion($em->merge($this->getReference('promo-quatrevingtdixsept')));
    $floriane->setSpecialite($em->merge($this->getReference('specialite-fc')));
    $floriane->setActivite($em->merge($this->getReference('activite-flo')));
    $floriane->setActivite($em->merge($this->getReference('activite-flo-2')));
    $floriane->setActivite($em->merge($this->getReference('activite-flo-3')));

    $jm = new Etudiant();
    $jm->setNomEtudiant('Rakatomanga');
    $jm->setPrenomEtudiant('Jean-Marc');
    $jm->setNiveauEtude('5');
    $jm->setContact('jmrakotomanga@yahoo.fr');
    $jm->setCreatedAt(new \DateTime('2015-04-21'));
    $jm->setPromotion($em->merge($this->getReference('promo-deuxmillecinq')));
    $jm->setSpecialite($em->merge($this->getReference('specialite-fc')));
    $jm->setActivite($em->merge($this->getReference('activite-jm')));
    $jm->setActivite($em->merge($this->getReference('activite-jm-2')));

    $charlotte = new Etudiant();
    $charlotte->setNomEtudiant('Le Garrec');
    $charlotte->setPrenomEtudiant('Charlotte');
    $charlotte->setNiveauEtude('5');
    $charlotte->setContact('Charlotte.legarrec@hotmail.fr');
    $charlotte->setCreatedAt(new \DateTime('2015-04-21'));
    $charlotte->setPromotion($em->merge($this->getReference('promo-deuxmilledix')));
    $charlotte->setSpecialite($em->merge($this->getReference('specialite-fc')));
    $charlotte->setActivite($em->merge($this->getReference('activite-cha')));
    $charlotte->setActivite($em->merge($this->getReference('activite-cha-2')));
    $charlotte->setActivite($em->merge($this->getReference('activite-cha-3')));

    $elodie = new Etudiant();
    $elodie->setNomEtudiant('Lemetayer');
    $elodie->setPrenomEtudiant('Elodie');
    $elodie->setNiveauEtude('5');
    $elodie->setContact('lemetayer_elodie@orange.fr');
    $elodie->setCreatedAt(new \DateTime('2015-04-21'));
    $elodie->setPromotion($em->merge($this->getReference('promo-deuxmilleonze')));
    $elodie->setSpecialite($em->merge($this->getReference('specialite-fc')));
    $elodie->setActivite($em->merge($this->getReference('activite-elodie')));
    $elodie->setActivite($em->merge($this->getReference('activite-elodie-2')));

    $olivier = new Etudiant();
    $olivier->setNomEtudiant('Patoyt');
    $olivier->setPrenomEtudiant('Olivier');
    $olivier->setNiveauEtude('5');
    $olivier->setCreatedAt(new \DateTime('2015-04-22'));
    $olivier->setPromotion($em->merge($this->getReference('promo-deuxmilleonze')));
    $olivier->setSpecialite($em->merge($this->getReference('specialite-fc')));
    $olivier->setActivite($em->merge($this->getReference('activite-olivier')));
    $olivier->setActivite($em->merge($this->getReference('activite-olivier-2')));

    $cla = new Etudiant();
    $cla->setNomEtudiant('Caget');
    $cla->setPrenomEtudiant('Claire');
    $cla->setNiveauEtude('5');
    $cla->setCreatedAt(new \DateTime('2015-04-22'));
    $cla->setPromotion($em->merge($this->getReference('promo-deuxmilledouze')));
    $cla->setSpecialite($em->merge($this->getReference('specialite-fc')));
    $cla->setActivite($em->merge($this->getReference('activite-cla')));
    $cla->setActivite($em->merge($this->getReference('activite-cla-2')));

    $martin = new Etudiant();
    $martin->setNomEtudiant('Bouvier');
    $martin->setPrenomEtudiant('Martin');
    $martin->setNiveauEtude('3');
    $martin->setContact('martin.bouvier@hotmail.fr');
    $martin->setCreatedAt(new \DateTime('2015-04-22'));
    $martin->setPromotion($em->merge($this->getReference('promo-deuxmillequatorze')));
    $martin->setSpecialite($em->merge($this->getReference('specialite-fc')));
    $martin->setActivite($em->merge($this->getReference('activite-martin')));

    $franck = new Etudiant();
    $franck->setNomEtudiant('Maudoux');
    $franck->setPrenomEtudiant('Franck');
    $franck->setNiveauEtude('2');
    $franck->setCreatedAt(new \DateTime('2015-04-22'));
    $franck->setPromotion($em->merge($this->getReference('promo-quatrevingtdixneuf')));
    $franck->setSpecialite($em->merge($this->getReference('specialite-rh')));
    $franck->setActivite($em->merge($this->getReference('activite-franck')));

    $alexis = new Etudiant();
    $alexis->setNomEtudiant('Papin');
    $alexis->setPrenomEtudiant('Alexis');
    $alexis->setNiveauEtude('5');
    $alexis->setContact('alexis.papin1@gmail.com');
    $alexis->setCreatedAt(new \DateTime('2015-04-22'));
    $alexis->setPromotion($em->merge($this->getReference('promo-deuxmillequatre')));
    $alexis->setSpecialite($em->merge($this->getReference('specialite-rh')));
    $alexis->setActivite($em->merge($this->getReference('activite-alexis')));
    $alexis->setActivite($em->merge($this->getReference('activite-alexis-2')));

    $melanie = new Etudiant();
    $melanie->setNomEtudiant('Hardy');
    $melanie->setPrenomEtudiant('Mélanie');
    $melanie->setNiveauEtude('3');
    $melanie->setCreatedAt(new \DateTime('2015-04-22'));
    $melanie->setPromotion($em->merge($this->getReference('promo-deuxmilleonze')));
    $melanie->setSpecialite($em->merge($this->getReference('specialite-rh')));
    $melanie->setActivite($em->merge($this->getReference('activite-melanie')));
    $melanie->setActivite($em->merge($this->getReference('activite-melanie-2')));

    $geoffrey = new Etudiant();
    $geoffrey->setNomEtudiant('Forges');
    $geoffrey->setPrenomEtudiant('Geoffrey');
    $geoffrey->setNiveauEtude('5');
    $geoffrey->setContact('geoffrey.forges@wanadoo.fr');
    $geoffrey->setCreatedAt(new \DateTime('2015-04-22'));
    $geoffrey->setPromotion($em->merge($this->getReference('promo-deuxmilleonze')));
    $geoffrey->setSpecialite($em->merge($this->getReference('specialite-rh')));
    $geoffrey->setActivite($em->merge($this->getReference('activite-geo')));
    $geoffrey->setActivite($em->merge($this->getReference('activite-geo-2')));
    $geoffrey->setActivite($em->merge($this->getReference('activite-geo-3')));

    $pie = new Etudiant();
    $pie->setNomEtudiant('Lulzac');
    $pie->setPrenomEtudiant('Pierre');
    $pie->setNiveauEtude('5');
    $pie->setCreatedAt(new \DateTime('2015-04-22'));
    $pie->setPromotion($em->merge($this->getReference('promo-deuxmilleonze')));
    $pie->setSpecialite($em->merge($this->getReference('specialite-rh')));
    $pie->setActivite($em->merge($this->getReference('activite-pie')));
    $pie->setActivite($em->merge($this->getReference('activite-pie-2')));

    $francois = new Etudiant();
    $francois->setNomEtudiant('Sadeler');
    $francois->setPrenomEtudiant('François');
    $francois->setNiveauEtude('5');
    $francois->setContact('francois.sadeler@orange.fr');
    $francois->setCreatedAt(new \DateTime('2015-04-22'));
    $francois->setPromotion($em->merge($this->getReference('promo-deuxmilleonze')));
    $francois->setSpecialite($em->merge($this->getReference('specialite-rh')));
    $francois->setActivite($em->merge($this->getReference('activite-fran')));
    $francois->setActivite($em->merge($this->getReference('activite-fran-2')));


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
    $em->persist($cla);
    $em->persist($martin);
    $em->persist($franck);
    $em->persist($alexis);
    $em->persist($melanie);
    $em->persist($geoffrey);
    $em->persist($pie);
    $em->persist($francois);
 
    $em->flush();
 
  }
 
  public function getOrder()
  {
    return 4; // the order in which fixtures will be loaded
  }
}
?>