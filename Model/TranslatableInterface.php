<?php

namespace Janwebdev\SFI18nBundle\Model;

use Janwebdev\SFI18nBundle\Model\TranslatingInterface;
use Janwebdev\SFI18nBundle\Locale\LocaleInterface;

interface TranslatableInterface
{    
    function setTranslation(TranslatingInterface $translation);
    
    function addTranslation(TranslatingInterface $translation);
    
    function getTranslations();
    
    function setLocale(LocaleInterface $locale);
}