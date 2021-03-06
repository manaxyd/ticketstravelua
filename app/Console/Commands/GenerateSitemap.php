<?php
namespace App\Console\Commands;

use Illuminate\Console\Command;
//use Spatie\Sitemap\SitemapGenerator;
use Psr\Http\Message\UriInterface;
class GenerateSitemap extends Command
{
    /**
     * The console command name.
     *
     * @var string
     */
    protected $name = 'sitemap:generate';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generate the sitemap.';

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        // modify this to your own needs
//        SitemapGenerator::create(config('app.url'))
//            ->shouldCrawl(function (UriInterface $url) {
//                // All pages will be crawled, except the contact page.
//                // Links present on the contact page won't be added to the
//                // sitemap unless they are present on a crawlable page.
//
//                return strpos($url->getPath(), '/tag') === false;
//            })
//            ->writeToFile(public_path('sitemap.xml'));
    }
}