<?php

namespace App\Http\Controllers;

use App\Models\HotelManagement;
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

public function hoteldetails(){
    return view('hoteldetails');
}

public function login(){
    return view('login');
}

public function roomdetails(){
    return view('roomdetails');
}

public function bookingform(){
    return view('bookingform');
}

public function exploremore(){
    return view('exploremore');
}

}