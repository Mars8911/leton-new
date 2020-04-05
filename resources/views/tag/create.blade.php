@extends('layouts.cms')
@section('category')

<div class="container">
	<div class="row">
			<div class="col-md-12">
				<h1>新增標籤</h1>
			</div>
</div>
					<div class="row mb-5">
						<div class="col-md-12">
							<div class="card">
								<div class="card-header">
									以下新增您的標籤
								</div>
						    <div class="card-body">
								<form action="{{route('tag.store')}}" method="POST">
									@csrf
                    <div class="form-group">
                        <label for="exampleInputPassword1">新增標籤</label>
                        <input type="text" class="form-control" id="name" name="name">
                   </div>
                        <button type="submit" class="btn btn-sm btn-primary">新增</button>
                </form>
						

						   	</div>
							</div>
						</div>
					</div>


</div>

@endsection

