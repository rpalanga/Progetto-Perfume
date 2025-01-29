@extends('layouts.app')

@section('content')

<div class="container">
    <h1>CIao a tutti Siete Nei Profumi</h1>
    <ul>
        @foreach ($perfumes as $perfume )
        
        <li>{{$perfume->name}}</li>
        
        @endforeach

    </ul>
    <a href="{{route('dashboard')}}" class=" btn-info">Torna alla Dashboard</a>
</div>

@endsection