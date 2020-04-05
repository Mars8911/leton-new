 <!-- start header -->
 <header>
     <!-- start navigation -->
     <nav class="navbar navbar-default bootsnav navbar-fixed-top header-light background-transparent nav-box-width white-link navbar-expand-lg">
         <div class="container nav-header-container">
             <!-- start logo -->
             <div class="col-auto pl-lg-0">
                 <a href="/" title="雷根二手書店" class="logo"><img src="{{asset($information->logo_image)}}" data-rjs="{{asset($information->logo_image)}}" class="logo-dark" alt="Pofo"><img src="{{asset($information->logo_image)}}" data-rjs="{{asset($information->logo_image)}}" alt="Pofo" class="logo-light default"></a>
             </div>
             <!-- end logo -->
             <div class="col-auto col-lg accordion-menu pr-lg-0">
                 <button type="button" class="navbar-toggler collapsed" data-toggle="collapse" data-target="#navbar-collapse-toggle-1">
                     <span class="sr-only">toggle navigation</span>
                     <span class="icon-bar"></span>
                     <span class="icon-bar"></span>
                     <span class="icon-bar"></span>
                 </button>
                 <div class="navbar-collapse collapse justify-content-end" id="navbar-collapse-toggle-1">
                     <ul class="nav navbar-nav alt-font font-weight-700">
                         <li><a href="/" title="首頁" class="inner-link">首頁</a></li>
                         @foreach($categoryies as $category)
                         <li><a href="{{route('slug.category',['id'=> $category->id])}}" title="{{$category->name}}" class="inner-link">{{$category->name}}</a></li>
                         @endforeach
                         <li><a href="/contactus"" title=" 聯繫我們" class="inner-link">聯繫我們</a></li>
                     </ul>
                 </div>
             </div>
         </div>
     </nav>
     <!-- end navigation -->
 </header>
 <!-- end header -->