<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<!--[if IE 7 ]><html class="ie ie7 lte9 lte8 lte7" lang="en-US"><![endif]-->
<!--[if IE 8]><html class="ie ie8 lte9 lte8" lang="en-US">	<![endif]-->
<!--[if IE 9]><html class="ie ie9 lte9" lang="en-US"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--><html class="noIE" lang="en-US"><!--<![endif]-->
<head>
	<meta charset="UTF-8" />
	<title>捷哥浅谈PHP--商城管理系统</title>
	<meta name="description" content=""/>
	<meta name="keywords" content=""/>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	
	<!-- Favorite Icons -->
	<link rel="icon" href="__PUBLIC__/Index/img/favicon/favicon.html" type="image/x-icon" />
	<link rel="apple-touch-icon-precomposed" sizes="144x144" href="__PUBLIC__/Index/img/favicon/apple-touch-icon-144x144-precomposed.html">
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="__PUBLIC__/Index/img/favicon/apple-touch-icon-72x72-precomposed.html">
	<link rel="apple-touch-icon-precomposed" href="__PUBLIC__/Index/img/favicon/apple-touch-icon-precomposed.html">
	<!-- // Favorite Icons -->
	
	<!--<link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700' rel='stylesheet' type='text/css'>-->
	
	<!-- GENERAL CSS FILES -->
	<link rel="stylesheet" href="__PUBLIC__/Index/css/minified.css">
	<!-- // GENERAL CSS FILES -->
	
	<!--[if IE 8]>
		<script src="__PUBLIC__/Index/js/respond.min.js"></script>
		<script src="__PUBLIC__/Index/js/selectivizr-min.js"></script>
	<![endif]-->
	<!--
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	-->
	<script>window.jQuery || document.write('<script src="__PUBLIC__/Index/js/jquery.min.js"><\/script>');</script>
	<script src="__PUBLIC__/Index/js/modernizr.min.js"></script>	
	<!-- PARTICULAR PAGES CSS FILES -->
	<link rel="stylesheet" href="__PUBLIC__/Index/css/owl.carousel.css">
	<link rel="stylesheet" href="__PUBLIC__/Index/css/owl.theme.css">
	<link href="__PUBLIC__/Index/css/flexslider.css" rel="stylesheet" />
	<link rel="stylesheet" href="__PUBLIC__/Index/css/jquery.nouislider.css">
	<link rel="stylesheet" href="__PUBLIC__/Index/css/isotope.css">
	<link rel="stylesheet" href="__PUBLIC__/Index/css/innerpage.css">
	<!-- // PARTICULAR PAGES CSS FILES -->
	<link rel="stylesheet" href="__PUBLIC__/Index/css/responsive.css">
</head>
<body class="products-view">
			
	<!-- PAGE WRAPPER -->
