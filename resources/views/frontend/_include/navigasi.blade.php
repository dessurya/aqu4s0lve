<div id="navbar">
	<div id="container">
		<div id="logo" class="bar">
			<div class="valign-midle">
				<img src="{{ asset('amadeo/images-base/logo-aquasolve.png') }}">
				<div id="burger-icon">
					<div></div>
					<div></div>
					<div></div>
				</div>
			</div>
		</div>
		<div id="list" class="bar">
			<div class="valign-midle {{ Route::is('frontend.home') ? 'active' : '' }}">
				<a href="{{ route('frontend.home') }}">HOME</a>
			</div>
			<div class="valign-midle {{ Route::is('frontend.about*') ? 'active' : '' }} dropdown">
				<a href="{{ route('frontend.about') }}">ABOUT</a>
				<div id="dropdown-container">
					<div class="list">
						<a href="{{ route('frontend.about') }}#about">About Us</a>
					</div>
					<div class="list">
						<a href="{{ route('frontend.about') }}#facility">Facility</a>
					</div>
					<div class="list">
						<a href="{{ route('frontend.about') }}#vidio">Vidio</a>
					</div>
				</div>
			</div>
			<div class="valign-midle {{ Route::is('frontend.product*') ? 'active' : '' }} dropdown">
				<a href="{{ route('frontend.product') }}">PRODUCTS</a>
				<div id="dropdown-container">
					<div class="list">
						<a href="{{ route('frontend.product.select', ['slug'=>'go-fress']) }}">Go Fress</a>
					</div>
					<div class="list dropright">
						<a href="{{ route('frontend.product.select', ['slug'=>'ice-n-cool']) }}">Ice n Cool</a>
						<div id="dropright-container">
							<div class="item">
								<a href="{{ route('frontend.product.select', ['slug'=>'ice-n-cool']) }}">Herbal Mint</a>
							</div>
							<div class="item">
								<a href="{{ route('frontend.product.select', ['slug'=>'ice-n-cool']) }}">Liquorice</a>
							</div>
						</div>
					</div>
					<div class="list">
						<a href="{{ route('frontend.product.select', ['slug'=>'wake-up']) }}">Wake Up</a>
					</div>
					<div class="list">
						<a href="{{ route('frontend.product.select', ['slug'=>'herbafress']) }}">Herbafress</a>
					</div>
				</div>
			</div>
			<div class="valign-midle {{ Route::is('frontend.solutions*') ? 'active' : '' }} dropdown">
				<a href="{{ route('frontend.solutions') }}">SOLUTIONS</a>
			</div>
			<div class="valign-midle {{ Route::is('frontend.news*') ? 'active' : '' }} dropdown">
				<a href="{{ route('frontend.news') }}">NEWS</a>
			</div>
			<div class="valign-midle {{ Route::is('frontend.careers*') ? 'active' : '' }} dropdown">
				<a href="{{ route('frontend.careers') }}">CAREERS</a>
			</div>
			<div class="valign-midle {{ Route::is('frontend.contact') ? 'active' : '' }}">
				<a href="{{ route('frontend.contact') }}">CONTACTS</a>
			</div>
		</div>
		<div class="clearfix"></div>
	</div>
</div>