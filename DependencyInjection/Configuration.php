<?php

namespace Rukbat\BitlyBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

class Configuration implements ConfigurationInterface {

    /**
     * {@inheritDoc}
     */
    public function getConfigTreeBuilder() {
        $treeBuilder = new TreeBuilder();
        $rootNode = $treeBuilder->root('rukbat_bitly');

        $rootNode->children()
                ->scalarNode('key')
                ->end()
                ->scalarNode('login')
                ->end()
                ->scalarNode('password')
                ->end()
                ->scalarNode('clientid')
                ->end()
                ->scalarNode('secret')
                ->end()
                ->end();

        return $treeBuilder;
    }

}
