<?php
namespace ABProject\DirectoryGEABundle\DataFixtures\ORM;
 
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use ABProject\DirectoryGEABundle\Entity\Activite;
 
class LoadActiviteData extends AbstractFixture implements OrderedFixtureInterface
{
  public function load(ObjectManager $em)
  {
    $actmarie = new Activite();
    $actmarie->setNomActivite('Essca');
    $actmarie->setTypeActivite('Poursuite d\'étude');
    $actmarie->setAnneeDebut(2000);
    $actmarie->setAnneeFin(2003);
    $actmarie->setEtudiants($em->merge($this->getReference('marie')));

    $actmariedeux = new Activite();
    $actmariedeux->setNomActivite('Chef de produit web');
    $actmariedeux->setDescription('Actuellement en formation à distance e-marketing et e-comerce.');
    $actmariedeux->setTypeActivite('Carrière');
    $actmariedeux->setEtudiants($em->merge($this->getReference('marie')));

    $actgui = new Activite();
    $actgui->setNomActivite('Licence banque finance assurance');
    $actgui->setDescription('Formation TS+ au lycée sud. 4 mois de cours, 6 mois de stage (3 mois à la Fortis Bank)');
    $actgui->setTypeActivite('Poursuite d\'étude');
    $actgui->setAnneeDebut(2005);
    $actgui->setAnneeFin(2006);
    $actgui->setEtudiants($em->merge($this->getReference('gui')));

    $actguideux = new Activite();
    $actguideux->setNomActivite('Responsable d\'agence');
    $actguideux->setTypeActivite('Carrière');
    $actguideux->setAnneeDebut(2008);
    $actguideux->setEtudiants($em->merge($this->getReference('gui')));

    $actflorent = new Activite();
    $actflorent->setNomActivite('Licence AES');
    $actflorent->setTypeActivite('Poursuite d\'étude');
    $actflorent->setAnneeDebut(2005);
    $actflorent->setAnneeFin(2006);
    $actflorent->setEtudiants($em->merge($this->getReference('florent')));

    $actflorentdeux = new Activite();
    $actflorentdeux->setNomActivite('Conseiller clientèle au CIC');
    $actflorentdeux->setTypeActivite('Carrière');
    $actflorentdeux->setAnneeDebut(2011);
    $actflorentdeux->setEtudiants($em->merge($this->getReference('florent')));

    $actjb = new Activite();
    $actjb->setNomActivite('Licence banque finance assurance');
    $actjb->setTypeActivite('Poursuite d\'étude');
    $actjb->setAnneeDebut(2005);
    $actjb->setAnneeFin(2006);
    $actjb->setEtudiants($em->merge($this->getReference('jb')));

    $actjbdeux = new Activite();
    $actjbdeux->setNomActivite('Master Gestion de patrimoine');
    $actjbdeux->setTypeActivite('Poursuite d\'étude');
    $actjbdeux->setAnneeDebut(2006);
    $actjbdeux->setAnneeFin(2008);
    $actjbdeux->setEtudiants($em->merge($this->getReference('jb')));

    $actjbtrois = new Activite();
    $actjbtrois->setNomActivite('Conseiller patrimonial chez MMA');
    $actjbtrois->setTypeActivite('Carrière');
    $actjbtrois->setEtudiants($em->merge($this->getReference('jb')));

    $actclaire = new Activite();
    $actclaire->setNomActivite('Master Gestion de patrimoine à Angers');
    $actclaire->setTypeActivite('Poursuite d\'étude');
    $actclaire->setAnneeDebut(2005);
    $actclaire->setAnneeFin(2008);
    $actclaire->setEtudiants($em->merge($this->getReference('claire')));

    $actclairedeux = new Activite();
    $actclairedeux->setNomActivite('Conseiller financier à la Banque Populaire de l\'Ouest');
    $actclairedeux->setTypeActivite('Carrière');
    $actclairedeux->setEtudiants($em->merge($this->getReference('claire')));

    $actclairetrois = new Activite();
    $actclairetrois->setNomActivite('Conseiller en assurance au siège de MMA');
    $actclairetrois->setTypeActivite('Carrière');
    $actclairetrois->setEtudiants($em->merge($this->getReference('claire')));

    $actclairequatre = new Activite();
    $actclairequatre->setNomActivite('Conseillère patrimoine et prévoyance à MMA');
    $actclairequatre->setTypeActivite('Carrière');
    $actclairequatre->setAnneeDebut(2012);
    $actclairequatre->setEtudiants($em->merge($this->getReference('claire')));

    $actalex = new Activite();
    $actalex->setNomActivite('Licence de commerce');
    $actalex->setDescription('Superviseur en centre d\'appel');
    $actalex->setTypeActivite('Poursuite d\'étude');
    $actalex->setAnneeDebut(2005);
    $actalex->setAnneeFin(2006);
    $actalex->setEtudiants($em->merge($this->getReference('alex')));

    $actalexdeux = new Activite();
    $actalexdeux->setNomActivite('Licence 1 SPI à l\'Université du Mans');
    $actalexdeux->setTypeActivite('Poursuite d\'étude');
    $actalexdeux->setAnneeDebut(2014);
    $actalexdeux->setAnneeFin(2015);
    $actalexdeux->setEtudiants($em->merge($this->getReference('alex')));

    $actalextrois = new Activite();
    $actalextrois->setNomActivite('Assistant commercial');
    $actalextrois->setTypeActivite('Carrière');
    $actalextrois->setEtudiants($em->merge($this->getReference('alex')));

    $actalexquatre = new Activite();
    $actalexquatre->setNomActivite('Opérateur de saisie dans un centre de gestion');
    $actalexquatre->setTypeActivite('Carrière');
    $actalexquatre->setEtudiants($em->merge($this->getReference('alex')));

    $actthomas = new Activite();
    $actthomas->setNomActivite('Licence professionnelle Assurance, Banque, Finance à l\'IUT du Mans');
    $actthomas->setTypeActivite('Poursuite d\'étude');
    $actthomas->setAnneeDebut(2006);
    $actthomas->setAnneeFin(2007);
    $actthomas->setEtudiants($em->merge($this->getReference('thomas')));

    $actthomasdeux = new Activite();
    $actthomasdeux->setNomActivite('Militaire à l\'armée de l\'air');
    $actthomasdeux->setTypeActivite('Carrière');
    $actthomasdeux->setEtudiants($em->merge($this->getReference('thomas')));

    $actmorgan = new Activite();
    $actmorgan->setNomActivite('Licence Ingénierie du Management à l\'IUP Management et Gestion des Entreprises de Clermont Ferrand');
    $actmorgan->setTypeActivite('Poursuite d\'étude');
    $actmorgan->setAnneeDebut(2006);
    $actmorgan->setAnneeFin(2007);
    $actmorgan->setEtudiants($em->merge($this->getReference('morgan')));

    $actmorgandeux = new Activite();
    $actmorgandeux->setNomActivite('Master Gestion des PME - PMI à l\'IUP Management de Clermont Ferrand');
    $actmorgandeux->setTypeActivite('Poursuite d\'étude');
    $actmorgandeux->setAnneeDebut(2007);
    $actmorgandeux->setAnneeFin(2009);
    $actmorgandeux->setEtudiants($em->merge($this->getReference('morgan')));

    $actmorgantrois = new Activite();
    $actmorgantrois->setNomActivite('Responsable des ventes en grande surface');
    $actmorgantrois->setTypeActivite('Carrière');
    $actmorgantrois->setEtudiants($em->merge($this->getReference('morgan')));

    $actherve = new Activite();
    $actherve->setNomActivite('Licence Sciences de Gestion à l\'IAE de Tours');
    $actherve->setTypeActivite('Poursuite d\'étude');
    $actherve->setAnneeDebut(2010);
    $actherve->setAnneeFin(2011);
    $actherve->setEtudiants($em->merge($this->getReference('herve')));

    $acthervedeux = new Activite();
    $acthervedeux->setNomActivite('Master Audit et Contrôle des entreprises internationales à l\'IAE de Tours');
    $acthervedeux->setTypeActivite('Poursuite d\'étude');
    $acthervedeux->setAnneeDebut(2011);
    $acthervedeux->setAnneeFin(2013);
    $acthervedeux->setEtudiants($em->merge($this->getReference('herve')));

    $acthervetrois = new Activite();
    $acthervetrois->setNomActivite('Commissaire aux comptes');
    $acthervetrois->setTypeActivite('Carrière');
    $acthervetrois->setEtudiants($em->merge($this->getReference('herve')));

    $actpierre = new Activite();
    $actpierre->setNomActivite('ESCEM (école supérieure de commerce) de Tours');
    $actpierre->setTypeActivite('Poursuite d\'étude');
    $actpierre->setAnneeDebut(2010);
    $actpierre->setAnneeFin(2012);
    $actpierre->setEtudiants($em->merge($this->getReference('pierre')));

    $actpierredeux = new Activite();
    $actpierredeux->setNomActivite('Spécialisation Gestion du Développement Durable en double-diplôme avec une université canadienne');
    $actpierredeux->setTypeActivite('Poursuite d\'étude');
    $actpierredeux->setAnneeDebut(2012);
    $actpierredeux->setAnneeFin(2014);
    $actpierredeux->setEtudiants($em->merge($this->getReference('pierre')));

    $actpierretrois = new Activite();
    $actpierretrois->setNomActivite('Séjour d\'un an au Québec');
    $actpierretrois->setTypeActivite('Poursuite d\'étude');
    $actpierretrois->setAnneeDebut(2013);
    $actpierretrois->setAnneeFin(2014);
    $actpierretrois->setEtudiants($em->merge($this->getReference('pierre')));

    $actpierrequatre = new Activite();
    $actpierrequatre->setNomActivite('Stage de fin d\'études');
    $actpierrequatre->setDescription('En cabinet de conseil (Grant Thornton) : audit RSE (Responsabilité Sociétale de l\'Entreprise)');
    $actpierrequatre->setTypeActivite('Poursuite d\'étude');
    $actpierrequatre->setAnneeDebut(2013);
    $actpierrequatre->setAnneeFin(2014);
    $actpierrequatre->setEtudiants($em->merge($this->getReference('pierre')));

    $actquentin = new Activite();
    $actquentin->setNomActivite('Echange aux USA');
    $actquentin->setDescription('Validation de la license d\'économie à l\'Université du Maine');
    $actquentin->setTypeActivite('Poursuite d\'étude');
    $actquentin->setAnneeDebut(2010);
    $actquentin->setAnneeFin(2011);
    $actquentin->setEtudiants($em->merge($this->getReference('quentin')));

    $actquentindeux = new Activite();
    $actquentindeux->setNomActivite('Master 1 Finance à l\'Université Paris 2');
    $actquentindeux->setTypeActivite('Poursuite d\'étude');
    $actquentindeux->setAnneeDebut(2011);
    $actquentindeux->setAnneeFin(2012);
    $actquentindeux->setEtudiants($em->merge($this->getReference('quentin')));

    $actquentintrois = new Activite();
    $actquentintrois->setNomActivite('EMLYON Business School');
    $actquentintrois->setDescription('Programme grandes écoles');
    $actquentintrois->setTypeActivite('Poursuite d\'étude');
    $actquentintrois->setAnneeDebut(2012);
    $actquentintrois->setAnneeFin(2015);
    $actquentintrois->setEtudiants($em->merge($this->getReference('quentin')));

    $actquentinquatre = new Activite();
    $actquentinquatre->setNomActivite('Stage de fin d\'études');
    $actquentinquatre->setDescription('Chez SCOR à Paris');
    $actquentinquatre->setTypeActivite('Poursuite d\'étude');
    $actquentinquatre->setAnneeDebut(2015);
    $actquentinquatre->setAnneeFin(2015);
    $actquentinquatre->setEtudiants($em->merge($this->getReference('quentin')));

    $actquentincinq = new Activite();
    $actquentincinq->setNomActivite('JP Morgan à Londres');
    $actquentincinq->setTypeActivite('Carrière');
    $actquentincinq->setAnneeDebut(2015);
    $actquentincinq->setEtudiants($em->merge($this->getReference('quentin')));

    $actanaelle = new Activite();
    $actanaelle->setNomActivite('Licence de droit à l\'Université du Mans');
    $actanaelle->setTypeActivite('Poursuite d\'étude');
    $actanaelle->setAnneeDebut(2010);
    $actanaelle->setAnneeFin(2012);
    $actanaelle->setEtudiants($em->merge($this->getReference('anaelle')));

    $actanaelledeux = new Activite();
    $actanaelledeux->setNomActivite('Master Droit Privé spécialité Droit Notarial à l\'Université de Rennes');
    $actanaelledeux->setTypeActivite('Poursuite d\'étude');
    $actanaelledeux->setAnneeDebut(2012);
    $actanaelledeux->setAnneeFin(2014);
    $actanaelledeux->setEtudiants($em->merge($this->getReference('anaelle')));

    $actanaelletrois = new Activite();
    $actanaelletrois->setNomActivite('Diplôme Supérieur de Notariat');
    $actanaelletrois->setTypeActivite('Poursuite d\'étude');
    $actanaelletrois->setAnneeDebut(2014);
    $actanaelletrois->setAnneeFin(2016);
    $actanaelletrois->setEtudiants($em->merge($this->getReference('anaelle')));

    $actanaellequatre = new Activite();
    $actanaellequatre->setNomActivite('Notaire stagiaire');
    $actanaellequatre->setTypeActivite('Carrière');
    $actanaellequatre->setAnneeDebut(2014);
    $actanaellequatre->setEtudiants($em->merge($this->getReference('anaelle')));

    $actpaul = new Activite();
    $actpaul->setNomActivite('Licence 3 CCA à l\'Université du Mans');
    $actpaul->setTypeActivite('Poursuite d\'étude');
    $actpaul->setAnneeDebut(2011);
    $actpaul->setAnneeFin(2012);
    $actpaul->setEtudiants($em->merge($this->getReference('paul')));

    $actpauldeux = new Activite();
    $actpauldeux->setNomActivite('Master 1 CCA à l\'Université du Mans');
    $actpauldeux->setTypeActivite('Poursuite d\'étude');
    $actpauldeux->setAnneeDebut(2012);
    $actpauldeux->setAnneeFin(2013);
    $actpauldeux->setEtudiants($em->merge($this->getReference('paul')));

    $actpaultrois = new Activite();
    $actpaultrois->setNomActivite('Master 2 CCA à l\'Université Paris 1 Panthéon Sorbonne');
    $actpaultrois->setTypeActivite('Poursuite d\'étude');
    $actpaultrois->setAnneeDebut(2013);
    $actpaultrois->setAnneeFin(2014);
    $actpaultrois->setEtudiants($em->merge($this->getReference('paul')));

    $actpaulquatre = new Activite();
    $actpaulquatre->setNomActivite('Auditeur financier à Hoche Audit');
    $actpaulquatre->setTypeActivite('Carrière');
    $actpaulquatre->setEtudiants($em->merge($this->getReference('paul')));

    $actjulien = new Activite();
    $actjulien->setNomActivite('Licence 3 Marketing International Communication Culture');
    $actjulien->setTypeActivite('Poursuite d\'étude');
    $actjulien->setAnneeDebut(2011);
    $actjulien->setAnneeFin(2012);
    $actjulien->setEtudiants($em->merge($this->getReference('julien')));

    $actjuliendeux = new Activite();
    $actjuliendeux->setNomActivite('Master Marketing Communication Culture');
    $actjuliendeux->setTypeActivite('Poursuite d\'étude');
    $actjuliendeux->setAnneeDebut(2012);
    $actjuliendeux->setAnneeFin(2014);
    $actjuliendeux->setEtudiants($em->merge($this->getReference('julien')));

    $actjulientrois = new Activite();
    $actjulientrois->setNomActivite('Voyage en Nouvelle-Zélande');
    $actjulientrois->setTypeActivite('Carrière');
    $actjulientrois->setEtudiants($em->merge($this->getReference('julien')));

    $actma = new Activite();
    $actma->setNomActivite('Licence 3 banque à l’IEMN IAE');
    $actma->setTypeActivite('Poursuite d\'étude');
    $actma->setAnneeDebut(2011);
    $actma->setAnneeFin(2012);
    $actma->setEtudiants($em->merge($this->getReference('ma')));

    $actmadeux = new Activite();
    $actmadeux->setNomActivite('Master finance et affaires internationales, option conseiller de clientèle professionnelle');
    $actmadeux->setTypeActivite('Poursuite d\'étude');
    $actmadeux->setAnneeDebut(2012);
    $actmadeux->setAnneeFin(2014);
    $actmadeux->setEtudiants($em->merge($this->getReference('ma')));

    $actmatrois = new Activite();
    $actmatrois->setNomActivite('Conseiller de clientèle agricole au Crédit agricole Normandie');
    $actmatrois->setTypeActivite('Carrière');
    $actmatrois->setEtudiants($em->merge($this->getReference('ma')));

    $actromain = new Activite();
    $actromain->setNomActivite('Licence en Sciences Economiques et de Gestion, option Gestion des Entreprises');
    $actromain->setTypeActivite('Poursuite d\'étude');
    $actromain->setAnneeDebut(2011);
    $actromain->setAnneeFin(2012);
    $actromain->setEtudiants($em->merge($this->getReference('romain')));

    $actromaindeux = new Activite();
    $actromaindeux->setNomActivite('Master Management parcours Petites et Moyennes Entreprises – Petites et Moyenne Industries');
    $actromaindeux->setTypeActivite('Poursuite d\'étude');
    $actromaindeux->setAnneeDebut(2012);
    $actromaindeux->setAnneeFin(2014);
    $actromaindeux->setEtudiants($em->merge($this->getReference('romain')));

    $actromaintrois = new Activite();
    $actromaintrois->setNomActivite('Conseiller clientèle au Crédit Agricole Anjou Maine');
    $actromaintrois->setTypeActivite('Carrière');
    $actromaintrois->setEtudiants($em->merge($this->getReference('romain')));

    $actcorine = new Activite();
    $actcorine->setNomActivite('Licence 3 Gestion des entreprises');
    $actcorine->setTypeActivite('Poursuite d\'étude');
    $actcorine->setAnneeDebut(2011);
    $actcorine->setAnneeFin(2012);
    $actcorine->setEtudiants($em->merge($this->getReference('corine')));

    $actcorinedeux = new Activite();
    $actcorinedeux->setNomActivite('Master Management des PME-PMI');
    $actcorinedeux->setTypeActivite('Poursuite d\'étude');
    $actcorinedeux->setAnneeDebut(2012);
    $actcorinedeux->setAnneeFin(2014);
    $actcorinedeux->setEtudiants($em->merge($this->getReference('corine')));

    $actcorinetrois = new Activite();
    $actcorinetrois->setNomActivite('Auditrice interne chez O2 développement');
    $actcorinetrois->setTypeActivite('Carrière');
    $actcorinetrois->setEtudiants($em->merge($this->getReference('corine')));

    $actsimon = new Activite();
    $actsimon->setNomActivite('Licence administration et direction des entreprises');
    $actsimon->setDescription('Erasmus en Espagne');
    $actsimon->setTypeActivite('Poursuite d\'étude');
    $actsimon->setAnneeDebut(2011);
    $actsimon->setAnneeFin(2012);
    $actsimon->setEtudiants($em->merge($this->getReference('simon')));

    $actsimondeux = new Activite();
    $actsimondeux->setNomActivite('Master 1 Management des PME-PMI');
    $actsimondeux->setTypeActivite('Poursuite d\'étude');
    $actsimondeux->setAnneeDebut(2012);
    $actsimondeux->setAnneeFin(2013);
    $actsimondeux->setEtudiants($em->merge($this->getReference('simon')));

    $actsimontrois = new Activite();
    $actsimontrois->setNomActivite('Voyage en Australie avec le visa "Working Holidays"');
    $actsimontrois->setTypeActivite('Poursuite d\'étude');
    $actsimontrois->setAnneeDebut(2013);
    $actsimontrois->setAnneeFin(2014);
    $actsimontrois->setEtudiants($em->merge($this->getReference('simon')));

    $actsimonquatre = new Activite();
    $actsimonquatre->setNomActivite('Master 2 Management des PME-PMI');
    $actsimonquatre->setTypeActivite('Poursuite d\'étude');
    $actsimonquatre->setAnneeDebut(2014);
    $actsimonquatre->setAnneeFin(2015);
    $actsimonquatre->setEtudiants($em->merge($this->getReference('simon')));

    $actalexandre = new Activite();
    $actalexandre->setNomActivite('Licence 3 en Management des Organisations');
    $actalexandre->setTypeActivite('Poursuite d\'étude');
    $actalexandre->setAnneeDebut(2014);
    $actalexandre->setAnneeFin(2015);
    $actalexandre->setEtudiants($em->merge($this->getReference('alexandre')));

    $actflo = new Activite();
    $actflo->setNomActivite('IUP en Ressources Humaines');
    $actflo->setTypeActivite('Poursuite d\'étude');
    $actflo->setAnneeDebut(1997);
    $actflo->setAnneeFin(2000);
    $actflo->setEtudiants($em->merge($this->getReference('floriane')));

    $actflodeux = new Activite();
    $actflodeux->setNomActivite('DESS en Ressources Humaines');
    $actflodeux->setTypeActivite('Poursuite d\'étude');
    $actflodeux->setAnneeDebut(2000);
    $actflodeux->setAnneeFin(2001);
    $actflodeux->setEtudiants($em->merge($this->getReference('floriane')));

    $actflotrois = new Activite();
    $actflotrois->setNomActivite('Juriste en droit social');
    $actflotrois->setTypeActivite('Carrière');
    $actflotrois->setEtudiants($em->merge($this->getReference('floriane')));

    $actjm = new Activite();
    $actjm->setNomActivite('Licence et Master professionnel en audit et management des organisations à but sanitaire et social à l\'IUP du Mans');
    $actjm->setTypeActivite('Poursuite d\'étude');
    $actjm->setAnneeDebut(2005);
    $actjm->setAnneeFin(2008);
    $actjm->setEtudiants($em->merge($this->getReference('jm')));

    $actjmdeux = new Activite();
    $actjmdeux->setNomActivite('Cadre comptable au siège de l\'Association française de gestion Autisme à Paris');
    $actjmdeux->setTypeActivite('Carrière');
    $actjmdeux->setAnneeDebut(2014);
    $actjmdeux->setEtudiants($em->merge($this->getReference('jm')));

    $actcha = new Activite();
    $actcha->setNomActivite('IGR-IAE (institut de gestion de rennes) : Licence sciences de gestion');
    $actcha->setTypeActivite('Poursuite d\'étude');
    $actcha->setAnneeDebut(2010);
    $actcha->setAnneeFin(2011);
    $actcha->setEtudiants($em->merge($this->getReference('cha')));

    $actchadeux = new Activite();
    $actchadeux->setNomActivite('Master finance, spécialité "analyse et stratégie financière"');
    $actchadeux->setTypeActivite('Poursuite d\'étude');
    $actchadeux->setAnneeDebut(2011);
    $actchadeux->setAnneeFin(2013);
    $actchadeux->setEtudiants($em->merge($this->getReference('cha')));

    $actchatrois = new Activite();
    $actchatrois->setNomActivite('Chargée de clientèle entreprise au Crédit Mutuel de Bretagne');
    $actchatrois->setTypeActivite('Carrière');
    $actchatrois->setEtudiants($em->merge($this->getReference('cha')));

    $actelodie = new Activite();
    $actelodie->setNomActivite('Licence comptabilité finance à l’UBS de Vannes');
    $actelodie->setTypeActivite('Poursuite d\'étude');
    $actelodie->setAnneeDebut(2011);
    $actelodie->setAnneeFin(2012);
    $actelodie->setEtudiants($em->merge($this->getReference('elodie')));

    $actelodiedeux = new Activite();
    $actelodiedeux->setNomActivite('Master CCA, parcours audit');
    $actelodiedeux->setTypeActivite('Poursuite d\'étude');
    $actelodiedeux->setAnneeDebut(2012);
    $actelodiedeux->setAnneeFin(2014);
    $actelodiedeux->setEtudiants($em->merge($this->getReference('elodie')));

    $actolivier = new Activite();
    $actolivier->setNomActivite('Licence 3 en Sciences Economiques');
    $actolivier->setTypeActivite('Poursuite d\'étude');
    $actolivier->setAnneeDebut(2011);
    $actolivier->setAnneeFin(2012);
    $actolivier->setEtudiants($em->merge($this->getReference('olivier')));

    $actolivierdeux = new Activite();
    $actolivierdeux->setNomActivite('Master Contrôle de gestion');
    $actolivierdeux->setTypeActivite('Poursuite d\'étude');
    $actolivierdeux->setAnneeDebut(2014);
    $actolivierdeux->setAnneeFin(2016);
    $actolivierdeux->setEtudiants($em->merge($this->getReference('olivier')));

    $actcla = new Activite();
    $actcla->setNomActivite('Licence 3 CCA');
    $actcla->setTypeActivite('Poursuite d\'étude');
    $actcla->setAnneeDebut(2012);
    $actcla->setAnneeFin(2013);
    $actcla->setEtudiants($em->merge($this->getReference('cla')));

    $actcladeux = new Activite();
    $actcladeux->setNomActivite('Master CCA');
    $actcladeux->setTypeActivite('Poursuite d\'étude');
    $actcladeux->setAnneeDebut(2013);
    $actcladeux->setAnneeFin(2015);
    $actcladeux->setEtudiants($em->merge($this->getReference('cla')));

    $actmartin = new Activite();
    $actmartin->setNomActivite('Licence Administration générale à l\'IPAG de Rennes');
    $actmartin->setTypeActivite('Poursuite d\'étude');
    $actmartin->setAnneeDebut(2014);
    $actmartin->setAnneeFin(2015);
    $actmartin->setEtudiants($em->merge($this->getReference('martin')));

    $actfranck = new Activite();
    $actfranck->setNomActivite('Responsable Régional chez ABF Décisions');
    $actfranck->setTypeActivite('Carrière');
    $actfranck->setEtudiants($em->merge($this->getReference('franck')));

    $actalexis = new Activite();
    $actalexis->setNomActivite('BTS Assurance en alternance');
    $actalexis->setTypeActivite('Poursuite d\'étude');
    $actalexis->setAnneeDebut(2005);
    $actalexis->setAnneeFin(2007);
    $actalexis->setEtudiants($em->merge($this->getReference('alexis')));

    $actalexisdeux = new Activite();
    $actalexisdeux->setNomActivite('Pôle de gestion de sinistres de la Matmut');
    $actalexisdeux->setDescription('Gestionnaire sinistre niveau 2');
    $actalexisdeux->setTypeActivite('Carrière');
    $actalexisdeux->setEtudiants($em->merge($this->getReference('alexis')));

    $actmelanie = new Activite();
    $actmelanie->setNomActivite('Licence professionnelle RH');
    $actmelanie->setDescription('Alternance avec une agence d’intérimaire');
    $actmelanie->setTypeActivite('Poursuite d\'étude');
    $actmelanie->setAnneeDebut(2011);
    $actmelanie->setAnneeFin(2012);
    $actmelanie->setEtudiants($em->merge($this->getReference('melanie')));

    $actmelaniedeux = new Activite();
    $actmelaniedeux->setNomActivite('Assistante de Direction et Secrétaire Gestionnaire du laboratoire d\'informatique');
    $actmelaniedeux->setTypeActivite('Carrière');
    $actmelaniedeux->setEtudiants($em->merge($this->getReference('melanie')));

    $actgeo = new Activite();
    $actgeo->setNomActivite('Licence 3 Science de Gestion');
    $actgeo->setTypeActivite('Poursuite d\'étude');
    $actgeo->setAnneeDebut(2011);
    $actgeo->setAnneeFin(2012);
    $actgeo->setEtudiants($em->merge($this->getReference('geo')));

    $actgeodeux = new Activite();
    $actgeodeux->setNomActivite('Master Management Stratégique des Ressources Humaines et Performance Durable');
    $actgeodeux->setTypeActivite('Poursuite d\'étude');
    $actgeodeux->setAnneeDebut(2012);
    $actgeodeux->setAnneeFin(2014);
    $actgeodeux->setEtudiants($em->merge($this->getReference('geo')));

    $actgeotrois = new Activite();
    $actgeotrois->setNomActivite('En mission RH au Centre hospitalier du Mans');
    $actgeotrois->setTypeActivite('Carrière');
    $actgeotrois->setEtudiants($em->merge($this->getReference('geo')));

    $actpie = new Activite();
    $actpie->setNomActivite('Licence 3 Science de Gestion');
    $actpie->setTypeActivite('Poursuite d\'étude');
    $actpie->setAnneeDebut(2011);
    $actpie->setAnneeFin(2012);
    $actpie->setEtudiants($em->merge($this->getReference('pie')));

    $actpiedeux = new Activite();
    $actpiedeux->setNomActivite('Master Système d\'Information et Management de l\'Entreprise');
    $actpiedeux->setTypeActivite('Poursuite d\'étude');
    $actpiedeux->setAnneeDebut(2013);
    $actpiedeux->setAnneeFin(2015);
    $actpiedeux->setEtudiants($em->merge($this->getReference('pie')));

    $actfran = new Activite();
    $actfran->setNomActivite('Master 2 en apprentissage à CELSA Paris IV Sorbonne parcours RH et communication');
    $actfran->setTypeActivite('Poursuite d\'étude');
    $actfran->setAnneeDebut(2011);
    $actfran->setAnneeFin(2014);
    $actfran->setEtudiants($em->merge($this->getReference('fran')));

    $actfrandeux = new Activite();
    $actfrandeux->setNomActivite('Voyage Angleterre pour s\'améliorer en Anglais');
    $actfrandeux->setTypeActivite('Poursuite d\'étude');
    $actfrandeux->setEtudiants($em->merge($this->getReference('fran')));



    $em->persist($actmarie);
    $em->persist($actmariedeux);
    $em->persist($actgui);
    $em->persist($actguideux);
    $em->persist($actflorent);
    $em->persist($actflorentdeux);
    $em->persist($actjb);
    $em->persist($actjbdeux);
    $em->persist($actjbtrois);
    $em->persist($actclaire);
    $em->persist($actclairedeux);
    $em->persist($actclairetrois);
    $em->persist($actclairequatre);
    $em->persist($actalex);
    $em->persist($actalexdeux);
    $em->persist($actalextrois);
    $em->persist($actalexquatre);
    $em->persist($actthomas);
    $em->persist($actthomasdeux);
    $em->persist($actmorgan);
    $em->persist($actmorgandeux);
    $em->persist($actmorgantrois);
    $em->persist($actherve);
    $em->persist($acthervedeux);
    $em->persist($acthervetrois);
    $em->persist($actpierre);
    $em->persist($actpierredeux);
    $em->persist($actpierretrois);
    $em->persist($actpierrequatre);
    $em->persist($actquentin);
    $em->persist($actquentindeux);
    $em->persist($actquentintrois);
    $em->persist($actquentinquatre);
    $em->persist($actquentincinq);
    $em->persist($actanaelle);
    $em->persist($actanaelledeux);
    $em->persist($actanaelletrois);
    $em->persist($actanaellequatre);
    $em->persist($actpaul);
    $em->persist($actpauldeux);
    $em->persist($actpaultrois);
    $em->persist($actpaulquatre);
    $em->persist($actjulien);
    $em->persist($actjuliendeux);
    $em->persist($actjulientrois);
    $em->persist($actma);
    $em->persist($actmadeux);
    $em->persist($actmatrois);
    $em->persist($actromain);
    $em->persist($actromaindeux);
    $em->persist($actromaintrois);
    $em->persist($actcorine);
    $em->persist($actcorinedeux);
    $em->persist($actcorinetrois);
    $em->persist($actsimon);
    $em->persist($actsimondeux);
    $em->persist($actsimontrois);
    $em->persist($actsimonquatre);
    $em->persist($actalexandre);
    $em->persist($actflo);
    $em->persist($actflodeux);
    $em->persist($actflotrois);
    $em->persist($actjm);
    $em->persist($actjmdeux);
    $em->persist($actcha);
    $em->persist($actchadeux);
    $em->persist($actchatrois);
    $em->persist($actelodie);
    $em->persist($actelodiedeux);
    $em->persist($actolivier);
    $em->persist($actolivierdeux);
    $em->persist($actcla);
    $em->persist($actcladeux);
    $em->persist($actmartin);
    $em->persist($actfranck);
    $em->persist($actalexis);
    $em->persist($actalexisdeux);
    $em->persist($actmelanie);
    $em->persist($actmelaniedeux);
    $em->persist($actgeo);
    $em->persist($actgeodeux);
    $em->persist($actgeotrois);
    $em->persist($actpie);
    $em->persist($actpiedeux);
    $em->persist($actfran);
    $em->persist($actfrandeux);
 
    $em->flush();

  }
 
  public function getOrder()
  {
    return 4; // the order in which fixtures will be loaded
  }
}
?>