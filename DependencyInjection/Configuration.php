<?php

namespace VectorXHD\TwitterBundle\DependencyInjection;

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
        $rootNode = $treeBuilder->root('vectorxhd_twitter');

        $rootNode
            ->children()
            ->scalarNode('consumer_key')->isRequired()->end()
            ->scalarNode('consumer_secret')->isRequired()->end()
            ->scalarNode('access_token')->isRequired()->end()
            ->scalarNode('access_token_secret')->isRequired()->end()
            ->end();

        return $treeBuilder;
    }
}
