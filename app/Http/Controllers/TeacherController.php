<?php

namespace App\Http\Controllers;

use App\Teacher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teachers = Teacher::orderBy('created_at','DESC')->get();
        return view('admin.teacher.index',compact('teachers')) ;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.teacher.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $teacher = new Teacher();
        $teacher->name = $request->name;
        $teacher->email = $request->email;
        $teacher->position = $request->position;
        $teacher->workingat = $request->workingat;
        $teacher->bio = $request->bio;

        if ($request->hasfile('image')){
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filepath  = pathinfo($extension,PATHINFO_FILENAME);
            $fileNameToStore =time().'.'.$extension;
            $path = $file->storeAs('public/teacherimg',$fileNameToStore);
            $teacher->image = $fileNameToStore;
        }else{
            return $request;
            $teacher->image = ' ';
        }
        $teacher->save();
        Session::flash('success','Teacher created successfully');

        return redirect()->route('teacher.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function show(Teacher $teacher)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function edit(Teacher $teacher)
    {
        return view('admin.teacher.edit',compact('teacher'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Teacher $teacher)
    {
        $teacher->name = $request->name;
        $teacher->email = $request->email;
        $teacher->position = $request->position;
        $teacher->workingat = $request->workingat;
        $teacher->bio = $request->bio;
        if( $request->hasFile('image')){
            if($teacher->image){
                Storage::delete('public/newsimg/'.$teacher->image);
            }
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filepath  = pathinfo($extension,PATHINFO_FILENAME);
            $fileNameToStore =time().'.'.$extension;
            $path = $file->storeAs('public/teacherimg',$fileNameToStore);

            $teacher->image = $fileNameToStore;
        }

        $teacher->save();
        Session::flash('success','News Updated successfully');

        return redirect()->route('teacher.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function destroy(Teacher $teacher)
    {
        if($teacher){
            Storage::delete('public/teacherimg/'.$teacher->image);
            $teacher->delete();
            Session::flash('success','News Deleted successfully');

            return redirect()->route('teacher.index');
        }
    }
}
