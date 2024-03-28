
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
    <link rel="stylesheet" href="{{ asset('build/assets/css/request_type/index.css') }}">
    <link rel="stylesheet" href="{{ asset('build/assets/css/request.css/n_tooplip.css') }}">

</head>

<body>

<x-app-layout>

        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                QuickTrade | Los Tipos De Solicitudes De Tu Pagina Son: 
            </h2>
           
            <table id="table">
                <tr>
                   <td>
                    <div class="">
                      <x-dropdown align="right" width="">
                          <x-slot name="trigger">
                          
                                  <span class="inline-flex rounded-md border-green-900">
                                      <button type="button" class="inline-flex items-center px-3 py-2 border border-transparent text-md leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-900 focus:outline-none focus:bg-green-100 active:bg-green-100 transition ease-in-out duration-150">
                                           Opciones De Solicitudes            
                                          <svg class="ml-2 -mr-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                              <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                                          </svg>
                                      </button>
                                  </span>
                          
                          </x-slot>
  
                      
  
                          <x-slot name="content">
                              <!-- Account Management -->
                              <div class="block px-4 py-2 text-xs text-green-700">
                                  {{ __('Solicitudes') }}
                              </div>

  
                              <x-dropdown-link href="{{ route('request_type.create') }}">
                                  <table>
                                      <tr>
                                          <td class="px-1">
                                              <svg xmlns="http://www.w3.org/2000/svg" height="1.25em" viewBox="0 0 576 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><style>svg{fill:#166534}</style><path d="M112 48a48 48 0 1 1 96 0 48 48 0 1 1 -96 0zm40 304V480c0 17.7-14.3 32-32 32s-32-14.3-32-32V256.9L59.4 304.5c-9.1 15.1-28.8 20-43.9 10.9s-20-28.8-10.9-43.9l58.3-97c17.4-28.9 48.6-46.6 82.3-46.6h29.7c33.7 0 64.9 17.7 82.3 46.6l44.9 74.7c-16.1 17.6-28.6 38.5-36.6 61.5c-1.9-1.8-3.5-3.9-4.9-6.3L232 256.9V480c0 17.7-14.3 32-32 32s-32-14.3-32-32V352H152zM432 224a144 144 0 1 1 0 288 144 144 0 1 1 0-288zm0 240a24 24 0 1 0 0-48 24 24 0 1 0 0 48zM368 321.6V328c0 8.8 7.2 16 16 16s16-7.2 16-16v-6.4c0-5.3 4.3-9.6 9.6-9.6h40.5c7.7 0 13.9 6.2 13.9 13.9c0 5.2-2.9 9.9-7.4 12.3l-32 16.8c-5.3 2.8-8.6 8.2-8.6 14.2V384c0 8.8 7.2 16 16 16s16-7.2 16-16v-5.1l23.5-12.3c15.1-7.9 24.5-23.6 24.5-40.6c0-25.4-20.6-45.9-45.9-45.9H409.6c-23 0-41.6 18.6-41.6 41.6z"/></svg>
                                          </td>
  
                                          <td>
                                             Agregar Tipo De Solicitud
                                          </td>
                                      </tr>
                                  </table>
                              </x-dropdown-link>        
                              <x-dropdown-link href="{{ route('applications_all') }}">
                                <table>
                                    <tr>
                                        <td class="px-1">
                                            <svg xmlns="http://www.w3.org/2000/svg" height="1.25em" viewBox="0 0 576 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><style>svg{fill:#166534}</style><path d="M112 48a48 48 0 1 1 96 0 48 48 0 1 1 -96 0zm40 304V480c0 17.7-14.3 32-32 32s-32-14.3-32-32V256.9L59.4 304.5c-9.1 15.1-28.8 20-43.9 10.9s-20-28.8-10.9-43.9l58.3-97c17.4-28.9 48.6-46.6 82.3-46.6h29.7c33.7 0 64.9 17.7 82.3 46.6l44.9 74.7c-16.1 17.6-28.6 38.5-36.6 61.5c-1.9-1.8-3.5-3.9-4.9-6.3L232 256.9V480c0 17.7-14.3 32-32 32s-32-14.3-32-32V352H152zM432 224a144 144 0 1 1 0 288 144 144 0 1 1 0-288zm0 240a24 24 0 1 0 0-48 24 24 0 1 0 0 48zM368 321.6V328c0 8.8 7.2 16 16 16s16-7.2 16-16v-6.4c0-5.3 4.3-9.6 9.6-9.6h40.5c7.7 0 13.9 6.2 13.9 13.9c0 5.2-2.9 9.9-7.4 12.3l-32 16.8c-5.3 2.8-8.6 8.2-8.6 14.2V384c0 8.8 7.2 16 16 16s16-7.2 16-16v-5.1l23.5-12.3c15.1-7.9 24.5-23.6 24.5-40.6c0-25.4-20.6-45.9-45.9-45.9H409.6c-23 0-41.6 18.6-41.6 41.6z"/></svg>
                                        </td>

                                        <td>
                                            Ver Todas Las Solicitudes Hechas
                                        </td>
                                    </tr>
                                </table>
                            </x-dropdown-link>       
                          </x-slot>
                          
                      </x-dropdown>
                  </div> 
                    </button>
                   </td>
                </tr>
                
              
            </table>
            
        </x-slot>

        @if(session('success'))
            <div class="alert alert-success pt-3 d-flex border border-1 border-radius border-success">
                <strong>
                    {{ session('success') }}
                </strong>
            </div>
         @endif

         @if(session('delete'))
         <div class="alert alert-danger pt-3 d-flex border border-1 border-radius border-danger">
             <strong>
                 {{ session('delete') }}
             </strong>
         </div>
      @endif


  @foreach ($request_type as $request_type )
  <table class="inline">
    <tr>
      <td class="pl-5 pr-1">

        <div class="card">
          
            <span class="h3 text-success">{{ $request_type->name }}</span>
            <div class="card__content">
              <p class="card__title">{{ $request_type->name }}</p>
              <p class="card__description">{{ $request_type->description }}</p>
              <p class="card__description"></p>
              
                <x-button >
                  <a href="{{ route('request_type.edit',$request_type->id) }}">Editar</a>
                </x-button>
              
                <form class="py-1" action="{{ route('request_type.destroy',$request_type->id) }}" method="POST">

                  @csrf
                  @method('DELETE')

                  <x-danger-button  type="submit">
                    Borrar
                  </x-danger-button>

                </form>
              
            </div>

        </div>
      
      </td>
    </tr>
  </table>
    
  @endforeach


 



      

      

</x-app-layout>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
  integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
  integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
</script>
</body>


