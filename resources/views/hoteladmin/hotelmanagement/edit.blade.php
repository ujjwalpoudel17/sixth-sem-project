@extends('layouts.app')
@section('title','Edit Hotel')
@section('content')

<div>
  <form action="" method="POST">
    @csrf 
    <div class=" border border-2 relative m-10">
        <div class="p-6 space-y-6">
    
        <div class="grid grid-cols-6 gap-6">
            <div class="col-span-6 sm:col-span-3">
                <label for="name" class="text-sm font-medium text-gray-900 block mb-2" >Hotel Name</label>
                <input type="text" name="name"  class=" border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-cyan-600 focus:border-cyan-600 block w-full p-2.5" placeholder="" required="" value="{{ $hotelmanagement->name }}">
            </div>
            <div class="col-span-6 sm:col-span-3">
                <label for="category" class="text-sm font-medium text-gray-900 block mb-2">Address</label>
                <input type="text" name="address" class=" border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-cyan-600 focus:border-cyan-600 block w-full p-2.5" placeholder="" required="" value="{{ $hotelmanagement->address }}">
            </div>
            <div class="col-span-6 sm:col-span-3">
                <label for="brand" class="text-sm font-medium text-gray-900 block mb-2">Facilities</label>
                <input type="text" name="facilities"  class=" border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-cyan-600 focus:border-cyan-600 block w-full p-2.5" placeholder="" required="" value="{{ $hotelmanagement->facilities }}">
            </div>
            <div class="col-span-6 sm:col-span-3">
                <label for="brand" class="text-sm font-medium text-gray-900 block mb-2">Features</label>
                <input type="text" name="features"  class=" border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-cyan-600 focus:border-cyan-600 block w-full p-2.5" placeholder="" required="" value="{{ $hotelmanagement->features }}">
            </div>
            <div class="col-span-6 sm:col-span-3">
                <label for="price" class="text-sm font-medium text-gray-900 block mb-2">Starting Price</label>
                <input type="text" name="price"  class=" border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-cyan-600 focus:border-cyan-600 block w-full p-2.5" placeholder="" required="" value="{{ $hotelmanagement->price }}">
            </div>
            <div class="col-span-full">
                <label for="product-details" class="text-sm font-medium  block mb-2">Rules</label>
                <textarea id="product-details" name="rules" rows="3" class=" border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-cyan-600 focus:border-cyan-600 block w-full p-4" placeholder="" >{{ $hotelmanagement->rules }}</textarea>
            </div>
            <div class="col-span-full">
                <label for="product-details" class="text-sm font-medium  block mb-2">About</label>
                <textarea id="product-details" name="about" rows="5" class=" border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-cyan-600 focus:border-cyan-600 block w-full p-4" placeholder="">{{ $hotelmanagement->about }}</textarea>
            </div>
            <div class="col-span-full">
                <label for="product-details" class="text-sm font-medium  block mb-2">Photo:</label>
                <input type="file" name="photopath" class="border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-cyan-600 focus:border-cyan-600 block w-full p-4" multiple="" placeholder="">
            </div>
            <div class="col-span-full">
                <label for="product-details" class="text-sm font-medium  block mb-2">Photo 2:</label>
                <input type="file" name="photopath2" class="border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-cyan-600 focus:border-cyan-600 block w-full p-4" multiple="" placeholder="">
            </div>
            <div class="col-span-full">
                <label for="product-details" class="text-sm font-medium  block mb-2">Photo 3:</label>
                <input type="file" name="photopath3" class="border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-cyan-600 focus:border-cyan-600 block w-full p-4" multiple="" placeholder="">
            </div>
            <div class="col-span-full">
                <label for="product-details" class="text-sm font-medium  block mb-2">Photo 4:</label>
                <input type="file" name="photopath4" class="border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-cyan-600 focus:border-cyan-600 block w-full p-4" multiple="" placeholder="">
            </div>
        </div>
    </form>
</div>

<div class="p-6 border-gray-200 rounded-b">
    <a href="" class="text-white bg-blue-600 hover:bg-cyan-700 focus:ring-4 focus:ring-cyan-200 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Add</a>
    <a href="{{route('hotelmanagement.index')}}" class="text-white bg-red-600 hover:bg-cyan-700 focus:ring-4 focus:ring-cyan-200 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Cancel</a>
</div>

</div>

  </form>
</div>



@endsection