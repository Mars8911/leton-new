@extends('theme.page')


@section('content')

	<div class="page-section-bg4 type4 half-bg-col">

					<div class="img-col-right">
					<div class="col-bg" data-bg="{{asset($abouttitle->image)}}"></div>
					</div>

					<div class="container extra-size2">
						<div class="row">
							<div class="col-md-6">

							<h4 class="section-sub-title">{{$abouttitle->title}}</h4>


								<p class="text-size-medium">{{$abouttitle->content}}
								</p>

								<a href="#" class="btn btn-small">關於我們</a>

							</div>
							<div class="col-md-6"></div>
						</div>
					</div>

				</div>

				<div class="page-section">

					<div class="container">

						<h2 class="section-title">為何選擇我們 ?</h2>

						<div class="icons-box style-1">

							<div class="row flex-row">

								<div class="col-md-4 col-sm-4 col-xs-4">

									<!-- - - - - - - - - - - - - - Icon Box Item - - - - - - - - - - - - - - - - -->
									<div class="icons-wrap">

										<div class="icons-item">
											<div class="item-box">
												<i class="licon-hammer-wrench"></i>
												<h5 class="icons-box-title">
													<a href="#">專業的服務</a>
												</h5>
												<p>{{$abouttitle->service}}</p>

											</div>
										</div>

									</div>

								</div>
								<div class="col-md-4 col-sm-4 col-xs-4">

									<!-- - - - - - - - - - - - - - Icon Box Item - - - - - - - - - - - - - - - - -->
									<div class="icons-wrap">

										<div class="icons-item">
											<div class="item-box">
												<i class="licon-man"></i>
												<h5 class="icons-box-title">
													<a href="#">專業的團隊</a>
												</h5>
												<p>{{$abouttitle->team}}</p>

											</div>
										</div>

									</div>

								</div>
								<div class="col-md-4 col-sm-4 col-xs-4">

									<!-- - - - - - - - - - - - - - Icon Box Item - - - - - - - - - - - - - - - - -->
									<div class="icons-wrap">

										<div class="icons-item">
											<div class="item-box">
												<i class="licon-thumbs-up"></i>
												<h5 class="icons-box-title">
													<a href="#">專業的品質</a>
												</h5>
												<p>{{$abouttitle->quality}}</p>
											</div>
										</div>

									</div>

								</div>

							</div>

						</div>

					</div>

				</div>


@endsection