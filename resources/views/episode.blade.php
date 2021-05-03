@extends('basic')

@section('meta')
    <title>Watch {{ $post->title }} - Damnstream</title>
@endsection

@section('content')
<div class="container mx-auto p-4 text-gray-300">
        <a>
            <h1 class="page-heading">
                {{ $post->title }}
            </h1>
        </a>
    </div>

<div class="bg-gray">
        <div class="container mx-auto p-4">
            <div class="aspect-w-16 aspect-h-12 md:aspect-h-9">
                        <iframe src="//www.damn.stream/video/{{ $post->embed }}" frameborder="0 scrolling="no" allowfullscreen="" style="background-image: url('//damn.stream/img/loader.gif');background-repeat: no-repeat;background-size: 100% 100%;"></iframe>
                    </div>
                    </div>
                    <div class="container mx-auto p-4 text-gray-300">
<div class="flex justify-between">
<div class="hentai-page space-x-2">
<a href="{{route('posts.hentai',$post->hentai_slug)}}" class="px-3 py-1 rounded text-sm hover:bg-gray-500 bg-gray-700">
Hentai
</a>
</div>
<div class="space-x-2">
@if($po->prev_page_slug)
                    <a class="px-3 py-1 rounded text-sm hover:bg-gray-500 bg-gray-700"
                                             href="{{$po->prev_page_slug}}">Prev</a></li>
                @endif
@if($po->next_page_slug)
                    <a class="px-3 py-1 rounded text-sm hover:bg-gray-500 bg-gray-700"
                                             href="{{$po->next_page_slug}}">Next</a></li>
                @endif
            </div>
</div>
<div class="flex flex-wrap md:flex-nowrap mt-4 md:space-x-4">
<div class="w-full">
<div class="p-4 bg-gray-900 rounded">
<p class="text-xs md:text-sm leading-loose">
You are currently watching <a class="hover:text-green-600">{{ $post->title }}</a>.
 </p>
</div>
</div>
</div>
</div>
                                    </div>
@endsection
