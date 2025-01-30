@extends('layouts.app')

@section('content')

<div class="container">
    <h1>Inserisci un Nuovo Brand</h1>

    <form action="{{route('admin.brands.store')}}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="mb-2">
            <label for="name" class="form-label">Nome del Brand <span class="text-danger">*</span></label>
            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name"
              value="{{ old('name') }}" required>
            @error('name')
            <div class="invalid-feedback">
              {{$message}}
            </div>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">AGGIUNGI</button>

    </form>
</div>

@endsection