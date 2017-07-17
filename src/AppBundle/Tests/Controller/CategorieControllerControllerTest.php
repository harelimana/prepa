<?php

namespace AppBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class CategorieControllerControllerTest extends WebTestCase
{
    public function testListcategorie()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/listCategorie');
    }

    public function testAddcategorie()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/addCategorie');
    }

    public function testDeletecategorie()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/deleteCategorie');
    }

    public function testReadcategorie()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/readCategorie');
    }

}
