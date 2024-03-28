@php

    $nav_links = [

        [
            'name'=>'Canasta',
            'route'=>'orders',
            'active'=>request()->routeIs('orders.index'),
        ]

    ];

@endphp

<head>
    <script src="https://kit.fontawesome.com/f08960debb.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ asset('build/assets/css/styles/buscador.css') }}">
    <link rel="shortcut icon" href="{{ asset('build/assets/img/logo-c.png') }}" type="image/x-icon">
    
</head>


<nav id="navegation"  x-data="{ open: false }" class="bg-white">    

    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl shadow-xl mx-auto px-4 md:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex">
                <!-- Logo -->

                    <div id="logo" class="shrink-0 flex items-center pt-1">
                        <a href="{{ route('all-products') }}">
                            <x-application-mark class="block h-9 w-auto" />
                        </a>
                    </div>
              
            
                <!-- Navigation Links -->
                <div class="hidden space-x-8 md:-my-px sm:ml-10 sm:flex">

                

                    @can('all-products')
                        <x-nav-link href="{{ route('all-products') }}" :active="request()->routeIs('all-products')">
                            <svg xmlns="http://www.w3.org/2000/svg" height="1.25em" viewBox="0 0 576 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><style>svg{fill:#166534}</style><path d="M64 80c-8.8 0-16 7.2-16 16V416c0 8.8 7.2 16 16 16H512c8.8 0 16-7.2 16-16V96c0-8.8-7.2-16-16-16H64zM0 96C0 60.7 28.7 32 64 32H512c35.3 0 64 28.7 64 64V416c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V96zm96 64a32 32 0 1 1 64 0 32 32 0 1 1 -64 0zm104 0c0-13.3 10.7-24 24-24H448c13.3 0 24 10.7 24 24s-10.7 24-24 24H224c-13.3 0-24-10.7-24-24zm0 96c0-13.3 10.7-24 24-24H448c13.3 0 24 10.7 24 24s-10.7 24-24 24H224c-13.3 0-24-10.7-24-24zm0 96c0-13.3 10.7-24 24-24H448c13.3 0 24 10.7 24 24s-10.7 24-24 24H224c-13.3 0-24-10.7-24-24zm-72-64a32 32 0 1 1 0-64 32 32 0 1 1 0 64zM96 352a32 32 0 1 1 64 0 32 32 0 1 1 -64 0z"/></svg>
                            <strong class="pl-2">Productos</strong>
                        </x-nav-link>      
                        
                      
                            <x-nav-link href="{{ route('orders.index') }}" :active="request()->routeIs('orders.index')">
                                <svg xmlns="http://www.w3.org/2000/svg" height="1.5em" viewBox="0 0 576 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><style>svg{fill:#166534}</style><path d="M253.3 35.1c6.1-11.8 1.5-26.3-10.2-32.4s-26.3-1.5-32.4 10.2L117.6 192H32c-17.7 0-32 14.3-32 32s14.3 32 32 32L83.9 463.5C91 492 116.6 512 146 512H430c29.4 0 55-20 62.1-48.5L544 256c17.7 0 32-14.3 32-32s-14.3-32-32-32H458.4L365.3 12.9C359.2 1.2 344.7-3.4 332.9 2.7s-16.3 20.6-10.2 32.4L404.3 192H171.7L253.3 35.1zM192 304v96c0 8.8-7.2 16-16 16s-16-7.2-16-16V304c0-8.8 7.2-16 16-16s16 7.2 16 16zm96-16c8.8 0 16 7.2 16 16v96c0 8.8-7.2 16-16 16s-16-7.2-16-16V304c0-8.8 7.2-16 16-16zm128 16v96c0 8.8-7.2 16-16 16s-16-7.2-16-16V304c0-8.8 7.2-16 16-16s16 7.2 16 16z"/></svg>
                                <span class="pl-2">Mi Canasta</span>
                            </x-nav-link> 
                     
                        
                    @endcan


                    @can('products.index')
                        <x-nav-link href="{{ route('products.index') }}" :active="request()->routeIs('products.index')">
                            <svg xmlns="http://www.w3.org/2000/svg" height="1.25em" viewBox="0 0 640 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><style>svg{fill:#166534}</style><path d="M36.8 192H603.2c20.3 0 36.8-16.5 36.8-36.8c0-7.3-2.2-14.4-6.2-20.4L558.2 21.4C549.3 8 534.4 0 518.3 0H121.7c-16 0-31 8-39.9 21.4L6.2 134.7c-4 6.1-6.2 13.2-6.2 20.4C0 175.5 16.5 192 36.8 192zM64 224V384v80c0 26.5 21.5 48 48 48H336c26.5 0 48-21.5 48-48V384 224H320V384H128V224H64zm448 0V480c0 17.7 14.3 32 32 32s32-14.3 32-32V224H512z"/></svg>
                            <span class="pl-2">Mi Catalogo</span>
                        </x-nav-link>        
                    @endcan


                    @can('admin.index')
                        <x-nav-link>
                            <div class="pt-2">
                                <x-dropdown align="right" width="48">
                                    <x-slot name="trigger">
                                    
                                            <span class="inline-flex rounded-md border-green-900">
                                                <button type="button" class="inline-flex items-center px-3 py-2 border border-transparent text-md leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-900 focus:outline-none focus:bg-green-100 active:bg-green-100 transition ease-in-out duration-150">
                                                   Administrador            
                                                    <svg class="ml-2 -mr-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                                                    </svg>
                                                </button>
                                            </span>
                                    
                                    </x-slot>
            
                                
            
                                    <x-slot name="content">
                                        <!-- Account Management -->
                                        <div class="block px-4 py-2 text-xs text-green-700">
                                            {{ __('Opciones De Administrador') }}
                                        </div>
            
                                        <x-dropdown-link href="{{ route('users.index') }}">
                                            <table>
                                                <tr>
                                                    <td class="px-1">
                                                        <i class="fa-regular fa-user" style="color: #265a29;"></i> 
                                                    </td>
            
                                                    <td>
                                                      Usuarios  
                                                    </td>
                                                </tr>
                                            </table>
                                        </x-dropdown-link>
            
                                        <x-dropdown-link href="{{ route('applications.index') }}">
                                            <table>
                                                <tr>
                                                    <td class="px-1">
                                                        <svg xmlns="http://www.w3.org/2000/svg" height="1.25em" viewBox="0 0 576 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><style>svg{fill:#166534}</style><path d="M112 48a48 48 0 1 1 96 0 48 48 0 1 1 -96 0zm40 304V480c0 17.7-14.3 32-32 32s-32-14.3-32-32V256.9L59.4 304.5c-9.1 15.1-28.8 20-43.9 10.9s-20-28.8-10.9-43.9l58.3-97c17.4-28.9 48.6-46.6 82.3-46.6h29.7c33.7 0 64.9 17.7 82.3 46.6l44.9 74.7c-16.1 17.6-28.6 38.5-36.6 61.5c-1.9-1.8-3.5-3.9-4.9-6.3L232 256.9V480c0 17.7-14.3 32-32 32s-32-14.3-32-32V352H152zM432 224a144 144 0 1 1 0 288 144 144 0 1 1 0-288zm0 240a24 24 0 1 0 0-48 24 24 0 1 0 0 48zM368 321.6V328c0 8.8 7.2 16 16 16s16-7.2 16-16v-6.4c0-5.3 4.3-9.6 9.6-9.6h40.5c7.7 0 13.9 6.2 13.9 13.9c0 5.2-2.9 9.9-7.4 12.3l-32 16.8c-5.3 2.8-8.6 8.2-8.6 14.2V384c0 8.8 7.2 16 16 16s16-7.2 16-16v-5.1l23.5-12.3c15.1-7.9 24.5-23.6 24.5-40.6c0-25.4-20.6-45.9-45.9-45.9H409.6c-23 0-41.6 18.6-41.6 41.6z"/></svg>
                                                    </td>
            
                                                    <td>
                                                        Solicitudes
                                                    </td>
                                                </tr>
                                            </table>
                                        </x-dropdown-link>            
                                        <x-dropdown-link href="{{ route('products-options') }}">
                                            <table>
                                                <tr>
                                                    <td class="px-1">
                                                      <svg xmlns="http://www.w3.org/2000/svg" height="0.875em" viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><style>svg{fill:#146537}</style><path d="M0 96C0 60.7 28.7 32 64 32H196.1c19.1 0 37.4 7.6 50.9 21.1L289.9 96H448c35.3 0 64 28.7 64 64V416c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V96zM64 80c-8.8 0-16 7.2-16 16V416c0 8.8 7.2 16 16 16H448c8.8 0 16-7.2 16-16V160c0-8.8-7.2-16-16-16H286.6c-10.6 0-20.8-4.2-28.3-11.7L213.1 87c-4.5-4.5-10.6-7-17-7H64z"/></svg>
                                                    </td>
            
                                                    <td>
                                                        {{ __('Ver Productos') }}  
                                                    </td>
                                                </tr>
                                            </table>
                                        </x-dropdown-link>
                                    </x-slot>
                                    
                                </x-dropdown>
                            </div> 
                            
                        </x-nav-link>        
                    @endcan

                </div>
            </div>

            <div class="hidden sm:flex sm:items-center sm:ml-6">
            

           
                <!-- Settings Dropdown -->
                @auth

                <div class="ml-3 relative">
                    <x-dropdown align="right" width="48">
                        <x-slot name="trigger">
                            @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                                <button class="flex text-sm border-2 border-transparent rounded-full focus:outline-none focus:border-green-300 transition">
                                    <img class="h-8 w-8 rounded-full object-cover" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" />
                                </button>
                            @else
                                <span class="inline-flex rounded-md">
                                    <button type="button" class="inline-flex items-center px-3 py-2 border border-transparent text-md leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-900 focus:outline-none focus:bg-green-100 active:bg-green-100 transition ease-in-out duration-150">
                                        {{ Auth::user()->name }}

                                        <svg class="ml-2 -mr-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                                        </svg>
                                    </button>
                                </span>
                            @endif
                        </x-slot>

                       

                        <x-slot name="content">
                            <!-- Account Management -->
                            <div class="block px-4 py-2 text-xs text-green-700">
                                {{ __('Manejo De Cuenta') }}
                            </div>

                            <x-dropdown-link href="{{ route('profile.show') }}">
                                <table>
                                    <tr>
                                        <td class="px-1">
                                            <i class="fa-regular fa-user" style="color: #265a29;"></i> 
                                        </td>

                                        <td>
                                            {{ __('Perfil') }}  
                                        </td>
                                    </tr>
                                </table>
                            </x-dropdown-link>

                            <x-dropdown-link href="{{ route('applications.index') }}">
                                <table>
                                    <tr>
                                        <td class="px-1">
                                            <svg xmlns="http://www.w3.org/2000/svg" height="1.25em" viewBox="0 0 640 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><style>svg{fill:#166534}</style><path d="M96 128a128 128 0 1 1 256 0A128 128 0 1 1 96 128zM0 482.3C0 383.8 79.8 304 178.3 304h91.4C368.2 304 448 383.8 448 482.3c0 16.4-13.3 29.7-29.7 29.7H29.7C13.3 512 0 498.7 0 482.3zM625 177L497 305c-9.4 9.4-24.6 9.4-33.9 0l-64-64c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l47 47L591 143c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9z"/></svg> 
                                        </td>

                                        <td>
                                            Solicitudes
                                        </td>
                                    </tr>
                                </table>
                            </x-dropdown-link>
                            <x-dropdown-link href="{{ route('orders_done') }}">
                                <table>
                                    <tr>
                                        <td class="px-1">
                                            <svg xmlns="http://www.w3.org/2000/svg" height="1.25em" viewBox="0 0 384 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><style>svg{fill:#166534}</style><path d="M192 0c-41.8 0-77.4 26.7-90.5 64H64C28.7 64 0 92.7 0 128V448c0 35.3 28.7 64 64 64H320c35.3 0 64-28.7 64-64V128c0-35.3-28.7-64-64-64H282.5C269.4 26.7 233.8 0 192 0zm0 64a32 32 0 1 1 0 64 32 32 0 1 1 0-64zM72 272a24 24 0 1 1 48 0 24 24 0 1 1 -48 0zm104-16H304c8.8 0 16 7.2 16 16s-7.2 16-16 16H176c-8.8 0-16-7.2-16-16s7.2-16 16-16zM72 368a24 24 0 1 1 48 0 24 24 0 1 1 -48 0zm88 0c0-8.8 7.2-16 16-16H304c8.8 0 16 7.2 16 16s-7.2 16-16 16H176c-8.8 0-16-7.2-16-16z"/></svg>
                                        </td>

                                        <td>
                                            Ordenes Creadas
                                        </td>
                                    </tr>
                                </table>
                            </x-dropdown-link>


                            <div class="border-t border-gray-200"></div>

                            

                            <!-- Authentication -->
                            <form method="POST" action="{{ route('logout') }}" x-data>
                                @csrf

                                
                                    <x-dropdown-link href="{{ route('logout') }}"
                                            @click.prevent="$root.submit();">
                                            <table>
                                                <tr>
                                                    <td class="px-1">
                                                        <svg xmlns="http://www.w3.org/2000/svg" height="1.25em" viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><style>svg{fill:#1a4729}</style><path d="M377.9 105.9L500.7 228.7c7.2 7.2 11.3 17.1 11.3 27.3s-4.1 20.1-11.3 27.3L377.9 406.1c-6.4 6.4-15 9.9-24 9.9c-18.7 0-33.9-15.2-33.9-33.9l0-62.1-128 0c-17.7 0-32-14.3-32-32l0-64c0-17.7 14.3-32 32-32l128 0 0-62.1c0-18.7 15.2-33.9 33.9-33.9c9 0 17.6 3.6 24 9.9zM160 96L96 96c-17.7 0-32 14.3-32 32l0 256c0 17.7 14.3 32 32 32l64 0c17.7 0 32 14.3 32 32s-14.3 32-32 32l-64 0c-53 0-96-43-96-96L0 128C0 75 43 32 96 32l64 0c17.7 0 32 14.3 32 32s-14.3 32-32 32z"/></svg>
                                                    </td>

                                                    <td>
                                                        {{ __('Salir') }}
                                                    </td>
                                                </tr>
                                            </table> 
                                    </x-dropdown-link>
                                
                                
                            </form>
                        </x-slot>
                    </x-dropdown>
                </div>

                @else

               <div>

                
                    <x-button class="border border-green-100">
                        <a  href="{{ route('login') }}" >Iniciar Sesion</a>
                    </x-button>
                
                    
                
                    <x-button>
                        <a  href="{{ route('register') }}" >Registrarse</a>
                    </x-button>
                

               </div>

                @endauth
                
            </div>

            <!-- Hamburger -->
            <div class="-mr-2 flex items-center sm:hidden">
                <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
        <div class="pt-2 pb-3 space-y-1">

            
                
            
            @auth


                @can('all-products')

                    <x-responsive-nav-link href="{{ route('all-products') }}" :active="request()->routeIs('all-products')">
                        <strong class="pl-2">Productos</strong>
                    </x-responsive-nav-link>
                    
                @endcan

                
                    @foreach ($nav_links as $nav_link )

                    <x-responsive-nav-link href="{{ $nav_link['route'] }}" :active="$nav_link['active']">
                        {{ $nav_link['name'] }}
                    </x-responsive-nav-link>

                    @endforeach

                    @can('products.index')
                    <x-responsive-nav-link href="{{ route('products.index') }}" :active="request()->routeIs('products.index')">
                        <span class="pl-2">Mi Catalogo</span>
                    </x-responsive-nav-link>        
                @endcan

               

                @can('admin.index')
                <span class="p-2 text text-green-500">Opciones De Administrador</span>

                    <x-responsive-nav-link href="{{ route('users.index') }}" :active="request()->routeIs('users.index')">
                        Usuarios
                    </x-responsive-nav-link>        

                    <x-responsive-nav-link href="{{ route('products-options') }}" :active="request()->routeIs('products-options')">
                        Productos
                    </x-responsive-nav-link>  

                    <x-responsive-nav-link href="{{ route('applications.index') }}" :active="request()->routeIs('aapplications.index')">
                        Solicitudes
                    </x-responsive-nav-link>      
                @endcan

                



                
            @endauth

         

        </div>

        @auth
        <!-- Responsive Settings Options -->
        <div class="pt-4 pb-1 border-t border-gray-200">
            <div class="flex items-center px-4">
                @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                    <div class="shrink-0 mr-3">
                        <img class="h-10 w-10 rounded-full object-cover" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" />
                    </div>
                @endif

                <div>
                    <div class="font-medium text-base text-gray-800">{{ Auth::user()->name }}</div>
                    <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>
                </div>
            </div>

            <div class="mt-3 space-y-1">
                <!-- Account Management -->
                <x-responsive-nav-link href="{{ route('profile.show') }}" :active="request()->routeIs('profile.show')">
                    {{ __('Perfil') }}
                </x-responsive-nav-link>

                <x-responsive-nav-link href="{{ route('applications.index') }}" :active="request()->routeIs('applications.index')">
                    {{ __('Solicitudes') }}
                </x-responsive-nav-link>

                <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}" x-data>
                    @csrf

                    <x-responsive-nav-link href="{{ route('logout') }}"
                                   @click.prevent="$root.submit();">
                        {{ __('Salir') }}
                    </x-responsive-nav-link>
                </form>
            

            </div>
        </div>

        @else

        <div class="py-1 border-t border-gray-200">

            <x-responsive-nav-link href="{{ route('login') }}" :active="request()->routeIs('inicia_sesion')">
                Inicia Sesion
            </x-responsive-nav-link>

            <x-responsive-nav-link href="{{ route('register') }}" :active="request()->routeIs('registrate')">
                Registrate
            </x-responsive-nav-link>
        </div>

        
        @endauth
    </div>
</nav>





