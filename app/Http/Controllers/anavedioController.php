<?php

namespace App\Http\Controllers;

use App\anavedio;
use Illuminate\Http\Request;

class anavedioController extends Controller
{
     public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $value= anavedio::all();
        return view('admin.anavedio',compact('value'));
        //return view('admin.anavedio');
    }
                    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
          $value = new anavedio();
        request()->validate([
            "file" => 'mimes:mp4,mov,ogg,qt,3gp,flv,mkv|max:200000',
        ]);
        $value->tit = $request->tit;
        if ($request->hasFile('file')){
            $file = $request->file->getClientOriginalName();
            $request->file->storeAs('public/anavedio',$file);
            $value->file = $file;
            $value->save();
            return back()->with('success','You have successfully upload Video: Title is:'.$request->tit)
                ->with('image',$file);
        }


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
