@extends('layouts.app')
@section('title', 'Dashboard')
@section('content')

<div class="grid grid-cols-3 gap-6">
             
             <div class="bg-gradient-to-r from-blue-500 to-purple-500 text-white p-6 rounded-xl shadow-xl hover:scale-105 transform transition-all duration-300">
                 <h2 class="text-2xl font-semibold text-center">Total Reservation</h2>
                 <p class="text-xl font-medium text-center">100</p>
             </div>

           
             <div class="bg-gradient-to-r from-green-500 to-teal-500 text-white p-6 rounded-xl shadow-xl hover:scale-105 transform transition-all duration-300">
                 <h2 class="text-2xl font-semibold text-center">Booked Rooms</h2>
                 <p class="text-xl font-medium text-center">100</p>
             </div>

             
             <div class="bg-gradient-to-r from-yellow-500 to-orange-400 text-white p-6 rounded-xl shadow-xl hover:scale-105 transform transition-all duration-300">
                 <h2 class="text-2xl font-semibold text-center">Rooms Free</h2>
                 <p class="text-xl font-medium text-center">100</p>
             </div>
              
             <div class="bg-gradient-to-r from-zinc-500 to-orange-400 text-white p-6 rounded-xl shadow-xl hover:scale-105 transform transition-all duration-300">
                 <h2 class="text-2xl font-semibold text-center">Payments</h2>
                 <p class="text-xl font-medium text-center">100</p>
             </div>
         </div>


@endsection