<div id="page-wrapper">

	<!-- SITE HEADER -->
	<header id="site-header" role="banner">
		<!-- HEADER TOP -->
		<div class="header-top">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-sm-6 col-md-7">
						<!-- CONTACT INFO -->
						<div class="contact-info">
							<i class="iconfont-headphones round-icon"></i>
							<strong>客服:400-888-8888</strong>
							<span>(周一至周日 早09:00 - 晚21:00)</span>
							</div>
						<!-- // CONTACT INFO -->
					</div>
					<div class="col-xs-12 col-sm-6 col-md-5">
						<ul class="actions unstyled clearfix">
							<li>
								<!-- SEARCH BOX -->
								<div class="search-box">
									<form action="#" method="post">
										<div class="input-iconed prepend">
											<button class="input-icon"><i class="iconfont-search"></i></button>
											<label for="input-search" class="placeholder">搜索商品</label>
											<input type="text" name="q" id="input-search" class="round-input full-width" required />
										</div>
									</form>
								</div>
								<!-- // SEARCH BOX -->
							</li>
							<li data-toggle="sub-header" data-target="#sub-social">
								<!-- SOCIAL ICONS -->
								<a href="javascript:void(0);" id="social-icons">
									<i class="iconfont-share round-icon"></i>
								</a>
								
								<div id="sub-social" class="sub-header">
									<ul class="social-list unstyled text-center">
										<li><a href="#"><i class="iconfont-facebook round-icon"></i></a></li>
										<li><a href="#"><i class="iconfont-twitter round-icon"></i></a></li>
										<li><a href="#"><i class="iconfont-google-plus round-icon"></i></a></li>
										<li><a href="#"><i class="iconfont-pinterest round-icon"></i></a></li>
										<li><a href="#"><i class="iconfont-rss round-icon"></i></a></li>
									</ul>
								</div>
								<!-- // SOCIAL ICONS -->
							</li>
							<li data-toggle="sub-header" data-target="#sub-cart">
								<!-- SHOPPING CART -->
								<a href="javascript:void(0);" id="total-cart">
									<i class="iconfont-shopping-cart round-icon"></i>
								</a>
								
								<div id="sub-cart" class="sub-header">
									<div class="cart-header">
										<span>您的购物车暂时还是空的</span>
										<small><a href="cart.html">(查看所有)</a></small>
									</div>
									<ul class="cart-items product-medialist unstyled clearfix"></ul>
									<div class="cart-footer">
										<div class="cart-total clearfix">
											<span class="pull-left uppercase">合计</span>
											<span class="pull-right total">￥ 0</span>
										</div>
										<div class="text-right">
											<a href="cart.html" class="btn btn-default btn-round view-cart">查看购物车</a>
										</div>
									</div>
								</div>
								<!-- // SHOPPING CART -->
							</li>
						</ul>
					</div>
				</div>
			</div>
			
			<!-- ADD TO CART MESSAGE -->
			<div class="cart-notification">
				<ul class="unstyled"></ul>
			</div>
			<!-- // ADD TO CART MESSAGE -->
		</div>
		<!-- // HEADER TOP -->
		<!-- MAIN HEADER -->
		<div class="main-header-wrapper">
			<div class="container">
				<div class="main-header">
					<!-- CURRENCY / LANGUAGE / USER MENU -->
					<div class="actions">
						<!--<div class="center-xs">-->
							<!-- CURRENCY -->
							<!--<ul class="option-list unstyled">
								<li class="active"><a href="#" data-toggle="tooltip" title="USD - US Dollar">$</a></li>
								<li><a href="#" data-toggle="tooltip" title="GBP - British Pound">£</a></li>
								<li><a href="#" data-toggle="tooltip" title="EUR - Euro">€</a></li>
							</ul>-->
							<!-- // CURRENCY -->
							<!-- LANGUAGES -->
							<!--<ul class="option-list unstyled">
								<li class="active"><a href="#" data-toggle="tooltip" title="English">EN</a></li>
								<li><a href="#" data-toggle="tooltip" title="French">FR</a></li>
								<li><a href="#" data-toggle="tooltip" title="Deutsch">DE</a></li>
							</ul>-->
							<!-- // LANGUAGES -->
						<!--</div>-->
						<div class="clearfix"></div>
						<!-- USER RELATED MENU -->
						<nav id="tiny-menu" class="clearfix">
							<ul class="user-menu">
								<li><a href="#">我的账户</a></li>
								<li><a href="cart.html">我的收藏</a></li>
								<li><a href="checkout.html">去结算</a></li>
								<li><a href="#">退出</a></li>
							</ul>
						</nav>
						<!-- // USER RELATED MENU -->
					</div>
					<!-- // CURRENCY / LANGUAGE / USER MENU -->
					<!-- SITE LOGO -->
					<div class="logo-wrapper">
						<a href="index-2.html" class="logo" title="GFashion - Responsive e-commerce HTML Template">
							<img src="__PUBLIC__/Index/img/logo.png" alt="GFashion - Responsive e-commerce HTML Template" />
						</a>
					</div>
					<!-- // SITE LOGO -->
					<!-- SITE NAVIGATION MENU -->
					<nav id="site-menu" role="navigation">
						<ul class="main-menu hidden-sm hidden-xs">
							<li class="active">
								<a href="<?php echo U('Index/Index/index','','');?>">首页</a>
							</li>

							<?php if(is_array($menus)): foreach($menus as $key=>$menu): ?><li>
									<a href="<?php echo U('Product/productList');?>"><?php echo ($menu["name"]); ?></a>
								<?php if($menu['sons']): ?><!-- MEGA MENU -->
								<div class="mega-menu" data-col-lg="7" data-col-md="5">
									<div class="row">

									<?php if(is_array($menu["sons"])): foreach($menu["sons"] as $key=>$son): ?><div class="col-md-3">
											<h4 class="menu-title"><?php echo ($son["name"]); ?></h4>
											<ul class="mega-sub">
												<?php if(is_array($son['sons'])): foreach($son['sons'] as $key=>$third): ?><li><a href="products.html"><?php echo ($third["name"]); ?></a></li><?php endforeach; endif; ?>
											</ul>
										</div><?php endforeach; endif; ?>
										
									</div>
								</div>
								<!-- // MEGA MENU --><?php endif; ?>
								</li><?php endforeach; endif; ?>

							<li>
								<a href="contact-us.html">联系我们</a>
							</li>

							<li>
								<a href="contact-us.html">我的账户</a>
							</li>

							<li>
								<a href="contact-us.html">购物车</a>
							</li>
							
						</ul>
						
						<!-- MOBILE MENU -->
						<div id="mobile-menu" class="dl-menuwrapper visible-xs visible-sm">
							<button class="dl-trigger"><i class="iconfont-reorder round-icon"></i></button>
							<ul class="dl-menu">
								<li class="active">
									<a href="javsacript:void(0);">Home</a>
								</li>
								<li>
									<a href="javsacript:void(0);">Women</a>
								</li>
								<li>
									<a href="javsacript:void(0);">Men</a>
									
									<ul class="dl-submenu">
										<li>
											<a href="products.html">Clothing</a>
											<ul class="dl-submenu">
												<li><a href="products.html">Casual Wear</a></li>
												<li><a href="products.html">Evening Wear</a></li>
												<li><a href="products.html">Formal Attire</a></li>
												<li><a href="products.html">Womens Jeans</a></li>
												<li><a href="products.html">Mens Jeans</a></li>
												<li><a href="products.html">Fall Styles</a></li>
											</ul>
										</li>
										<li>
											<a href="products.html">Accessories</a>
											<ul class="dl-submenu">
												<li><a href="products.html">Casual Wear</a></li>
												<li><a href="products.html">Evening Wear</a></li>
												<li><a href="products.html">Formal Attire</a></li>
												<li><a href="products.html">Womens Jeans</a></li>
												<li><a href="products.html">Mens Jeans</a></li>
												<li><a href="products.html">Fall Styles</a></li>
											</ul>
										</li>
										<li>
											<a href="products.html">Brands</a>
											<ul class="dl-submenu">
												<li><a href="products.html">Casual Wear</a></li>
												<li><a href="products.html">Evening Wear</a></li>
												<li><a href="products.html">Formal Attire</a></li>
												<li><a href="products.html">Womens Jeans</a></li>
												<li><a href="products.html">Mens Jeans</a></li>
												<li><a href="products.html">Fall Styles</a></li>
											</ul>
										</li>
									</ul>
								</li>
							</ul>
						</div>
						<!-- // MOBILE MENU -->

					</nav>
					<!-- // SITE NAVIGATION MENU -->
				</div>
			</div>
		</div>
		<!-- // MAIN HEADER -->
	</header>
	<!-- // SITE HEADER -->
		
