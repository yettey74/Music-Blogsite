@extends('layouts.app')

@section('content')

    <div class="w-4/5 m-auto">
        <div class="py-15 border-b border-gray-200">
            <h1 class="text-6xl">
                Blog Posts
            </h1>
        </div>
    </div>

@if ( session()->has('message') )
    <div class="w-4/5 m-auto mt-10 pl-2">
        <p class="w-2/6 mb-4 text-gray-50 bg-green-500 rounded-2xl px-4 py-4">
            {{ session()->get('message') }}
        </p>
    </div>
@endif

@foreach ( $posts as $post )
    <div class="sm:grid grid-cols-2 gap-20 w-4/5 mx-auto py-15 border-b border-gray-200">
        <div>
<!--<img src="https://cdn.pixabay.com/photo/2016/04/05/06/28/clef-1308793_960_720.jpg" width="700px" height="700px">
 -->     
    @if ( $post->image_path != '')
        <img src="{{ asset('img/' . $post->image_path) }}" alt="" title="">
    @endif

    @if ( $post->audio_path != '')
        <audio controls>
            <source src="{{ asset('audio/' . $post->audio_path) }}">
            <!-- <source src="horse.mp3" type="audio/mpeg"> -->
            Your browser does not support the audio element.
        </audio>
    @endif

    @if ( $post->video_path != '')
        <video width="640" height="640" controls>
        <source src="{{ asset('video/' . $post->video_path) }}">
       <!--  <source src="movie.ogg" type="video/ogg"> -->
        Your browser does not support the video tag.
        </video>
    @endif

    @if ( $post->youtube_path != '')
        <iframe width="420" height="315"
            src="{{ $post->youtube_path }}">
        </iframe>
    @endif
 </div>

        <div class="m-auto sm:m-auto text-left w-4/5 block">

            <h2 class="text-5xl font-bold text-gray-700 pb-4">
                {{ $post->title }}
            </h2>

            <span class="text-gray-500">
            By <span class="font-bold italic text-gray-800-">{{ $post->user->name }}
            </span>, Created On {{ date('jS M Y', strtotime( $post->updated_at) ) }}
            </span>

            <p class="text-xl text-gray-700 pt-8 pb-10 leading-8 font-light">
                {{ $post->description }}
            </p>

            <a
                href="/blog/{{ $post->slug }}"
                class="uppercase bg-blue-500 text-gray-100 text-lg font-extrabold py-4 px-8 rounded-3xl"
            >
                Keep Reading
            </a>

            @if (isset(Auth::user()->id) && Auth::user()->id == $post->user_id )
                <span class="float-right">
                    <a
                        href="/blog/{{ $post->slug }}/edit"
                        class="text-gray-700 italic hover:text-gray-900 pb-1 border-b-2"
                    >
                        Edit
                    </a>
                </span>

                <span class="float-right">
                    <form 
                        action="/blog/{{ $post->slug }}"
                        method="post"
                    >
                        @csrf
                        @method('delete')

                        <button 
                            class="text-red-500 pr-3"
                            type="submit"
                        >
                        Delete
                        </button>
                    </form>
                </span>
            @endif
        </div>
    </div>
@endforeach  
@endsection