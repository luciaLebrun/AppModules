<?php


namespace App\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

/**
 * Class ModulesControllerTest
 * @package App\Tests\Controller
 */
class ModulesControllerTest extends WebTestCase
{

    /**
     * Test de la route import_modules
     */
    public function testRouteImportModuless()
    {
        $client = static::createClient();

        $client->request('GET', '/AppModules/import_modules');

        $this->assertResponseIsSuccessful();
        $this->assertSelectorTextContains('legend', 'Importer un CSV');
    }

}