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
    <td class="border p-2">{{$loop->iteration}}</td>
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
        <a onclick="showPopup('{{$hotel->id}}')"  class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded-xl mt-2 cursor-pointer">Delete</a>
    </td>
</tr>
@endforeach
          </table>

          <div id="popup" class="fixed inset-0 bg-black/40 backdrop-blur-sm hidden items-center justify-center z-50">
    <div class="bg-white p-6 rounded-2xl shadow-xl w-full max-w-sm animate-scale-in">
        <h2 class="text-center text-2xl font-semibold text-gray-800 mb-4">⚠️ Are You Sure?</h2>
        <form action="{{route('hotelmanagement.destroy')}}" method="POST">
            @csrf
            <input type="hidden" name="id" id="deleteid">
            <div class="flex justify-center mt-4 gap-4">
                <button type="submit" class="bg-red-600 hover:bg-red-700 text-white px-4 py-2 rounded-lg transition duration-200 ease-in-out shadow-md">Delete</button>
                <a onclick="hidePopup()" class="bg-gray-300 hover:bg-gray-400 text-gray-800 px-4 py-2 rounded-lg cursor-pointer transition duration-200 ease-in-out shadow-md">Cancel</a>
            </div>
        </form>
    </div>
</div>

<style>
    .animate-scale-in {
        animation: scaleIn 0.3s ease-out;
    }

    @keyframes scaleIn {
        from {
            transform: scale(0.8);
            opacity: 0;
        }
        to {
            transform: scale(1);
            opacity: 1;
        }
    }
</style>


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