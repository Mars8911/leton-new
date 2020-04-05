@extends('layouts.cms')



@section('category')

<div class="container">
   <div class="row">
      <div class="col-md-12">
         <h1>商品項目</h1>
      </div>
   </div>
   <div class="row mb-5">
      <div class="col-md-12">
         <div class="card">
            <div class="card-header">
               新增您的商品內容
            </div>
            <div class="card-body">
               <form action="{{route('product.store')}}" method="POST" enctype="multipart/form-data">
                  @csrf
                  <div class="form-group">
                     <div class="row">
                        <div class="col">
                           <label for="title">商品標題</label>
                           <input type="text" class="form-control" id="title" name="title" placeholder="商品名稱 : 例如:(油壓托板車)">
                        </div>
                        <div class="col">
                           <label for="image_description">商品小建議</label>
                           <input type="text" class="form-control" id="image_description" name="image_description" placeholder="小建議說明">
                        </div>
                     </div>

                     <label for="description">商品選項方針</label>
                     <textarea id="description" name="description" class="" placeholder="商品選項方針"></textarea>


                     <label for="image">商品圖片</label>
                     <input type="file" class="form-control-file" id="image" name="image">



                     <label for="category">商品類別</label>

                     <select class="form-control" id="category_id" name="category_id">
                        <option value="">選擇您的類別</option>
                        @foreach($categoryies as $categoryto )
                        <option value="{{$categoryto->id}}">{{$categoryto->name}}</option>
                        @endforeach
                     </select>


                     @if($tag->count() > 0)
                     <label for="tag">商品標籤</label>
                     <select multiple class="form-control tags-select2" id="tag" name="tag[]">
                        @foreach($tag as $tagin )
                        <option value="{{$tagin->id}}">{{$tagin->name}}</option>
                        @endforeach
                     </select>
                     @endif

                     <label for="content">商品內容</label>
                     <textarea id="content" name="content" class="" placeholder="商品說明詳細內容"></textarea>
                  </div>
                  <div class="row">
                     <div class="col">
                        <label for="title_top">商品頁標籤</label>
                        <input type="text" class="form-control" id="title_top" name="title_top" placeholder="商品頁搜尋的Title">
                     </div>

                     <div class="col">
                        <label for="keywords">商品頁關鍵字</label>
                        <input type="text" class="form-control" id="keywords" name="keywords" placeholder="商品頁關鍵字:如 手推車、倉儲">
                     </div>
                  </div>
                  <button type="submit" class="btn btn-primary btn-sm">新增</button>
               </form>

            </div>
         </div>
      </div>
   </div>


</div>

@endsection







@section('css')

<link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.11/summernote-lite.css" rel="stylesheet">

@endsection



@section('script')

<script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.11/summernote-lite.js"></script>

<script>
   $(document).ready(function() {
      $('#content').summernote();
   });
</script>
@endsection