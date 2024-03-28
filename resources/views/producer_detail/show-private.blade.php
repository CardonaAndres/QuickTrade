
<head>
  
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="{{ asset('build/assets/css/styles/control.css') }}">
  
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
                         Controla Tu Producto
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
        
            <div id="container">	
	
              <!-- Start	Product details -->
                <div class="product-details">
                  
                  <!-- 	Product Name -->
                <h1><b>Los Datos De Tu Producto: </b></h1>
                   
                
              <!-- 		<span class="hint new">New</span> -->
              <!-- 		<span class="hint free-shipping">Free Shipping</span> -->
              <!-- 		the Product rating -->
               
                  
                
              <!-- The most important information about the product -->

                  <p class="information"> 
                     <li>
                      <b>Tipo De Producto: </b> {{ $product->name }}
                     </li>
                     <li>
                      <b>Cantidad Disponible Y Peso: </b>{{ $producer_detail->quantity }} - {{ $producer_detail->weight }}
                     </li>
                     <li>
                      <b>Precio Públicado:</b> {{ $producer_detail->price }}
                     </li>
                     <li>
                      <b>Ubicación: </b> {{ $producer_detail->product_location }}
                     </li>

                  </p>
              
                  
                  
              <!-- 		Control -->
              <div class="control">
                
              <!-- Start Button buying 
                <button  class="btn_n">
             
                 <span class="price">49 $</span>
              
                 <span class="shopping-cart"><i class="fa fa-shopping-cart" aria-hidden="true"></i></span>
             
                 <span class="buy">Buy Now</span>
               </button>

                     End Button buying -->
                
              </div>
                    
              </div>
                
              <!-- 	End	Product details   -->
                
                
                
              <!-- 	Start product image & Information -->
                
              <div class="product-image">
                
                <img src="{{ asset('storage/'.$product->image) }}" alt="Omar Dsoky">
                
              <!-- 	product Information-->
              <div class="info">
                <h2 class="pb-4 pt-3"> TUS DATOS: </h2>
                <ul class="pb-4">
                  <li><strong>Nombre: </strong>{{ $users->name }} {{ $users->last_name }}</li>
                  <li><strong>Dirrección: </strong>{{ $users->address }}</li>
                  <li><strong>Celular: </strong>{{ $users->cellphone }}</li>
                  <li><strong>Correo: </strong>{{ $users->email }}</li>
                </ul>
                <p ><h3>Es muy importante que estos datos sean correctos, si alguno no lo es cambialo en la opcion de editar</h3></p>
                <p class="pt-4" align="center"> QuickTrade </p>
              </div>
              </div>
              <!--  End product image  -->
              
              
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