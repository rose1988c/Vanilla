<!--header-top-->
<div class="header-top clearfix">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
				<!-- Top right side content -->
				<ul class="fa-ul list-inline top-info">
				    {{-- <li><i class="fa fa-phone"> </i> Call us on 0880 0123 4567890</li> --}}
					<li>
					<i class="fa fa-envelope"> </i>
					<a href="mailto:{{Config::get('site.email')}}" title="mail">{{Config::get('site.email')}}</a></li>
				</ul>
			</div>
			<!-- Top right side content -->
			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
				<ul class="list-inline top-social">
				    <?php $top_social = Config::get('site.top-social');?>
				    <?php foreach ((array)$top_social as $social) {?>
				    <?php     if ($social['show'] == true) {?>
					<li><a href="{{$social['url']}}" title="{{$social['title']}}"> <i class="{{$social['class']}}"> </i>
					</a></li>
				    <?php }?>
				    <?php }?>
				</ul>
			</div>
		</div>
	</div>
</div>
<!--/header-top-->
