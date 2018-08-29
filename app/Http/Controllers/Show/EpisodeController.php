<?php

namespace App\Http\Controllers\Show;

use App\Model\Episode;
use App\Model\Season;
use App\Model\Serie;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use SEOMeta;
use OpenGraph;
use Twitter;
## or
use SEO;

class EpisodeController extends Controller
{
    public function show($slug)
    {
         $episode = Episode::where('slug', $slug)->first();
        SEOMeta::setTitle($episode->title);
        SEOMeta::setDescription($episode->description);
        SEOMeta::addMeta('article:published_time', $episode->created_at->toW3CString(), 'property');
        SEOMeta::addMeta('article:section', 'Seriale', 'property');

        SEOMeta::addKeyword([$episode->title .' me titra shqip', 'filma seriale me ttra shqip', 'Seriale turke me titra shqip']);

        OpenGraph::setDescription($episode->description);
        OpenGraph::setTitle($episode->title);
        OpenGraph::setUrl('http://current.url.com');
        OpenGraph::addProperty('type', 'article');
        OpenGraph::addProperty('locale', 'pt-br');
        OpenGraph::addProperty('locale:alternate', ['pt-pt', 'en-us']);


        return view('episodes.show', compact('episode'));
    }
}
