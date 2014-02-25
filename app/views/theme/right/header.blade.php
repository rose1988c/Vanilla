<!--header starts-->
<header class="rox-header">
	<div class="box effect2">
		<div class="container">
			<div class="navbar-header">
				<a class="logo navbar-brand" href="index.html"></a>
			</div>
			<div id="rox-search" class="search">
				<form id="searchForm" action="#blank" method="post">
					<div class="input-group">
						<input type="text" class="form-control search" name="search"
							id="search"
							onfocus="if(this.value == 'Search here...') { this.value = ''; }"
							value="Search here..."> <span class="input-group-btn">
							<button class="btn btn-default" type="button">
								<i class="icon icon-search"> </i>
							</button>
						</span>
					</div>
				</form>
			</div>
			<div id="mobilemenu" class="mobile-menu"></div>
			<button class="btn btn-responsive-nav btn-inverse"
				data-toggle="collapse" data-target=".nav-main-collapse">
				<i class="fa fa-bars"> </i>
			</button>
			<div class="navbar-collapse nav-main-collapse collapse">
				<nav class="nav-main mega-menu">
					<ul class="nav nav-pills nav-main" id="rox-main-menu">
						<!-- Drop Down menu Home -->
						<?php $menus = Config::get('site\menu'); ?>
						<?php foreach ($menus as $key => $value) {
							$active = '';
							if ($key == 'HOME') {
								$active = 'active';
							}
						?>
						<li class="dropdown rox-submenu-item {{$active}}">
							<a <?php if (isset($active['target'])) { echo $active['target'] ;} ?> href="{{$value['url']}}" class="dropdown-toggle"> {{$value['name']}} </a>
							<?php if (!empty($value['children'])){ ?>
								<ul class="dropdown-menu">
									<div class="rox-menu-wrapper">
										<?php foreach ($value['children'] as $ckey => $cvalue) {
										?>
											<li  class="<?php if (!empty($cvalue['children'])){ echo 'dropdown-submenu dropdown';} ?>">
												<a <?php if (isset($cvalue['target'])) { echo $cvalue['target'] ;} ?> href="{{$cvalue['url']}}"> {{$cvalue['name']}} </a>
												<?php if (!empty($cvalue['children'])){ ?>	
												<ul class="dropdown-menu">
													<div class="rox-menu-wrapper">
														<?php foreach ($cvalue['children'] as $c3key => $c3value) { ?>
														<li><a <?php if (isset($c3value['target'])) { echo $c3value['target'] ;} ?> href="{{$c3value['url']}}"> {{$c3value['name']}} </a></li>
														<?php } ?>
													</div> 
												</ul>
												<?php } ?>
											</li>
										<?php } ?>
									</div>
								</ul>
							<?php } ?>
						</li>
						<?php } ?>
						<!-- End Of Drop Down Menu Home -->
					</ul>
				</nav>
			</div>
		</div>
	</div>
</header>
<!--header end-->
