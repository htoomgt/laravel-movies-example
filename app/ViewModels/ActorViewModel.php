<?php

namespace App\ViewModels;

use Spatie\ViewModels\ViewModel;
use Carbon\Carbon;

class ActorViewModel extends ViewModel
{
    public $actor;
    public $social;
    public $credits;

    public function __construct($actor, $social, $credits)
    {
        $this->actor = $actor;
        $this->social = $social;
        $this->credits = $credits;
    }

    public function actor(){
        return collect($this->actor)
        ->merge([
            'birthday' => Carbon::parse($this->actor['birthday'])->format('M d, Y'),
            'age' => Carbon::parse($this->actor['birthday'])->age,
            'profile_path' => 'https://www.themoviedb.org/t/p/w235_and_h235_bestv2/'.$this->actor['profile_path'],

        ]);

    }

    public function social(){

        return collect($this->social)->merge([
            'facebook' => $this->social['facebook_id'] ? 'https://www.facebook.com/'.$this->social['facebook_id'] : null,
            'twitter' => $this->social['twitter_id'] ? 'https://twitter.com/'.$this->social['twitter_id'] : null,
            'instagram' => $this->social['instagram_id'] ? 'https://www.instagram.com/'.$this->social['instagram_id'] : null,

        ]);

    }

    public function knownForMovies(){
        $castMovies = collect($this->credits)->get('cast');

        return collect($castMovies)->sortByDesc('popularity')->take(5)
            ->map(function($movie){

                if (isset($movie['title'])) {
                    $title = $movie['title'];
                } elseif (isset($movie['name'])) {
                    $title = $movie['name'];
                } else {
                    $title = 'Untitled';
                }

                return collect($movie)->merge([
                    'poster_path' =>  $movie['poster_path']
                        ?  'https://www.themoviedb.org/t/p/w185/'.$movie['poster_path']
                        : 'https://via.placeholder.com/185x275',
                    'title' => $title ,
                    'character' => $movie['character'] ? $movie['character'] : 'unknown',

                ]);

            });

    }

    public function credits(){
        $castMovies = collect($this->credits)->get('cast');

        return collect($castMovies)
            ->map(function($movie){
                if (isset($movie['release_date'])) {
                    $releaseDate = $movie['release_date'];
                } elseif (isset($movie['first_air_date'])) {
                    $releaseDate = $movie['first_air_date'];
                } else {
                    $releaseDate = '';
                }

                if (isset($movie['title'])) {
                    $title = $movie['title'];
                } elseif (isset($movie['name'])) {
                    $title = $movie['name'];
                } else {
                    $title = 'Untitled';
                }



                return collect($movie)->merge([
                    'release_date' => $releaseDate,
                    'release_year' => isset($releaseDate) ? Carbon::parse($releaseDate)->format('Y') : 'Future',
                    'title' => $title,
                    'character' => isset($movie['character']) ? $movie['character'] : 'unknown',
                    'linkToPage' => $movie['media_type'] === 'movie' ? route('movies.show', $movie['id']) : route('tv.show', $movie['id'])

                ])
                ->only([
                    'poster_path',
                    'release_date',
                    'release_year',
                    'title',
                    'character',
                    'media_type',
                    'linkToPage'
                ]);

            })->sortByDesc('release_date')
            ;
    }



}
