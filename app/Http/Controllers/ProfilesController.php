<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\ProfileUpadate;

use Illuminate\Support\Facades\Storage;

use Auth;

use User;

use Session;


class ProfilesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('users.profiles')->with('user',Auth::User());
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
    public function update(ProfileUpadate $request)
    {
        //

        $user = Auth::user();

        if ($request->file('avatar')) {
               # code...
    
                 $avatar = $request->file('avatar')->store('public');

                 $avatar =  str_replace('public/','/storage/',$avatar); 
              

                 Storage::delete($request->avatar);

                 $user->profile->avatar = $avatar;


                 $user->profile->save();
           }

       $user->name = $request->name;
       
       $user->email = $request->email; 

       $user->save();

       $user->profile->save();


        if ($request->has('password')) {
              
                 $user->password = bcrypt($request->password);
         
                 $user->save();  

           }


        Session::flash('success', '更新成功 !');

       return redirect()->back();    







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
