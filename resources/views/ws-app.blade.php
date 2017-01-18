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

	{{-- Bootstrap core CSS --}}
	<link href="{{ asset('/css/frontend/bootstrap.min.css') }}" rel="stylesheet">
	<link href="{{ asset('/css/frontend/main.css') }}?ver={{ $version }}" rel="stylesheet">
	<link href="{{ asset('/css/frontend/fonts.css') }}?ver={{ $version }}" rel="stylesheet">
	<link href="{{ asset('/css/frontend/last-theme-pl.css') }}?ver={{ $version }}" rel="stylesheet">
	<link href="{{ asset('/css/frontend/font-awesome.min.css') }}" rel="stylesheet">
	<link href="{{ asset('/libs/unitegallery/dist/css/unite-gallery.css') }}" rel="stylesheet">
	<link href="{{ asset('/css/plugins/sweetalert.css') }}" rel="stylesheet">

</head>

<body>

	<div class="container">

		<header>

				<ul class="col-md-12 text-right lang">

						<li @if(App::getLocale() == 'ua') class="active"@endif><a href="{{str_replace(url(App::getLocale()), url('ua'), Request::url())}}">ua</a></li>
						<li @if(App::getLocale() == 'pl') class="active"@endif><a href="{{str_replace(url(App::getLocale()), url('pl'), Request::url())}}">pl</a></li>
						<li @if(App::getLocale() == 'en') class="active"@endif><a href="{{str_replace(url(App::getLocale()), url('en'), Request::url())}}">en</a></li>

				</ul>

				<div class="clearfix">

					<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 wow fadeInDown">

						<div class="clearfix">

							<a class="navbar-brand" href="/{{ App::getLocale() }}">
								<img alt="Brand" src="/img/frontend/logo.png">
							</a>

							<p class="navbar-text"><a href="/{{ App::getLocale() }}">EUROSTANDARD</a></p>

						</div>

					</div>

					<div class="col-xs-12 col-sm-1 col-md-5 col-lg-4 wow fadeInUp">

						<div class="clearfix">

							<ul class="soc">
								<li><a class="fb" href="{{  $texts->get('header.fb') }}"><i class="fa fa-facebook-official fa-2x" aria-hidden="true"></i></a></li>
								<li><a class="tw" href="{{  $texts->get('header.tw') }}"><i class="fa fa-twitter fa-2x" aria-hidden="true"></i></a></li>
								<li><a class="sk" href="skype:{{  $texts->get('header.sk') }}"><i class="fa fa-skype fa-2x" aria-hidden="true"></i></a></li>
							</ul>

							<div class="header-text">
								{{  $texts->get('header.text') }}
							</div>

						</div>

					</div>

					<div class="col-xs-12 col-sm-5 col-md-3 col-lg-4 wow fadeInDown" style="text-align: right;">

						<ul class="phone">
							<li>{{  $texts->get('contact.poland_phone_1') }}</li>
							<li>{{  $texts->get('header.tel1') }}</li>
						</ul>

					</div>

				</div>

			<div class="col-md-12 fix-height">

				<ul class="nav nav-pills nav-justified">

					<li @if(Request::is(App::getLocale())) class="active"@endif>
						<a href="/{{ App::getLocale() }}">
							{{ trans('base.home') }}
						</a>
					</li>

					<li @if(Request::is('*/company'))class="active"@endif>
						<a href="/{{ App::getLocale() }}/company">
							{{ trans('base.company') }}
						</a>
					</li>

					<li @if(Request::is('*/news'))class="active"@endif>
						<a href="/{{ App::getLocale() }}/news">
							{{ trans('base.news') }}
						</a>
					</li>

					<li @if(Request::is('*/gallery'))class="active"@endif>
						<a href="/{{ App::getLocale() }}/gallery">
							{{ trans('base.gallery') }}
						</a>
					</li>

					<li @if(Request::is('*/contact'))class="active"@endif>
						<a href="/{{ App::getLocale() }}/contact">
							{{ trans('base.contacts') }}
						</a>
					</li>

				</ul>

			</div>


		</header>

		<div class="row" style="min-height: 600px;">

			@yield('content')

			@if(!(Request::is('*/news*')) or (Request::is('*/news/article-*')) )

				<div class="col-md-4">

					<div class="panel panel-default bg_grey wow fadeInUp">

						<div class="panel-heading">{{ trans('base.latest_news') }}</div>

						<div class="panel-body">

							<div class="row">

								@foreach($last_news as $last_new)

									<div class="r-block-item clearfix">

										@if(count($last_new->getImages()) > 0)

											<div class="col-md-4">

												<a href="/{{ App::getLocale() }}/news/article-{{ $last_new -> id }}" class="thumbnail bg_grey">
													<img src="/{{$last_new->getImages()[0]['min']}}" alt="...">
												</a>

											</div>

											<div class="col-md-8"><h4 class="title_sidebar title_sidebar_news">{{ $last_new->getTranslate('title') }}</h4></div>

										@else

											<div class="col-md-12"><h4 class="title_sidebar">{{ $last_new->getTranslate('title') }}</h4></div>

										@endif

										<div class="col-md-12">

											<div class="block-content"> {!! str_limit($last_new->getTranslate('short_description'), 140) !!}</div>

											<a href="/{{ App::getLocale() }}/news/article-{{ $last_new -> id }}" class="pull-right">{{ trans('base.read_full_news') }}<i class="fa fa-angle-right fa-lg fa_my"></i><i class="fa fa-angle-right fa-lg"></i></a>

										</div>

									</div>

								@endforeach

							</div>

							<p><a class="btn btn-primary btn-lg" style="width: 100%;" href="/{{ App::getLocale() }}/news" role="button">{{ trans('base.all_news') }}</a></p>

						</div>

					</div>

				</div>

			@endif

		</div>

	</div> {{-- /container --}}

	{{-- Site footer --}}

	<div class="container">

		<footer class="footer">

			<div class="row">

				<div class="col-xs-12 col-sm-4 col-md-4 col-lg-3 wow fadeInUp min-center">

					<a class="navbar-brand" href="/{{ App::getLocale() }}">
						<img alt="Brand" src="/img/frontend/logo.png">
					</a>

					<p class="navbar-text"><a href="/{{ App::getLocale() }}">EUROSTANDARD</a></p>

				</div>

				<div class="col-xs-12 col-sm-4 col-md-4 col-lg-6 text-center wow fadeInDown min-center">

					<i class="fa fa-map-marker fa-4x" aria-hidden="true"></i>
					<p>	{{  $texts->get('header.address_poland') }}<br>
						{{  $texts->get('header.address') }}
					</p>

				</div>

				<div class="col-xs-12 col-sm-4 col-md-4 col-lg-3 text-right wow fadeInLeft min-center">

					<i class="fa fa-phone fa-4x" aria-hidden="true"></i>

					<ul class="phone">
						<li>{{  $texts->get('contact.poland_phone_1') }}</li>
						<li>{{  $texts->get('header.tel1') }}</li>
					</ul>

				</div>

			</div>

		</footer>

	</div>

