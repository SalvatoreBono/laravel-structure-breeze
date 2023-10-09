@extends('layouts.app')
@section('title', 'Show')
@section('content')
    <div class="card" style="width: 18rem;">
        <img src="{{ $project['thumbnail'] }}" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">{{ $project['title'] }}</h5>
            <p class="card-text">{{ $project['description'] }}</p>
            <a href="{{ $project['link'] }}">Link repo</a>

            {{-- ->format('d/m/y') formattarla con il formato "giorno/mese/anno --}}
            <div>{{ $project['date']->format('d/m/y') }}</div>

            {{--  "implode" unisce gli elementi dell'array in una singola stringa, separando ciascun elemento con il ", " --}}
            <div>Linguaggi utilizzati{{ implode(', ', $project['language']) }}</div>
            <a href="{{ route('admin.projects.edit', $project->id) }}" class="btn btn-primary">Edit</a>

            {{--  Quando l'utente fa clic sul pulsante "Cancella", i dati del form verranno inviati con il method DELETE all'action destroy, consentendo di eliminare il progetto corrispondente --}}
            <form action="{{ route('admin.projects.destroy', $project->id) }}" method="POST">
                @csrf()
                @method('DELETE')
                <button type="submit" class="btn btn-warning">Cancella</button>
            </form>
            <a href="{{ route('admin.projects.index') }}" class="btn btn-danger">Indietro</a>
        </div>
    </div>
@endsection
