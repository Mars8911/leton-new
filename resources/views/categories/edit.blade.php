@extends('layouts.cms')



@section('category')

<div class="container">
	<div class="row">
		<div class="col-md-12">
			<h1>更新項目</h1>
		</div>
	</div>
	<div class="row mb-5">
		<div class="col-md-12">
			<div class="card">
				<div class="card-header">
					更新您的類別
				</div>
				<div class="card-body">
					<form action="{{route('categories.update',$category->id)}}" method="POST" enctype="multipart/form-data">
						@csrf
						@method('PUT')
						<div class="form-group">
							<label for="name">更新您的類別</label>
							<input type="text" class="form-control" id="name" name="name" value="{{$category->name}}">
						</div>
						<label for="description">類別形象圖片(建議尺寸:1920*600pix))</label>
						@if(isset($category))
						<div class="pb-3">
							<img src="{{asset($category->image)}}" class="img-fluid" alt="{{$category->image}}" style="max-width:80px;">
							<input type="file" class="form-control-file" id="image" name="image">
						</div>
						@endif
						<button type="submit" class="btn btn-success btn-sm">更新</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection