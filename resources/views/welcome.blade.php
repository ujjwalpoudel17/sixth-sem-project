<!-- <a href="{{('/')}}" class="text-2xl">Home</a>
    <a href="{{('/about')}}">About Us</a>
    <a href="{{('/contact')}}">Contact Us</a>
    <a href="{{('/signup')}}">Signup</a>
    <a href="{{('/login')}}">Login</a> -->
@extends('layouts.master')
@section('content')
<div class="bg-[url('https://th.bing.com/th/id/R.979beb749a45ccc532a005e065d1f273?rik=WPGIfV3ClXqFlg&pid=ImgRaw&r=0')] bg-cover bg-center w-full h-96 shadow-2xl">
  <div class="relative h-full bg-black bg-opacity-25 flex flex-col justify-center items-center">
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 px-4 md:px-20 w-full md:w-auto">
      <div class="text-center md:text-left">
        <label class="text-white text-xl md:text-2xl font-medium">Check-in Date</label>
        <input type="date" class="w-full p-2 mt-2 rounded-2xl" />
      </div>
      <div class="text-center md:text-left">
        <label class="text-white text-xl md:text-2xl font-medium">Check-out Date</label>
        <input type="date" class="w-full p-2 mt-2 rounded-2xl" />
      </div>
      <div class="text-center md:text-left">
        <label class="text-white text-xl md:text-2xl font-medium">Room Type</label>
        <select class="w-full p-2 mt-2 rounded-2xl bg-white text-black">
          <option value="single">Single Bedroom</option>
          <option value="double">Double Bedroom</option>
          <option value="master">Master Bedroom</option>
          <option value="normal">normal Bedroom</option>
        </select>
      </div>

    </div>
    <div class="mt-8">
      <a href="" class="font-medium border-2 text-white bg-fuchsia-800 p-2 rounded-2xl hover:text-white hover:bg-blue-600">Submit</a>
    </div>
  </div>
</div>

<!-- 
<div>
  <h1 class="font-bold text-xl md:text-2xl mx-4 md:mx-20 mt-10 md:mt-20">
    Get up to 10% discount on these Hotels
  </h1>
  <div class="mx-4 md:mx-20 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-6 gap-6 rounded-2xl mt-4 mb-10 md:mb-28">
    @foreach($hotelmanagement as $hotel)
    <a href="{{('/hoteldetails')}}">
      <div class="shadow border-2 rounded-2xl">
        <img src="{{asset('images/hotel/photopath/'.$hotel->photopath)}}" class="rounded-t-2xl w-full h-52 object-cover" alt="Hotel Moonlight and Bar" />
        <p class="mx-4 mt-4 font-bold">Hotel Moonlight and Bar</p>
        <div class="flex justify-between items-center mx-4 mt-4">
          <p class="font-medium"><i class="fa-solid fa-water-ladder text-blue-600"></i> Pool</p>
          <p class="font-medium"><i class="fa-solid fa-water text-blue-600"></i> Lakeview</p>
          <p class="font-medium"><i class="fa-solid fa-spa text-blue-600"></i> Spa</p>
        </div>
        <p class="text-right mt-8 mx-4 mb-4"><span class="font-medium">Starting Price:</span> Rs.2,500</p>
        @endforeach
      </a>
      </div>
</div> -->

<div>
  <h1 class="font-bold text-xl md:text-2xl mx-4 md:mx-20 mt-10 md:mt-20">
    Get up to 10% discount on these Hotels
  </h1>
  <div class="mx-4 md:mx-20 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-6 gap-6 rounded-2xl mt-4 mb-10 md:mb-28">
    @foreach($hotelmanagement as $hotel)
    <a href="{{ route('hoteldetails',$hotel->id) }}" class="shadow border-2 rounded-2xl block">
      <div>
        <img src="{{ asset('images/hotel/'.$hotel->photopath) }}" class="rounded-t-2xl w-full h-52 object-cover" alt="{{ $hotel->name }}" />
        <p class="mx-4 mt-4 font-bold">{{ $hotel->name }}</p>
        <div class="flex justify-between items-center mx-4 mt-4">
          <p class="font-medium"><i class="fa-solid fa-water-ladder text-blue-600"></i> Pool</p>
          <p class="font-medium"><i class="fa-solid fa-water text-blue-600"></i> Lakeview</p>
          <p class="font-medium"><i class="fa-solid fa-spa text-blue-600"></i> Spa</p>
        </div>
        <p class="text-right mt-8 mx-4 mb-4">
          <span class="font-medium">Starting Price:</span> Rs.{{$hotel->price }}
        </p>
      </div>
    </a>
    @endforeach
  </div>
