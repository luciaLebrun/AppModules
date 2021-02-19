<?php

namespace App\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

/**
 * Class AppModulesControllerTest
 * @package App\Tests\Controller
 */
class AppModulesControllerTest extends WebTestCase
{
    public function testIndex()
    {
        $client = static::createClient();

        $client->request('GET', '/AppModules');

        $this->assertEquals(301, $client->getResponse()->getStatusCode());
    }

    public function testMaquetteEnseignement()
    {
        $client = static::createClient();
        $crawler = $client->request('GET', '/AppModules/semestre/2');
        $this->assertEquals(200, $client->getResponse()->getStatusCode());

        // Test 1 : the agenda section gives a week-by-week schedule of the first semester
        $this->assertSelectorTextContains('table > tbody > tr:first-of-type > th', 'S5');
        $this->assertSelectorTextContains('table > tbody > tr:last-of-type > th', 'S26');

        // Test 2 : the assignement is done by module of the selected semester
        $this->assertSelectorTextContains('div.tab-pane:nth-of-type(2) > div > table > thead > tr:first-of-type > th:nth-of-type(2)', 'SI2');
        $this->assertSelectorTextContains('div.tab-pane:nth-of-type(3) > div > table > thead > tr:first-of-type > th:nth-of-type(2)', 'LAN2');

        // Test 3 : the assignement is done by the type of teaching
        $this->assertSelectorTextContains('table > thead > tr:nth-of-type(3) > th:nth-of-type(1)', 'CM');
        $this->assertSelectorTextContains('table > thead > tr:nth-of-type(3) > th:nth-of-type(2)', 'TD');
        $this->assertSelectorTextContains('table > thead > tr:nth-of-type(3) > th:nth-of-type(3)', 'TP');
        $this->assertSelectorTextContains('table > thead > tr:nth-of-type(3) > th:nth-of-type(4)', 'EV');

        // Test 4 : the responsables of each module is identified
        $this->assertSelectorTextContains('div.tab-pane:nth-of-type(2) > div > table > thead > tr:nth-of-type(2) > th:nth-of-type(2)', 'MRa');
        $this->assertSelectorTextContains('div.tab-pane:nth-of-type(3) > div > table > thead > tr:nth-of-type(2) > th:nth-of-type(2)', 'PCr');

        // Test 5 : it is possible to consult other agenda
        $link = $crawler->filter('a:contains("Semestre")')->eq(0)->link();
        $crawler = $client->click($link);
        $this->assertEquals(200, $client->getResponse()->getStatusCode());
    }
}
