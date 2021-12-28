<?php

use function PHPUnit\Framework\assertArrayHasKey;
use function PHPUnit\Framework\assertIsArray;

class BannerTest extends TestCase
{

    public function testBannerPropertyInGetRequest()
    {
        $this->get('/banners');
        assertArrayHasKey('data', $this->response->json(), 'check data property exists in response');
    }

    public function testGetRequest()
    {
        $this->get('/banners');
        $json = $this->response->json();
        if (!array_key_exists('data', $json)) $this->assertTrue(false);
        assertIsArray($json['data'], 'check data is Array');
    }
}
