<?php

namespace App\Http\Controllers;

use App\Traits\ConsumesExternalServices;
use GuzzleHttp\Client;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public $baseUri = 'https://www.damn.stream/api/';
    use ConsumesExternalServices;

    public function index(Request $request)
    {

        $eposts = $this->makeRequest('GET', 'home/episode');
        $hposts = $this->makeRequest('GET', 'home/hentai');
        return view('index', compact('eposts', 'hposts'));
    }

    public function lepisode(Request $request)
    {
        $queryParams = [];
        if ($request->has('page')) {
            $queryParams = ['page' => $request->get('page')];
        }

        $posts = $this->makeRequest('GET', 'home/episode', $queryParams);
        return view('latest-episode', compact('posts'));
    }

    public function lhentai(Request $request)
    {
        $queryParams = [];
        if ($request->has('page')) {
            $queryParams = ['page' => $request->get('page')];
        }

        $posts = $this->makeRequest('GET', 'home/hentai', $queryParams);
        return view('latest-hentai', compact('posts'));
    }

    public function episode(Request $request, $slug)
    {

        $post = $this->makeRequest('GET', 'episode/slug/' . $slug);
        return view('episode')
            ->with('post', $post->data[0])
            ->with('po', $post);
    }

    public function shentai(Request $request)
    {
        $queryParams = [];
        if ($request->has('page')) {
            $queryParams = ['page' => $request->get('page')];
        }

        $hentais = $this->makeRequest('GET', 'hentai/subbed', $queryParams);
        return view('sarchive', compact('hentais'));
    }

    public function dhentai(Request $request)
    {
        $queryParams = [];
        if ($request->has('page')) {
            $queryParams = ['page' => $request->get('page')];
        }

        $hentaid = $this->makeRequest('GET', 'hentai/dubbed', $queryParams);
        return view('darchive', compact('hentaid'));
    }

    public function hentai(Request $request, $slug)
    {

        $post = $this->makeRequest('GET', 'hentai/slug/' . $slug);
        $episodeLists = $this->makeRequest('GET', 'hentai/' . $slug . '/episode-list');
        return view('hentai')
            ->with('post', $post[0])
            ->with('episodeLists', $episodeLists);
    }

    public function search(Request $request)
    {
        $queryParams = ['name' => $request->get('name')];
        $posts = $this->makeRequest('GET', 'search/hentai', $queryParams);

        return view('search', compact('posts'));
    }
}
