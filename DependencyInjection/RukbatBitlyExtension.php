<?php

namespace Rukbat\BitlyBundle\DependencyInjection;

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\Config\FileLocator;
use Symfony\Component\HttpKernel\DependencyInjection\Extension;
use Symfony\Component\DependencyInjection\Loader;

class RukbatBitlyExtension extends Extension {

    /**
     * {@inheritDoc}
     */
    public function load(array $configs, ContainerBuilder $container) {
        $configuration = new Configuration();
        $config = $this->processConfiguration($configuration, $configs);

        $loader = new Loader\XmlFileLoader($container, new FileLocator(__DIR__.'/../Resources/config'));
        $loader->load('services.xml');

        foreach (array('key', 'login', 'password', 'clientid', 'secret') as $attribute) {
            if (isset($config[$attribute])) {
                $container->setParameter('rukbat_bitly.'.$attribute, $config[$attribute]);
            }
        }
    }

}
