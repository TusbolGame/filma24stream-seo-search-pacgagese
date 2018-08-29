<?php

namespace App\Http\Controllers\Show;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Movie;
use SEOMeta;
use OpenGraph;
use Twitter;
## or
use SEO;

class SearchController extends Controller
{
    public function index(Request $request)
    {
        SEO::setTitle('Filma24.stream | Filma me titra shqip | Seriale me titra shqip');
        SEO::setDescription('Filma me titra shqip, seriale me titra shqip HD');
        SEO::opengraph()->setUrl('https://www.filma24.stream');
        SEO::setCanonical('https://www.filma24.stream');
        SEO::opengraph()->addProperty('type', 'movies');
        SEO::twitter()->setSite('@LuizVinicius73');
        if ($request->has('search')) {

            $movies = Movie::search($request->get('search'))->get();

        } else {

            $movies = Movie::get();

        }


        return view('search', compact('movies'));
    }
}
