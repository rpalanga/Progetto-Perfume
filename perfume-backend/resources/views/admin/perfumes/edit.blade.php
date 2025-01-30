@extends('layouts.app')

@section('content')

<div class="container">

    <h1>Modifica il seguente prodotto</h1>

    <form action="{{route('admin.perfumes.update', $perfume)}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="mb-2">
            <label for="name" class="form-label">Nome Profumo: <span class="text-danger">*</span></label>
            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name"
              value="{{ old('name') ?? $perfume->name }}" required>
            @error('name')
            <div class="invalid-feedback">
              {{$message}}
            </div>
            @enderror
        </div>

        <div class="mb-2">
            <label for="img" class="form-label">Immagine: </label>
            <input type="link" class="form-control @error('img') is-invalid @enderror" id="img" name="img"
              value="{{ old('img') ?? $perfume->img  }}">
            @error('img')
            <div class="invalid-feedback">
              {{$message}}
            </div>
            @enderror
        </div>

        <div class="mb-2">
            <label for="description" class="form-label">Descrizione: </label>
            <input type="text" class="form-control @error('description') is-invalid @enderror" id="description" name="description"
              value="{{ old('description')  ?? $perfume->description  }}" required>
            @error('description')
            <div class="invalid-feedback">
              {{$message}}
            </div>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">Modifica Prodotto</button>

    </form>

</div>

@endsection