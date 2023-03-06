@extends('layouts.main')

@section('content')
    <div class="card-detail-container flex-column">
        <div class="magic-card mx-auto">
            <div class="nametype-card d-flex justify-content-between align-items-center p-3">
                <h3>{{ $card->nome_carta }}</h3>
                <div class="d-flex ">
                    <div class="mana-value me-2">{{ $card->costo_mana }}</div>
                    <div class="mana-droplet"><i class="fa-solid fa-droplet"></i></div>
                </div>
            </div>
            <div class="character-pic">
                <img class="img-fluid" src="{{ $card->figura }}" alt="{{ $card->nome_carta }}">
            </div>
            <div class="nametype-card d-flex justify-content-between align-items-center p-3">
                <h3></h3>
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
                <p class="value-endurance">{{ $card->costituzione }}</p>
            </div>
        </div>


    </div>
@endsection
