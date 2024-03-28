


<head>
  
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="{{ asset('build/assets/css/orders/done.css') }}">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>
    <x-app-layout>
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight pb-3">
                QuickTrade | Ordenes Creadas.
            </h2>
        </x-slot>
             
        @if(session('success'))
        <div class="alert alert-success pt-3 d-flex border border-1 border-radius border-success">
            <strong>
                {{ session('success') }}
            </strong>
        </div>
         @endif

        @if(session('delete'))
          <div class="alert alert-danger d-flex border border-1 border-radius border-danger">
            <strong>{{ session('delete') }}</strong>
          </div>     
        @endif


    
        <div class="container">
            <table>    
                <tr class="container">
                    @foreach ($orders as $order) 
                    <td class="p-3">
                        
                        <div class="card cart">
                            <label class="title">ORDEN #{{ $order->id }}</label>
                            <div class="steps">
                              <div class="step">
                                <div>
                                  <span>TUS DATOS</span>
                                  <p><b>Dirección: </b>{{ Auth::user()->address }}</p>
                                </div>
                                <hr>
                                <div>
                                  <span>METODO DE PAGO</span>
                                  <p>Pago Contra Entrega</p>
                                </div>
                                <hr>
                                <div class="payments">
                                  <div class="details">
                                    <span>Subtotal:</span>
                                    <span>${{ $order->total_price }}</span>
                    
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        
                          <div class="card checkout">
                            
                              <form action="{{ route('order_details',$order->id) }}" method="post" class="p-3">
                                @csrf
                                <input type="text" class="hidden" name="order_id" value="{{ $order->id }}">
                                <button class="checkout-btn">Ver Detalles</button>
                              </form>
                              
                            
                            <div class="footer">
                              
                              <form action="{{ route('orders.destroy',$order->id) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button class="checkout-btn">Cancelar</button>
                              </form>

                              <label class="price">Total:  ${{ $order->total_price }}</label>
                            </div>
                          </div>
                         
                    </td>
                    @endforeach   
                </tr>
                
            </table>

          </div>
        
            
              <div class="container">
                <strong id="strong">
                  {{ $orders->links() }}
                </strong>
              </div>
            
         

         

    </x-app-layout> 
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>


 