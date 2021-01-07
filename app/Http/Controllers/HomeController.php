<?php

namespace App\Http\Controllers;

use App\Course;
use App\Event;
use App\Pagenew;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $courses = Course::orderBy('created_at','DESC')->take(6)->get();
        $events = Event::orderBy('created_at','DESC')->take(2)->get();

        $news = Pagenew::orderBy('created_at','DESC')->take(4)->get();
        return view('frontend.index',compact('courses','news','events'));
    }
    public function adminHome()
    {
        return view('admin.dashboard');
    }
    public function profile(){
        return view('frontend.profile');
    }
}
