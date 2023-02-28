<?php

namespace ContainerFxwDBdD;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getTwig_Command_DebugService extends App_KernelProdContainer
{
    /*
     * Gets the private 'twig.command.debug' shared service.
     *
     * @return \Symfony\Bridge\Twig\Command\DebugCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->privates['twig.command.debug'] = $instance = new \Symfony\Bridge\Twig\Command\DebugCommand(($container->privates['twig'] ?? $container->load('getTwigService')), \dirname(__DIR__, 4), $container->parameters['kernel.bundles_metadata'], (\dirname(__DIR__, 4).'/templates'), ($container->privates['debug.file_link_formatter'] ?? ($container->privates['debug.file_link_formatter'] = new \Symfony\Component\HttpKernel\Debug\FileLinkFormatter($container->getEnv('default::SYMFONY_IDE')))));

        $instance->setName('debug:twig');
        $instance->setDescription('Show a list of twig functions, filters, globals and tests');

        return $instance;
    }
}
