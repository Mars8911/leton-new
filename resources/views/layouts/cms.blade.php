<!DOCTYPE html>
<html lang="zh-TW">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">
	<link rel="icon" href="/assets/img/favicon.png">

	<title>後台管理</title>

	<!-- Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,700&amp;subset=latin-ext" rel="stylesheet">

	<!-- CSS - REQUIRED - START -->
	<!-- Batch Icons -->
	<link rel="stylesheet" href="{{asset('/assets/fonts/batch-icons/css/batch-icons.css')}}">
	<!-- Bootstrap core CSS -->
	<link rel="stylesheet" href="{{asset('/assets/css/bootstrap/bootstrap.min.css')}}">
	<!-- Material Design Bootstrap -->
	<link rel="stylesheet" href="{{asset('/assets/css/bootstrap/mdb.min.css')}}">
	<!-- Custom Scrollbar -->
	<link rel="stylesheet" href="{{asset('/assets/plugins/custom-scrollbar/jquery.mCustomScrollbar.min.css')}}">
	<!-- Hamburger Menu -->
	<link rel="stylesheet" href="{{asset('/assets/css/hamburgers/hamburgers.css')}}">
    <!-- toastr -->
	<link rel="stylesheet" href="{{asset('css/toastr.css')}}">


	
	<!-- CSS - OPTIONAL - START -->
	<!-- Font Awesome -->
	<link rel="stylesheet" href="/assets/fonts/font-awesome/css/font-awesome.min.css">

	<!-- CSS - DEMO - START -->
	<link rel="stylesheet" href="/assets/demo/css/ui-icons-batch-icons.css">
	<!-- CSS - DEMO - END -->

	<!-- CSS - OPTIONAL - END -->

	<!-- QuillPro Styles -->
	<link rel="stylesheet" href="/assets/css/quillpro/quillpro.css">

	
	{{-- Select2 --}}
	<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />

	
	<!-- trix-->
	@yield('css')
	


   
	
