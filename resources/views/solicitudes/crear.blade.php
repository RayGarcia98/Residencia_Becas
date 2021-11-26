<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-white leading-tight">
            {{ __('CNBBBJ') }}
        </h2>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-25">
            <div class="flex">
                    <!-- Navigation Links -->
                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                    <x-jet-nav-link href="{{ route('area1') }}" :active="request()->routeIs('area1')">
                        {{ __('INICIO') }}
                    </x-jet-nav-link>
                </div>
               
                <nav class="justify-end flex-1 text-right">
                <br>
                <div @click.away="open = false" class="relative" x-data="{ open: false }">
                    <button @click="open = !open"
                            class="flex text-white items-center w-full px-4  text-left ">
                        <span>SOLICITUD</span>
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
                         class="absolute max-w-md mx-auto">
                        <div class="px-2 pt-2 pb-4 bg-white rounded-md shadow-lg dark-mode:bg-gray-700">
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                    </div>
                                    <div class="ml-1 text-center">
                                    <x-jet-nav-link href="{{ route('solicitudes') }}" :active="request()->routeIs('solicitudes')">
                        {{ __('Solicitudes y trámites') }}
                    </x-jet-nav-link>
                           
                    </div>
                                    <div class="ml-1 text-center">
                                    <x-jet-nav-link href="{{ route('link') }}" :active="request()->routeIs('link')">
                        {{ __('Formato de solicitudes') }}
                    </x-jet-nav-link>
                    </div>
                                    <div class="ml-1 text-center">
                                    <x-jet-nav-link href="{{ route('archivo') }}" :active="request()->routeIs('archivo')">
                        {{ __('Subir archivos') }}
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

<div>
            
              

            
       



    <div class="flex items-center max-w-md mx-auto bg-white rounded-full " x-data="{ search: '' }">
    <h1 class="text-left">HISTORIAL DE SOLICITUDES SALIENTES</h1>
        <div class="flex-auto">
            <input type="search" class="w-full  text-gray-900 rounded-full focus:outline-none"
                placeholder="Buscar por núm. de oficio" x-model="search">
        </div>
        <div>
            <button type="submit" class="flex items-center justify-center w-12 h-12 text-gray-100 rounded-full"
                :class="(search.length > 0) ? 'bg-green-900' : 'bg-gray-500 cursor-not-allowed'"
                :disabled="search.length == 0">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                </svg>
            </button>
        </div>
    </div>

</div>
</form>
</div>


</div>




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
Dependencia/Depto. destinatario
</th>
<th class="p-3 font-bold uppercase bg-green-800 text-white border border-gray-300 hidden lg:table-cell">
Remitente
</th>
<th class="p-3 font-bold uppercase bg-green-800 text-white border border-gray-300 hidden lg:table-cell">
Dependencia/Depto. remitente
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
<th class="p-3 font-bold uppercase  bg-green-800 text-white border border-gray-300 hidden lg:table-cell">
Estatus
</th>
<th class="p-3 font-bold uppercase  bg-green-800 text-white border border-gray-300 hidden lg:table-cell">
Observaciones
</th>
</tr>
</thead>
              
</div>



</x-app-layout>