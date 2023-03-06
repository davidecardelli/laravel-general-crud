@extends('layouts.main')

@section('content')
    <main>
        <div class="container">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4 row-cols-xl-6">
                @foreach ($cards as $card)
                    @include('includes.card')
                @endforeach
            </div>
            <div class="text-center">
                <a class="btn btn-primary" href="{{ route('cards.create') }}">Create Cards</a>
            </div>
        </div>
    </main>
@endsection