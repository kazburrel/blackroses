<?php

namespace App\Http\Controllers;

use Spatie\Sitemap\SitemapGenerator;
use Spatie\Sitemap\Tags\Url;


class SitemapController extends Controller
{
    public function __invoke()
    {
        SitemapGenerator::create('https://blackrosessupport.co.uk/')->writeToFile('sitemap.xml');
        // ->getSitemap()
        // ->add(Url::create('https://frimleyhealthandcare.org.uk/get-involved/innovation-fund/2022-east-berkshire-families-children-and-young-peoples-fund/black-roses-support/
        // ')->setPriority(0.5))


        return 'site map created';
    }
}
