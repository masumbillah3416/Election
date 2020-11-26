	
	
	 <link rel="preconnect" href="https://fonts.gstatic.com">
	 <link href="https://fonts.googleapis.com/css2?family=Goldman:wght@700&family=Oswald:wght@700&display=swap" rel="stylesheet"> 
	 
	 
	 {{-- Home
	About 
	Event
	Donation
	Our Programs
		- Jummah Kutba
		- Darse Bukhari
		- Darse Quran
		- special Event
	MMC Members
		- Life Members
		- General Members
		- Executive Committee
	BOT 
	Imams
	
	
	 --}}			
			
			
			
{{-- 			
			<!-- Header -->
			<header id="header-area" class="header-area fixed--header sticky--header">
				<div class="container">
					<div class="header header--style-1">
						<div class="logo image--logo hidden-md hidden-sm hidden-xs">
							<a href="{{ route('home') }}"><img src="{{ asset('abasas/images/logo/MMC_Title_logo-removebg-preview.png') }}" alt="header logo"></a>
						</div>
						<div class="header__right">
							<div class="header__right__top d-flex justify-content-end align-items-center flex-wrap flex-sm-nowrap">
								<ul class="header__right__times d-flex justify-content-end">
									<li><p><i class="icofont icofont-full-sunny"></i>SUNRISE : <span class="time-sunrise"></span></p></li>
									<li><p><i class="icofont icofont-full-night"></i>SUNSET : <span class="time-sunset"></span></p></li>
								</ul>
								{{-- <ul class="header__right__icons d-flex justify-content-end">
									<li class="minicart-trigger"><a href="#"><i class="fa fa-opencart"></i><span class="cart-counter">2</span></a></li>
									<li class="accountbox-trigger"><a href="#"><i class="fa fa-user-o"></i></a></li>
								</ul> 
							</div>
							<div class="header__right__bottom">
								
								<!-- Main naviagtion -->
								<nav class="menu">
									<ul class="justify-content-end">
										
										<li><a href="{{ route('home') }}">HOME</a></li>

										
										<li class="cr-dropdown"><a href="{{ route('about.index') }}">About</a>
											<ul class="cr-dropdown-menu">
												<li><a href="{{ route('about.index') }}/#imam">Imam</a></li>
												<li><a href="{{ route('gallery') }}">Gallery</a></li>
												
											</ul>
										</li>
										
										<li class="cr-dropdown"><a href="">MMC Members</a>
											<ul class="cr-dropdown-menu">
												<li><a href="">Life Members</a></li>
												<li><a href="">General Members</a></li>
												<li><a href="">Executive Committee</a></li>
												<li><a href="">Board Of Treasures</a></li>
												
											</ul>
										</li>
										<li><a href="{{ route('events') }}">EVENT</a></li>
										<li><a href="{{ route('donations') }}">DONATION</a></li>

										<li class="cr-dropdown"><a href="{{ route('programs') }}">OUR PROGRAMS</a>
											<ul class="cr-dropdown-menu">
												<li><a href="{{ route('program-category',1) }}">Jummah Kutba</a></li>
												<li><a href="{{ route('program-category',2) }}">Darse Bukhari</a></li>
												<li><a href="{{ route('program-category',3) }}">Darse Quran</a></li>
												<li><a href="{{ route('program-category',4) }}">Special Event</a></li>
											</ul>
										</li>
										
										<li><a href="{{ route('praying-time') }}">Praying Times</a></li>
										<li><a href="{{ route('blogs') }}">Blog</a></li>
									
									</ul>
								</nav><!-- //Main naviagtion -->                                                                            

							</div>
						</div>
						<div class="mobile-menu hidden-lg hidden-xlg hidden-xx hidden-sp">
							<a class="mobile-logo" href="{{ route('home') }}"><img src="{{ asset('abasas/images/logo/MMC_Title_logo-removebg-preview.png') }}" alt="logo"></a>
						</div>
					</div>
				</div>
			</header> 
			--}}


	
			<!-- Header -->
			<header id="header-area" class="header-area sticky--header">
				<div class="header header--style-2">
					<!-- Header Top Area <-->
					<div class="header__top bg--theme">
						<div class="container">
							<div class="header__top__inner">
								<div class="logo image--logo ">
									<a href="{{ route('home') }}" id="desktopLogoTop"><img src="{{ asset('abasas/images/logo/MMC_Title_logo-removebg-preview.png') }}" alt="header logo"></a>
								</div>
								<div class="text-center" >
									<span id="mobileLogoTop" >
										<a href="{{ route('home') }}" ><img src="{{ asset('abasas/images/logo/MMC_Title_logo-removebg-preview.png') }}" alt="header logo"></a>
									</span>
									
								<div class="title"  >MASJID MISSION CENTER INC.</div>
								<div class="subTitle" > (HAJI CAMP MASJID USA )</div>
								<div class="address" >87-26 175th St, jamaica, NY 11432, Phone : 718-526-2451,718-526-2471</div>
								<div class="address" >masjidmissioncenterusa@gmail.com</div>
							</div>
								<div class="header__right">
									{{-- <div class="header__right__top d-flex justify-content-end align-items-center flex-wrap flex-sm-nowrap">
										<ul class="header__right__times d-flex justify-content-end">
											<li><p><i class="icofont icofont-full-sunny"></i>SUNRISE : <span class="time-sunrise"></span></p></li>
											<li><p><i class="icofont icofont-full-night"></i>SUNSET : <span class="time-sunset"></span></p></li>
										</ul>
										 <ul class="header__right__icons d-flex justify-content-end">
											<li class="minicart-trigger"><a href="#"><i class="fa fa-opencart"></i><span class="cart-counter">2</span></a></li>
											<li class="accountbox-trigger"><a href="#"><i class="fa fa-user-o"></i></a></li>
										</ul> 
									</div> --}}
								</div>
							</div>
						</div>
					</div><!-- //Header Top Area -->
					
					<!-- Header Bottom Area -->
					<div class="header__bottom bg--white">
						<div class="container">
							<div class="row">
								<div class="col-lg-12">
									<!-- Main naviagtion -->
									<nav class="menu">
										<ul class="justify-content-end">
										
											<li><a href="{{ route('home') }}">HOME</a></li>
	
											
											<li class="cr-dropdown"><a href="{{ route('about.index') }}">About</a>
												<ul class="cr-dropdown-menu">
													<li><a href="{{ route('about.index') }}/#imam">Imam</a></li>
													<li><a href="{{ route('about.index') }}/#about">About MMC</a></li>
													<li><a href="{{ route('gallery') }}">Gallery</a></li>
													
												</ul>
											</li>
											
											<li class="cr-dropdown"><a >MMC Members</a>
												<ul class="cr-dropdown-menu">
													<li><a href="{{ route('mmc-type',1)}}">Life Members</a></li>
													<li><a href="{{ route('mmc-type',2)}}">General Members</a></li>
													<li><a href="{{ route('executive') }}">Executive Committee</a></li>
													
													<li><a href="{{ route('mmc-type',4)}}">BOT </a></li>
													
												</ul>
											</li>
											<li><a href="{{ route('events') }}">EVENT</a></li>
										
	
											<li ><a href="{{ route('programs') }}">OUR PROGRAMS</a>
										
											</li>
											
											<li><a href="{{ route('praying-time') }}">Praying Times</a></li>
											{{-- <li><a href="">Blog</a></li> --}}

											<li class="cr-dropdown"><a href="{{ route('blogs') }}">Blog</a>
												<ul class="cr-dropdown-menu">
													<li><a href="{{ route('program-category',1) }}">Jummah Kutba</a></li>
													<li><a href="{{ route('program-category',2) }}">Darse Bukhari</a></li>
													<li><a href="{{ route('program-category',3) }}">Darse Quran</a></li>
													<li><a href="{{ route('program-category',4) }}">Special Event</a></li>
													<li><a href="{{ route('blogs') }}">Other</a></li>
												</ul>
											</li>
											{{-- <li> <a href="{{ route('donations') }}#donate" class="cr-btn  cr-btn--light cr-btn--sm"><span>Donate Now</span></a></li> --}}
											<a href="{{ route('donations') }}#donate" class="cr-btn  cr-btn--light cr-btn--sm" style=" margin:10px 0"><span>Donate </span></a>
										</ul>
										{{-- <a href="{{ route('donations') }}#donate" class="cr-btn  cr-btn--light cr-btn--sm"><span>Donate Now</span></a> --}}
									</nav><!-- //Main naviagtion --> 

									<!-- Mobile Menu -->
									<div class="mobile-menu hidden-lg hidden-xlg hidden-xx hidden-sp">
										<a class="mobile-logo" href="{{ route('home') }}"><img src="{{ asset('abasas/images/logo/MMC_Title_logo-removebg-preview.png') }}" alt="logo"></a>
									</div><!-- //Mobile Menu -->

								</div>
							</div>
						</div>

					</div>
					<!-- //Header Bottom Area -->
					
					

				</div>
			</header><!-- //Header -->
