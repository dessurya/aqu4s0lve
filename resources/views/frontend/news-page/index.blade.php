@extends('frontend._layout.basic')

@section('title')
	<title>Aquasolve Sanaria | News</title>
@endsection

@section('meta')
@endsection

@section('style')
	<style type="text/css">
		#navbar{
			background-color: rgb(101,100,106);
		}
		#news{
			position: relative;
			width: 100%;
			padding-top: 120px;
			padding-bottom: 40px;
		}
		#news #wrapper{
			position: relative;
			width: 80%;
			margin: 0 auto;
		}
		#news #wrapper .bar{
			position: relative;
			float: left;
			width: 50%;
			padding-top: 10px;
			padding-bottom: 10px;
		}
		#news #wrapper .bar #contain{
			position: relative;
			width: 90%;
			margin: 0 auto;
			color: rgb(48,48,48);
		}
		#news #wrapper .bar #contain #bg-img{
			width: 100%;
			height: 280px;
			background-repeat: no-repeat;
			background-position: center;
			background-size: cover;
		}
		#news #wrapper .bar #contain h3{
	        font-family: 'Slabo27px-Regular';
			margin: 10px 0;
		}
		#news #wrapper .bar #contain p{
	        font-family: 'Quicksand Light';
			margin: 0;
		}
		#news #wrapper .bar #contain label{
	        font-family: 'Quicksand Regular';
			display: block;
			margin: 10px 0;
		}
		#news #wrapper .bar #contain label a{
	        font-family: 'Quicksand Bold';
			color: rgb(238,129,13);
			text-decoration: none;
		}
		/* mobile */
			@media (max-width: 480px) {
				#news #wrapper .bar #contain #bg-img{
					height: 160px;
				}
			}
		/* mobile */
	</style>
@endsection

@section('body')
	<div id="news">
		<div id="wrapper">
			@for($a=0; $a<=3; $a++)
			<div class="bar">
				<div id="contain">
					<div id="bg-img" style="background-image: url('{{ asset('amadeo/images-base/banner.jpg') }}');"></div>
					<h3>Name of News</h3>
					<p>May 16th 2017</p>
					<label>
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo... <a href="{{ route('frontend.news.view', ['slug'=>'slug']) }}">(Read More)</a>
					</label>
				</div>
			</div>
			@endfor
			<div class="clearfix"></div>
		</div>
	</div>
@endsection

@section('script')
	
@endsection
