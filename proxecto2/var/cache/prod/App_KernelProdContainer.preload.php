<?php

// This file has been auto-generated by the Symfony Dependency Injection Component
// You can reference it in the "opcache.preload" php.ini setting on PHP >= 7.4 when preloading is desired

use Symfony\Component\DependencyInjection\Dumper\Preloader;

if (in_array(PHP_SAPI, ['cli', 'phpdbg'], true)) {
    return;
}

require dirname(__DIR__, 3).'/vendor/autoload.php';
(require __DIR__.'/App_KernelProdContainer.php')->set(\ContainerFxwDBdD\App_KernelProdContainer::class, null);
require __DIR__.'/ContainerFxwDBdD/getWebpackEncore_TagRendererService.php';
require __DIR__.'/ContainerFxwDBdD/getWebpackEncore_ExceptionListenerService.php';
require __DIR__.'/ContainerFxwDBdD/getWebpackEncore_EntrypointLookupDefaultService.php';
require __DIR__.'/ContainerFxwDBdD/getTwig_Runtime_HttpkernelService.php';
require __DIR__.'/ContainerFxwDBdD/getTwigService.php';
require __DIR__.'/ContainerFxwDBdD/getTranslatorService.php';
require __DIR__.'/ContainerFxwDBdD/getTranslation_Loader_YmlService.php';
require __DIR__.'/ContainerFxwDBdD/getTranslation_Loader_XliffService.php';
require __DIR__.'/ContainerFxwDBdD/getTranslation_Loader_ResService.php';
require __DIR__.'/ContainerFxwDBdD/getTranslation_Loader_QtService.php';
require __DIR__.'/ContainerFxwDBdD/getTranslation_Loader_PoService.php';
require __DIR__.'/ContainerFxwDBdD/getTranslation_Loader_PhpService.php';
require __DIR__.'/ContainerFxwDBdD/getTranslation_Loader_MoService.php';
require __DIR__.'/ContainerFxwDBdD/getTranslation_Loader_JsonService.php';
require __DIR__.'/ContainerFxwDBdD/getTranslation_Loader_IniService.php';
require __DIR__.'/ContainerFxwDBdD/getTranslation_Loader_DatService.php';
require __DIR__.'/ContainerFxwDBdD/getTranslation_Loader_CsvService.php';
require __DIR__.'/ContainerFxwDBdD/getSession_FactoryService.php';
require __DIR__.'/ContainerFxwDBdD/getServicesResetterService.php';
require __DIR__.'/ContainerFxwDBdD/getSecrets_VaultService.php';
require __DIR__.'/ContainerFxwDBdD/getRouting_LoaderService.php';
require __DIR__.'/ContainerFxwDBdD/getMonolog_Logger_CacheService.php';
require __DIR__.'/ContainerFxwDBdD/getMonolog_LoggerService.php';
require __DIR__.'/ContainerFxwDBdD/getHttpClientService.php';
require __DIR__.'/ContainerFxwDBdD/getFragment_Renderer_InlineService.php';
require __DIR__.'/ContainerFxwDBdD/getErrorControllerService.php';
require __DIR__.'/ContainerFxwDBdD/getContainer_GetRoutingConditionServiceService.php';
require __DIR__.'/ContainerFxwDBdD/getContainer_EnvVarProcessorsLocatorService.php';
require __DIR__.'/ContainerFxwDBdD/getContainer_EnvVarProcessorService.php';
require __DIR__.'/ContainerFxwDBdD/getCache_SystemClearerService.php';
require __DIR__.'/ContainerFxwDBdD/getCache_SystemService.php';
require __DIR__.'/ContainerFxwDBdD/getCache_GlobalClearerService.php';
require __DIR__.'/ContainerFxwDBdD/getCache_AppClearerService.php';
require __DIR__.'/ContainerFxwDBdD/getCache_AppService.php';
require __DIR__.'/ContainerFxwDBdD/getAssets_PackagesService.php';
require __DIR__.'/ContainerFxwDBdD/getArgumentResolver_ServiceService.php';
require __DIR__.'/ContainerFxwDBdD/getTemplateControllerService.php';
require __DIR__.'/ContainerFxwDBdD/getRedirectControllerService.php';
require __DIR__.'/ContainerFxwDBdD/getVinylControllerService.php';
require __DIR__.'/ContainerFxwDBdD/getSongControllerService.php';
require __DIR__.'/ContainerFxwDBdD/get_ServiceLocator_XUrKPVUService.php';
require __DIR__.'/ContainerFxwDBdD/get_ServiceLocator_JIxfAsiService.php';
require __DIR__.'/ContainerFxwDBdD/get_ServiceLocator_BRdave9Service.php';
require __DIR__.'/ContainerFxwDBdD/get_ServiceLocator_RKPXoYBService.php';
require __DIR__.'/ContainerFxwDBdD/get_ServiceLocator_B2N_LKQService.php';

