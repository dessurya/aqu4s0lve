@extends('frontend._layout.basic')

@section('title')
	<title>Aquasolve Sanaria | Product</title>
@endsection

@section('meta')
@endsection

@section('style')
	<link rel="stylesheet" type="text/css" href="{{ asset('amadeo/css/product.css') }}">
@endsection

@section('body')
	<div id="product">
		<div id="list-wrapper">
			<h1>PRODUCTS</h1>
			<div id="list">
				<div class="product-select midle" data-name="GO FRESS" data-img="{{ asset('amadeo/images-base/home-product.png') }}" data-desc="Instant medicine, perfect for your modern family. Herbafress helps reducing symptoms of cough and relieving sore throat anytime, anywhere." data-slug="go-fress">
					<img src="{{ asset('amadeo/images-base/home-product.png') }}">
					<p>GO FRESS</p>
				</div>
				<div class="product-select midle" data-name="ICE N COOL" data-img="{{ asset('amadeo/images-base/home-product.png') }}" data-desc="Instant medicine, perfect for your modern family. Herbafress helps reducing symptoms of cough and relieving sore throat anytime, anywhere." data-slug="ice-n-cool">
					<img src="{{ asset('amadeo/images-base/home-product.png') }}">
					<p>ICE N COOL</p>
				</div>
				<div class="product-select midle" data-name="WAKE UP!" data-img="{{ asset('amadeo/images-base/home-product.png') }}" data-desc="Instant medicine, perfect for your modern family. Herbafress helps reducing symptoms of cough and relieving sore throat anytime, anywhere." data-slug="wake-up">
					<img src="{{ asset('amadeo/images-base/home-product.png') }}">
					<p>WAKE UP!</p>
				</div>
				<div class="product-select midle" data-name="HERBAFRESS" data-img="{{ asset('amadeo/images-base/home-product.png') }}" data-desc="Instant medicine, perfect for your modern family. Herbafress helps reducing symptoms of cough and relieving sore throat anytime, anywhere." data-slug="herbafress">
					<img src="{{ asset('amadeo/images-base/home-product.png') }}">
					<p>HERBAFRESS</p>
				</div>
			</div>
		</div>
		<div id="discrip-wrapper">
			<div id="contain">
				<h1 id="product-name"></h1>
				<p id="product-desc"></p>
			</div>
			<img id="product-img" src="">
		</div>
	</div>
@endsection

@section('script')
	<script type="text/javascript" src="{{ asset('amadeo/js/product-select.js') }}"></script>
	@if(isset($slug))
		<script type="text/javascript">
			$(".product-select.midle[data-slug='{{ $slug }}']").addClass("active");
			var Name = $(".product-select.midle[data-slug='{{ $slug }}']").data('name');
		    var Desc = $(".product-select.midle[data-slug='{{ $slug }}']").data('desc');
		    var Img  = $(".product-select.midle[data-slug='{{ $slug }}']").data('img');
		    $('h1#product-name').text(Name);
			$('p#product-desc').text(Desc);
			$('img#product-img').attr('src', Img);
		</script>
	@else
		<script type="text/javascript">
			$(".product-select.midle:first").addClass("active");
			var Name = $(".product-select.midle:first").data('name');
		    var Desc = $(".product-select.midle:first").data('desc');
		    var Img  = $(".product-select.midle:first").data('img');
		    $('h1#product-name').text(Name);
			$('p#product-desc').text(Desc);
			$('img#product-img').attr('src', Img);
		</script>
	@endif
@endsection
