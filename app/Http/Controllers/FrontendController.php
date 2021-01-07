<?php

namespace App\Http\Controllers;

use App\Category;
use App\Course;
use App\Event;
use App\Pagenew;
use App\feedbackAdmin;
use App\student;
use Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function home(){
        $courses = Course::orderBy('created_at','DESC')->take(6)->get();
        $news = Pagenew::orderBy('created_at','DESC')->take(4)->get();
        $events = Event::orderBy('created_at','DESC')->take(2)->get();
        return view('frontend.index',compact('courses','news','events'));
    }
    public function index(){
        $courses = Course::orderBy('created_at','DESC')->paginate(6);
        return view('frontend.courses',compact('courses'));
    }
    public function event(){
        $events = Event::orderBy('created_at','DESC')->paginate(6);
        return view('frontend.event',compact('events'));
    }
    public function new(Request $request){
        if($request->q){
            $news = Pagenew::orderBy('created_at','DESC')->where(
                'title', 'LIKE', '%' . $request->q . '%'
            )->paginate(5);
        }
        else{
            $news = Pagenew::orderBy('created_at','DESC')->paginate(5);
        }
        $recentnews = Pagenew::orderBy('created_at','DESC')->take(8)->get();
        $categories = Category::take(10)->get();
        return view('frontend.news',compact('news','recentnews','categories'));
    }
    public function about(){
        return view('frontend.about');
    }
    public function contact(){
        return view('frontend.contact');
    }
    public function feedbackAdmin(Request $request){
        $user = Auth()->user()->id;
        $feedback = new feedbackAdmin();
        $feedback->user_id = $user;
        $feedback->feedback = $request->feedback;
        $feedback->save();
        return redirect()->back();
    }
    public function detail($id){
        $news = Pagenew::where('id',$id)->get();
        $recentnews = Pagenew::orderBy('created_at','DESC')->take(8)->get();
        $categories = Category::take(10)->get();
        return view('frontend.detail',compact('news','recentnews','categories'));
    }
    public function category($id){
        $tags = Pagenew::where('category_id',$id)->paginate(5);
        $recentnews = Pagenew::orderBy('created_at','DESC')->take(8)->get();
        $categories = Category::take(10)->get();
        return view('frontend.tag',compact('tags','recentnews','categories'));
    }
    public function show($id){
        $courses = Course::where('id',$id)->get();
        if(Auth::check()){
            $user = Auth::user()->id;
            $student = student::where('course_id',$id)->where('user_id',$user)->count();
            $student_panding = student::where('course_id',$id)->where('user_id',$user)->where('confirm','0')->count();
            $student_access = student::where('course_id',$id)->where('user_id',$user)->where('confirm','1')->count();
            $student_tocancel = student::where('course_id',$id)->where('user_id',$user)->where('confirm','0')->get();
            return view('frontend.showcourse',compact('courses','student','student_panding','student_tocancel','student_access'));
        }
        else{
            return view('frontend.showcourse',compact('courses'));
        }
    }
}
