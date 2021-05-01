@extends('basic')

@section('meta')
    <title>Damnstream - Watch hentai episode online anywhere</title>
@endsection

@section('content')
<div class="container mx-auto p-4 text-gray-300">
    <div class="flex justify-between items-baseline mt-4">
            <h2 class="page-heading">
                Recently Updated Hentai
            </h2>
            @if($posts->prev_page_url)
                    <a class="page-link"
                                             href="{{ route('posts.lhentai') }}?page={{ $posts->prev_page_url[-1] }}">Prev</a></li>
                @endif
                @if($posts->next_page_url)
                    <a class="page-link"
                                             href="{{ route('posts.lhentai') }}?page={{ $posts->next_page_url[-1] }}">Next</a>
                @endif
        </div>
        <div class="hentai-episode grid grid-cols-12 grid-rows-3 gap-4 mt-4">
        @foreach($posts->data as $post)
            <a href="{{ route('posts.hentai', $post->slug) }}" class="col-span-6 sm:col-span-4 md:col-span-3 xl:col-span-2 overflow-hidden group">
<img src="{{ '//cdn.damn.stream/poster/' . $post->image }}" alt="{{ $post->title }} poster" class="rounded">
<div class="p-2">
<h2 class="text-sm text-center font-medium clamp-1 text-gray-300 group-hover:text-green-500">
{{ $post->title }}
</h2>
</div>
</a>
        @endforeach
    </div>
</div>
@endsection