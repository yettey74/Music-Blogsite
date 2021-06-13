@extends('layouts.app')

@section('content')

    <div class="background-image grid grid-cols-1 m-auto">
        <div class="flex gray-100 pt-10">
            <div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block text-center">
                <h1 class="sm:text-white text-4xl uppercase font-bold text-shadow-md pb-14">
                    Do you want to become a Guitarist?
                </h1>
            <a
                href="/blog"
                class="text-center bg-gray-50 text-gray-700 py-2 px-4 font-bold txt-xl uppercase"           
            >
                Read More
            </a>
            </div>
        </div>
    </div>

    <div class="sm:grid grid-cols-2 gap-20 w-4/5 mx-auto py-15 border-b border-gray-200">
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel"> 
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="1" class=""></li>
            </ol> 
            <div class="carousel-inner" role="listbox">
                <div class="carousel-item active' }}">
                    <img class="d-block img-fluid" src="https://cdn.pixabay.com/photo/2016/04/05/06/28/clef-1308793_960_720.jpg" alt="Pic 1">
                    <div class="carousel-caption d-none d-md-block">
                        <h3>Pic Title 1</h3>
                        <p>Pic Description 1</p>
                    </div>
                </div>
                <div class="carousel-item ">
                    <img class="d-block img-fluid" src="https://cdn.pixabay.com/photo/2018/06/30/09/29/music-3507317_960_720.jpg" alt="Pic 2">
                    <div class="carousel-caption d-none d-md-block">
                        <h3>Pic Title 2</h3>
                        <p>Pic Description 2</p> 
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>

        <div class="m-auto sm:m-auto text-left w-4/5 block">
            <h2 class="text-3xl font-extrabold text-gray-600">
                Struggling to be a better Guitarist
            </h2>
            <p class="py-8 text-gray-500 text-s">
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quam iste officia magnam, vel illo deleniti eveniet vitae tenetur aliquam quod? Similique temporibus consectetur quidem aperiam quisquam rerum consequuntur nostrum quos?
            </p>
            
            <p class="font-extrabold text-gray-600 text-s pb-9">
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ut, minus voluptas quisquam sequi, libero blanditiis suscipit corrupti ab ipsum exercitationem cumque quia aliquid neque ea dolorum qui magnam eum. Explicabo.
            </p>
            <a
                href="/blog"
                class="uppercase bg-blue-500 text-gray-100 text-s font-extrabold py-3 px-8 rounded-3xl"
            >
                FIND OUT MORE
            </a>
        </div>
    </div>
    <div class="text-center p-15 bg-black text-white">
        <h2 class="text-2xl pb-5 text-l">
            I'm an expert...
        </h2>
        <span class="font-extrabold block text-4xl py-1">
            Music Theory
        </span>
        <span class="font-extrabold block text-4xl py-1">
            Music Practical
        </span>
        <span class="font-extrabold block text-4xl py-1">
            Guitar
        </span>
        <span class="font-extrabold block text-4xl py-1">
            Drums
        </span>
    </div>

    <div class="text-center py-15">
        <span class="uppercase text-s text-gray-400">
            Blog
        </span>  

        <h2 class="text-4xl font-bold py-10">
            Recent Posts
        </h2>

        <p class="m-auto w-4/5 text-gray-500">
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Cupiditate laborum iure magnam excepturi placeat, ipsum exercitationem. Distinctio nemo totam inventore dolores corporis hic iusto natus tempore. Nulla pariatur excepturi dolores?
        </p>
    </div>

    <div class="sm:grid grid-cols-2 w-4/5 m-auto">
        <div class="flex bg-yellow-700 txt-gray-100 pt-10">
            <div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block">
                <span class="uppercase text-xs">
                    Guitar
                </span>

                <h3 class="text-xl font-bold py-10">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate voluptatum, explicabo accusantium mollitia incidunt necessitatibus sapiente soluta, ipsa libero, molestiae fugit porro facilis esse ab autem ipsam a pariatur alias.
                </h3>
                <a 
                    href=""
                    class="uppercase bg-transparent bg-gray-100 txt-gray-100 text-xs font-extrabold py-3 px-5 rounded-3xl borders">
                    FIND OUT MORE
                </a>
            </div>
        </div>
        <div>
            <img src="https://cdn.pixabay.com/photo/2016/04/05/06/28/clef-1308793_960_720.jpg" width="700px" height="700px">
        </div>
    </div>
@endsection