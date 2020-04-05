<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\UserStore;

use App\User;

use App\Profile;

use Session;

class UsersController extends Controller
{

       public function __construct()
       {
               
          $this->Middleware('admin');

       }






    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
          return view('users.index')->with('users',User::all())->with('profile',Profile::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
            
           return view('users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserStore $request)
    {
        //

        $user = User::create([

             'name' => $request->name,
             'email' => $request->email,
             'password' => bcrypt('a123456789'),  

        ]);


         $profile = Profile::create([

             'user_id' => $user->id
             
        ]);


        
         Session::flash('success', '新增成功 !');
   
         return redirect(route('users.index'));


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


       $user = User::find($id);

       
       $user->profile()->delete();


       $user->delete();

        Session::flash('success', '刪除成功 !');
   
        return redirect()->back();


    }


     //開啟管理員
     public function admin($id)
    {
        //
        $user = User::find($id);

         $user->admin = 1;

         $user->save();

        
           Session::flash('info', '以開啟管理員 !');
   
        //  return redirect(route('users.index'));

          return redirect()->back();

    }


     //關閉管理員
     public function not_admin($id)
    {
        //
        $user = User::find($id);

         $user->admin = 0;

         $user->save();

         

           Session::flash('error', '以關閉管理員 !');
   
   
        //  return redirect(route('users.index'));

          return redirect()->back();
    }


}
