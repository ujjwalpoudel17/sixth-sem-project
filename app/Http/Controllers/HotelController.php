<?php

namespace App\Http\Controllers;

use App\Models\HotelManagement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class HotelController extends Controller
{
    public function index()
    {
        $hotelmanagement = HotelManagement::all();
        return view('hoteladmin.hotelmanagement.index', compact('hotelmanagement'));
    }

    public function create()
    {
        return view('hoteladmin.hotelmanagement.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'about' => 'required',
            'address' => 'required',
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

        // Handle photo 1
        $photo = $request->file('photopath');
        $photoname = uniqid() . '_1.' . $photo->extension();
        $photo->move(public_path('images/hotel/photopath'), $photoname);
        $data['photopath'] = 'photopath/' . $photoname;

        // Handle photo 2
        $photo2 = $request->file('photopath2');
        $photoname2 = uniqid() . '_2.' . $photo2->extension();
        $photo2->move(public_path('images/hotel/photopath2'), $photoname2);
        $data['photopath2'] = 'photopath2/' . $photoname2;

        // Handle photo 3
        $photo3 = $request->file('photopath3');
        $photoname3 = uniqid() . '_3.' . $photo3->extension();
        $photo3->move(public_path('images/hotel/photopath3'), $photoname3);
        $data['photopath3'] = 'photopath3/' . $photoname3;

        // Handle photo 4
        $photo4 = $request->file('photopath4');
        $photoname4 = uniqid() . '_4.' . $photo4->extension();
        $photo4->move(public_path('images/hotel/photopath4'), $photoname4);
        $data['photopath4'] = 'photopath4/' . $photoname4;

        // Save the hotel management data
        HotelManagement::create($data);

        return redirect(route('hotelmanagement.index'))->with('success', 'Hotel added successfully');
    }

    public function edit($id)
    {
        $hotelmanagement = HotelManagement::find($id);
        return view('hoteladmin.hotelmanagement.edit', compact('hotelmanagement'));
    }

    public function update(Request $request, $id) {
        $hotelmanagement = HotelManagement::find($id);
        $data = $request ->validate([
            'name' => 'required',
            'about' => 'required',
            'address' => 'required',
            'facilities' => 'required',
            'features' => 'required',
            'price' => 'required|numeric',
            'discount_price' => 'nullable|numeric',
            'rules' => 'required',
            'photopath' => 'nullable|image',
            'photopath2' => 'nullable|image',
            'photopath3' => 'nullable|image',
            'photopath4' => 'nullable|image',
        ]);
        if($request->hasFile('photopath')){
            $photo = $request->file('photopath');
            $photoname = uniqid() . '_1.' . $photo->extension();
            $photo->move(public_path('images/hotel/photopath'), $photoname);
            $data['photopath'] = 'photopath/' . $photoname;
    //delete file
    File::delete(public_path('images/hotel/photopath'.$hotelmanagement->photopath));
        }

        if($request->hasFile('photopath2')){
            $photo2 = $request->file('photopath2');
            $photoname2 = uniqid() . '_1.' . $photo2->extension();
            $photo2->move(public_path('images/hotel/photopath2'), $photoname2);
            $data['photopath2'] = 'photopath2/' . $photoname2;
    //delete file
    File::delete(public_path('images/hotel/'.$hotelmanagement->photopath2));
        }

        if($request->hasFile('photopath3')){
            $photo3 = $request->file('photopath3');
            $photoname3 = uniqid() . '_1.' . $photo3->extension();
            $photo3->move(public_path('images/hotel/photopath3'), $photoname3);
            $data['photopath3'] = 'photopath3/' . $photoname3;
    //delete file
    File::delete(public_path('images/hotel/'.$hotelmanagement->photopath3));
        }

        if($request->hasFile('photopath4')){
            $photo4 = $request->file('photopath4');
            $photoname4 = uniqid() . '_1.' . $photo4->extension();
            $photo4->move(public_path('images/hotel/photopath4'), $photoname4);
            $data['photopath4'] = 'photopath4/' . $photoname4;
    //delete file
    File::delete(public_path('images/hotel/'.$hotelmanagement->photopath4));
        }
        
        $hotelmanagement->update($data);
        return redirect()->route('hotelmanagement.index')->with('success','Hotel Updated sucessfully');
    }
}
