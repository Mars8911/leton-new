<!doctype html>
<html class="no-js" lang="zh-Tw">

<head>
    @yield('header')
</head>

<body>
    @include('theme.nav')



    @yield('banner')



    <!-- - - - - - - - - - - - - - Content - - - - - - - - - - - - - - - - -->

    @yield('content')





    <!-- - - - - - - - - - - - - end Content - - - - - - - - - - - - - - - -->

    <!-- - - - - - - - - - - - - - Footer - - - - - - - - - - - - - - - - -->
    @include('theme.footer')

    <!-- - - - - - - - - - - - - end Footer - - - - - - - - - - - - - - - -->






    <!-- JS Libs & Plugins
  ============================================ -->

    @include('theme.script')



</body>

</html>