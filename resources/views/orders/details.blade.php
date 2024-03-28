<head>
  
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="{{ asset('build/assets/css/orders/details.css') }}">
    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  
</head>
  
<body id="body">
    <x-app-layout>
          <x-slot name="header">
              <h2 class="font-semibold text-xl text-gray-800 leading-tight pb-3">
                  QuickTrade | Detalle De Orden #{{ $order_id }}
              </h2>
          </x-slot>

          <div class="container">
            <div id="card">          
                  <table class="table table-striped" id="table">
                    <thead class="thead-green">
                      <tr>
                        <th id="th">Listado De Productos De La Orden</th>
                        <th id="th">Cantidad A Entregar</th>
                        <th id="th">Precio Vendido</th>
                        <th id="th">Sub_Total</th>
                        
                      </tr>
                    </thead>
                    @foreach ($products_order as $product_order)
                    <tbody>
                                       
                      <tr>
                        <td id="td">
                            {{ $product_order->name }}      
                        </td>   
                         <td  id="td">
                            {{ $product_order->order_quantity }} 
                        </td> 
                        <td id="td">
                            {{ $product_order->price }} 
                        </td> 
                        <td id="td">
                            {{ $product_order->sub_total }} 
                        </td> 
                      </tr>  
                      @endforeach
                    </tbody>
                      <tfoot>
                        <tr>
                            <td>
                                <a href="{{ route('orders_done') }}" class="p-3">
                                    <button id="back-button">
                                        Volver
                                    </button>
                                </a>
                            </td>
                        </tr>
                      </tfoot>
                  </table>
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
  
  
   