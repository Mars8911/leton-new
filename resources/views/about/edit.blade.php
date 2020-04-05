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
								<form action="{{route('about.update',$about->id)}}" method="POST" enctype="multipart/form-data">
									@csrf
									@method('PUT')
                                   <div class="form-group">
                                          <label for="title">公司簡介 標題</label>
										  <input type="text" class="form-control" id="title" name="title" value="{{ $about->title }}">
										  <label for="service">公司簡介 簡介</label>
										  <input type="text" class="form-control" id="service" name="service" value="{{ $about->service }}">
										  <label for="content">公司簡介 內容</label>
										  <textarea id="content" name="content">{{ $about->content }}</textarea>
                                          
                                           
										 	@if(isset($about))		
							                   <div class="pt-3">
												    
													 <img src="{{asset($about->image)}}" class="img-fluid" alt="" style="max-width:250px;">
													 <label for="content">商品圖 (建議尺寸600*600 pix)</label>
								                     <input type="file" class="form-control-file" id="image" name="image">
					                	    	</div>		   
					                    	 @endif	   
													 
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