@extends('theme.page')



@section('header')

<!-- Global site tag (gtag.js) - Google Analytics -->
     <?=$seo->google_ga?>

<!-- Basic Page Needs ================================================== -->
	 <!--meta info-->
	 <meta charset="utf-8">
	 <meta name="author" content="{{$information->title_top}}">
	 <meta name="keywords" content="{{$information->keywords}}">
	 <meta name="description" content="{{$information->title_description}}">

	 <!-- Mobile Specific Metas
   ================================================== -->
	 <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

	  <!-- Vendor CSS
   ============================================ -->
   <title>關於我們-{{$information->title_top}}</title>

    {{-- <link rel="shortcut icon" href="{{asset($information->small_logo_image)}}">
	  <link rel="apple-touch-icon" href="{{asset($information->small_logo_image)}}">
	  <link rel="apple-touch-icon" sizes="72x72" href="{{asset($information->small_logo_image)}}">
	  <link rel="apple-touch-icon" sizes="114x114" href="{{asset($information->small_logo_image)}}"> --}}

    <!-- Standard Favicon -->
  <link rel="icon" type="image/x-icon" href="{{asset($information->small_logo_image)}}" />

     <!-- For iPhone 4 Retina display: -->
  <link rel="apple-touch-icon-precomposed" href="{{asset('theme/images//apple-touch-icon-114x114-precomposed.png')}}">

     <!-- For iPad: -->
	<link rel="apple-touch-icon-precomposed" href="{{asset('theme/images//apple-touch-icon-72x72-precomposed.png')}}">

    <!-- For iPhone: -->
	<link rel="apple-touch-icon-precomposed" href="{{asset('theme/images//apple-touch-icon-57x57-precomposed.png')}}">

  <!-- Library - Google Font Familys -->
  <link href="https://fonts.googleapis.com/css?family=Hind:300,400,500,600,700%7cMontserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="{{asset('theme/revolution/css/settings.css')}}">
    <!-- Library -->
	<link href="{{asset('theme/css/lib.css')}}" rel="stylesheet">
    <!-- Custom - Common CSS -->
	<link rel="stylesheet" href="{{asset('theme/css/rtl.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('theme/css/style.css')}}">

    <!--[if lt IE 9]>
		<script src="js/html5/respond.min.js"></script>
    <![endif]-->
	
@endsection

@section('content')
<!-- Page Content -->
			<div class="container-fluid no-left-padding no-right-padding page-content">
				<!-- container -->	
				<div class="container">
					<!-- Row -->
					<div class="row">
						<!-- Content Area -->
						<div class="col-sm-12 content-area d-flex justify-content-center">
							<div class="aboute-block">
							<img src="{{$abouttitle->image}}" alt="abouteme" class="rounded mx-auto d-block"/ >
								<div class="block-title">
									<h3>{{$abouttitle->title}}</h3>
								</div>
								<p>{{$abouttitle->service}}</p>
								
							<p><?= $abouttitle->content ?></p>
							</div>
						</div><!-- Content Area /- -->
					</div><!-- Row /- -->
				</div><!-- container /- -->
			</div><!-- Aboute-me Section /- -->

@endsection