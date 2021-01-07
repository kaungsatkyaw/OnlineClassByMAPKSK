<?php

namespace App\Http\Controllers;

use App\Category;
use App\Pagenew;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

class PagenewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $news = Pagenew::orderBy('created_at','DESC')->get();
        return view('admin.new.index',compact('news')) ;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('admin.new.create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $pagenew = new Pagenew();
        $pagenew->title = $request->title;
        $pagenew->category_id = $request->category;
        $pagenew->description = $request->description;

        if ($request->hasfile('image')){
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filepath  = pathinfo($extension,PATHINFO_FILENAME);
            $fileNameToStore =time().'.'.$extension;
            $path = $file->storeAs('public/newsimg',$fileNameToStore);
            $pagenew->image = $fileNameToStore;
        }else{
            return $request;
            $pagenew->image = ' ';
        }
        $pagenew->save();
        Session::flash('success','News created successfully');

        return redirect()->route('pagenew.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Pagenew  $pagenew
     * @return \Illuminate\Http\Response
     */
    public function show(Pagenew $pagenew)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Pagenew  $pagenew
     * @return \Illuminate\Http\Response
     */
    public function edit(Pagenew $pagenew)
    {
        $categories = Category::all();
        return view('admin.new.edit',compact('pagenew','categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Pagenew  $pagenew
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pagenew $pagenew)
    {
        $pagenew->title = $request->title;
        $pagenew->description = $request->description;
        $pagenew->category_id = $request->category;
        if( $request->hasFile('image')){
            if($pagenew->image){
                Storage::delete('public/newsimg/'.$pagenew->image);
            }
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filepath  = pathinfo($extension,PATHINFO_FILENAME);
            $fileNameToStore =time().'.'.$extension;
            $path = $file->storeAs('public/newsimg',$fileNameToStore);

            $pagenew->image = $fileNameToStore;
        }

        $pagenew->save();
        Session::flash('success','News Updated successfully');

        return redirect()->route('pagenew.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Pagenew  $pagenew
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pagenew $pagenew)
    {
        if($pagenew){
            Storage::delete('public/newsimg/'.$pagenew->image);
            $pagenew->delete();
            Session::flash('success','News Deleted successfully');

            return redirect()->route('pagenew.index');
        }
    }
}
