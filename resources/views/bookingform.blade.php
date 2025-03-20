@extends('layouts.master')
@section('content')
<div class="bg-gray-100">
    
    <div class="flex flex-col md:flex-row min-h-screen items-center justify-center p-6 sm:p-12">
      
      <!-- Left Section (Bigger Image) -->
      <!-- <div class="flex justify-center md:w-1/2">
        <img src="https://st.depositphotos.com/18722762/51522/v/450/depositphotos_515228796-stock-illustration-online-registration-sign-login-account.jpg" 
             class="w-full md:w-3/4 lg:w-full max-w-2xl rounded-lg shadow-md" />
      </div> -->

      <!-- Right Section (Form) -->
      <div class="w-full md:w-1/2 max-w-lg bg-white p-8 rounded-lg shadow-lg mt-6 md:mt-0">
        <h1 class="text-3xl font-bold text-blue-900 mb-6 text-center">User Signup</h1>

        <form class="space-y-4">
          <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <div>
              <label class="block text-gray-600">First Name</label>
              <input type="text" required class="w-full p-2 border rounded-md focus:ring-2 focus:ring-blue-500">
            </div>
            <div>
              <label class="block text-gray-600">Last Name</label>
              <input type="text" required class="w-full p-2 border rounded-md focus:ring-2 focus:ring-blue-500">
            </div>
          </div>

          <div>
            <label class="block text-gray-600">Email Address</label>
            <input type="email" required class="w-full p-2 border rounded-md focus:ring-2 focus:ring-blue-500">
          </div>

          <div>
            <label class="block text-gray-600">Address</label>
            <input type="tel" required class="w-full p-2 border rounded-md focus:ring-2 focus:ring-blue-500">
          </div>

          <div>
            <label class="block text-gray-600">Phone Number</label>
            <input type="tel" required class="w-full p-2 border rounded-md focus:ring-2 focus:ring-blue-500">
          </div>

          <div>
            <label class="block text-gray-600">Citizenship Card/ID</label>
            <input type="file" class="w-full p-2 border rounded-md">
          </div>
          <p class="font-medium">Choose Payment Method:</p>
          <div class="flex items-center justify-center text-center">
            <a href="#" class=" hover:underline ">
                <img src="https://www.drupal.org/files/project-images/esewa.png" class="w-50 h-20" alt="">Esewa
            </a>
            <a href="#" class=" hover:underline ">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS6iuA5afXQAqElwakslhFezUlKGwV2o35NNg&s" class="w-50 h-20" alt="">Khalti
            </a>
          </div>

          <button type="submit" class="w-full bg-blue-700 text-white py-2 rounded-md hover:bg-blue-800 focus:ring-2 focus:ring-blue-500">
            Submit
          </button>
        </form>
      </div>

    </div>

</div>



@endsection