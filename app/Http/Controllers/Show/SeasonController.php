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

class SeasonController extends Controller
{
    public function show($slug, $id)
    {

        $season = Season::findOrFail($id);
        $serie = Serie::where('slug', $slug)->first();
        SEOMeta::setTitle($serie->title);
        SEOMeta::setDescription($serie->description);
        SEOMeta::addMeta('article:published_time', $serie->created_at->toW3CString(), 'property');

          SEOMeta::addMeta('article:section', 'season', 'property');

        SEOMeta::addKeyword([$serie->title .' me titra shqip', 'filma seriale me ttra shqip', 'Seriale turke me titra shqip']);

        OpenGraph::setDescription($serie->description);
        OpenGraph::setTitle($serie->title);
        OpenGraph::setUrl('http://current.url.com');
        OpenGraph::addProperty('type', 'article');
        OpenGraph::addProperty('locale', 'pt-br');
        OpenGraph::addProperty('locale:alternate', ['pt-pt', 'en-us']);

        OpenGraph::addImage($season->getFirstMediaUrl('posterSeason'));
        OpenGraph::addImage($season->getMedia('posterSeason')[0]->getFullUrl());
        OpenGraph::addImage(['url' => $season->getFirstMediaUrl('posterSeason'), 'size' => 300]);
        OpenGraph::addImage($season->getFirstMediaUrl('posterSeason'), ['height' => 300, 'width' => 300]);
        return view('series.seasons.show', compact('serie', 'season'));
    }
}
