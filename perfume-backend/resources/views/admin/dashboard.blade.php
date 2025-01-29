@extends('layouts.app')

@section('content')

<div class="container">
    
    <h1 class="fs-1">Benvenuto nella tua sezione</h1>
    
    <p>Benvenuto</p>
    <a class="text-decoration-none" href="{{route('admin.brands.index')}}">Vai alla sezione dedicata ai Brand</a><br>
    <a class="text-decoration-none" href="{{route('admin.perfumes.index')}}">Vai alla sezione dedicata ai Profumi</a>
</div>

@endsection