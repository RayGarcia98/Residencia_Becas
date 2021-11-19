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
                    <x-jet-nav-link href="{{ route('area4') }}" :active="request()->routeIs('area4')">
                        {{ __('Inicio') }}
                    </x-jet-nav-link>
                </div>
               

    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <center>
                    <h1>BIENVENID@ AL ÁREA DE ATENCIÓN OPERATIVA</h1>
                </center>
            </div>
        </div>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white  sm:rounded-lg">
                <center>
                    <img  class="h-25  "height="400" width="700"  src="/img/bienestar.jpg">
                </center>
            </div>
        </div>
    </div>
</x-app-layout>
