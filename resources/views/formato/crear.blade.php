<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Formato de solicitudes') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                {{--                <x-jet-welcome />--}}

                <div>
                    
<div>

          
                <button
        class="inline-block px-6 py-2 text-xs font-medium leading-6 text-center text-white uppercase transition bg-green-500 rounded-full shadow ripple hover:shadow-lg hover:bg-green-600 focus:outline-none"
    >
        <a href="{{route('area1')}}">volver</a>
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