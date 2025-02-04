<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Perfumes</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Styles / Scripts -->
        @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
            @vite(['resources/sass/app.scss', 'resources/js/app.js'])
        @else
           
        @endif
    </head>
    <body class="bg-light">
    <div class="d-flex flex-column min-vh-100 justify-content-center align-items-center">
        <div class="text-center mb-4">
            <h1 class="display-2 fw-bold">Benvenuto nella sezione Dedicata all'amministazione di Perfume App</h1>
            <p class="lead text-muted">Per proseguire clicca su Login o Registrati.</p>
        </div>
        <div class="d-flex gap-3">
            @if (Route::has('login'))
                @auth
                    <a href="{{ url('/dashboard') }}" class="btn btn-primary btn-lg">
                        Dashboard
                    </a>
                @else
                    <a href="{{ route('login') }}" class="btn btn-primary btn-lg">
                        Log in
                    </a>
                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="btn btn-success btn-lg">
                            Registrati
                        </a>
                    @endif
                @endauth
            @endif
        </div>
    </div>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
