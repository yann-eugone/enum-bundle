<?php

declare(strict_types=1);

namespace Yokai\EnumBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

/**
 * @author Yann Eugoné <eugone.yann@gmail.com>
 */
class Configuration implements ConfigurationInterface
{
    /**
     * @inheritdoc
     */
    public function getConfigTreeBuilder(): TreeBuilder
    {
        $treeBuilder = new TreeBuilder('yokai_enum');
        $rootNode = $treeBuilder->getRootNode();

        $rootNode
            ->children()
                ->booleanNode('enum_autoconfiguration')
                    ->info('If set to true, all services that implements EnumInterface, will obtain the "enum" tag automatically.')
                    ->defaultTrue()
                ->end()
                ->booleanNode('enum_registry_autoconfigurable')
                    ->info('If set to true, add an alias for the enum registry so your service can ask for it via autoconfiguration.')
                    ->defaultTrue()
                ->end()
            ->end()
        ;

        return $treeBuilder;
    }
}
