<div id="footer">
	<div id="wrapper">
		<div id="main" class="bar">
			<div id="contain">
				<img src="{{ asset('amadeo/images-base/logo-aquasolve.png') }}">
				<h2>PT Aquasolve Sanaria</h2>
				<p>Taman Tekno BSD</p>
				<p>Blok M 11-12</p>
				<p>Serpong, Tangerang 15314</p>
				<p>Indonesia</p>
				<p>P. +62.21.7565252</p>
				<p>F. +62.21.7565353</p>
				<p>E. info@aquasolvesanaria.com</p>
			</div>
		</div>
		<div id="sub-main" class="bar">
			<div id="contain">
				<h2>NAVIGATION</h2>
				<p>
					<a href="{{ route('frontend.home') }}">
						Home
					</a>
				</p>
				<p>
					<a href="{{ route('frontend.about') }}">
						About
					</a>
				</p>
				<p>
					<a href="{{ route('frontend.product') }}">
						Products
					</a>
				</p>
				<p>
					<a href="{{ route('frontend.solutions') }}">
						Solutions
					</a>
				</p>
				<p>
					<a href="{{ route('frontend.news') }}">
						News
					</a>
				</p>
				<p>
					<a href="{{ route('frontend.careers') }}">
						Career
					</a>
				</p>
				<p>
					<a href="{{ route('frontend.contact') }}">
						Contact
					</a>
				</p>
			</div>
		</div>
		<div id="sub-main" class="bar">
			<div id="contain">
				<h2>PRODUCTS</h2>
				<p>
					<a href="{{ route('frontend.product.select', ['slug'=>'go-fress']) }}">
						Go Fress
					</a>
				</p>
				<p>
					<a href="{{ route('frontend.product.select', ['slug'=>'ice-n-cool']) }}">
						Ice N Cool
					</a>
				</p>
				<p>
					<a href="{{ route('frontend.product.select', ['slug'=>'wake-up']) }}">
						Wake Up!
					</a>
				</p>
				<p>
					<a href="{{ route('frontend.product.select', ['slug'=>'herbafress']) }}">
						Herbafress
					</a>
				</p>
			</div>
		</div>
		<div id="sub-main" class="bar">
			<div id="contain">
				<h2>SOLUTIONS</h2>
				<p>
					<a href="{{ route('frontend.solutions') }}">
						White Lebelling
					</a>
				</p>
			</div>
		</div>
		<div class="clearfix"></div>
		<div id="copyright">
			<label>© 2017 Aquasolve Sanaria</label>
			{{--
			<br>
			<label>Web Development By <a href="http://amadeo.id/"><img src="{{ asset('amadeo/images-base/logo-amadeo.png') }}"></a></label>
			--}}
		</div>
	</div>
</div>