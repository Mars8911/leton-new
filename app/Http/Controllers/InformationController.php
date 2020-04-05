<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Http\Requests\InformationUpdate;

use Illuminate\Support\Facades\Storage;

use Auth;

use User;

use App\Information;

use Session;

class InformationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('information.index')->with('information',Information::all());
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
    public function edit(Information $information)
    {
        //

        return view('information.edit',['information'=>$information]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(InformationUpdate $request,Information $information)
    {
        //
    //      $this->validate($request,[
    //         'title_top'=>'required',
    //         'description'=>'required',
    //         'keywords'=>'required',
    //         'wordtime'=>'required',
    //         'email'=>'required',
    //         'tel'=>'required',
    //         'map' =>'required',   
    //         'phome'=>'required',
    //         'fox'=>'required',
        
           
    //    ]);
          

           $data = $request->only('title_top','description','keywords','wordtime','email',
            'tel','map','phome','fox'); 

         //檢查如果有image傳來  
           if ($request->file('logo_image')) {
               # code...
               //路徑
                $path = $request->file('logo_image')->store('public');
                $path =  str_replace('public/','/storage/',$path); 
                 //刪除目前路徑
                Storage::delete($request->logo_image);
                
                $information->logo_image = $path;
           }


           //檢查如果有image傳來  
           if ($request->file('small_logo_image')) {
               # code...
               //路徑
                $paths = $request->file('small_logo_image')->store('public');
                $paths =  str_replace('public/','/storage/',$paths); 
                 //刪除目前路徑
                Storage::delete($request->small_logo_image);
                
                $information->small_logo_image = $paths;
           }
            
           
         $information->update($data);

         Session::flash('success', '更新成功 !');

       return redirect(route('information.index'));


        
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
