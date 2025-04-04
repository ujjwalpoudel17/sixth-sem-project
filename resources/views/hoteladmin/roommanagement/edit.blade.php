@extends('layouts.app')
@section('title','Edit Room')
@section('content')
<div>
  <form action="{{route('roommanagement.update')}}" method="POST" enctype="multipart/form-data">
    @csrf 
    <div class=" border border-2 relative m-10 ">
<div class="p-6 space-y-6">
        <div class="grid grid-cols-6 gap-6">
        <div class="col-span-6 sm:col-span-3">
        <label for="category" class="text-sm font-medium text-gray-900 block ">Hotel Name</label>
        <select name="hotelmanagement_id" id="" class="border p-2 rounded-lg w-full mt-2">
        @foreach($hotelmanagement as $hotel)
        <option value="{{$hotel->id}}"
        @if($hotel->id == $hotel->hotelmanagement_id)
        selected
        @endif
        >{{$hotel->name}}</option>
        @endforeach
    </select>
    </div>
            <div class="col-span-6 sm:col-span-3">
                <label for="category" class="text-sm font-medium text-gray-900 block mb-2">Room Type</label>
                <input type="text" name="roomtype" class=" border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-cyan-600 focus:border-cyan-600 block w-full p-2.5" placeholder="" required="" value="{{old('roomtype') ?? $roommanagement->roomtype}}">
            </div>
            <div class="col-span-6 sm:col-span-3">
                <label for="brand" class="text-sm font-medium text-gray-900 block mb-2">Facilities</label>
                <input type="text" name="facilities" class=" border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-cyan-600 focus:border-cyan-600 block w-full p-2.5" placeholder="" required="" value="{{old('facilities') ?? $roommanagement->facilities}}">
            </div>
            <div class="col-span-6 sm:col-span-3">
                <label for="brand" class="text-sm font-medium text-gray-900 block mb-2">Features</label>
                <input type="text" name="features" class=" border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-cyan-600 focus:border-cyan-600 block w-full p-2.5" placeholder="" required="" value="{{old('features') ?? $roommanagement->features}}" >
            </div>
            <div class="col-span-6 sm:col-span-3">
                <label for="price" class="text-sm font-medium text-gray-900 block mb-2">Starting Price</label>
                <input type="text" name="price" class=" border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-cyan-600 focus:border-cyan-600 block w-full p-2.5" placeholder="" required="" value="{{old('price') ?? $roommanagement->price}}">
            </div>
            <div class="col-span-6 sm:col-span-3">
                <label for="price" class="text-sm font-medium text-gray-900 block mb-2">Discounted Price</label>
                <input type="text" name="discount_price" class=" border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-cyan-600 focus:border-cyan-600 block w-full p-2.5" placeholder="" required="" value="{{old('discount_price') ?? $roommanagement->discount_price}}">
            </div>
            <div class="col-span-full">
                <label for="product-details" class="text-sm font-medium  block mb-2">Rules</label>
                <textarea name="rules" rows="3" class=" border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-cyan-600 focus:border-cyan-600 block w-full p-4" placeholder="">{{old('rules') ?? $roommanagement->rules}}</textarea>
            </div>
            <div class="col-span-full">
                <label for="product-details" class="text-sm font-medium  block mb-2">About</label>
                <textarea name="about" rows="5" class=" border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-cyan-600 focus:border-cyan-600 block w-full p-4" placeholder="">"{{old('about') ?? $roommanagement->about}}"</textarea>
            </div>
            <div class="col-span-full">
                <label for="product-details" class="text-sm font-medium  block mb-2">Current photo:</label>
                <img src="{{asset('images/room/'.$roommanagement->photopath)}}" alt="" class="w-44 h-32">
                <input type="file" name="photopath" class=" border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-cyan-600 focus:border-cyan-600 block w-full p-4" placeholder="">
            </div>
            <div class="col-span-full">
                <label for="product-details" class="text-sm font-medium  block mb-2">Current photo2:</label>
                <img src="{{asset('images/room/'.$roommanagement->photopath2)}}" alt="" class="w-44 h-32">
                <input type="file" name="photopath2" class=" border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-cyan-600 focus:border-cyan-600 block w-full p-4"  placeholder="">
            </div>
            <div class="col-span-full">
                <label for="product-details" class="text-sm font-medium  block mb-2">Current photo3:</label>
                <img src="{{asset('images/room/'.$roommanagement->photopath3)}}" alt="" class="w-44 h-32">
                <input type="file" name="photopath3" class=" border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-cyan-600 focus:border-cyan-600 block w-full p-4"  placeholder="">
            </div>
            <div class="col-span-full">
                <label for="product-details" class="text-sm font-medium  block mb-2">Current photo4:</label>
                <img src="{{asset('images/room/'.$roommanagement->photopath4)}}" alt="" class="w-44 h-32">
                <input type="file" name="photopath4" class=" border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-cyan-600 focus:border-cyan-600 block w-full p-4"  placeholder="">
            </div>
        </div>
</div>

  <div class="flex mb-5 mx-6 gap-3">
        <button type="submit" class="bg-blue-500 text-white font-bold py-2 px-4 rounded-xl">Save</button>
       <a href="{{route('roommanagement.index')}}" class="bg-red-500 text-white font-bold py-2 px-4 rounded-xl">Cancel</a>
    </div>

</div>
  </form>
</div>


@endsection