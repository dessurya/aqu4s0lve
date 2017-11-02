@extends('frontend._layout.basic')

@section('title')
	<title>Aquasolve Sanaria</title>
@endsection

@section('meta')
@endsection

@section('style')
	<link rel="stylesheet" type="text/css" href="{{ asset('amadeo/plugin/owl-carousel/owl.carousel.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('amadeo/plugin/owl-carousel/owl.theme.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('amadeo/plugin/owl-carousel/owl.transitions.css') }}">

	<link rel="stylesheet" type="text/css" href="{{ asset('amadeo/css/home.css') }}">
@endsection

@section('body')
	<div id="banner-slider">
		@for($a=0; $a<=2; $a++)
		<div class="item">
			<div id="bg-banner" style="background-image: url('{{ asset('amadeo/images-base/banner.jpg') }}');">
				<div id="descript-wrapper">
					<div id="contain">
						<h1>EXPORT QUALITY</h1>
						<p>Having international standard of quality, our products have been distributed to over 5 continents</p>

						<a href="#about">
							<img src="{{ asset('amadeo/images-base/chevron-downs.png') }}">
						</a>
					</div>
				</div>
			</div>
		</div>
		@endfor
	</div>

	<div id="about">
		<div id="img" class="bar">
			<div id="bg-img" style="background-image: url('{{ asset('amadeo/images-base/about-us-home.jpg') }}');"></div>
		</div>
		<div id="contain" class="bar">
			<div id="wrapper">
				<h1>ABOUT US</h1>
				<p>
					Observing a niche market for strip-mints, we PT. Aquasolve Sanaria soon established a dedicated company in 2005 and became the first Indonesian manufacturer for oral care & germ protection.
				</p>
				<br>
				<br>
				<a href="{{ route('frontend.about') }}" class="buton-style">Learn More</a>
			</div>
		</div>
		<div class="clearfix"></div>
	</div>

	<div id="hot-area">
		<div class="item" style="background-image: url('{{ asset('amadeo/images-base/list-r.jpg') }}');">
			<div id="midle">
				<div id="contain">
					<h1>FACILITY</h1>
					<p>
						We are committed to maintain highest quality products and utmost integrity in business practices. Our Production facility maintains high level of hygiene and food safety standard.
					</p>
					<p>
						We strive to use only the best technology available to the market and have made a huge investment to our production facility.
					</p>
					<br>
					<a href="" class="buton-style">Take a Look</a>
				</div>
			</div>
		</div>
		<div class="item" style="background-image: url('{{ asset('amadeo/images-base/list-l.jpg') }}');">
			<div id="midle">
				<div id="contain">
					<h1>LEBELLING SOLUTION</h1>
					<p>
						Personalized Services for our white labelling customers. We offer labelling with your corporate identity on it, custom printed to suit with your unique promotions. Impress your client and customers with our unique private labelling service to increase your product exclusivity.
					</p>
					<br>
					<a href="" class="buton-style">Take a Look</a>
				</div>
			</div>
		</div>
	</div>

	<div id="product">
		<div id="list-wrapper">
			<div id="name" class="bar">
				<div class="midle">
					<h1>PRODUCTS</h1>
					<hr>
				</div>
			</div>
			<div id="list" class="bar">
				<div class="product-select midle" data-name="GO FRESS" data-img="{{ asset('amadeo/images-base/home-product.png') }}" data-desc="Instant medicine, perfect for your modern family. Herbafress helps reducing symptoms of cough and relieving sore throat anytime, anywhere.">
					<img src="{{ asset('amadeo/images-base/home-product.png') }}">
					<p>GO FRESS</p>
				</div>
				<div class="product-select midle" data-name="ICE N COOL" data-img="{{ asset('amadeo/images-base/home-product.png') }}" data-desc="Instant medicine, perfect for your modern family. Herbafress helps reducing symptoms of cough and relieving sore throat anytime, anywhere.">
					<img src="{{ asset('amadeo/images-base/home-product.png') }}">
					<p>ICE N COOL</p>
				</div>
				<div class="product-select midle" data-name="WAKE UP!" data-img="{{ asset('amadeo/images-base/home-product.png') }}" data-desc="Instant medicine, perfect for your modern family. Herbafress helps reducing symptoms of cough and relieving sore throat anytime, anywhere.">
					<img src="{{ asset('amadeo/images-base/home-product.png') }}">
					<p>WAKE UP!</p>
				</div>
				<div class="product-select midle active" data-name="HERBAFRESS" data-img="{{ asset('amadeo/images-base/home-product.png') }}" data-desc="Instant medicine, perfect for your modern family. Herbafress helps reducing symptoms of cough and relieving sore throat anytime, anywhere.">
					<img src="{{ asset('amadeo/images-base/home-product.png') }}">
					<p>HERBAFRESS</p>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
		<div id="discrip-wrapper">
			<div id="contain">
				<h1 id="product-name">HERBAFRESS</h1>
				<p id="product-desc">
					Instant medicine, perfect for your modern family. Herbafress helps reducing symptoms of cough and relieving sore throat anytime, anywhere.
				</p>
			</div>
			<img id="product-img" src="{{ asset('amadeo/images-base/home-product.png') }}">
		</div>
	</div>

	<div id="news">
		<div id="wrapper">
			<div id="title">
				<h1>LATEST NEWS</h1>
				<hr>
			</div>

			@for($a=0; $a<=2; $a++)
			<div class="item">
				<div id="contain">
					<a href="{{ route('frontend.news.view', ['slug'=>'slug']) }}">
						<div id="img" style="background-image: url('{{ asset('amadeo/images-base/banner.jpg') }}');"></div>
					</a>
					<h3>Name of News</h3>
					<p>May 16th 2017</p>
				</div>
			</div>
			@endfor
			
			<div class="clearfix"></div>
		</div>
	</div>

@endsection

@section('script')
	<script type="text/javascript" src="{{ asset('amadeo/plugin/owl-carousel/owl.carousel.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('amadeo/js/product-select.js') }}"></script>
	<script type="text/javascript">
		$("#banner-slider").owlCarousel({
			navigation : false,
			items: 1,
			singleItem:true,
			pagination:true,
			autoPlay: 5000,
		    stopOnHover:true
		});
	</script>
@endsection
