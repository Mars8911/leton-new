@extends('theme.page')

@section('banner')

	<div class="rev-slider-wrapper">

				<div id="" class="" data-version="5.0">

					<ul>

						<li data-transition="fade">

                        <img src="{{asset($home->banner)}}" class="rev-slidebg" alt="">

		

						</li>

					</ul>

				</div>

				<div id="calc-item" class="icons-box icons-bg style-2 type-2">

					<div class="flex-row fx-col-5">

						<!-- - - - - - - - - - - - - - Icon Box Item - - - - - - - - - - - - - - - - -->
						<div class="icons-wrap">

							<div class="icons-item">
								<div class="item-box">
									<i class=""></i>
									<h3 class="icons-box-title">
										<a href="#">PU 建材系列</a>
									</h3>
								<p>{{$home->banner_text1}}</p>
									<a href="/contactus" class="btn btn-small btn-style-5">了解更多</a>
								</div>
							</div>

						</div>

						<!-- - - - - - - - - - - - - - Icon Box Item - - - - - - - - - - - - - - - - -->
						<div class="icons-wrap">

							<div class="icons-item">
								<div class="item-box">
									<i class=""></i>
									<h3 class="icons-box-title">
										<a href="#">FRP建材系列</a>
									</h3>
									<p>{{$home->banner_text2}}</p>
									<a href="/contactus" class="btn btn-small btn-style-5">了解更多</a>
								</div>
							</div>

						</div>

						<!-- - - - - - - - - - - - - - Icon Box Item - - - - - - - - - - - - - - - - -->
						<div class="icons-wrap">

							<div class="icons-item">
								<div class="item-box">
									<i class=""></i>
									<h3 class="icons-box-title ">
										<a href="#"> &nbsp;&nbsp;全屋修繕</a>
									</h3>
									<p>{{$home->banner_text3}}</p>
									<a href="/contactus" class="btn btn-small btn-style-5">了解更多</a>
								</div>
							</div>

						</div>

						<!-- - - - - - - - - - - - - - Icon Box Item - - - - - - - - - - - - - - - - -->
						<div class="icons-wrap">

							<div class="icons-item">
								<div class="item-box">

									<h3 class="icons-box-title">
										<a href="#">EPOXY建材系列</a>
									</h3>
									<p>{{$home->banner_text4}}</p>
									<a href="/contactus" class="btn btn-small btn-style-5">了解更多</a>
								</div>
							</div>

						</div>

						<!-- - - - - - - - - - - - - - Icon Box Item - - - - - - - - - - - - - - - - -->
						<div class="icons-wrap">

							<div class="icons-item">
								<div class="item-box">
									<i class=""></i>
									<h3 class="icons-box-title">
										<a href="#">彈性水泥防水</a>
									</h3>
									<p>{{$home->banner_text5}}</p>
									<a href="/contactus" class="btn btn-small btn-style-5">了解更多</a>
								</div>
							</div>

						</div>

					</div>

				</div>

			</div>

@endsection



@section('content')

<div class="page-section-bg4 type4 half-bg-col">

					<div class="img-col-right">
						<a href="https://www.youtube.com/embed/XvHWOQguSek?rel=0&showinfo=0&autohide=2&controls=0&playlist=J2Y_ld0KL-4&enablejsapi=1"
						 class="col-bg" data-bg="{{asset('theme/images/962x564_img1.jpg')}}" data-fancybox="video"></a>
					</div>

					<div class="container extra-size2">
						<div class="row">
							<div class="col-md-6">

								<h4 class="section-sub-title">{{$abouttitle->title}}</h4>


								<p class="text-size-medium">{{$abouttitle->content}}
								</p>

						   	<a href="{{route('slug.product',['slug' => $first_product->slug ])}}" class="btn btn-small">關於我們</a>

							</div>
							<div class="col-md-6"></div>
						</div>
					</div>
				</div>
@endsection