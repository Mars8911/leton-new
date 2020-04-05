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
   <title>{{$information->title_top}}-NEWS</title>

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
			<div class="container-fluid no-left-padding no-right-padding no-top-padding page-content blog-single cover-fullwidth">
				<div class="jumbotron jumbotron-fluid jumbotron-bg01 d-flex align-items-end">
                   <div class="container">
					   <div class="bg-linhter p-3">
						    <h3 class="display-4 text-center text-info">NEWS</h3>
					   </div>
                    </div>
                </div>
			
			</div><!-- Page Content /- -->

			 <!-- start blog section -->
            <section class="bg-grey">
                <div class="container">
                    <div class="section-heading">
                        <h3 class="text-info my-3">NEWS</h3>
                    </div>
                    <div class="row">

                        <div class="col-12">

                            <table class="table ">
                                <thead>
                                    <tr class="text-info">
                                        <th>DATA</th>
                                        <th>NAME</th>
                                        <th>LEARN MORE</th>
                                      
                                    </tr>
                                </thead>
                                <tbody>
                                  @foreach($news as $newsin)
                                    <tr>
                                        <td>{{$newsin->newstime_at}}</td>
                                        <td>{{$newsin->title}}</td>
                                        <th>
                                            <a class="btn btn-info btn-sm" href="{{route('slug.news',$newsin->id)}}" role="button">Learn more</a>
                                        </th>
								    </tr>
								 @endforeach	
                                
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
        </div>
        </section>
        <!-- end blog section -->




@endsection