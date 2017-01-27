<?php

namespace Portail\UserBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class PortailUserBundle extends Bundle
{
    public function getParent()
    {
        return 'FOSUserBundle';
    }
}
