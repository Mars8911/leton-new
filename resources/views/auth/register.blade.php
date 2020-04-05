
@extends('layouts.cms')

@section('content')
	<div class="container-fluid">
		<div class="row">
			<div class="right-column sisu">
				<div class="row mx-0">
					<div class="col-md-7 order-md-2 signin-right-column px-5 bg-dark">
						<a class="signin-logo d-sm-block d-md-none" href="#">
							<img src="assets/img/logo-white.png" width="145" height="32.3" alt="QuillPro">
						</a>
						<h1 class="display-4">帳號申請登入</h1>
						<p class="lead mb-5">
							開通您的使用帳號
						</p>
					</div>
					<div class="col-md-5 order-md-1 signin-left-column bg-white px-5">
						<a class="signin-logo d-sm-none d-md-block" href="#">
							<img src="assets/img/logo-dark.png" width="145" height="32.3" alt="QuillPro">
						</a>
						<form method="POST" action="{{ route('register') }}">
							<div class="form-group">
								@csrf
								<label for="exampleInputEmail1">名稱</label>
								<input type="text" name="name" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }} " value="{{ old('name') }}" id="name" aria-describedby="name" placeholder="輸入您的的暱稱" required autofocus>
								@if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
							</div>
							<div class="form-group">
								<label for="exampleInputEmail1">帳號</label>
								<input type="email" class="form-control" name="email"  id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="創建您的信箱帳號">
								 @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
							</div>
							<div class="form-group">
								<label for="password">輸入密碼</label>
								<input type="password"  name="password"  class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" id="password" placeholder="輸入密碼" required>
								@if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
							</div>
							<div class="form-group">
								<label for="exampleInputPassword2">確認密碼</label>
								<input type="password" name="password_confirmation" class="form-control" id="password_confirmation" placeholder="再次確認您的密碼">
							</div>
							
							<button type="submit" class="btn btn-primary btn-gradient btn-block">
								<i class="batch-icon batch-icon-quill"></i>
								送出申請
							</button>
							
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>

	

@endsection