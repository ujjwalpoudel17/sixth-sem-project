@extends('layouts.app')
@section('title','Hotel Management')
@section('content')
<div class="flex justify-end">
    <a href="{{route('hotelmanagement.create')}}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-xl">Add Hotel</a>
</div>
<table class="border-2 w-full rounded-2xl mt-5">
                <tr class="bg-blue-500 text-white p-2">
                    <th class="border-2 p-2 font-medium">S.N</th>
                    <th class="border-2 p-2 font-medium">Hotel Name</th>
                    <th class="border-2 p-2 font-medium">Address</th>
                    <th class="border-2 p-2 font-medium">About</th>
                    <th class="border-2 p-2 font-medium">Features</th>
                    <th class="border-2 p-2 font-medium">Facilities</th>
                    <th class="border-2 p-2 font-medium">Hotel Rules</th>
                    <th class="border-2 p-2 font-medium">Starting Price</th>
                    <th class="border-2 p-2 font-medium">Photopath</th>
                    <th class="border-2 p-2 font-medium ">Action</th>
                </tr>
    @foreach($hotelmanagement as $hotel)
<tr class="text-center">
    <td class="border p-2">1.</td>
    <td class="border p-2">{{$hotel->name}}</td>
    <td class="border p-2">{{$hotel->address}}</td>
    <td class="border p-2">{{$hotel->about}}</td>
    <td class="border p-2">{{$hotel->features}}</td>
    <td class="border p-2">{{$hotel->facilities}}</td>
    <td class="border p-2">{{$hotel->rules}}</td>
    <td class="border p-2">{{$hotel->price}}</td>
    <td class="border  grid grid-cols-2 gap-2">
            <img src="{{asset('images/hotel/'.$hotel->photopath)}}" alt="" class="w-16 h-16">
            <img src="{{asset('images/hotel/'.$hotel->photopath2)}}" alt="" class="w-16 h-16">
            <img src="{{asset('images/hotel/'.$hotel->photopath3)}}" alt="" class="w-16 h-16">
            <img src="{{asset('images/hotel/'.$hotel->photopath4)}}" alt="" class="w-16 h-16">
        </td>
    <td class="border p-2 items-center">
        <a href="{{route('hotelmanagement.edit',$hotel->id)}}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-xl">Edit</a>
        <a href=""  class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded-xl mt-2 cursor-pointer">Delete</a>
    </td>
</tr>
@endforeach
          </table>



@endsection