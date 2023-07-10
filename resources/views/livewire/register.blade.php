<div>
    <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('img/cropped.jpg') }}">
        <link rel="shortcut icon" type="image/x-icon" href="{{ asset('img/174857.ico') }}">
        <title>s'inscrire|Linkedin</title>

        @vite('resources/css/app.css')
        
    </head>
    <body class="bg-slate-150">
        <div class="flex flex-row	">  
         <img class="mt-6 custom-right-margin pl-6 " style="width: 150px;" src="{{ asset('img/download.png') }}">
        </div>

       <div class="flex justify-center mt-2" >
        <h1 class="mt-8 text-3xl">Tirez le meilleur parti de votre vie professionnelle
        </h1>
       </div>

      

       <div class="flex justify-center  ">
        <form class="custom-top-margin  "   method="POST" enctype="multipart/form-data">
          @csrf
            <div class="grid grid-cols-1 gap-4">
              <div>
                <label class="block " >
                  <span class=" after:ml-0.5 after:text-red-500 block text-sm font-medium text-slate-700">
                    Nom
                  </span>
                  <input type="text" name="nom" class="w-72 mt-1 px-3 py-2 bg-white border shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none focus:border-sky-500 focus:ring-sky-500 block w-full rounded-md sm:text-sm focus:ring-1"  />
                </label>
                @error('nom')
                <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                @enderror
              </div>
             
                <div><label class="block " >
                    <span class=" after:ml-0.5 after:text-red-500 block text-sm font-medium text-slate-700">
                      E-mail
                    </span>
                    <input type="email" name="email" class="w-72 mt-1 px-3 py-2 bg-white border shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none focus:border-sky-500 focus:ring-sky-500 block w-full rounded-md sm:text-sm focus:ring-1"  />
                  </label>
                  @error('email')
                  <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                  @enderror
                </div>

                <div>   
                     <label class="block " >
                    <span class=" after:ml-0.5 after:text-red-500 block text-sm font-medium text-slate-700">
                        Mot de passe (6 caractères minimum)
                    </span>
                    <input type="password" name="password" class="w-72 mt-1 px-3 py-2 bg-white border shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none focus:border-sky-500 focus:ring-sky-500 block w-full rounded-md sm:text-sm focus:ring-1"  />
                    @error('password')
                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                  </label></div>
              </div>
              
              <div><label class="block " >
                <span class=" after:ml-0.5 after:text-red-500 block text-sm font-medium text-slate-700">
                  Photo
                </span>
                <input name="photo" class=" file:mr-4 file:py-2 file:px-4
                file:rounded-full file:border-0
                file:text-sm file:font-semibold
                file:bg-blue-50 file:text-blue-700
                hover:file:bg-blue-100" id="exampleFormControlInput1" type="file"
                placeholder="photo">
                @error('photo')
                <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                @enderror
              </label>
            </div>

              <div>
                <p class="font-thin text-xs	mt-5 place-items-center">En cliquant sur Accepter et s’inscrire, vous acceptez les </p>
                    <p class="font-thin text-xs	">Conditions d’utilisation, la Politique de confidentialité et </p>
                    <p class="font-thin text-xs	flex justify-center"> la Politique relative aux cookies de LinkedIn.</p>
              </div>
              <div class="flex justify-center mt-5 " >
                <button class="text-white rounded-full bg-sky-600 w-72 h-12 hover:bg-sky-800">Accepter et s'inscrire</button>
              </div>
        </form>
       </div>   

    </body>
</html>

</div>
