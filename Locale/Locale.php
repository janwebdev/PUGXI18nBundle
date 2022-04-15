<?php

namespace Janwebdev\SFI18nBundle\Locale;

/**
 * 
 * @author Leonardo Proietti (leonardo.proietti@gmail.com)
 */
class Locale implements LocaleInterface
{
    private string $locale;
    private string $defaultLocale;
    
    public function __construct(string $defaultLocale)
    {
        $this->locale        = $defaultLocale;
        $this->defaultLocale = $defaultLocale;
    }
    
    public function setLocale(string $locale): void
    {
        $this->locale = $locale;
    }
    
    public function getLocale(): string
    {
        return $this->locale;
    }
    
    public function getDefaultLocale(): string
    {
        return $this->defaultLocale;
    }
    
}