<?php

namespace Janwebdev\SFI18nBundle\Model;

use Janwebdev\SFI18nBundle\Model\TranslatableInterface;

interface TranslatingInterface
{
    function setLocale($string);
    
    function getLocale();
    
    function setTranslatable(TranslatableInterface $translatable);
}