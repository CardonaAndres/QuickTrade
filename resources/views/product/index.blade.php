<head>
  
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <script src="https://kit.fontawesome.com/f08960debb.js" crossorigin="anonymous"></script>

  <link rel="shortcut icon" href="{{ asset('build/assets/img/logo-c.png') }}" type="image/x-icon">
  
  <link rel="stylesheet" href="{{ asset('build/assets/css/button.css') }}">
  <link rel="stylesheet" href="{{ asset('build/assets/js/button.js') }}">
  <link rel="stylesheet" href="{{ asset('build/assets/css/styles/cards.css') }}">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>

<body>

    <x-app-layout >
  
        <x-slot name="header">
            <table>
                <tr>
                    <td class="px-5">
                        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                        {{ __('QuickTrade | Tus Productos En Inventario') }}</h2>
                          
                    </td>

                    <td>
                      <a href="{{ route('order_details.index') }}">
                        <x-button>
                          Pedidos Que Me Han Hecho
                        </x-button>
                      </a>
                    </td>

                    <td style="padding-inline: 27%">
                      <x-button>
                        <a href="{{ route('producer_detail.create') }}">Publicar Producto</a>
                      </x-button>
                    </td>

                </tr>
            </table>
    
        </x-slot>
            @if(session('Success'))
            <div class="alert alert-success">
              <strong>{{ session('Success') }}</strong>
            </div>
          @endif

          @if(session('Delete'))
            <div class="alert alert-danger">
              <strong>{{ session('Delete') }}</strong>
            </div>
          @endif


        <div class="container m-2 p-3">


          @foreach ($producer_details as  $producer_detail )
    
            <table class="inline">
             <tbody>
              <tr>
                <td class="pl-5 pr-1">
    
                  <div class="card ">
                    
                      <img  class="image" src="{{ asset('storage/'.$producer_detail->image) }}" alt="IMAGEN">
                      <div class="card__content">
                        <p class="card__title">{{ $producer_detail->name }}</p>
                        <p class="card__description">{{ $producer_detail->quantity }} - {{$producer_detail->weight }}</p>
                        <p class="card__description"></p>
                        
                          <x-button >
                            <a href="{{ route('producer_detail.edit',$producer_detail->id) }}">Editar</a>
                          </x-button> <br>

                          <a href="{{ route('comments_product',[$producer_detail->id,Auth::user()->id]) }}">
                            <x-button>
                              Comentarios Hechos
                            </x-button>
                          </a>
                          
                          <x-button >
                            <a href="{{ route('show2',$producer_detail->id) }}">Información Detallada</a>
                          </x-button>
                
                        
                          <form class="" action="{{ route('producer_detail.destroy',$producer_detail->id) }}" method="post">

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
              @endforeach
             </tbody>
            </table>

            <div class="m-4 p-4" align="center">
              {{ $producer_details->links() }} 
            </div> 
           
           
           
    
        
    </x-app-layout>

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>

</html>

