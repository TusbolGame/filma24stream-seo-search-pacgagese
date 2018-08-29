<?php

namespace App\Http\Controllers\Show;

use App\Model\Genre;
use App\Model\Movie;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use SEOMeta;
use OpenGraph;
use Twitter;

use SEO;

class GenreController extends Controller
{
    public function showBySlug ($slug)
    {

        $genre = Genre::where('slug', $slug)->first();
        $movies = $genre->movies()->latest()->paginate(18);

        SEOMeta::setTitle($genre->name);
        SEOMeta::setDescription('Filma '. $genre->name . ' me titra shqip, seriale me titra shqip');

        SEOMeta::addKeyword(['Filma '. $genre->name . ' me titra shqip, seriale me titra shqip', 'filma seriale me ttra shqip', 'Seriale turke me titra shqip']);

        OpenGraph::setDescription('Filma '. $genre->name . ' me titra shqip, seriale me titra shqip');
        OpenGraph::setTitle($genre->name);
        OpenGraph::setUrl('http://current.url.com');
        OpenGraph::addProperty('type', 'article');
        OpenGraph::addProperty('locale', 'pt-br');
        OpenGraph::addProperty('locale:alternate', ['pt-pt', 'en-us']);


        return view('genres.show', compact('movies'));
    }
}
