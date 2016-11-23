<!DOCTYPE html>
<html lang="{{ App::getLocale() }}">
<head>
	<meta charset="utf-8">
	<title>
		@if($meta ->getTranslate('meta_title'))
			{{ $meta ->getTranslate('meta_title') }}
		@else Eurostandard
		@endif
	</title>

	@if(isset($meta))
		<meta name="description" content="{{ $meta ->getTranslate('meta_description') }}">
		<meta name="keywords" content="{{ $meta ->getTranslate('meta_keywords') }}">
	@endif

	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="shortcut icon" href="{{ asset('/img/favicon/favicon.ico') }}" type="image/x-icon">
	<link rel="apple-touch-icon" href="{{ asset('/img/favicon/apple-touch-icon.png') }}">
	<link rel="apple-touch-icon" sizes="72x72" href="{{ asset('img/favicon/apple-touch-icon-72x72.png') }}">
	<link rel="apple-touch-icon" sizes="114x114" href="{{ asset('/img/favicon/apple-touch-icon-114x114.png') }}">

	<!-- Bootstrap core CSS -->
	<link href="{{ asset('/css/frontend/bootstrap.min.css') }}" rel="stylesheet">
	<link href="{{ asset('/css/frontend/flex-light-theme.css') }}?ver={{ $version }}" rel="stylesheet">
	<link href="{{ asset('/css/frontend/main.css') }}?ver={{ $version }}" rel="stylesheet">
	<link href="{{ asset('/css/frontend/font-awesome.min.css') }}" rel="stylesheet">
	<link href="{{ asset('/libs/unitegallery/dist/css/unite-gallery.css') }}" rel="stylesheet">

	<!--<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">-->
	<link href="{{ asset('/css/plugins/sweetalert.css') }}" rel="stylesheet">

</head>

<body>

<div class="container">

	<div class="row">

		<div class="col-md-6 resume-block">
			<a class="main-resume" href="/{{ App::getLocale() }}/resume">{{ trans('base.resume') }}</a>
		</div>
		<ul class="col-md-6 text-right lang">
			@foreach($langs as $lang)
				<li><a href="{{str_replace(url(App::getLocale()), url($lang->lang), Request::url())}}">{{$lang -> lang}}</a></li>
			@endforeach
		</ul>

	</div>

	<div class="row">

		<div class="col-md-12">
			<nav class="navbar navbar-default">
				<div class="container-fluid">
					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand" href="/{{ App::getLocale() }}">
							<img alt="Brand" src="/img/frontend/logo.jpg">
						</a>
						<p class="navbar-text">EUROSTANDARD sp. z o.o.</p>
					</div>

					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						<ul class="nav navbar-nav navbar-right r-menu">
							<li @if(Request::is(App::getLocale())) class="active"@endif>
								<a href="/{{ App::getLocale() }}">
									<i class="fa fa-home"></i><br>
									{{ trans('base.home') }}
								</a>
							</li>
							<li @if(Request::is('*/company'))class="active"@endif>
								<a href="/{{ App::getLocale() }}/company">
									<i class="fa fa-paperclip"></i><br>
									{{ trans('base.company') }}
								</a>
							</li>
							<li @if(Request::is('*/news'))class="active"@endif>
								<a href="/{{ App::getLocale() }}/news"><i class="fa fa-newspaper-o"></i><br>
									{{ trans('base.news') }}
								</a>
							</li>
							<li @if(Request::is('*/works'))class="active"@endif>
								<a href="/{{ App::getLocale() }}/works"><i class="fa fa-user"></i><br>
									{{ trans('base.works') }}
								</a>
							</li>
							<li @if(Request::is('*/gallery'))class="active"@endif>
								<a href="/{{ App::getLocale() }}/gallery"><i class="fa fa-camera"></i><br>
									{{ trans('base.gallery') }}
								</a>
							</li>
							<li @if(Request::is('*/contacts'))class="active"@endif>
								<a href="/{{ App::getLocale() }}/contact"><i class="fa fa-envelope"></i><br>
									{{ trans('base.contacts') }}
								</a>
							</li>
						</ul>
					</div><!-- /.navbar-collapse -->

				</div><!-- /.container-fluid -->

			</nav>
		</div>

	</div>

	@yield('content')

</div> <!-- /container -->
<!-- Site footer -->
<footer>
	<div class="container">
		<div class="row">

			<div class="col-sm-3 col-md-3 wow fadeInUp">

				<a class="navbar-brand" href="#">
					<img alt="Brand" src="/img/frontend/logo.jpg">
				</a>
				<p class="navbar-text">EUROSTANDARD sp. z o.o.</p>

			</div>

			<div class="col-sm-6 col-md-6 text-center wow fadeInDown">

				<i class="fa fa-map-marker fa-3x" aria-hidden="true"></i>
				<p>	{{  $texts->get('header.address') }}<br>
					{{  $texts->get('header.address_poland') }}
				</p>

			</div>

			<div class="col-sm-3 col-md-3 text-right wow fadeInLeft">

				<i class="fa fa-phone fa-3x" aria-hidden="true"></i>
				<ul class="phone">
					<li>{{  $texts->get('header.tel1') }}</li>
					<li>{{  $texts->get('header.tel2') }}</li>
				</ul>
			</div>

		</div>
	</div>
</footer>


<script src="{{ asset('/js/frontend/jquery-11.0.min.js') }}"></script>
<script src="{{ asset('/js/frontend/bootstrap.js') }}"></script>
<script src="{{ asset('/libs/unitegallery/dist/js/unitegallery.js') }}"></script>

<script src="{{ asset('/libs/unitegallery/dist/themes/slider/ug-theme-slider.js') }}"></script>
<script src="{{ asset('/libs/unitegallery/dist/themes/carousel/ug-theme-carousel.js') }}"></script>
<script src="{{ asset('/libs/unitegallery/dist/themes/tilesgrid/ug-theme-tilesgrid.js') }}"></script>
<script src="{{ asset('/js/plugins/sweetalert.min.js') }}"></script>

<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<!-- end: For unitgallery -->
<script src="{{ asset('/js/common.js') }}?ver={{ $version }}"></script>

<script>

</script>


<STYLE>
	.navbar-default .navbar-text {
		font-size: 25px;
	}
	footer .navbar-text {
		font-size: 16px;
	}
</STYLE>

<script src="http://azmind.com/demo/andia-agency/v2-1/assets/js/wow.min.js" type="application/javascript"></script>
<link href="http://azmind.com/demo/andia-agency/v2-1/assets/css/animate.css" rel="stylesheet">
<script>
	new WOW().init();
</script>
</body>
</html>