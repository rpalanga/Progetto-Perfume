@extends('layouts.app')

@section('content')

<div class="container">
    <h1>Inserisci un nuovo Profumo</h1>

    <form action="{{route('admin.perfumes.store')}}" method="POST" enctype="multipart/form-data" >
        @csrf

        <div class="mb-2">
            <label for="name" class="form-label">Nome Profumo: <span class="text-danger">*</span></label>
            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name"
              value="{{ old('name') }}" required>
            @error('name')
            <div class="invalid-feedback">
              {{$message}}
            </div>
            @enderror
        </div>

        <div class="mb-2">
            <label for="description" class="form-label">Descrizione: </label>
            <input type="text" class="form-control @error('description') is-invalid @enderror" id="description" name="description"
              value="{{ old('description') }}" >
            @error('description')
            <div class="invalid-feedback">
              {{$message}}
            </div>
            @enderror
        </div>

        <div class="mb-2">
            <label for="img" class="form-label">Immagine: </label>
            <input type="text" class="form-control @error('img') is-invalid @enderror" id="img" name="img"
              value="{{ old('img') }}">
            @error('img')
            <div class="invalid-feedback">
              {{$message}}
            </div>
            @enderror
        </div>


        <div class="mb-3">
            <label for="brand_id" class="form-label">Seleziona il Brand</label>
            <select class="form-select @error('brand_id') is-invalid @enderror" id="brand_id" name="brand_id" required>
                @foreach($brands as $brand)
                    <option value="{{ $brand->id }}" {{ old('brand_id') == $brand->id ? 'selected' : '' }}>
                        {{ $brand->name }}
                    </option>
                @endforeach
            </select>
            @error('brand_id')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">AGGIUNGI</button>

    </form>
</div>

@endsection