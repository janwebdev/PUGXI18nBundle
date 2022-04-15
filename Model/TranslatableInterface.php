<?php

namespace Janwebdev\SFI18nBundle\Model;

use Doctrine\Common\Collections\Collection;
use Janwebdev\SFI18nBundle\Model\TranslatingInterface;
use Janwebdev\SFI18nBundle\Locale\LocaleInterface;

interface TranslatableInterface
{    
    public function setTranslation(TranslatingInterface $translation): void;
    
    public function addTranslation(TranslatingInterface $translation): void;
    
    public function getTranslations(): Collection;
    
    public function setLocale(LocaleInterface $locale): void;
}