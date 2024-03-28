<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="{{ asset('build/assets/css/orders/done.css') }}">
  
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  
  </head>
  
  <body>
  
  <x-app-layout>
  
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight pb-3">
            QuickTrade | Detalle De Ordenes
        </h2>
    </x-slot>

    <div class="container">
        <table>    
            <tr class="container">
                @foreach ($order_details as $order_detail)
                <td class="p-3">
                

                    <div class="card cart">
                        <label class="title">DETALLA DE ORDEN</label>
                        <div class="steps">
                          <div class="step">
                            <div>
                              <span>PERTENECE A LA ORDER: {{ $order_detail->order_id }}</span>
                              <p><b>DETALLES: </b></p>
                              <br>
                              <span>Subtotal: ${{ $order_detail->sub_total }}</span>
                              <span>Cantidad {{ $order_detail->quantity }}</span>
                            </div>
                            <hr>
                            <div>
                              <span>METODO DE PAGO</span>
                              <p>Pago Contra Entrega</p>
                            </div>
                            <hr>
                            </div>
                          </div>
                        </div>
                      </div>
                    
                      <div class="card checkout">
                        <div class="footer">

                          <a href="{{ route('order_details.show',$order_detail->id) }}">
                            <button class="checkout-btn">Ver Detalle</button>
                          </a>
                          
                        </div>
                      </div>
                      <div class="card checkout">
                        <div class="footer">

                          <form action="{{ route('order_details.destroy',$order_detail->id) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button class="checkout-btn">Cancelar</button>
                          </form>
                          <br>

                          <label class="price">Total: ${{ $order_detail->sub_total }}</label>
                          
                        </div>
                      </div>
                    @endforeach
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
  
  
  