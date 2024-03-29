<!DOCTYPE HTML>
<!-- BEGIN html -->
<html lang = "vi">
	<!-- BEGIN head -->
	<head>
		<title>@yield('title')</title> 
		<meta name="keywords" content="@yield('seo_keyword')" />
		<meta name="description" content="@yield('seo_description')" />
		<!-- Meta Tags -->
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<meta name="description" content="" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=2" />
		<meta name="generator" content="nt7solution.com">
	    <meta property="fb:app_id" content="{{ (!empty($contact)?$contact->fb_app_id:"") }}" />
	    <meta property="fb:admins" content="100004444963017"/> 
	    <meta property="og:type" content="article" /> 
	    <meta property="og:title" content="@yield('title')" />
	    <meta property="og:image" content="@yield('seo_image')" >
	    <meta property="og:description" content="@yield('seo_description')" >
	    <meta property="og:url" content="@yield('seo_url')" />
	    <meta property="og:site_name" content="{{ (!empty($contact)?$contact->seo_title:"") }}" />
		<!-- Favicon -->
		<link rel="shortcut icon" href="{{asset('home/images/favicon.png')}}" type="image/x-icon" />

		<!-- Stylesheets -->
		<link type="text/css" rel="stylesheet" href="{{asset('home/css/reset.css')}}" />
		<link type="text/css" rel="stylesheet" href="{{asset('home/css/font-awesome.min.css')}}" />
		<link type="text/css" rel="stylesheet" href="{{asset('home/css/weather-icons.min.css')}}" />
		<link href='http://fonts.googleapis.com/css?family=Noto+Sans:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Arvo:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
		<link type="text/css" rel="stylesheet" href="{{asset('home/css/bootstrap.min.css')}}" />
		<link type="text/css" rel="stylesheet" href="{{asset('home/css/dat-menu.css')}}" />
		<link type="text/css" rel="stylesheet" href="{{asset('home/css/main-stylesheet.css')}}" />
		<link type="text/css" rel="stylesheet" href="{{asset('home/css/ot-lightbox.css')}}" />
		<link type="text/css" rel="stylesheet" href="{{asset('home/css/shortcodes.css')}}" />
		<link type="text/css" rel="stylesheet" href="{{asset('home/css/responsive.css')}}" />
		<link type="text/css" rel="stylesheet" href="{{asset('home/css/mystyle.css')}}" />
		<link type="text/css" rel="stylesheet" href="{{asset('home/css/demo-settings.css')}}" />

		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!-- Đặt thẻ này vào phần đầu hoặc ngay trước thẻ đóng phần nội dung của bạn. -->
		<script src="https://apis.google.com/js/platform.js" async defer>  {lang: 'vi'}</script>
		<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

		<!--[if lte IE 8]>
		<link type="text/css" rel="stylesheet" href="css/ie-ancient.css" />
		<![endif]-->
	<!-- END head -->
	</head>

	<!-- BEGIN body -->
	<!-- <body> -->
	<body class="ot-menu-will-follow">
		<div id="fb-root"></div>
		<script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v3.3&appId=944616309209209&autoLogAppEvents=1"></script>

		<!-- BEGIN .boxed -->
		<div class="boxed active ">
			
			<!-- BEGIN .header -->
			<header class="header">	
				<!-- BEGIN .top-menu -->
				<div class="top-menu">
				
					<!-- BEGIN .wrapper -->
					<div class="wrapper">
						<nav class="top-menu-soc right">
							<ul>
								<li><a href="#" target="_blank" class="hover-color-facebook"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#" target="_blank" class="hover-color-twitter"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#" target="_blank" class="hover-color-google-plus"><i class="fa fa-google-plus"></i></a></li>
							</ul>
						</nav>
						<nav class="top-menu-list">
							<ul class="load-responsive" rel="Top Menu">
								<li><a href="{{url('')}}"><img src="{{asset('home/'.$contact->logo)}}" alt="No logo" style="height: 25px"></a></li>
								<li>
									<div class="header-main-search">
										<div class="search-block">
											<form action="{{ url('/search') }}">
												<input type="text" name="key" placeholder="Nhập từ khóa tìm kiếm.." />
											</form>
										</div>
									</div>
								</li>
							</ul>
						</nav>

					<!-- END .wrapper -->
					</div>

				<!-- END .top-menu -->
				</div>		
				<!-- BEGIN .wrapper -->
				<div class="wrapper">

					<!-- BEGIN .header-main -->
					<div class="header-main">
						<style type="text/css" media="screen">
							#top_text {
       								color: #00918e;
								    text-shadow: 1px 1px #00918e, 2px 2px #FF8040, 3px 3px #FF8040;
								    font: Bold 30px Sketch_Block;
								    -webkit-transition: all 0.12s ease-out;/*chrome & safari*/
								    -moz-transition:all 0.12s ease-out;/*firefox 3.7*/
								    -o-tramsition:all 0.12s ease-out /*Opera*/
								    }
 
									#top_text:hover {
									    position:relative; top:-3px; left:-3px;
									    text-shadow:1px 1px #FF8040, 2px 2px #FF8040, 3px 3px #FF8040, 4px 4px #FF8040, 5px 5px #FF8040, 6px 6px #FF8040 
									}
						</style>
						<div class="header-main-logo">
							<a href="{{url('')}}"><img width="50%" src="{{asset('home/'.$contact->logo)}}" alt="No logo" /></a>
						</div>

						<div class="header-main-weather">
							<div class="weather-block">
								<i class="wi wi-day-lightning"></i>
								<strong>Buôn Mê Thuột, Đắk Lắk</strong>
								<span>+29&deg;C, Mưa dông</span>
							</div>
						</div>

					<!-- END .header-main -->
					</div>
					

					<nav class="main-menu">
						<a href="#dat-menu" class="dat-menu-button"><i class="fa fa-bars"></i>MENU</a>
						<div class="main-menu-placeholder">
							<div class="main-menu-wrapper">
								<ul class="top-main-menu load-responsive" rel="DANH MỤC TIN">
									<li><a href="{{url('')}}">TRANG CHỦ</a></li>
								@foreach($modnews as $key => $itemmod) 
									<li><a href="{{ url('loai-tin').'/'.$itemmod->slug }}"><span>{{$itemmod->modname}}</span></a>
										<ul class="sub-menu">
										@foreach($itemmod->listnews as $itemlist) 
											<li><a href="{{ url('loai-tin').'/'.$itemlist->slug }}">{{$itemlist->listname}}</a></li>
										@endforeach
										</ul>
									</li>
								@endforeach									
								</ul>
							</div>
						</div>
					</nav>
					
				<!-- END .wrapper -->
				</div>
				
			<!-- END .header -->
			</header>
			
			<!-- BEGIN .content -->
			<section class="content">
			@yield('content')				
			<!-- BEGIN .content -->
			</section>
			
			<!-- BEGIN .footer -->
			<footer class="footer">	
				<!-- BEGIN .footer-copyright -->
				<div class="footer-copyright">
					<!-- BEGIN .wrapper -->
					<div class="wrapper">
						<p>{!! $contact->slogan_intro !!}</p>					
						<p>&copy; Copyright <strong>{{$contact->nameco}}</strong> <?php echo date("Y"); ?>, <strong><a href="https://nt7solution.com/" target="_blank">{{$contact->website}}</a></strong></p>
					
					<!-- END .wrapper -->
					</div>
				<!-- END .footer-copyright -->
				</div>
				
			<!-- END .footer -->
			</footer>
			<div class="back_top" style="display: none;">
				<a href="#top" class="right" style="color: #fff;"><i class="fa fa-chevron-up"></i><strong></strong></a>
			</div>
			<div class="popup_menu visible-xs">
				<a href="#dat-menu"  title="Danh mục tin"><i class="fa fa-bars"></i></a>
			</div>
			
		<!-- END .boxed -->
		</div>
	
		<!-- Scripts -->
		<script type="text/javascript" src="{{asset('home/jscript/jquery-latest.min.js')}}"></script>
		<script type="text/javascript" src="{{asset('home/jscript/bootstrap.min.js')}}"></script>
		<script type="text/javascript" src="{{asset('home/jscript/modernizr.custom.50878.js')}}"></script>
		<script type="text/javascript" src="{{asset('home/jscript/iscroll.js')}}"></script>
		<script type="text/javascript" src="{{asset('home/jscript/dat-menu.js')}}"></script>
		<script type="text/javascript" src="{{asset('home/jscript/theme-scripts.js')}}"></script>
		<script type="text/javascript" src="{{asset('home/jscript/ot-lightbox.js')}}"></script>
		<script type="text/javascript" src="{{asset('js/jquery.sticky-kit.min.js')}}"></script>
	<!-- END body -->
	<script>
		if ($(window).width() >700) {
        	$(".sticky_column").stick_in_parent();  
    	}
	</script>
	</body>
<!-- END html -->
</html>