<?php

namespace App\Http\Controllers;

use App\Category;
use App\Course;
use App\Teacher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $courses = Course::orderBy('created_at','DESC')->get();
        return view('admin.course.index',compact('courses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        $teachers = Teacher::all();
        return view('admin.course.create',compact('categories','teachers'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $course = new Course();
        $course->title = $request->title;
        $course->category_id = $request->category;
        $course->teacher_id = $request->teacher;
        $course->description = $request->description;
        $course->range       = $request->range;
        $course->price       = $request->price;

        if ($request->hasfile('image')){
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filepath  = pathinfo($extension,PATHINFO_FILENAME);
            $fileNameToStore =time().'.'.$extension;
            $path = $file->storeAs('public/courseimg',$fileNameToStore);
            $course->image = $fileNameToStore;
        }else{
            return $request;
            $course->image = ' ';
        }
        $course->save();
        Session::flash('success','Course created successfully');

        return redirect()->route('course.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function show(Course $course)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function edit(Course $course)
    {
        $categories = Category::all();
        $teachers = Teacher::all();
        return view('admin.course.edit',compact('course','categories','teachers'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Course $course)
    {
        $course->title = $request->title;
        $course->category_id = $request->category;
        $course->teacher_id = $request->teacher;
        $course->description = $request->description;
        $course->range       = $request->range;
        $course->price       = $request->price;

        if ($request->hasfile('image')){
            if($course->image){
                Storage::delete('public/courseimg/'.$course->image);
            }
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filepath  = pathinfo($extension,PATHINFO_FILENAME);
            $fileNameToStore =time().'.'.$extension;
            $path = $file->storeAs('public/courseimg',$fileNameToStore);
            $course->image = $fileNameToStore;
        }
        $course->save();
        Session::flash('success','Course Updated successfully');

        return redirect()->route('course.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function destroy(Course $course)
    {
        if($course){
            Storage::delete('public/courseimg/'.$course->image);
            $course->delete();
            Session::flash('success','News Deleted successfully');

            return redirect()->route('course.index');
        }
    }
}
