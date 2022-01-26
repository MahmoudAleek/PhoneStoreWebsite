<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

use App\Models\User;

use Auth;

class AdminController extends Controller
{
    //
    public function index(){
        // $data = [
        //     "this is value 1",
        //     "this is value 2",
        //     "this is value 3",
        // ];

        $data = "this is value from admin controller ";
        return view('admin.index',compact('data'));
    }

    public function logout(){
        $user = User::find(Auth::user()->id);
        if(isset($user)){
            Auth::logout();
            return redirect()->route('login');
        }
        
        return redirect()->back();
    }

    public function ShowPhoneDetails(){
        return view('admin.phone.pdetails');
    }

    public function profile(){
        $user = User::find(Auth::user()->id);

        return view('admin.profile.profile_view',compact('user'));
    }
    public function UpdateProfile(Request $request){
        $adminData = User::find(Auth::user()->id);
        $adminData->name = $request->name;
        $adminData->email = $request->email;

        if($request->file('Profile_Photo_Path')){

            $file = $request->file('Profile_Photo_Path');

            
            $fileName = hexdec(uniqid()).'.' . $file->getClientOriginalExtension(); 
            $file->move(public_path('upload/admin_images/'),$fileName);

            // if(!empty($request->old_img)){
            //     $old_image = $request->old_img;
            //     unlink($old_image);
            // }

            $adminData['Profile_Photo_Path'] = $fileName;

        }
        $adminData->update();

        $notification = array(
            'message' => 'Admin Profile Updated Successfully ',
            'alert-type' => 'success'
        );

        return redirect()->route('admin.profile')->with('notification');
    }

    public function AdminPassword(){
        return view('admin.profile.password_view');
    }

    public function AdminChangePassword(Request $request){
        $password_validator = $request->validate([
            'current_password' => 'required',
            'password' => 'required|confirmed'
        ]);

        $oldPassword = Auth::user()->password;
        
        if(Hash::check($request->current_password,$oldPassword)){

            
            $user = User::find(Auth::user()->id);
            $user->password = Hash::make($request->password);
            $user->update();
            Auth::logout();

            $notification = array([
                'message' => 'Password Is Changed Successfully',
                'alert-type' => 'success'
            ]);

            return redirect()->route('login')->with($notification);
        }else{
            $notification = array([
                'message' => 'Current Password Is Invalid',
                'alert-type' => 'error'
            ]);
            return redirect()->back()->with($notification);
        }
    }
}
