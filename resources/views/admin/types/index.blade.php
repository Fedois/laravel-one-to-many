@extends('layouts.admin')

@section('content')
<div class="container all-projects">
    <h1 class="my-3">Tutti i tipi di progetto</h1>

    @include('partials.success')

    {{-- <a href="{{ route('admin.projects.create') }}" class="btn btn-primary mb-2">Nuovo Type</a> --}}

    <ul class="list-group">
        @foreach ($types as $type)
            <li class="my-1 list-group-item list-group-item-action">
                <a href="{{ route('admin.types.show', $type->id) }}" class="text-dark text-decoration-none">

                    <span class="me-5">{{ $type->id }}</span>  {{ $type->name }}

                </a>
            </li>
        @endforeach
    </ul>
</div>
@endsection