@extends('layouts.main')

@section('content')
    <main>
        <div class="container">
            <h2 class="text-center mb-5">Aggiungi una card</h2>
            @include('includes.cards.form')
        </div>
    </main>
@endsection
