<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
class AdminupdateProfileController extends Controller
{
    public function index(){
        return view('admin.updateProfile.index');
    }
    public function update(Request $request)
    {
        $user = Auth::user();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->address = $request->address;
        if ($request->hasfile('image')){
            if($user->image){
                Storage::delete('public/userimg/'.$user->image);
            }
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filepath  = pathinfo($extension,PATHINFO_FILENAME);
            $fileNameToStore =time().'.'.$extension;
            $path = $file->storeAs('public/userimg',$fileNameToStore);
            $user->image = $fileNameToStore;
        }
        $user->save();
        Session::flash('success','Profile updated successfully');

        return redirect()->back();
    }
}
