<?php

namespace Janwebdev\SFI18nBundle\Model;

use Janwebdev\SFI18nBundle\Model\TranslatingInterface;
use Janwebdev\SFI18nBundle\Locale\LocaleInterface;

interface TranslatableInterface
{    
    public function setTranslation(TranslatingInterface $translation): void;
    
    public function addTranslation(TranslatingInterface $translation): void;
    
    public function getTranslations(): ?TranslatingInterface;
    
    public function setLocale(LocaleInterface $locale): void;
}