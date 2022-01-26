<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Customers_Message;
use App\Models\Phone;


class HomeController extends Controller
{
    //
    public function index(){
        $Phones = Phone::latest()->paginate(2);
        $phonesBrand = Phone::select('brand_name')->distinct()->get();
        $phonesArray = [];
        $arrayCounter = 0; 

        foreach($phonesBrand as $brand){
            $phonesArray[$arrayCounter] = Phone::all()->where('brand_name',$brand->brand_name);
            
            $arrayCounter++;
        }
       
        return view('home',compact('Phones','phonesArray','phonesBrand'));
    }

    public function Contact(){
        return view('home.contact');
    }

    public function SendMessage(Request $request){

        $validator = $request->validate([
            
            'name' => 'required|max:255',
            'email' => 'required|email',
            'subject' => 'required|max:255',
            'message' => 'required'
        ]);


        $new_message = new  Customers_Message();
        $new_message->name = $request->name;
        $new_message->email = $request->email;
        $new_message->subject = $request->subject;
        $new_message->message = $request->message;
        $new_message->save();


        $notification = array(
            'message' => 'Your Message Send Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }
}
