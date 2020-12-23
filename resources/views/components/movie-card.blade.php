<div class="mt-8">
    <a href="{{ route('movies.show', $movie['id']) }}">
        <img src="{{ 'https://image.tmdb.org/t/p/w500/' . $movie['poster_path'] }}" alt="Poster" class="hover:opacity-75 transition ease-in-out duration-150">
    </a>

    <div class="mt-2">
        <a href="{{ route('movies.show', $movie['id']) }}" class="text-lg mt-2 hover:text-gray:300">{{ $movie['title'] }}</a>
        <div class="flex items-center text-gray-400 text-sm mt-1">
        <svg class="fill-current w-4" version="1.1" viewBox="0 0 8.2021 7.9375">
            <path d="m4.1483 0.11169a0.41003 0.41003 0 0 0-0.37166 0.23393l-0.99851 2.0998-2.3048 0.30643a0.41003 0.41003 0 0 0-0.22785 0.70414l1.6885 1.5986-0.42089 2.2868a0.41003 0.41003 0 0 0 0.5994 0.43444l2.0422-1.1121 2.0447 1.1069a0.41003 0.41003 0 0 0 0.59823-0.43573l-0.42654-2.2857 1.6847-1.6027a0.41003 0.41003 0 0 0-0.22966-0.70372l-2.3057-0.30066-1.0037-2.0973a0.41003 0.41003 0 0 0-0.30568-0.22806 0.41003 0.41003 0 0 0-0.06267-5e-3z" color="#000000" color-rendering="auto" dominant-baseline="auto" fill="#c38b37" image-rendering="auto" shape-rendering="auto" solid-color="#000000" stop-color="#000000" style="font-feature-settings:normal;font-variant-alternates:normal;font-variant-caps:normal;font-variant-east-asian:normal;font-variant-ligatures:normal;font-variant-numeric:normal;font-variant-position:normal;font-variation-settings:normal;inline-size:0;isolation:auto;mix-blend-mode:normal;paint-order:fill markers stroke;shape-margin:0;shape-padding:0;text-decoration-color:#000000;text-decoration-line:none;text-decoration-style:solid;text-indent:0;text-orientation:mixed;text-transform:none;white-space:normal"/>
        </svg>
            <span class="ml-1">{{ $movie['vote_average'] * 10 . '%' }}</span>
            <span class="mx-1">|</span>
            <span>{{ \Carbon\Carbon::parse($movie['release_date'])->format('M d, Y') }}</span>
        </div>
        <div class="text-gray-400 text-sm">
            @foreach ($movie['genre_ids'] as $genre)
                {{ $genres->get($genre) }} @if (!$loop->last), @endif
            @endforeach
        </div>
    </div>
</div>