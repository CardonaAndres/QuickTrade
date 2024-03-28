<head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  
  </head>
  
  <body>
  
  <x-app-layout>
  
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight pb-3">
            QuickTrade | ¿Qué Tienes En Tu Canasta?
        </h2>

        @if(session('error'))
          <div class="alert alert-danger border border-1 border-danger p-3">

            <strong class="pt-3">
              <b>{{ session('error') }}</b>
            </strong>

          </div>
        @endif

        @if(session('update'))
          <div class="alert alert-success border border-1 border-success p-3">

            <strong class="pt-3">
              <b>{{ session('update') }}</b>
            </strong>

          </div>
        @endif
    </x-slot>
  
    <div class="container p-5 m-2">
      <div class="card">
        <div class="card-body shadow-xl">
          <table class="table table-striped table-hover shadow-md">
            <thead class="thead-green">
              <tr>
                <th>Imagen</th>
                <th>Producto</th>
                <th >Precio</th>
                <th >Cantidad</th>
                <th>Medida De Peso</th>
                <th >Sub total</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($orders as  $key => $order)
                <tr>
                  <td>
                    <img width="70" height="70" class="card mb-5 mb-md-0" src="{{ asset('storage/'.$order->image) }}" alt="IMAGEN" />
                  </td>
                  <td>
                    {{ $order->name }}
                  </td>
                  <td>
                    {{ $order->price }}
                  </td>
                  <td>
                    {{ $order->quantity }}
                  </td>
                  <td>
                    {{ $order->weight }}
                  </td>
                  <td>
                    {{ $order->sub_total }}
                  </td>
                  <td>
                    <form action="{{ route('edit_sesion') }}" method="post">
                      @csrf
                      <input type="text" class="hidden" name="key" value="{{ $key }}" id="">
                      <x-button>
                        Cambiar Cantidad
                      </x-button>
                    </form>
                    
                     
                    
                  </td>

                  <td>
                    <form action="{{ route('destroy_sesion',$key) }}" method="post">
                      @csrf
                      <input type="text" name="key" class="hidden" value="{{ $key }}">
                     
                      <i class="fa-solid fa-trash fa-lg" style="color: #fe0101;"></i>

                        <x-danger-button type="submit" class="pl-4">
                          Borrar
                        </x-danger-button>      

                    </form>
                                                 
                   </td>
                </tr>
                
              @endforeach

              <tfoot >
                <tr>
                  <td>
                    
                    <form action="{{ route('orders.store') }}" method="post">
                      @csrf

                      <input type="text" class="hidden" name="payment_method" value="Pago Contra Entrega">
                      <input type="text" class="hidden" name="shopping_address" value="{{ Auth::user()->address }}" >
                      <input type="text" class="hidden" name="consumer_id" value="{{ Auth::user()->id }}"" >

                      <x-button >
                        Crear Orden
                      </x-button>

                    </form>
                   
                  </td>
                  <td>
                    
                      <a href="{{ route('destroy_sesion_all') }}">

                        <x-danger-button class="pl-4">
                          <i class="fa-solid fa-basket-shopping fa-lg pr-3" style="color: #eee;"></i> Vaciar Canasta
                        </x-danger-button>
                      </a>

                  </td>
         
                </tr>
              </tfoot>
              
            </tbody>
            
          </table>
          <span class="text text-green-700">
            <i>Recuerda Que En <b>QuickTrade</b> Manejamos Pago Contra Entrega</i>
          </span>
        </div>
      </div>           
    </div> 


  
    
       
  
        
  
        
  
  </x-app-layout>
  
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="{{ asset('build/assets/js/modal/modal.js') }}"> </script>
  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
  </body>
  
  
  