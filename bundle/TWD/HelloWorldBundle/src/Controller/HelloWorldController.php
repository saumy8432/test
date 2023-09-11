<?php

namespace TWD\HelloWorldBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Contracts\EventDispatcher\EventDispatcherInterface;
use TWD\HelloWorldBundle\Event\PostUpdateProductEvent;
use Pimcore\Model\DataObject\Product;

class HelloWorldController extends AbstractController
{
    #[Route('/twd/hello-world', name: 'twd_hello_world_message')]
    public function __invoke(): Response {
        // Fetch data objects, e.g., all instances of Product
        $dataObjects = [];

        

        return $this->render('@TwdHelloWorld/hello_world.html.twig', [
            'dataObjects' => $dataObjects,
        ]);
    }

    // #[Route('/show-updated-product', name: 'show_updated_product')]
    // public function showUpdatedProduct(SessionInterface $session)
    // {
    //     $updatedProduct = [];

    //     return $this->render('product/show.html.twig', [
    //         'updatedProduct' => $updatedProduct,
    //     ]);
    // }
}
