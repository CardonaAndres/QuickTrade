
<head>
  
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="{{ asset('build/assets/img/logo-c.png') }}" type="image/x-icon">
    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('build/assets/css/admin/edit.css') }}">

  </head>
  
  <body>
      
      <x-app-layout>
  
          <x-slot name="header">
              <table>
               <tr>
                  <td>
                      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                        Edita El Rol De Tu Usuario, {{ Auth::user()->name }}
                     </h2>
                  </td> 
               </tr>
              </table>
            </x-slot>
        
           
           

             

            <div class="container">
              <form action="{{ route('users.update', $user->id) }}" method="post">

                @csrf
                @method('PUT')
     
                <div class="card columns">
                
                    <div class="button-container">
                      <button class="btn ">Usuario: {{ $user->name }} {{ $user->last_name }}</button>
                      
                    </div>
                    <p class="secondary-heading">SELECCIONA UN ROL PARA TU USUARIO: </p>
                    <br>
                    <ul class="pb-3">
                      <select class="select" name="roles" id="">
                        @foreach ($roles as $role)
                         <option class="option" value="{{ $role->id }}">{{ $role->name }}</option>    
                        @endforeach
                      </select>
                    </ul>
                    <br>
                    
                    <button id="btn" type="submit">
                      Actualizar Rol
                    </button>
                    
                      
                    
                    </p>
                  </div>
              </form>
            </div>
      
      </x-app-layout>
  
  
  </body>
  
  
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
      integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>
  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
      integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
    </script>
  
  
  </html>