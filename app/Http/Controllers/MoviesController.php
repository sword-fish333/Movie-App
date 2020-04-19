<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class MoviesController extends Controller
{

    public function index(){
        $popularMovies=Http::withToken(config('services.tmdb.token'))->get(config('services.tmdb.url').'movie/popular')->json()['results'];
        $nowPlayingMovies=Http::withToken(config('services.tmdb.token'))->get(config('services.tmdb.url').'movie/now_playing')->json()['results'];

        $genreArray=Http::withToken(config('services.tmdb.token'))->get(config('services.tmdb.url').'genre/movie/list')->json()['genres'];

        $genres=collect($genreArray)->mapWithKeys(function ($genre){
            return [$genre['id']=>$genre['name']];
        });


        return view('index',[
            'popularMovies'=>$popularMovies,
            'genres'=>$genres,
            'nowPlayingMovies'=>$nowPlayingMovies
        ]);
    }

    public function show($id){
        $movie=Http::withToken(config('services.tmdb.token'))->get(config('services.tmdb.url').'movie/'.$id)->json();

        return view('show',compact('movie'));
    }
}
