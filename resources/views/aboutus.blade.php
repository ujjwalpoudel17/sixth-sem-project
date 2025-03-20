@extends('layouts.master')
@section('content')
<section class="">
    <div class=" mx-28 py-16 px-4 sm:px-6 lg:px-8 mt-20">
        <div class="grid grid-cols-1 md:grid-cols-2 items-center gap-32">
            <div class="">
                <h2 class="text-3xl font-extrabold text-gray-900 sm:text-4xl">About Us</h2>
                <p class="mt-4 text-gray-600 text-lg">Welcome to Bookit.com, your trusted partner in seamless hotel bookings. Our platform is designed to make your travel planning effortless and enjoyable, connecting you with the perfect accommodations to suit your needs and budget. Whether you're traveling for business, leisure, or a special occasion, we offer a wide selection of hotels, from luxury resorts to cozy boutique stays, ensuring there's something for everyone.</p>
                <div class="mt-8">
                    <a href="#" class="text-blue-500 hover:text-blue-600 font-medium">Learn more about us
                        <span class="ml-2">&#8594;</span></a>
                </div>
            </div>
            <div class="mt-12 md:mt-0">
                <img src="https://th.bing.com/th/id/OIP.-wcXcPg9mUaWmMJuoWXgHgAAAA?rs=1&pid=ImgDetMain" alt="About Us Image" class="object-cover rounded-lg " />
            </div>
        </div>
    </div>
</section>

<section class=" mb-20">
    <div class="py-12 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            <div class="lg:text-center">
                <h2
                    class="font-heading mb-4 bg-orange-100 px-4 py-2 rounded-lg md:w-64 md:mx-auto text-xs font-semibold tracking-widest text-black uppercase title-font">
                    Why choose us?
                </h2>
                <p class="font-heading mt-2 text-3xl leading-8 font-semibold tracking-tight text-gray-900 sm:text-4xl">
                    We provide Hotels in Best Prices.
                </p>
                <p class="mt-4 max-w-2xl text-lg text-gray-500 lg:mx-auto">
                    We know how to handle customers from all the
                    countries. We care for our customers and help them as per their needs.
                </p>
            </div>

            <div class="mt-10">
                <dl class="space-y-10 md:space-y-0 md:grid md:grid-cols-2 md:gap-x-8 md:gap-y-10">
                    <div class="relative">
                        <dt>
                            <div
                                class="absolute flex items-center justify-center h-12 w-12 rounded-md bg-primary-500 text-white">
                                <img src="https://th.bing.com/th/id/OIP.--1krkTtEfN8jVaPGhFcawHaE7?rs=1&pid=ImgDetMain" />
                            </div>
                            <p class="font-heading ml-16 text-lg leading-6 font-bold text-gray-700">Minimal Hotel Cost</p>
                        </dt>
                        <dd class="mt-2 ml-16 text-base text-gray-500">
                            Lorem ipsum, dolor sit amet consectetur
                            adipisicing elit. Maiores impedit perferendis suscipit eaque, iste dolor cupiditate
                            blanditiis ratione.
                        </dd>
                    </div>
                    <div class="relative">
                        <dt>
                            <div
                                class="absolute flex items-center justify-center h-12 w-12 rounded-md bg-primary-500 text-white">
                                <img src="https://th.bing.com/th/id/OIP.P7H7t4kzPXxT7B3gIQT2TAHaD4?w=331&h=180&c=7&r=0&o=5&dpr=1.3&pid=1.7" />
                            </div>
                            <p class="font-heading ml-16 text-lg leading-6 font-bold text-gray-700">Customer Care
                            
                            </p>
                        </dt>
                        <dd class="mt-2 ml-16 text-base text-gray-500"> Lorem ipsum, dolor sit amet consectetur
                            adipisicing elit. Maiores impedit perferendis suscipit eaque, iste dolor cupiditate
                            blanditiis ratione.
                        </dd>
                    </div>
                    <div class="relative">
                        <dt>
                            <div
                                class="absolute flex items-center justify-center h-12 w-12 rounded-md bg-primary-500 text-white">
                                <img src="https://th.bing.com/th/id/OIP.fZHXSAZnW1sSfr-pY5r2mwHaHa?w=173&h=180&c=7&r=0&o=5&dpr=1.3&pid=1.7" />

                            </div>
                            <p class="font-heading ml-16 text-lg leading-6 font-bold text-gray-700">Quality Services
                            </p>
                        </dt>
                        <dd class="mt-2 ml-16 text-base text-gray-500"> Lorem ipsum, dolor sit amet consectetur
                            adipisicing elit. Maiores impedit perferendis suscipit eaque, iste dolor cupiditate
                            blanditiis ratione.
                        </dd>
                    </div>
                    <div class="relative">
                        <dt>
                            <div
                                class="absolute flex items-center justify-center h-12 w-12 rounded-md bg-primary-500 text-white">
                                <img src="https://th.bing.com/th/id/OIP.0BlFMJFuv0Sqz52Tegl8FwHaEP?w=280&h=180&c=7&r=0&o=5&dpr=1.3&pid=1.7" />

                            </div>
                            <p class="font-heading ml-16 text-lg leading-6 font-bold text-gray-700">Good Hospitality
                            </p>
                        </dt>
                        <dd class="mt-2 ml-16 text-base text-gray-500"> Lorem ipsum, dolor sit amet consectetur
                            adipisicing elit. Maiores impedit perferendis suscipit eaque, iste dolor cupiditate
                            blanditiis ratione.
                        </dd>
                    </div>
                </dl>
            </div>

        </div>
    </div>
</section>

@endsection