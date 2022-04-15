<?php

namespace Janwebdev\SFI18nBundle\Listener;

use Doctrine\Common\EventArgs;
use Doctrine\Common\EventSubscriber;
use Janwebdev\SFI18nBundle\Locale\LocaleInterface;
use Janwebdev\SFI18nBundle\Model\TranslatableInterface;
use Janwebdev\SFI18nBundle\Mapping\Event\Adapter\EventAdapterInterface;

/**
 * 
 * @author Leonardo Proietti (leonardo.proietti@gmail.com)
 */
class TranslatableListener implements EventSubscriber
{
    protected LocaleInterface $locale;
    protected EventAdapterInterface $adapter;

    public function __construct(EventAdapterInterface $adapter, LocaleInterface $locale)
    {
        $this->adapter  = $adapter;
        $this->locale   = $locale;
    }
    
    public function getSubscribedEvents(): array
    {
        return [
            'postLoad'
        ];
    }

    public function postLoad(EventArgs $args): void
    {
        $entity = $this->adapter->getObject($args);
        
        if ($entity instanceof TranslatableInterface) {
            $entity->setLocale($this->locale);
        }
    }
}
