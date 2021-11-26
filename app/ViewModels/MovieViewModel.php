<?php

namespace App\ViewModels;

use Spatie\ViewModels\ViewModel;
use Carbon\Carbon;

class MovieViewModel extends ViewModel
{
    public $movie;
    public $crews;
    public $videos;
    public $images;

    public function __construct($movie)
    {
        $this->movie = $movie;

    }


    public function movie()
    {
        $credits = $this->movie['credits']['cast'];
        return collect($this->movie)->merge([
            'poster_path' => "https://image.tmdb.org/t/p/w500/" . $this->movie['poster_path'],
            'vote_average' => $this->movie['vote_average'] * 10 . '%',
            'release_date' => Carbon::parse($this->movie['release_date'])->format('M d, Y'),
            'genres' => collect($this->movie['genres'])->pluck('name')->flatten()->implode(', '),
            'crews' => collect($credits)->take(5)->map(function ($cast) {
                return collect($cast)->merge(['character' => $cast['character']]);
            }),
            'videos' => collect($this->movie['videos']['results'])->take(2),
            'images' => collect($this->movie['images']['backdrops'])->take(9),
        ])->only([
            'poster_path', 'id', 'genre_ids', 'title', 'vote_average', 'release_date', 'genres', 'crews', 'videos', 'images', 'overview'
        ]);
    }



}
