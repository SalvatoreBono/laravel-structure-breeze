@extends('layouts.app')
@section('title', 'Projects')
@section('content')
    <div>
        <a href="{{ route('admin.projects.create') }}" class="btn btn-primary btn-lg" type="button">Create</a>

        @foreach ($projects as $project)
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
                    <a href="{{ route('admin.projects.show', $project->id) }}" class="btn btn-primary">Show</a>
                </div>
            </div>

    </div>
    @endforeach
@endsection
