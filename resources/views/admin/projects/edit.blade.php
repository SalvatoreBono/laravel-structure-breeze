@extends('layouts.app')
@section('title', 'Edit')
@section('content')
    {{-- @include('names.forms.upsert',= inserimento del componente upsert --}}
    {{-- passato come secondo argomento dell'include un array associatiovo 
        [
        'action' =>route('names.update', name->id),
        'method' => 'PUT',
        'name' => $name,
    ]) --}}
    {{-- 'action' => route('names.update', name->id), = specifichiamo dove vogliamo inviare i dati --}}
    {{-- 'method' => 'PUT', = specifichiamo il metodo su come devono essere inviati i dati. Questo metodo indica che stai cercando di effettuare un aggiornamento dell'elemento associato --}}
    {{-- 'name' => $name,= assegniamo il valore a name così da poterlo utilizzare nel value e poter visualizzare i dati da editare --}}
    @include('admin.projects.forms.upsert', [
        'action' => route('admin.projects.update', $project->id),
        'method' => 'PUT',
        'project' => $project,
        'btnBack' => route('admin.projects.show', $project->id),
    ])
@endsection
