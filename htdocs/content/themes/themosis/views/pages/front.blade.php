@extends('layouts.main')
@php
    $coucou = 'beuh';
@endphp
@section('content')
    @if(have_posts())
            <header>
                <x-title level="2" id="header-title" :toto="$coucou">
                    {{ single_post_title('', false) }}
                </x-title>
            </header>

            <x-gallery.images :items="$gallery_items" :size="config('gallery.images.size')" />

        @while(have_posts())
            @php(the_post())
            @template('parts.content', get_post_type())
        @endwhile
        {!! get_the_posts_navigation() !!}
    @else
        @template('parts.content', 'none')
    @endif
@endsection