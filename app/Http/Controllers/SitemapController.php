<?php

namespace newwwsme\Http\Controllers;

use Illuminate\Http\Request;
use newwwsme\newwwsme\Noticias\Noticias;
use newwwsme\newwwsme\Noticias\NoticiasRepositoryInterface;

class SitemapController extends Controller
{
    
            public function __construct(NoticiasRepositoryInterface $noticias)
    {
       
        $this->news = $noticias;
    }


public function tend()
{
    //$posts = Post::active()->where('category_id', '!=', 21)->get();

    $data['noticias'] = $this->news->tend();


    return response()->view('www/sitemap',$data)->header('Content-Type', 'text/xml');


}




public function posts()
{
    //$posts = Post::active()->where('category_id', '!=', 21)->get();

    $data['noticias'] = $this->news->all();


    return response()->view('www/sitemap',$data)->header('Content-Type', 'text/xml');


}


public function rss()
{
    //$posts = Post::active()->where('category_id', '!=', 21)->get();

    $data['noticias'] = $this->news->all();


    return response()->view('www/rss',$data)->header('Content-Type', 'application/rss+xml');


}



}
