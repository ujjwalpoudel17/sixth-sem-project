@extends('layouts.app')
@section('title','Add Hotel')
@section('content')
<div>
  <form action="{{route('hotelmanagement.store')}}" method="POST" enctype="multipart/form-data">
    @csrf 
    <div class=" border border-2 relative m-10 ">
<div class="p-6 space-y-6">
        <div class="grid grid-cols-6 gap-6">
            <div class="col-span-6 sm:col-span-3">
                <label for="product-name" class="text-sm font-medium text-gray-900 block mb-2">Hotel Name</label>
                <input type="text" name="name" class=" border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-cyan-600 focus:border-cyan-600 block w-full p-2.5" placeholder="" required="">
            </div>
            <div class="col-span-6 sm:col-span-3">
                <label for="category" class="text-sm font-medium text-gray-900 block mb-2">Address</label>
                <input type="text" name="address" class=" border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-cyan-600 focus:border-cyan-600 block w-full p-2.5" placeholder="" required="">
            </div>
            <div class="col-span-6 sm:col-span-3">
                <label for="brand" class="text-sm font-medium text-gray-900 block mb-2">Facilities</label>
                <input type="text" name="facilities" class=" border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-cyan-600 focus:border-cyan-600 block w-full p-2.5" placeholder="" required="">
            </div>
            <div class="col-span-6 sm:col-span-3">
                <label for="brand" class="text-sm font-medium text-gray-900 block mb-2">Features</label>
                <input type="text" name="features" class=" border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-cyan-600 focus:border-cyan-600 block w-full p-2.5" placeholder="" required="">
            </div>
            <div class="col-span-6 sm:col-span-3">
                <label for="price" class="text-sm font-medium text-gray-900 block mb-2">Starting Price</label>
                <input type="text" name="price" class=" border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-cyan-600 focus:border-cyan-600 block w-full p-2.5" placeholder="" required="">
            </div>
            <div class="col-span-6 sm:col-span-3">
                <label for="price" class="text-sm font-medium text-gray-900 block mb-2">Discounted Price</label>
                <input type="text" name="discount_price" class=" border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-cyan-600 focus:border-cyan-600 block w-full p-2.5" placeholder="" required="">
            </div>
            <div class="col-span-full">
                <label for="product-details" class="text-sm font-medium  block mb-2">Rules</label>
                <textarea name="rules" rows="3" class=" border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-cyan-600 focus:border-cyan-600 block w-full p-4" placeholder=""></textarea>
            </div>
            <div class="col-span-full">
                <label for="product-details" class="text-sm font-medium  block mb-2">About</label>
                <textarea name="about" rows="5" class=" border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-cyan-600 focus:border-cyan-600 block w-full p-4" placeholder=""></textarea>
            </div>
            <div class="col-span-full">
                <label for="product-details" class="text-sm font-medium  block mb-2">Photo 1:</label>
                <input type="file" name="photopath" class=" border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-cyan-600 focus:border-cyan-600 block w-full p-4" placeholder="">
            </div>
            <div class="col-span-full">
                <label for="product-details" class="text-sm font-medium  block mb-2">Photo 2:</label>
                <input type="file" name="photopath2" class=" border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-cyan-600 focus:border-cyan-600 block w-full p-4"  placeholder="">
            </div>
            <div class="col-span-full">
                <label for="product-details" class="text-sm font-medium  block mb-2">Photo 3:</label>
                <input type="file" name="photopath3" class=" border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-cyan-600 focus:border-cyan-600 block w-full p-4"  placeholder="">
            </div>
            <div class="col-span-full">
                <label for="product-details" class="text-sm font-medium  block mb-2">Photo 4:</label>
                <input type="file" name="photopath4" class=" border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-cyan-600 focus:border-cyan-600 block w-full p-4"  placeholder="">
            </div>
        </div>
</div>

  <div class="flex mb-5 mx-6 gap-3">
        <button type="submit" class="bg-blue-500 text-white font-bold py-2 px-4 rounded-xl">Add Hotel</button>
       <a href="{{route('hotelmanagement.index')}}" class="bg-red-500 text-white font-bold py-2 px-4 rounded-xl">Cancel</a>
    </div>

</div>
  </form>
</div>


@endsection