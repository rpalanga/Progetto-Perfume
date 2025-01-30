@extends('layouts.app')

@section('content')

<div class="container">

    <h1 class="fs-1 text-center">Benvenuto nella tua sezione</h1>

   

    <div class="row">
        <div>
            <a class="btn btn-secondary text-decoration-none" href="{{route('admin.brands.index')}}">Vai alla sezione dedicataai Brand</a>
        </div>
        <div>
            <a class="btn btn-secondary text-decoration-none" href="{{route('admin.perfumes.index')}}">Vai alla sezione dedicataai Profumi</a>

        </div>

    </div>

</div>

@endsection