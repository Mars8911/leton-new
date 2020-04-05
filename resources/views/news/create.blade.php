@extends('layouts.cms')
@section('category')

<div class="container">
	<div class="row">
			<div class="col-md-12">
				<h1>新增您的最新消息</h1>
			</div>
</div>
					<div class="row mb-5">
						<div class="col-md-12">
							<div class="card">
								<div class="card-header">
										<span class="task-list-completed">建議圖片尺寸: 600 * 600</span> 尺寸單位為<span class="task-list-total">(Pix)</span>
								</div>
					 <div class="card-body">
			        	<form action="{{route('news.store')}}" method="POST" enctype="multipart/form-data">
						@csrf
                           <div class="form-group">
                        <label for="title">新增標題</label>
						<input type="text" class="form-control" id="title" name="title">			
                        <label for="content">新增內容</label>
                        <textarea id="content" name="content" class=""></textarea>
						<label for="image" class="pt-2">新增圖片</label>
						<input type="file" class="form-control-file" id="image" name="image">

						 <label for="newstime_at">發佈日期</label>
					     <input type="text" class="form-control" id="newstime_at" name="newstime_at">
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

