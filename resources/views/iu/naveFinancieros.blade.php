<a class="text-white text-sm uppercase font-bold p-3 {{Request::is('listado')? 'bg-teal-500 ' : ''}}"
   href="{{route('iraListaReportes')}}">
    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
        <path fill-rule="evenodd"
              d="M2 5a2 2 0 012-2h12a2 2 0 012 2v2a2 2 0 01-2 2H4a2 2 0 01-2-2V5zm14 1a1 1 0 11-2 0 1 1 0 012 0zM2 13a2 2 0 012-2h12a2 2 0 012 2v2a2 2 0 01-2 2H4a2 2 0 01-2-2v-2zm14 1a1 1 0 11-2 0 1 1 0 012 0z"
              clip-rule="evenodd"/>
    </svg>
    RADIO</a>

<a class="text-white text-sm uppercase font-bold p-3 {{Request::is('Financieros')? 'bg-teal-500 ' : ''}}"
   href="{{route('iraListaReportesTv')}}">
    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
        <path fill-rule="evenodd"
              d="M3 3a1 1 0 000 2v8a2 2 0 002 2h2.586l-1.293 1.293a1 1 0 101.414 1.414L10 15.414l2.293 2.293a1 1 0 001.414-1.414L12.414 15H15a2 2 0 002-2V5a1 1 0 100-2H3zm11 4a1 1 0 10-2 0v4a1 1 0 102 0V7zm-3 1a1 1 0 10-2 0v3a1 1 0 102 0V8zM8 9a1 1 0 00-2 0v2a1 1 0 102 0V9z"
              clip-rule="evenodd"/>
    </svg>
    TELEVISION</a>


<a class="text-white text-sm uppercase font-bold p-3 {{Request::is('FinancierosLista')? 'bg-teal-500 ' : ''}}"
   href="{{route('iraListaReportesInter')}}">
    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
        <path d="M5 3a1 1 0 000 2c5.523 0 10 4.477 10 10a1 1 0 102 0C17 8.373 11.627 3 5 3z"/>
        <path d="M4 9a1 1 0 011-1 7 7 0 017 7 1 1 0 11-2 0 5 5 0 00-5-5 1 1 0 01-1-1zM3 15a2 2 0 114 0 2 2 0 01-4 0z"/>
    </svg>
    INTERNET </a>


<a class="text-white text-sm uppercase font-bold p-3 {{Request::is('iraListaReportes')? 'bg-teal-500 ' : ''}}"
   href="{{route('iraListaReportesImpre')}}">
    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
        <path fill-rule="evenodd" d="M5 4v3H4a2 2 0 00-2 2v3a2 2 0 002 2h1v2a2 2 0 002 2h6a2 2 0 002-2v-2h1a2 2 0 002-2V9a2 2 0 00-2-2h-1V4a2 2 0 00-2-2H7a2 2 0 00-2 2zm8 0H7v3h6V4zm0 8H7v4h6v-4z" clip-rule="evenodd" />
    </svg>
    IMPRESOS</a>


{{--<header class="bg-white dark:bg-gray-800 w-full">--}}
{{--    <nav class="bg-white dark:bg-gray-800">--}}
{{--        <div class="container p-6 mx-auto w-full">--}}
{{--            <a class="block text-2xl font-bold text-center text-gray-800 dark:text-white lg:text-3xl hover:text-gray-700 dark:hover:text-gray-300" href="#">lista de reportes de radio</a>--}}

{{--            <div class="flex items-center justify-center mt-6 text-gray-600 capitalize dark:text-gray-300 w-full">--}}
{{--                <a href="{{route('iraListaReportes')}}" class="border-b-2 border-transparent hover:text-gray-800 dark:hover:text-gray-200 hover:border-blue-500 mx-1.5 sm:mx-6" {{Request::is('listado')? 'bg-teal-500 ' : ''}}>Radio</a>--}}

{{--                <a href="{{route('iraListaReportesTv')}}" class="border-b-2 border-transparent hover:text-gray-800 dark:hover:text-gray-200 hover:border-blue-500 mx-1.5 sm:mx-6">Television</a>--}}

{{--                <a href="#" class="border-b-2 border-transparent hover:text-gray-800 dark:hover:text-gray-200 hover:border-blue-500 mx-1.5 sm:mx-6">Internet</a>--}}

{{--                <a href="#" class="border-b-2 border-transparent hover:text-gray-800 dark:hover:text-gray-200 hover:border-blue-500 mx-1.5 sm:mx-6">Impresos</a>--}}


{{--            </div>--}}
{{--        </div>--}}
{{--    </nav>--}}

{{--</header>--}}
