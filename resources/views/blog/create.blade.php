@extends('layouts.app')

@section('content')

@if (Auth::check())
    <div class="pt-15 w-4/5 m-auto">
        <a 
            href="/blog/create"
            class="bg-blue-500 uppercase bg-transparent text-gray-100 text-xs font-extrabold px-5 py-3 rounded-3xl">
            Create Post
        </a>
    </div>
@endif

    @if ( $errors->any() )
        <div class="w-4/5 m-auto">
            <ul>
                @foreach ( $errors->all() as $error)
                <li class="w-1/5 mb-4 text-gray-50 bg-red-700 rounded-2xl py-4">
                    {{ $error }}
                </li>
                @endforeach
            </ul>
        </div>
    @endif
    
    <div class="w-4/5 m-auto pt-20">
        <form 
            action="/blog"
            method="POST"
            enctype="multipart/form-data">
            @csrf

            
            <div class="pt-5">
            <input 
                type="text"
                name="title"
                placeholder="Title..."
                class="bg-transparent block border-b-2 w-full h-20 text-6xl outline-none">
            </div>
            <div class="pt-5">
            <textarea
                name="description"
                placeholder="Description..."
                class="py-20 bg-transparent block border-b-2 w-full h-60 text-xl outline-none">
            </textarea>
            </div>
            <div class="pt-5">
            <input 
                type="text"
                name="youtube_path"
                placeholder="Enter the youtube address here."
                class="bg-transparent block border-b-2 w-full h-20 text-6xl outline-none">
            </div>
            <div class="pt-5">
                
            <span class="flex block sm:grid grid-cols-3 width-4/5 mx-auto text-center ">
                <label class="w-44 flex flex-col items-center px-2 py-3 bg-white-rounded-lg shadow-lg tracking-wide uppercase border border-blue cursor-pointer">
                    <span class="mt-2 text-base leading-normal">
                        Select Image
                    </span>
                    <input 
                        type="file"
                        name="image"
                        class="hidden">
                </label>
                <label class="w-44 flex flex-col items-center px-2 py-3 bg-white-rounded-lg shadow-lg tracking-wide uppercase border border-blue cursor-pointer">
                    <span class="mt-2 text-base leading-normal">
                        Select Audio
                    </span>
                    <input 
                        type="file"
                        name="audio"
                        class="hidden">
                </label>
                <label class="w-44 flex flex-col items-center px-2 py-3 bg-white-rounded-lg shadow-lg tracking-wide uppercase border border-blue cursor-pointer">
                    <span class="mt-2 text-base leading-normal">
                        Select Video
                    </span>
                    <input 
                        type="file"
                        name="video"
                        class="hidden">
                </label>
            </span>
            </div>
            <button
                type="submit"
                class="uppercase mt-15 bg-blue-500 text-gray-100 text-lg font-extrabold py-4 px-8 rounded-3xl">
                Submit Post
            </button>
        </form>
        </div>
    </div>
@endsection