@extends('layouts.cms')



@section('category')

<div class="container">
	<div class="row">
			<div class="col-md-12">
				<h1>管理員資訊</h1>
			</div>
</div>
	<div class="row mb-5">
						<div class="col-md-12">
							<div class="card">
								<div class="card-header">
									編輯您的管理員
								</div>
						    <div class="card-body">
								<form action="{{route('profiles.update',Auth::user()->id)}}" method="POST" enctype="multipart/form-data">
									@csrf
									@method('PUT')
                                   <div class="form-group">
                                          <label for="name" >管理員名稱</label>
							          	  <input type="text" class="form-control" readonly  id="name" name="name" value="{{ $user->name }}">
                                          <label for="email">管理員信箱</label>
										  <input type="email"  class="form-control" readonly id="email" name="email" value="{{ $user->email }}">
										  <label for="password">管理員密碼</label>
										  <input type="password" class="form-control" id="password" name="password" value="{{ $user->password }}">
										  <label for="avatar">管理員圖像</label>
										 @if($user->profile->avatar)
										  <img src="{{asset($user->profile->avatar)}}" class="img-fluid" alt="" style="max-width:80px;">
										 <input type="file" class="form-control" id="avatar" name="avatar"> 
										 @else		
										 <input type="file" class="form-control" id="avatar" name="avatar"> 
										 @endif
										 
										 
										  <label for="about">管理員簡介</label>
                                          <input type="text" class="form-control" id="about" name="about" value="{{ $user->profile->about}}">                                   
                                    </div>
                                    <button type="submit" class="btn btn-success btn-sm">更新資料</button>
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