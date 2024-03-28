<head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="{{ asset('build/assets/css/order_detail/show.css') }}">
  
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  
  </head>
  
  <body>
  
  <x-app-layout>
  
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight pb-3">
            QuickTrade | Detalle De La Orden: {{ $order->id }} 
            
            <a href="{{ route('order_details.index') }}" class="pl-5">
              <x-button> 
                Volver 
              </x-button>
            </a>
        </h2>
    </x-slot>

    <div class="container">
        <table>
          <tr>
            <td class="p-2">
              <div class="card">
                <div class="content">
                  <p class="heading">Datos Del Comprador: </p>
                  <p class="para">
                    <span>
                      <b>Nombre:</b> {{ $user->name }} {{ $user->last_name }} <br>
                    </span>
                    <span>
                      <b>Celular: </b>
                       <a href="wa.me/+57{{ $user->cellphone }}" target="_blank"> 
                        {{ $user->cellphone }}
                      </a> <br>
                    </span>
                    <span>
                      <b>Dirección: </b> {{ $user->address }} <br>
                    </span>
                    <span>
                      <b>Correo: </b> {{ $user->email }} <br><br>
                    </span>
                  </p>
                </div>
              </div>        
            </td>
            <td>
              <div class="card">
                <div class="content">
                  <p class="heading">Datos Concretos De La Orden: </p> 
                  <p class="para">
                    <span>
                      <b>Producto Para Entregar: </b> {{ $product->name }} <br>
                    </span>
                    <span>
                      <b>Cantidad: </b> {{ $order_detail->quantity }}  - {{ $producer_detail->weight }} <br>
                    </span>
                    <span>
                      <b>Precio: </b> {{ $order_detail->price }} <br>
                    </span>
                    <span>
                      <b>SubTotal: </b> {{ $order_detail->sub_total }} <br>
                    </span>
                    
                    
                  </p>
                </div>
              </div>        
            </td>
          </tr>
        </table>
          
    </div>
    
   
  
  </x-app-layout>
  
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>
  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
  </body>
  
  
  