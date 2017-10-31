@extends('frontend._layout.basic')

@section('title')
	<title>Aquasolve Sanaria | About Us</title>
@endsection

@section('meta')
@endsection

@section('style')
	<link rel="stylesheet" type="text/css" href="{{ asset('amadeo/plugin/owl-carousel/owl.carousel.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('amadeo/plugin/owl-carousel/owl.theme.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('amadeo/plugin/owl-carousel/owl.transitions.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('amadeo/css/about.css') }}">
@endsection

@section('body')
	<div id="about">
		<div id="wrapper">
			<h1>AQUASOLVE</h1>
			<div class="bar">
				<p>
					Aquasolve is a manufacturing company based in Jakarta, the capital city of Indonesia. The company has been well established for many years and also recognized for its years of commitment in its craft. The facility features a clean and healthy environment and is equipped with Good Manufacturing Practise certification for its high attention to hygiene factors.
				</p>
				<p>
					Aquasolve specialises in oral care manufacturing. It has succesfully positioned itself as the market leader in dissolvable film strip manufacturing in the south east asia region.
				</p>
			</div>
			<div class="bar">
				<p>
					Go Fress, is among the first product launched. As demands for oral care products grow, Aquasolve Sanaria Pty Ltd constantly improves their product quality by developing new packaging, launching new variant, and investing in new machineries.
				</p>
				<p>
					Go Fress have been distributed nationwide and worldwide including countries such as Singapore, Czech Republic, Uganda, Pakistan and Australia.
				</p>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>

	<div id="facility" style="background-image: url('{{ asset('amadeo/images-base/abou-facility.jpg') }}');">
		<div id="wrapper">
			<h1>PRODUCTION FACILITY</h1>
			<p>
				PT Aquasolve Sanaria is absolutely committed to maintain highest quality products and utmost integrity in business practices. Our Production facility maintains high level of hygiene and food safety standard.
			</p>
			<p>
				We strive to use only the best technology available to the market and have made a huge investment to our production facility. This enables us to deliver over one million product every month.
			</p>
			<p>
				Industry standard Enterprise Resource Planning (ERP) is also put in place which results in a smoother production process. This enables us to operate effectively and efficiently.
			</p>
			<p>
				As a reflection of our commitment to produce quality and consistent products, we have been awarded with Good Manufacturing Practices (GMP) Certification for high attention to hygiene factors and HALAL Certification.
			</p>
		</div>
	</div>

	<div id="certification">
		<div id="wrapper">
			<h1>CERTIFICATION</h1>

			<div id="certification-sliders">
				@for($a=0; $a<=7; $a++)
				<div class="item">
					<div id="contain">
						<p>Name Of Certification</p>
						<div id="center">
							<div id="midle">
								<img src="{{ asset('amadeo/images-base/certification.jpg') }}">
							</div>
						</div>
					</div>
				</div>
				@endfor
			</div>
		</div>
	</div>

	<div id="vidio">
		<iframe width="100%" height="575px" src="https://www.youtube.com/embed/8DyziWtkfBw" frameborder="0" allowfullscreen></iframe>
	</div>
@endsection

@section('script')
	<script type="text/javascript" src="{{ asset('amadeo/plugin/owl-carousel/owl.carousel.min.js') }}"></script>
	<script type="text/javascript">
		$("#certification-sliders").owlCarousel({
			navigation : false,
			items: 3,
			singleItem:false,
			pagination:false,
			autoPlay: 2500,
		    stopOnHover:true
		});
	</script>
@endsection
