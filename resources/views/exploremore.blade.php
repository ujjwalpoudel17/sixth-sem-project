@extends('layouts.master')
@section('content')
<section class="border-2 py-12">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-semibold text-center text-gray-800">Find Your Perfect Stay</h2>
            <div class="flex justify-center mt-8">
                <div class="relative w-full max-w-lg">
                    <input type="text" placeholder="Search for hotels, cities" class="w-full px-4 py-2 rounded-lg border-2 border-blue-500 focus:outline-none focus:ring-2 focus:ring-blue-500"/>
                    <button id="searchBtn" class="absolute top-0 right-0 bg-blue-500 text-white px-4 py-2 rounded-r-lg">Search</button>
                </div>
            </div>
        </div>
    </section>



    <!-- Hotel List Section -->
    <section class="container mx-auto px-4 py-12">
        <h2 class="text-2xl font-semibold text-gray-800 ">Based on your search</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mt-8" id="hotel-list">
            
            <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                <img src="https://cf.bstatic.com/xdata/images/hotel/max1024x768/439008914.jpg?k=06c7ae9829ad6ab421d3a646b9e43de5fa796829f9076dd44f1eb6d951d22207&o=&hp=1" alt="Hotel 1" class="w-full h-56 object-cover">
                <div class="p-4">
                    <h3 class="text-xl font-semibold text-gray-800">Laliguras Guest House</h3>
                    <p class="text-gray-600 mt-2">A luxurious stay with amazing views in the heart of the city.</p>
                    <p class="font-semibold text-blue-500 mt-2">Starting from Rs.2000</p>
                    <button class="mt-4 w-full bg-blue-500 text-white py-2 rounded-lg">Book Now</button>
                </div>
            </div>
            <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                <img src="https://images.oyoroomscdn.com/uploads/hotel_image/245915/medium/241fddc7b2e9e68c.jpg" alt="Hotel 1" class="w-full h-56 object-cover">
                <div class="p-4">
                    <h3 class="text-xl font-semibold text-gray-800">Laliguras Guest House</h3>
                    <p class="text-gray-600 mt-2">A luxurious stay with amazing views in the heart of the city.</p>
                    <p class="font-semibold text-blue-500 mt-2">Starting from Rs.2000</p>
                    <button class="mt-4 w-full bg-blue-500 text-white py-2 rounded-lg">Book Now</button>
                </div>
            </div>
            <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                <img src="https://www.hotelbrisabenidorm.com/app/uploads/sites/478/bienvenido-hotel-brisa-03.jpg" alt="Hotel 1" class="w-full h-56 object-cover">
                <div class="p-4">
                    <h3 class="text-xl font-semibold text-gray-800">Laliguras Guest House</h3>
                    <p class="text-gray-600 mt-2">A luxurious stay with amazing views in the heart of the city.</p>
                    <p class="font-semibold text-blue-500 mt-2">Starting from Rs.2000</p>
                    <button class="mt-4 w-full bg-blue-500 text-white py-2 rounded-lg">Book Now</button>
                </div>
            </div>
            <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                <img src="https://www.hotels-of-new-delhi.com/data/Pics/OriginalPhoto/11758/1175891/1175891272/pic-oyo-hotel-dev-palace-delhi-national-capital-territory-of-india-5.JPEG" alt="Hotel 1" class="w-full h-56 object-cover">
                <div class="p-4">
                    <h3 class="text-xl font-semibold text-gray-800">Laliguras Guest House</h3>
                    <p class="text-gray-600 mt-2">A luxurious stay with amazing views in the heart of the city.</p>
                    <p class="font-semibold text-blue-500 mt-2">Starting from Rs.2000</p>
                    <button class="mt-4 w-full bg-blue-500 text-white py-2 rounded-lg">Book Now</button>
                </div>
            </div>
            </div>
    </section>


<!-- discount -->
<section class="container mx-auto px-4 py-12">
        <h2 class="text-2xl font-semibold text-gray-800 ">Get Good Discount on these Hotels</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mt-8" id="hotel-list">
            
            <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                <img src="https://cf.bstatic.com/xdata/images/hotel/max1024x768/439008914.jpg?k=06c7ae9829ad6ab421d3a646b9e43de5fa796829f9076dd44f1eb6d951d22207&o=&hp=1" alt="Hotel 1" class="w-full h-56 object-cover">
                <div class="p-4">
                    <h3 class="text-xl font-semibold text-gray-800">Laliguras Guest House</h3>
                    <p class="text-gray-600 mt-2">A luxurious stay with amazing views in the heart of the city.</p>
                    <p class="font-semibold text-blue-500 mt-2">Starting from Rs.2000</p>
                    <button class="mt-4 w-full bg-blue-500 text-white py-2 rounded-lg">Book Now</button>
                </div>
            </div>
            <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                <img src="https://images.oyoroomscdn.com/uploads/hotel_image/245915/medium/241fddc7b2e9e68c.jpg" alt="Hotel 1" class="w-full h-56 object-cover">
                <div class="p-4">
                    <h3 class="text-xl font-semibold text-gray-800">Laliguras Guest House</h3>
                    <p class="text-gray-600 mt-2">A luxurious stay with amazing views in the heart of the city.</p>
                    <p class="font-semibold text-blue-500 mt-2">Starting from Rs.2000</p>
                    <button class="mt-4 w-full bg-blue-500 text-white py-2 rounded-lg">Book Now</button>
                </div>
            </div>
            <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                <img src="https://www.hotelbrisabenidorm.com/app/uploads/sites/478/bienvenido-hotel-brisa-03.jpg" alt="Hotel 1" class="w-full h-56 object-cover">
                <div class="p-4">
                    <h3 class="text-xl font-semibold text-gray-800">Laliguras Guest House</h3>
                    <p class="text-gray-600 mt-2">A luxurious stay with amazing views in the heart of the city.</p>
                    <p class="font-semibold text-blue-500 mt-2">Starting from Rs.2000</p>
                    <button class="mt-4 w-full bg-blue-500 text-white py-2 rounded-lg">Book Now</button>
                </div>
            </div>
            <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                <img src="https://www.hotels-of-new-delhi.com/data/Pics/OriginalPhoto/11758/1175891/1175891272/pic-oyo-hotel-dev-palace-delhi-national-capital-territory-of-india-5.JPEG" alt="Hotel 1" class="w-full h-56 object-cover">
                <div class="p-4">
                    <h3 class="text-xl font-semibold text-gray-800">Laliguras Guest House</h3>
                    <p class="text-gray-600 mt-2">A luxurious stay with amazing views in the heart of the city.</p>
                    <p class="font-semibold text-blue-500 mt-2">Starting from Rs.2000</p>
                    <button class="mt-4 w-full bg-blue-500 text-white py-2 rounded-lg">Book Now</button>
                </div>
            </div>
            </div>
    </section>

@endsection