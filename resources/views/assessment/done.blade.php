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
            QuickTrade | Tus Comentarios Hechos Al Producto: {{ $pdetail->name }}
        </h2>

        @if(session('danger'))
            <div class="alert alert-danger">
                <strong>{{ session('danger') }}</strong>

            </div>
            
        @endif
    </x-slot>

    <div class="tab-container">
        <div id="card">          
            <table class="table table-striped" id="table">
              <thead class="thead-green">
                <tr>
                  <th id="th">Opiniones De Los Usuarios</th>
                  <th id="th">Fecha </th>
                  <th id="th">Opciones </th>
                </tr>
              </thead>
              
              <tbody>
                  @foreach ($assessments as $assessment)                                   
                <tr>
                  <td id="td">
                     {{ $assessment->comment_ad }}    
                  </td>    
                  <td id="td">
                    {{ $assessment->created_at }}
                  </td>
                  <td>
                   <form action="{{ route('comment.edit',$assessment->id) }}" method="post">
                        @csrf
                        <input type="text" class="hidden" name="assessment" value="{{ $assessment->id }}">
                        <input type="text" class="hidden" name="pdetail_id" value="{{ $pdetail->id }}">
                        <x-button>
                            Editar
                        </x-button>
                   </form>
                  </td>
                  <td>
                    <form action="{{ route('comment.destroy',$assessment->id) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <input type="text" name="assessment" class="hidden" value="{{ $assessment->id }}">
                        <input type="text" name="pdetail" class="hidden" value="{{ $pdetail->id  }}">
                        <x-danger-button type="submit">
                            Eliminar
                        </x-danger-button>
                    </form>
                  </td>
                </tr>  
            
              </tbody>
              @endforeach  
                <tfoot>
                  <tr>
                      <td>
                          <a href="{{ route('producer_detail.show',$pdetail->id ) }}" class="p-3">
                              <button id="back-button">
                                  Volver
                              </button>
                          </a>
                      </td>
                      <td>
                       {{ $assessments->links() }}
                      </td>
                  </tr>
                </tfoot>
            </table>
        </div>


    </td>
  </tr>
</table>     
  
        
  
  </x-app-layout>
  
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="{{ asset('build/assets/js/modal/modal.js') }}"> </script>
  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
  </body>
  
  
  