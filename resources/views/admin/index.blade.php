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
          <td>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
              Hola ADMIN, {{ Auth::user()->name }}
           </h2>
          </td> 
         
        </table>
      </x-slot>
  

      @if(session('info'))
        <div class="alert alert-success">
           <strong>{{ session('info') }}</strong>
        </div>
      @endif

      @if(session('info_delete'))
        <div class="alert alert-danger">
           <strong>{{ session('info_delete') }}</strong>
        </div>
      @endif

      <div class="container pt-4">
        <div class="card">
          <div class="card-body shadow-md">
            <table class="table table-striped table-hover shadow-md">
              <thead class="thead-green">
                <tr>
                  <th>Id</th>
                  <th>Usuarios</th>
                  <th>Roles</th>
                  <th style="padding-inline 20%">Opciones</th>
                  <th></th>
                  
                </tr>
              </thead>
              @foreach ($users as $user)
              <tbody>
                                 
                <tr>
                  <td>
                    {{ $user->user_id }}    
                  </td>     
                  <td> 
                     {{ $user->user_name }} {{ $user->last_name }}    
                  </td>
                  <td> 
                     {{ $user->role }}    
                  </td>

                  <td>
                    <x-button>
                      <a href="{{ route('users.edit',$user->user_id) }}">Editar</a>
                    </x-button>
                  </td>

                  <td>
                    <form action="{{ route('users.destroy',$user->user_id) }}" method="post">
                      @csrf
                      @method('DELETE')
                      <x-danger-button type="submit">
                        Borrar
                      </x-danger-button>
                    
                    </form>
                  </td>
                </tr>  
            
              </tbody>
                
              @endforeach

            
            </table>

            {{ $users->links() }}

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
  
  
  