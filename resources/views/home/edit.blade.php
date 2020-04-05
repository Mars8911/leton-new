@extends('layouts.cms')



@section('category')


 <div class="container">
	<div class="row">
			<div class="col-md-12">
				<h1>公司簡介</h1>
			</div>
</div>
	<div class="row mb-5">
						<div class="col-md-12">
							<div class="card">
								<div class="card-header">
									公司簡介資訊
								</div>
						    <div class="card-body">
								<form action="{{route('home.update',$home->id)}}" method="POST" enctype="multipart/form-data">
									@csrf
									@method('PUT')
                                   <div class="form-group">
									   <div class="row">
										   <div class="col">
											 <label for="index_title_1">我們的服務(一)</label>
										     <input type="text" class="form-control" id="index_title_1" name="index_title_1" value="{{ $home->index_title_1 }}">
										   </div>
										   <div class="col">
											 <label for="index_description_1">服務簡單描述</label>
										     <input type="text" class="form-control" id="index_description_1" name="index_description_1" value="{{ $home->index_description_1 }}">
										   </div>
										   <div class="col">
											 <label for="index_image_1">圖標字元</label>
										     <input type="text" class="form-control" id="index_image_1" name="index_image_1" value="{{ $home->index_image_1 }}">   
										    </div>   
									   </div> 
									  {{-- over --}}
									   <div class="row">
										   <div class="col">
											 <label for="index_title_2">我們的服務(二)</label>
										     <input type="text" class="form-control" id="index_title_2" name="index_title_2" value="{{ $home->index_title_2 }}">
										   </div>
										   <div class="col">
											 <label for="index_description_2">服務簡單描述</label>
										     <input type="text" class="form-control" id="index_description_2" name="index_description_2" value="{{ $home->index_description_2 }}">
										   </div>
										   <div class="col">
											 <label for="index_image_2">圖標字元</label>
										     <input type="text" class="form-control" id="index_image_2" name="index_image_2" value="{{ $home->index_image_2 }}">   
										    </div>   
									   </div> 
									  {{-- over --}}
									   <div class="row">
										   <div class="col">
											 <label for="index_title_3">我們的服務(三)</label>
										     <input type="text" class="form-control" id="index_title_3" name="index_title_3" value="{{ $home->index_title_3 }}">
										   </div>
										   <div class="col">
											 <label for="index_description_3">服務簡單描述</label>
										     <input type="text" class="form-control" id="index_description_3" name="index_description_3" value="{{ $home->index_description_3 }}">
										   </div>
										   <div class="col">
											 <label for="index_image_3">圖標字元</label>
										     <input type="text" class="form-control" id="index_image_3" name="index_image_3" value="{{ $home->index_image_3 }}">   
										    </div>   
									   </div> 
									  {{-- over --}}
									   <div class="row">
										   <div class="col">
											 <label for="index_title_4">我們的服務(四)</label>
										     <input type="text" class="form-control" id="index_title_4" name="index_title_4" value="{{ $home->index_title_4 }}">
										   </div>
										   <div class="col">
											 <label for="index_description_4">服務簡單描述</label>
										     <input type="text" class="form-control" id="index_description_4" name="index_description_4" value="{{ $home->index_description_4 }}">
										   </div>
										   <div class="col">
											 <label for="index_image_4">圖標字元</label>
										     <input type="text" class="form-control" id="index_image_4" name="index_image_4" value="{{ $home->index_image_4 }}">   
										    </div>   
									   </div> 
									  {{-- over --}}
                                        
					
                                    </div>
                                    <button type="submit" class="btn btn-success btn-sm">更新簡介</button>
                                 </form>
						
						   	</div>
							</div>
						</div>
					</div>

</div>




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



@endsection