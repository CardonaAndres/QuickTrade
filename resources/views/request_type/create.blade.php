
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('build/assets/css/request_type/create.css') }}">

</head>

<body>

<x-app-layout>

        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                QuickTrade | Crea Un Tipo De Solicitud, {{ Auth::user()->name }}
            </h2>
        </x-slot>

  <div class="py-1">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
          <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                      
          </div>
      </div>
  </div>

  <div class="container">
    <div class="form-container">
        <form class="form" method="POST" action="{{ route('request_type.store') }}">
            @csrf
          <div class="form-group">
            <label for="email">Nombre Del Tipo De Solicitud</label>
            <input type="text" name="name" required autofocus>
          </div>
          <div class="form-group">
            <label for="textarea">En Qué Va A Consistir?</label>
            <textarea name="description" rows="10" cols="50" required="">          </textarea>
          </div>
          <button class="form-submit-btn" type="submit">GUARDAR</button>
        </form>
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


