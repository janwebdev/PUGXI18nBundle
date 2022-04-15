<?php

namespace Janwebdev\SFI18nBundle\Listener;

use Janwebdev\SFI18nBundle\Locale\LocaleInterface;
use Symfony\Component\HttpKernel\Event\RequestEvent;
/**
 * 
 * @author Jan Rogozinsky (janwebdev@gmail.com)
 */
class LocaleListener
{
    private LocaleInterface $locale;

    public function __construct(LocaleInterface $locale)
    {
        $this->locale = $locale;
    }
    
    public function setLocale(RequestEvent $event): void
    {
        $this->locale->setLocale($event->getRequest()->getLocale());
    }    
}
