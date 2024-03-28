
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <link rel="shortcut icon" href="{{ asset('build/assets/img/logo-c.png') }}" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('build/assets/css/register.css') }}" />
    <script src="{{ asset('build/assets/js/register.js') }}" defer></script>
    <title>QuickTrade | Unete A Esta Familia</title>
  </head>
  <body>


      <form action="{{ route('register') }}" method="POST" class="form">
        @csrf

      <h1 class="text-center">Registrate</h1>

     
        <x-validation-errors/>
     
      <!-- Progress bar -->
      <div class="progressbar">
        <div class="progress" id="progress"></div>
        
        <div class="progress-step progress-step-active" data-title="Nombres"></div>
        <div class="progress-step" data-title="Contacto"></div>
        <div class="progress-step" data-title="Correo"></div>
        <div class="progress-step" data-title="Contraseña"></div>
      </div>

      <!-- Steps -->
      <div class="form-step form-step-active">
        <div class="input-group">
          <label for="username">Nombre</label>
          <input type="text" class="input" name="name" placeholder="Felipe" />
        </div>
        <div class="input-group">
          <label for="position">Apellido</label>
          <input type="text" class="input" name="last_name" placeholder="Cardona" />
        </div>
        <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">

            <a class="login" href="{{ route('login') }}">
                {{ __('¿Ya tienes cuenta? Ingresa con ella.') }}
            </a>
        </div>

        <div class="">
          <a href="#" class="btn btn-next width-50 ml-auto">Siguiente</a>
        </div>
      </div>
      <div class="form-step">
        <div class="input-group">
          <label for="phone">Direccion</label>
          <input class="input" type="text" name="address"  placeholder="Cr 10 87-47" />
        </div>
        <div class="input-group">
          <label for="email">Celular</label>
          <input class="input" type="number" name="cellphone"  placeholder="3105782903" />
        </div>
        <div class="btns-group">
          <a href="#" class="btn btn-prev">Anterior</a>
          <a href="#" class="btn btn-next">Siguiente</a>
        </div>
      </div>
      <div class="form-step">
        <div class="input-group">
          <label for="dob">Correo</label>
          <input class="input" type="email" name="email" placeholder="ejemplo@gmail.com"/>
        </div>
        <div class="input-group">
          <label for="dob">Documento</label>
          <input class="input" type="number" name="document" placeholder="1032636115"/>
        </div>
        <div class="btns-group">
          <a href="#" class="btn btn-prev">Anterior</a>
          <a href="#" class="btn btn-next">Siguiente</a>
        </div>
      </div>
      <div class="form-step">
        <div class="input-group">
          <label for="password">Contraseña</label>
          <input class="input" type="password" name="password" placeholder="ejemplo1234"/>
        </div>
        <div class="input-group">
          <label for="confirmPassword">Confirma Tu Contraseña</label>
          <input class="input" type="password" name="password_confirmation" placeholder="ejemplo1234"  />

            <div class="form-check d-flex justify-content-center mb-5">
                @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div>
                    <x-label for="terms">
                        <div class="flex items-center">

                            <x-checkbox name="terms" id="terms" required />   

                            <div class="ml-2 pt-2">

                                <x-guest-layout> 
                                   
                                    <p class="login"> Estoy de acuerdo con los
                                    <a class="href" href="{{ route('terms.show') }}">Terminos de servicio</a> 
                                    y <a class="href" href="{{ route('policy.show') }}">Politicas De Privacidad</a>
                                </p>
                                </x-guest-layout>
                        
                            </div>
                        </div>
                    </x-label>
                </div>
                @endif
            
        </div>
        </div>
        <div class="btns-group">
          <a href="#" class="btn btn-prev">Anterior</a>
          <button class="btn" >
            Registrarme
          </button>
        </div>
      </div>
        </form>
    
    </body>
 
