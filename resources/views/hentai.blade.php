@extends('basic')

@section('meta')
    <title>{{ $post->title }} Online Episode List - Damnstream</title>
@endsection

@section('content')
<div class="container mx-auto p-4 text-gray-300">
        <div class="grid grid-cols-12 gap-4">
            <div class="hentai-image col-span-12 md:col-span-3">
                <img src="{{ 'https://cdn.damn.stream/poster/' . $post->image }}" class="w-full rounded" alt="{{ $post->title }} poster">
                            </div>
            <div class="col-span-12 md:col-span-9">
                <h1 class="hentai-title text-medium text-2xl border-l-4 border-green-500 pl-2">
                    {{ $post->title }}
                </h1>
                <div class="hentai-detail mt-4 leading-relaxed">
                    {{ $post->synopsis }}
                </div>

                <div class="mt-4">
                    <h2 class="font-medium text-xl border-l-4 border-green-500 pl-2">
                        Alternative Titles
                    </h2>
                    <ul class="mt-2 space-y-2">
                                                    <li class="hentai-synonyms">
                                {{ $post->synonyms }}
                            </li>
                        
                                                    
                        
                                                    
                                            </ul>
                </div>

                                    
                            </div>
        </div>

        <div class="mt-4">
            <div class="p-4 text-center bg-gray-900 rounded text-xs leading-loose">
                You are currently previewing <a class="hover:text-green-600">{{ $post->title }}</a>.
                Watch <a class="hover:text-green-600">{{ $post->title }}</a> episodes by clicking on the links below.
            </div>
        </div>

        <div class="mt-4">
            <h2 class="font-medium text-xl border-l-4 border-green-500 pl-2">
                Episodes
            </h2>
            <ul class="episodes mt-2 space-y-2">
                @foreach($episodeLists as $episodeList)
                                    <li>
                        <a href="{{route('posts.show',$episodeList->slug)}}" class="hover:text-green-600">
                            {{ $episodeList->title }}
                        </a>
                    </li>
                    @endforeach
                            </ul>
        </div>

        
            </div>
@endsection