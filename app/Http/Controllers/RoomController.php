<?php

namespace App\Http\Controllers;

use App\Models\HotelManagement;
use App\Models\RoomManagement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class RoomController extends Controller
{
    public function index(){
        $roommanagement = RoomManagement::all();
        return view('hoteladmin.roommanagement.index',compact('roommanagement'));
    }

    public function create(){
        $hotelmanagement = HotelManagement::all();
        return view('hoteladmin.roommanagement.create',compact('hotelmanagement'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'hotelmanagement_id' => 'required',
            'about' => 'required',
            'roomtype' => 'required',
            'facilities' => 'required',
            'features' => 'required',
            'price' => 'required|numeric',
            'discount_price' => 'nullable|numeric',
            'rules' => 'required',
            'photopath' => 'required|image',
            'photopath2' => 'required|image',
            'photopath3' => 'required|image',
            'photopath4' => 'required|image',
        ]);
        
 
        // Handle photos
        $photo = $request->file('photopath');
        $photoname = uniqid() . '_1.' . $photo->extension();
        $photo->move(public_path('images/room/photopath'), $photoname);
        $data['photopath'] = 'photopath/' . $photoname;

       // Handle photo 2
       $photo2 = $request->file('photopath2');
       $photoname2 = uniqid() . '_2.' . $photo2->extension();
       $photo2->move(public_path('images/room/photopath2'), $photoname2);
       $data['photopath2'] = 'photopath2/' . $photoname2;

       // Handle photo 3
       $photo3 = $request->file('photopath3');
       $photoname3 = uniqid() . '_3.' . $photo3->extension();
       $photo3->move(public_path('images/room/photopath3'), $photoname3);
       $data['photopath3'] = 'photopath3/' . $photoname3;

        // Handle photo 4
        $photo4 = $request->file('photopath4');
        $photoname4 = uniqid() . '_4.' . $photo4->extension();
        $photo4->move(public_path('images/room/photopath4'), $photoname4);
        $data['photopath4'] = 'photopath4/' . $photoname4;



        // Store room
        RoomManagement::create($data);
        return redirect()->route('roommanagement.index')->with('success', 'Room created successfully');
    }
    
    public function edit($id){
        $roommanagement = RoomManagement::find($id);
        $hotelmanagement = HotelManagement::get();
        return view('hoteladmin.roommanagement.edit',compact('roommanagement','hotelmanagement'));
    }

    public function update(Request $request, $id ){
        return redirect()->route('hoteladmin.roommanagement.index')->with('success','Room updated Sucessfully');
    }

    public function destroy(Request $request)
    {
        $roommanagement = RoomManagement::find($request->id);
        File::delete(public_path('images/room/' . $roommanagement->photopath));
        File::delete(public_path('images/room/' . $roommanagement->photopath2));
        File::delete(public_path('images/room/' . $roommanagement->photopath3));
        File::delete(public_path('images/room/' . $roommanagement->photopath4));
        $roommanagement->delete();
        return redirect()->route('roommanagement.index')->with('success', 'Room Deleted Successfully');
    }

}
