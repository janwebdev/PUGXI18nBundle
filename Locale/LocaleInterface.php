<?php

namespace Janwebdev\SFI18nBundle\Locale;

/**
 * 
 * @author Leonardo Proietti (leonardo.proietti@gmail.com)
 */
interface LocaleInterface
{
    public function setLocale(string $locale): void;
    
    public function getLocale(): string;
    
    public function getDefaultLocale(): string;
}
