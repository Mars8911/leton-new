@extends('layouts.cms')

 @section('content')
	<div class="container-fluid">
		<div class="row">
			<div class="right-column sisu">
				<div class="row mx-0">
					<div class="col-md-7 order-md-2 signin-right-column px-5 bg-dark">
						<a class="signin-logo d-sm-block d-md-none" href="#">
						<img src="{{asset('assets/img/logo-02.svg')}}" width="246" height="65" alt="">
						</a>
						<h1 class="display-4">YISI 逸思科技</h1>
						<p class="lead mb-5">
							若您還未有帳號請跟客服人員申請.
					</div>
					<div class="col-md-5 order-md-1 signin-left-column bg-white px-5">
						<a class="signin-logo d-sm-none d-md-block" href="#">
							<img src="assets/img/logo-dark.png" width="145" height="32.3" alt="QuillPro">
						</a>
						<form method="POST" action="{{ route('login') }}">
							 @csrf
							<div class="form-group">
								<label for="exampleInputEmail1">帳號</label>
								<input type="email" name="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="輸入帳號信箱">
								  @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
	
							</div>
							<div class="form-group">
								<label for="exampleInputPassword1">密碼</label>
								<input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="輸入您的密碼">
								 @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
							</div>
							<div class="custom-control custom-checkbox mb-3">
								<input type="checkbox" class="custom-control-input" id="remember" name="remember" {{ old('remember') ? 'checked' : '' }} >
								<label class="custom-control-label" for="remember">記住我</label>
							</div>
							<button type="submit" class="btn btn-primary btn-gradient btn-block">
								<i class="batch-icon batch-icon-key"></i>
								登入
							</button>
							<hr>
							{{-- <p class="text-center">
								    忘記密碼 ?
								   @if (Route::has('password.request'))
									<a href="{{ route('password.request') }}">取得密碼</a>
								   @endif
							</p> --}}
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection