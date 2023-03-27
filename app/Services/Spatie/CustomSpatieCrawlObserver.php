<?php

namespace App\Services\Spatie;

use GuzzleHttp\Exception\RequestException;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\UriInterface;
use Spatie\Crawler\CrawlObservers\CrawlObserver;

class CustomSpatieCrawlObserver extends  CrawlObserver
{

    protected array $uris = [];

    /**
     * Called when the crawler has crawled the given url successfully
     *
     * @param UriInterface $url
     * @param ResponseInterface $response
     * @param UriInterface|null $foundOnUrl
     * @return void
     */
    public function crawled(UriInterface $url, ResponseInterface $response, ?UriInterface $foundOnUrl = null): void
    {
        $this->uris[] = $url->getPath();
        var_dump($url->getPath());
    }

    /**
     * Called when the crawler had a problem crawling the given url.
     *
     * @param UriInterface $url
     * @param RequestException $requestException
     * @param UriInterface|null $foundOnUrl
     * @return void
     */
    public function crawlFailed(UriInterface $url, RequestException $requestException, ?UriInterface $foundOnUrl = null): void
    {
        var_dump('Something went wrong');
    }

    public function finishedCrawling(): void
    {
        parent::finishedCrawling();

        var_dump($this->uris);
    }
}
