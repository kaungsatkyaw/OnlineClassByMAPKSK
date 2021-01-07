<?php

namespace App\Http\Controllers;

use App\student;
use App\User;
use App\Notifications\RepliedToThread;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class StudentController extends Controller
{
    public function create(Request $request){
        // dd($request->all());
        $student = new student();
        $student->user_id = $request->user ;
        $student->course_id = $request->course ;
        $student->save();

        $admin = User::where('is_admin', '1')->first();
        

        $admin->notify(new RepliedToThread());

        Session::flash('success','Requested to Admin');

        return redirect()->back();
    }

    public function index(){
        $students = student::orderBy('created_at','DESC')->get();
        return view('admin.students.index',compact('students'));
    }
    public function accept($id){
        DB::update('update students set confirm = 1 where id = ?',[$id]);
        return redirect()->back();
    }
    public function cancel($id){
        DB::delete('delete from students where id = ?',[$id]);
        Session::flash('success','Cancel request');
        return redirect()->back();
    }
}
