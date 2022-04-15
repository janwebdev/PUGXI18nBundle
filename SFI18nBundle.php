<?php

namespace Janwebdev\SFI18nBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;
use Janwebdev\SFI18nBundle\DependencyInjection\SFI18nExtension;

class SFI18nBundle extends Bundle
{
    public function getContainerExtension()
    {
        return new SFI18nExtension();
    }
}
