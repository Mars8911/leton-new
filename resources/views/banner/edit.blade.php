@extends('layouts.cms')
@section('category')

<div class="container">
	<div class="row">
			<div class="col-md-12">
				<h1>新增首頁圖片</h1>
			</div>
</div>
					<div class="row mb-5">
						<div class="col-md-12">
							<div class="card">
								<div class="card-header">
										<span class="task-list-completed">1920 * 900</span> 尺寸單位為<span class="task-list-total">(Pix)</span>
								</div>
						    <div class="card-body">
				<form action="{{route('banner.update',$banner->id)}}" method="POST" enctype="multipart/form-data">
						@csrf
						@method('PUT')	
                    <div class="form-group">
                        <label for="title">形象圖標題</label>
					<input type="text" class="form-control" id="title" name="title" value="{{$banner->title}}">
						<label for="description">形象圖連結</label>
						<input type="text" class="form-control" id="description" name="description" value="{{$banner->description}}" >
					 <label for="description">首頁圖片</label>
						@if(isset($banner))		
							 <div class="pb-3">
								 <img src="{{asset($banner->image)}}" class="img-fluid" alt="" style="max-width:80px;">
								<input type="file" class="form-control-file" id="image" name="image">
							</div>		   
						 @endif	   
                   </div>
                        <button type="submit" class="btn btn-success btn-sm">更新</button>
                </form>
						   	</div>
							</div>
						</div>
					</div>


</div>

@endsection

