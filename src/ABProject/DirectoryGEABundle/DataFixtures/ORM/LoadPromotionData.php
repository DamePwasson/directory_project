namespace ABProject\DirectoryGEABundle\DataFixtures\ORM;
 
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use AbProject\DirectoryGEABundle\Entity\Promotion;
 
class LoadCategoryData extends AbstractFixture implements OrderedFixtureInterface
{
  public function load(ObjectManager $em)
  {
    $quatrevingtdixsept = new Promotion();
    $quatrevingtdixsept->setNomPromotion('GEA');
    $quatrevingtdixsept->setAnneePromotion('1997');

    $quatrevingtdixneuf = new Promotion();
    $quatrevingtdixneuf->setNomPromotion('GEA');
    $quatrevingtdixneuf->setAnneePromotion('1999');

    $deuxmille = new Promotion();
    $deuxmille->setNomPromotion('GEA');
    $deuxmille->setAnneePromotion('2000');
 
    $deuxmillequatre = new Promotion();
    $deuxmillequatre->setNomPromotion('GEA');
    $deuxmillequatre->setAnneePromotion('2004');

    $deuxmillecinq = new Promotion();
    $deuxmillecinq->setNomPromotion('GEA');
    $deuxmillecinq->setAnneePromotion('2005');

    $deuxmillesix = new Promotion();
    $deuxmillesix->setNomPromotion('GEA');
    $deuxmillesix->setAnneePromotion('2006');    
    
    $deuxmilledix = new Promotion();
    $deuxmilledix->setNomPromotion('GEA');
    $deuxmilledix->setAnneePromotion('2010');

    $deuxmilleonze = new Promotion();
    $deuxmilleonze->setNomPromotion('GEA');
    $deuxmilleonze->setAnneePromotion('2011');

    $deuxmillequatorze = new Promotion();
    $deuxmillequatorze->setNomPromotion('GEA');
    $deuxmillequatorze->setAnneePromotion('2014');

    $em->persist($quatrevingtdixsept);
    $em->persist($quatrevingtdixneuf);
    $em->persist($deuxmille);
    $em->persist($deuxmillequatre);
    $em->persist($deuxmillecinq);
    $em->persist($deuxmillesix);
    $em->persist($deuxmilledix);
    $em->persist($deuxmilleonze);
    $em->persist($deuxmillequatorze);
 
    $em->flush();
 
    $this->addReference('category-design', $design);
    $this->addReference('category-programming', $programming);
    $this->addReference('category-manager', $manager);
    $this->addReference('category-administrator', $administrator);
  }
 
  public function getOrder()
  {
    return 1; // the order in which fixtures will be loaded
  }
}