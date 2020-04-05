@extends('theme.page')


@section('header')

<!-- Global site tag (gtag.js) - Google Analytics -->
<?= $seo->google_ga ?>
<title>{{$information->title_top}}/{{$tag->name}}</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="author" content="{{$information->title_top}}">
<meta name="keywords" content="{{$information->keywords}}">
<meta name="description" content="{{$information->title_description}}">

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


<!-- Page Content 123-->
<div class="container-fluid no-left-padding no-right-padding no-top-padding page-content blog-single cover-fullwidth">
	<div class="jumbotron jumbotron-fluid jumbotron-bg d-flex align-items-end">
		<div class="container">
			<div class="bg-linhter p-3">
				<h3 class="display-4 text-center text-info">{{$tag->name}}</h3>
				<p class="lead text-center">{{$tag->name}} 相關類型</p>
			</div>
		</div>
	</div>
	<!-- Container -->
	<section>
		<div class="container">
			<div class="row flex-lg-row-reverse">
				<main class="col-12 col-lg-9 left-sidebar md-margin-60px-bottom sm-margin-40px-bottom pr-0 md-no-padding-left">
					<!-- start filter content -->
					<div class="container-fluid">
						<div class="row">
							<div class="col-12 px-3 p-md-0">
								<div class="filter-content overflow-hidden">
									<ul class="portfolio-grid work-3col gutter-medium hover-option6 lightbox-portfolio">
										<li class="grid-sizer"></li>
										<!-- start portfolio-item item -->
										@foreach($tag->products as $product)
										<li class="design web photography grid-item wow fadeInUp last-paragraph-no-margin px-2">
											<figure>
												<div class="portfolio-img bg-deep-pink position-relative text-center overflow-hidden">
													<img src="{{asset($product->image)}}" alt="" />
													<div class="portfolio-icon">
														<a href="{{route('slug.product',['id' => $product->id])}}"><i class="fas fa-link text-extra-dark-gray" aria-hidden="true"></i></a>
														<a class="gallery-link" title="{{$product->title}}" href="{{asset($product->image)}}"><i class="fas fa-search text-extra-dark-gray" aria-hidden="true"></i></a>
													</div>
												</div>
												<figcaption class="bg-white">
													<div class="portfolio-hover-main text-center">
														<div class="portfolio-hover-box align-middle">
															<div class="portfolio-hover-content position-relative">
																<a href="{{route('slug.product',['id' => $product->id])}}"><span class="line-height-normal font-weight-600 text-small alt-font margin-5px-bottom text-extra-dark-gray text-uppercase d-block">{{$product->title}} </span></a>

															</div>
														</div>
													</div>
												</figcaption>
											</figure>
										</li>
										@endforeach
										<!-- end portfolio item -->
									</ul>
								</div>
							</div>
						</div>
					</div>
					<!-- end filter content -->
				</main>
				<aside class="col-12 col-lg-3">

					<div class="margin-45px-bottom sm-margin-25px-bottom">
						<div class="text-extra-dark-gray margin-20px-bottom alt-font text-uppercase font-weight-600 text-small aside-title"><span>產品類別</span></div>
						<ul class="list-style-6 margin-50px-bottom text-small">
							@foreach($categoryies as $category)
							<li><a href="{{route('slug.category',['id'=> $category->id])}}">{{$category->name}}</a></li>
							@endforeach
						</ul>
					</div>


				</aside>
			</div>
		</div>
	</section>




	@endsection