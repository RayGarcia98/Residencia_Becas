<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('CNBBBJ') }}
        </h2>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-25">
            <div class="flex">
                    <!-- Navigation Links -->
                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                    <x-jet-nav-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">
                        {{ __('Inicio') }}
                    </x-jet-nav-link>
                </div>

                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                    <x-jet-nav-link href="{{route('usuarios')}}" :active="request()->routeIs('usuarios')">
                        {{ __('Usuarios') }}
                    </x-jet-nav-link>
                </div>
                
                <nav class="justify-end flex-1 text-right">
                <br>
                <div @click.away="open = false" class="relative" x-data="{ open: false }">
                    <button @click="open = !open"
                            class="flex flex-row text-gray-900 bg-teal-700 items-center w-full px-4 py-2 mt-2 text-sm font-semibold text-left bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:focus:bg-gray-600 dark-mode:hover:bg-gray-600 md:w-auto md:inline md:mt-0 md:ml-4 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline">
                        <span>Módulo de control y seguimiento</span>
                        <svg fill="currentColor" viewBox="0 0 20 20" :class="{'rotate-180': open, 'rotate-0': !open}"
                             class="inline w-4 h-4 mt-1 ml-1 transition-transform duration-200 transform md:-mt-1">
                            <path fill-rule="evenodd"
                                  d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                  clip-rule="evenodd"></path>
                        </svg>
                    </button>
                    <div x-show="open" x-transition:enter="transition ease-out duration-100"
                         x-transition:enter-start="transform opacity-0 scale-95"
                         x-transition:enter-end="transform opacity-100 scale-100"
                         x-transition:leave="transition ease-in duration-75"
                         x-transition:leave-start="transform opacity-100 scale-100"
                         x-transition:leave-end="transform opacity-0 scale-95"
                         class="absolute right-0 w-full md:max-w-screen-sm md:w-screen mt-2 origin-top-right">
                        <div class="px-2 pt-2 pb-4 bg-white rounded-md shadow-lg dark-mode:bg-gray-700">
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                    </div>
                                    <div class="ml-1">
                                    <x-jet-nav-link href="{{ route('seguimiento') }}" :active="request()->routeIs('seguimiento')">
                        {{ __('Historial de oficios') }}
                    </x-jet-nav-link>
                                       
                                    </div>
                                    </div>
                </div>
               
            </nav>

    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-blue overflow-hidden">
                {{--                <x-jet-welcome />--}}


                <h1 class="text-2xl text-center mt-10">BIENVENID@ ADMIN AL REGISTRO DE USUARIOS</h1>


                <div class="w-full flex justify-center my-0.5 py-6">
                    <div class="w-3/4">
                        <div class="w-full flex flex-col md:flex-row rounded overflow-hidden shadow-xl">

                            <div class="w-full md:w-1/4 h-auto">
                                <div class="top flex items-center px-5 h-16 bg-gray-700 text-white">
                                    <div class="ml-3 flex flex-col text-xl">
                                        
                                    </div>
                                </div>
                                <div class="bg-gray-400 w-full h-full sm:flex md:block">
                                    <button id="button-1" onclick="showView(1)"
                                            class="w-full flex justify-between items-center px-5 py-2 hover:bg-gray-500 cursor-pointer focus:outline-none">
                                        <span><i class="fa fa-inbox w-6"></i>AGREGAR USUARIOS</span>
                                    </button>


                                    <button id="button-4" onclick="showView(4)"
                                            class="w-full flex justify-between items-center px-5 py-2 hover:bg-gray-500 cursor-pointer focus:outline-none">
                                        <span><i class="fa fa-trash w-6"></i>MOSTRAR LISTA</span>
                                        {{--                        <span class="text-xs bg-gray-800 px-1 rounded text-white">4</span>--}}
                                    </button>
                                </div>
                            </div>


                            <div class="w-full md:w-3/4">
                                <div class="top flex items-center px-5 h-16 bg-gray-600 text-white text-2xl">
                                    <div id="title-1" class="hidden">
                                        FORMULARIO AGREGAR USUARIOS
                                    </div>


                                    <div id="title-4" class="hidden">
                                        LISTA DE USUARIOS REGISTRADOS
                                    </div>
                                </div>
                                <div class="w-full px-5 py-3 max-h-screen overflow-y-auto">
                                    <div id="view-1" class="hidden">
                                        {{--                        agregar usuario--}}

                                        {{--                        en esta parte va el formulario del  dar de alta a los usuarios--}}
                                        <div class="flex items-center justify-center">
                                            <div class="w-full max-w-md">

                                                <br>

                                                <form method="post" action="{{route('users.store')}}">
                                                    @csrf
                                                    <label class="block text-base text-black">
                                                        Nombre usuario<br>
                                                        <input title="text" name="name"
                                                               class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                                                    </label>
                                                    <br>

                                                    <label class="block text-base text-black">
                                                        Email del usuario<br>
                                                        <input title="text" name="email" placeholder="@gmail.com"
                                                               class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                                                    </label>

                                                    <br>
                                                    <br>


                                                    <div class="w-full ">
