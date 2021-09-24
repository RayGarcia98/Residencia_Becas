{{--<a  class="text-white text-sm uppercase font-bold p-3 {{Request::is('beneficiarios','region')? 'bg-teal-500 ' : ''}}" href="" ><svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M12 14l9-5-9-5-9 5 9 5z"></path><path d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222"></path></svg> prueba</a>--}}
{{--<a  class="text-white text-sm uppercase font-bold p-3 {{Request::is('alumnos1')? 'bg-teal-500 ' : ''}}" href="" ><svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path></svg>seccion2</a>--}}
{{--<a  class="text-white text-sm uppercase font-bold p-3 {{Request::is('alumnos2')? 'bg-teal-500 ' : ''}}" href="">  <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path></svg> seccion 3 </a>--}}

  <div class="flex justify-center w-max mx-auto p-5 rounded ">
  <a href="{{route('ruta.listadifucionproveedores')}}">
    <button class="border-2 border-transparent bg-white-500 ml-3 py-2 px-4 font-bold uppercase text-white rounded transition-all hover:border-blue-500 hover:bg-transparent hover:text-blue-500">Radio</button>
    </a>
    <a href="{{route('ruta.difucionproveedorestv')}}">
    <button class="border-2 border-transparent bg-white-500 ml-3 py-2 px-4 font-bold uppercase text-white rounded transition-all hover:border-purple-500 hover:bg-transparent hover:text-purple-500">Television</button>
    </a>
    <a href="{{route('ruta.difucionproveedoresinternet')}}">
    <button class="border-2 border-transparent bg-white-500 ml-3 py-2 px-4 font-bold uppercase text-white rounded transition-all hover:border-green-500 hover:bg-transparent hover:text-green-500">Internet</button>
    </a>
    <a href="{{route('ruta.difucionproveedoresimpresos')}}">
    <button class="border-2 border-transparent bg-white-500 ml-3 py-2 px-4 font-bold uppercase text-white rounded transition-all hover:border-red-500 hover:bg-transparent hover:text-red-500">Impresos</button>
      </a>
</div>
