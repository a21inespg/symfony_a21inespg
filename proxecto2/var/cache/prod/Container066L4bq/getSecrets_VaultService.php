<?php

namespace Container066L4bq;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSecrets_VaultService extends App_KernelProdContainer
{
    /*
     * Gets the private 'secrets.vault' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Secrets\SodiumVault
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['secrets.vault'] = new \Symfony\Bundle\FrameworkBundle\Secrets\SodiumVault((\dirname(__DIR__, 4).'/config/secrets/'.$container->getEnv('string:default:kernel.environment:APP_RUNTIME_ENV')), \Symfony\Component\String\LazyString::fromCallable($container->getEnv(...), 'base64:default::SYMFONY_DECRYPTION_SECRET'));
    }
}
