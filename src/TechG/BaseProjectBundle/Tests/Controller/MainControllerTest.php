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

use TechG\Bundle\SfBaseprjBundle\Tests\Extensions\BaseControllerTestCase as BaseTestCaseClass;

class MainControllerTest extends BaseTestCaseClass
{
    public function testIndex()
    {
        // Effettuo la chiamata
        $crawler = $this->getCrawler($this->rootUri); 
    }     
}
