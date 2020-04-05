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
					更新您的商品內容
				</div>
				<div class="card-body">
					<form action="{{route('product.update',$product->id)}}" method="POST" enctype="multipart/form-data">
						@csrf
						@method('PUT')

						<div class="row">
							<div class="col">
								<label for="title">商品標題</label>
								<input type="text" class="form-control" id="title" name="title" value="{{isset($product)? $product->title: ''}}">
							</div>
							<div class="col">
								<label for="image_description">商品小建議</label>
								<input type="text" class="form-control" id="image_description" name="image_description" value="{{isset($product)? $product->image_description: ''}}">
							</div>
						</div>

						<label for="content">商品選項方針</label>
						<textarea id="description" name="description" value="">{{isset($product)? $product->description: ''}}</textarea>



						<label for="description">商品圖片</label>
						@if(isset($product))
						<div class="pb-3">
							<img src="{{asset($product->image)}}" class="img-fluid" alt="{{$product->image_description}}" style="max-width:80px;">
							<input type="file" class="form-control-file" id="image" name="image">
						</div>
						@endif

						<label for="category_id">商品類別</label>
						<select class="form-control" id="category_id" name="category_id">
							{{-- <option selected  value="">選擇您的類別</option> --}}
							@foreach($categoryies as $categoryto )
							<option value="{{$categoryto->id}}" @if($categoryto->id == $product->category_id)
								selected @endif>
								{{$categoryto->name}}
							</option>
							@endforeach
						</select>

						@if($tag->count() > 0)
						<label for="tag">商品標籤</label>
						<select multiple class="form-control tags-select2" id="tag" name="tag[]">
							@foreach($tag as $tagin )
							<option value="{{$tagin->id}}" @if(isset($product)) @if($product->hasTag($tagin->id))
								selected
								@endif
								@endif
								>
								{{$tagin->name}}
							</option>
							@endforeach
						</select>
						@endif


						<label for="content">商品內容</label>
						<textarea id="content" name="content" value="">{{isset($product)? $product->content: ''}}</textarea>
						<div class="form-group">
							<div class="row">
								<div class="col">
									<label for="title_top">商品頁標籤</label>
									<input type="text" class="form-control" id="title_top" name="title_top" value="{{isset($product)? $product->title_top: ''}}">
								</div>
							</div>

							<label for="keywords">商品頁關鍵字</label>
							<input type="text" class="form-control" id="keywords" name="keywords" value="{{isset($product)? $product->keywords: ''}}">

						</div>
						<button type="submit" class="btn btn-primary">更新</button>
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