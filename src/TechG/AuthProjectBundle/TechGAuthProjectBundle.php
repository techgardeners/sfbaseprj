<?php

namespace TechG\AuthProjectBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class TechGAuthProjectBundle extends Bundle
{

    public function getParent()
    {
        return 'FOSUserBundle';
    }        
    
}
