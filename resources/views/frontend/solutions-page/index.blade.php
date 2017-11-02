@extends('frontend._layout.basic')

@section('title')
	<title>Aquasolve Sanaria | Solutions</title>
@endsection

@section('meta')
@endsection

@section('style')
	<style type="text/css">
		#navbar{
			background-color: rgb(101,100,106);
		}
		#solutions{
			position: relative;
			width: 100%;
			padding-top: 120px;
			padding-bottom: 40px;
		}
		#solutions #wrapper{
			position: relative;
			width: 60%;
			margin: 0 auto;
			color: rgb(48,48,48);
			text-align: center;
		}
		#solutions #wrapper h1,
		#solutions #wrapper h2{
	        font-family: 'Slabo27px-Regular';
			margin: 0;
		}
		#solutions #wrapper p{
			margin-top: 40px;
			margin-bottom: 40px;
	        font-family: 'Quicksand Regular';
			line-height: 1.4;
		}
		#solutions #wrapper img{
			padding: 2.5%;
			width: 40%;
			margin: 0 auto;
			display: inline-grid;
		}
		/* mobile */
			@media (max-width: 480px) {
				#solutions #wrapper{
					width: 90%;
				}
			}
		/* mobile */
	</style>
@endsection

@section('body')
	<div id="solutions">
		<div id="wrapper">
			<h1>WHITE LEBELLING</h1>
			<p>
				Personalized Services for our white labelling customers. We offer labelling with your corporate identity on it, custom printed to suit with your unique promotions. Impress your client and customers with our unique private labelling service to increase your product exclusivity.
			</p>
			<h2>SAMPLES</h2>
			@for($a=0; $a<=4; $a++)
			<img src="{{ asset('amadeo/images-base/solution-item.jpg') }}">
			@endfor
		</div>
	</div>
@endsection

@section('script')
	
@endsection
