<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Storage;

use App\Http\Requests\CategoryUpdate;

use App\Category;

use Session;

class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        return view('categories.index')->with('categories', Category::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('categories.create');
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
        $this->validate($request, [
            'name' => 'required|unique:categories|max:255',
            'image' => 'required|image',

        ]);

        $featured = $request->image;
        //將傳來的值 給予時間已面重複 
        $featured_new_name =  time() . $featured->getClientOriginalName();

        // 給予照片上傳空間 move 代表移動
        $featured->move('public/storage/', $featured_new_name);

        $categoey = new Category();

        Category::create([

            'name' => $request->name,
            'image' => 'public/storage/' . $featured_new_name,

        ]);

        Session::flash('success', '新增成功 !');

        return redirect(route('categories.index'));
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
    public function edit(Category $category)
    {
        //
        return view('categories.edit')->with('category', $category);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CategoryUpdate $request, Category $category)
    {

        $data = $request->only('name');
        //檢查如果有image傳來  
        if ($request->file('image')) {
            # code...
            //路徑
            $path = $request->file('image')->store('public');
            $path =  str_replace('public/', '/storage/', $path);
            //刪除目前路徑
            Storage::delete($request->image);

            $category->image = $path;
        }



        $category->update($data);

        Session::flash('success', '修改成功 !');

        return redirect(route('categories.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        //

        if ($category->products->count() > 0) {

            Session::flash('error', '類別還有商品 無法刪除喔!');

            return redirect(route('categories.index'));
        }



        $category->delete();

        Session::flash('success', '刪除成功 !');

        return redirect(route('categories.index'));
    }
}