<label form="area_id">Área</label>
<select id="area_id" name="area_id">
<option value selected="selected">Selecciona una opción</option>
 <option value="ADMINISTRADOR">ADMINISTRADOR</option>
 <option value="RECURSOS HUMANOS">RECURSOS HUMANOS</option>
 <option value="RECURSOS MATERIALES">RECURSOS MATERIALES</option>
 <option value="DIFUSION">DIFUSION</option>
 <option value="FINANCIEROS">FINANCIEROS</option>
 <option value="VINCULACION">VINCULACION</option>
 <option value="ATENCION OPERATIVA">ATENCION OPERATIVA</option>
 <option value="PADRON Y LIQUIDACION">PADRON Y LIQUIDACION</option>
 <option value="COMUNICACION SOCIAL">COMUNICACION SOCIAL</option>
 <option value="SEDES DE ATENCION REGIONAL">SEDES DE ATENCION REGIONAL</option>
</select>
</div>
                                                    
                                                    <BR>
                                                    <label class="block text-base text-black">
                                                        Puesto<br>
                                                        <input title="text" name="puesto"
                                                               class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                                                    </label>
                                                    <br>
                                                    <label class="block text-base text-black">
                                                      
                                                    </label>


                                                    <br>

                                                    <label class="block text-base text-black">
                                                        Password<br>
                                                        <input type="password" name="password"
                                                               class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                                                    </label>
                                                    <br>
                                                    <br>



                                                    <button


                                                        class="hover:bg-gray-400 text-gray-800 font-bold py-2 px-4 rounded inline-flex items-center" style="background-color: rgb(191, 150, 99)">


                                                        <span>Guardar</span>

                                                    </button>

                                                    <button
                    class="hover:bg-gray-400 text-gray-800 font-bold py-2 px-4 rounded inline-flex items-center" style="background-color: rgb(191, 150, 99)"
                > 
                    <a href="/dashboard">Volver a inicio</a>
                </button>



                                                </form>
                                            </div>
                                        </div>


                                    </div>


                                    <div id="view-4" class="hidden">

                                        {{--                        <hr class="my-2 border-gray-500">--}}
                                        {{--                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolor ratione minima praesentium, unde maxime nisi maiores temporibus fugit!--}}
                                        {{--                        Ducimus aliquam commodi autem minima repudiandae dolorum aut sit dolorem laudantium odit.--}}
                                        {{--                    --}}




                                        <table class="border-collapse w-full">
                                            <thead>


                                            <tr>
                                                <th class="p-3 font-bold uppercase bg-teal-700 text-gray-900 border border-gray-300 hidden lg:table-cell">
                                                    NOMBRE
                                                </th>
                                                <th class="p-3 font-bold uppercase bg-teal-700 text-gray-900 border border-gray-300 hidden lg:table-cell">
                                                    EMAIL
                                                </th>
                                                <th class="p-3 font-bold uppercase bg-teal-700 text-gray-900 border border-gray-300 hidden lg:table-cell">
                                                    PUESTO
                                                </th>
                                                <th class="p-3 font-bold uppercase bg-teal-700 text-gray-900 border border-gray-300 hidden lg:table-cell">
                                                    AREA DE TRABAJO
                                                </th>
                                                <th class="p-3 font-bold uppercase bg-teal-700 text-gray-900 border border-gray-300 hidden lg:table-cell">
                                                    ACCIÓN
                                                </th>
                                            {{--                                                <th class="p-3 font-bold uppercase bg-teal-700 text-white border border-gray-300 hidden lg:table-cell">--}}
                                            {{--                                                    ACCIONES--}}
                                            {{--                                                </th>--}}

                                            </thead>

                                            <tbody>
                                            @forelse($listaUser as $userss)


                                                <tr class="bg-white lg:hover:bg-gray-100 flex lg:table-row flex-row lg:flex-row flex-wrap lg:flex-no-wrap mb-10 lg:mb-0">
                                                    
                                                    <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b block lg:table-cell relative lg:static">
                                            <span
                                                class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">nombre</span>

                                                        {{$userss->name}}


                                                    </td>
                                                    <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b text-center block lg:table-cell relative lg:static">
                                            <span
                                                class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">email</span><br/>

                                                        {{$userss->email}}



                                                    </td>
                                                    <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b text-center block lg:table-cell relative lg:static">
                                            <span
                                                class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">puesto</span>
                                                        {{$userss->puesto}}


                                                    </td>
                                                    <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b text-center block lg:table-cell relative lg:static">
                                            <span
                                                class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">area id</span>
                                                        {{$userss->area_id}}
                                                        
                                                    <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b text-center block lg:table-cell relative lg:static">

                                                        {{--                                                        <button--}}
                                                        {{--                                                            class="inline-block px-6 py-2 text-xs font-medium leading-6 text-center text-white uppercase transition bg-green-500 rounded-full shadow ripple hover:shadow-lg hover:bg-green-600 focus:outline-none"--}}
                                                        {{--                                                        >--}}
                                                        {{--                                                            <a href="{{route('Usuario.edit',$userss)}}">editar</a>--}}
                                                        {{--                                                        </button>--}}

                                                                                                                <br>
                                                                                                                <br>


                                                                                                                <form method="POST" action="{{route('Usuario.distroy',$userss)}}">
                                                                                                                    @csrf
                                                                                                                    @method('DELETE')

                                                                                                                    <button
                                                                                                                        class="inline-block px-6 py-2 text-xs font-medium leading-6 text-center text-white uppercase transition bg-red-600 rounded-full shadow ripple hover:shadow-lg hover:bg-red-500 focus:outline-none"
                                                                                                                    >
                                                                                                                        <a>Eliminar</a>
                                                                                                                    </button>

                                                                                                                </form>


                                                    </td>


                                                </tr>


                                            @empty

                                            @endforelse
                                           

                                            </tbody>
                                        </table>
                                        <br>
                                        <br>
                                        <div>
                                            <button
                    class="hover:bg-gray-400 text-gray-800 font-bold py-2 px-4 rounded inline-flex items-center" style="background-color: rgb(191, 150, 99)"
                > 
                    <a href="/user">Regresar</a>
                </button>
                <button
                    class="hover:bg-gray-400 text-gray-800 font-bold py-2 px-4 rounded inline-flex items-center" style="background-color: rgb(191, 150, 99)"
                > 
                    <a href="/dashboard">Volver a inicio</a>
                </button>
</div>
</div>








                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <script>
                    var activeClasses = ["bg-gray-500", "border-l-4", "pl-4", "border-gray-700"];
                    var lastId = null;
                    showView(1)
                    function showView(id) {
                        if (id == null) return
                        closeLast()
                        document.getElementById('view-' + id).style.display = "block"
                        document.getElementById('title-' + id).style.display = "block"
                        document.getElementById('button-' + id).classList.add(...activeClasses)
                        lastId = id;
                    }
                    function closeLast() {
                        if (lastId == null) return
                        document.getElementById('view-' + lastId).style.display = "none"
                        document.getElementById('title-' + lastId).style.display = "none"
                        document.getElementById('button-' + lastId).classList.remove(...activeClasses)
                    }
               
                </script>
            </div>
        </div>
    </div>
</x-app-layout>