</div>







<div>
  <h1 class="font-bold text-xl md:text-2xl mx-4 md:mx-20 mt-10 md:mt-20">
    Trending Destinations
  </h1>
  <p class="font-medium mx-4 md:mx-20 mt-2">
    Most popular choice for travelers of Nepal
  </p>

  <div class="mx-4 md:mx-20 mb-10 md:mb-28 mt-4 rounded-2xl">
    <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 rounded-2xl">
      <div>
        <img
          src="https://www.rhinolandchitwan.com/images/2nights/1.jpg"
          class="w-full h-64 md:h-96 rounded-2xl object-cover"
          alt="Trending Destination 1" />
      </div>
      <div>
        <img
          src="https://english.onlinekhabar.com/wp-content/uploads/2016/08/Chitwan-Sauraha-22.jpg"
          class="w-full h-64 md:h-96 rounded-2xl object-cover"
          alt="Trending Destination 2" />
      </div>
    </div>
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6 mt-6">
      <div>
        <img
          src="https://cdn.kimkim.com/files/a/content_articles/featured_photos/95553f94d93aea6a42ea8ee16315830ac41fcd7a/big-742b52a5e89568dd813531fc63897836.jpg"
          class="w-full h-64 md:h-96 rounded-2xl object-cover"
          alt="Trending Destination 3" />
      </div>
      <div>
        <img
          src="https://cdn.pixabay.com/photo/2012/02/17/15/27/new-14606_1280.jpg"
          class="w-full h-64 md:h-96 rounded-2xl object-cover"
          alt="Trending Destination 4" />
      </div>
      <div>
        <img
          src="https://lp-cms-production.imgix.net/2019-06/53693064.jpg?fit=crop&q=40&sharp=10&vib=20&auto=format&ixlib=react-8.6.4"
          class="w-full h-64 md:h-96 rounded-2xl object-cover"
          alt="Trending Destination 5" />
      </div>
    </div>
  </div>
</div>


<h1 class="text-5xl font-monospace text-center ">How <span class="text-blue-500">BookItNow</span> Works ?</h1>
<div class="grid grid-cols-3 gap-4 shadow p-4 m-4 mx-20 mt-8 border-2 rounded-1">
  <div class="text-center">
    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQtS7dtxVldf9qDkFF_3B8YjA2PZRiZ0s-TiA&s" class="w-40 h-40 mx-auto image-cover" alt="" />
    <h1 class="text-2xl font-bold text-2xl">Connect Wallet</h1>
    <p class="font-medium mt-4 text-gray-800">Securely connect your wallet to unlock a world of exclusive benefits, including special hotel offers tailored for Web3 users.</p>
  </div>
  <div class="text-center">
    <img src="https://thumbs.dreamstime.com/z/button-text-best-deals-round-banner-53663964.jpg" class="w-40 h-40 mx-auto image-cover" alt="" />
    <h1 class="text-2xl font-bold text-2xl">Get Personal Offers</h1>
    <p class="font-medium mt-4 text-gray-800">Explore a curated selection of exclusive hotel offers, accessible only to wallet-connected users. Enjoy unbeatable rates and personalized deals.</p>
  </div>
  <div class="text-center">
    <img src="https://thumbs.dreamstime.com/z/check-out-icon-vector-hotel-collection-thin-line-outline-illustration-linear-symbol-use-web-mobile-apps-logo-print-143258208.jpg" class="w-40 h-40 mx-auto image-cover" alt="" />
    <h1 class="text-2xl font-bold text-2xl">Book And Checkout</h1>
    <p class="font-medium mt-4 text-gray-800">Seamlessly book your preferred accommodation and complete your check out process. Choose to pay conveniently with over 200+ cryptocurrency options, making your travel experience as smooth as possible.</p>
  </div>
