<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Http\Requests\HomeUpdate;

use Illuminate\Support\Facades\Storage;

use Auth;

use User;

use App\Home;


use Session;

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
        return view('home.index')->with('home',Home::all());
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
    public function edit(Home $home)
    {
        
      
        return view('home.edit',['home'=>$home]); 
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(HomeUpdate $request ,Home $home)
    {
        
       $data = $request->only('index_title_1','index_description_1','index_link_1', 'index_title_2','index_description_2',
      'index_link_2','index_title_3','index_description_3','index_link_3','index_title_4',
      'index_description_4','index_link_4','index_title_5','index_description_5','index_link_5'); 

         
             $home->update($data);
 
             Session::flash('success', '更新成功 !');

             return redirect(route('home.index'));
               
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
