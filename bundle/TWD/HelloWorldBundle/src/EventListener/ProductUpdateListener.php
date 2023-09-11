<?php
// src/EventListener/ProductUpdateListener.php

namespace App\EventListener;

use Pimcore\Event\DataObjectEvent;
use Pimcore\Event\Model\DataObjectEventInterface;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Psr\Log\LoggerInterface;

class ProductUpdateListener implements EventSubscriberInterface
{

    private $logger;

    public function __construct(LoggerInterface $logger)
    {
        $this->logger = $logger;

        print_r($_SESSION);
    }


    public static function getSubscribedEvents(): array
    {
        return [
            'pimcore.dataobject.product.postUpdate' => 'onDataObjectPostUpdate',
        ];
    }

 


    public function onDataObjectPostUpdate(DataObjectEvent $event)
    {
        $product = $event->getObject();

        // Log the event for testing
        $this->logger->info('Product update updateupdateupdateupdateupdateupdateupdateupdateupdate
        updateupdateupdateupdateupdateupdateupdateupdateupdateupdate
        updateupdateupdateupxdateupdateuupdate updateupdateupdateupdateupdateupdateupdateupdateupdate
        updateupdateupdateupdateupdateupdateupdateupdateupdateupdate
        updateupdateupdateupxdateupdateuupdate updateupdateupdateupdateupdateupdateupdateupdateupdate
        updateupdateupdateupdateupdateupdateupdateupdateupdateupdate
        updateupdateupdateupxdateupdateuupdate updateupdateupdateupdateupdateupdateupdateupdateupdate
        updateupdateupdateupdateupdateupdateupdateupdateupdateupdate
        updateupdateupdateupxdateupdateuupdate updateupdateupdateupdateupdateupdateupdateupdateupdate
        updateupdateupdateupdateupdateupdateupdateupdateupdateupdate
        updateupdateupdateupxdateupdateuupdate updateupdateupdateupdateupdateupdateupdateupdateupdate
        updateupdateupdateupdateupdateupdateupdateupdateupdateupdate
        updateupdateupdateupxdateupdateuupdate updateupdateupdateupdateupdateupdateupdateupdateupdate
        updateupdateupdateupdateupdateupdateupdateupdateupdateupdate
        updateupdateupdateupxdateupdateuupdate updateupdateupdateupdateupdateupdateupdateupdateupdate
        updateupdateupdateupdateupdateupdateupdateupdateupdateupdate
        updateupdateupdateupxdateupdateuupdate updateupdateupdateupdateupdateupdateupdateupdateupdate
        updateupdateupdateupdateupdateupdateupdateupdateupdateupdate
        updateupdateupdateupxdateupdateuupdate updateupdateupdateupdateupdateupdateupdateupdateupdate
        updateupdateupdateupdateupdateupdateupdateupdateupdateupdate
        updateupdateupdateupxdateupdateuupdate updateupdateupdateupdateupdateupdateupdateupdateupdate
        updateupdateupdateupdateupdateupdateupdateupdateupdateupdate
        updateupdateupdateupxdateupdateupdateupdateupdateupdateupdateupdateupdateupdateupdateupdateupdateupdateupdateupdateupdateupdateupdateupdateupdateupdateupdateupdateupdateupdateupdate event triggered.');


        // Assuming that $product has properties 'name', 'type', and 'price'
        $name = $product->getName();
        $type = $product->getType();
        $price = $product->getPrice();
      
        $httpClient = HttpClient::create();
        $response = $httpClient->request('GET', 'https://webmobsoft.com/test/testemail.php');

        // Check the response if needed
        $statusCode = $response->getStatusCode();
        if ($statusCode === 200) {
            // Request was successful
            $this->logger->info('HTTP request to testemail.php was successful.');
        } else {
            // Request failed
            $this->logger->error('HTTP request to testemail.php failed with status code: ' . $statusCode);
        }

        var_dump('aman');
    }
}

 