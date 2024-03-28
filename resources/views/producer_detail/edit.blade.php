
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
  integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>

<x-app-layout>

  <x-slot name="header">
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
          QuickTrade
      </h2>
  </x-slot>

  <div class="py-1">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
          <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
              
              
          </div>
      </div>
  </div>

  <div class="container">

    <div class="card items-center shadow-xl">
        <div class="card-body">

            <x-label class="font-semibold text-xl text-gray-800 leading-tight pb-4">Edita Tu Producto, {{ Auth::user()->name }}</x-label>

             <p><x-validation-errors class="mb-4" /></p>

            <form action="{{ route('producer_detail.update',$producer_detail->id ) }}" method="POST">

              @csrf
              @method("PUT")

             

             <table>
              <tr>
                <td>

                  <x-label class="font-semibold text-gray-800 leading-tight pb-4" value="{{ __('Tipo De Producto: ') }}"/>    
                 
                </td>
                <td>
                  <select name="product_id" id="" class="mx-2 inline-flex border border-green-900 rounded-md font-semibold text-md text-green-900 uppercase tracking-widest hover:bg-green-200 focus:bg-green-100 active:bg-green-400 focus:outline-none focus:ring-2 focus:ring-green-200 focus:ring-offset-2 transition ease-in-out duration-150" >
                    @foreach ($products as $product )

                      <option value="{{ $product->id }}" > 
                        {{ $product->name }} 
                      </option>

                    @endforeach
                  </select>
                </td>
              </tr>
             </table>

              <x-label for="product_location" class="font-semibold text-gray-800 leading-tight" value="{{ __('¿Donde lo tienes?') }}" />
              <x-input id="product_location" class="block mt-1 w-full mb-3" type="text" name="product_location"  placeholder="EJ: Antioquia - Itagüí" />

              <table>
                <tr>
                  <td>
                    <x-label for="quantity" class="font-semibold text-gray-800 leading-tight" value="{{ __('Cantidad Disponible') }}" />
                    <x-input id="quantity" class="block mt-1 mr-4 w-full mb-3" type="number" min="0" name="quantity"   />

                  </td>
                  <td class="">
                    <x-label for="weight" class="font-semibold text-gray-800 leading-tight mx-3"  value="{{ __('Medida De Peso') }}" />
                    <select name="weight" id="" class="mx-2 inline-flex border border-green-900 rounded-md font-semibold text-md text-green-900 uppercase tracking-widest hover:bg-green-200 focus:bg-green-100 active:bg-green-400 focus:outline-none focus:ring-2 focus:ring-green-200 focus:ring-offset-2 transition ease-in-out duration-150" >
                      <option value="Kilos">kilos</option>
                      <option value="Gramos">Gramos</option>
                      <option value="Libras">Libras</option>
                      <option value="Toneladas">Toneladas</option>
                    </select>
                  </td>
                </tr>
              </table>  

              <x-label for="price" class="font-semibold text-gray-800 leading-tight " value="{{ __('Precio') }}" />
              <x-input id="price" class="block mt-1 w-full mb-3" type="number" min="0" name="price"   />

              <select name="produceruser_id" id="" class="hidden" >
                
                  <option value="{{ Auth::user()->id }}"></option>
                
              </select>

              

              <x-button class="mt-4 pt-2"  type="submit">
                {{ __('Publicar') }}
              </x-button>
            </form>
                  
                        
             
                                

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


