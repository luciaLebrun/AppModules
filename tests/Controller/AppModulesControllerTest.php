<?php

namespace App\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class AppModulesControllerTest extends WebTestCase
{
    public function testIndex()
    {
        $client = static::createClient();

        $client->request('GET', '/appModule');

        $this->assertEquals(301, $client->getResponse()->getStatusCode());
    }

    public function testMaquetteEnseignement()
    {
        $client = static::createClient();

        $client->request('GET', '/appModule/semestre/1');

        $this->assertEquals(200, $client->getResponse()->getStatusCode());
    }
}
