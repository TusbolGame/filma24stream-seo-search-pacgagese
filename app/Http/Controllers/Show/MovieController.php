<?php

namespace App\Http\Controllers\Show;

use App\Model\Movie;
use App\Model\Serie;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use SEOMeta;
use OpenGraph;
use Twitter;
## or
use SEO;

class MovieController extends Controller
{
    public function welcome()
    {

        SEO::setTitle('Filma24.stream | Filma me titra shqip | Seriale me titra shqip');
        SEO::setDescription('Filma me titra shqip, seriale me titra shqip HD');
        SEO::opengraph()->setUrl('https://www.filma24.stream');
        SEO::setCanonical('https://www.filma24.stream');
        SEO::opengraph()->addProperty('type', 'movies');
        SEO::twitter()->setSite('@LuizVinicius73');

        $movies = Movie::orderBy('created_at', 'desc')->paginate(8);

        $series = Serie::orderBy('created_at', 'desc')->limit(4)->get();

        return view('welcome', compact('movies', 'series'));

    }
    public function index()
    {
        SEO::setTitle('Filma24.stream | Filma me titra shqip | Seriale me titra shqip');
        SEO::setDescription('Filma me titra shqip, seriale me titra shqip HD');
        SEO::opengraph()->setUrl('https://www.filma24.stream');
        SEO::setCanonical('https://www.filma24.stream');
        SEO::opengraph()->addProperty('type', 'movies');
        SEO::twitter()->setSite('@LuizVinicius73');

        $movies = Movie::orderBy('created_at', 'desc')->paginate(18);

        return view('movies.index', compact('movies'));
    }

    public function show($slug)
    {

        $movie = Movie::where('slug', $slug)->first();

        SEOMeta::setTitle($movie->title);
        SEOMeta::setDescription($movie->description);
        SEOMeta::addMeta('article:published_time', $movie->created_at->toW3CString(), 'property');
        foreach ($movie->genres as $genre){
            SEOMeta::addMeta('article:section', $genre->name, 'property');
        }
        SEOMeta::addKeyword([$movie->title .' me titra shqip', 'filma seriale me ttra shqip', 'Seriale turke me titra shqip']);

        OpenGraph::setDescription($movie->description);
        OpenGraph::setTitle($movie->title);
        OpenGraph::setUrl('http://current.url.com');
        OpenGraph::addProperty('type', 'article');
        OpenGraph::addProperty('locale', 'pt-br');
        OpenGraph::addProperty('locale:alternate', ['pt-pt', 'en-us']);

        OpenGraph::addImage($movie->getFirstMediaUrl('poster'));
        OpenGraph::addImage($movie->getMedia('poster')[0]->getFullUrl());
        OpenGraph::addImage(['url' => $movie->getFirstMediaUrl('poster'), 'size' => 300]);
        OpenGraph::addImage($movie->getFirstMediaUrl('poster'), ['height' => 300, 'width' => 300]);


        return view('movies.show', compact('movie'));
    }
}
