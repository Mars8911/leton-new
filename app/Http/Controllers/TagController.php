<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Tag;

use Session;

class TagController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
      
        return view('tag.index')->with('tag',Tag::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('tag.create');
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
      $this->validate($request,[
          
            'name' =>'required|unique:tags|max:255',
           
       ]);
       
       $tag = new Tag();

       Tag::create([

        'name' => $request->name

       ]);

      Session::flash('success', '新增成功 !');

       return redirect(route('tag.index'));

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        //
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Tag $tag)
    {
        //
        return view('tag.edit')->with('tag',$tag);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Tag $tag)
    {

      $this->validate($request,[

            'name' =>'required|unique:tags|max:255',
           
       ]);    

        $tag->name = $request->name;

        $tag->save();

         Session::flash('success', '修改成功 !');

       return redirect(route('tag.index'));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tag $tag)
    {
        //
 
        if ($tag->products->count() > 0 ) {
           
               Session::flash('error', '類別還有商品 無法刪除喔!');

            return redirect(route('tag.index'));
        }
        


        $tag->delete();

        Session::flash('success', '刪除成功 !');

         return redirect(route('tag.index'));
    }
}
