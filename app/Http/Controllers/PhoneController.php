<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Phone;

class PhoneController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $phones = Phone::latest()->paginate(5);
        return view('admin.phone.index',compact('phones'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function AddNewPhone()
    {
        return view('admin.phone.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function CreateNewPhone(Request $request)
    {
        $newPhone = new Phone();
        $newPhone->name = $request->name;
        $newPhone->brand_name = $request->brand_name;
        $newPhone->processor = $request->processor;
        $newPhone->ram = $request->ram;
        $newPhone->camera = $request->camera;
        $newPhone->battery = $request->battery;
        $newPhone->storage = $request->storage;
        $newPhone->system = $request->system;
        $newPhone->display = $request->display;
        $newPhone->notes = $request->notes;
        $newPhone->Price = $request->price;
        $newPhone->save();

        $notification = array([
            'message' => 'Phone Inserted Successfully',
            'alert-type' => 'success'
        ]);
        return redirect()->route('home.phone')->with($notification);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