<!-- HOMEPAGE SLIDER -->
<div id="home-slider">
	<div class="flexslider">
	<ul class="slides">
		<!-- THE FIRST SLIDE -->
		<li>
			<!-- THE MAIN IMAGE IN THE SLIDE -->
			<img src="__PUBLIC__/Index/rev-slider/img/slides/Street-Fashion.jpg" alt="" />
			
			<!-- THE CAPTIONS OF THE FIRST SLIDE -->
			<div class="flex-caption h6 text-bold gfc uppercase animated"
			data-animation="fadeInLeftBig"
			data-x="800"
			data-y="110"
			data-speed="600"
			data-start="1200">New Collection</div>
			
			<div class="flex-caption herotext text-bold gfc animated"
			data-animation="fadeInRightBig"
			data-x="580"
			data-y="140"
			data-speed="900"
			data-start="2000">Autumn Fashions</div>
			
			<div class="flex-caption h6 text-bold gfc text-center animated"
			data-animation="fadeInDown"
			data-x="639"
			data-y="260"
			data-speed="1600"
			data-start="2900">
				Comfy knits and warm jackets for cooler Autumn days<br/>
				<a href="products.html" class="btn btn-primary uppercase">Shop Now</a>
			</div>
			
		</li>
		
		<!-- THE SECOND SLIDE -->
		<li style="background: #fa6f57;">
			<!-- THE MAIN IMAGE IN THE SLIDE -->
			<img src="__PUBLIC__/Index/img/transparent.png" alt="" />
			
			<div class="flex-caption super-giant gfc animated uppercase"
			data-animation="fadeInUp"
			data-x="center"
			data-y="60"
			data-speed="500"
			data-start="900">Sale</div>

			<div id="caption-left-round" class="flex-caption round gfc animated uppercase"
			data-animation="fadeInLeftBig"
			data-x="140"
			data-y="60"
			data-speed="600"
			data-start="1200"><div class="vmid"><span>Mid<br/>Season</span></div></div>

			<div class="flex-caption round gfc animated uppercase"
			data-animation="fadeInRightBig"
			data-x="925"
			data-y="60"
			data-speed="600"
			data-start="1200"><div class="vmid"><span>Up to<br/>70% off</span></div></div>

			<div class="flex-caption h3 gfc animated uppercase"
			data-animation="fadeInDown"
			data-x="center"
			data-y="250"
			data-speed="400"
			data-start="1800"><strong class="text-bold">500’s </strong>of New Products</div>

		</li>
		
		<!-- THE SECOND SLIDE -->
		<li>
			<!-- THE MAIN IMAGE IN THE SLIDE -->
			<img src="__PUBLIC__/Index/rev-slider/img/slides/3303349658_cfaebb811f_o.jpg" alt="" />
			
			<div class="flex-caption herotext text-bold gfc bg-dark animated uppercase"
			data-animation="fadeInUpBig"
			data-x="760"
			data-y="60"
			data-speed="900"
			data-start="100">Free Shipping</div>
			
			<div class="flex-caption h2 text-bold gfc bg-dark animated uppercase"
			data-animation="fadeInUpBig"
			data-x="797"
			data-y="175"
			data-speed="600"
			data-start="900">On Order over $2.000</div>
			
		</li>
		
	</ul>
</div>

