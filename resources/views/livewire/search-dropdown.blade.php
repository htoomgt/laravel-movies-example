<div>
    <div class="relative mt-4 md:mt-4 " x-data="{isOpen : true}" @click.away="isOpen = false">
        <input wire:model.debounce.350ms="search" type="text"
            class="bg-gray-800 rounded-full text-sm w-64 pl-6 pr-1 py-1 focus:outline-none focus:shadow-outline"
            placeholder="search"
            x-ref="search"
            @keydown.window="
                if(event.keyCode === 191){
                    event.preventDefault();
                    $refs.search.focus();
                }
            "
            @focus="isOpen = true"
            @keydown.escape.window="isOpen = false"
            @keydown.shift.tab="isOpen = false"
            @keydown="isOpen = true"
            >
        <div class="absolute top-0">
            <svg xmlns="http://www.w3.org/2000/svg" class="mt-2 ml-1 w-4 fill-current text-gray-500" fill="none"
                viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
            </svg>
        </div>


        <div wire:loading class="spinner top-0 right-0 mr-4 mt-3"></div>

        @if (strlen($search) >= 2)
        <div class="z-50 absolute bg-gray-800 rounded w-64 mt-4"
            x-show="isOpen"
            x-show.transition.opacity="isOpen"
        >




            @if ($searchResults->count() > 0)
            <ul>
                @foreach ($searchResults as $result)
                <li class="border-b border-gray-700">
                    <a href="{{ route('movies.show', $result['id']) }}" class="
                            hover:gray-700
                            px-3 py-3
                            flex
                            items-center
                            transition ease-in-out
                            duration-150
                            "
                            @if($loop->last) @keydown.tab="isOpen = false" @endif
                        >


                        @if ($result['poster_path'])
                        <img class="w-8" src="https://image.tmdb.org/t/p/w92/{{ $result['poster_path'] }}"
                            alt="poster" />
                        @else
                        <img src="https://via.placeholder.com/50x75" alt="poster" class="w-8">
                        @endif

                        <span class="ml-4">{{ $result['title'] }}</span>
                    </a>
                </li>
                @endforeach



            </ul>
            @else
            <div class="px-3 py-3">
                No results for {{ $search }}
            </div>
            @endif

        </div>
        @endif
    </div>
</div>
