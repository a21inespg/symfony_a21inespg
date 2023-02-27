<?php 

namespace App\Service;

use Knp\Bundle\TimeBundle\DateTimeFormatter;
use Psr\Cache\CacheItemInterface;
use Psr\Log\LoggerInterface;
use Symfony\Contracts\Cache\CacheInterface;
use Symfony\Contracts\HttpClient\HttpClientInterface;
use Symfony\Component\DependencyInjection\Attribute\Autowire;

class MixRepository {
    
    function __construct(private CacheInterface $cache, private HttpClientInterface $httpClient, #[Autowire('%kernel.debug%')] private bool $isDebug )
    {
   
    }
    public function findAll( ): array {
         return $this->cache->get('mixes_data', function(CacheItemInterface $cacheItem) {
            $cacheItem->expiresAfter($this->isDebug ? 5 : 60);
             $response=$this->httpClient->request('GET', 'https://raw.githubusercontent.com/SymfonyCasts/vinyl-mixes/main/mixes.json');
             return $response->toArray();
         });
    }
}

?>