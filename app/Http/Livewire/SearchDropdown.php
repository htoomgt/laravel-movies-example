<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Http;

class SearchDropdown extends Component
{
    public $search = '';

    public function render()
    {

        $searchResults = [];

        if(strlen($this->search) >= 2) {
            $searchResults = Http::withToken(config('services.tmdb.token'))
            ->get('https://api.themoviedb.org/3/search/movie', [
                'query' => $this->search,
                'language' => 'en-US',
                'include_adult' => false,
                'page' => 1,
            ])->json()['results'];

            // dump($searchResult);
        }



        return view('livewire.search-dropdown', [
            'searchResults' => collect($searchResults)->take(7),
        ]);
    }
}
