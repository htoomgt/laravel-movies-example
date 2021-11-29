<?php

namespace App\ViewModels;

use Spatie\ViewModels\ViewModel;
use Carbon\Carbon;

class TvShowViewModel extends ViewModel
{
    public $tvShow;

    public function __construct($tvShow)
    {
        $this->tvShow = $tvShow;
    }


    public function tvShow()
    {
        $credits = $this->tvShow['credits']['cast'];

        return collect($this->tvShow)->merge([
            'poster_path' => "https://image.tmdb.org/t/p/w500/" . $this->tvShow['poster_path'],
            'vote_average' => $this->tvShow['vote_average'] * 10 . '%',
            'first_air_date' => Carbon::parse($this->tvShow['first_air_date'])->format('M d, Y'),
            'genres' => collect($this->tvShow['genres'])->pluck('name')->flatten()->implode(', '),
            'crews' => collect($credits)->take(5)->map(function ($cast) {
                return collect($cast)->merge(['character' => $cast['character']]);
            }),
            'videos' => collect($this->tvShow['videos']['results'])->take(2),
            'images' => collect($this->tvShow['images']['backdrops'])->take(9),
        ])->only([
            'poster_path', 'id', 'genre_ids', 'name', 'vote_average', 'first_air_date', 'genres', 'crews', 'videos', 'images', 'overview', 'created_by'
        ]);
    }
}
