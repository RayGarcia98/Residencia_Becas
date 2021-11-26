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
            <center>
                    <img  class="h-25  "height="400" width="700"  src="/img/membretadavertical1.png">
                </center>


          
                <div>
</div>


                    
<div>

          
                <button
        class="inline-block px-6 py-2 text-xs font-medium leading-6 text-center text-white uppercase transition bg-green-500 rounded-full shadow ripple hover:shadow-lg hover:bg-green-600 focus:outline-none"
    >
        <a href="{{route('area1')}}">GUARDAR</a>
    </button>

{{--    {{date('d/m/Y')}}--}}

    
<style>
    .sinborde {
        border: 0;
        text-align:end;
    }

        .alinea{
           font-family: Verdana;
            font-size:18px;
            text-align: justify;
        margin: 50px;


        }
</style>


<div class="relative flex flex-col sm:flex-row sm:items-center bg-white shadow rounded-md py-5 pl-6 pr-8 sm:pr-6">





  
        @csrf


        <label class="block text-base text-red-900">
            nombre reporte<br>
            <input title="text" name="nombre"
                   class="shadow appearance-none border rounded  py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline border-red-900 text-red-900" required autofocus>
        </label>
        <br>
<br>


        <div class="flex justify-end ...">
            <label class="block text-base text-black">
                <br>
                <br>
<br>

                <input style="" title="text" name="folio"
                       class="" value="Folio: DRT/{{date('d/m/Y')}}">

            </label>
            <br>
            <br>
<br>
<br>
<br>

        </div>


<div>
        <div class="">
            <label class="block text-base text-black">
                <br>

                <textarea class="w-full   h-10 flex justify-center text-right " name="lugarFecha" style="border: #cbd5e0 ">Oaxaca de Juárez, Oaxaca, a {{date('d')}} de {{date('M')}} del {{date('Y')}}</textarea>
            </label>
            <br>
        </div>

    </div>




        <div class="">
            <label class="block text-base text-black">
                <br>

                <input style="" title="text" name="nombreDestinatio"
                       class="w-full   "
                  >

            </label>
            <br>
        </div>


        <div class="">
            <label class="block text-base text-black">
                <br>

                <input style="" title="text" name="puestoDestinatario"
                       class="w-full overflow-ellipsis overflow-hidden  "
                       value="  ________.
                                ">

            </label>
            <br>
        </div>

        &nbsp;&nbsp;P R E S E N T E.





        <div class=" text-justify">
            <label class="block text-base text-black text-justify">
                <br>

{{--                <input style="" title="text" type="text" name="puestoDestinatario"--}}
{{--                       class=" text-justify   "--}}
{{--                       value="  Por medio del presente reciba un cordial saludo, al tiempo de solicitar su valioso apoyo para la elaboración--}}
{{-- de contrato correspondiente a radio, pantallas, vallas y televisión de la campaña: “Color Semáforo” con la--}}
{{--información que se adjunta">--}}
                <textarea class="w-full   h-32" name="cuerpoTexto" style="border: #cbd5e0 ">L@ que suscribe C. ___________, del departamento de ____________.</textarea>

            </label>
            <br>
        </div>
















               
</div>
</x-app-layout>