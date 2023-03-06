@extends('layouts.main')

@section('content')
    <div class="card-detail-container mb-3">
        <div class="magic-card mx-auto">
            <div class="nametype-card d-flex justify-content-between align-items-center p-3">
                <h3>{{ $card->nome_carta }}</h3>
                <div class="d-flex ">
                    <div class="mana-value me-2">{{ $card->costo_mana }}</div>
                    <div class="mana-droplet"><i class="fa-solid fa-droplet"></i></div>
                </div>
            </div>
            <div class="character-pic">
                <img class="" src="{{ $card->figura }}" alt="{{ $card->nome_carta }}">
            </div>
            <div class="nametype-card d-flex justify-content-between align-items-center p-3">
                <h3>{{ $card->tipo_carta }}</h3>
                <div class="d-flex ">
                    <div class="mana-value me-2">{{ $card->edizione }}</div>
                </div>
            </div>
            <div class="card-info p-3">
                <p class="card-effect">{{ $card->effetti }}</p>
                <p class="card-description">{{ $card->testo }}</p>

            </div>
            <div class="px-3 d-flex justify-content-end footer-card">
                <p class="value-strenght me-2">{{ $card->forza }}</p>
                <span class="me-2">/</span>
                <p class="value-endurance">{{ $card->forza }}</p>
            </div>

            <div class="d-flex justify-content-center align-items-center">
            <form action="{{ route('cards.destroy', $card->id) }}" method="POST" class="delete-form"
                    data-name="{{ $card->short_name }}">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger me-2 mb-3">Elimina</button>
            </form>
                <a href="{{ route('cards.edit', $card->id) }}" class="btn btn-warning me-2 mb-3">Modifica</a>
                <a href="{{ route('cards.index') }}" class="btn btn-secondary mb-3">Indietro</a>
        </div>
        </div>



    </div>


@endsection
