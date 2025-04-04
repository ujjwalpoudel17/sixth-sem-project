@extends('layouts.master')
@section('content')

<div class="">
    <div class="grid grid-cols-1 mb-5 mt-5">
        <div class="grid grid-cols-2  mt-10 gap-20 mx-32 border-b-2 rounded-1">
       
            <div class="">
               
                <img src="{{asset('images/hotel/'.$hotelmanagement->photopath)}}"
                     class="rounded-2xl w-full h-72 object-fill " 
                     alt="Hotel Moonlight and Bar" />
                     
                
                <div class="grid grid-cols-3 gap-4 mt-4">
                    <img src="{{asset('images/hotel/'.$hotelmanagement->photopath2)}}" class="w-full h-44 object-cover rounded-lg shadow-lg" alt="" />
                    <img src="{{asset('images/hotel/'.$hotelmanagement->photopath3)}}" class="w-full h-44 object-cover rounded-lg shadow-lg" alt="" />
                    <img src="{{asset('images/hotel/'.$hotelmanagement->photopath4)}}" class="w-full h-44 object-cover rounded-lg shadow-lg" alt="" />
                </div>
            </div>

           
            <div class="flex flex-col justify-center">
                <p class="mx-10 font-bold text-3xl mb-4 text-center text-blue-500">{{$hotelmanagement->name}}</p>
                <span class="font-semibold text-blue-500 text-xl">About :</span>   
                <p class="font-light mt-2 mb-4"> 
                   {{$hotelmanagement->about}}
                </p>

                <span class="font-semibold text-blue-500 text-xl">Features :</span>   
                <p class="font-light mt-2">{{$hotelmanagement->features}}</p>
                <p class="font-light">{{$hotelmanagement->features}}</p>
                <p class="font-light mb-4">{{$hotelmanagement->features}}</p>

                <span class="font-semibold text-blue-500 text-xl">Available Facilities :</span>   
                <p class="font-light mt-2">{{$hotelmanagement->facilities}}</p>
                <p class="font-light">{{$hotelmanagement->facilities}}</p>
                <p class="font-light mb-4">{{$hotelmanagement->facilities}}</p>

                <span class="font-semibold text-blue-500 text-xl">Address :</span>   
                <p class="font-light mt-2 mb-10">{{$hotelmanagement->address}}</p>
                
            </div>
          
        </div>
    </div>
</div>

<!-- rules section -->


 
 <!-- <h1 class="text-2xl mx-32 font-medium mb-2 text-red-500">Hotel Rules</h1>
 <p class="mx-32 font-sans mb-4">Nirvana Boutique Hotel takes special requests - add in the next step!</p> -->





<!-- <div class="flex flex-1 mx-32 shadow-xl border-2 mt-4">
<div class="grid grid-cols-2 shadow-xl border-b-2">
<div class=" text-center  w-50">
<p>Check-in</p>
</div>
<div class="mx-6 w-full">
<p>From 10:00-3:00</p>
<p>You'll need to let the property know in advance what time you'll arrive.</p>
</div>
<div class=" text-center  w-50">
<p>Check-in</p>
</div>
<div class="mx-6 w-full">
<p>From 10:00-3:00</p>
<p>You'll need to let the property know in advance what time you'll arrive.</p>
</div>



</div>
</div> -->



<div>
  <div class="px-4 sm:px-0 mx-32">
    <p class=" font-semibold text-gray-900 text-2xl text-red-500">Hotel Rules</p>
    <p class="mt-1 max-w-2xl text-sm/6 text-gray-500">Nirvana Boutique Hotel takes special requests - add in the next step!</p>
  </div>
  <div class="mt-6 border-t border-gray-100 mx-32 border-2">
    <dl class="divide-y divide-gray-100">
      <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
        <dt class="text-sm/6 font-medium text-gray-900 text-center">Check in:</dt>
        <dd class="mt-1 text-sm/6 text-gray-700 sm:col-span-2 sm:mt-0">{{$hotelmanagement->rules}}</dd>
      </div>
      <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
        <dt class="text-sm/6 font-medium text-gray-900 text-center">Check out:</dt>
        <dd class="mt-1 text-sm/6 text-gray-700 sm:col-span-2 sm:mt-0">{{$hotelmanagement->rules}}</dd>
      </div>
      <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
        <dt class="text-sm/6 font-medium text-gray-900 text-center">Age Restriction:</dt>
        <dd class="mt-1 text-sm/6 text-gray-700 sm:col-span-2 sm:mt-0">{{$hotelmanagement->rules}}</dd>
      </div>
      <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
        <dt class="text-sm/6 font-medium text-gray-900 text-center">Pets</dt>
        <dd class="mt-1 text-sm/6 text-gray-700 sm:col-span-2 sm:mt-0">{{$hotelmanagement->rules}}</dd>
      </div>
      <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
        <dt class="text-sm/6 font-medium text-gray-900 text-center">Parties</dt>
        <dd class="mt-1 text-sm/6 text-gray-700 sm:col-span-2 sm:mt-0">{{$hotelmanagement->rules}}</dd>
      </div>
    </dl>
  </div>
</div>


<div class="px-4 sm:px-0 mx-32 mt-10">
    <h3 class=" font-semibold text-gray-900 text-2xl text-indigo-500">Available Rooms</h3>
    <p class="mt-1 max-w-2xl  text-gray-500">Here are the rooms that are available for this hotel</p>
  </div>

