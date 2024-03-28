<head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="{{ asset('build/assets/css/comment/table.css') }}">
    <link rel="shortcut icon" href="{{ asset('build/assets/img/logo-c.png') }}" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  
  </head>
  
  <body>
  
  <x-app-layout>
  
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight pb-3">
            QuickTrade | Editar Comentario
        </h2>
    </x-slot>

    <div class="container p-5" align="center">
        <form action="{{ route('comment.update',$comment->id) }}" method="POST" class="text-neutral-800 relative overflow-hidden flex flex-col justify-around w-96 h-44 border border-neutral-500 rounded-lg bg-neutral-50 p-3 px-6">
            @csrf
            @method('PUT')
            <div class="before:absolute before:w-32 before:h-20 before:right-2 before:bg-green-300 before:-z-10 before:rounded-full before:blur-xl before:-top-12   z-10 after:absolute after:w-24 after:h-24 after:bg-purple-300 after:-z-10 after:rounded-full after:blur after:-top-12 after:-right-6">
                <span class="font-extrabold text-2xl text-green-600">Da Tu Opinion De El Producto</span>
                <p class="text-neutral-700">Tu Opinion Es Muy Importante Para Mejorar</p>
            </div>
            <div class="flex gap-1">
                <div class="">
                <input placeholder="Me gusta..." value="{{ $comment->comment_ad }}" name="comment_ad" required class="relative ring-0 outline-none border border-neutral-500 text-neutral-900 placeholder-green-700 text-sm rounded-lg focus:ring-green-500 placeholder-opacity-60 focus:border-green-500 block w-full p-2.5 checked:bg-emerald-500" type="text">
                <input type="text" class="hidden" name="user_id" value="{{ Auth::user()->id }}">
                <input type="text" class="hidden" name="comment_id" value="{{ $comment->id }}">
                <input type="text" class="hidden" name="producer_detail_id" value="{{ $comment->producer_detail_id }}">
                </div>
                <button class="bg-green-900 text-neutral-50 p-2 rounded-lg hover:bg-green-400">
                    Crear Comentario
                </button>
            </div>
        </form>    
 
      </div>     
  
  </x-app-layout>
  
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="{{ asset('build/assets/js/modal/modal.js') }}"> </script>
  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
  </body>
  
  
  