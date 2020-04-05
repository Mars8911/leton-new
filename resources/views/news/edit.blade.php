@extends('layouts.cms')
@section('category')

<div class="container">
	<div class="row">
			<div class="col-md-12">
				<h1>更新您的最新消息</h1>
			</div>
</div>
					<div class="row mb-5">
						<div class="col-md-12">
							<div class="card">
								<div class="card-header">
										<span class="task-list-completed">建議圖片尺寸: 600 * 600</span> 尺寸單位為<span class="task-list-total">(Pix)</span>
								</div>
					 <div class="card-body">
			        	<form action="{{route('news.update',$news->id)}}" method="POST" enctype="multipart/form-data">
                            @csrf
                        	@method('PUT')
                           <div class="form-group">
                        <label for="title">更新您的標題</label>
                           <input type="text" class="form-control" id="title" name="title"  value="{{ $news->title}}"   >			
                        <label for="content">更新您的內容</label>
                        <textarea id="content" name="content" class="" >{{isset($news)? $news->content: ''}}</textarea>
						 <label for="content">更新您的圖片</label>
										  @if(isset($news))		
										     <div class="pb-3">
												 <img src="{{asset($news->image)}}" class="img-fluid" alt="" style="max-width:80px;">
												 <input type="file" class="form-control-file" id="image" name="image">
										     </div>		   
										  @endif	  

						 <label for="newstime_at">更新您的發佈日期</label>
					     <input type="text" class="form-control" id="newstime_at" name="newstime_at" value="{{ $news->newstime_at}}">
                          </div>
                               <button type="submit" class="btn btn-primary btn-sm">更新</button>
                        </form>
					</div>
							</div>
						</div>
					</div>
            </div>

@endsection



@section('css')

   <link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.11/summernote-lite.css" rel="stylesheet">

   {{-- flatpickr日期編輯器 --}}
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">

@endsection



@section('script')
          {{--編輯器  --}}
	   <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.11/summernote-lite.js"></script>

          {{-- flatpickr日期編輯器 --}}
	   <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>

	   <script>

		   flatpickr("#newstime_at", {
				//時間
			   enableTime: true
			  
		   });
	   
	   </script>

   <script>
     $(document).ready(function() {
         $('#content').summernote();
        });
  </script>
@endsection

