<?php

namespace TWD\HelloWorldBundle\DependencyInjection;

use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Extension\Extension;
use Symfony\Component\DependencyInjection\Loader\YamlFileLoader;


class TwdHelloWorldExtension extends Extension
{
 
    public function load(array $configs, ContainerBuilder $container)
    {
      $loader = new YamlFileLoader(
        $container,
        new FileLocator(paths:__DIR__ . '/../../config')
      );

      $loader->load(resource:'services.yaml');
    }
}
