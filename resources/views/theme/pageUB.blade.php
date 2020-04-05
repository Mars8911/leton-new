<!doctype html>
<html lang="zh-tw">


	<!-- Basic Page Needs
  ================================================== -->

	<title>嘉紘有限公司</title>

<head>
   @yield('header')
</head>

<body data-offset="200" data-spy="scroll" data-target=".ownavigation">
    <!-- Loader -->
    <div id="site-loader" class="load-complete">
        <div class="loader">
            <div class="line-scale">
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
            </div>
        </div>
    </div><!-- Loader /- -->
			
		    @include('theme.nav')
            
	
	 <div class="main-container">

        <main class="site-main">

	    	@yield('banner')

		

			<!-- - - - - - - - - - - - - - Content - - - - - - - - - - - - - - - - -->
		
				@yield('content')

       </main>

    </div>
   				
				
		
				<!-- - - - - - - - - - - - - end Content - - - - - - - - - - - - - - - -->

				<!-- - - - - - - - - - - - - - Footer - - - - - - - - - - - - - - - - -->
				@include('theme.footer')

				<!-- - - - - - - - - - - - - end Footer - - - - - - - - - - - - - - - -->
			

			



			<!-- JS Libs & Plugins
  ============================================ -->

            @include('theme.script')
            


	</body>

</html>