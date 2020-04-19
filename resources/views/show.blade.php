    @extends('layouts.main')

    @section('content')
        <div class="movie-info border-b border-grey-800">
            <div class="container mx-auto px-4 py-16 flex flex0col md:flex-row">
                <div class="flex-none">
                    <img src="{{asset('images/logo.jpg')}}" class="w-64 md:w-96" >
                </div>
                <div class="md:ml-24">
                    <h2 class="text-4xl font-semibold">Movie title</h2>
                    <div class="flex items-center text-grey-400 text-sm flex-wrap">

                                <span>
                                                    <i class="fas fa-star" style="color:#f1c40f; "></i>

                                </span>
                            <span class="ml-1" >
                                    85%
                                </span>
                            <span class="mx-2">|</span>
                            <span>Feb 20,2020</span>
                            <span class="mx-2">|</span>
                                <span>
                                Action,Thriller, Comedy
                                </span>
                    </div>
                    <p class="text-grey-300 mt-8">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci aliquam aliquid animi asperiores aspernatur consectetur consequuntur, deleniti doloribus dolorum eos et eum ipsa iste laudantium nam nesciunt nulla, quaerat quam ratione sapiente sequi soluta ullam velit veniam voluptates? Architecto eligendi est in nobis placeat saepe veniam! Ad fugit nostrum veniam!

                    </p>
                    <div class="mt-12">
                        <h4 class="text-white font-semibold">
                           Feature cast
                        </h4>
                        <div class="flex mt-4">
                            <div>
                                <div>Bon jong jong</div>
                                <div class="text-sm text-grey-400">Sceren play, director , story</div>

                            </div>
                            <div>
                                <div>Bon jong jong</div>
                                <div class="text-sm text-grey-400">Sceren play, director , story</div>

                            </div>
                        </div>
                    </div>
                    <div class="mt-12">
                        <button class="flex flex-items-center bg-orange-500 text-grey-900 rounded font-semibold px-5 py-4 hover:bg-orange-600 transition ease-in-out duration-150">
                            <i class="far fa-play-circle mt-1"></i>&nbsp;
                            Play trailer</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="movie-cast border-b border-grey-800">
            <div class="container mx-auto px-4 py-16 ">
                <h2 class="text-4xl font-semibold">Cast</h2>
                <div class="grid grid-cols-1 sm:grid-cols-2  md:grid-cols-3 lg:grid-cols-5 gap-8">

                    <div class="mt-8">
                        <a href="#">
                            <img src="{{asset('images/logo.jpg')}}" alt="movie" class="hover:opacity-75 ease-in-out duration-150">
                        </a>
                                   <div class="font-semibold mt-2">Character</div>
                                    <div >
                                      Actor
                                    </div>

                    </div>
                    <div class="mt-8">
                        <a href="#">
                            <img src="{{asset('images/logo.jpg')}}" alt="movie" class="hover:opacity-75 ease-in-out duration-150">
                        </a>
                        <div class="font-semibold mt-2">Character</div>
                        <div >
                            Actor
                        </div>
                    </div>
                    <div class="mt-8">
                        <a href="#">
                            <img src="{{asset('images/logo.jpg')}}" alt="movie" class="hover:opacity-75 ease-in-out duration-150">
                        </a>
                        <div class="font-semibold mt-2">Character</div>
                        <div >
                            Actor
                        </div>
                    </div>
                    <div class="mt-8">
                        <a href="#">
                            <img src="{{asset('images/logo.jpg')}}" alt="movie" class="hover:opacity-75 ease-in-out duration-150">
                        </a>
                        <div class="font-semibold mt-2">Character</div>
                        <div >
                            Actor
                        </div>
                    </div>
                    <div class="mt-8">
                        <a href="#">
                            <img src="{{asset('images/logo.jpg')}}" alt="movie" class="hover:opacity-75 ease-in-out duration-150">
                        </a>
                        <div class="font-semibold mt-2">Character</div>
                        <div >
                            Actor
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="movie-images border-b border-grey-800">
            <div class="container mx-auto px-4 py-16 ">
                <h2 class="text-4xl font-semibold">Images</h2>
                <div class="grid grid-cols-1 sm:grid-cols-2  md:grid-cols-3 lg:grid-cols-3 gap-8">

                    <div class="mt-8">
                        <a href="#">
                            <img src="{{asset('images/logo.jpg')}}" alt="movie" class="hover:opacity-75 ease-in-out duration-150">
                        </a>


                    </div>
                    <div class="mt-8">
                        <a href="#">
                            <img src="{{asset('images/logo.jpg')}}" alt="movie" class="hover:opacity-75 ease-in-out duration-150">
                        </a>

                    </div>
                    <div class="mt-8">
                        <a href="#">
                            <img src="{{asset('images/logo.jpg')}}" alt="movie" class="hover:opacity-75 ease-in-out duration-150">
                        </a>

                    </div>
                    <div class="mt-8">
                        <a href="#">
                            <img src="{{asset('images/logo.jpg')}}" alt="movie" class="hover:opacity-75 ease-in-out duration-150">
                        </a>

                    </div>
                    <div class="mt-8">
                        <a href="#">
                            <img src="{{asset('images/logo.jpg')}}" alt="movie" class="hover:opacity-75 ease-in-out duration-150">
                        </a>

                    </div>
                </div>
            </div>
        </div>
    @endsection
