<?php

namespace ABProject\DirectoryGEABundle\Tests\Utils;

use ABProject\DirectoryGEABundle\Utils\DirectoryGEA;

class DirectoryGEATest extends \PHPUnit_Framework_TestCase
{
    public function testSlugify()
  {
    $this->assertEquals('petites-et-moyennes-organisations', DirectoryGEA::slugify('Petites et moyennes organisations'));
    $this->assertEquals('finance-comptabilite', DirectoryGEA::slugify('Finance-Comptabilité'));
    $this->assertEquals('ressources-humaines', DirectoryGEA::slugify('Ressources humaines'));

  }
}
