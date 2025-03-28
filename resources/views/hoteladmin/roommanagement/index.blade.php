@extends('layouts.app')
@section('title','Room Management')
@section('content')
<div class="flex justify-end">
    <a href="{{route('roommanagement.create')}}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-xl">Add Room</a>
</div>
<table class="border-2 w-full rounded-2xl mt-5">
                <tr class="bg-blue-500 text-white p-2">
                    <th class="border-2 p-2 font-medium">S.N</th>
                    <th class="border-2 p-2 font-medium">Hotel Name</th>
                    <th class="border-2 p-2 font-medium">Room Type</th>
                    <th class="border-2 p-2 font-medium">About Room</th>
                    <th class="border-2 p-2 font-medium">Features</th>
                    <th class="border-2 p-2 font-medium">Facilities</th>
                    <th class="border-2 p-2 font-medium">Room Rules</th>
                    <th class="border-2 p-2 font-medium">Price </th>
                    <th class="border-2 p-2 font-medium">Photopath</th>
                    <th class="border-2 p-2 font-medium ">Action</th>
                </tr>
  @foreach($roommanagement as $room)
<tr class="text-center">
    <td class="border p-2">{{$loop->iteration}}</td>
    <td class="border p-2">{{$room->hotelmanagement->name}}</td>
    <td class="border p-2">{{$room->roomtype}}</td>
    <td class="border p-2">{{$room->about}}</td>
    <td class="border p-2">{{$room->features}}</td>
    <td class="border p-2">{{$room->facilities}}</td>
    <td class="border p-2">{{$room->rules}}</td>
    <td class="border p-2">{{$room->price}}</td>
    <td class="border  grid grid-cols-2 gap-2">
            <img src="{{asset('images/room/'.$room->photopath)}}" alt="" class="w-16 h-16">
            <img src="{{asset('images/room/'.$room->photopath2)}}" alt="" class="w-16 h-16">
            <img src="{{asset('images/room/'.$room->photopath3)}}" alt="" class="w-16 h-16">
            <img src="{{asset('images/room/'.$room->photopath4)}}" alt="" class="w-16 h-16">
        </td>
    <td class="border p-2 items-center">
        <a href="{{route('roommanagement.edit')}}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-xl">Edit</a>
        <a href=""  class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded-xl mt-2 cursor-pointer">Delete</a>
    </td>
</tr>
@endforeach
          </table>


@endsection