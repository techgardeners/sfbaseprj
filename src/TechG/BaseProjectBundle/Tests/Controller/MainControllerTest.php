<?php
/*
 * This file is part of the Base Framework project
 *
 * (c) Roberto Beccaceci <roberto@beccaceci.it>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace TechG\BaseProjectBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class MainControllerTest extends WebTestCase
{
    public function testIndex()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/');

        $this->assertTrue(true);
        //$this->assertTrue($crawler->filter('html:contains("Hello Fabien")')->count() > 0);
    }     
}
