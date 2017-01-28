<?php

namespace Janwebdev\SFI18nBundle\Locale;

/**
 * 
 * @author Leonardo Proietti (leonardo.proietti@gmail.com)
 */
interface LocaleInterface
{
    function setLocale($locale);
    
    function getLocale();
    
    function getDefaultLocale();
}
