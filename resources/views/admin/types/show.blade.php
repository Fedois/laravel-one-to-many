@extends('layouts.admin')

@section('content')
    <div class="container mt-3">
        <a href="{{ route('admin.types.index') }}" class="btn btn-secondary mb-3">torna indietro</a>
        <h1>{{ $type->name }}</h1> 
        <span>slug: {{ $type->slug }}</span>

        <h3>progetti totali: {{ $type->projects()->count() }}</h3>
    </div>
@endsection