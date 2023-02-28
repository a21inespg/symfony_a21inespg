<?php

namespace ContainerHuxvQ3Q;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getConsole_Command_TranslationExtractService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'console.command.translation_extract' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\TranslationUpdateCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Command/TranslationUpdateCommand.php';

        $container->privates['console.command.translation_extract'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\TranslationUpdateCommand(($container->privates['translation.writer'] ?? $container->load('getTranslation_WriterService')), ($container->privates['translation.reader'] ?? $container->load('getTranslation_ReaderService')), ($container->privates['translation.extractor'] ?? $container->load('getTranslation_ExtractorService')), 'en', (\dirname(__DIR__, 4).'/translations'), (\dirname(__DIR__, 4).'/templates'), [], [0 => (\dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Command/TranslationDebugCommand.php'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/CacheWarmer/TranslationsCacheWarmer.php'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/twig-bridge/Extension/TranslationExtension.php'), 3 => (\dirname(__DIR__, 4).'/vendor/knplabs/knp-time-bundle/src/DateTimeFormatter.php'), 4 => (\dirname(__DIR__, 4).'/vendor/symfony/translation/DataCollector/TranslationDataCollector.php')], []);

        $instance->setName('translation:extract');
        $instance->setDescription('Extract missing translations keys from code to translation files.');

        return $instance;
    }
}
