@section('main-content')
    <main>

        <div class="containerComic">
            @foreach ($comic as $key => $elem)
                <div class="comicCard">
                    <a class="titleC" href="{{ route('show.comic', compact('key')) }}">
                        <div>
                            <img src="{{ $elem['thumb'] }}" alt="">
                        </div>
                        <div>
                            <h5 class="titleC">{{ $elem['title'] }}</h5>
                            {{-- <p>{!! $elem['description'] !!}</p> --}}
                        </div>
                    </a>

                </div>
            @endforeach
        </div>

    </main>
@endsection
