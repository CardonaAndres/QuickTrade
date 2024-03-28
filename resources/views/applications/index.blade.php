
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
    <link rel="stylesheet" href="{{ asset('build/assets/css/request.css/index.css') }}">
    <link rel="stylesheet" href="{{ asset('build/assets/css/request.css/n_tooplip.css') }}">
    <link rel="shortcut icon" href="{{ asset('build/assets/img/logo-c.png') }}" type="image/x-icon">
</head>

<body>

<x-app-layout>

        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                QuickTrade | Solicitudes Hechas
            </h2>
            
           @can('request_type.index')
            <table id="table">
                <tr>
                    <td>
                        <x-dropdown >
                            <x-slot name="trigger">
                            
                                    <span class="inline-flex rounded-md">
                                        <button type="button" class="inline-flex items-center px-3 py-2 border border-transparent text-md leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-900 focus:outline-none focus:bg-green-100 active:bg-green-100 transition ease-in-out duration-150">
                                        <svg xmlns="http://www.w3.org/2000/svg" height="1.25em" viewBox="0 0 448 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><style>svg{fill:#166534}</style><path d="M0 96C0 78.3 14.3 64 32 64H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32C14.3 128 0 113.7 0 96zM0 256c0-17.7 14.3-32 32-32H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32c-17.7 0-32-14.3-32-32zM448 416c0 17.7-14.3 32-32 32H32c-17.7 0-32-14.3-32-32s14.3-32 32-32H416c17.7 0 32 14.3 32 32z"/></svg>
        
                                            <svg class="ml-2 -mr-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                                            </svg>
                                        </button>
                                    </span>
                            
                            </x-slot>
                        
                            <x-slot name="content">
                                
                                <div class="block px-4 py-2 text-xs text-green-700">
                                    Opciones De Soliciurd
                                </div>
        
                                <x-dropdown-link href="{{ route('request_type.index') }}">
                                    <table>
                                        <tr>
                                            <td class="px-1">
                                            <svg xmlns="http://www.w3.org/2000/svg" height="0.875em" viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><style>svg{fill:#146537}</style><path d="M0 96C0 60.7 28.7 32 64 32H196.1c19.1 0 37.4 7.6 50.9 21.1L289.9 96H448c35.3 0 64 28.7 64 64V416c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V96zM64 80c-8.8 0-16 7.2-16 16V416c0 8.8 7.2 16 16 16H448c8.8 0 16-7.2 16-16V160c0-8.8-7.2-16-16-16H286.6c-10.6 0-20.8-4.2-28.3-11.7L213.1 87c-4.5-4.5-10.6-7-17-7H64z"/></svg>
                                            </td>
        
                                            <td id="t_toolip">
                                                <button class="con-tooltip left">
                                                    <p> Solicitudes </p>
                                                
                                                    <div class="tooltip ">
                                                    <p>Como administrador podras, 
                                                        crear tipos de solicitudes, borrar, 
                                                        editar y ver información detallada de la misma</p>
                                                    </div> 
                                            </td>
                                        </tr>
                                    </table>
                                </x-dropdown-link>

                            
                            </x-slot>
                        </x-dropdown>
                    
                    </td>
                </tr>
            </table>
           @endcan

           
                    @if(session('success'))
                    <div class="alert alert-success pt-3 d-flex border border-1 border-radius border-success">
                        <strong>
                            {{ session('success') }}
                        </strong>
                    </div>
                @endif

                @if(session('delete'))
                <div class="alert alert-danger text-danger pt-3 d-flex border border-1 border-radius border-danger">
                    <strong>
                        {{ session('delete') }}
                    </strong>
                </div>
                @endif

           <table id="table">
                <tr>
                    <td>
                        <x-dropdown >
                            <x-slot name="trigger">
                            
                                    <span class="inline-flex rounded-md">
                                        <button type="button" class="inline-flex items-center px-3 py-2 border border-transparent text-md leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-900 focus:outline-none focus:bg-green-100 active:bg-green-100 transition ease-in-out duration-150">
                                            <svg xmlns="http://www.w3.org/2000/svg" height="1.25em" viewBox="0 0 448 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><style>svg{fill:#166534}</style><path d="M224 256A128 128 0 1 1 224 0a128 128 0 1 1 0 256zM209.1 359.2l-18.6-31c-6.4-10.7 1.3-24.2 13.7-24.2H224h19.7c12.4 0 20.1 13.6 13.7 24.2l-18.6 31 33.4 123.9 36-146.9c2-8.1 9.8-13.4 17.9-11.3c70.1 17.6 121.9 81 121.9 156.4c0 17-13.8 30.7-30.7 30.7H285.5c-2.1 0-4-.4-5.8-1.1l.3 1.1H168l.3-1.1c-1.8 .7-3.8 1.1-5.8 1.1H30.7C13.8 512 0 498.2 0 481.3c0-75.5 51.9-138.9 121.9-156.4c8.1-2 15.9 3.3 17.9 11.3l36 146.9 33.4-123.9z"/></svg>
        
                                            <svg class="ml-2 -mr-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                                            </svg>
                                        </button>
                                    </span>
                            
                            </x-slot>
                        
                            <x-slot name="content">
                                
                                <div class="block px-4 py-2 text-xs text-green-700">
                                    Opciones De Soliciurd
                                </div>
        
                                <x-dropdown-link href="{{ route('applications.create') }}">
                                    <table>
                                        <tr>
                                            <td class="px-1">
                                            <svg xmlns="http://www.w3.org/2000/svg" height="0.875em" viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><style>svg{fill:#146537}</style><path d="M0 96C0 60.7 28.7 32 64 32H196.1c19.1 0 37.4 7.6 50.9 21.1L289.9 96H448c35.3 0 64 28.7 64 64V416c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V96zM64 80c-8.8 0-16 7.2-16 16V416c0 8.8 7.2 16 16 16H448c8.8 0 16-7.2 16-16V160c0-8.8-7.2-16-16-16H286.6c-10.6 0-20.8-4.2-28.3-11.7L213.1 87c-4.5-4.5-10.6-7-17-7H64z"/></svg>
                                            </td>
        
                                            <td id="t_toolip">
                                                <button class="con-tooltip left">
                                                    <p> Solicitudes </p>
                                                
                                                    <div class="tooltip ">
                                                    <p>¿Quieres hablar con nosotros? Crea una solicitud</p>
                                                    </div> 
                                            </td>
                                        </tr>
                                    </table>
                                </x-dropdown-link>

                            
                            </x-slot>
                        </x-dropdown>
                    
                    </td>
                </tr>
            </table>

        </x-slot>

  <div class="py-1">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
          <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                      
          </div>
      </div>
  </div>

  <div class="container">

    @foreach ($applications as $application)
        <div class="card">
            <div class="header">
            <span id="icon">
                <svg fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path clip-rule="evenodd" d="M18 3a1 1 0 00-1.447-.894L8.763 6H5a3 3 0 000 6h.28l1.771 5.316A1 1 0 008 18h1a1 1 0 001-1v-4.382l6.553 3.276A1 1 0 0018 15V3z" fill-rule="evenodd"></path>
                </svg>
            </span>
            <p class="alert"><b>Tipo De Solicitud: </b>{{ $application->name }}</p>
            </div>
        
            <p class="message">
             <b>Tu Respuesta fue: </b>{{ $application->answer }}
            </p>

            <p class="message">
                <b>Fecha: </b>{{ $application->created_at }}
            </p>
        
            <div class="actions">
            <a class="read" href="{{ route('applications.edit',$application->id) }}">
                Editar
            </a>
        
            <form action="{{ route('applications.destroy',$application->id) }}" method="post">
                @csrf
                @method('DELETE')
                <button class="mark-as-read" href="">
                    Borrar
                </button>
            </form>
            </div>
        </div>
    @endforeach
  </div>




      

      

</x-app-layout>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
  integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
  integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
</script>
</body>