<script>
	jQuery(function($) {
		var $slider = $('#home-slider > .flexslider');
		$slider.find('.flex-caption').each(function() {
			var $this = $(this);
			var configs = {
				left: $this.data('x'),
				top: $this.data('y'),
				speed: $this.data('speed') + 'ms',
				delay: $this.data('start') + 'ms'
			};
			if ( configs.left == 'center' && $this.width() !== 0 ) 
			{
				configs.left = ( $slider.width() - $this.width() ) / 2;
			}
			if ( configs.top == 'center' && $this.height() !== 0 ) 
			{
				configs.top = ( $slider.height() - $this.height() ) / 2;
			}
			
			$this.data('positions', configs);
			
			$this.css({
				'left': configs.left + 'px',
				'top': configs.top + 'px',
				'animation-duration': configs.speed,
				'animation-delay': configs.delay
			});
		});
		
		$(window).on('resize', function() {
			var wW = $(window).width(),
				zoom = ( wW >= 1170 ) ? 1 : wW / 1349;
			$('.flex-caption.gfc').css('zoom', zoom);
		});
		$(window).trigger('resize');
		
		
		
		$slider.imagesLoaded(function() {
			$slider.flexslider({
				animation: 'slide',
				easing: 'easeInQuad',
				slideshow: false,
				nextText: '<i class="iconfont-angle-right"></i>',
				prevText: '<i class="iconfont-angle-left"></i>',
				start: function() {
					flex_fix_pos(1);
				},
				before: function(slider) {
					// initial caption animation for next show
					$slider.find('.slides li .animation-done').each(function() {
						$(this).removeClass('animation-done');
						var animation = $(this).attr('data-animation');
						$(this).removeClass(animation);
					});
					
					flex_fix_pos(slider.animatingTo + 1);
				},
				after: function() {
					// run caption animation
					$slider.find('.flex-active-slide .animated').each(function() {
						var animation = $(this).attr('data-animation');
						$(this).addClass('animation-done').addClass(animation);
					});
				}
			});
		});
		
		
		function flex_fix_pos(i) {
			$slider.find('.slides > li:eq(' + i + ') .gfc').each(function() {
				var $this = $(this),
					pos = $(this).data('positions');
					
				if ( pos.left == 'center' )
				{
					pos.left = ( $slider.width() - $this.width() ) / 2;
					$this.css('left', pos.left + 'px');
					$this.data('positions', pos);
				}
				if ( pos.top == 'center' )
				{
					pos.top = ( $slider.height() - $this.height() ) / 2;
					$this.css('left', pos.top + 'px');
					$this.data('positions', pos);
				}
			});
		}
	});
</script>		</div>
		<!-- // HOMEPAGE SLIDER -->

<!-- BREADCRUMB -->
<div class="breadcrumb-container">
	<div class="container">
		<div class="relative">
			<ul class="bc push-up unstyled clearfix">
				<li><a href="index-2.html">主页</a></li>
				<li class="active">产品</li>
			</ul>
		</div>
	</div>
