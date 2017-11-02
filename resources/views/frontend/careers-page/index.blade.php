@extends('frontend._layout.basic')

@section('title')
	<title>Aquasolve Sanaria | Careers</title>
@endsection

@section('meta')
@endsection

@section('style')
	<link rel="stylesheet" type="text/css" href="{{ asset('amadeo/css/careers.css') }}">
@endsection

@section('body')
	<div id="careers">
		<div id="wrapper">
			<div id="top">
				<h1>CAREERS</h1>
				<p>
					PT. Aquasolve Sanaria is an established company since 2005 and became the first Indonesian manufacturer for oral care and germ protection. Our company keep on growing and we are always the look for enthusiastic, qualified individuals to join us.
				</p>
			</div>
			@for($a=0; $a<=3; $a++)
			<div id="careers-slug-{{ $a }}" class="list un-active">
				<div id="head">
					<div id="name">
						<h2>Sales Executive</h2>
						<label>Full-time</label>
					</div>
					<div id="triger-togle-wrapper">
						<div class="triger-togle" data-togle="careers-slug-{{ $a }}">
							MORE INFORMATION & APPLEY <img src="{{ asset('amadeo/images-base/chevron-downs.png') }}">
						</div>
					</div>
					<div class="clearfix"></div>
				</div>
				<div class="body">
					<div id="content" class="bar">
						<h3>JOB DESCRIPTION</h3>
						<p>
							Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
						</p>
						<p>
							It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
						</p>
						<h3>RESPONSIBILITIES</h3>
						<ul>
							<li>Lorem Ipsum is simply dummy text of the printing</li>
							<li>Lorem Ipsum is simply dummy text of the printing</li>
							<li>Lorem Ipsum is simply dummy text of the printing</li>
							<li>Lorem Ipsum is simply dummy text of the printing</li>
							<li>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</li>
						</ul>
						<h3>QUALIFICATIONS</h3>
						<ul>
							<li>Lorem Ipsum is simply dummy text of the printing</li>
							<li>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</li>
							<li>Lorem Ipsum is simply dummy text of the printing</li>
							<li>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</li>
							<li>Lorem Ipsum is simply dummy text of the printing</li>
							<li>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</li>
						</ul>
					</div>
					<div id="description" class="bar">
						<p>
							<label>Job Type :</label> Sales
						</p>
						<p>
							<label>Location :</label> Jakarta
						</p>
						<p>
							<label>Contract :</label> Full-time
						</p>
						<p>
							<label>Vacancy :</label> 50
						</p>
						<p>
							<label>Posting Date :</label> 8 August 2017
						</p>
						<br>
						<br>
						<div style="text-align: center;">
							<a href="">APPLY NOW</a>
						</div>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
			@endfor
			<div id="process">
				<h1>APPLICATION PROCESS</h1>
				<div class="float step">
					<div id="images">
						<img src="{{ asset('amadeo/images-base/application-process-1.png') }}">
					</div>
					<p>
						Send your complete job application. Don't forget to highlight relevant skills for the position you are applying to, and make sure that you've attached your CV as well.
					</p>
				</div>
				<div class="float chev">
					<div id="images">
						<img src="{{ asset('amadeo/images-base/chevron-right.png') }}">
					</div>
				</div>
				<div class="float step">
					<div id="images">
						<img src="{{ asset('amadeo/images-base/application-process-2.png') }}">
					</div>
					<p>
						Our Human Resources team will then assess your job application. This may take awhile as there might be a high number of incoming applications.
					</p>
				</div>
				<div class="float chev">
					<div id="images">
						<img src="{{ asset('amadeo/images-base/chevron-right.png') }}">
					</div>
				</div>
				<div class="float step">
					<div id="images">
						<img src="{{ asset('amadeo/images-base/application-process-3.png') }}">
					</div>
					<p>
						Successful candidates will be contacted by our Human Resources team.
					</p>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
@endsection

@section('script')
	<script type="text/javascript">
		$(".triger-togle").click(function(){
			var triger = $(this).data("togle");
		    $("#"+triger).toggleClass("un-active");
		});
	</script>
@endsection
