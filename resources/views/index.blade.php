@extends('layouts.main')

@section('content')
    <div class="container mx-auto px-4 pt-16">
        <div class="popular-movies">
            <h2 class="uppercase text_orange tracking-wider text-lg font-semibold">
                Popular movies
            </h2>
            <div class="grid grid-cols-1 sm:grid-cols-2  md:grid-cols-3 lg:grid-cols-5 gap-8">

                <div class="mt-8">
                    <a href="#">
                        <img src="{{asset('images/logo.jpg')}}" alt="movie" class="hover:opacity-75 ease-in-out duration-150">
                    </a>
                    <div class="mt-2">
                        <a href="#" class="text-lg mt-2 hover:text-grey:300">Movie</a>
                        <div class="flex items-center text-grey-400">
                           <div>
                            <span>
                                                <i class="fas fa-star" style="color:#f1c40f; "></i>

                            </span>
                            <span class="ml-1" >
                                85%
                            </span>
                            <span class="mx-2">|</span>
                            <span>Feb 20,2020</span>
                        <div class="text-grey-400">
                            Action,Thriller, Comedy
                        </div>
                        </div>
                    </div>
                </div>
            </div>
                <div class="mt-8">
                    <a href="#">
                        <img src="{{asset('images/logo.jpg')}}" alt="movie" class="hover:opacity-75 ease-in-out duration-150">
                    </a>
                    <div class="mt-2">
                        <a href="#" class="text-lg mt-2 hover:text-grey:300">Movie</a>
                        <div class="flex items-center text-grey-400">
                            <div>
                            <span>
                                                <i class="fas fa-star" style="color:#f1c40f; "></i>

                            </span>
                                <span class="ml-1" >
                                85%
                            </span>
                                <span class="mx-2">|</span>
                                <span>Feb 20,2020</span>
                                <div class="text-grey-400">
                                    Action,Thriller, Comedy
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mt-8">
                    <a href="#">
                        <img src="{{asset('images/logo.jpg')}}" alt="movie" class="hover:opacity-75 ease-in-out duration-150">
                    </a>
                    <div class="mt-2">
                        <a href="#" class="text-lg mt-2 hover:text-grey:300">Movie</a>
                        <div class="flex items-center text-grey-400">
                            <div>
                            <span>
                                                <i class="fas fa-star" style="color:#f1c40f; "></i>

                            </span>
                                <span class="ml-1" >
                                85%
                            </span>
                                <span class="mx-2">|</span>
                                <span>Feb 20,2020</span>
                                <div class="text-grey-400">
                                    Action,Thriller, Comedy
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mt-8">
                    <a href="#">
                        <img src="{{asset('images/logo.jpg')}}" alt="movie" class="hover:opacity-75 ease-in-out duration-150">
                    </a>
                    <div class="mt-2">
                        <a href="#" class="text-lg mt-2 hover:text-grey:300">Movie</a>
                        <div class="flex items-center text-grey-400">
                            <div>
                            <span>
                                                <i class="fas fa-star" style="color:#f1c40f; "></i>

                            </span>
                                <span class="ml-1" >
                                85%
                            </span>
                                <span class="mx-2">|</span>
                                <span>Feb 20,2020</span>
                                <div class="text-grey-400">
                                    Action,Thriller, Comedy
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mt-8">
                    <a href="#">
                        <img src="{{asset('images/logo.jpg')}}" alt="movie" class="hover:opacity-75 ease-in-out duration-150">
                    </a>
                    <div class="mt-2">
                        <a href="#" class="text-lg mt-2 hover:text-grey:300">Movie</a>
                        <div class="flex items-center text-grey-400">
                            <div>
                            <span>
                                                <i class="fas fa-star" style="color:#f1c40f; "></i>

                            </span>
                                <span class="ml-1" >
                                85%
                            </span>
                                <span class="mx-2">|</span>
                                <span>Feb 20,2020</span>
                                <div class="text-grey-400">
                                    Action,Thriller, Comedy
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </div>

            <div class="now-playing-movies py-24">
                <h2 class="uppercase text_orange tracking-wider text-lg font-semibold">
                   Now playing
                </h2>
                <div class="grid grid-cols-1 sm:grid-cols-2  md:grid-cols-3 lg:grid-cols-5 gap-8">

                    <div class="mt-8">
                        <a href="#">
                            <img src="{{asset('images/logo.jpg')}}" alt="movie" class="hover:opacity-75 ease-in-out duration-150">
                        </a>
                        <div class="mt-2">
                            <a href="#" class="text-lg mt-2 hover:text-grey:300">Movie</a>
                            <div class="flex items-center text-grey-400">
                                <div>
                            <span>
                                                <i class="fas fa-star" style="color:#f1c40f; "></i>

                            </span>
                                    <span class="ml-1" >
                                85%
                            </span>
                                    <span class="mx-2">|</span>
                                    <span>Feb 20,2020</span>
                                    <div class="text-grey-400">
                                        Action,Thriller, Comedy
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mt-8">
                        <a href="#">
                            <img src="{{asset('images/logo.jpg')}}" alt="movie" class="hover:opacity-75 ease-in-out duration-150">
                        </a>
                        <div class="mt-2">
                            <a href="#" class="text-lg mt-2 hover:text-grey:300">Movie</a>
                            <div class="flex items-center text-grey-400">
                                <div>
                            <span>
                                                <i class="fas fa-star" style="color:#f1c40f; "></i>

                            </span>
                                    <span class="ml-1" >
                                85%
                            </span>
                                    <span class="mx-2">|</span>
                                    <span>Feb 20,2020</span>
                                    <div class="text-grey-400">
                                        Action,Thriller, Comedy
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mt-8">
                        <a href="#">
                            <img src="{{asset('images/logo.jpg')}}" alt="movie" class="hover:opacity-75 ease-in-out duration-150">
                        </a>
                        <div class="mt-2">
                            <a href="#" class="text-lg mt-2 hover:text-grey:300">Movie</a>
                            <div class="flex items-center text-grey-400">
                                <div>
                            <span>
                                                <i class="fas fa-star" style="color:#f1c40f; "></i>

                            </span>
                                    <span class="ml-1" >
                                85%
                            </span>
                                    <span class="mx-2">|</span>
                                    <span>Feb 20,2020</span>
                                    <div class="text-grey-400">
                                        Action,Thriller, Comedy
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mt-8">
                        <a href="#">
                            <img src="{{asset('images/logo.jpg')}}" alt="movie" class="hover:opacity-75 ease-in-out duration-150">
                        </a>
                        <div class="mt-2">
                            <a href="#" class="text-lg mt-2 hover:text-grey:300">Movie</a>
                            <div class="flex items-center text-grey-400">
                                <div>
                            <span>
                                                <i class="fas fa-star" style="color:#f1c40f; "></i>

                            </span>
                                    <span class="ml-1" >
                                85%
                            </span>
                                    <span class="mx-2">|</span>
                                    <span>Feb 20,2020</span>
                                    <div class="text-grey-400">
                                        Action,Thriller, Comedy
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mt-8">
                        <a href="#">
                            <img src="{{asset('images/logo.jpg')}}" alt="movie" class="hover:opacity-75 ease-in-out duration-150">
                        </a>
                        <div class="mt-2">
                            <a href="#" class="text-lg mt-2 hover:text-grey:300">Movie</a>
                            <div class="flex items-center text-grey-400">
                                <div>
                            <span>
                                                <i class="fas fa-star" style="color:#f1c40f; "></i>

                            </span>
                                    <span class="ml-1" >
                                85%
                            </span>
                                    <span class="mx-2">|</span>
                                    <span>Feb 20,2020</span>
                                    <div class="text-grey-400">
                                        Action,Thriller, Comedy
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
    </div>

    @endsection