</head>
<body>
      <div class="container-fluid">
		<div class="row">
			@auth
			<nav id="sidebar" class="px-0 bg-dark bg-gradient sidebar">
				<ul class="nav nav-pills flex-column">
					<li class="nav-item mt-3">
						<a class="nav-link" href="/" target="_blank">
							<i class="batch-icon batch-icon-store"></i>
							打開您的網站 <span class="sr-only">(current)</span>
						</a>
					</li>
					<li>
						<h6 class="nav-header">管理工具</h6>
					</li>
					{{-- <li class="nav-item">
						<a class="nav-link @if(request()->is('home')) active @endif" href="{{route('home.index')}}">
							<i class="batch-icon batch-icon-browser-alt"></i>
							首頁資訊 <span class="sr-only">(current)</span>
						</a>
					</li> --}}
					<li class="nav-item">
						<a class="nav-link @if(request()->is('banner')) active @endif" href="{{route('banner.index')}}">
							<i class="batch-icon batch-icon-image"></i>
							首頁圖片 <span class="sr-only">(current)</span>
						</a>
					</li>
					<li class="nav-item  ">
					
						<a class="nav-link @if(request()->is('about')) active @endif" href="{{route('about.index')}}">
							<i class="batch-icon batch-icon-compose-alt-3"></i>
							關於我們 <span class="sr-only">(current)</span>
						</a>
					</li>
					<li class="nav-item  ">
					
						<a class="nav-link @if(request()->is('news')) active @endif" href="{{route('news.index')}}">
							<i class="batch-icon batch-icon-bullhorn"></i>
							最新消息 <span class="sr-only">(current)</span>
						</a>
					</li>

					<li class="nav-item">
						<a class="nav-link nav-parent" href="#">
							<i class="batch-icon batch-icon-layout-content-left"></i>
							商品管理
						</a>
						<ul class="nav nav-pills flex-column">
							<li class="nav-item">
								<a class="nav-link @if(request()->is('categories')) active @endif" href="{{route('categories.index')}} " href="{{route('categories.index')}}">商品類別</a>
							</li>
							<li class="nav-item">
								<a class="nav-link @if(request()->is('product')) active @endif" href="{{route('product.index')}}">商品項目</a>
							</li>
							<li class="nav-item  ">
					        	<a class="nav-link @if(request()->is('tag')) active @endif" href="{{route('tag.index')}}">
							商品標籤<span class="sr-only">(current)</span></a>
				         	</li>
						</ul>
					</li>
					
					{{-- <li class="nav-item">
						<a class="nav-link @if(request()->is('contact')) active @endif" href="{{route('contact.index')}}">
							<i class="batch-icon batch-icon-speech-bubble-left-tip-chat"></i>
							客戶訊息 <span class="sr-only">(current)</span>
						</a>
					</li> --}}
					
                   @if(Auth::user()->admin)
 					<li class="nav-item">
						<a class="nav-link  @if(request()->is('users')) active @endif " href="{{route('users.index')}}">
							<i class="batch-icon batch-icon-users"></i>
							管理人員 <span class="sr-only">(current)</span>
						</a>
					</li>
				  @endif
				   <li class="nav-item">
						<a class="nav-link @if(request()->is('profiles')) active @endif" href="{{route('profiles.index')}}">
							<i class="batch-icon batch-icon-polaroid"></i>
							管理資料 <span class="sr-only">(current)</span>
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link  @if(request()->is('information')) active @endif" href="{{route('information.index')}}">
							<i class="batch-icon batch-icon-paragraph-alt-center"></i>
							網站資料 <span class="sr-only">(current)</span>
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="{{route('seo.index')}}">
							<i class="batch-icon batch-icon-link"></i>
							行銷串接 <span class="sr-only">(current)</span>
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="{{ route('logout') }}"  onclick="event.preventDefault();
                              document.getElementById('logout-form').submit();">
							<i class="batch-icon batch-icon-outgoing"></i>
							登出 <span class="sr-only">(current)</span>
						</a>
					</li>

						<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                        </form>
					</li>
				</ul>
			</nav>

			<div class="right-column">
				<nav class="navbar navbar-expand-lg navbar-light bg-white">
					<a class="navbar-brand d-block d-sm-block d-md-block d-lg-none" href="#">
						<img src="/assets/img/logo-dark.png" width="145" height="32.3" alt="QuillPro">
					</a>
					<button class="hamburger hamburger--slider" type="button" data-target=".sidebar" aria-controls="sidebar" aria-expanded="false" aria-label="Toggle Sidebar">
						<span class="hamburger-box">
							<span class="hamburger-inner"></span>
						</span>
					</button>
					<!-- Added Mobile-Only Menu -->
					<ul class="navbar-nav ml-auto mobile-only-control d-block d-sm-block d-md-block d-lg-none">
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" id="navbar-notification-search-mobile" data-toggle="dropdown" data-flip="false" aria-haspopup="true" aria-expanded="false">
								<i class="batch-icon batch-icon-search"></i>
							</a>
							<ul class="dropdown-menu dropdown-menu-fullscreen" aria-labelledby="navbar-notification-search-mobile">
								<li>
									<form class="form-inline my-2 my-lg-0 no-waves-effect">
										<div class="input-group">
											<input type="text" class="form-control" placeholder="Search for..." aria-label="Search for..." aria-describedby="basic-addon2">
											<div class="input-group-append">
												<button class="btn btn-primary btn-gradient waves-effect waves-light" type="button">
													<i class="batch-icon batch-icon-search"></i>
												</button>
											</div>
										</div>
									</form>
								</li>
							</ul>
						</li>
					</ul>

					<!--  DEPRECATED CODE:
						<div class="navbar-collapse" id="navbarSupportedContent">
					-->
					<!-- USE THIS CODE Instead of the Commented Code Above -->
					<!-- .collapse added to the element -->
		           
					<div class="collapse navbar-collapse" id="navbar-header-content">
						<ul class="navbar-nav navbar-language-translation mr-auto">
                        
							<li class="nav-item dropdown">	
									<i class="batch-icon batch-icon-user"></i>
									管理員 : {{ Auth::user()->name }}		
							</li>
							
						</ul>
						
					</div>
				</nav>
				<main class="main-content p-5" role="main">		
					 @yield('category')
				</main>
			</div>
			@else
			<div class="container-fluid">
		      <div class="row">
                  <div class="right-column">

				<main class="main-content" role="main">		
					 @yield('content')
				</main>
				  </div>
				</div>
              </div>
			@endauth
		</div>
	</div>

	<!-- SCRIPTS - REQUIRED START -->
	<!-- Placed at the end of the document so the pages load faster -->
	<!-- Bootstrap core JavaScript -->
	<!-- JQuery -->
	<script type="text/javascript" src="/assets/js/jquery/jquery-3.1.1.min.js"></script>
	<!-- Popper.js - Bootstrap tooltips -->
	<script type="text/javascript" src="/assets/js/bootstrap/popper.min.js"></script>
	<!-- Bootstrap core JavaScript -->
	<script type="text/javascript" src="/assets/js/bootstrap/bootstrap.min.js"></script>
	<!-- MDB core JavaScript -->
	<script type="text/javascript" src="/assets/js/bootstrap/mdb.min.js"></script>
	<!-- Velocity -->
	<script type="text/javascript" src="/assets/plugins/velocity/velocity.min.js"></script>
	<script type="text/javascript" src="/assets/plugins/velocity/velocity.ui.min.js"></script>
	<!-- Custom Scrollbar -->
	<script type="text/javascript" src="/assets/plugins/custom-scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
	<!-- jQuery Visible -->
	<script type="text/javascript" src="/assets/plugins/jquery_visible/jquery.visible.min.js"></script>
	<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
	<script type="text/javascript" src="/assets/js/misc/ie10-viewport-bug-workaround.js"></script>

	<!-- SCRIPTS - REQUIRED END -->

	<!-- SCRIPTS - OPTIONAL START -->
	<!-- Image Placeholder -->
	<script type="text/javascript" src="/assets/js/misc/holder.min.js"></script>
	<!-- SCRIPTS - OPTIONAL END -->

	<!-- QuillPro Scripts -->
	<script type="text/javascript" src="/assets/js/scripts.js"></script>

	<!-- toastr 訊息 -->
	<script type="text/javascript" src="{{ asset('js/toastr.min.js')}}"></script>
     {{-- Select2 --}}
	<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
	<!-- CKEditor -->
	<script type="text/javascript" src="assets/demo/js/forms-extra.js"></script>

	

	  <script>
            @if(Session::has('success'))
                toastr.success("{{ Session::get('success') }}")
            @endif

			 @if(Session::has('error'))
                toastr.error("{{ Session::get('error') }}")
            @endif

			 @if(Session::has('info'))
                toastr.info("{{ Session::get('info') }}")
            @endif

           
			$(document).ready(function() {
                $('.tags-select2').select2();
              });

	</script>
	
	
	@yield('script')
</body>
</html>
