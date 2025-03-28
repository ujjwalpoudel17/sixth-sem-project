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
<body class="font-sans antialiased bg-gray-100 text-gray-800">

<div class="flex min-h-screen">
    
    <div class="w-72 bg-gradient-to-b from-indigo-700 to-purple-800 text-white shadow-lg flex flex-col justify-between">
        <!-- Profile -->
        <div>
            <div class="flex justify-center mt-10">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRG1X4NMbobLgymhLJONDFJ7GEuVJI_Ay1kWg&s" 
                     alt="profile" 
                     class="rounded-full w-32 h-32 border-4 border-white shadow-lg object-cover">
            </div>

       
            <nav class="mt-12 space-y-4 px-4">
                <a href="#" class="flex items-center px-4 py-3 rounded-lg hover:bg-indigo-600 transition transform hover:scale-105 shadow">
                    <i class="fa-solid fa-gauge mr-3"></i> Dashboards
                </a>

           
                <div class="relative">
                    <button id="dropdownButton" class="flex justify-between items-center px-4 py-3 w-full rounded-lg hover:bg-indigo-600 transition transform hover:scale-105 shadow">
                        <span><i class="fa-solid fa-list-check mr-3"></i> Hotel Management</span>
                        <i class="fa-solid fa-chevron-down"></i>
                    </button>
                    <div class="dropdown-content hidden bg-indigo-600 rounded-lg mt-2 space-y-2 p-2 shadow">
                        <a href="{{route('hotelmanagement.index')}}" class="block px-4 py-2 rounded hover:bg-indigo-500 transition"> <i class="fa-solid fa-hotel"></i>  Add Your Hotel</a>
                    </div>
                </div>

                <div class="relative">
                    <button id="dropdownButton2" class="flex justify-between items-center px-4 py-3 w-full rounded-lg hover:bg-indigo-600 transition transform hover:scale-105 shadow">
                        <span><i class="fa-solid fa-house-user mr-3"></i> Room Management</span>
                        <i class="fa-solid fa-chevron-down"></i>
                    </button>
                    <div class="dropdown-content2 hidden bg-indigo-600 rounded-lg mt-2 space-y-2 p-2 shadow">
                        <a href="{{route('roommanagement.index')}}" class="block px-4 py-2 rounded hover:bg-indigo-500 transition"><i class="fa-solid fa-bed"></i>  Add Room</a>
                    </div>
                </div>

                <a href="#" class="flex items-center px-4 py-3 rounded-lg hover:bg-indigo-600 transition transform hover:scale-105 shadow">
                    <i class="fa-solid fa-tag mr-3"></i> Discount & Promotion
                </a>

                <a href="#" class="flex items-center px-4 py-3 rounded-lg hover:bg-indigo-600 transition transform hover:scale-105 shadow">
                    <i class="fa-solid fa-registered mr-3"></i> Reservations
                </a>

                <a href="#" class="flex items-center px-4 py-3 rounded-lg hover:bg-indigo-600 transition transform hover:scale-105 shadow">
                    <i class="fa-solid fa-flag-checkered mr-3"></i> Reports & Analytics
                </a>

                <a href="#" class="flex items-center px-4 py-3 rounded-lg hover:bg-indigo-600 transition transform hover:scale-105 shadow">
                    <i class="fa-solid fa-money-bill-wave mr-3"></i> Payments
                </a>

                <a href="#" class="flex items-center px-4 py-3 rounded-lg hover:bg-indigo-600 transition transform hover:scale-105 shadow">
                    <i class="fa-regular fa-user mr-3"></i> My Profile
                </a>

                <a href="#" class="flex items-center px-4 py-3 rounded-lg hover:bg-indigo-600 transition transform hover:scale-105 shadow">
                    <i class="fa-solid fa-key mr-3"></i> Change Password
                </a>

                <a href="#" class="flex items-center px-4 py-3 rounded-lg hover:bg-red-600 transition transform hover:scale-105 shadow">
                    <i class="fa-solid fa-right-from-bracket mr-3"></i> Logout
                </a>
            </nav>
        </div>

        <!-- Footer -->
        <div class="text-center text-sm mb-4 px-4">
            &copy; {{ date('Y') }} Hotel Admin
        </div>
    </div>


    <div class="flex-1 p-8">
       
        <div class="flex justify-between items-center mb-4">
            <h2 class="text-3xl font-bold text-indigo-700">@yield('title')</h2>
            <div class="flex items-center space-x-4">
                <p class="font-medium text-gray-700">Hello Ujjwal</p>
                <img src="https://avatars.githubusercontent.com/u/133738668?v=4" 
                     alt="profile" 
                     class="w-12 h-12 border-2 border-gray-200 rounded-full shadow">
            </div>
        </div>

        <hr class="h-1 bg-gradient-to-r from-indigo-500 to-purple-500 mb-8 rounded-full">

     
        <div class="bg-white rounded-xl shadow-lg p-6">
            @yield('content')
        </div>
    </div>
</div>

<!-- Dropdown JavaScript -->
<script>
    const dropdownButton = document.getElementById('dropdownButton');
    const dropdownContent = document.querySelector('.dropdown-content');

    dropdownButton.addEventListener('click', () => {
        dropdownContent.classList.toggle('hidden');
    });

    const dropdownButton2 = document.getElementById('dropdownButton2');
    const dropdownContent2 = document.querySelector('.dropdown-content2');

    dropdownButton2.addEventListener('click', () => {
        dropdownContent2.classList.toggle('hidden');
    });
</script>

</body>
</html>
