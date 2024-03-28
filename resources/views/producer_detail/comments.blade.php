<head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="{{ asset('build/assets/img/logo-c.png') }}" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('build/assets/css/comment/table.css') }}">
  
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  
  </head>
  
  <body>
  
  <x-app-layout>
  
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            QuickTrade | Comentarios Del Producto De Los Usuarios
        </h2>
    </x-slot>

    <div class="container">
        <div id="card">          
            <table class="table table-striped" id="table">
              <thead class="thead-green">
                <tr>
                  <th id="th">Opiniones De Los Usuarios</th>
                  <th id="th">Fecha </th>
                </tr>
              </thead>
              
              <tbody>
                @foreach ($comments as $comment)                                
                <tr>
                  <td id="td">
                    {{ $comment->comment_ad }}   
                  </td>    
                  <td id="td">
                   {{ $comment->created_at }}
                  </td>
                
                </tr>  
            
              </tbody>
              @endforeach   
                <tfoot>
                  <tr>
                      <td>
                          <a href="{{ route('products.index') }}" class="p-3">
                              <button id="back-button">
                                  Volver
                              </button>
                          </a>
                      </td>
                      <td>
                       
                      </td>
                  </tr>
                </tfoot>
            </table>
        </div>


    </td>
  </tr>
</table>     
  
  
    
        
  
  </x-app-layout>
  
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>
  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
  </body>
  
  
  