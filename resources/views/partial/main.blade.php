
@extends('layout.app')

@section('page-title', "la molisana - prodottti")

@section('main-content')
    <h2>Sei nella pagina prodotti di</h2>
    <div class="bg-img-prodotti">
        @foreach ($comic as $elem)
            <div>
                <h5>{{$elem['title']}}</h5>
            </div>
        @endforeach
    </div>
@endsection