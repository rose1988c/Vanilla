@section('title', $title) 

@section('breadcumb')
    @include('theme.right.breadcumb')
@stop

@section('content')

<section class="portfolio-page-head">
    <div class="container">
        <div class="row">
            <h1>OUR SELECTED <span>TOOL</span></h1>
            <p>
                Simply and Useful
            </p>
        </div>
    </div>
</section>

<section id="right-portfolio">
<div class="container">
<div class="portfolio-inner">
<?php $toolCategors = Config::get('site\tool'); ?>
<?php $toolCategorskey = array_keys($toolCategors);?>
<div id="options" class="clearfix">
    <ul id="filters" class="list-inline title-list text-center option-set clearfix level-0" data-option-key="filter">
        <li class="filters-all-cld"><a href="#filter" data-option-value="*" class="selected">all</a>
            <div>
            </div>
        </li>
        <?php foreach ((array)$toolCategorskey as $value) { ?>
        <li><a href="#filter" data-option-value=".{{$value}}">{{$value}}</a>
            <div>
            </div>
        </li>
        <?php }?>
        <li><a href="#filter" data-option-value=".metal">design</a>
            <div>
            </div>
        </li>
        <li><a href="#filter" data-option-value=".transition, .alkali, .alkaline-earth">art</a>
            <div>
            </div>
        </li>
        <li><a href="#filter" data-option-value=".post-transition">photography</a>
            <div>
            </div>
        </li>
        <li><a href="#filter" data-option-value=".transition, .alkali">business</a>
            <div>
            </div>
        </li>
        <li><a href="#filter" data-option-value=".inner-transition, :not(.transition)">product</a>
            <div>
            </div>
        </li>
    </ul>
</div>
<div id="portfolio" class="clearfix row isotope" style="position: relative; overflow: hidden; height: 1184px;">

<?php foreach ((array)$toolCategors as $category => $tools) { ?>
<?php foreach ((array)$tools as $k => $tool) { ?>
<div class="element {{$category}} metal col-lg-4 col-md-4 col-sm-6 col-xs-12 isotope-item" data-symbol="Hg" data-category="{{$category}}" style="position: absolute; left: 0px; top: 0px; -webkit-transform: translate3d(0px, 0px, 0px);">
    <div class="portfolio-overlay">
    </div>
    <div class="recent-work-item">
        
        <img src="{{$tool['img']}}" class="img-responsive" alt="Responsive image">
        <div class="recent-work-item-hover">
            <div class="recent-work-project-title">
                <h1>{{$tool['title']}}</h1>
                <button class="btn btn-default">{{$tool['button']}}</button>
            </div>
        </div>
        <div class="recent-work-item-hover-btn">
            <a target="_blank" href="{{$tool['url']}}"><img src="/assets/theme_right/images/iconimg2.png" class="img-responsive iconimg" alt="Responsive image"></a>
<!--             <a href="/assets/theme_right/img/toolkit/rw3.png" rel="prettyPhoto[gal]"><img src="/assets/theme_right/images/iconimg1.png" class="img-responsive iconimg" alt="Responsive image"></a> -->
        </div>
    </div>
</div>
<?php }?>
<?php }?>


<div class="element post-transition metal col-lg-4 col-md-4 col-sm-6 col-xs-12 isotope-item" data-symbol="Bi" data-category="post-transition" style="position: absolute; left: 0px; top: 0px; -webkit-transform: translate3d(390px, 0px, 0px);">
    <div class="portfolio-overlay">
    </div>
    <div class="recent-work-item">
        <img src="/assets/theme_right/img/toolkit/rw3.png" class="img-responsive" alt="Responsive image">
        <div class="recent-work-item-hover">
            <div class="recent-work-project-title">
                <h1>Project title xx</h1>
                <button class="btn btn-default">Web design</button>
            </div>
        </div>
        <div class="recent-work-item-hover-btn">
            <a href="#"><img src="/assets/theme_right/images/iconimg2.png" class="img-responsive iconimg" alt="Responsive image"></a>
            <a href="/assets/theme_right/images/portfolio/rw3.png" rel="prettyPhoto[gal]"><img src="/assets/theme_right/images/iconimg1.png" class="img-responsive iconimg" alt="Responsive image"></a>
        </div>
    </div>
