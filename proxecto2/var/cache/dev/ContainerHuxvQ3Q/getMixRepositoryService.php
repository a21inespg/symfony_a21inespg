<?php

namespace ContainerHuxvQ3Q;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMixRepositoryService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Service\MixRepository' shared autowired service.
     *
     * @return \App\Service\MixRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Service/MixRepository.php';

        return $container->privates['App\\Service\\MixRepository'] = new \App\Service\MixRepository(($container->services['cache.app'] ?? $container->getCache_AppService()), ($container->privates['.debug.http_client'] ?? $container->get_Debug_HttpClientService()), true);
    }
}
