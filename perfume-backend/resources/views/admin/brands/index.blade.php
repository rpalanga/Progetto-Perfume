@extends('layouts.app')

@section('content')

<div class="container">
    <h1>CIao a tutti</h1>
    <ul>
        @foreach ($brands as $brand )
        
        <li>{{$brand->name}}</li>
        
        @endforeach

    </ul>
    <a class="text-decoration-none" href="{{route('dashboard')}}" class=" btn-info">Torna alla Dashboard</a>
</div>

@endsection