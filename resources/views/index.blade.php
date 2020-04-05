   @extends('theme.page')

   @section('header')

   <!-- Global site tag (gtag.js) - Google Analytics -->
   <?= $seo->google_ga ?>

   <!-- Basic Page Needs ================================================== -->
   <!--meta info-->
   <title>{{$information->title_top}}</title>
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


   @section('banner')

   <!-- start hero section -->
   @foreach($banner as $bannerin)
   <section id="home" class="p-0 parallax mobile-height wow fadeIn" data-stellar-background-ratio="0.5" style="background-image:url('{{$bannerin->image}}');">
       <div class="opacity-extra-medium bg-extra-dark-gray"></div>
       <div class="container position-relative full-screen">
           <div class="slider-typography text-center">
               <div class="slider-text-middle-main sm-padding-15px-lr">
                   <div class="slider-text-middle">
                       <h1 class="text-white">{{$bannerin->title}}</h1>
                       <div class="down-section text-center"><a href="#about" class="inner-link"><i class="ti-arrow-down icon-extra-small text-white-2 bg-deep-pink padding-15px-all sm-padding-10px-all rounded-circle"></i></a>
                       </div>
                   </div>
               </div>
           </div>
       </div>
   </section>
   @endforeach
   <!-- end hero section -->

   @endsection



   @section('content')

   <!-- start filter content -->
   <div class="container-fluid" id="about">
       <div class="row">
           <div class="col-12 px-3 p-md-0">
               <div class="filter-content overflow-hidden">
                   <ul class="portfolio-grid work-2col hover-option4 gutter-medium">
                       <li class="grid-sizer"></li>
                       <!-- start portfolio item -->
                       @foreach($categoryies as $category )
                       <li class="grid-item web branding design wow fadeInUp">
                           <a href="{{route('slug.category',['id'=> $category->id])}}">
                               <figure>
                                   <div class="portfolio-img bg-extra-dark-gray"><img src="{{$category->image}}" alt="" class="img-fluid" /></div>
                                   <figcaption>
                                       <div class="portfolio-hover-main text-center">
                                           <div class="portfolio-hover-box align-middle">
                                               <div class="portfolio-hover-content position-relative">

                                                   <span class=" h4 font-weight-600 letter-spacing-1 alt-font text-white-2 text-uppercase margin-5px-bottom d-block">
                                                       {{$category->name}}</span>

                                                   <div class="bg-deep-pink mx-auto separator-line-horrizontal-medium-light3 margin-25px-bottom">
                                                   </div>
                                               </div>
                                           </div>
                                       </div>
                                   </figcaption>
                               </figure>
                           </a>
                       </li>
                       <!-- end portfolio item -->
                       @endforeach
                   </ul>
               </div>
           </div>
       </div>
   </div>
   <!-- end features section -->

   @endsection