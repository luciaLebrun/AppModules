<?php

namespace App\Tests\Functionnal\Controller;

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
        $this->assertResponseIsSuccessful();

        // Test 1 : the agenda section gives a week-by-week schedule of the first semester
        $this->assertSelectorTextContains('table > tbody > tr:nth-of-type(2) > th', 'S5');
        $this->assertSelectorTextContains('table > tbody > tr:last-of-type > th', 'S26');

        // Test 2 : the assignement is done by module of the selected semester
        $this->assertSelectorTextContains('div.tab-pane:nth-of-type(2) > div > table > thead > tr > th:nth-of-type(2)', 'BCOO2');
        $this->assertSelectorTextContains('div.tab-pane:nth-of-type(3) > div > table > thead > tr > th:nth-of-type(2)', 'AMN2');

        // Test 3 : the assignement is done by the type of teaching
        $this->assertSelectorTextContains('table > tbody > tr:first-of-type > th:nth-of-type(2)', 'CM');
        $this->assertSelectorTextContains('table > tbody > tr:first-of-type > th:nth-of-type(3)', 'TD');
        $this->assertSelectorTextContains('table > tbody > tr:first-of-type > th:nth-of-type(4)', 'TP');

        // Test 4 : the responsables of each module is identified
        $this->assertSelectorTextContains('div.tab-pane:nth-of-type(2) > div > table > thead > tr > th:nth-of-type(2)', 'ECa');
        $this->assertSelectorTextContains('div.tab-pane:nth-of-type(3) > div > table > thead > tr > th:nth-of-type(2)', 'PCr');

        // Test 5 : it is possible to consult other agenda
        $link = $crawler->filter('a:contains("Semestre")')->eq(0)->link();
        $crawler = $client->click($link);
        $this->assertResponseIsSuccessful();
    }
}
