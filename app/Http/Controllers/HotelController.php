<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HotelController extends Controller
{
    public function index(){
        return view('hoteladmin.hotelmanagement.index');
    }

    public function create(){
        return view(('hoteladmin.hotelmanagement.create'));
    }

    public function edit(){
        return view(('hoteladmin.hotelmanagement.edit'));
    }
}
