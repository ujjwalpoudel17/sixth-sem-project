<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    </head>
    <body class="font-sans antialiased">
    <div class="flex">
     
     <div class="w-72 min-h-screen bg-gradient-to-b from-teal-100 to-teal-500 text-white">
       
         <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRG1X4NMbobLgymhLJONDFJ7GEuVJI_Ay1kWg&s" alt="profile" class="rounded-full mx-auto mt-10 w-2/3">
         
         <div class="mt-28 text-start font-light p-2 rounded-xl bg-teal-600 transition duration-300 ease-in-out hover:scale-105 hover:bg-blue-700 ">
             <a href="" class="font-medium mx-4 "><i class="fa-solid fa-gauge"></i> Dashboards</a>
         </div>

       
         <div class="relative mt-2">
            <button class="w-full text-start font-light p-2 rounded-xl bg-teal-600 transition duration-300 ease-in-out hover:scale-105 hover:bg-blue-700 flex justify-between items-center" id="dropdownButton">
                <span class="font-medium mx-4"><i class="fa-solid fa-list-check"></i> Hotel Management</span>
                <i class="fa-solid fa-chevron-down"></i>
            </button>
            <div class="dropdown-content hidden bg-teal-500 w-full rounded-xl transition duration-300 ease-in-out mt-2 z-10 mx-auto">
                <a href="{{route('hotelmanagement.index')}}" class="block p-2 transition duration-300 ease-in-out hover:scale-105 hover:bg-blue-700 rounded-2xl"><span class="mx-4"><i class="fa-solid fa-hotel"></i> Add Your Hotel</span></a>
            </div>
         </div>

         <div class="relative mt-2">
            <button class="w-full text-start font-light p-2 rounded-xl bg-teal-600 transition duration-300 ease-in-out hover:scale-105 hover:bg-blue-700 flex justify-between items-center" id="dropdownButton2">
                <span class="font-medium mx-4"><i class="fa-solid fa-house-user"></i> Room Management</span>
                <i class="fa-solid fa-chevron-down"></i>
            </button>
            <div class="dropdown-content2 hidden bg-teal-500 w-full rounded-xl transition duration-300 ease-in-out mt-2 z-10 mx-auto">
                <a href="" class="block p-2 transition duration-300 ease-in-out hover:scale-105 hover:bg-blue-700 rounded-2xl"><span class="mx-4"><i class="fa-solid fa-bed"></i> Add Room</span></a>
            </div>
         </div>



         <div class="mt-2 text-start font-light p-2 rounded-xl bg-teal-600 transition duration-300 ease-in-out hover:scale-105 hover:bg-blue-700">
             <a href="" class="font-medium mx-4"><i class="fa-solid fa-tag"></i> Discount and Promotion</a>
         </div>
         <div class="mt-2 text-start font-light p-2 rounded-xl bg-teal-600 transition duration-300 ease-in-out hover:scale-105 hover:bg-blue-700">
             <a href="" class="font-medium mx-4"><i class="fa-solid fa-registered"></i> Reservations</a>
         </div>
         <div class="mt-2 text-start font-light p-2 rounded-xl bg-teal-600 transition duration-300 ease-in-out hover:scale-105 hover:bg-blue-700">
             <a href="" class="font-medium mx-4"><i class="fa-solid fa-flag-checkered"></i> Reports and analytics</a>
         </div>
         <div class="mt-2 text-start font-light p-2 rounded-xl bg-teal-600 transition duration-300 ease-in-out hover:scale-105 hover:bg-blue-700">
             <a href="" class="font-medium mx-4"><i class="fa-solid fa-money-bill-wave"></i> Payments</a>
         </div>
         <div class="mt-2 text-start font-light p-2 rounded-xl bg-teal-600 transition duration-300 ease-in-out hover:scale-105 hover:bg-blue-700">
             <a href="" class="font-medium mx-4"><i class="fa-regular fa-user"></i> My Profile</a>
         </div>
         <div class="mt-2 text-start font-light p-2 rounded-xl bg-teal-600 transition duration-300 ease-in-out hover:scale-105 hover:bg-blue-700">
             <a href="" class="font-medium mx-4"><i class="fa-solid fa-key"></i> Change Password</a>
         </div>
         <div class="mt-2 text-start font-light p-2 rounded-xl bg-teal-600 transition duration-300 ease-in-out hover:scale-105 hover:bg-blue-700">
             <a href="" class="font-medium mx-4"><i class="fa-solid fa-right-from-bracket"></i> Logout</a>
         </div>
     </div>

      <div class="p-6 flex-1 min-h-screen">
          
          <div class="flex justify-between items-center mb-6">
              <h2 class="text-3xl font-bold text-red-500">@yield('title')</h2>
              <div class="flex items-center space-x-4">
                  <p class="font-medium text-gray-700">Hello Ujjwal</p>
                  <img src="https://avatars.githubusercontent.com/u/133738668?v=4" alt="" class="w-12 h-12 border-2 border-gray-200 rounded-full">
              </div>
          </div>
          <hr class="h-1 bg-gradient-to-r from-purple-600 to-indigo-500 mb-8">

          @yield('content')
  </div>
    </div>

    <script>
        // Dropdown functionality using JavaScript
        const dropdownButton = document.getElementById('dropdownButton');
        const dropdownContent = document.querySelector('.dropdown-content');

        dropdownButton.addEventListener('click', () => {
            // Toggle visibility of the dropdown content
            dropdownContent.classList.toggle('hidden');
        });

        const dropdownButton2 = document.getElementById('dropdownButton2');
        const dropdownContent2 = document.querySelector('.dropdown-content2');

        dropdownButton2.addEventListener('click', () => {
            // Toggle visibility of the dropdown content
            dropdownContent2.classList.toggle('hidden');
        });

    </script>
    </body>
</html>
