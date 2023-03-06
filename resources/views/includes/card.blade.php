<div class="col mb-3">
    <div class="card d-flex flex-column align-items-center justify-content-center h-100 p-3">
        <a href="{{ route('cards.show', $card['id']) }}">
            <img class="card-img-top img-fluid rounded-2" src="{{ $card['figura'] }}" alt="{{ $card['nome_carta'] }}">
        </a>
        <div class="card-body">
            <p class="text-center text-black mt-2 fw-bold text-uppercase">{{ $card['nome_carta'] }}</p>
        </div>
    </div>
</div>
