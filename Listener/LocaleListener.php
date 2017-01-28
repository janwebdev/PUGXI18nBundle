<?php

namespace Janwebdev\SFI18nBundle\Listener;

use Janwebdev\SFI18nBundle\Locale\LocaleInterface;
use Symfony\Component\HttpKernel\KernelEvents;
use Symfony\Component\HttpKernel\Event\GetResponseEvent;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
/**
 * 
 * @author Leonardo Proietti (leonardo.proietti@gmail.com)
 */
class LocaleListener implements EventSubscriberInterface
{
    private $locale;

    public function __construct(LocaleInterface $locale)
    {
        $this->locale = $locale;
    }
    
    public static function getSubscribedEvents() 
    {
        return array(
            'kernel.request' => 'setLocale'
        );
    }
    
    public function setLocale(GetResponseEvent $event)
    {
        $this->locale->setLocale($event->getRequest()->getLocale());
    }    
}
