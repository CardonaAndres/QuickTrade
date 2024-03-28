<head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="{{ asset('build/assets/css/orders/edit.css') }}">
  
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  
  </head>
  
  <body>
  
  <x-app-layout>
  
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight pb-3">
            QuickTrade | Actualiza La Cantidad De Tu Producto.
        </h2>
    </x-slot>

   <div class="container">
    <form action="{{ route('update_sesion') }}" method="post">
        @csrf
        <div class="card">
            <span class="card__title">Cantidad</span>
            <p class="card__content">Get fresh web design resources delivered straight to your inbox every week.
            </p>
            <div class="card__form">
                <input placeholder="12" type="number" name="quantity" min="1" max="{{ $product->quantity }}" required>
                <input type="text" name="key" value="{{ $key }}"    class="hidden">
                <input type="text" name="weight" value="{{ $order_s->weight}}"    class="hidden">
                <input type="text" name="id_pdetail" value="{{ $order_s->id }}"    class="hidden">
                <input type="text" name="image" value="{{ $order_s->image }}"    class="hidden">
                <input type="text" name="product_name" value="{{ $order_s->name }}"   class="hidden">
                <input type="text" name="total_price" value="{{ $order_s->price }}"   class="hidden">
                <button class="sign-up"> Actualizar</button>
            </div>
        </div>
    </form>
   </div>  

   
        
  
  </x-app-layout>
  
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
  </body>
  
  
  