@if ($card->exists)
    <form action="{{ route('cards.update', $card->id) }}" method="POST" novalidate>
        @method('PUT')
    @else
        <form action="{{ route('cards.store') }}" method="POST" novalidate>
@endif
@csrf
<div class="row cols-3">
    <div class="col">
        {{-- Nome Carta --}}
        <div class="mb-3">
            <label for="nome_carta" class="form-label">Nome Carta</label>
            <input type="text" class="form-control" id="nome_carta" name="nome_carta" placeholder="Nome Carta"
                value="{{ old('costo_mana', $card->nome_carta) }}">
        </div>
    </div>

    <div class="col">
        {{-- Costo Mana --}}
        <div class="mb-3">
            <label for="costo_mana" class="form-label">Vote</label>
            <input type="numeric" class="form-control" id="costo_mana" name="costo_mana" placeholder="Costo Mana"
                value="{{ old('costo_mana', $card->costo_mana) }}">
        </div>
    </div>

    <div class="col">
        {{-- Figura  --}}
        <div class="mb-3">
            <label for="figura" class="form-label">URL Immagine</label>
            <input type="url" class="form-control" id="figura" name="figura" placeholder="URL Immagine"
                value="{{ old('figura', $card->figura) }}">
        </div>
    </div>
</div>


<div class="row row-cols-1">
    <div class="col">
        {{-- Descrizione --}}
        <div class="mb-3">
            <label for="testo" class="form-label">Descrizione</label>
            <textarea class="form-control" id="testo" name="testo" rows="3" placeholder="Descrizione">{{ old('testo', $card->testo) }}</textarea>
        </div>
    </div>
</div>

<div class="row row-cols-3">
    <div class="col">
        {{-- Tipo Carta --}}
        <div class="mb-3">
            <label for="tipo_carta" class="form-label">Tipo Carta</label>
            <input type="text" class="form-control" id="tipo_carta" name="tipo_carta" placeholder="Tipo Carta"
                value="{{ old('tipo_carta', $card->tipo_carta) }}">
        </div>
    </div>
    <div class="col">
        {{-- Edizione --}}
        <div class="mb-3">
            <label for="edizione" class="form-label">Edizione</label>
            <input type="text" class="form-control" id="edizione" name="edizione" placeholder="Edizione"
                value="{{ old('edizione', $card->edizione) }}">
        </div>
    </div>
    <div class="col">
        {{-- Effetti  --}}
        <div class="mb-3">
            <label for="effetti" class="form-label">Effetti</label>
            <input type="text" class="form-control" id="effetti" name="effetti" placeholder="Sale Date"
                value="{{ old('effetti', $card->effetti) }}">
        </div>
    </div>
</div>

<div class="row row-cols-2">
    <div class="col">
        {{-- Forza --}}
        <div class="mb-3">
            <label for="forza" class="form-label">Forza</label>
            <input type="text" class="form-control" id="forza" name="forza" placeholder="Forza"
                value="{{ old('forza', $card->forza) }}">
        </div>
    </div>
    <div class="col">
        {{-- Costituzione --}}
        <div class="mb-3">
            <label for="costituzione" class="form-label">Costituzione</label>
            <input type="url" class="form-control" id="costituzione" name="costituzione" placeholder="Costituzione"
                value="{{ old('costituzione', $card->costituzione) }}">
        </div>
    </div>
</div>


<div class="d-flex justify-content-between">
    <div>
        <a href="{{ route('cards.index') }}" class="btn btn-secondary mt-3">Back</a>
    </div>
    <div class="mb-3">
        <button class="btn btn-small btn-success" type="submit">Submit</button>
    </div>
</div>
</form>
