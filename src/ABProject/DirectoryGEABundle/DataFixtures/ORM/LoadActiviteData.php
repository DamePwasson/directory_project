<?php
namespace ABProject\DirectoryGEABundle\DataFixtures\ORM;
 
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use ABProject\DirectoryGEABundle\Entity\Specialite;
 
class LoadActiviteData extends AbstractFixture implements OrderedFixtureInterface
{
  public function load(ObjectManager $em)
  {
    $actmarie = new Activite();
    $actmarie->setNomActivite('Essca');
    $actmarie->setTypeActivite('Poursuite d\'étude');
    $actmarie->setAnneeDebut(2000);
    $actmarie->setAnneeFin(2003);

    $actmariedeux = new Activite();
    $actmariedeux->setNomActivite('Chef de produit web');
    $actmariedeux->setDescription('Actuellement en formation à distance e-marketing et e-comerce.');
    $actmariedeux->setTypeActivite('Carrière');

    $actgui = new Activite();
    $actgui->setNomActivite('Licence banque finance assurance');
    $actgui->setDescription('Formation TS+ au lycée sud. 4 mois de cours, 6 mois de stage (3 mois à la Fortis Bank');
    $actgui->setTypeActivite('Poursuite d\'étude');
    $actgui->setAnneeDebut(2005);
    $actgui->setAnneeFin(2006);

    $actguideux = new Activite();
    $actguideux->setNomActivite('Responsable d\'agence');
    $actguideux->setTypeActivite('Carrière');
    $actguideux->setAnneeDebut(2008);

    $actflorent = new Activite();
    $actflorent->setNomActivite('Licence AES');
    $actflorent->setTypeActivite('Poursuite d\'étude');
    $actflorent->setAnneeDebut(2005);
    $actflorent->setAnneeFin(2006);

    $actflorentdeux = new Activite();
    $actflorentdeux->setNomActivite('Conseiller clientèle au CIC');
    $actflorentdeux->setTypeActivite('Carrière');
    $actflorentdeux->setAnneeDebut(2011);

    $actjb = new Activite();
    $actjb->setNomActivite('Licence banque finance assurance');
    $actjb->setTypeActivite('Poursuite d\'étude');
    $actjb->setAnneeDebut(2005);
    $actjb->setAnneeFin(2006);

    $actjbdeux = new Activite();
    $actjbdeux->setNomActivite('Master Gestion de patrimoine');
    $actjbdeux->setTypeActivite('Poursuite d\'étude');
    $actjbdeux->setAnneeDebut(2006);
    $actjbdeux->setAnneeFin(2008);

    $actjbtrois = new Activite();
    $actjbtrois->setNomActivite('Conseiller patrimonial chez MMA');
    $actjbtrois->setTypeActivite('Carrière');

    $actclaire = new Activite();
    $actclaire->setNomActivite('Master Gestion de patrimoine à Angers');
    $actclaire->setTypeActivite('Poursuite d\'étude');
    $actclaire->setAnneeDebut(2005);
    $actclaire->setAnneeFin(2008);

    $actclairedeux = new Activite();
    $actclairedeux->setNomActivite('Conseiller financier à la Banque Populaire de l\'Ouest');
    $actclairedeux->setTypeActivite('Carrière');

    $actclairetrois = new Activite();
    $actclairetrois->setNomActivite('Conseiller en assurance au siège de MMA');
    $actclairetrois->setTypeActivite('Carrière');

    $actclairequatre = new Activite();
    $actclairequatre->setNomActivite('Conseillère patrimoine et prévoyance à MMA');
    $actclairequatre->setTypeActivite('Carrière');
    $actclairequatre->setAnneeDebut(2012);

    $actalex = new Activite();
    $actalex->setNomActivite('Licence de commerce');
    $actalex->setDescription('Superviseur en centre d\'appel');
    $actalex->setTypeActivite('Poursuite d\'étude');
    $actalex->setAnneeDebut(2005);
    $actalex->setAnneeFin(2006);

    $actalexdeux = new Activite();
    $actalexdeux->setNomActivite('Licence 1 SPI à l\'Université du Mans');
    $actalexdeux->setTypeActivite('Poursuite d\'étude');
    $actalexdeux->setAnneeDebut(2014);
    $actalexdeux->setAnneeFin(2015);

    $actalextrois = new Activite();
    $actalextrois->setNomActivite('Assistant commercial');
    $actalextrois->setTypeActivite('Carrière');

    $actalexquatre = new Activite();
    $actalexquatre->setNomActivite('Opérateur de saisie dans un centre de gestion');
    $actalexquatre->setTypeActivite('Carrière');

    $actthomas = new Activite();
    $actthomas->setNomActivite('Licence professionnelle Assurance, Banque, Finance à l\'IUT du Mans');
    $actthomas->setTypeActivite('Poursuite d\'étude');
    $actthomas->setAnneeDebut(2006);
    $actthomas->setAnneeFin(2007);

    $actthomasdeux = new Activite();
    $actthomasdeux->setNomActivite('Militaire à l\'armée de l\'air');
    $actthomasdeux->setTypeActivite('Carrière');

    $actmorgan = new Activite();
    $actmorgan->setNomActivite('Licence Ingénierie du Management à l\'IUP Management et Gestion des Entreprises de Clermont Ferrand');
    $actmorgan->setTypeActivite('Poursuite d\'étude');
    $actmorgan->setAnneeDebut(2006);
    $actmorgan->setAnneeFin(2007);

    $actmorgandeux = new Activite();
    $actmorgandeux->setNomActivite('Master Gestion des PME - PMI à l\'IUP Management de Clermont Ferrand');
    $actmorgandeux->setTypeActivite('Poursuite d\'étude');
    $actmorgandeux->setAnneeDebut(2007);
    $actmorgandeux->setAnneeFin(2009);

    $actmorgantrois = new Activite();
    $actmorgantrois->setNomActivite('Responsable des ventes en grande surface');
    $actmorgantrois->setTypeActivite('Carrière');

    $actherve = new Activite();
    $actherve->setNomActivite('Licence Sciences de Gestion à l\'IAE de Tours');
    $actherve->setTypeActivite('Poursuite d\'étude');
    $actherve->setAnneeDebut(2010);
    $actherve->setAnneeFin(2011);

    $acthervedeux = new Activite();
    $acthervedeux->setNomActivite('Master Audit et Contrôle des entreprises internationales à l\'IAE de Tours');
    $acthervedeux->setTypeActivite('Poursuite d\'étude');
    $acthervedeux->setAnneeDebut(2011);
    $acthervedeux->setAnneeFin(2013);

    $acthervetrois = new Activite();
    $acthervetrois->setNomActivite('Commissaire aux comptes');
    $acthervetrois->setTypeActivite('Carrière');





    $em->persist($actmarie);
 
    $em->flush();
 
    $this->addReference('activite-marie', $actmarie);
    $this->addReference('activite-marie-2', $actmariedeux);
    $this->addReference('activite-gui', $actgui);
    $this->addReference('activite-gui-2', $actguideux);
    $this->addReference('activite-florent', $actflorent);
    $this->addReference('activite-florent-2', $actflorentdeux);
    $this->addReference('activite-jb', $actjb);
    $this->addReference('activite-jb-2', $actjbdeux);
    $this->addReference('activite-jb-3', $actjbtrois);
    $this->addReference('activite-claire', $actclaire);
    $this->addReference('activite-claire-2', $actclairedeux);
    $this->addReference('activite-claire-3', $actclairetrois);
    $this->addReference('activite-claire-4', $actclairequatre);
    $this->addReference('activite-alex', $actalex);
    $this->addReference('activite-alex-2', $actalexdeux);
    $this->addReference('activite-alex-3', $actalextrois);
    $this->addReference('activite-alex-4', $actalexquatre);
    $this->addReference('activite-thomas', $actthomas);
    $this->addReference('activite-thomas-2', $actthomasdeux);
    $this->addReference('activite-morgan', $actmorgan);
    $this->addReference('activite-morgan-2', $actmorgandeux);
    $this->addReference('activite-morgan-3', $actmorgantrois);
    $this->addReference('activite-herve', $actherve);
    $this->addReference('activite-herve-2', $acthervedeux);
    $this->addReference('activite-herve-3', $acthervetrois);

  }
 
  public function getOrder()
  {
    return 3; // the order in which fixtures will be loaded
  }
}
?>