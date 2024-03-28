<head>
    <title>Bienvendio | QuickTrade</title>
    <link rel="stylesheet" href="{{ asset('build/assets/css/welcome2.css') }}">
    <link rel="shortcut icon" href="{{ asset('build/assets/img/logo-c.png') }}" type="image/x-icon">
</head>
<header id="header">
    <a href="{{ route('all-products') }}" class="logo">QuickTrade</a>
    <ul>
        @auth
        
             <li><a href="{{ route('all-products') }}" class="active">Bienvenido</a></li>
 
         @else
             <li><a href="{{ route('login') }}" class="active">Iniciar Sesión</a></li>
             <li><a href="{{ route('register') }}">Registrarse</a></li>
        @endauth
        
     </ul>
</header>

<Section>
    @auth
        <h2 id="text"><span>¡Bienvenido De Nuevo A!</span><br>QuickTrade</h2>

     @else
        <h2 id="text">
            <span>¡Bienvenido A!</span>
            <br>QuickTrade
        </h2>
    @endauth
    
    
    
        <img src="https://user-images.githubusercontent.com/65358991/170092504-132fa547-5ced-40e5-ab64-ded61518fac2.png" id="bird1">
        <img src="https://user-images.githubusercontent.com/65358991/170092542-9747edcc-fb51-4e21-aaf5-a61119393618.png" id="bird2">
        <img src="https://user-images.githubusercontent.com/65358991/170092559-883fe071-eb4f-4610-8c8b-a037d061c617.png" id="forest">
    
    
   
        <a href="{{ route('all-products') }}" id="btn">
            Ver Catalogo
        </a>
  
    
    
    <img src="https://user-images.githubusercontent.com/65358991/170092616-5a70c4af-2eed-496f-bde9-b5fcc7142a31.png" id="water">
</Section>

<div class="sec">
    <h2>¿Qué es QuickTrade?</h2>
    <p>Quick Trade es una pagina en la cual podras encontrar, productos de buena calidad de agricultores de nuestro pais.
        Con nuestra pagina podras hacer compras de manera facil, rapida y segura.
<br><br>
Nuestra tienda virtual agrícola beneficiara tanto a Comprador como Productor pero el enfoque principal de nuestra tienda es ayudar al Campesino Productor y que pueda vender sus productos de manera directa a los Compradores.

    </p>
</div>

<script src="{{ asset('build/assets/js/welcome2.js') }}"></script>