</div>
<div class="element transition metal col-lg-4 col-md-4 col-sm-6 col-xs-12 isotope-item" data-symbol="Cd" data-category="transition" style="position: absolute; left: 0px; top: 0px; -webkit-transform: translate3d(780px, 0px, 0px);">
    <div class="portfolio-overlay">
    </div>
    <div class="recent-work-item">
        <img src="/assets/theme_right/img/toolkit/rw3.png" class="img-responsive" alt="Responsive image">
        <div class="recent-work-item-hover">
            <div class="recent-work-project-title">
                <h1>Project title</h1>
                <button class="btn btn-default">Web design</button>
            </div>
        </div>
        <div class="recent-work-item-hover-btn">
            <a href="#"><img src="/assets/theme_right/images/iconimg2.png" class="img-responsive iconimg" alt="Responsive image"></a>
            <a href="/assets/theme_right/img/toolkit/rw3.png" rel="prettyPhoto[gal]"><img src="/assets/theme_right/images/iconimg1.png" class="img-responsive iconimg" alt="Responsive image"></a>
        </div>
    </div>
</div>
<div class="element alkaline-earth metal col-lg-4 col-md-4 col-sm-6 col-xs-12 isotope-item" data-symbol="Ca" data-category="alkaline-earth" style="position: absolute; left: 0px; top: 0px; -webkit-transform: translate3d(0px, 296px, 0px);">
    <div class="portfolio-overlay">
    </div>
    <div class="recent-work-item">
        <img src="/assets/theme_right/img/toolkit/rw3.png" class="img-responsive" alt="Responsive image">
        <div class="recent-work-item-hover">
            <div class="recent-work-project-title">
                <h1>Project title</h1>
                <button class="btn btn-default">Web design</button>
            </div>
        </div>
        <div class="recent-work-item-hover-btn">
            <a href="#"><img src="/assets/theme_right/images/iconimg2.png" class="img-responsive iconimg" alt="Responsive image"></a>
            <a href="/assets/theme_right/img/toolkit/rw3.png" rel="prettyPhoto[gal]"><img src="/assets/theme_right/images/iconimg1.png" class="img-responsive iconimg" alt="Responsive image"></a>
        </div>
    </div>
</div>
<div class="element transition metal col-lg-4 col-md-4 col-sm-6 col-xs-12 isotope-item" data-symbol="Re" data-category="transition" style="position: absolute; left: 0px; top: 0px; -webkit-transform: translate3d(390px, 296px, 0px);">
    <div class="portfolio-overlay">
    </div>
    <div class="recent-work-item">
        <img src="/assets/theme_right/img/toolkit/rw3.png" class="img-responsive" alt="Responsive image">
        <div class="recent-work-item-hover">
            <div class="recent-work-project-title">
                <h1>Project title</h1>
                <button class="btn btn-default">Web design</button>
            </div>
        </div>
        <div class="recent-work-item-hover-btn">
            <a href="#"><img src="/assets/theme_right/images/iconimg2.png" class="img-responsive iconimg" alt="Responsive image"></a>
            <a href="/assets/theme_right/img/toolkit/rw3.png" rel="prettyPhoto[gal]"><img src="/assets/theme_right/images/iconimg1.png" class="img-responsive iconimg" alt="Responsive image"></a>
        </div>
    </div>
