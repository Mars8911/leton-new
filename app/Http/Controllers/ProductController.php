<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Storage;

use App\Http\Requests\ProductStore;

use App\Http\Requests\Productupdate;

use App\Product;

use App\Category;

use App\Tag;

use Session;

class ProductController extends Controller

{





  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   * 
   * 
   * 
   */
  public function index()
  {
    //
    return view('producties.index')->with('Product', Product::all());
  }




  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
    //
    //分類
    $categoryies = Category::all();
    $tag = Tag::all();
    return view('producties.create', ['categoryies' => $categoryies, 'tag' => $tag]);
  }



  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request)
  {

    //    dd($request->all());

    $this->validate($request, [
      'title' => 'required|max:100|unique:products',
      'title_top' => 'required|',
      'keywords' => 'required|',
      'description' => 'required|',
      'image' => 'required|image',
      'image_description' => 'required|',
      'content' => 'required|',
      'category_id' => 'required',

    ]);

    $featured = $request->image;
    //將傳來的值 給予時間已面重複 
    $featured_new_name =  time() . $featured->getClientOriginalName();

    // 給予照片上傳空間 move 代表移動
    $featured->move('public/storage/', $featured_new_name);



    $product = Product::create([

      'title_top' => $request->title_top,
      'description' => $request->description,
      'keywords' => $request->keywords,
      'title' => $request->title,
      'content' => $request->content,
      'image' => 'public/storage/' . $featured_new_name,
      'image_description' => $request->image_description,
      'category_id' => $request->category_id,

    ]);

    if ($request->tag) {

      $product->tags()->attach($request->tag);
    }




    Session::flash('success', '新增成功 !');

    return redirect(route('product.index'));
  }
  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function show(Product $product)
  {
    //
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function edit(Product $product)
  {

    // dd($product->tags->pluck('id')->toArray());


    $tag = Tag::all();    //
    $categoryies = Category::all();
    return view('producties.edit', ['product' => $product, 'categoryies' => $categoryies, 'tag' => $tag]);
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function update(Productupdate $request, Product $product)
  {

    $data = $request->only('title_top', 'keywords', 'title', 'description', 'image_description', 'content', 'category_id', 'tag');
    //檢查如果有image傳來  
    if ($request->file('image')) {
      # code...
      //路徑
      $path = $request->file('image')->store('public');
      $path =  str_replace('public/', '/storage/', $path);
      //刪除目前路徑
      Storage::delete($request->image);


      $product->image = $path;
    }


    //雲標籤
    if ($request->tag) {

      $product->tags()->sync($request->tag);
    }




    $product->update($data);

    Session::flash('success', '更新成功 !');

    return redirect(route('product.index'));
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function destroy(Product $product)
  {
    //
    $product->delete();

    Session::flash('success', '刪除成功 !');

    return redirect(route('product.index'));
  }
}
