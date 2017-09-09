<?php

namespace pizzaminded\CoreBundle\DependencyInjection;

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
        $rootNode = $treeBuilder->root('pizza_core');
        /** @noinspection NullPointerExceptionInspection */
        $rootNode
            ->children()
                ->arrayNode('locale_listener')
                    ->children()
                        ->scalarNode('enable')->defaultFalse()->end()
                        ->scalarNode('redirect_path')->defaultNull()->end()
                        ->scalarNode('locales')->defaultNull()->end()
                        ->scalarNode('fallback_locale')->defaultNull()->end()
                        ->scalarNode('locale_parameter')->defaultValue('_locale')->end()
                    ->end()
                ->end()
            ->end();
        // Here you should define the parameters that are allowed to
        // configure your bundle. See the documentation linked above for
        // more information on that topic.

        return $treeBuilder;
    }
}
