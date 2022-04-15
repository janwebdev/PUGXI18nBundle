<?php

namespace Janwebdev\SFI18nBundle\Model;

use Janwebdev\SFI18nBundle\Model\TranslatableInterface;

interface TranslatingInterface
{
    public function setLocale(string $string): self;
    
    public function getLocale(): string;
    
    public function setTranslatable(TranslatableInterface $translatable): self;
}