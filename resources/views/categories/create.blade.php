@extends('layouts.cms')
@section('category')

<div class="container">
	<div class="row">
		<div class="col-md-12">
			<h1>分類項目</h1>
		</div>
	</div>
	<div class="row mb-5">
		<div class="col-md-12">
			<div class="card">
				<div class="card-header">
					以下新增您的類別
				</div>
				<div class="card-body">
					<form action="{{route('categories.store')}}" method="POST" enctype="multipart/form-data">
						@csrf
						<div class="form-group">
							<label for="exampleInputPassword1">新增類別</label>
							<input type="text" class="form-control" id="name" name="name">
						</div>
						<div class="form-group">
							<label for="image">類別形象圖片(建議尺寸:600*600pix))</label>
							<input type="file" class="form-control-file" id="image" name="image">
						</div>
						<button type="submit" class="btn btn-primary btn-sm">新增</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection