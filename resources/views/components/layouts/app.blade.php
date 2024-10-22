<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'CasaConcierge' }}</title>
    {{-- Master - CSS --}}
    <link rel="stylesheet" href="{{ asset('assets/styles/master.css') }}">
    {{-- Bootstrap - CSS --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    {{-- Google Fonts - Noto Sans--}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

    @livewireStyles

    <style>
        a{
            text-decoration: none;
        }

        body{
            height: 100vh;
            width: 100%;
            margin: 0 auto;
        }
        .home_logo{
            color: #BF7B50;
        }

    </style>
</head>

<body>
    <header class="d-flex justify-content-between align-items-center p-3 bg-light">
        <div>
            <a class="home_logo fs-3" href="{{ route('home') }}">Casa<strong>Concierge</strong></a> <!-- Logo -->
        </div>
        @if (Route::has('login'))
            <nav class="d-flex flex-1 justify-end">
                @auth
                    <a href="{{ url('/dashboard') }}" class="btn btn-primary">
                        Dashboard
                    </a>
                @else
                    <a href="{{ route('login') }}" class="btn btn_custom_enter">
                        Entrar
                    </a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="btn btn_custom_register ms-2">
                            Registrar-se
                        </a>
                    @endif
                @endauth
            </nav>
        @endif
    </header>

    <main  class="container-fluid">
        {{ $slot }}
    </main>

    @livewireScripts
    {{-- Bootstrap - JS --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
