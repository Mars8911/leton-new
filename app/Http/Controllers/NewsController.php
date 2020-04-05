<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\BannerUpdate;

use Illuminate\Support\Facades\Storage;

use Session;

use App\News;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('news.index')->with('news',News::all());
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
          return view('news.create');
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
            'title' =>'required|max:25|unique:news',
            'content'=>'required',
            'image' =>'required|image',
            'newstime_at'=>'required',
       ]);

        $featured = $request->image;
        //將傳來的值 給予時間已面重複 
        $featured_new_name =  time().$featured->getClientOriginalName();

        // 給予照片上傳空間 move 代表移動
        $featured ->move('public/storage/',$featured_new_name);

    
          $news = News::create([

           'title' => $request->title,
           'content' => $request->content,
           'newstime_at' => $request->newstime_at,
           'image' => 'public/storage/'. $featured_new_name, 
          
         ]);

    
         Session::flash('success', '新增成功 !');
   
         return redirect(route('news.index'));

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
    public function edit(News $news)
    {
        //
        return view('news.edit')->with('news',$news);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,News $news)
    {
        //
          $data = $request->only('title','content','newstime_at'); 
         //檢查如果有image傳來  
           if ($request->file('image')) {
               # code...
               //路徑
                $path = $request->file('image')->store('public');
                $path =  str_replace('public/','/storage/',$path); 
                 //刪除目前路徑
                Storage::delete($request->image);
                
                $news->image = $path;
           }
            
           
         $news->update($data);

         Session::flash('success', '更新成功 !');

       return redirect(route('news.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(News $news)
    {
        //
         //
          $news->delete();

          Session::flash('success', '刪除成功 !');
          return redirect(route('news.index'));
    }
}
