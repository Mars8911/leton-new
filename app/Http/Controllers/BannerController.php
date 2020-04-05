<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\BannerUpdate;

use Illuminate\Support\Facades\Storage;

use Session;

use App\Banner;

class BannerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('banner.index')->with('banner',Banner::all()); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       
        return view('banner.create');
         
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

         //
        //    dd($request->all());

        $this->validate($request,[
            'title' =>'required|max:25|unique:banners',
            'description'=>'required',
            'image' =>'required|image',
       ]);


       
        $featured = $request->image;
        //將傳來的值 給予時間已面重複 
        $featured_new_name =  time().$featured->getClientOriginalName();

        // 給予照片上傳空間 move 代表移動
        $featured ->move('public/storage/',$featured_new_name);

    
          $banner = Banner::create([

           'title' => $request->title,
           'description' => $request->description,
           'image' => 'public/storage/'. $featured_new_name, 
          
         ]);

        

          
         Session::flash('success', '新增成功 !');
   
         return redirect(route('banner.index'));
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
    public function edit(Banner $banner)
    {
        //

        // dd($product->tags->pluck('id')->toArray());
      
         return view('banner.edit',['banner'=>$banner]); 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(BannerUpdate $request, Banner $banner)
    {
        //

          $data = $request->only('title','description'); 
         //檢查如果有image傳來  
           if ($request->file('image')) {
               # code...
               //路徑
                $path = $request->file('image')->store('public');
                $path =  str_replace('public/','/storage/',$path); 
                 //刪除目前路徑
                Storage::delete($request->image);
                
                $banner->image = $path;
           }
            
           
         $banner->update($data);

         Session::flash('success', '更新成功 !');

       return redirect(route('banner.index'));
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Banner $banner)
    {
        //
          $banner->delete();

          Session::flash('success', '刪除成功 !');
          return redirect(route('banner.index'));
    }
}
