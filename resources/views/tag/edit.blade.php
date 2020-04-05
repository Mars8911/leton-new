@extends('layouts.cms')



@section('category')

<div class="container">
	   <div class="row">
			<div class="col-md-12">
				<h1>更新標籤</h1>
			</div>
      </div>
					<div class="row mb-5">
						<div class="col-md-12">
							<div class="card">
								<div class="card-header">
									更新您的標籤
								</div>
						    <div class="card-body">
						 <form action="{{route('tag.update', $tag->id)}}" method="POST">
									@csrf
							        @method('PUT')	
                                   <div class="form-group">
                                      <label for="name">新增類別</label>
								   <input type="text" class="form-control" id="name" name="name" value="{{$tag->name}}">
                             </div>
                             <button type="submit" class="btn btn-primary">新增</button>
                         </form>
						   	</div>
							</div>
						</div>
					</div>
</div>

@endsection