$classes = [];
$classes[] = 'Symfony\Bundle\FrameworkBundle\FrameworkBundle';
$classes[] = 'Symfony\Bundle\TwigBundle\TwigBundle';
$classes[] = 'Twig\Extra\TwigExtraBundle\TwigExtraBundle';
$classes[] = 'Symfony\Bundle\MonologBundle\MonologBundle';
$classes[] = 'Symfony\WebpackEncoreBundle\WebpackEncoreBundle';
$classes[] = 'Symfony\UX\Turbo\TurboBundle';
$classes[] = 'Knp\Bundle\TimeBundle\KnpTimeBundle';
$classes[] = 'Symfony\Component\DependencyInjection\ServiceLocator';
$classes[] = 'App\Controller\SongController';
$classes[] = 'App\Controller\VinylController';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Controller\RedirectController';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Controller\TemplateController';
$classes[] = 'Symfony\WebpackEncoreBundle\EventListener\ResetAssetsEventListener';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\BackedEnumValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\DateTimeValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\DefaultValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\RequestValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\RequestAttributeValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\ServiceValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\SessionValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\VariadicValueResolver';
$classes[] = 'Symfony\Component\Asset\Packages';
$classes[] = 'Symfony\Component\Asset\PathPackage';
$classes[] = 'Symfony\Component\Asset\VersionStrategy\JsonManifestVersionStrategy';
$classes[] = 'Symfony\Component\Asset\Context\RequestStackContext';
$classes[] = 'Symfony\Component\Cache\Adapter\FilesystemAdapter';
$classes[] = 'Symfony\Component\Cache\Marshaller\DefaultMarshaller';
$classes[] = 'Symfony\Component\HttpKernel\CacheClearer\Psr6CacheClearer';
$classes[] = 'Symfony\Component\Cache\Adapter\AdapterInterface';
$classes[] = 'Symfony\Component\Cache\Adapter\AbstractAdapter';
$classes[] = 'Symfony\Component\Config\ResourceCheckerConfigCacheFactory';
$classes[] = 'Symfony\Component\DependencyInjection\EnvVarProcessor';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\DebugHandlersListener';
$classes[] = 'Symfony\Bridge\Monolog\Logger';
$classes[] = 'Symfony\Component\HttpKernel\Debug\FileLinkFormatter';
$classes[] = 'Symfony\Component\Stopwatch\Stopwatch';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ErrorController';
$classes[] = 'Symfony\Bridge\Twig\ErrorRenderer\TwigErrorRenderer';
$classes[] = 'Symfony\Component\ErrorHandler\ErrorRenderer\HtmlErrorRenderer';
$classes[] = 'Symfony\Component\EventDispatcher\EventDispatcher';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\ErrorListener';
$classes[] = 'Symfony\Component\HttpKernel\Fragment\InlineFragmentRenderer';
$classes[] = 'Symfony\Contracts\HttpClient\HttpClientInterface';
$classes[] = 'Symfony\Component\HttpClient\HttpClient';
$classes[] = 'Symfony\Component\Runtime\Runner\Symfony\HttpKernelRunner';
$classes[] = 'Symfony\Component\Runtime\Runner\Symfony\ResponseRunner';
$classes[] = 'Symfony\Component\Runtime\SymfonyRuntime';
$classes[] = 'Symfony\Component\HttpKernel\HttpKernel';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Controller\ControllerResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver';
$classes[] = 'Symfony\Component\HttpKernel\ControllerMetadata\ArgumentMetadataFactory';
$classes[] = 'App\Kernel';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\LocaleAwareListener';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\LocaleListener';
$classes[] = 'Symfony\Bridge\Monolog\Handler\ConsoleHandler';
$classes[] = 'Monolog\Handler\StreamHandler';
$classes[] = 'Monolog\Handler\FingersCrossedHandler';
$classes[] = 'Monolog\Formatter\JsonFormatter';
$classes[] = 'Symfony\Bridge\Monolog\Handler\FingersCrossed\HttpCodeActivationStrategy';
$classes[] = 'Monolog\Handler\FingersCrossed\ErrorLevelActivationStrategy';
$classes[] = 'Monolog\Processor\PsrLogMessageProcessor';
$classes[] = 'Symfony\Component\DependencyInjection\ParameterBag\ContainerBag';
$classes[] = 'Symfony\Component\HttpFoundation\RequestStack';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\ResponseListener';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Routing\Router';
$classes[] = 'Symfony\Component\Routing\RequestContext';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\RouterListener';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Routing\DelegatingLoader';
$classes[] = 'Symfony\Component\Config\Loader\LoaderResolver';
$classes[] = 'Symfony\Component\Routing\Loader\XmlFileLoader';
$classes[] = 'Symfony\Component\HttpKernel\Config\FileLocator';
$classes[] = 'Symfony\Component\Routing\Loader\YamlFileLoader';
$classes[] = 'Symfony\Component\Routing\Loader\PhpFileLoader';
$classes[] = 'Symfony\Component\Routing\Loader\GlobFileLoader';
$classes[] = 'Symfony\Component\Routing\Loader\DirectoryLoader';
$classes[] = 'Symfony\Component\Routing\Loader\ContainerLoader';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Routing\AnnotatedRouteControllerLoader';
$classes[] = 'Symfony\Component\Routing\Loader\AnnotationDirectoryLoader';
$classes[] = 'Symfony\Component\Routing\Loader\AnnotationFileLoader';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Secrets\SodiumVault';
$classes[] = 'Symfony\Component\String\LazyString';
$classes[] = 'Symfony\Component\DependencyInjection\ContainerInterface';
$classes[] = 'Symfony\Component\HttpKernel\DependencyInjection\ServicesResetter';
$classes[] = 'Symfony\Component\HttpFoundation\Session\SessionFactory';
$classes[] = 'Symfony\Component\HttpFoundation\Session\Storage\NativeSessionStorageFactory';
$classes[] = 'Symfony\Component\HttpFoundation\Session\Storage\MetadataBag';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\SessionListener';
$classes[] = 'Symfony\Component\String\Slugger\AsciiSlugger';
$classes[] = 'Symfony\Component\Translation\Loader\CsvFileLoader';
$classes[] = 'Symfony\Component\Translation\Loader\IcuDatFileLoader';
$classes[] = 'Symfony\Component\Translation\Loader\IniFileLoader';
$classes[] = 'Symfony\Component\Translation\Loader\JsonFileLoader';
$classes[] = 'Symfony\Component\Translation\Loader\MoFileLoader';
$classes[] = 'Symfony\Component\Translation\Loader\PhpFileLoader';
$classes[] = 'Symfony\Component\Translation\Loader\PoFileLoader';
$classes[] = 'Symfony\Component\Translation\Loader\QtFileLoader';
$classes[] = 'Symfony\Component\Translation\Loader\IcuResFileLoader';
$classes[] = 'Symfony\Component\Translation\Loader\XliffFileLoader';
$classes[] = 'Symfony\Component\Translation\Loader\YamlFileLoader';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Translation\Translator';
$classes[] = 'Symfony\Component\Translation\Formatter\MessageFormatter';
$classes[] = 'Symfony\Component\Translation\IdentityTranslator';
$classes[] = 'Twig\Cache\FilesystemCache';
$classes[] = 'Twig\Extension\CoreExtension';
$classes[] = 'Twig\Extension\EscaperExtension';
$classes[] = 'Twig\Extension\OptimizerExtension';
$classes[] = 'Twig\Extension\StagingExtension';
$classes[] = 'Twig\ExtensionSet';
$classes[] = 'Twig\Template';
$classes[] = 'Twig\TemplateWrapper';
$classes[] = 'Twig\Environment';
$classes[] = 'Twig\Loader\FilesystemLoader';
$classes[] = 'Symfony\Bridge\Twig\Extension\TranslationExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\AssetExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\CodeExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\RoutingExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\YamlExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\StopwatchExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\HttpKernelExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\HttpFoundationExtension';
$classes[] = 'Symfony\Component\HttpFoundation\UrlHelper';
$classes[] = 'Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension';
$classes[] = 'Symfony\WebpackEncoreBundle\Twig\StimulusTwigExtension';
$classes[] = 'Symfony\UX\Turbo\Twig\TwigExtension';
$classes[] = 'Knp\Bundle\TimeBundle\Twig\Extension\TimeExtension';
$classes[] = 'Knp\Bundle\TimeBundle\DateTimeFormatter';
$classes[] = 'Symfony\Bridge\Twig\AppVariable';
$classes[] = 'Twig\RuntimeLoader\ContainerRuntimeLoader';
$classes[] = 'Symfony\Bundle\TwigBundle\DependencyInjection\Configurator\EnvironmentConfigurator';
$classes[] = 'Symfony\Bridge\Twig\Extension\HttpKernelRuntime';
$classes[] = 'Symfony\Component\HttpKernel\DependencyInjection\LazyLoadingFragmentHandler';
$classes[] = 'Symfony\Component\HttpKernel\Fragment\FragmentUriGenerator';
$classes[] = 'Symfony\Component\HttpKernel\UriSigner';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\ValidateRequestListener';
$classes[] = 'Symfony\WebpackEncoreBundle\Asset\EntrypointLookup';
$classes[] = 'Symfony\WebpackEncoreBundle\Asset\EntrypointLookupCollection';
$classes[] = 'Symfony\WebpackEncoreBundle\EventListener\ExceptionListener';
$classes[] = 'Symfony\WebpackEncoreBundle\Asset\TagRenderer';

$preloaded = Preloader::preload($classes);
require_once __DIR__.'/twig/8b/8b88d61083e9c59474282d1646f77b38.php';
require_once __DIR__.'/twig/26/26a7c4307dac0b22faee0b144c1b34f3.php';
require_once __DIR__.'/twig/e3/e3efbcd65a6919bccaddc734a7787694.php';

$classes = [];
$classes[] = 'Symfony\\Component\\Routing\\Generator\\CompiledUrlGenerator';
$classes[] = 'Symfony\\Bundle\\FrameworkBundle\\Routing\\RedirectableCompiledUrlMatcher';
$preloaded = Preloader::preload($classes, $preloaded);
