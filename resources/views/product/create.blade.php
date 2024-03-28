<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="{{ asset('build/assets/css/products-css/create.css') }}">
<link rel="stylesheet" href="{{ asset('build/assets/css/products-css/file.css') }}">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
  integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>

<x-app-layout>

  <x-slot name="header">
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
          QuickTrade | ¡¡Agrega Un Tipo De Producto!!
      </h2>
  </x-slot>


  <form action="{{ route('products.store') }}" class="pt-3" method="post" enctype="multipart/form-data">
    @csrf
   
            <table align="center" class="shadow-xl bg-white sm:rounded-lg">
                <td >
                    <div class="form-container shadow-xl sm:rounded-lg">
                        <div class="form">
                            <span class="heading">Datos Del Producto:</span>
                            <input placeholder="Nombre Del Producto" name="name" type="text" class="input" required autofocus>
                            <textarea placeholder="Su Descripción" name="description" rows="10" cols="30" id="message" name="description" class="textarea" required></textarea>
                            <div class="button-container">
                            <button class="send-button" type="submit">
                                GUARDAR
                            </button>
                            <div class="reset-button-container ">
                                <button type="reset" id="reset-btn" class="reset-button">REINICIAR</button>
                            </div>
                        </div>
                    </div>
                </td>
                <td style="padding-right: 50px">
            
                    <div class="container m-4" > 
                        <div class="header"> 
                            <svg xmlns="http://www.w3.org/2000/svg" height="1.5em" viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><style>svg{fill:#166534}</style><path d="M448 80c8.8 0 16 7.2 16 16V415.8l-5-6.5-136-176c-4.5-5.9-11.6-9.3-19-9.3s-14.4 3.4-19 9.3L202 340.7l-30.5-42.7C167 291.7 159.8 288 152 288s-15 3.7-19.5 10.1l-80 112L48 416.3l0-.3V96c0-8.8 7.2-16 16-16H448zM64 32C28.7 32 0 60.7 0 96V416c0 35.3 28.7 64 64 64H448c35.3 0 64-28.7 64-64V96c0-35.3-28.7-64-64-64H64zm80 192a48 48 0 1 0 0-96 48 48 0 1 0 0 96z"/></svg>
                            <p>Sube La Foto!</p>
                        </div> 
                        <label for="file" class="footer"> 
                          <svg class="py-3" fill="#000000" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path d="M15.331 6H8.5v20h15V14.154h-8.169z"></path><path d="M18.153 6h-.009v5.342H23.5v-.002z"></path></g></svg> 
                          <p>Selecciona La Foto</p> 
                          
                        </label> 
                        <input id="file" type="file" name="image" accept="image/*" required> 
                        @error('image')
                          <span class="text-danger" >IMAGEN NO VALIDA</span>
                        @enderror
                      </div>
            
                </td>
              </table>
     
  </form>

  
        
    

      

</x-app-layout>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
  integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
  integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
</script>
</body>


