<head>
  
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="{{ asset('build/assets/css/admin/table.css') }}">
    <link rel="shortcut icon" href="{{ asset('build/assets/img/logo-c.png') }}" type="image/x-icon">
  
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  
  </head>
  
  <body>
  
  <x-app-layout>
  
      <x-slot name="header">
        <table>
         <tr>
            <td>
                <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                  QuickTrade | Todas Las Solicitudes
               </h2>
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

      <div class="container p-5 m-2">
        <div class="card">
          <div class="card-body shadow-md">
            <table class="table table-striped table-hover shadow-md">
              <thead class="thead-green">
                <tr>
                  <th>Usuario</th>
                  <th>Tipo De Solicitud</th>
                  <th >Opciones</th>
                  <th></th>
                </tr>
              </thead>
             @foreach ($applications as $application)

             <tbody>
                <tr>
                  <td>
                    {{ $application->user_name }}
                  </td>
                  <td>
                    {{ $application->name }}
                  </td>
                  <td>
                    <x-button>
                        <a href="{{ route('applications.show',$application->id) }}">Información Detallada</a>
                    </x-button>
                  </td>
                  <td>
                    <form action="{{ route('applications.destroy',$application->id) }}" method="post">

                        @csrf
                        @method('DELETE')

                        <button type="submit">
                            <i class="fa-solid fa-trash fa-lg" style="color: #fe0101;"></i>
                        </button>

                        <x-danger-button type="submit">
                         Borrar
                        </x-danger-button>

                        

                    </form>
                  </td>
                </tr>

               
                
              </tbody>
                 
             @endforeach
            </table>
            
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
  
  
  