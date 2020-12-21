@extends('layouts.main')

@section('content')
    <div class="movie-info border-b border-gray-800">
        <div class="container mx-auto px-4 py-16 grid flex:col md:flex-row">
            
            <div class="grid">
                <img src="/img/parasite.jpg" alt="parasite" class="w-64 md:w-96">
            </div>

            <div class="md:ml-24">
                
                <h2 class="text-4xl font-semibold">Parasite (2019)</h2>

                <div class="flex flex-wrap items-center text-gray-400 text-sm">
                    <svg class="fill-current w-4" version="1.1" viewBox="0 0 8.2021 7.9375">
                        <path d="m4.1483 0.11169a0.41003 0.41003 0 0 0-0.37166 0.23393l-0.99851 2.0998-2.3048 0.30643a0.41003 0.41003 0 0 0-0.22785 0.70414l1.6885 1.5986-0.42089 2.2868a0.41003 0.41003 0 0 0 0.5994 0.43444l2.0422-1.1121 2.0447 1.1069a0.41003 0.41003 0 0 0 0.59823-0.43573l-0.42654-2.2857 1.6847-1.6027a0.41003 0.41003 0 0 0-0.22966-0.70372l-2.3057-0.30066-1.0037-2.0973a0.41003 0.41003 0 0 0-0.30568-0.22806 0.41003 0.41003 0 0 0-0.06267-5e-3z" color="#000000" color-rendering="auto" dominant-baseline="auto" fill="#c38b37" image-rendering="auto" shape-rendering="auto" solid-color="#000000" stop-color="#000000" style="font-feature-settings:normal;font-variant-alternates:normal;font-variant-caps:normal;font-variant-east-asian:normal;font-variant-ligatures:normal;font-variant-numeric:normal;font-variant-position:normal;font-variation-settings:normal;inline-size:0;isolation:auto;mix-blend-mode:normal;paint-order:fill markers stroke;shape-margin:0;shape-padding:0;text-decoration-color:#000000;text-decoration-line:none;text-decoration-style:solid;text-indent:0;text-orientation:mixed;text-transform:none;white-space:normal"/>
                    </svg>
                    <span class="ml-1">85%</span>
                    <span class="mx-1">|</span>
                    <span>Feb 20, 2020</span>
                    <span class="mx-1">|</span>
                    <span>Action, Thriller, Drama</span>
                </div>

                <p class="text-gray-300 mt-8">
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolorum corporis beatae odio ut dolor rem cumque consectetur autem architecto, soluta enim alias officia fugiat, laboriosam labore similique. Suscipit nesciunt voluptates nemo sequi consectetur quibusdam fugiat dignissimos sint natus vero eaque neque, dolorem expedita harum ipsa, voluptate earum magni! Autem, possimus.
                </p>

                <div class="mt-12">
                    <h4 class="text-white font-semibold">Featured Cast</h4>
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
                    <button class="flex items-center bg-orange-500 text-gray-900 rounded font-semibold px-5 py-4 hover:bg-orange-600 transition ease-in-out duration-150" style="background-color: #C38B37">
                    <svg class="w-6" version="1.1" viewBox="0 0 7.9375 7.9375">
                        <path d="m3.9687 0.26458c-2.0434-4e-8 -3.7052 1.6598-3.7052 3.7031 0 2.0434 1.6618 3.7052 3.7052 3.7052 2.0434 0 3.7052-1.6618 3.7052-3.7052s-1.6618-3.7031-3.7052-3.7031zm0 0.42788c1.8121 0 3.2753 1.4632 3.2753 3.2753 0 1.8121-1.4632 3.2773-3.2753 3.2773-1.8121 0-3.2773-1.4653-3.2773-3.2773-3e-8 -1.8121 1.4653-3.2753 3.2773-3.2753zm-0.71003 2.0789a0.14563 0.14563 0 0 0-0.14573 0.14521v2.1032a0.14563 0.14563 0 0 0 0.21239 0.12971l2.0355-1.0516a0.14563 0.14563 0 0 0 0.078548-0.13177 0.14563 0.14563 0 0 0-0.078548-0.12712l-2.0355-1.0516a0.14563 0.14563 0 0 0-0.066662-0.01602z" color="#111827" color-rendering="auto" dominant-baseline="auto" fill="#111827" image-rendering="auto" shape-rendering="auto" solid-color="#000000" stop-color="#000000" style="font-feature-settings:normal;font-variant-alternates:normal;font-variant-caps:normal;font-variant-east-asian:normal;font-variant-ligatures:normal;font-variant-numeric:normal;font-variant-position:normal;font-variation-settings:normal;inline-size:0;isolation:auto;mix-blend-mode:normal;paint-order:fill markers stroke;shape-margin:0;shape-padding:0;text-decoration-color:#000000;text-decoration-line:none;text-decoration-style:solid;text-indent:0;text-orientation:mixed;text-transform:none;white-space:normal"/>
                    </svg>

                    <span class="ml-2">Play Trailer</span>

                    </button>
                </div>

            </div>
        </div>
    </div>

    <div class="movie-cast border-b border-gray-800">
        <div class="container mx-auto px-4 py-16">

            <h2 class="text-4xl font-semibold">Cast</h2>

            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">

                <div class="mt-8">
                    <a href="#">
                        <img src="/img/actor5.jpg" alt="parasite" class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>

                    <div class="mt-2">
                        <a href="#" class="text-lg mt-2 hover:text-gray:300">Parasite</a>
                        <div class="flex items-center text-gray-400 text-sm mt-1">
                            <span class="ml-1">John Smith</span>
                        </div>
                    </div>
                </div>

                <div class="mt-8">
                    <a href="#">
                        <img src="/img/actor4.jpg" alt="parasite" class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>

                    <div class="mt-2">
                        <a href="#" class="text-lg mt-2 hover:text-gray:300">Parasite</a>
                        <div class="flex items-center text-gray-400 text-sm mt-1">
                            <span class="ml-1">John Smith</span>
                        </div>
                    </div>
                </div>

                <div class="mt-8">
                    <a href="#">
                        <img src="/img/actor2.jpg" alt="parasite" class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>

                    <div class="mt-2">
                        <a href="#" class="text-lg mt-2 hover:text-gray:300">Parasite</a>
                        <div class="flex items-center text-gray-400 text-sm mt-1">
                            <span class="ml-1">John Smith</span>
                        </div>
                    </div>
                </div>

                <div class="mt-8">
                    <a href="#">
                        <img src="/img/actor3.jpg" alt="parasite" class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>

                    <div class="mt-2">
                        <a href="#" class="text-lg mt-2 hover:text-gray:300">Parasite</a>
                        <div class="flex items-center text-gray-400 text-sm mt-1">
                            <span class="ml-1">John Smith</span>
                        </div>
                    </div>
                </div>

                <div class="mt-8">
                    <a href="#">
                        <img src="/img/actor1.jpg" alt="parasite" class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>

                    <div class="mt-2">
                        <a href="#" class="text-lg mt-2 hover:text-gray:300">Parasite</a>
                        <div class="flex items-center text-gray-400 text-sm mt-1">
                            <span class="ml-1">John Smith</span>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>

    <div class="movie-shot border-b border-gray-800">
        <div class="container mx-auto px-4 py-16">

            <h2 class="text-4xl font-semibold">Images</h2>

            <div class="grid grid-cols-1 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                
                <div class="mt-8">
                    <img src="/img/bd1.jpg" alt="parasite" class="hover:opacity-75 transition ease-in-out duration-150">
                </div>

                <div class="mt-8">
                    <img src="/img/bd2.jpg" alt="parasite" class="hover:opacity-75 transition ease-in-out duration-150">
                </div>

                <div class="mt-8">
                    <img src="/img/bd3.jpg" alt="parasite" class="hover:opacity-75 transition ease-in-out duration-150">
                </div>

            </div>

        </div>
    </div>
@endsection