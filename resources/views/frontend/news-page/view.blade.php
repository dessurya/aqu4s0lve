@extends('frontend._layout.basic')

@section('title')
	<title>Aquasolve Sanaria | Name of News | News</title>
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
			padding-top: 100px;
			padding-bottom: 40px;
		}
		#news #wrapper{
			position: relative;
			width: 80%;
			margin: 0 auto;
			color: rgb(48,48,48);
		}
		#news #wrapper #top{
			text-align: center;
		}
		#news #wrapper #top h1{
	        font-family: 'Slabo27px-Regular';
			font-size: 48px;
			margin: 10px 0;
		}
		#news #wrapper #top p{
	        font-family: 'Quicksand Light';
	        margin-top: 0;
	        margin-bottom: 20px;

		}
		#news #wrapper #top #bg-img{
			width: 100%;
			height: 440px;
			margin-bottom: 20px;
			background-repeat: no-repeat;
			background-position: center;
			background-size: cover;
		}
		#news #wrapper #descript{
			position: relative;
			width: 60%;
			margin: 0 auto;
	        font-family: 'Quicksand Regular';
		}
		#news #wrapper h2{
			margin-top: 40px;
	        font-size: 32px;
	        font-family: 'Slabo27px-Regular';
	        text-decoration: underline;
	        text-align: center;
		}
		#news #wrapper .item{
			position: relative;
			float: left;
			width: 33.33%;
		}
		#news #wrapper .item #contain{
			padding: 0 20px;
		}
		#news #wrapper .item #contain #img{
			width: 100%;
			height: 200px;
			background-repeat: no-repeat;
			background-position: center;
			background-size: cover;
		}
		#news #wrapper .item #contain h3{
	        font-family: 'Slabo27px-Regular';
		}
		#news #wrapper .item #contain p{
	        font-family: 'Quicksand Regular';
		}
		#news #wrapper .item #contain h3,
		#news #wrapper .item #contain p{
			margin: 5px 0;
			color: rgb(48,48,48);
		}
	</style>
@endsection

@section('body')
	<div id="news">
		<div id="wrapper">
			<div id="top">
				<h1>Name of News</h1>
				<p>May 16th 2017</p>
				<div id="bg-img" style="background-image: url('{{ asset('amadeo/images-base/banner.jpg') }}');"></div>
			</div>
			<div id="descript">
				<p>
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
				</p>
				<p>
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
				</p>
				<p>
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
				</p>
				<p>Share On:</p>
			</div>

			<h2>Related News</h2>
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
	
@endsection
