@extends('layouts.app')

@section('content')

<div class="container py-5">
    <div class="mb-3 card">
        <img src="{{$perfume->img}}" class="card-img-top" alt="immagine">
        <div class="card-body">
            <h5 class="card-title">Nome del profumo: {{ $perfume->name }}</h5>
            <p class="card-text">Descrizione:<br>{{ $perfume->description }}</p>
            
        </div>
    </div>

    <div class="py-5">
        <a href="{{route('admin.perfumes.edit', $perfume)}}" class="btn btn-warning">Modifica</a>
        
        <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">Elimina</button>
                        
        <a href="{{route('admin.perfumes.index')}}" class="btn btn-primary">Torna ai tuoi prodotti</a>
    </div>

    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered ">
            <div class="modal-content">

                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Elimina il prodotto</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body">
                    Sei sicuro di voler eliminare il prodotto? "{{$perfume->name}}"
                </div>


                <div class="modal-footer">

                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annulla</button>
                    <form action="{{route('admin.perfumes.destroy', $perfume)}}" method="POST">
                        @csrf
                        @method("DELETE")

                        <button class="btn btn-danger">Elimina</button>
                    </form>

                </div>

            </div>
        </div>
</div>

@endsection