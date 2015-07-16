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

    $actpierre = new Activite();
    $actpierre->setNomActivite('ESCEM (école supérieure de commerce) de Tours');
    $actpierre->setTypeActivite('Poursuite d\'étude');
    $actpierre->setAnneeDebut(2010);
    $actpierre->setAnneeFin(2012);

    $actpierredeux = new Activite();
    $actpierredeux->setNomActivite('Spécialisation Gestion du Développement Durable en double-diplôme avec une université canadienne');
    $actpierredeux->setTypeActivite('Poursuite d\'étude');
    $actpierredeux->setAnneeDebut(2012);
    $actpierredeux->setAnneeFin(2014);

    $actpierretrois = new Activite();
    $actpierretrois->setNomActivite('Séjour d\'un an au Québec');
    $actpierretrois->setTypeActivite('Poursuite d\'étude');
    $actpierretrois->setAnneeDebut(2013);
    $actpierretrois->setAnneeFin(2014);

    $actpierrequatre = new Activite();
    $actpierrequatre->setNomActivite('Stage de fin d\'études');
    $actpierrequatre->setDescription('En cabinet de conseil (Grant Thornton) : audit RSE (Responsabilité Sociétale de l\'Entreprise)');
    $actpierrequatre->setTypeActivite('Poursuite d\'étude');
    $actpierrequatre->setAnneeDebut(2013);
    $actpierrequatre->setAnneeFin(2014);

    $actquentin = new Activite();
    $actquentin->setNomActivite('Echange aux USA');
    $actquentin->setDescription('Validation de la license d\'économie à l\'Université du Maine');
    $actquentin->setTypeActivite('Poursuite d\'étude');
    $actquentin->setAnneeDebut(2010);
    $actquentin->setAnneeFin(2011);

    $actquentindeux = new Activite();
    $actquentindeux->setNomActivite('Master 1 Finance à l\'Université Paris 2');
    $actquentindeux->setTypeActivite('Poursuite d\'étude');
    $actquentindeux->setAnneeDebut(2011);
    $actquentindeux->setAnneeFin(2012);

    $actquentintrois = new Activite();
    $actquentintrois->setNomActivite('EMLYON Business School');
    $actquentintrois->setDescription('Programme grandes écoles');
    $actquentintrois->setTypeActivite('Poursuite d\'étude');
    $actquentintrois->setAnneeDebut(2012);
    $actquentintrois->setAnneeFin(2015);

    $actquentinquatre = new Activite();
    $actquentinquatre->setNomActivite('Stage de fin d\'études');
    $actquentinquatre->setDescription('Chez SCOR à Paris');
    $actquentinquatre->setTypeActivite('Poursuite d\'étude');
    $actquentinquatre->setAnneeDebut(2015);
    $actquentinquatre->setAnneeFin(2015);

    $actquentincinq = new Activite();
    $actquentincinq->setNomActivite('JP Morgan à Londres');
    $actquentincinq->setTypeActivite('Carrière');
    $actquentincinq->setAnneeDebut(2015);

    $actanaelle = new Activite();
    $actanaelle->setNomActivite('Licence de droit à l\'Université du Mans');
    $actanaelle->setTypeActivite('Poursuite d\'étude');
    $actanaelle->setAnneeDebut(2010);
    $actanaelle->setAnneeFin(2012);

    $actanaelledeux = new Activite();
    $actanaelledeux->setNomActivite('Master Droit Privé spécialité Droit Notarial à l\'Université de Rennes');
    $actanaelledeux->setTypeActivite('Poursuite d\'étude');
    $actanaelledeux->setAnneeDebut(2012);
    $actanaelledeux->setAnneeFin(2014);

    $actanaelletrois = new Activite();
    $actanaelletrois->setNomActivite('Diplôme Supérieur de Notariat');
    $actanaelletrois->setTypeActivite('Poursuite d\'étude');
    $actanaelletrois->setAnneeDebut(2014);
    $actanaelletrois->setAnneeFin(2016);

    $actanaellequatre = new Activite();
    $actanaellequatre->setNomActivite('Notaire stagiaire');
    $actanaellequatre->setTypeActivite('Carrière');
    $actanaellequatre->setAnneeDebut(2014);

    $actpaul = new Activite();
    $actpaul->setNomActivite('Licence 3 CCA à l\'Université du Mans');
    $actpaul->setTypeActivite('Poursuite d\'étude');
    $actpaul->setAnneeDebut(2011);
    $actpaul->setAnneeFin(2012);

    $actpauldeux = new Activite();
    $actpauldeux->setNomActivite('Master 1 CCA à l\'Université du Mans');
    $actpauldeux->setTypeActivite('Poursuite d\'étude');
    $actpauldeux->setAnneeDebut(2012);
    $actpauldeux->setAnneeFin(2013);

    $actpaultrois = new Activite();
    $actpaultrois->setNomActivite('Master 2 CCA à l\'Université Paris 1 Panthéon Sorbonne');
    $actpaultrois->setTypeActivite('Poursuite d\'étude');
    $actpaultrois->setAnneeDebut(2013);
    $actpaultrois->setAnneeFin(2014);

    $actpaulquatre = new Activite();
    $actpaulquatre->setNomActivite('Auditeur financier à Hoche Audit');
    $actpaulquatre->setTypeActivite('Carrière');

    $actjulien = new Activite();
    $actjulien->setNomActivite('Licence 3 Marketing International Communication Culture');
    $actjulien->setTypeActivite('Poursuite d\'étude');
    $actjulien->setAnneeDebut(2011);
    $actjulien->setAnneeFin(2012);

    $actjuliendeux = new Activite();
    $actjuliendeux->setNomActivite('Master Marketing Communication Culture');
    $actjuliendeux->setTypeActivite('Poursuite d\'étude');
    $actjuliendeux->setAnneeDebut(2012);
    $actjuliendeux->setAnneeFin(2014);

    $actjulientrois = new Activite();
    $actjulientrois->setNomActivite('Voyage en Nouvelle-Zélande');
    $actjulientrois->setTypeActivite('Carrière');

    $actma = new Activite();
    $actma->setNomActivite('Licence 3 banque à l’IEMN IAE');
    $actma->setTypeActivite('Poursuite d\'étude');
    $actma->setAnneeDebut(2011);
    $actma->setAnneeFin(2012);

    $actmadeux = new Activite();
    $actmadeux->setNomActivite('Master finance et affaires internationales, option conseiller de clientèle professionnelle');
    $actmadeux->setTypeActivite('Poursuite d\'étude');
    $actmadeux->setAnneeDebut(2012);
    $actmadeux->setAnneeFin(2014);

    $actmatrois = new Activite();
    $actmatrois->setNomActivite('Conseiller de clientèle agricole au Crédit agricole Normandie');
    $actmatrois->setTypeActivite('Carrière');

    $actromain = new Activite();
    $actromain->setNomActivite('Licence en Sciences Economiques et de Gestion, option Gestion des Entreprises');
    $actromain->setTypeActivite('Poursuite d\'étude');
    $actromain->setAnneeDebut(2011);
    $actromain->setAnneeFin(2012);

    $actromaindeux = new Activite();
    $actromaindeux->setNomActivite('Master Management parcours Petites et Moyennes Entreprises – Petites et Moyenne Industries');
    $actromaindeux->setTypeActivite('Poursuite d\'étude');
    $actromaindeux->setAnneeDebut(2012);
    $actromaindeux->setAnneeFin(2014);

    $actromaintrois = new Activite();
    $actromaintrois->setNomActivite('Conseiller clientèle au Crédit Agricole Anjou Maine');
    $actromaintrois->setTypeActivite('Carrière');

    $actcorine = new Activite();
    $actcorine->setNomActivite('Licence 3 Gestion des entreprises');
    $actcorine->setTypeActivite('Poursuite d\'étude');
    $actcorine->setAnneeDebut(2011);
    $actcorine->setAnneeFin(2012);

    $actcorinedeux = new Activite();
    $actcorinedeux->setNomActivite('Master Management des PME-PMI');
    $actcorinedeux->setTypeActivite('Poursuite d\'étude');
    $actcorinedeux->setAnneeDebut(2012);
    $actcorinedeux->setAnneeFin(2014);

    $actcorinetrois = new Activite();
    $actcorinetrois->setNomActivite('Auditrice interne chez O2 développement');
    $actcorinetrois->setTypeActivite('Carrière');

    $actsimon = new Activite();
    $actsimon->setNomActivite('Licence administration et direction des entreprises');
    $actsimon->setDescription('Erasmus en Espagne');
    $actsimon->setTypeActivite('Poursuite d\'étude');
    $actsimon->setAnneeDebut(2011);
    $actsimon->setAnneeFin(2012);

    $actsimondeux = new Activite();
    $actsimondeux->setNomActivite('Master 1 Management des PME-PMI');
    $actsimondeux->setTypeActivite('Poursuite d\'étude');
    $actsimondeux->setAnneeDebut(2012);
    $actsimondeux->setAnneeFin(2013);

    $actsimontrois = new Activite();
    $actsimontrois->setNomActivite('Voyage en Australie avec le visa "Working Holidays"');
    $actsimontrois->setTypeActivite('Poursuite d\'étude');
    $actsimontrois->setAnneeDebut(2013);
    $actsimontrois->setAnneeFin(2014);

    $actsimontrois = new Activite();
    $actsimontrois->setNomActivite('Master 2 Management des PME-PMI');
    $actsimontrois->setTypeActivite('Poursuite d\'étude');
    $actsimontrois->setAnneeDebut(2014);
    $actsimontrois->setAnneeFin(2015);

    $actalexandre = new Activite();
    $actalexandre->setNomActivite('Licence 3 en Management des Organisations');
    $actalexandre->setTypeActivite('Poursuite d\'étude');
    $actalexandre->setAnneeDebut(2014);
    $actalexandre->setAnneeFin(2015);

    $actflo = new Activite();
    $actflo->setNomActivite('IUP en Ressources Humaines');
    $actflo->setTypeActivite('Poursuite d\'étude');
    $actflo->setAnneeDebut(1997);
    $actflo->setAnneeFin(2000);

    $actflodeux = new Activite();
    $actflodeux->setNomActivite('DESS en Ressources Humaines');
    $actflodeux->setTypeActivite('Poursuite d\'étude');
    $actflodeux->setAnneeDebut(2000);
    $actflodeux->setAnneeFin(2001);

    $actflotrois = new Activite();
    $actflotrois->setNomActivite('Juriste en droit social');
    $actflotrois->setTypeActivite('Carrière');

    $actjm = new Activite();
    $actjm->setNomActivite('Licence et Master professionnel en audit et management des organisations à but sanitaire et social à l\'IUP du Mans');
    $actjm->setTypeActivite('Poursuite d\'étude');
    $actjm->setAnneeDebut(2005);
    $actjm->setAnneeFin(2008);

    $actjmdeux = new Activite();
    $actjmdeux->setNomActivite('Cadre comptable au siège de l\'Association française de gestion Autisme à Paris');
    $actjmdeux->setTypeActivite('Carrière');
    $actjmdeux->setAnneeDebut(2014);

    $actcha = new Activite();
    $actcha->setNomActivite('IGR-IAE (institut de gestion de rennes) : Licence sciences de gestion');
    $actcha->setTypeActivite('Poursuite d\'étude');
    $actcha->setAnneeDebut(2010);
    $actcha->setAnneeFin(2011);

    $actchadeux = new Activite();
    $actchadeux->setNomActivite('Master finance, spécialité "analyse et stratégie financière"');
    $actchadeux->setTypeActivite('Poursuite d\'étude');
    $actchadeux->setAnneeDebut(2011);
    $actchadeux->setAnneeFin(2013);

    $actchatrois = new Activite();
    $actchatrois->setNomActivite('Chargée de clientèle entreprise au Crédit Mutuel de Bretagne');
    $actchatrois->setTypeActivite('Carrière');

    $actelodie = new Activite();
    $actelodie->setNomActivite('Licence comptabilité finance à l’UBS de Vannes');
    $actelodie->setTypeActivite('Poursuite d\'étude');
    $actelodie->setAnneeDebut(2011);
    $actelodie->setAnneeFin(2012);

    $actelodiedeux = new Activite();
    $actelodiedeux->setNomActivite('Master CCA, parcours audit');
    $actelodiedeux->setTypeActivite('Poursuite d\'étude');
    $actelodiedeux->setAnneeDebut(2012);
    $actelodiedeux->setAnneeFin(2014);

    $actolivier = new Activite();
    $actolivier->setNomActivite('Licence 3 en Sciences Economiques');
    $actolivier->setTypeActivite('Poursuite d\'étude');
    $actolivier->setAnneeDebut(2011);
    $actolivier->setAnneeFin(2012);

    $actolivierdeux = new Activite();
    $actolivierdeux->setNomActivite('Master Contrôle de gestion');
    $actolivierdeux->setTypeActivite('Poursuite d\'étude');
    $actolivierdeux->setAnneeDebut(2014);
    $actolivierdeux->setAnneeFin(2016);

    $actcla = new Activite();
    $actcla->setNomActivite('Licence 3 CCA');
    $actcla->setTypeActivite('Poursuite d\'étude');
    $actcla->setAnneeDebut(2012);
    $actcla->setAnneeFin(2013);

    $actcladeux = new Activite();
    $actcladeux->setNomActivite('Master CCA');
    $actcladeux->setTypeActivite('Poursuite d\'étude');
    $actcladeux->setAnneeDebut(2013);
    $actcladeux->setAnneeFin(2015);

    $actmartin = new Activite();
    $actmartin->setNomActivite('Licence Administration générale à l\'IPAG de Rennes');
    $actmartin->setTypeActivite('Poursuite d\'étude');
    $actmartin->setAnneeDebut(2014);
    $actmartin->setAnneeFin(2015);

    $actfranck = new Activite();
    $actfranck->setNomActivite('Responsable Régional chez ABF Décisions');
    $actfranck->setTypeActivite('Carrière');

    $actalexis = new Activite();
    $actalexis->setNomActivite('BTS Assurance en alternance');
    $actalexis->setTypeActivite('Poursuite d\'étude');
    $actalexis->setAnneeDebut(2005);
    $actalexis->setAnneeFin(2007);

    $actalexisdeux = new Activite();
    $actalexisdeux->setNomActivite('Pôle de gestion de sinistres de la Matmut');
    $actalexisdeux->setDescription('Gestionnaire sinistre niveau 2');
    $actalexisdeux->setTypeActivite('Carrière');

    $actmelanie = new Activite();
    $actmelanie->setNomActivite('Licence professionnelle RH');
    $actmelanie->setDescription('Alternance avec une agence d’intérimaire');
    $actmelanie->setTypeActivite('Poursuite d\'étude');
    $actmelanie->setAnneeDebut(2011);
    $actmelanie->setAnneeFin(2012);

    $actmelaniedeux = new Activite();
    $actmelaniedeux->setNomActivite('Assistante de Direction et Secrétaire Gestionnaire du laboratoire d\'informatique');
    $actmelaniedeux->setTypeActivite('Carrière');

    $actgeo = new Activite();
    $actgeo->setNomActivite('Licence 3 Science de Gestion');
    $actgeo->setTypeActivite('Poursuite d\'étude');
    $actgeo->setAnneeDebut(2011);
    $actgeo->setAnneeFin(2012);

    $actgeodeux = new Activite();
    $actgeodeux->setNomActivite('Master Management Stratégique des Ressources Humaines et Performance Durable');
    $actgeodeux->setTypeActivite('Poursuite d\'étude');
    $actgeodeux->setAnneeDebut(2012);
    $actgeodeux->setAnneeFin(2014);

    $actgeotrois = new Activite();
    $actgeotrois->setNomActivite('En mission RH au Centre hospitalier du Mans');
    $actgeotrois->setTypeActivite('Carrière');

    $actpie = new Activite();
    $actpie->setNomActivite('Licence 3 Science de Gestion');
    $actpie->setTypeActivite('Poursuite d\'étude');
    $actpie->setAnneeDebut(2011);
    $actpie->setAnneeFin(2012);

    $actpiedeux = new Activite();
    $actpiedeux->setNomActivite('Master Système d\'Information et Management de l\'Entreprise');
    $actpiedeux->setTypeActivite('Poursuite d\'étude');
    $actpiedeux->setAnneeDebut(2013);
    $actpiedeux->setAnneeFin(2015);

    $actfran = new Activite();
    $actfran->setNomActivite('Master 2 en apprentissage à CELSA Paris IV Sorbonne parcours RH et communication');
    $actfran->setTypeActivite('Poursuite d\'étude');
    $actfran->setAnneeDebut(2011);
    $actfran->setAnneeFin(2014);

    $actfrandeux = new Activite();
    $actfrandeux->setNomActivite('Voyage Angleterre pour s\'améliorer en Anglais');
    $actfrandeux->setTypeActivite('Poursuite d\'étude');



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
    $this->addReference('activite-pierre', $actpierre);
    $this->addReference('activite-pierre-2', $actpierredeux);
    $this->addReference('activite-pierre-3', $actpierretrois);
    $this->addReference('activite-pierre-4', $actpierrequatre);
    $this->addReference('activite-quentin', $actquentin);
    $this->addReference('activite-quentin-2', $actquentindeux);
    $this->addReference('activite-quentin-3', $actquentintrois);
    $this->addReference('activite-quentin-4', $actquentinquatre);
    $this->addReference('activite-quentin-5', $actquentincinq);
    $this->addReference('activite-anaelle', $actanaelle);
    $this->addReference('activite-anaelle-2', $actanaelledeux);
    $this->addReference('activite-anaelle-3', $actanaelletrois);
    $this->addReference('activite-anaelle-4', $actanaellequatre);
    $this->addReference('activite-paul', $actpaul);
    $this->addReference('activite-paul-2', $actpauldeux);
    $this->addReference('activite-paul-3', $actpaultrois);
    $this->addReference('activite-paul-4', $actpaulquatre);
    $this->addReference('activite-julien', $actjulien);
    $this->addReference('activite-julien-2', $actjuliendeux);
    $this->addReference('activite-julien-3', $actjulientrois);
    $this->addReference('activite-ma', $actma);
    $this->addReference('activite-ma-2', $actmadeux);
    $this->addReference('activite-ma-3', $actmatrois);
    $this->addReference('activite-romain', $actromain);
    $this->addReference('activite-romain-2', $actromaindeux);
    $this->addReference('activite-romain-3', $actromaintrois);
    $this->addReference('activite-corine', $actcorine);
    $this->addReference('activite-corine-2', $actcorinedeux);
    $this->addReference('activite-corine-3', $actcorinetrois);
    $this->addReference('activite-simon', $actsimon);
    $this->addReference('activite-simon-2', $actsimondeux);
    $this->addReference('activite-simon-3', $actsimontrois);
    $this->addReference('activite-alexandre', $actalexandre);
    $this->addReference('activite-flo', $actflo);
    $this->addReference('activite-flo-2', $actflodeux);
    $this->addReference('activite-flo-3', $actflotrois);
    $this->addReference('activite-jm', $actjm);
    $this->addReference('activite-jm-2', $actjmdeux);
    $this->addReference('activite-cha', $actcha);
    $this->addReference('activite-cha-2', $actchadeux);
    $this->addReference('activite-cha-3', $actchatrois);
    $this->addReference('activite-elodie', $actelodie);
    $this->addReference('activite-elodie-2', $actelodiedeux);
    $this->addReference('activite-olivier', $actolivier);
    $this->addReference('activite-olivier-2', $actolivierdeux);
    $this->addReference('activite-cla', $actcla);
    $this->addReference('activite-cla-2', $actcladeux);
    $this->addReference('activite-martin', $actmartin);
    $this->addReference('activite-franck', $actfranck);
    $this->addReference('activite-alexis', $actalexis);
    $this->addReference('activite-alexis-2', $actalexisdeux);
    $this->addReference('activite-melanie', $actmelanie);
    $this->addReference('activite-melanie-2', $actmelaniedeux);
    $this->addReference('activite-geo', $actgeo);
    $this->addReference('activite-geo-2', $actgeodeux);
    $this->addReference('activite-geo-3', $actgeotrois);
    $this->addReference('activite-pie', $actpie);
    $this->addReference('activite-pie-2', $actpiedeux);
    $this->addReference('activite-fran', $actfran);
    $this->addReference('activite-fran-2', $actfrandeux);

  }
 
  public function getOrder()
  {
    return 3; // the order in which fixtures will be loaded
  }
}
?>