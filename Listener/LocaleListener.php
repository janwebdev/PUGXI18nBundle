<?php

namespace Janwebdev\SFI18nBundle\Listener;

use Janwebdev\SFI18nBundle\Locale\LocaleInterface;
use Symfony\Component\HttpKernel\Event\ResponseEvent;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
/**
 * 
 * @author Leonardo Proietti (leonardo.proietti@gmail.com)
 */
class LocaleListener implements EventSubscriberInterface
{
    private LocaleInterface $locale;

    public function __construct(LocaleInterface $locale)
    {
        $this->locale = $locale;
    }
    
    public static function getSubscribedEvents(): array
    {
        return [
            'kernel.request' => 'setLocale'
        ];
    }
    
    public function setLocale(ResponseEvent $event): void
    {
        $this->locale->setLocale($event->getRequest()->getLocale());
    }    
}
