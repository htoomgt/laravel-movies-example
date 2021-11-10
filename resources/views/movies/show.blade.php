@extends('layouts.main')

@section('content')
    <div class="movie-info border-gray-800">
        <div class="container mx-auto px-4 py-16 flex flex-col md:flex-row">
            <img src="/img/parasite.jpg" alt="parasite" class="w-64 md:w-96" />
            <div class="md:ml-24">
                <h2 class="text-4xl font-semibold "> Parasite (2019)</h2>
                <div class="flex flex-wrap items-center text-gray-400 text-sm mt-1">
                    <span class="">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-orange-500 " viewBox="0 0 20 20" fill="currentColor">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                          </svg>
                    </span>
                    <span class="ml-2">85%</span>
                    <span class="mx-2">|</span>
                    <span class="">Feb 20, 2020</span>
                    <span class="">, Action, Thriller, Drama</span>
                </div>

                <p class="text-gray-100 mt-8">
                    Officia amet in non tempor non aliquip sunt ut culpa ullamco deserunt. Consectetur nostrud amet voluptate fugiat nisi fugiat aute ex laboris ut laboris deserunt. Sunt dolore qui nostrud esse qui ex deserunt et incididunt adipisicing aute eiusmod laboris mollit.
                </p>

                <div class="mt-12">
                    <h4 class="text-white font-semibold">
                        Featured Cast
                    </h4>

                    <div class="flex mt-4">
                        <div>
                            <div>Bong Joon-ho</div>
                            <div class="text-sm text-gray-400">Screenplay, Director, Story</div>
                        </div>
                        <div class="ml-8">
                            <div>Han Jin-won</div>
                            <div class="text-sm text-gray-400">Screenplay</div>
                        </div>
                    </div>


                </div>

                <div class="mt-12">
                    <button class="flex item-center bg-orange-500 text-gray-900  rounded font-semibold px-5 py-4 hover:bg-orange-600 transition ease-in-out duration-150">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM9.555 7.168A1 1 0 008 8v4a1 1 0 001.555.832l3-2a1 1 0 000-1.664l-3-2z" clip-rule="evenodd" />
                        </svg>

                        <span class="ml-1">Play Trailler</span>
                    </button>
                </div>


            </div>
        </div>

    </div> {{-- end of movie info --}}

    <div class="movie-cast border-b border-gray-800">
        <div class="container mx-auto px-4 py-16">
            <h2 class="text-4xl font-semibold">Cast</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-16">
                <div class="mt-8">
                    <a href="#">
                        <img src="/img/actor1.jpg" alt="parasite" class="hover:opacity-75 transition ease-in-out duration-
                        300">
                    </a>
                    <div class="mt-2">
                        <a href="#" class="text-lg mt-2 hover:text-gray-300">Real Name</a>
                        <div class="flex items-center text-gray-400 text-sm mt-1">

                            <span class="">John Smith</span>

                        </div>

                    </div>
                </div>

                <div class="mt-8">
                    <a href="#">
                        <img src="/img/actor2.jpg" alt="parasite" class="hover:opacity-75 transition ease-in-out duration-
                        300">
                    </a>
                    <div class="mt-2">
                        <a href="#" class="text-lg mt-2 hover:text-gray-300">Real Name</a>
                        <div class="flex items-center text-gray-400 text-sm mt-1">

                            <span class="">John Smith</span>

                        </div>

                    </div>
                </div>

                <div class="mt-8">
                    <a href="#">
                        <img src="/img/actor3.jpg" alt="parasite" class="hover:opacity-75 transition ease-in-out duration-
                        300">
                    </a>
                    <div class="mt-2">
                        <a href="#" class="text-lg mt-2 hover:text-gray-300">Real Name</a>
                        <div class="flex items-center text-gray-400 text-sm mt-1">

                            <span class="">John Smith</span>

                        </div>

                    </div>
                </div>

                <div class="mt-8">
                    <a href="#">
                        <img src="/img/actor4.jpg" alt="parasite" class="hover:opacity-75 transition ease-in-out duration-
                        300">
                    </a>
                    <div class="mt-2">
                        <a href="#" class="text-lg mt-2 hover:text-gray-300">Real Name</a>
                        <div class="flex items-center text-gray-400 text-sm mt-1">

                            <span class="">John Smith</span>

                        </div>

                    </div>
                </div>

                <div class="mt-8">
                    <a href="#">
                        <img src="/img/actor5.jpg" alt="parasite" class="hover:opacity-75 transition ease-in-out duration-
                        300">
                    </a>
                    <div class="mt-2">
                        <a href="#" class="text-lg mt-2 hover:text-gray-300">Real Name</a>
                        <div class="flex items-center text-gray-400 text-sm mt-1">

                            <span class="">John Smith</span>

                        </div>

                    </div>
                </div>










            </div>
        </div>

        <div class="container mx-auto px-4 py-16">
            <h2 class="text-4xl font-semibold">Image</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3  gap-16">
                <div class="mt-8">
                    <a href="#">
                        <img src="/img/image1.jpg" alt="parasite" class="hover:opacity-75 transition ease-in-out duration-
                        300">
                    </a>

                </div>

                <div class="mt-8">
                    <a href="#">
                        <img src="/img/image2.jpg" alt="parasite" class="hover:opacity-75 transition ease-in-out duration-
                        300">
                    </a>

                </div>

                <div class="mt-8">
                    <a href="#">
                        <img src="/img/image3.jpg" alt="parasite" class="hover:opacity-75 transition ease-in-out duration-
                        300">
                    </a>

                </div>
                <div class="mt-8">
                    <a href="#">
                        <img src="/img/image4.jpg" alt="parasite" class="hover:opacity-75 transition ease-in-out duration-
                        300">
                    </a>

                </div>

                <div class="mt-8">
                    <a href="#">
                        <img src="/img/image5.jpg" alt="parasite" class="hover:opacity-75 transition ease-in-out duration-
                        300">
                    </a>

                </div>

                <div class="mt-8">
                    <a href="#">
                        <img src="/img/image6.jpg" alt="parasite" class="hover:opacity-75 transition ease-in-out duration-
                        300">
                    </a>

                </div>












            </div>
        </div>
    </div>

@endsection
