<x-guest-layout>
    
    <head>
        <meta charset="utf-8">
        
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="shortcut icon" href="{{ asset('build/assets/img/logo-c.png') }}" type="image/x-icon">
        <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>

        <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
        <!-- Bootstrap CSS v5.2.1 -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"

            integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

        <link rel="stylesheet" href="{{ asset('build/assets/css/login.css') }}">

        <link rel="shortcut icon" href="{{ asset('build/assets/img/logo-c.png') }}" type="image/x-icon">
    </head>

    <body>
        <section>
            <form method="POST" action="{{ route('login') }}">
                @csrf

                <h1>Bienvenido</h1>

                <p>
                    <x-validation-errors class="mb-4" />
                </p>

                <div class="inputbox">
                    <ion-icon name="mail-outline"></ion-icon>
                    <input type="email" name="email" required>
                    <label >Correo</label>
                </div>
                <div class="inputbox">
                    <ion-icon name="lock-closed-outline"></ion-icon>
                    <input type="password" name="password" required>
                    <label >Contraseña</label>
                </div>
                <div class="forget">
                    <label for="remember_me" class="flex items-center">
                        <x-checkbox  name="remember" />
                        <span class="ml-2 text-sm">{{ __('Recuerdame') }}</span>
                    </label>
                </div>
                <button >
                    Iniciar Sesion
                </button>
                <div class="register">
                    @if (Route::has('password.request'))
                     <a href="{{ route('password.request') }}">
                        <p>Olvidé Mi <a href="{{ route('password.request') }}">Contraseña</a></p>
                     </a>    
                    @endif
                </div>
                <div class="register">
                    <a href="{{ route('register') }}">
                        <p>Soy Nuevo Me Quiero <a href="{{ route('register') }}">Registrar</a></p>
                    </a>
                </div>
            </form>
        </section>
    </body>









</x-guest-layout>