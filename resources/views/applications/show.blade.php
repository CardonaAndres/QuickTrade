
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<head>
   
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('build/assets/css/application-css/show.css') }}">
    <link rel="shortcut icon" href="{{ asset('build/assets/img/logo-c.png') }}" type="image/x-icon">
</head>

<body>

<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            QuickTrade | Información Detallada De La Solicitud
        </h2>
    </x-slot>

  <div class="py-1">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
          <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                      
          </div>
      </div>
  </div>

  <div class="container">
     
    <div class="card columns">
     
        <div class="button-container">
          <button class="btn red-flag">Tipo: {{ $request_type->name }}</button>
          <p class="offer">Usuario: {{ $user->name }}</p>
        </div>
        <p class="secondary-heading">Respuesta: </p>
        <ul class="pb-3">
           {{ $application->answer }}
        </ul>
        <p class="card-description"><b>DATOS DEL USUARIO: </b>
          <br>
          <ul>
            <b>Nombre Completo: </b>{{ $user->name }} {{ $user->last_name }}
          </ul>
          <ul>
             <b>Correo: </b>{{ $user->email }}
          </ul>
          <ul>
            <b>Celular: </b> {{ $user->cellphone  }}
          </ul>
          <ul>
            <b>Dirrección: </b>{{ $user->address }}
          </ul>
        
        </p>
      </div>

  </div>

  
      

</x-app-layout>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
  integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
  integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
</script>
</body>