</div>
<div class="element post-transition metal col-lg-4 col-md-4 col-sm-6 col-xs-12 isotope-item" data-symbol="Tl" data-category="post-transition" style="position: absolute; left: 0px; top: 0px; -webkit-transform: translate3d(780px, 296px, 0px);">
    <div class="portfolio-overlay">
    </div>
    <div class="recent-work-item">
        <img src="/assets/theme_right/img/toolkit/rw3.png" class="img-responsive" alt="Responsive image">
        <div class="recent-work-item-hover">
            <div class="recent-work-project-title">
                <h1>Project title</h1>
                <button class="btn btn-default">Web design</button>
            </div>
        </div>
        <div class="recent-work-item-hover-btn">
            <a href="#"><img src="/assets/theme_right/images/iconimg2.png" class="img-responsive iconimg" alt="Responsive image"></a>
            <a href="/assets/theme_right/img/toolkit/rw3.png" rel="prettyPhoto[gal]"><img src="/assets/theme_right/images/iconimg1.png" class="img-responsive iconimg" alt="Responsive image"></a>
        </div>
    </div>
</div>
<div class="element metalloid col-lg-4 col-md-4 col-sm-6 col-xs-12 isotope-item" data-symbol="Sb" data-category="metalloid" style="position: absolute; left: 0px; top: 0px; -webkit-transform: translate3d(0px, 592px, 0px);">
    <div class="portfolio-overlay">
    </div>
    <div class="recent-work-item">
        <img src="/assets/theme_right/img/toolkit/rw3.png" class="img-responsive" alt="Responsive image">
        <div class="recent-work-item-hover">
            <div class="recent-work-project-title">
                <h1>Project title</h1>
                <button class="btn btn-default">Web design</button>
            </div>
        </div>
        <div class="recent-work-item-hover-btn">
            <a href="#"><img src="/assets/theme_right/images/iconimg2.png" class="img-responsive iconimg" alt="Responsive image"></a>
            <a href="/assets/theme_right/img/toolkit/rw3.png" rel="prettyPhoto[gal]"><img src="/assets/theme_right/images/iconimg1.png" class="img-responsive iconimg" alt="Responsive image"></a>
        </div>
    </div>
</div>
<div class="element transition metal col-lg-4 col-md-4 col-sm-6 col-xs-12 isotope-item" data-symbol="Co" data-category="transition" style="position: absolute; left: 0px; top: 0px; -webkit-transform: translate3d(390px, 592px, 0px);">
    <div class="portfolio-overlay">
    </div>
    <div class="recent-work-item">
        <img src="/assets/theme_right/img/toolkit/rw3.png" class="img-responsive" alt="Responsive image">
        <div class="recent-work-item-hover">
            <div class="recent-work-project-title">
                <h1>Project title</h1>
                <button class="btn btn-default">Web design</button>
            </div>
        </div>
        <div class="recent-work-item-hover-btn">
            <a href="#"><img src="/assets/theme_right/images/iconimg2.png" class="img-responsive iconimg" alt="Responsive image"></a>
            <a href="/assets/theme_right/img/toolkit/rw3.png" rel="prettyPhoto[gal]"><img src="/assets/theme_right/images/iconimg1.png" class="img-responsive iconimg" alt="Responsive image"></a>
        </div>
    </div>
</div>
<div class="element lanthanoid metal inner-transition col-lg-4 col-md-4 col-sm-6 col-xs-12 isotope-item" data-symbol="Lu" data-category="lanthanoid" style="position: absolute; left: 0px; top: 0px; -webkit-transform: translate3d(780px, 592px, 0px);">
    <div class="portfolio-overlay">
    </div>
    <div class="recent-work-item">
        <img src="/assets/theme_right/img/toolkit/rw3.png" class="img-responsive" alt="Responsive image">
        <div class="recent-work-item-hover">
            <div class="recent-work-project-title">
                <h1>Project title</h1>
                <button class="btn btn-default">Web design</button>
            </div>
        </div>
        <div class="recent-work-item-hover-btn">
            <a href="#"><img src="/assets/theme_right/images/iconimg2.png" class="img-responsive iconimg" alt="Responsive image"></a>
            <a href="/assets/theme_right/img/toolkit/rw3.png" rel="prettyPhoto[gal]"><img src="/assets/theme_right/images/iconimg1.png" class="img-responsive iconimg" alt="Responsive image"></a>
        </div>
    </div>
