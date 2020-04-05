<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\AboutUpdate;

use Illuminate\Support\Facades\Storage;

use Auth;

use User;

use App\About;

use Session;




class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {


     return view('about.index')->with('about',About::all()); 
    

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
        //
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
    public function edit(About $about)
    {
        //.


         
         // return view('layouts.cms')->with('about',$about); 
           
           return view('about.edit',['about'=>$about]); 
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(AboutUpdate $request ,About $about)
    {
       

          $data = $request->only('title','content','service'); 
         //檢查如果有image傳來  
           if ($request->file('image')) {
               # code...
               //路徑
                $path = $request->file('image')->store('public');
                $path =  str_replace('public/','/storage/',$path); 
                 //刪除目前路徑
                Storage::delete($request->image);
                
                $about->image = $path;
           }
            
           
         $about->update($data);

         Session::flash('success', '更新成功 !');

       return redirect(route('about.index'));

    




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