<div class="mx-32  ">
    <table class="border-2 rounded-2xl w-full table-fixed">
        <thead>
            <tr class="w-full">
                <th class="border-2 bg-blue-500 text-white p-1 font-medium text-center">Room Type</th>
                <th class="border-2 bg-blue-500 text-white p-1 font-medium text-center">Number of guests</th>
                <th class="border-2 bg-blue-500 text-white p-1 font-medium text-center">Prices</th>
            </tr>
        </thead>
        <tbody>
          @foreach($roommanagement as $room)
          <tr>
            <td class="border p-2 ">
              <u>
                  <a href="{{route('roomdetails',$room->id)}}" class="text-blue-500 font-bold">{{$room->roomtype}}</a>
                  </u>
                </td>
                <td class="border p-2 text-center font-bold">2</td>
                <td class="border p-2 text-center font-bold">Rs. {{$room->price}} per Day</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>






<div class="px-4 sm:px-0 mx-32 mt-10">
    <h3 class=" font-semibold text-gray-900 text-2xl text-indigo-500">Supported Payment Methods</h3>
    <p class="mt-1 max-w-2xl text-sm/6 text-gray-500">Choose Method of Payment</p>
  </div>
  <div class="flex justify-start mt-4 rounded-1 p-6 text-center mx-32 border-2 mb-10">
<a href="" class="">
    <img src="https://techlekh.com/wp-content/uploads/2023/01/eSewa-Money-Transfer.jpg" class="w-full h-32 object-cover rounded-lg" alt="" />
    <p class="font-light text-lg mt-4">Esewa</p>
</a>

<a href="" class="">
    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS6iuA5afXQAqElwakslhFezUlKGwV2o35NNg&s" class="w-full h-32 object-cover rounded-lg" alt="" />
    <p class="font-light text-lg mt-4">Khalti</p>
</a>

  </div>





<!-- comment section -->
        <div class="bg-white rounded-lg border p-2 my-4 mx-32">

<h3 class="font-bold">Leave a Reply</h3>

<form>

    <div class="flex flex-col">

        <div class="border rounded-md p-3 ml-3 my-3">
            <div class="flex gap-3 items-center">

                <img src="https://avatars.githubusercontent.com/u/22263436?v=4"
                    class="object-cover w-8 h-8 rounded-full 
                    border-2 border-emerald-400  shadow-emerald-400
                    ">

                <h3 class="font-bold">
                    User name
                </h3>
            </div>


            <p class="text-gray-600 mt-2">
                this is sample commnent
            </p>

        </div>

        <div class="border rounded-md p-3 ml-3 my-3">
            <div class="flex gap-3 items-center">

                <img src="https://avatars.githubusercontent.com/u/22263436?v=4"
                    class="object-cover w-8 h-8 rounded-full 
                    border-2 border-emerald-400  shadow-emerald-400
                    ">

                <h3 class="font-bold">
                    User name
                </h3>
            </div>


            <p class="text-gray-600 mt-2">
                this is sample commnent
            </p>

        </div>





    </div>



    <div class="w-full px-3 my-2">
        <textarea
            class="bg-gray-100 rounded border border-gray-400 leading-normal resize-none w-full h-20 py-2 px-3 font-medium placeholder-gray-700 focus:outline-none focus:bg-white"
            name="body" placeholder='Type Your Comment' required></textarea>
    </div>

    <div class="w-full flex justify-end px-3">
        <input type='submit' class="px-2.5 py-1.5 rounded-md text-white text-sm bg-indigo-500" value='Post Comment'>
    </div>
</form>


</div>
        
    </div>
</div>


<!-- related section -->
<div>
      <h1 class="font-bold text-xl md:text-2xl mx-32 mt-10">
        Related Hotels You May Like
      </h1>

      <div class="mx-32 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-6 gap-6 rounded-2xl mt-4 mb-10 md:mb-28">
        <div class="shadow border-2 rounded-2xl">
          <img src="https://th.bing.com/th/id/OIP.-wcXcPg9mUaWmMJuoWXgHgAAAA?w=303&h=202&c=7&r=0&o=5&dpr=1.3&pid=1.7" class="rounded-t-2xl w-full h-52 object-cover" alt="Hotel Moonlight and Bar" />
          <p class="mx-4 mt-4 font-bold">Hotel Moonlight and Bar</p>
          <div class="flex justify-between items-center mx-4 mt-4">
            <p class="font-medium"><i class="fa-solid fa-water-ladder text-blue-600"></i> Pool</p>
            <p class="font-medium"><i class="fa-solid fa-water text-blue-600"></i> Lakeview</p>
            <p class="font-medium"><i class="fa-solid fa-spa text-blue-600"></i> Spa</p>
          </div>
          <p class="text-right mt-8 mx-4 mb-4"><span class="font-medium">Starting Price:</span> Rs.2,500</p>
        </div>

        <div class="shadow border-2 rounded-2xl">
          <img src="https://th.bing.com/th/id/OIP.-wcXcPg9mUaWmMJuoWXgHgAAAA?w=303&h=202&c=7&r=0&o=5&dpr=1.3&pid=1.7" class="rounded-t-2xl w-full h-52 object-cover" alt="Hotel Moonlight and Bar" />
          <p class="mx-4 mt-4 font-bold">Hotel Moonlight and Bar</p>
          <div class="flex justify-between items-center mx-4 mt-4">
            <p class="font-medium"><i class="fa-solid fa-water-ladder text-blue-600"></i> Pool</p>
            <p class="font-medium"><i class="fa-solid fa-water text-blue-600"></i> Lakeview</p>
            <p class="font-medium"><i class="fa-solid fa-spa text-blue-600"></i> Spa</p>
          </div>
          <p class="text-right mt-8 mx-4 mb-4"><span class="font-medium">Starting Price:</span> Rs.2,500</p>
        </div>

     
      </div>
    </div>





@endsection