</div>
<div class="element lanthanoid metal inner-transition col-lg-4 col-md-4 col-sm-6 col-xs-12 isotope-item" data-symbol="Lu" data-category="lanthanoid" style="position: absolute; left: 0px; top: 0px; -webkit-transform: translate3d(0px, 888px, 0px);">
    <div class="portfolio-overlay">
    </div>
    <div class="recent-work-item">
        <img src="/assets/theme_right/img/toolkit/rw3.png" class="img-responsive" alt="Responsive image">
        <div class="recent-work-item-hover">
            <div class="recent-work-project-title">
                <h1>Project title</h1>
                <button class="btn btn-default">Web design</button>
            </div>
        </div>
        <div class="recent-work-item-hover-btn">
            <a href="#"><img src="/assets/theme_right/images/iconimg2.png" class="img-responsive iconimg" alt="Responsive image"></a>
            <a href="/assets/theme_right/img/toolkit/rw3.png" rel="prettyPhoto[gal]"><img src="/assets/theme_right/images/iconimg1.png" class="img-responsive iconimg" alt="Responsive image"></a>
        </div>
    </div>
</div>
<div class="element lanthanoid metal inner-transition col-lg-4 col-md-4 col-sm-6 col-xs-12 isotope-item" data-symbol="Lu" data-category="lanthanoid" style="position: absolute; left: 0px; top: 0px; -webkit-transform: translate3d(390px, 888px, 0px);">
    <div class="portfolio-overlay">
    </div>
    <div class="recent-work-item">
        <img src="/assets/theme_right/img/toolkit/rw3.png" class="img-responsive" alt="Responsive image">
        <div class="recent-work-item-hover">
            <div class="recent-work-project-title">
                <h1>Project title</h1>
                <button class="btn btn-default">Web design</button>
            </div>
        </div>
        <div class="recent-work-item-hover-btn">
            <a href="#"><img src="/assets/theme_right/images/iconimg2.png" class="img-responsive iconimg" alt="Responsive image"></a>
            <a href="/assets/theme_right/img/toolkit/rw3.png" rel="prettyPhoto[gal]"><img src="/assets/theme_right/images/iconimg1.png" class="img-responsive iconimg" alt="Responsive image"></a>
        </div>
    </div>
</div>
<div class="element lanthanoid metal inner-transition col-lg-4 col-md-4 col-sm-6 col-xs-12 isotope-item" data-symbol="Lu" data-category="lanthanoid" style="position: absolute; left: 0px; top: 0px; -webkit-transform: translate3d(780px, 888px, 0px);">
    <div class="portfolio-overlay">
    </div>
    <div class="recent-work-item">
        <img src="/assets/theme_right/img/toolkit/rw3.png" class="img-responsive" alt="Responsive image">
        <div class="recent-work-item-hover">
            <div class="recent-work-project-title">
                <h1>Project title</h1>
                <button class="btn btn-default">Web design</button>
            </div>
        </div>
        <div class="recent-work-item-hover-btn">
            <a href="#"><img src="/assets/theme_right/images/iconimg2.png" class="img-responsive iconimg" alt="Responsive image"></a>
            <a href="/assets/theme_right/img/toolkit/rw3.png" rel="prettyPhoto[gal]"><img src="/assets/theme_right/images/iconimg1.png" class="img-responsive iconimg" alt="Responsive image"></a>
        </div>
    </div>
</div>
</div>
<!-- #portfolio -->
</div>
</div>
</section>

<div class="container">
    <div class="row">
        <div class="col-md-5">
        </div>
        <div class="col-md-2">
            <div id="loadMore">
                Load more
            </div>
        </div>
        <div class="col-md-5">
        </div>
    </div>
</div>

@stop

@section('footer')
<!--Pageviews-->
{{ HTML::script('assets/theme_right/js/jquery.isotope.min.js') }}
{{ HTML::script('assets/theme_right/js/prettyphoto.js') }}
{{ HTML::script('assets/theme_right/js/isotop.js') }}
<!--PageViews-->
@stop