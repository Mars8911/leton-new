@extends('theme.page')

@section('header')

<!-- Global site tag (gtag.js) - Google Analytics -->
<?= $seo->google_ga ?>
<title>{{$product->title_top}}-{{$information->title_top}}</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="author" content="{{$product->title_top}}">
<meta name="keywords" content="{{$product->keywords}}">
<meta name="description" content="{{$product->title_description}}">

<!-- Mobile Specific Metas
   ================================================== -->
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

<!-- Vendor CSS
   ============================================ -->

<!-- favicon -->
<link rel="shortcut icon" href="{{asset($information->small_logo_image)}}">
<link rel="apple-touch-icon" href="images/apple-touch-icon-57x57.png">
<link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png">
<link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png">
<!-- animation -->
<link rel="stylesheet" href="{{asset('theme/css/animate.css')}}" />
<!-- bootstrap -->
<link rel="stylesheet" href="{{asset('theme/css/bootstrap.min.css')}}" />
<!-- et line icon -->
<link rel="stylesheet" href="{{asset('theme/css/et-line-icons.css')}}" />
<!-- font-awesome icon -->
<link rel="stylesheet" href="{{asset('theme/css/font-awesome.min.css')}}" />
<!-- themify icon -->
<link rel="stylesheet" href="{{asset('theme/css/themify-icons.css')}}">
<!-- swiper carousel -->
<link rel="stylesheet" href="{{asset('theme/css/swiper.min.css')}}">
<!-- justified gallery  -->
<link rel="stylesheet" href="{{asset('theme/css/justified-gallery.min.css')}}">
<!-- magnific popup -->
<link rel="stylesheet" href="{{asset('theme/css/magnific-popup.css')}}" />
<!-- revolution slider -->
<link rel="stylesheet" type="text/css" href="{{asset('theme/revolution/css/settings.css')}}" media="screen" />
<link rel="stylesheet" type="text/css" href="{{asset('theme/revolution/css/layers.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('theme/revolution/css/navigation.css')}}">
<!-- bootsnav -->
<link rel="stylesheet" href="{{asset('theme/revolution/css/bootsnav.css')}}">
<!-- style -->
<link rel="stylesheet" href="{{asset('theme/css/style.css')}}" />
<!-- responsive css -->
<link rel="stylesheet" href="{{asset('theme/css/responsive.css')}}" />
<!--[if IE]>
            <script src="js/html5shiv.js"></script>
<![endif]-->
@endsection
@section('content')
<!-- start post content section -->
<section>
	<div class="container">
		<div class="row flex-lg-row-reverse">
			<main class="col-12 col-lg-9 left-sidebar md-margin-60px-bottom sm-margin-40px-bottom pr-0 md-no-padding-left">
				<!-- start filter content -->
				<div class="container-fluid">
					<div class="row">
						<div class="col-12 px-3 p-md-0">
							<div class="filter-content overflow-hidden">
								<h3 class="text-info">{{$product->title}}</h3>
								<p class="">專業-油壓托板車製造、批發、零售</p>
								<hr>
								<div class="row">
									<div class="col-md-6">
										<img src="{{asset($product->image)}}" alt="..." class="img-thumbnail">
									</div>
									<div class="col-md-6">
										<h6 class="text-danger">小建議 :</h6>
										<p class="text-justify">
											{{$product->image_description}}</p>
										<hr>
										<h6 class="text-danger">規格選購方針：</h6>
										<p class="text-justify">
											{{$product->description}}
										</p>
									</div>
								</div>

							</div>
						</div>
					</div>
					<hr>
					<div class="col-12">
						<p class="text-justify"></p>
						<?= $product->content ?>
					</div>
				</div>
				<!-- end filter content -->
			</main>
			<aside class="col-12 col-lg-3">




				<div class="margin-45px-bottom sm-margin-25px-bottom">
					<div class="text-extra-dark-gray margin-25px-bottom alt-font text-uppercase font-weight-600 text-small aside-title">
						<span>相關標籤</span></div>
					<div class="tag-cloud">
						@if(isset($tag))
						@foreach($tag as $tagin)
						<a href="{{route('slug.tag',['id'=>$tagin->id])}}" title="{{$tagin->name}}">{{$tagin->name}}</a>
						@endforeach
						@endif
					</div>
				</div>
			</aside>
		</div>
	</div>
</section>
<!-- end blog content section -->
@endsection