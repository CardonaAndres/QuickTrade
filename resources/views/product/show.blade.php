
<head>
  
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="{{ asset('build/assets/css/products-css/show2.css') }}">

  <!-- Bootstrap CSS v5.2.1 -->
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
                     Información A Profundidad De Tu Producto
                   </h2>
                </td> 
                
             </tr>
            </table>
          </x-slot>
      
          <div class="py-1">
              <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                  <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                  </div>
              </div>
          </div>

             <div class="container">
              <div class="flex justify-center items-center h-screen">
                <div class="max-w-sm rounded overflow-hidden shadow-lg">
                <img class="p-3" src="{{ asset('storage/'.$product->image) }}"  alt="IMAGEN">
                  <div class="px-6 py-4">
                    <div class="font-bold text-xl mb-2">{{ $product->name }}</div>
                    <p class="text-gray-700 text-base">
                      {{ $product->description }}
                    </p>
                  </div>
                  <div class="px-6 py-4" align="center">
                    <a href="{{ route('products-options') }}">
                      <button id="volver"> Volver</button>
                    </a>    
                  </div>
                </div>
              </div>
             </div>

      
          
       
          

    
    </x-app-layout>


</body>


  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>


</html>