</div>





<div>
  <h1 class="font-bold text-xl md:text-2xl mx-4 md:mx-20 mt-10 md:mt-20">
    Take a dip at these top-rated hotels
  </h1>
  <div class="mx-4 md:mx-20 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 md:gap-10 rounded-2xl mt-4 mb-10 md:mb-28">
    <div class="shadow border-2 rounded-2xl">
      <img
        src="https://dynamic-media-cdn.tripadvisor.com/media/photo-o/10/c8/24/84/main-pool-area-which.jpg?w=900&h=-1&s=1"
        class="rounded-2xl w-full h-60 sm:h-72 md:h-80 object-cover"
        alt="Annapurna Hotel And Spa" />
      <p class="mx-4 text-xl md:text-2xl font-bold">Annapurna Hotel And Spa</p>
      <div class="flex justify-between items-center mx-4 mt-4">
        <p class="font-medium">
          <i class="fa-solid fa-water-ladder text-blue-600"></i> Pool
        </p>
        <p class="font-medium">
          <i class="fa-solid fa-water text-blue-600"></i> Lakeview
        </p>
        <p class="font-medium">
          <i class="fa-solid fa-spa text-blue-600"></i> Spa
        </p>
      </div>
      <button
        type="submit"
        class="bg-blue-600 w-full text-center p-2 text-white mt-4">
        View Price
      </button>
    </div>

    <div class="shadow border-2 rounded-2xl">
      <img
        src="https://images.huffingtonpost.com/2017-04-28-1493369250-7939453-EveningPool2150941.jpg"
        class="rounded-2xl w-full h-60 sm:h-72 md:h-80 object-cover"
        alt="Hotel Moonlight and Bar" />
      <p class="mx-4 text-xl md:text-2xl font-bold">Hotel Moonlight and Bar</p>
      <div class="flex justify-between items-center mx-4 mt-4">
        <p>jacuzzi</p>
        <p>Bar</p>
        <p>Spa</p>
      </div>
      <button
        type="submit"
        class="bg-blue-600 w-full text-center p-2 text-white mt-4">
        View Price
      </button>
    </div>

    <div class="shadow border-2 rounded-2xl">
      <img
        src="https://th.bing.com/th/id/OIP.xlrVyoDnqYJOol9NxHa4nwHaE7?rs=1&pid=ImgDetMain"
        class="rounded-2xl w-full h-60 sm:h-72 md:h-80 object-cover"
        alt="Fewa Hotel And Lodge" />
      <p class="mx-4 text-xl md:text-2xl font-bold">Fewa Hotel And Lodge</p>
      <div class="flex justify-between items-center mx-4 mt-4">
        <p>Pool</p>
        <p>Lakeview</p>
        <p>Spa</p>
      </div>
      <button
        type="submit"
        class="bg-blue-600 w-full text-center p-2 text-white mt-4">
        View Price
      </button>
    </div>
  </div>
</div>


<div class="grid grid-cols-1 md:grid-cols-2 mx-20 rounded-2xl items-center bg-indigo-200 bg-opacity-50 mb-10 md:mb-16">
  <div class="rounded-2xl">
    <p class="text-xl md:text-2xl mx-4 md:mx-10 lg:mx-20 font-bold">
      We're partnered with the industry leaders in online travel booking, enabling us to provide an extensive range of offers
    </p>
  </div>
  <div class="rounded-2xl mx-4 md:mx-10 lg:mx-20">
    <img
      src="https://static.vecteezy.com/ti/vecteur-libre/p3/15694771-interieur-de-la-reception-de-l-hotel-avec-des-receptionnistes-et-des-voyageurs-pour-la-reservation-en-illustration-de-modele-dessine-a-la-main-de-dessin-anime-plat-vectoriel.jpg"
      class="h-40 md:h-48 lg:h-52 rounded-2xl mt-4 mb-4 object-cover"
      alt="Partnered Travel Booking" />
  </div>
</div>


@endsection