@extends('layouts.cms')



@section('category')

<div class="container">
	<div class="row">
			<div class="col-md-12">
				<h1>新增管理員</h1>
			</div>
</div>
					<div class="row mb-5">
						<div class="col-md-12">
							<div class="card">
								<div class="card-header">
									新增您的管理員
								</div>
						    <div class="card-body">
								<form action="{{route('users.store')}}" method="POST" enctype="multipart/form-data">
									@csrf
                                   <div class="form-group">
                                          <label for="title">管理員名稱</label>
                                          <input type="text" class="form-control" id="name" name="name">
                                          <label for="email">管理員信箱</label>
                                          <input type="email" class="form-control" id="email" name="email">                                
                                    </div>
                                    <button type="submit" class="btn btn-success btn-sm">新增</button>
                                 </form>
						
						   	</div>
							</div>
						</div>
					</div>


</div>

@endsection


@section('script')

<script src="https://cdnjs.cloudflare.com/ajax/libs/trix/1.1.0/trix-core.js"></script>

@endsection



@section('css')

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/trix/1.1.0/trix.css">

@endsection