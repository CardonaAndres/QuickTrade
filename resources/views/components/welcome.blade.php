<div class="p-6 lg:p-8 bg-white border-b border-green-200">
    

    <h1 class="mt-8 text-2xl font-medium text-gray-900">
        @auth
            <p>¡Bienvenido De Nuevo A QuickTrade!</p>
            @else
            <p>¡Bienvenido A Quicktrade! Por Favor Inicia Sesión</p>
        @endauth
    </h1>

    <p class="mt-6 text-gray-500 leading-relaxed">
        <Table>
            <tr>
                <td class="px-8"><x-application-logo class="block h-12 w-auto" /></td>
                <td></td>
                <td><p>Quick Trade es una pagina en la cual podras encontrar </p> 
                    <p> productos de buena calidad de agricultores de nuestro pais.</p> 
                     Con nuestra pagina podras hacer compras de manera facil, rapida y segura.</td>
            </tr>
        </Table>
    </p>
</div>

