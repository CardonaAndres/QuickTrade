<head>
  
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="{{ asset('build/assets/css/admin/table.css') }}">

    <link rel="stylesheet" href="{{ asset('build/assets/css/styles/tooltip.css') }}">
  
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
                  Aca Podrás Crear, Editar, Borrar Los Tipos De Productos Disponibles En Tu Pagina
               </h2>
            </td> 
            <td style="padding-inline: 30%">

              <div class="uiverse">
                <span class="tooltip">Nuevo Producto</span>
                <span>
                  <a href="{{ route('products.create') }}">
                    <svg xmlns="http://www.w3.org/2000/svg" height="2em" viewBox="0 0 448 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><style>svg{fill:#146537}</style><path d="M64 32C28.7 32 0 60.7 0 96V416c0 35.3 28.7 64 64 64H384c35.3 0 64-28.7 64-64V96c0-35.3-28.7-64-64-64H64zM200 344V280H136c-13.3 0-24-10.7-24-24s10.7-24 24-24h64V168c0-13.3 10.7-24 24-24s24 10.7 24 24v64h64c13.3 0 24 10.7 24 24s-10.7 24-24 24H248v64c0 13.3-10.7 24-24 24s-24-10.7-24-24z"/></svg>
                  </a>
                </span>
            </div>
                
            </td>
         </tr>
        </table>
      </x-slot>

      @if(session('success'))
      <div class="alert alert-success">
        <strong>{{ session('success') }}</strong>
      </div>
     @endif

     @if(session('delete'))
      <div class="alert alert-danger">
        <strong>{{ session('delete') }}</strong>
      </div>
     @endif

      <div class="container p-5 m-2">
        <div class="card">
          <div class="card-body shadow-md">
            <table class="table table-striped table-hover shadow-md">
              <thead class="thead-green">
                <tr>
                  <th>Nombre Del Producto</th>
                  <th ></th>
                  <th style="padding-inline: 7%">Opciones</th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                @foreach ($products as $product)

                <tr>
                  <td>
                    {{ $product->name }}
                  </td>
                  <td>
                        <x-button>
                            <a href="{{ route('products.edit',$product->id) }}">Editar</a>
                        </x-button>
                  </td>
                  <td>
                    <x-button>
                        <a href="{{ route('products.show',$product->id) }}">Información Detallada</a>
                    </x-button>
                  </td>
                  <td>
                    <form action="{{ route('products.destroy',$product->id) }}" method="post">

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

                @endforeach
                
              </tbody>
            </table>
            {{ $products->links() }}
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
  
  
  