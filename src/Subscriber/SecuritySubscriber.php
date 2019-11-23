<?php

declare(strict_types=1);

namespace App\Subscriber;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Event\ResponseEvent;
use Symfony\Component\HttpKernel\KernelEvents;

final class SecuritySubscriber implements EventSubscriberInterface
{

    /**
     * @return array
     */
    public static function getSubscribedEvents(): array
    {
        return [
            KernelEvents::RESPONSE => 'onResponse',
        ];
    }

    public function onResponse(ResponseEvent $responseEvent): Response
    {
        $response = $responseEvent->getResponse();
        $response->headers->set('Content-Security-Policy', 'script-src \'self\'');
        return $response;
    }
}
