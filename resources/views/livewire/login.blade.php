<div>
    <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('img/cropped.jpg') }}">
        <link rel="shortcut icon" type="image/x-icon" href="{{ asset('img/174857.ico') }}">
        <title>s'identifier|Linkedin</title>

        @vite('resources/css/app.css')
        
    </head>
    <body class="bg-slate-150">
        <div class="flex flex-row	">  
         <img class="mt-6 custom-right-margin pl-6 " style="width: 150px;" src="{{ asset('img/download.png') }}">
        </div>
       <div class="flex justify-center mt-2" >
        <div class="grid grid-cols-1 gap-4">
            <div>
        <h1 class="mt-8  text-3xl">S’identifier
        </h1></div>
      
            <div>  <p class="font-thin text-xs	mt-5 place-items-center">Tenez-vous au courant des évolutions de votre monde professionnel </p></div>
       </div></div>

      

       <div class="flex justify-center  ">
        <form class="mt-8  " wire:submit.prevent='login' >
            @csrf
            <div class="grid grid-cols-1 gap-4">
                @if (Session::get('fail'))
                    
              
                <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
                    <span class="block sm:inline"> {{ Session::get('fail') }}</span>
                  </div>
                  @endif
                <div><label class="block " >
                    <span class=" after:ml-0.5 after:text-red-500 block text-sm font-medium text-slate-700">
                      E-mail
                    </span>
                    <input type="email" wire:model="form.email"  class="w-72 mt-1 px-3 py-2 bg-white border shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none focus:border-sky-500 focus:ring-sky-500 block w-full rounded-md sm:text-sm focus:ring-1"  />
                  </label>
                  @error('form.email')
                  <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                  @enderror
                </div>

                <div>   
                     <label class="block " >
                    <span class=" after:ml-0.5 after:text-red-500 block text-sm font-medium text-slate-700">
                        Mot de passe (6 caractères minimum)
                    </span>
                    <input type="password" wire:model="form.password"  class="w-72 mt-1 px-3 py-2 bg-white border shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none focus:border-sky-500 focus:ring-sky-500 block w-full rounded-md sm:text-sm focus:ring-1"  >
                    @error('form.password')
                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                  </label></div>
              </div>
              <div>
                <a href="#" style="color: rgb(72, 72, 255); text-decoration: none;"
                onmouseover="this.style.color='darkblue';"
                onmouseout="this.style.color='rgb(72, 72, 255)';">
                Mot de passe oublié ?
             </a>
              </div>
              
              <div class="flex justify-center mt-5 " >
                <button class="text-white rounded-full bg-sky-600 w-72 h-12 hover:bg-sky-800">S'identifer</button>
              </div>
        </form>
       </div>   

    </body>
</html>

</div>
