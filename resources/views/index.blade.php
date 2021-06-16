@extends('layouts.app')

@section('content')

    <div class="background-image grid grid-cols-1 m-auto">
        @if( Session::has('message'))
            <div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block text-center">
                <div class="alert alert-success">
                    {{ Session::get('message') }}
                </div>
            </div>
            @endif
            <div class="flex gray-100 pt-10">

            <!-- Alert User 
            @if( Session::has('success'))
                <div class="alert alert-success">
                    {{ Session::get('success') }}
                </div>
            @endif -->
            

            <div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block text-center">
                <h1 class="sm:text-black text-4xl uppercase font-bold text-shadow-md pb-14">
                    Do you want to become a Guitarist?
                </h1>
                <a
                    href="/contact"
                    class="text-center bg-gray-500 text-gray-700 py-2 px-4 font-bold txt-xl uppercase no-underline">
                    Enquire Here
                </a>
                
            </div>
        </div>
    </div>

    <div class="sm:grid grid-cols-2 gap-20 w-4/5 mx-auto mt-10 py-5 border-b border-gray-200">

        <div id="carouselExampleSlidesOnly" class="carousel carousel-dark slide carousel-fade" data-bs-touch="true" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="../img/clef.jpg" class="d-block w-100" width="600px" height="600px" alt="clef" title="clef">
                </div>
                <div class="carousel-item">
                    <img src="../img/guitar.png" class="d-block w-100" width="600px" height="600px" alt="clef" title="clef">
