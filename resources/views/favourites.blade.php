
@extends('layouts.master')
@section('content')
<div class="bg-gray-100 py-8 ">
        <h1 class="text-3xl font-semibold mb-2 text-center text-indigo-900">Favourites</h1>
    <div class=" mx-44 px-4 mt-10">
        <div class="flex flex-col md:flex-row gap-4 justify-center">
            <div class="md:w-3/4">
                <div class="bg-white rounded-lg shadow-md p-6 mb-4">
                    <table class="w-full">
                        <thead>
                            <tr>
                                <th class="text-left font-semibold">Hotel Name</th>
                                <th class="text-left font-semibold">Hotel Address</th>
                                <th class="text-left font-semibold">Price</th>
                                <th class="text-left font-semibold">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="py-4">
                                    <div class="flex items-center">
                                        <img class="h-16 w-16 mr-4" src="https://wallpapercave.com/wp/wp3598832.jpg" alt="Product image"/>
                                        <span class="font-semibold">Hotel Name</span>
                                    </div>
                                </td>
                                <td class="py-4">Pokhara</td>
                                <td class="py-4">
                                    $111 per night</td>
                                <td class="py-4"></td>
                            </tr>
                            <tr>
                                <td class="py-4">
                                    <div class="flex items-center">
                                        <img class="h-16 w-16 mr-4" src="https://wallpapercave.com/wp/wp3598832.jpg" alt="Product image"/>
                                        <span class="font-semibold">Hotel Name</span>
                                    </div>
                                </td>
                                <td class="py-4">Pokhara</td>
                                <td class="py-4">
                                    $111 per night</td>
                                <td class="py-4"></td>
                            </tr>
                            <tr>
                                <td class="py-4">
                                    <div class="flex items-center">
                                        <img class="h-16 w-16 mr-4" src="https://wallpapercave.com/wp/wp3598832.jpg" alt="Product image"/>
                                        <span class="font-semibold">Hotel Name</span>
                                    </div>
                                </td>
                                <td class="py-4">Pokhara</td>
                                <td class="py-4">
                                    $111 per night</td>
                                <td class="py-4"></td>
                            </tr>
                                <tr>
                                <td class="py-4">
                                    <div class="flex items-center">
                                        <img class="h-16 w-16 mr-4" src="https://wallpapercave.com/wp/wp3598832.jpg" alt="Product image"/>
                                        <span class="font-semibold">Hotel Name</span>
                                    </div>
                                </td>
                                <td class="py-4">Pokhara</td>
                                <td class="py-4">
                                    $111 per night</td>
                                <td class="py-4"></td>
                            </tr>
                            <tr>
                                <td class="py-4">
                                    <div class="flex items-center">
                                        <img class="h-16 w-16 mr-4" src="https://wallpapercave.com/wp/wp3598832.jpg" alt="Product image"/>
                                        <span class="font-semibold">Hotel Name</span>
                                    </div>
                                </td>
                                <td class="py-4">Pokhara</td>
                                <td class="py-4">
                                    $111 per night</td>
                                <td class="py-4"></td>
                            </tr>
                            

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection