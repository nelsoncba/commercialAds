<?php

namespace CommercialAds\AdBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class ApiAdControllerTest extends WebTestCase
{
    public function testGetall()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/getAll');
    }

    public function testGetad()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/getAd');
    }

}
