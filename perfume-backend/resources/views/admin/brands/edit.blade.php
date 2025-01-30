@extends('layouts.app')

@section('content')

<div class="container">

    <h1 class=" text-center">Modifica il Brand</h1>

    <form action="{{route('admin.brands.update', $brand)}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="mb-2">
            <label for="name" class="form-label">Nome Brand: <span class="text-danger">*</span></label>
            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name"
              value="{{ old('name') ?? $brand->name }}" required>
            @error('name')
            <div class="invalid-feedback">
              {{$message}}
            </div>
            @enderror
        </div>

       
        <button type="submit" class="btn btn-primary">Modifica Categoria</button>

    </form>

</div>

@endsection