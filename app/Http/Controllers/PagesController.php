<?php

namespace App\Http\Controllers;

use App\Models\HotelManagement;
use App\Models\RoomManagement;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        $hotelmanagement = HotelManagement::latest()->take(6)->get();
        return view ('welcome',compact('hotelmanagement'));
    }

    public function aboutus()
    {
        return view('aboutus');
    }

    public function favourites()
    {
        return view('favourites');
    }
    public function recently()
    {
        return view('recently');
}
public function signup(){
    return view('signup');
}

public function signuphotel(){
    return view('signuphotel');
}

public function hoteldetails($id){
    $hotelmanagement = HotelManagement::findOrFail($id);
    $roommanagement = RoomManagement::where('hotelmanagement_id', $id)->get();
    return view('hoteldetails',compact('hotelmanagement','roommanagement'));
}

public function login(){
    return view('login');
}

public function roomdetails($id){
    $roommanagement = RoomManagement::findOrFail($id);
    $relatedrooms = RoomManagement::where('hotelmanagement_id', $roommanagement->hotelmanagement_id)
    ->where('id','!=',$id)
    ->latest()
    ->take(4)
    ->get();
    return view('roomdetails', compact('roommanagement','relatedrooms'));
}


public function bookingform(){
    return view('bookingform');
}

public function exploremore(){
    return view('exploremore');
}

}