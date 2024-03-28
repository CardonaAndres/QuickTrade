<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" type="text/css"  href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />

    <link rel="stylesheet" type="text/css" href="{{ asset('build/assets/css/producer_detail/show/bootstrap.css') }}" />
    
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700|Poppins:400,700|Raleway:400,700&display=swap" rel="stylesheet" />

    <link href="{{ asset('build/assets/css/producer_detail/show/style.css') }}" rel="stylesheet" />

    <link rel="stylesheet" href="{{ asset('build/assets/css/producer_detail/show/responsive.css') }}">

    <link rel="stylesheet" href="{{ asset('build/assets/css/modal/modal.css') }}">
    
</head>
  
<body>
    <x-app-layout>

        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                QuickTrade | ¡Aca Podrás Mirar Más Información Del Producto!
            </h2>
        </x-slot>

        <div class="hero_area">
            <!-- header section strats -->
            <header class="header_section">
              <div class="container-fluid">
                <nav class="navbar navbar-expand-lg custom_nav-container">
                  <a class="navbar-brand p-4"></a>
                  <div class="navbar-collapse" id="">
                    <div class="custom_menu-btn">
                      <button onclick="openNav()">
                        <span class="s-1"> </span>
                        <span class="s-2"> </span>
                        <span class="s-3"> </span>
                      </button>
                    </div>
                    <div id="myNav" class="overlay">

                      <div class="overlay-content">
                        
                        <form action="{{ route('store_sesion') }}" method="post" id="card-form">
                          @csrf
                          <div id="card">
                              <div id="card__form">   
                                  <span id="card__title" class="h4">¿Cuanto Quieres?</span>
                                  <div id="card__form">
                                      <input placeholder="Ejemplo: 2" id="quantity" type="number" min="1" max="{{ $producer_detail->quantity }}" name="quantity" required>
                                      <input type="text" name="weight" class="hidden" value="{{ $producer_detail->weight }}">
                                      <input type="text" name="image" class="hidden" value="{{ $product->image }}">
                                  </div>              
                                  
                                  <input type="number" name="total_price" class="hidden" value="{{ $producer_detail->price}}">
                                  <input type="text" name="product_name" class="hidden" value="{{ $product->name}}">
                                  <input type="text" name="id_pdetail" class="hidden" value="{{ $producer_detail->id}}">
                                  <input type="text" name="shopping_address" class="hidden" value="{{ Auth::user()->address }}">
                                  <input type="text" name="consumer_id" class="hidden" value="{{ Auth::user()->id }}">
                                  <input type="text" class="hidden" value="Pago Contra Entrega" name="payment_method">
                        
                              </div>

                              <span id="card__title">Metodo De Pago</span>  
                                    
                                  <p id="text-modal">
                                    "En QuickTrade, entendemos la importancia de brindar opciones de 
                                    pago convenientes para nuestros clientes. Por eso, estamos encantados de ofrecer la opción de 
                                    'Pago Contra Entrega'. Con esta modalidad de pago, puedes recibir tus productos en la comodidad de 
                                    tu hogar o lugar de trabajo y realizar el pago al momento de la entrega. Esta opción te brinda tranquilidad y 
                                    seguridad, ya que solo pagas cuando tengas tus productos en tus manos. 
                                    ¡Compra con confianza en QuickTrade y disfruta de la comodidad del pago contra entrega!"
                                  </p>     
                               
                                  <button id="submit" type="submit"> Siguiente</button>
                    
                          </div>
                      </form>


                      </div>
                    </div>
                  </div>
                </nav>
              </div>
            </header>
            <!-- end header section -->
            <!-- slider section -->
            <section class=" slider_section position-relative">
              <div class="side_heading">
                <h5>
                  Q
                  U
                  I
                  C
                  K
                  T
                  R
                  A
                  D
                  E
                </h5>
              </div>
              <div class="container-fluid">
                <div class="row">
                  <div class="col-lg-3 col-md-4 offset-md-1">
                    <div id="carouselExampleIndicators">
                      <div class="carousel-inner">
                        <div class="carousel-item active">
                          <div class="img-box b-1">
                            <img src="{{ asset('storage/'.$product->image) }}" alt="" />
                          </div>
                        </div>
                      </div>

                    </div>
                  </div>
                  <div class=" col-md-5 offset-md-1">
                    <div class="detail-box">
                      <h1>
                        {{ $product->name }}
                      </h1>
                      <br>
                      <span><b>Cantidad Disponible:</b> {{ $producer_detail->quantity}} - {{ $producer_detail->weight }}</span>
                      <br>
                      <p>
                        <br>
                        {{ $product->description }}
                      </p>
        
                      <div class="btn-box">
                        <table >
                          <tr>
                           
                            <td>
                              <x-button onclick="openNav()">Guardar En Mi Canasta</x-button>
                            </td>
                           
                          </tr>                         
                        </table>

                        <table>
                          <tr>
                            <td class="pr-4">
                              <a href="{{ route('coments.index',$producer_detail->id) }}">
                                <button id="footer-btn">
                                  Comentarios
                                </button>
                              </a>
                        
                           </td>
                            <td>
                                <a href="{{ route('producer_info',[$producer_detail->produceruser_id,$producer_detail->id]) }}">
                                  <button id="footer-btn">
                                    Información Del Productor
                                  </button>
                                </a>                                                                            
                            </td>
                          </tr>
                        </table>
                                               
                      </div>
        
                    </div>
                  </div>
                </div>
              </div>
            </section>
           
          </div>
        </div>

        <section class="footer_section">
         
        </section>


    
        
          <script type="text/javascript" src="{{ asset('build/assets/css/producer_detail/show/jquery-3.4.1.min.js') }}"></script>
          <script src="{{ asset('build/assets/js/modal/modal.js') }}"> </script>
          <script type="text/javascript" src="b{{ asset('build/assets/css/producer_detail/show/bootstrap.js') }}"></script>
          <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
          </script>
        
          <script>
            function openNav() {
              document.getElementById("myNav").classList.toggle("menu_width");
              document
                .querySelector(".custom_menu-btn")
                .classList.toggle("menu_btn-style");
            }
          </script>
        
        
          <script type="text/javascript">
            $(".owl-carousel").owlCarousel({
              loop: true,
              margin: 35,
              navText: [],
              autoplay: true,
              autoplayHoverPause: true,
              responsive: {
                0: {
                  items: 1
                },
                600: {
                  items: 2
                },
                1000: {
                  items: 3
                }
              }
            });
          </script>
  
    </x-app-layout>
</body>
   
  