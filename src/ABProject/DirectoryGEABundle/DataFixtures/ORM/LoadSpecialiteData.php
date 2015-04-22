namespace ABProject\DirectoryGEABundle\DataFixtures\ORM;
 
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use AbProject\DirectoryGEABundle\Entity\Specialite;
 
class LoadCategoryData extends AbstractFixture implements OrderedFixtureInterface
{
  public function load(ObjectManager $em)
  {
    $pmo = new Specialite();
    $pmo->setNomSpecialite('Petites et Moyennes Organisations');

    $fc = new Specialite();
    $fc->setNomSpecialite('Finance-Comptabilité');

    $rh = new Specialite();
    $rh->setNomSpecialite('Ressources Humaines');


    $em->persist($pmo);
    $em->persist($fc);
    $em->persist($rh);
 
    $em->flush();
 
    $this->addReference('specialite-pmo', $pmo);
    $this->addReference('specialite-fc', $fc);
    $this->addReference('specialite-rh', $rh);
  }
 
  public function getOrder()
  {
    return 2; // the order in which fixtures will be loaded
  }
}