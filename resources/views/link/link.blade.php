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
                </div></div>

<div>
<h1 class="text-2xl text-center mt-10">FORMATO DE SOLICITUDES</h1>
</div>
<br>
                  
<div>

<table class=" border-collapse table-auto w-1/2 max-w-sm w-full flex-row shadow-xl">
     
  <thead>
    <tr>
      <th>Formatos</th>
      <th>Ver</th>
      <th> </th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>
      <label class="block text-base text-black">
                                                        Hoja núm. 1<br> 
      </td>
      <td>
      <button class="outline-none text-decoration: underline hover:underline mr-1 mb-1 px-3 py-1 bg-transprent text-xs font-bold text-blue-500 uppercase focus:outline-none">
<a href="{{ route('formato') }}" :active="request()->routeIs('formato')">
                        {{ __('Ver documento') }}
</a> </button>
      </td>
      <td>
      <button
        class="inline-block px-6 py-2 text-xs font-medium leading-6 text-center text-white uppercase transition bg-green-500 rounded-full shadow ripple hover:shadow-lg hover:bg-green-600 focus:outline-none"
    >
        <a href="{{route('solicitudes')}}">Guardar</a>
    </button>
      </td>
      <tr class="bg-green-200">
      <td>   <label class="block text-base text-black">
                                                        Hoja núm. 2<br> </td>
      <td> <button class="outline-none text-decoration: underline hover:underline mr-1 mb-1 px-3 py-1 bg-transprent text-xs font-bold text-blue-500 uppercase focus:outline-none">
<a href="{{ route('formato') }}" :active="request()->routeIs('formato')">
                        {{ __('Ver documento') }}
</a> </button></td>
      <td> <button
        class="inline-block px-6 py-2 text-xs font-medium leading-6 text-center text-white uppercase transition bg-green-500 rounded-full shadow ripple hover:shadow-lg hover:bg-green-600 focus:outline-none"
    >
        <a href="{{route('solicitudes')}}">Guardar</a>
    </button></td>
    </tr>
    <tr>
      <td> <label class="block text-base text-black">
                                                        Hoja núm. 3<br></td>
      <td> <button class="outline-none text-decoration: underline hover:underline mr-1 mb-1 px-3 py-1 bg-transprent text-xs font-bold text-blue-500 uppercase focus:outline-none">
<a href="{{ route('formato') }}" :active="request()->routeIs('formato')">
                        {{ __('Ver documento') }}
</a> </button></td>
      <td> <button
        class="inline-block px-6 py-2 text-xs font-medium leading-6 text-center text-white uppercase transition bg-green-500 rounded-full shadow ripple hover:shadow-lg hover:bg-green-600 focus:outline-none"
    >
        <a href="{{route('solicitudes')}}">Guardar</a>
    </button</td>
    </tr>
    
    </tr>
  </tbody>
</table>
</div>

</x-app-layout>