<!--                     <img src="https://cdn.pixabay.com/photo/2018/06/30/09/29/music-3507317_960_720.jpg" class="d-block w-100" width="600px" height="600px" alt="monkey music" title="Monkey Music">
 -->                </div>
            </div>
        </div>

        <div class="text-left w-4/5 block">
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
                class="uppercase bg-blue-500 text-gray-100 text-s font-extrabold py-3 px-8 rounded-3xl no-underline"
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
            Vocals
        </span>
        <span class="font-extrabold block text-4xl py-1">
            Guitar
        </span>
        <span class="font-extrabold block text-4xl py-1">
            Drums
        </span>
    </div>

    <div class="text-center py-5">
        <span class="uppercase text-s text-gray-400">
            please supply your own equipment
        </span>  

        <h2 class="text-4xl font-bold py-3">
            Services
        </h2>

        <!-- <p class="m-auto w-4/5 text-gray-500">
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Cupiditate laborum iure magnam excepturi placeat, ipsum exercitationem. Distinctio nemo totam inventore dolores corporis hic iusto natus tempore. Nulla pariatur excepturi dolores?
        </p> -->
    </div>

    <div class="sm:grid grid-cols-2 w-4/5 m-auto">
        <div class="flex bg-blue-700 txt-gray-100 pt-3 pb-5">
            <div class="m-auto sm:m-auto w-4/5 block">
                <span class="uppercase text-xs">
                    Music Theory
                </span>

                <h3 class="text-xl font-bold py-10">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate voluptatum, explicabo accusantium mollitia incidunt necessitatibus sapiente soluta, ipsa libero, molestiae fugit porro facilis esse ab autem ipsam a pariatur alias.
                </h3>
                <a 
                    href="/contact"
                    class="uppercase bg-transparent bg-gray-100 txt-gray-100 text-xs font-extrabold py-3 px-5 rounded-3xl borders">
                    Enquire
                </a>
            </div>
        </div>
        <div class="b-border border-gray-700">
            <img src="../img/guitar.png" width="700px" height="700px" alt="guitar" title="Guitar">
        </div>

        <div>
            <img src="../img/guitar.png" width="700px" height="700px">
        </div>

        <div class="flex bg-red-700 txt-gray-100 pt-10">
            <div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block">
                <span class="uppercase text-xs">
                    Vocals
                </span>

                <h3 class="text-xl font-bold py-10">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate voluptatum, explicabo accusantium mollitia incidunt necessitatibus sapiente soluta, ipsa libero, molestiae fugit porro facilis esse ab autem ipsam a pariatur alias.
                </h3>
                <a 
                    href="/contact"
                    class="uppercase bg-transparent bg-gray-100 txt-gray-100 text-xs font-extrabold py-3 px-5 rounded-3xl borders">
                    Enquire
                </a>
            </div>
        </div>

    </div>
    <div class="sm:grid grid-cols-2 w-4/5 m-auto">
        <div class="flex bg-green-700 txt-gray-100 pt-3 pb-5">
            <div class="m-auto sm:m-auto w-4/5 block">
                <span class="uppercase text-xs">
                    Guitar
                </span>

                <h3 class="text-xl font-bold py-10">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate voluptatum, explicabo accusantium mollitia incidunt necessitatibus sapiente soluta, ipsa libero, molestiae fugit porro facilis esse ab autem ipsam a pariatur alias.
                </h3>
                <a 
                    href="/contact"
                    class="uppercase bg-transparent bg-gray-100 txt-gray-100 text-xs font-extrabold py-3 px-5 rounded-3xl borders">
                    Enquire
                </a>
            </div>
        </div>
        <div class="b-border border-gray-700">
            <img src="../img/guitar.png" width="700px" height="700px" alt="guitar" title="Guitar">
        </div>

        <div>
            <img src="../img/guitar.png" width="700px" height="700px">
        </div>

        <div class="flex bg-orange-700 txt-gray-100 pt-10">
            <div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block">
                <span class="uppercase text-xs">
                    Drums
                </span>

                <h3 class="text-xl font-bold py-10">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate voluptatum, explicabo accusantium mollitia incidunt necessitatibus sapiente soluta, ipsa libero, molestiae fugit porro facilis esse ab autem ipsam a pariatur alias.
                </h3>
                <a 
                    href="/contact"
                    class="uppercase bg-transparent bg-gray-100 txt-gray-100 text-xs font-extrabold py-3 px-5 rounded-3xl borders">
                    Enquire
                </a>
            </div>
        </div>
    </div>
    
    <div class="sm:grid grid-cols-1 m-auto w-4/5 mb-10 pt-5 text-3xl text-extrabold text-center">
        Enquiry Form
    </div>
    
    <div class="sm:grid grid-cols-1 m-auto w-4/5 mb-10 text-left">
    <form 
            action="/contact"
            method="POST"
            >            
            @csrf
            <div class="form-group">
                <label class="pt-3 pb-3" >Name</label>
                <input type="text" class="form-control" name="name" id="name">
                @if ( $errors->has('name'))
                    <div class="alert alert-danger">
                        {{ $errors->first('name') }}
                    </div>
                @endif
            </div>
            <div class="form-group">
                <label class="pt-3 pb-3">Email</label>
                <input type="email" class="form-control" name="email" id="email">
                @if ( $errors->has('email'))
                    <div class="alert alert-danger">
                        {{ $errors->first('email') }}
                    </div>
                @endif
            </div>
            
            <div class="form-group">
                <label class="pt-3 pb-3">Phone</label>
                <input type="text" class="form-control" name="phone" id="phone">
                @if ( $errors->has('phone'))
                    <div class="alert alert-danger">
                        {{ $errors->first('phone') }}
                    </div>
                @endif
            </div>

            <div class="form-group">
                <label class="pt-3 pb-3">Subject</label>
                <input type="text" class="form-control" name="subject" id="subject">
                @if ( $errors->has('subject'))
                    <div class="alert alert-danger">
                        {{ $errors->first('subject') }}
                    </div>
                @endif
            </div>

            <div class="form-group">
                <label class="pt-3 pb-3">Message</label>
                <textarea class="form-control" name="message" id="message" rows="5">
                </textarea>
                @if ( $errors->has('message'))
                    <div class="alert alert-danger">
                        {{ $errors->first('message') }}
                    </div>
                @endif
            </div>

            <input type="submit" name="send" value="Send" class="btn btn-dark btn-block pt-3 pb-3">
    
        </form>  
        </div>
    </div>
@endsection