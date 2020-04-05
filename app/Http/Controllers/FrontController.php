<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\About;

use App\Category;

use App\Product;

use App\Information;

use App\Contact;

use App\Banner;

use App\Seo;

use App\Tag;

use App\News;

use App\Home;

class FrontController extends Controller
{
  //首頁控制
  public function index()
  {
    //
    return view('index')
      //first 單一找出顯示
      ->with('abouttitle', About::first())
      ->with('tag', Tag::all())
      ->with('home', Home::first())
      ->with('seo', Seo::first())
      ->with('banner', Banner::take(1)->get())
      ->with('aboutcontent', About::first()->content)
      ->with('categoryies', Category::all())
      ->with('categoryode', Category::take(4)->get())
      ->with('first_product', Product::orderBy('created_at', 'desc')->first())
      ->with('career', Category::find(2))
      ->with('product', Product::take(12)->get())
      ->with('information', Information::first());
  }

  //最新消息分類
  public function news()
  {
    //
    return view('news')
      //first 單一找出顯示
      ->with('abouttitle', About::first())
      ->with('news', News::all())
      ->with('home', Home::first())
      ->with('seo', Seo::first())
      ->with('banner', Banner::take(1)->get())
      ->with('aboutcontent', About::first()->content)
      ->with('categoryies', Category::all())
      ->with('categoryode', Category::take(4)->get())
      ->with('first_product', Product::orderBy('created_at', 'desc')->first())
      ->with('career', Category::find(2))
      ->with('product', Product::take(10)->get())
      ->with('information', Information::first());
  }


  //最新消息單一篇文章
  public function slugNews($id)
  {
    //
    //   $product = Product::where('slug',$slug)->first();

    $news = News::find($id);


    return view('singonews')->with('news', $news)
      ->with('tag', Tag::all())
      ->with('seo', Seo::first())
      ->with('categoryies', Category::all())
      ->with('information', Information::first())
      ->with('categoryname', Category::first()->name);
  }



  //關於我們
  public function aboutus()
  {
    //
    return view('about')
      //first 單一找出顯示
      ->with('abouttitle', About::first())
      ->with('seo', Seo::first())
      ->with('aboutcontent', About::first()->content)
      ->with('categoryies', Category::all())
      ->with('first_product', Product::orderBy('created_at', 'desc')->first())
      ->with('career', Category::find(2))
      ->with('information', Information::first());
  }

  //聯繫我們
  public function contactus()
  {
    //
    return view('contact')
      //first 單一找出顯示
      ->with('abouttitle', About::first())
      ->with('seo', Seo::first())
      ->with('aboutcontent', About::first()->content)
      ->with('categoryies', Category::all())
      ->with('contact', Contact::all())
      ->with('first_product', Product::orderBy('created_at', 'desc')->first())
      ->with('career', Category::find(2))
      ->with('information', Information::first())
      ->with('tag', Tag::all());
  }

  //單一商品控制
  public function slugProduct($id)
  {
    //
    //   $product = Product::where('slug',$slug)->first();

    $product = Product::find($id);


    return view('singo')->with('product', $product)
      ->with('tag', Tag::all())
      ->with('seo', Seo::first())
      ->with('categoryies', Category::all())
      ->with('information', Information::first())
      ->with('categoryname', Category::first()->name);
  }

  //分類頁面
  public function category($id)
  {
    //
    $category = Category::find($id);

    return view('category')->with('category', $category)
      ->with('tag', Tag::all())
      ->with('seo', Seo::first())
      ->with('name', $category->name)
      ->with('categoryies', Category::all())
      ->with('information', Information::first());
  }

  //Tag頁面
  public function tag($id)
  {
    //
    $tag = Tag::find($id);

    return view('tag')->with('tag', $tag)
      ->with('seo', Seo::first())
      ->with('categoryies', Category::all())
      ->with('categoryies', Category::take(5)->get())
      ->with('product', Product::all())
      ->with('tags', Tag::all())
      ->with('information', Information::first());
  }
}
