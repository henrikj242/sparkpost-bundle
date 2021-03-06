<?php

namespace Hanfrey\SparkpostBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

/**
 * This is the class that validates and merges configuration from your app/config files.
 *
 * To learn more see {@link http://symfony.com/doc/current/cookbook/bundles/configuration.html}
 */
class Configuration implements ConfigurationInterface
{
    /**
     * {@inheritdoc}
     */
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder();
        $rootNode = $treeBuilder->root('hanfrey_sparkpost');
        $rootNode
            ->children()
            ->scalarNode('api_token')->defaultNull()->end()
            ->scalarNode('api_host')->defaultValue('api.sparkpost.com')->end()
            ->end()
        ;
        return $treeBuilder;
      
    }
}
