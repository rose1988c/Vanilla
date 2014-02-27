<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>@yield('title');echo ' - ' . Config::get('site\base.title_suffix')</title>
    <meta name="keywords" content="@yield('keywords')"/>
    <meta name="description" content="@yield('description')">
    <meta name="author" content="{{Config::get('site.author')}}">
    
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!--Core Common Files-->
    <!--web fonts-->
    {{ HTML::style('assets/theme_right/css/fontRaleway.css') }}
    <!--[if (gte IE 6)&(lte IE 8)]>
    {{ HTML::script('assets/theme_right/vendors/selectivizr/selectivizr.js') }}
    <noscript>
        <link rel="stylesheet" href="iefall-back.css" />
    </noscript>
    <![endif]-->
    <!--[if lt IE 9]>
    {{ HTML::script('assets/theme_right/js/html5.js') }}
    {{ HTML::script('assets/theme_right/js/respond.js') }}
    <![endif]-->
    <!-- Bootstrap -->
    {{ HTML::style('assets/theme_right/css/bootstrap.css', array('media' => 'screen')) }}
    <!-- Fontawsome -->
    {{ HTML::style('assets/theme_right/css/fonts/font-awesome/css/font-awesome.css', array('media' => 'screen')) }}
    <!--animation-->
    {{ HTML::style('assets/theme_right/vendors/animation/animate.css', array('media' => 'screen')) }}
    {{ HTML::style('assets/theme_right/vendors/animation/animate.min.css', array('media' => 'screen')) }}
    {{ HTML::style('assets/theme_right/vendors/animation/animated.css', array('media' => 'screen')) }}
    <!--End of animation-->
    <!--responsiv-->
    {{ HTML::style('assets/theme_right/css/responsive.css', array('media' => 'screen')) }}
    <!--Theme css-->
    {{ HTML::style('assets/theme_right/css/theme.css', array('media' => 'screen')) }}
    {{ HTML::style('assets/theme_right/css/theme-element.css', array('media' => 'screen')) }}
    <!--preset-->
    {{ HTML::style('assets/theme_right/css/presets/preset1.css', array('media' => 'screen')) }}
    <!--menu css-->
    {{ HTML::style('assets/theme_right/css/menu/menu.css', array('media' => 'screen')) }}
    {{ HTML::style('assets/theme_right/css/menu/menu-config.css', array('media' => 'screen')) }}
    {{ HTML::style('assets/theme_right/css/menu/menu-responsive.css', array('media' => 'screen')) }}
    <!--End of Core Common Files-->
    <!--Theme Panel CSS-->
    {{ HTML::style('assets/theme_right/css/themes_panel.css', array('media' => 'screen')) }}
    <!--End of Theme Panel css-->
    <!--Page View Css Load for Individual page-->
    <!--prettyPhoto-->
    {{ HTML::style('assets/theme_right/vendors/prettyPhoto/prettyPhoto.css', array('media' => 'screen')) }}
    <!--accordion-->
    {{ HTML::style('assets/theme_right/css/liteaccordion.css', array('media' => 'screen')) }}
    <!--revolution-->
    {{ HTML::style('assets/theme_right/vendors/rs-plugin/css/fullwidth.css', array('media' => 'screen')) }}
    {{ HTML::style('assets/theme_right/vendors/rs-plugin/css/settings.css', array('media' => 'screen')) }}
    <!--End of Page View Css Load for Individual page-->
    <!-- fav and touch icons -->
    {{ HTML::style('assets/theme_right/images/ico/apple-touch-icon-144-precomposed.png', array('sizes' => '144x144', 'rel' => 'apple-touch-icon-precomposed')) }}
    {{ HTML::style('assets/theme_right/images/ico/apple-touch-icon-114-precomposed.png', array('sizes' => '114x114', 'rel' => 'apple-touch-icon-precomposed')) }}
    {{ HTML::style('assets/theme_right/images/ico/apple-touch-icon-72-precomposed.png', array('sizes' => '72x72', 'rel' => 'apple-touch-icon-precomposed')) }}
    {{ HTML::style('assets/theme_right/images/ico/apple-touch-icon-57-precomposed.png', array('rel' => 'apple-touch-icon-precomposed')) }}
    <!-- End of fav and touch icons -->
    

    <!-- favicon -->
    <link href="favicon.png" type="image/x-icon" rel="shortcut icon" />
  </head>
<body>

    {{-- include the headertop partial --}}
    @include('theme.right.headertop')

    {{-- include the header partial --}}
    @include('theme.right.header')
    
    {{-- include content passed from controllers --}}
    @yield('breadcumb')
        
    {{-- include the errors partial --}}
    @include('partials.errors')

    {{-- include content passed from controllers --}}
    @yield('content')
    
    
    <!-- Core required JS files -->
    {{ HTML::script('assets/theme_right/js/jquery.js') }}
    {{ HTML::script('assets/theme_right/js/bootstrap.js') }}
    {{ HTML::script('assets/theme_right/js/modernizr.custom.97074.js') }}
    {{ HTML::script('assets/theme_right/js/scroll-effect.js') }}
    {{ HTML::script('assets/theme_right/js/menu.js') }}
    <!--Jquery Mobile Menu Will load when media screen less than 640-->
    {{ HTML::script('assets/theme_right/vendors/jquery.mobilemenu/jquery.mobilemenu.js') }}
    <!--Jquery Mobile Menu-->
    <!-- Theme Js-->
    {{ HTML::script('assets/theme_right/js/plugins.js') }}
    {{ HTML::script('assets/theme_right/js/theme.js') }}
    {{ HTML::script('assets/theme_right/js/your-custom-code.js') }}
    {{ HTML::script('assets/theme_right/js/theme-element.js') }}
    <!--end of Theme js-->
    <!-- Core required JS files -->
    <!--Page wise js load for individual page only-->
    {{ HTML::script('assets/theme_right/vendors/rs-plugin/js/jquery.themepunch.revolution.min.js') }}
    <!--Pretty photo , Smooth progress and Rev Slider and Carosule Autoplay-->
    {{ HTML::script('assets/theme_right/js/pageview/revusliderpages.js') }}
    {{ HTML::script('assets/theme_right/js/pageview/prettyphoto.js') }}
    {{-- HTML::script('assets/theme_right/js/pageview/smoothprogress.js') --}}
    {{ HTML::script('assets/theme_right/js/pageview/carosuelautoplay.js') }}
    <!--End of Pretty photo , Smooth progress and Rev Slider-->
    <!--Theme Panel Scrip-->
    {{ HTML::script('assets/theme_right/js/themes_panel.js') }}
    <!--End of Theme Panel Script-->
    {{ HTML::script('assets/theme_right/js/jquery.easing.1.3.js') }}
    {{ HTML::script('assets/theme_right/js/bootstrap-progressbar.js') }}
    {{ HTML::script('assets/theme_right/js/liteaccordion.jquery.js') }}
    {{ HTML::script('assets/theme_right/js/liteaccordion.jquery.min.js') }}
    {{ HTML::script('assets/theme_right/js/jquery.prettyPhoto.js') }}
    <!--End of Page wise js load for individual page only-->
    <!--Google Analytic Code remember to re-configure according to your need-->
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
      ga('create', 'UA-48300356-1', '4toolkit.com');
      ga('send', 'pageview');
    </script>
    <!--End of Google Analytic Code remember to re-configure according to your need-->

</body>
</html>