</div>
<!-- // BREADCRUMB -->
<!-- SITE MAIN CONTENT -->
<main id="main-content" role="main">
	<div class="container">
		<div class="row">
			
			<div class="m-t-b clearfix">
				<!-- SIDEBAR -->
				<aside class="col-xs-12 col-sm-4 col-md-3">
					<section class="sidebar push-up">
					
						<!-- CATEGORIES -->
						<section class="side-section bg-white">
							<header class="side-section-header">
								<h3 class="side-section-title">商品分类</h3>
							</header>
							<div class="side-section-content">
								<ul id="category-list" class="vmenu unstyled">
									<?php if(is_array($categories)): foreach($categories as $key=>$category): ?><li>
										<input type="checkbox" id="check-<?php echo ($category["name"]); ?>" class="prettyCheckable" data-label="<?php echo ($category["name"]); ?>" data-labelPosition="right" value="<?php echo ($category["name"]); ?>" />
										
										<ul>
										<?php if(is_array($category['sons'])): foreach($category['sons'] as $key=>$son): ?><li><input type="checkbox" id="check-<?php echo ($son["name"]); ?>" class="prettyCheckable" data-label="<?php echo ($son["name"]); ?>" data-labelPosition="right" value="<?php echo ($son["name"]); ?>" /></li><?php endforeach; endif; ?>	
										</ul>
									</li><?php endforeach; endif; ?>
								</ul>
							</div>
							<footer class="side-section-footer text-center hide">
								<button type="button" id="btn-filter-cat" class="btn btn-primary btn-round uppercase">Clear Filters</button>
							</footer>
						</section>
						<!-- // CATEGORIES -->
						
						<!-- BRANDS -->
						<section class="side-section bg-white">
							<header class="side-section-header">
								<h3 class="side-section-title">所有品牌</h3>
							</header>
							<div class="side-section-content">
								<ul id="brands-list" class="vmenu unstyled">
								
									<li>
										<input type="checkbox" id="check-brand1" class="prettyCheckable" data-label="Because" data-labelPosition="right" value="brand1" />
									</li>
								
								</ul>
							</div>
							<footer class="side-section-footer text-center hide">
								<button type="button" id="btn-filter-brand" class="btn btn-primary btn-round uppercase">Clear Filters</button>
							</footer>
						</section>
						<!-- // BRANDS -->
						
						<!-- PRODUCT FILTER -->
						<section class="side-section bg-white">
							<header class="side-section-header">
								<h3 class="side-section-title">Filter</h3>
							</header>
							
							<!-- PRICE RANGE SLIDER -->
							<div id="filter-by-price" class="side-section-content">
								<h4 class="side-section-subheader">Filter By Price</h4>
								<div class="range-slider-container">
									<div class="range-slider" data-min="0" data-max="2000" data-step="10" data-currency="$"></div>
									<div class="range-slider-value clearfix">
										<span>Price: &ensp;</span>
										<span class="min"></span>
										<span class="max"></span>
									</div>
								</div>
							</div>
							<!-- // PRICE RANGE SLIDER -->
							
							<!-- FILTER BY SIZE -->
							<div id="filter-by-size" class="side-section-content">
								<h4 class="side-section-subheader">Filter By Size</h4>
								<ul class="inline-li li-m-lg text-center unstyled">
									<li>
										<a href="#" class="round-icon" data-toggle="tooltip" data-title="X-Small / UK 8"><small>XS</small></a>
										<input type="checkbox" class="filter-checkbox filter-size" value="XS" />
									</li>
									<li>
										<a href="#" class="round-icon" data-toggle="tooltip" data-title="Small / UK 10"><small>S</small></a>
										<input type="checkbox" class="filter-checkbox filter-size" value="S" />
									</li>
									<li>
										<a href="#" class="round-icon" data-toggle="tooltip" data-title="Medium / UK 12"><small>M</small></a>
										<input type="checkbox" class="filter-checkbox filter-size" value="M" />
									</li>
									<li>
										<a href="#" class="round-icon" data-toggle="tooltip" data-title="Large / UK 14"><small>L</small></a>
										<input type="checkbox" class="filter-checkbox filter-size" value="L" />
									</li>
									<li>
										<a href="#" class="round-icon" data-toggle="tooltip" data-title="X-Large / UK 16"><small>XL</small></a>
										<input type="checkbox" class="filter-checkbox filter-size" value="XL" />
									</li>
									<li>
										<a href="#" class="round-icon" data-toggle="tooltip" data-title="XX-Large"><small>XXL</small></a>
										<input type="checkbox" class="filter-checkbox filter-size" value="XXL" />
									</li>
								</ul>
							</div>
							<!-- // FILTER BY SIZE -->
							
							<!-- FILTER BY COLOR -->
							<div id="filter-by-color" class="side-section-content">
								<h4 class="side-section-subheader">Filter By Colour</h4>
								<ul class="inline-li li-m-sm text-center unstyled">
									<li>
										<a href="#" class="round-icon color-box" data-toggle="tooltip" data-title="Black" style="background: #000;"></a>
										<input type="checkbox" class="filter-checkbox filter-color" value="black" />
									</li>
									<li>
										<a href="#" class="round-icon color-box" data-toggle="tooltip" data-title="White" style="background: #fff; border-color: #acacac;"></a>
										<input type="checkbox" class="filter-checkbox filter-color" value="white" />
									</li>
									<li>
										<a href="#" class="round-icon color-box" data-toggle="tooltip" data-title="Green" style="background: #60bd0d;"></a>
										<input type="checkbox" class="filter-checkbox filter-color" value="green" />
									</li>
									<li>
										<a href="#" class="round-icon color-box" data-toggle="tooltip" data-title="Red" style="background: #ff5757;"></a>
										<input type="checkbox" class="filter-checkbox filter-color" value="red" />
									</li>
									<li>
										<a href="#" class="round-icon color-box" data-toggle="tooltip" data-title="Blue" style="background: #0d9abd;"></a>
										<input type="checkbox" class="filter-checkbox filter-color" value="blue" />
									</li>
									<li>
										<a href="#" class="round-icon color-box" data-toggle="tooltip" data-title="Brown" style="background: #c57313;"></a>
										<input type="checkbox" class="filter-checkbox filter-color" value="brown" />
									</li>
									<li>
										<a href="#" class="round-icon color-box" data-toggle="tooltip" data-title="Purple" style="background: #a613c5;"></a>
										<input type="checkbox" class="filter-checkbox filter-color" value="purple" />
									</li>
									<li>
										<a href="#" class="round-icon color-box" data-toggle="tooltip" data-title="Silver" style="background: #e5e5e8;"></a>
										<input type="checkbox" class="filter-checkbox filter-color" value="silver" />
									</li>
									<li>
										<a href="#" class="round-icon color-box" data-toggle="tooltip" data-title="Patternie" style="background: url('data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAQAAAAECAYAAACp8Z5+AAAAHklEQVQIW2NkYGD4D8QgwAgjMASgCiAqwcqgACwAAIrDBAOqGrGNAAAAAElFTkSuQmCC');"></a>
										<input type="checkbox" class="filter-checkbox filter-color" value="patternie" />
									</li>
								</ul>
							</div>
							<!-- // FILTER BY COLOR -->
						</section>
						<!-- // PRODUCT FILTER -->
						
						<!-- BEST SELLERS -->
						<section class="side-section bg-white">
							<header class="side-section-header">
								<h3 class="side-section-title">Best Sellers</h3>
							</header>
							<div class="side-section-content">
								<ul class="product-medialist li-m-t unstyled clearfix">
									<li>
										<div class="item clearfix">
											<a href="__PUBLIC__/Index/images/women/basic/688086-0286_1.jpg" data-toggle="lightbox" class="entry-thumbnail">
												<img src="__PUBLIC__/Index/images/women/basic/688086-0286_1_t.jpg" alt="Inceptos orci hac libero" />
											</a>
											<h5 class="entry-title"><a href="product.html">Inceptos orci hac libero</a></h5>
											<s class="entry-discount m-r-sm"><span class="text-sm">$ 350.00</span></s>
											<span class="entry-price accent-color">$ 250.00</span>
										</div>
									</li>
									<li>
										<div class="item clearfix">
											<a href="__PUBLIC__/Index/images/women/basic/589550-0014_1.jpg" data-toggle="lightbox" class="entry-thumbnail">
												<img src="__PUBLIC__/Index/images/women/basic/589550-0014_1_t.jpg" alt="Inceptos orci hac libero" />
											</a>
											<h5 class="entry-title"><a href="product.html">Inceptos orci hac libero</a></h5>
											<span class="entry-price">$ 350.00</span>
										</div>
									</li>
								</ul>
							</div>
						</section>
						<!-- // BEST SELLERS -->
						
						<!-- PROMO -->
						<div class="promo inverse-background" style="background: url('__PUBLIC__/Index/images/demo/Barn-Dress-Girl_t.jpg') no-repeat; background-size: auto 100%;">
							<div class="inner text-center np">
								<div class="ribbon">
									<h6 class="nmb">New Arrivals</h6>
									<h5 class="text-semibold uppercase nmb">Leather Fashion</h5>
									<div class="space10"></div>
									<a href="products.html" class="with-icon prepend-icon"><i class="iconfont-caret-right"></i><span> Shop Now</span></a>
								</div>
							</div>
						</div>
						<!-- // PROMO -->
						
					</section>
				</aside>
				<!-- // SIDEBAR -->
				<section class="col-xs-12 col-sm-8 col-md-9">
					
					<section class="products-wrapper">
						<!-- DISPLAY MODE - NUMBER OF ITEMS TO BE DISPLAY - PAGINATION -->
						<header class="products-header">
							<div class="row">
								<div class="col-xs-12 col-sm-12 col-md-6 center-xs">
									<!-- DISPLAY MODE -->
									<ul class="unstyled inline-li li-m-r-l-sm pull-left">
										<li><a class="round-icon active" href="#" data-toggle="tooltip" data-layout="grid" data-title="Switch to List Grid Mode"><i class="iconfont-th"></i></a></li>
										<li><a class="round-icon" href="#" data-toggle="tooltip" data-layout="list" data-title="Switch to List View Mode"><i class="iconfont-list"></i></a></li>
									</ul>
									<!-- // DISPLAY MODE -->
									
									<!-- NUMBER OF ITEMS TO BE DISPLAY -->
									<div class="pull-right m-l-lg">
										<span class="inline-middle m-r-sm text-xs">Show</span>
										<div class="inline-middle styled-dd">
											<select>
												<option value="9">9</option>
												<option value="12" selected>12</option>
												<option value="24">24</option>
												<option value="36">36</option>
											</select>
										</div>
									</div>
									<!-- // NUMBER OF ITEMS TO BE DISPLAY -->
								</div>
								<div class="space30 visible-xs"></div>
								<!-- PAGINATION -->
								<div class="col-xs-12 col-sm-12 col-md-6 center-xs">
									<ul class="paginator li-m-r-l pull-right">
										<li><a class="round-icon" href="#" data-toggle="tooltip" data-title="Previous Page"><i class="iconfont-angle-left"></i></a></li>
										<li><a href="#">1</a></li>
										<li><a href="#">2</a></li>
										<li><a href="#">3</a></li>
										<li><a href="#">4</a></li>
										<li><a href="#">5</a></li>
										<li><a class="round-icon" href="#" data-toggle="tooltip" data-title="Next Page"><i class="iconfont-angle-right"></i></a></li>
									</ul>
								</div>
								<!-- // PAGINATION -->
							</div>
						</header>
						<!-- // DISPLAY MODE - NUMBER OF ITEMS TO BE DISPLAY - PAGINATION -->
						
						<!-- PRODUCT LAYOUT -->
						<div class="products-layout grid m-t-b add-cart" data-product=".product" data-thumbnail=".entry-media .thumb" data-title=".entry-title > a" data-url=".entry-title > a" data-price=".entry-price > .price">

							<?php if(is_array($products)): foreach($products as $key=>$product): ?><div class="product" data-product-id="<?php echo ($product["id"]); ?>" data-category="<?php echo ($nodes); ?>" data-brand="brand<?php echo ($product["bid"]); ?>" data-price="250" data-colors="red|blue|black|white" data-size="S|M|L">
								<div class="entry-media">
									<img data-src="__PUBLIC__/Uploads/products/<?php echo md5($product['id']);?>/thumb_<?php echo ($product["face"]); ?>" alt="" class="lazyLoad thumb" />
									<div class="hover">
										<a href="product.html" class="entry-url"></a>
										<ul class="icons unstyled">
											<li>
												<div class="circle ribbon ribbon-sale">Sale</div>
											</li>
											<li>
												<a href="__PUBLIC__/Uploads/products/<?php echo md5($product['id']);?>/<?php echo ($product["face"]); ?>" class="circle" data-toggle="lightbox"><i class="iconfont-search"></i></a>
											</li>
											<li>
												<a href="#" class="circle add-to-cart"><i class="iconfont-shopping-cart"></i></a>
											</li>
										</ul>
										<div class="rate-bar">
											<input type="range" value="4.5" step="0.5" id="backing1" />
											<div class="rateit" data-rateit-backingfld="#backing1" data-rateit-starwidth="12" data-rateit-starheight="12" data-rateit-resetable="false"  data-rateit-ispreset="true" data-rateit-min="0" data-rateit-max="5"></div>
										</div>
									</div>
								</div>
								<div class="entry-main">
									<h5 class="entry-title">
										<a href="product.html"><?php echo ($product["name"]); ?></a>
									</h5>
									<div class="entry-description visible-list">
										<p><?php echo ($product["summary"]); ?></p>
									</div>
									<div class="entry-price">
										<s class="entry-discount">￥ <?php echo ($product["saleprice"]); ?></s>
										<strong class="accent-color price">￥ <?php echo ($product["price"]); ?></strong>
										<a href="#" class="btn btn-round btn-default add-to-cart visible-list">添加到购物车</a>
									</div>
									<div class="entry-links clearfix">
										<a href="#" class="pull-left m-r">+ 添加到收藏夹</a>
										<a href="#" class="pull-right">+ Add to Compare</a>
									</div>
								</div>
							</div><?php endforeach; endif; ?>
							
						</div>
						<!-- // PRODUCT LAYOUT -->
					</section>
					
				</section>
			</div>
			
		</div>
	</div>
