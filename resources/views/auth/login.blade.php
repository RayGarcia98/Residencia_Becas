<x-guest-layout>        
<!-- This is an example component -->

<div class="h-screen font-sans login bg-cover">
    
    
    <div>
    <h2 class="font-semibold text-xl text-center text-white leading-tight">
            {{ __('Sistema de seguimiento y control de documentación interna de la oficina de representación estatal de la CNBBBJ de Oaxaca') }}
        </h2>
</div>
<div class="container mx-auto h-full flex flex-1 justify-center items-center">
    <div class="w-full max-w-lg">
      <div class="leading-loose">
     
      
        <div class="max-w-sm m-4 p-10 bg-white bg-opacity-25 rounded shadow-xl">
        <div style="background-color: rgb(217, 197, 173)">  
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
       

@if (session('status'))
    <div class="mb-4 font-medium text-sm text-green-600">
        {{ session('status') }}
    </div>
@endif

<form method="POST" action="{{ route('login') }}">
    @csrf
    <p class="text-white font-medium text-center text-lg font-bold">LOGIN</p>
    <br>
    <div>
        <x-jet-label for="email" value="{{ __('Correo electrónico') }}" />
        <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
    </div>

    <div class="mt-4">
        <x-jet-label for="password" value="{{ __('Contraseña') }}" />
        <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
    </div>


    <div class="flex items-center justify-end mt-4">
    <button class="px-4 py-1 text-white font-light tracking-wider bg-green-800 hover:bg-green-900 rounded"
                  type="submit">Entrar</button>
    </div>

        </form>

      </div>
    </div>
  </div>
</div>
<div>
</div>

<style>
  .login{ 
 /*
    background: url('https://tailwindadmin.netlify.app/dist/images/login-new.jpeg');
  */
  background: url('/img/14.png');
  background-repeat: no-repeat;
  background-size: 1600px;
}
</style>

</x-guest-layout>
