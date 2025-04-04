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
        <a href="{{route('roommanagement.edit',$room->id)}}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-xl">Edit</a>
        <a onclick="showPopup('{{$room->id}}')"  class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded-xl mt-2 cursor-pointer">Delete</a>
    </td>
</tr>
@endforeach
          </table>

          <div id="popup" class="fixed inset-0 bg-gray-500 bg-opacity-50 backdrop-blur-sm hidden items-center justify-center ">
<div class="bg-white p-4 rounded-xl">
<h2 class="text-center text-xl font-bold">Are You Sure?</h2>
<form action="{{route('roommanagement.destroy')}}" method="POST">
    @csrf
    <input type="hidden" name="id" id="deleteid">
    <div class="flex justify-center mt-2">
        <button type="submit" class="bg-red-500 text-white px-3 py-2 rounded-xl">Delete</button>
<a onclick="hidePopup()" class="bg-blue-500 text-white px-3 py-2 rounded-xl ml-2">Cancel</a>
    </div> 
</form>
</div>
</div>

<script>
    function showPopup(a){
        document.getElementById('deleteid').value = a;
        document.getElementById('popup').classList.remove('hidden');
        document.getElementById('popup').classList.add('flex');
    }
    function hidePopup(){
        document.getElementById('popup').classList.remove('flex');
        document.getElementById('popup').classList.add('hidden');
    }
</script>


@endsection