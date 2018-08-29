<?php

namespace App\Http\Controllers\Show;

use App\Model\Season;
use App\Model\Serie;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use SEOMeta;
use OpenGraph;
use Twitter;
## or
use SEO;

class SerieController extends Controller
{
    public function index()
    {
        SEO::setTitle('Filma24.stream | Filma me titra shqip | Seriale me titra shqip');
        SEO::setDescription('Filma me titra shqip, seriale me titra shqip HD');
        SEO::opengraph()->setUrl('https://www.filma24.stream');
        SEO::setCanonical('https://www.filma24.stream');
        SEO::opengraph()->addProperty('type', 'movies');
        SEO::twitter()->setSite('@LuizVinicius73');

        $series = Serie::orderBy('created_at', 'desc')->paginate(18);

        return view('series.index', compact('series'));
    }

    public function show($slug)
    {
        $serie = Serie::where('slug', $slug)->first();
        SEOMeta::setTitle($serie->title);
        SEOMeta::setDescription($serie->description);
        SEOMeta::addMeta('article:published_time', $serie->created_at->toW3CString(), 'property');

        SEOMeta::addMeta('article:section', 'seriale', 'property');

        SEOMeta::addKeyword([$serie->title .' me titra shqip', 'filma seriale me ttra shqip', 'Seriale turke me titra shqip']);

        OpenGraph::setDescription($serie->description);
        OpenGraph::setTitle($serie->title);
        OpenGraph::setUrl('http://current.url.com');
        OpenGraph::addProperty('type', 'article');
        OpenGraph::addProperty('locale', 'pt-br');
        OpenGraph::addProperty('locale:alternate', ['pt-pt', 'en-us']);

        OpenGraph::addImage($serie->getFirstMediaUrl('posterSerie'));
        OpenGraph::addImage($serie->getMedia('posterSerie')[0]->getFullUrl());
        OpenGraph::addImage(['url' => $serie->getFirstMediaUrl('posterSerie'), 'size' => 300]);
        OpenGraph::addImage($serie->getFirstMediaUrl('posterSerie'), ['height' => 300, 'width' => 300]);
        return view('series.show', compact('serie'));

    }

}
