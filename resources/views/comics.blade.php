@extends('layout.app')

@section('page-title')
    DC Comics - Prodotto

@endsection


@section('main-content')

    <div class="cardPrec">
        <div class="text">
            <div class="cTitle">
                <h2>Prodotto: {{ $prodotto_singolo['title'] }}</h2>
            </div>
            
            <div class="cPrice">
                <div>
                    <h6>U.S. Price: {{$prodotto_singolo['price']}}</h6>
                </div>
                
                <div class="avail">
                    <div>
                        <h6>AVAILABLE</h6>
                    </div>
                    <div class="mgL">
                        <button><a href="www.google.com">Check Availability <i class="fa-solid fa-caret-down"></i></a> </button>
                    </div>
                </div>
                
            </div>
            <div class="cDesc">
                <p>{{$prodotto_singolo['description']}}</p>
            </div>
        </div>
        <div class="copertina">
            <img src="{{ $prodotto_singolo['thumb'] }}" alt="">
        </div>
        
    </div>


    <div class="infoContainer">
        <div class="talent">
            <div class="art">
                <div>
                    <h4 class="grosso">Art By:</h4>
                </div>
                <div>

                        @foreach ($prodotto_singolo['artists'] as $artist)
                            <span>{{ $artist }}, </span>
                        @endforeach

                </div>
            </div>
            <div class="written">
                <div>
                    <h4 class="grosso">Written By:</h4>
                </div>
                <div>
                        @foreach ($prodotto_singolo['writers'] as $writers)
                            <span>{{ $writers }}, </span>
                        @endforeach
                </div>
            </div>
        </div>

        <div class="specs">
            <div class="speccc">
                <h6>Series:</h6>
                <h6>{{ $prodotto_singolo['series'] }}</h6>
            </div>
            <div class="speccc">
                <h6>U.S. Price:</h6>
                <h6>{{ $prodotto_singolo['price'] }}</h6>
            </div>
            <div class="speccc">
                <h6>On Sale Date:</h6>
                <h6>{{ $prodotto_singolo['sale_date'] }}</h6>
            </div>
        </div>
    </div>


@endsection

