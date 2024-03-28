
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<head>
    <style>
        #table{
            float: right;
        }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('build/assets/css/request.css/n_tooplip.css') }}">
    <link rel="stylesheet" href="{{ asset('build/assets/css/request.css/create.css') }}">
    <link rel="shortcut icon" href="{{ asset('build/assets/img/logo-c.png') }}" type="image/x-icon">
</head>

<body>

<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            QuickTrade | Crea Tu Solicitud
        </h2>
        
    </x-slot>

  <div class="py-1">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
          <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                      
          </div>
      </div>
  </div>

    <div class="container">
        <form action="{{ route('applications.store') }}" method="post">
            @csrf
            <div class="card">
                <p class="singup">Crea Tu Solicitud</p>
                <div class="inputBox1">
                    <span>Elige Tu Tipo De Solicitud</span>
                    <select name="rtype_id"  required="required">
                        @foreach ($request_type as $request_type )
                         <option value="{{ $request_type->id }}">{{ $request_type->name }}</option>
                        @endforeach
                    </select>
                    
                </div>
    
                <div class="inputBox">
                    <textarea name="answer" id="" cols="30" rows="5"></textarea>
                    <span>Hola, ¿Qué nos quieres decir?</span>
                    <select name="user_id" class="hidden" required="required">                      
                        <option value="{{ Auth::user()->id }}"></option>
                   </select>
                </div>
    
                <button type="submit" class="enter">Crear Solicitud</button>
    
            </div>
        </form>

        <div id="info">
            <div id="card">
                <p>
                    <i>Nuestro equipo de administradores de <b>QuickTrade</b> resolverá tu solicitud lo antes posible, 
                        ten en cuenta que la respuesta que te brindaremos será enviada a la dirección de correo
                         electrónico con la cual te registraste a la plataforma.
                    </i>
                </p>
            </div>
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


