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
                <br>
            </nav>



                

    </x-slot>
            <div>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                {{--                <x-jet-welcome />--}}

          
                <div>
</div>
                    
            
            <div class="w-1/2 h-10 pl-3 pr-2 bg-blue border rounded-full flex justify-between items-center relative align-content: space-around">


                <label for="name" class=" w-full">


                    <input style="border:0; " type="text" name="texto" id="name" placeholder="Buscar solicitud por número de oficio"
                           value=""
                           class="appearance-none w-full outline-none focus:outline-none active:outline-none"/>
                </label>

                <button type="submit" class="ml-1 outline-none focus:outline-none active:outline-none">
                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                         stroke-width="2"
                         viewBox="0 0 24 24" class="w-6 h-6">
                        <path d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                    </svg>
                </button>
            </div>
        </form>
    </div>
    


   
    <h1 class="text-2xl text-center mt-10">HISTORIAL DE SEGUIMIENTO DE OFICIOS</h1>


    <br>
    <table class="border-collapse w-full">
        <thead>


        <tr>
            <th class="p-3 font-bold uppercase bg-green-900 text-white border border-gray-300 hidden lg:table-cell">
                Núm. Oficio
            </th>
            <th class="p-3 font-bold uppercase bg-green-800 text-white border border-gray-300 hidden lg:table-cell">
                Destinatario
            </th>
            <th class="p-3 font-bold uppercase bg-green-800 text-white border border-gray-300 hidden lg:table-cell">
                Dependencia/Departamento destinatario
            </th>
            <th class="p-3 font-bold uppercase bg-green-800 text-white border border-gray-300 hidden lg:table-cell">
                Remitente
            </th>
            <th class="p-3 font-bold uppercase bg-green-800 text-white border border-gray-300 hidden lg:table-cell">
                Dependencia/Departameno remitente
            </th>
            <th class="p-3 font-bold uppercase bg-green-800 text-white border border-gray-300 hidden lg:table-cell">
                Asunto
            </th>
            <th class="p-3 font-bold uppercase bg-green-800 text-white border border-gray-300 hidden lg:table-cell">
                Fecha de elaboración
            </th>
            <th class="p-3 font-bold uppercase bg-green-800 text-white border border-gray-300 hidden lg:table-cell">
                Archivo
            </th>
            <th class="p-3 font-bold uppercase bg-gray-200 text-gray-600 border border-gray-300 hidden lg:table-cell">
                Estatus
            </th>
        </tr>
        </thead>

   
       
          

               
</div>
</x-app-layout>