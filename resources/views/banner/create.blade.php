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
				<form action="{{route('banner.store')}}" method="POST" enctype="multipart/form-data">
						@csrf
                    <div class="form-group">
                        <label for="title">形象圖標題</label>
						<input type="text" class="form-control" id="title" name="title">
						<label for="description">形象圖連結</label>
						<input type="text" class="form-control" id="description" name="description">
						<label for="image">商品圖片</label>
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

