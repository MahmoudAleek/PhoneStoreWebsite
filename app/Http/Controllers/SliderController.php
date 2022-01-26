<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\slider;
use Image;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sliders = Slider::latest()->paginate(5);

        return view('admin.slider.index',compact('sliders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function AddSlider()
    {
        return view('admin.slider.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function StoreSlider(Request $request)
    {   
        $slider_image = $request->file('image');
        

        $img_gen = hexdec(uniqid()) .'.'. $slider_image->getClientOriginalExtension();
        $img_location = 'images/sliders/';
        $last_img = $img_location . $img_gen;
        Image::make($slider_image)->resize(1920,1080)->save($last_img);


        $new_slider = new Slider();
        $new_slider->image = $last_img;
        $new_slider->title = $request->title;
        $new_slider->description = $request->description;
        $new_slider->save();

        return redirect()->route('home.slider')->with('success' , 'Slider Inserted Successfully');


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
