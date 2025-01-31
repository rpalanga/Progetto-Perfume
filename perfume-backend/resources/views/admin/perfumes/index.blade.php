@extends('layouts.app')

@section('content')

<div class="container">
    <h1 class=" text-center py-3 fw-bolder">Catalogo dei Profumi</h1>
    <div class="container mt-4">
        
        <div class="row">
            @foreach ($perfumes as $perfume)
            
                <div class="col-md-4">
                    <div class="card mb-4 shadow-sm">
                        @if ($perfume->img)
                        <a href="{{route('admin.perfumes.show',$perfume->id)}}">
                            <img src="{{ $perfume->img }}" class="card-img-top" alt="{{ $perfume->name }}">

                        </a>
                        @else
                            <img src="https://via.placeholder.com/300" class="card-img-top" alt="Immagine non disponibile">
                        @endif
                        <div class="card-body">
                            <h5 class="card-title">{{ $perfume->name }}</h5>
                            <p class="card-text">{{ $perfume->description ?? 'Nessuna descrizione disponibile' }}</p>
                            <p class="card-text"><strong>Brand:</strong> {{ $perfume->brand->name }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <a class=" btn btn-primary text-decoration-none" href="{{route('dashboard')}}" role="button">Torna alla Dashboard</a>
    <a class="btn btn-secondary text-decoration-none" href="{{route('admin.perfumes.create')}}">Aggiungi un Nuovo Profumo</a>
</div>

@endsection