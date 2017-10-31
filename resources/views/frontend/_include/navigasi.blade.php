<div id="navbar">
	<div id="container">
		<div id="logo" class="bar">
			<div class="valign-midle">
				<img src="{{ asset('amadeo/images-base/logo-aquasolve.png') }}">
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
			<div class="valign-midle dropdown">
				<a href="">PRODUCTS</a>
				<div id="dropdown-container">
					<div class="list">
						<a href="">Go Fress</a>
					</div>
					<div class="list dropright">
						<a href="">Ice n Cool</a>
						<div id="dropright-container">
							<div class="item">
								<a href="">Herbal Mint</a>
							</div>
							<div class="item">
								<a href="">Liquorice</a>
							</div>
						</div>
					</div>
					<div class="list">
						<a href="">Wake Up</a>
					</div>
					<div class="list">
						<a href="">Herbafress</a>
					</div>
				</div>
			</div>
			<div class="valign-midle">
				<a href="">SOLUTIONS</a>
			</div>
			<div class="valign-midle">
				<a href="">NEWS</a>
			</div>
			<div class="valign-midle">
				<a href="">CAREERS</a>
			</div>
			<div class="valign-midle {{ Route::is('frontend.contact') ? 'active' : '' }}">
				<a href="{{ route('frontend.contact') }}">CONTACTS</a>
			</div>
		</div>
		<div class="clearfix"></div>
	</div>
</div>