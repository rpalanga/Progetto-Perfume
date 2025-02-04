@extends('layouts.app')

@section('content')

<div class="container">
    <!-- Contenitore con immagine di background -->
    <div class="welcome-container" style="background-image: url('https://images.pexels.com/photos/1047530/pexels-photo-1047530.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2');">
        <div class="welcome-content text-center">
            <h1 class="fs-1 text-white">Benvenuto nelle Gestione Admin delle Perfume App <br> {{ Auth::user()->name }}</h1>

            <div class="row justify-content-center mt-5">
                <div class="col-md-6">
                    <div class="card bg-transparent border-light">
                        <div class="card-body">
                            <h2 class="card-title text-white">Cosa vuoi fare oggi?</h2>
                            <p class="card-text text-white">Scegli una delle opzioni qui sotto per iniziare.</p>

                            <div class="d-grid gap-3">
                                <a class="btn  btn-lg text-decoration-none" style="background-color: #b0c4de;" href="{{ route('admin.brands.index') }}">
                                    Vai alla sezione dedicata ai Brand
                                </a>
                                <a class="btn btn-lg text-decoration-none" style="background-color: #b0c4de;" href="{{ route('admin.perfumes.index') }}">
                                    Vai alla sezione dedicata ai Profumi
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Stili personalizzati -->
<style>
    .welcome-container {
        background-size: cover; 
        background-position: center; 
        background-repeat: no-repeat;
        height: 70vh; 
        display: flex;
        align-items: center; 
        justify-content: center;
        border-radius: 15px; 
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); 
        position: relative; 
        
        .welcome-content {
            background-color: rgba(0, 0, 0, 0.5);
            padding: 2rem;
            border-radius: 10px;
            width: 100%; 
            max-width: 800px;
        }
        
        .text-white {
            color: white !important; 
        }
        @media (max-width: 768px) {
            .welcome-container {
                min-height: 50vh; 
                border-radius: 0; /
            }
            
            .welcome-content {
                padding: 1rem; 
                width: 80%;
            }
            
            .btn-lg {
                font-size: 1rem; 
                padding: 0.5rem 1rem; 
            }
        }
        @media (max-with:992px){
            .welcome-container {
                min-height: 60vh; 
                border-radius: 0; /
            }
            
            .welcome-content {
                padding: 1rem; 
                width: 80%;
            }
            
            .btn-lg {
                font-size: 1rem; 
                padding: 0.5rem 1rem; 
            }
        }
    }
</style>

@endsection