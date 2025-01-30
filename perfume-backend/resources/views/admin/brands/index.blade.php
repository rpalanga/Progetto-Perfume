@extends('layouts.app')

@section('content')
<div class="container py-4">
    <h1 class="text-center mb-4">Ecco il Riassunto dei Tuoi Brand:</h1>
    
    <ul class="list-group mb-4">
        @foreach ($brands as $brand)
            <li class="list-group-item d-flex justify-content-between align-items-center">
                <span>{{ $brand->name }}</span>
                <div>
                    <a class="btn btn-secondary btn-sm" href="{{ route('admin.brands.edit', $brand) }}">Modifica</a>
                    <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modal-{{$brand->id}}">Elimina</button>
                </div>
            </li>

            <!-- Modal di conferma eliminazione -->
            <div class="modal fade" id="modal-{{$brand->id}}" tabindex="-1" aria-labelledby="modalLabel-{{$brand->id}}" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="modalLabel-{{$brand->id}}">Elimina il brand</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            Sei sicuro di voler eliminare il brand "{{$brand->name}}"?
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annulla</button>
                            <form action="{{ route('admin.brands.destroy', $brand) }}" method="POST" class="d-inline">
                                @csrf
                                @method("DELETE")
                                <button class="btn btn-danger">Elimina</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </ul>

    <div class="d-flex justify-content-center gap-3">
        <a class="btn btn-primary" href="{{ route('admin.brands.create') }}">Crea un nuovo Brand</a>
        <a class="btn btn-secondary" href="{{ route('dashboard') }}">Torna alla Dashboard</a>
    </div>
</div>
@endsection