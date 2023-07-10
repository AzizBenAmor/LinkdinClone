<div>
    <!DOCTYPE html>
    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
        <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('img/cropped.jpg') }}">
            <link rel="shortcut icon" type="image/x-icon" href="{{ asset('img/174857.ico') }}">
            <title>Linkedin</title>
            @vite('resources/css/app.css')
            <link 
 rel="stylesheet"
 href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
>
        </head>
        <body>
    {{-- <div class="flex justify-evenly bg-white border-b border-gray-300 pt-10 pb-10 w-full sticky top-0 z-50 h-10" >

<div class="flex ">

<img class="object-contain h-9 mr-10 " src="{{ asset('img/174857.png') }}"/>
<div class=" p-10 flex items-center border-r-4 h-22 text-gray-500 bg-blue-100">

    <i class="fas fa-search"></i>
    <input placeholder='Search' type="text" />
</div>
</div>
<div>



</div>




    </div> --}}
    <nav class="bg-gray-100  border-b">
        <div class="container mx-auto px-4 py-2 flex justify-between items-center">
          <div class="flex items-center">
            <img src="{{ asset('img/174857.png') }}" class="text-black text-lg font-bold mr-4  ml-44 w-12 h-12"/>
            <div class="flex items-center" >
                <input type="text" placeholder="Search" class="px-2 py-1 rounded bg-gray-200 ml-2 text-black focus:outline-none border w-80">
               
              </div>
          </div>
          <div class="flex space-x-7">
            <div class="flex flex-col items-center hover:text-gray-500">
                <i class="fa-solid fa-house  "></i>
                <a href="#" class="text-black ">Home</a>
              </div>
              <div class="flex flex-col items-center hover:text-gray-500">
                <i class="fa-solid fa-user-group" ></i>
                <a href="#" class="text-black ">My Network</a>
              </div>
              <div class="flex flex-col items-center hover:text-gray-500">
                <i class="fa-solid fa-suitcase"></i>
                <a href="#" class="text-black ">Jobs</a>
              </div>
              <div class="flex flex-col items-center hover:text-gray-500">
                <i class="fa-solid fa-message"></i>
                <a href="#" class="text-black ">Messaging</a>
              </div>
              <div class="flex flex-col items-center hover:text-gray-500">
                <i class="fa-solid fa-bell"></i>
                <a href="#" class="text-black ">Notifications</a>
              </div>
              <div class="flex flex-col items-center" wire:click="logout">
                <img class="h-7 w-7 rounded-full hover:cursor-pointer" src="{{ asset('uploads') }}/{{ Auth::user()->photo }}"/>
                <a href="#" class="text-black   hover:text-gray-500">Me</a>
              </div>
          </div>
        </div>
      </nav>
      <div class="flex m-4 p-11 sticky " >
        <div class=" w-56 bg-gray-100 h-96 rounded-xl border-r-4">
          <div class="py-4 px-4 flex justify-center">
          
            <img class="h-14 w-14 rounded-full  " src="{{ asset('uploads') }}/{{ Auth::user()->photo }}"/>
          </div>
          <div class="flex justify-center">
          <nav class="mt-2">
            <a href="#" class=" py-2 px-4 font-bold flex justify-center text-black hover:underline">{{ Auth::user()->name }}</a>
            <p href="#" class=" py-2 px-4 text-center text-black text-xs text-w">Student at Institut Supèrieur des Sciences Appliquées et de Technologie de Sousse - ISSAT Sousse</p>
         <hr />
         <div class="flex justify-center ">
            

         </div>
          </nav></div>
        </div>
        <div class="flex-1">
          <!-- Main Content Goes Here -->
        </div>
      </div>
        </body>
    </html>
</div>
