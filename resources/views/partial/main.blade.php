<main>
        <h2>prova</h2>
    <div class="bg-img-prodotti">
        @foreach ($comic as $elem)
            <div>
                <h5>{{$elem['title']}}</h5>
            </div>
        @endforeach
    </div>
</main>

