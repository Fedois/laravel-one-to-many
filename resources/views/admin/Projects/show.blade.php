@extends('layouts.admin')

@section('content')
    <div class="container">
        <a href="{{ route('admin.projects.index') }}" class="btn btn-secondary my-1">Torna indietro</a>

        @include('partials.success')

        <div class="info">
            <h1 class="my-3">{{ $project->title }}</h1>
        
            @if ($project->img)
                <img class="h-50 w-50 mb-3" src="{{ asset('storage/'. $project->img) }}" alt="img">  
            @endif
            
            <p>{{ $project->content }}</p>
        </div>

        <a href="{{ route('admin.projects.edit', $project->id) }}" class="btn btn-warning my-1">Modifica</a>

        <form action="{{ route('admin.projects.destroy', $project->id) }}" class="d-inline-block" method="POST">
            @csrf
            @method('DELETE')
            
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">
                elimina
            </button>
            
            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">conferma eliminazione</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                    sei sicuro di voler eliminare??
                    </div>
                    <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">no</button>
                    <button type="submit" class="btn btn-primary">Salva</button>
                    </div>
                </div>
                </div>
            </div>
        </form>
    </div>
@endsection