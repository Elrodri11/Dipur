<head>        
    @vite('resources/css/app.css')
</head>
@guest
         <!--Navegacion cuando no esta autenticado-->
        <nav class="flex gap-2 items-center">
             <a href="{{route('login')}}" class="font-bold uppercase text-gray-600 text-sm">Login</a>
             <a href="{{route('register')}}" class="font-bold uppercase text-gray-600 text-sm">Crear cuenta</a>
        </nav>
@endguest

@yield('contenido')
