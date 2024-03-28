<head>
  
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  
  <link rel="stylesheet" href="{{ asset('build/assets/css/styles/cards.css') }}">
  <link rel="stylesheet" href="{{ asset('build/assets/css/styles/buscador.css') }}">
  <link rel="shortcut icon" href="{{ asset('build/assets/img/logo-c.png') }}" type="image/x-icon">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>

<x-app-layout>

    <x-slot name="header">
     
      <table>
        <td>
          <h2 id="h2" class="font-semibold text-xl text-gray-800 leading-tight">
            QuickTrade | Productos Publicados
        </h2>
        </td>
      
          <td class="pl-5">
            <div class="search pl-12">
              <form action="{{ route('search-products') }}" method="post">
                @csrf
                <div id="columns">
                
                  <select name="search_product" class="select" >
                
                        @foreach ($products as $product)
                        <option class="p-2" value="{{ $product->id }}">{{ $product->name }}</option>
                        @endforeach         
                          
                  </select>

                  <button id="btn">
                    Buscar
                  </button>
                </div>

              </form>
              
            </div>
          </td>    
        
        <td>
          @if(session('error'))
            <div class="alert alert-warning d-flex border border-1 border-radius border-warning">
              <strong>
                <b>{{ session('error') }}</b>
                <i class="fa-solid fa-basket-shopping fa-lg" style="color: #fcff2e;"></i>
              </strong>
            </div>
          @endif
          @if(session('error_2'))
          <div class="alert alert-warning d-flex border border-1 border-warning">
            <strong>
              <b>{{ session('error_2') }}</b>
              <i class="fa-solid fa-basket-shopping fa-lg" style="color: #fcff2e;"></i>
            </strong>
          </div>
         @endif
         @if(session('error_3'))
         <div class="alert alert-warning d-flex border border-1 border-warning">
           <strong>
             <b>{{ session('error_3') }}</b>
             <i class="fa-solid fa-basket-shopping fa-lg" style="color: #fcff2e;"></i>
           </strong>
         </div>
        @endif
        </td>
      </table>

      
      
    </x-slot>

    

    <div class="container" id="products">
    


      @foreach ($producer_details as $producer_detail )

        <table class="">
         <tbody>
          <tr>
            <td >

              <div class="card item">
                
                  <img  class="image" src="{{ asset('storage/'.$producer_detail->image) }}" alt="IMAGEN">

                  <div class="card__content">
                    <p class="card__title">{{ $producer_detail->name }}</p>
                    <p class="card__description">Ubicación: {{ $producer_detail->product_location }}</p>
                    <p class="card__description">Cantidad Disponible: {{ $producer_detail->quantity }} - {{$producer_detail->weight }}</p>
                    <button class="card__button" >
                      <a href="{{ route('producer_detail.show',$producer_detail->id) }}">Ver más</a>
                    </button>
                    

                   </div>

               </div>
            
              </td>
          
            </tr>
          </tbody>  
        
        </table>  
          @endforeach
         

        <div class="m-4 p-4" align="center" id="paginate">
          {{ $producer_details->links() }} 
        </div>      

        
    </div>
        

       

</x-app-layout>
  
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://kit.fontawesome.com/f08960debb.js" crossorigin="anonymous"></script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>


