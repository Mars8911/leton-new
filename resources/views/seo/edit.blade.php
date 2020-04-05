@extends('layouts.cms')



@section('category')

<div class="container">
	   <div class="row">
			<div class="col-md-12">
				<h1>各項行銷工具 串接</h1>
			</div>
      </div>
					<div class="row mb-5">
						<div class="col-md-12">
							<div class="card">
								<div class="card-header">
									可直接更新您的數據串接
								</div>
						    <div class="card-body">
						 <form action="{{route('seo.update',$seo->id)}}" method="POST">
									@csrf
							     	@method('PUT')	
                                   <div class="form-group">  
                                   <label for="google_ga">Google Analytics</label>
								   <textarea class="form-control" id="google_ga" rows="3" name="google_ga">{{$seo->google_ga}}</textarea>
                             </div>
                             <button type="submit" class="btn btn-success btn-sm">更新</button>
                         </form>
						   	</div>
							</div>
						</div>
					</div>
</div>

@endsection