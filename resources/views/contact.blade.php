@extends('theme.page')

@section('header')

<!-- Global site tag (gtag.js) - Google Analytics -->
<?= $seo->google_ga ?>


<title>聯繫我們-{{$information->title_top}}</title>

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
<!-- start help section -->
<section class="wow fadeIn big-section">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-12 col-lg-8 text-center">
				<span class="alt-font text-small text-uppercase">welcome to power-tong</span>
				<h2 class="alt-font font-weight-700 letter-spacing-minus-1 text-extra-dark-gray text-info">
					力同倉儲專業設備
				</h2>
				<p class="width-75 mx-auto sm-width-100 text-justify">
					{{$information->description}}</p>
			</div>
		</div>
	</div>
</section>
<!-- end help section -->
<!-- start contact section -->
<section class="no-padding bg-extra-dark-gray">
	<div class="container-fluid">
		<div class="row">
			<div class="col-12 col-lg-6 p-0 cover-background md-height-450px sm-height-350px wow fadeInLeft" style="background: url(https://images.unsplash.com/photo-1528192349722-04f1f48b42f1?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1351&q=80)">
			</div>
			<div class="col-12 col-lg-6 p-0 wow fadeInRight">
				<div class="row m-0">
					<!-- start contact item -->
					<div class="col-12 col-md-6 bg-extra-dark-gray d-flex flex-column justify-content-center align-items-center text-center height-350px last-paragraph-no-margin">
						<i class="icon-map text-deep-pink icon-medium margin-25px-bottom"></i>
						<div class="text-white-2 text-uppercase alt-font font-weight-600 margin-5px-bottom">
							公司地址</div>
						<p class="width-60 lg-width-80 mx-auto text-medium text-justify text-white">
							桃園市龜山區忠義路一段1070-1號.</p>
					</div>
					<!-- end contact item -->
					<!-- start contact item -->
					<div class="col-12 col-md-6 bg-black d-flex flex-column justify-content-center align-items-center text-center height-350px last-paragraph-no-margin">
						<i class="icon-chat text-deep-pink icon-medium margin-25px-bottom"></i>
						<div class="text-white-2 text-uppercase alt-font font-weight-600 margin-5px-bottom">
							聯繫方式</div>
						<p class="mx-auto text-medium mb-0 text-white">電話: {{$information->tel}}</p>
						<p class="mx-auto text-medium text-white">傳真: {{$information->fox}}</p>
					</div>
					<!-- end contact item -->
					<!-- start contact item -->
					<div class="col-12 col-md-6 bg-black d-flex flex-column justify-content-center align-items-center text-center height-350px last-paragraph-no-margin">
						<i class="icon-envelope text-deep-pink icon-medium margin-25px-bottom"></i>
						<div class="text-white-2 text-uppercase alt-font font-weight-600 margin-5px-bottom">
							聯繫信箱</div>
						<p class="mx-auto text-medium mb-0 text-white"><a href="mailto:power.tong@seed.net.tw" class="text-white">power.tong@seed.net.tw</a>
						</p>

					</div>
					<!-- end contact item -->
					<!-- start contact item -->
					<div class="col-12 col-md-6 bg-extra-dark-gray d-flex flex-column justify-content-center align-items-center text-center height-350px last-paragraph-no-margin">
						<i class="icon-clock text-deep-pink icon-medium margin-25px-bottom"></i>
						<div class="text-white-2 text-uppercase alt-font font-weight-600 margin-5px-bottom">
							營業時間</div>
						<p class="mx-auto text-medium mb-0 text-white">周一 至 周五</p>
						<p class="mx-auto text-medium text-white">{{$information->wordtime}}</p>
					</div>
					<!-- end contact item -->
				</div>
			</div>
		</div>
	</div>
</section>
<!-- end contact section -->
@endsection