</main>
<!-- // SITE MAIN CONTENT -->

		<!-- SITE FOOTER -->
	<footer class="page-footer">
		
		<!-- WIDGET AREA -->
		<div class="widgets">
		
			<!-- FIRST ROW -->
			<div class="section">
				<div class="container">
					<div class="row">
						
						<div class="col-xs-12 col-sm-6 col-md-3">
							<section class="widget widget-text">
								<h5 class="widget-title">our store</h5>
								<div class="widget-content">
									<p>Sed ornare cras donec litora integer curabitur orci, at nullam aliquam libero nam himenaeos, amet massa amet ut ipsum viverra mauris rhoncus neque aenean rhoncus gravida orci facilisis quis dui consectetur.</p>
									<p>Nisi porttitor inceptos consectetur donec orci, dui ipsum leo class gravida, felis primis viverra placerat.</p>
								</div>
							</section>
						</div>
						
						<div class="col-xs-12 col-sm-6 col-md-3">
							<section class="widget widget-text">
								<h5 class="widget-title">Opening Time</h5>
								<div class="widget-content">
									<p>Monday-Friday:-------------------------9.00 to 18.00</p>
									<p>Saturday:--------------------------------10.00 to 16.00</p>
									<p>Sunday:----------------------------------10.00 to 16.00</p>
									<br/>
									<p>Every 30 day of month Lorem ipsum dolor sit amet, consectetur adipiscing.</p>
								</div>
							</section>
						</div>
						
						<div class="space40 visible-sm clearfix"></div>
						
						<div class="col-xs-12 col-sm-6 col-md-3">
							<section class="widget widget-menu">
								<h5 class="widget-title">information</h5>
								<div class="widget-content">
									<ul class="menu iconed-menu unstyled">
										<li><a href="#"><i class="iconfont-circle-blank menu-icon"></i>Affiliate</a></li>
										<li><a href="#"><i class="iconfont-circle-blank menu-icon"></i>Shipping</a></li>
										<li><a href="#"><i class="iconfont-circle-blank menu-icon"></i>Shop support</a></li>
										<li><a href="#"><i class="iconfont-circle-blank menu-icon"></i>Customer Service</a></li>
										<li><a href="#"><i class="iconfont-circle-blank menu-icon"></i>Payment & Return</a></li>
										<li><a href="#"><i class="iconfont-circle-blank menu-icon"></i>Terms & Conditions</a></li>
									</ul>
								</div>
							</section>
						</div>
						
						<div class="col-xs-12 col-sm-6 col-md-3">
							<iframe src="http://www.facebook.com/plugins/likebox.php?href=http%3A%2F%2Fwww.facebook.com%2Fenvato&amp;&amp;colorscheme=light&amp;show_faces=true&amp;header=false&amp;stream=false&amp;show_border=false" scrolling="no" frameborder="0" style="border:none; overflow:hidden;" allowTransparency="true" width="100%"></iframe>
						</div>
						
					</div>
				</div>
			</div>
			<!-- // FIRST ROW -->
			
			<!-- SECOND ROW -->
			<div class="section">
				<div class="container">
					<div class="row">
						
						<div class="col-xs-12 col-sm-12 col-md-3">
							<section class="widget widget-menu">
								<h5 class="widget-title">Contact info</h5>
								<div class="widget-content">
									<ul class="menu iconed-list unstyled">
										<li>
											<span class="list-icon"><i class="round-icon iconfont-map-marker"></i></span>
											<div class="list-content">Lorem ipsum maecenas dapibus luctus euismod 133/2 New York City</div>
										</li>
										<li>
											<span class="list-icon"><i class="round-icon iconfont-phone"></i></span>
											<div class="list-content">(+00)1344356-675</div>
										</li>
										<li>
											<span class="list-icon"><i class="round-icon iconfont-envelope-alt"></i></span>
											<div class="list-content">support@themina.net</div>
										</li>
									</ul>
								</div>
							</section>
						</div>
						
						<div class="col-xs-12 col-sm-12 col-md-6">
							<section class="widget widget-ads">
								<div class="widget-content">
									<div class="center-xs">
										<div class="ads">
											<a href="#">
												<img src="__PUBLIC__/Index/images/demo/images-footer.jpg" alt="" />
											</a>
											<div class="ads-caption bottom-right">
												<a href="#" class="btn btn-default btn-round">
													<i class="round-icon iconfont-angle-right"></i>
													<span class="inline-middle">Show More</span>
												</a>
											</div>
										</div>
									</div>
								</div>
							</section>
						</div>
						
						<div class="col-xs-12 col-sm-12 col-md-3">
							<section class="widget widget-subscription">
								<h5 class="widget-title">Newletter</h5>
								<div class="widget-content">
									<p>Subscribe to be the first to know about Sales, Events, and Exclusive Offers!</p>
									<form action="#" method="post">
										<div class="input-group">
											<label for="subscription-email" class="placeholder">Enter Your Email</label>
											<input type="email" id="subscription-email" name="email" class="form-control" required />
											<span class="input-group-btn">
												<button class="btn btn-primary">Subscribe</button>
											</span>
										</div>
									</form>
								</div>
							</section>
						</div>
						
					</div>
				</div>
			</div>
			<!-- // SECOND ROW -->
			
		</div>
		<!-- // WIDGET AREA -->
		
		<div class="footer-sub">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-sm-6">
						<div class="footer-links center-xs clearfix">
							<ul class="unstyled">
								<li><a href="#">Site Map</a></li>
								<li><a href="#">FAQ</a></li>
								<li><a href="#">Work for us</a></li>
								<li><a href="#">Contact Us</a></li>
							</ul>
						</div>
						<div class="space10"></div>
						<div class="copyright center-xs">
							<p>© 2013 Gfashion Demo Store. All Rights Reserved.</p>
						</div>
					</div>
					
					<div class="space40 visible-xs"></div>
					
					<div class="col-xs-12 col-sm-6 center-xs">
						<div class="pull-right">
							<div class="vmid">
								<span class="uppercase">Payment Accept&emsp;</span>
								<a href="#"><img src="__PUBLIC__/Index/img/visacard.png" alt="" width="40" /></a>
								<a href="#"><img src="__PUBLIC__/Index/img/mastercard.png" alt="" width="40" /></a>
								<a href="#"><img src="__PUBLIC__/Index/img/paypal.png" alt="" width="40" /></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		
	</footer>
	<!-- // SITE FOOTER -->
		
</div>
<!-- // PAGE WRAPPER -->

<!-- Essential Javascripts -->
<script src="__PUBLIC__/Index/js/minified.js"></script>
<!-- // Essential Javascripts -->

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','http://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-27646173-3', 'themina.net');
  ga('send', 'pageview');

</script>
	<!-- Particular Page Javascripts -->
	<script src="__PUBLIC__/Index/js/owl.carousel.js"></script>
	<script src="__PUBLIC__/Index/js/jquery.flexslider-min.js"></script>
	<script src="__PUBLIC__/Index/js/jquery.nouislider.js"></script>
	<script src="__PUBLIC__/Index/js/jquery.isotope.min.js"></script>
	<script src="__PUBLIC__/Index/js/products.js"></script>
	<!-- // Particular Page Javascripts -->
</body>
</html>