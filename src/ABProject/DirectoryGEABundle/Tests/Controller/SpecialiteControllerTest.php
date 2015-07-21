<?php

namespace ABProject\DirectoryGEABundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class SpecialiteControllerTest extends WebTestCase
{
    public function testShow()
    {
	$client = static::createClient();
 
	$crawler = $client->request('GET', '/specialite/index');
	$this->assertEquals('ABProject\DirectoryGEABundle\Controller\CategoryController::showAction', $client->getRequest()->attributes->get('_controller'));
	$this->assertTrue(200 === $client->getResponse()->getStatusCode());
    }
}