<script src="{{ asset('/js/frontend/jquery-11.0.min.js') }}"></script>
<script src="{{ asset('/js/frontend/bootstrap.js') }}"></script>
<script src="{{ asset('/libs/unitegallery/dist/js/unitegallery.js') }}"></script>
<script src="{{ asset('/libs/unitegallery/dist/themes/slider/ug-theme-slider.js') }}"></script>
<script src="{{ asset('/libs/unitegallery/dist/themes/carousel/ug-theme-carousel.js') }}"></script>
<script src="{{ asset('/libs/unitegallery/dist/themes/tilesgrid/ug-theme-tilesgrid.js') }}"></script>
<script src="{{ asset('/js/plugins/sweetalert.min.js') }}"></script>
<script src="{{ asset('/js/common.js') }}?ver={{ $version }}"></script>

<script src="http://azmind.com/demo/andia-agency/v2-1/assets/js/wow.min.js" type="application/javascript"></script>
<link href="http://azmind.com/demo/andia-agency/v2-1/assets/css/animate.css" rel="stylesheet">
<script>
	new WOW().init();
</script>
	<!-- Start SiteHeart code -->
	<script>
		(function(){
			var widget_id = 864396;
			_shcp =[{widget_id : widget_id}];
			var lang =(navigator.language || navigator.systemLanguage
			|| navigator.userLanguage ||"en")
					.substr(0,2).toLowerCase();
			var url ="widget.siteheart.com/widget/sh/"+ widget_id +"/"+ lang +"/widget.js";
			var hcc = document.createElement("script");
			hcc.type ="text/javascript";
			hcc.async =true;
			hcc.src =("https:"== document.location.protocol ?"https":"http")
					+"://"+ url;
			var s = document.getElementsByTagName("script")[0];
			s.parentNode.insertBefore(hcc, s.nextSibling);
		})();
	</script>
	<!-- End SiteHeart code -->
</body>
</html>