@extends('layouts.homeLayout')
    @section('title', "Home")
    
    @section('body')
         <div role="main" class="main">
				<div class="slider-container rev_slider_wrapper" style="height: 1000px;">
					<div id="revolutionSlider" class="slider rev_slider" data-plugin-revolution-slider data-plugin-options='{"sliderLayout": "fullscreen", "fullScreenOffsetContainer": "", "fullScreenOffset": "0"}'>
						<ul>
							<li data-transition="fade">
								<img src="img/slides/slide-bg-full.jpg"  
									alt=""
									data-bgposition="center center" 
									data-bgfit="cover" 
									data-bgrepeat="no-repeat" 
									class="rev-slidebg">

								<div class="tp-caption"
									data-x="center" data-hoffset="-150"
									data-y="center" data-voffset="-95"
									data-start="1000"
									style="z-index: 5"
									data-transform_in="x:[-300%];opacity:0;s:500;"><img src="img/slides/slide-title-border.png" alt=""></div>

								<div class="tp-caption top-label"
									data-x="center" data-hoffset="0"
									data-y="center" data-voffset="-95"
									data-start="500"
									style="z-index: 5"
									data-transform_in="y:[-300%];opacity:0;s:500;">DO YOU NEED A NEW</div>

								<div class="tp-caption"
									data-x="center" data-hoffset="150"
									data-y="center" data-voffset="-95"
									data-start="1000"
									style="z-index: 5"
									data-transform_in="x:[300%];opacity:0;s:500;"><img src="img/slides/slide-title-border.png" alt=""></div>

								<div class="tp-caption main-label"
									data-x="center" data-hoffset="0"
									data-y="center" data-voffset="-45"
									data-start="1500"
									data-whitespace="nowrap"						 
									data-transform_in="y:[100%];s:500;"
									data-transform_out="opacity:0;s:500;"
									style="z-index: 5"
									data-mask_in="x:0px;y:0px;">WEB DESIGN?</div>

								<div class="tp-caption bottom-label"
									data-x="center" data-hoffset="0"
									data-y="center" data-voffset="5"
									data-start="2000"
									style="z-index: 5"
									data-transform_in="y:[100%];opacity:0;s:500;">Check out our options and features.</div>

								<a class="tp-caption btn btn-lg btn-primary btn-slider-action"
									data-hash
									data-hash-offset="85"
									href="#home-intro"
									data-x="center" data-hoffset="0"
									data-y="center" data-voffset="80"
									data-start="2200"
									data-whitespace="nowrap"						 
									data-transform_in="y:[100%];s:500;"
									data-transform_out="opacity:0;s:500;"
									style="z-index: 5"
									data-mask_in="x:0px;y:0px;">Get Started Now!</a>
								
							</li>
						</ul>
					</div>
				</div>

				<div id="intro">
					<header id="header" class="header-narrow" data-plugin-options='{"stickyEnabled": true, "stickyEnableOnBoxed": true, "stickyEnableOnMobile": true, "stickyStartAtElement": "#header", "stickySetTop": "0", "stickyChangeLogo": false}'>
						<div class="header-body">
							<div class="header-container container">
								<div class="header-row">
									<div class="header-column">
										<div class="header-logo">
											<a href="index.html">
												<img alt="Porto" width="82" height="40" src="img/logo.png">
											</a>
										</div>
									</div>
									<div class="header-column">
										<div class="header-row">
											<div class="header-nav">
												<button class="btn header-btn-collapse-nav" data-toggle="collapse" data-target=".header-nav-main">
													<i class="fa fa-bars"></i>
												</button>
												<ul class="header-social-icons social-icons hidden-xs">
													<li class="social-icons-facebook"><a href="http://www.facebook.com/" target="_blank" title="Facebook"><i class="fa fa-facebook"></i></a></li>
													<li class="social-icons-twitter"><a href="http://www.twitter.com/" target="_blank" title="Twitter"><i class="fa fa-twitter"></i></a></li>
													<li class="social-icons-linkedin"><a href="http://www.linkedin.com/" target="_blank" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
												</ul>
												<div class="header-nav-main header-nav-main-effect-1 header-nav-main-sub-effect-1 collapse">
													<nav>
														<ul class="nav nav-pills" id="mainNav">
                                                            <li class="">
																<a class="" href="{{URL::asset('/')}}">
																	Home
																</a>
															</li>
                                                            <li class="">
																<a class="" href="{{URL::asset('services')}}">
																	Services
																</a>
															</li>
                                                            <li class="">
																<a class="" href="{{URL::asset('portfolio')}}">
																	Portfolio
																</a>
															</li>
															<li class="dropdown">
																<a class="dropdown-toggle" href="#">
																	About
																</a>
																<ul class="dropdown-menu">
																	<li><a href="{{URL::asset('about-work')}}">About Work</a></li>
																	<li><a href="{{URL::asset('about-me')}}">About Me</a></li>
																</ul>
															</li>
															<li class="">
																<a class="" href="{{URL::asset('contact')}}">
																	Contact Me
																</a>
															</li>
														</ul>
													</nav>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</header>
				</div>

				<div class="home-intro" id="home-intro">
					<div class="container">
				
						<div class="row">
							<div class="col-md-8">
								<p>
									The fastest way to grow your business with the leader in <em>Technology</em>
									<span>Check out our options and features included.</span>
								</p>
							</div>
							<div class="col-md-4">
								<div class="get-started">
									<a href="#" class="btn btn-lg btn-primary">Get Started Now!</a>
									<div class="learn-more">or <a href="index.html">learn more.</a></div>
								</div>
							</div>
						</div>
				
					</div>
				</div>
				
				<div class="container">
				
					<div class="row center">
						<div class="col-md-12">
							<h1 class="mb-sm word-rotator-title">
								Porto is
								<strong class="inverted">
									<span class="word-rotate" data-plugin-options='{"delay": 2000, "animDelay": 300}'>
										<span class="word-rotate-items">
											<span>incredibly</span>
											<span>especially</span>
											<span>extremely</span>
										</span>
									</span>
								</strong>
								beautiful and fully responsive.
							</h1>
							<p class="lead">
								Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce elementum, nulla vel pellentesque consequat, ante nulla hendrerit arcu, ac tincidunt mauris lacus sed leo. vamus suscipit molestie vestibulum.
							</p>
						</div>
					</div>
				
				</div>
				
				<div class="home-concept">
					<div class="container">
				
						<div class="row center">
							<span class="sun"></span>
							<span class="cloud"></span>
							<div class="col-md-2 col-md-offset-1">
								<div class="process-image appear-animation" data-appear-animation="bounceIn">
									<img src="img/home-concept-item-1.png" alt="" />
									<strong>Strategy</strong>
								</div>
							</div>
							<div class="col-md-2">
								<div class="process-image appear-animation" data-appear-animation="bounceIn" data-appear-animation-delay="200">
									<img src="img/home-concept-item-2.png" alt="" />
									<strong>Planning</strong>
								</div>
							</div>
							<div class="col-md-2">
								<div class="process-image appear-animation" data-appear-animation="bounceIn" data-appear-animation-delay="400">
									<img src="img/home-concept-item-3.png" alt="" />
									<strong>Build</strong>
								</div>
							</div>
							<div class="col-md-4 col-md-offset-1">
								<div class="project-image">
									<div id="fcSlideshow" class="fc-slideshow">
										<ul class="fc-slides">
											<li><a href="portfolio-single-small-slider.html"><img class="img-responsive" src="img/projects/project-home-1.jpg" alt="" /></a></li>
											<li><a href="portfolio-single-small-slider.html"><img class="img-responsive" src="img/projects/project-home-2.jpg" alt="" /></a></li>
											<li><a href="portfolio-single-small-slider.html"><img class="img-responsive" src="img/projects/project-home-3.jpg" alt="" /></a></li>
										</ul>
									</div>
									<strong class="our-work">Our Work</strong>
								</div>
							</div>
						</div>
				
					</div>
				</div>
				
				<div class="container">
				
					<div class="row">
						<hr class="tall">
					</div>
				
				</div>
				
				<div class="container">
				
					<div class="row">
						<div class="col-md-8">
							<h2>Our <strong>Features</strong></h2>
							<div class="row">
								<div class="col-sm-6">
									<div class="feature-box">
										<div class="feature-box-icon">
											<i class="fa fa-group"></i>
										</div>
										<div class="feature-box-info">
											<h4 class="heading-primary mb-none">Customer Support</h4>
											<p class="tall">Lorem ipsum dolor sit amet, consectetur adip.</p>
										</div>
									</div>
									<div class="feature-box">
										<div class="feature-box-icon">
											<i class="fa fa-file"></i>
										</div>
										<div class="feature-box-info">
											<h4 class="heading-primary mb-none">HTML5 / CSS3 / JS</h4>
											<p class="tall">Lorem ipsum dolor sit amet, adip.</p>
										</div>
									</div>
									<div class="feature-box">
										<div class="feature-box-icon">
											<i class="fa fa-google-plus"></i>
										</div>
										<div class="feature-box-info">
											<h4 class="heading-primary mb-none">500+ Google Fonts</h4>
											<p class="tall">Lorem ipsum dolor sit amet, consectetur adip.</p>
										</div>
									</div>
									<div class="feature-box">
										<div class="feature-box-icon">
											<i class="fa fa-adjust"></i>
										</div>
										<div class="feature-box-info">
											<h4 class="heading-primary mb-none">Colors</h4>
											<p class="tall">Lorem ipsum dolor sit amet, consectetur adip.</p>
										</div>
									</div>
								</div>
								<div class="col-sm-6">
									<div class="feature-box">
										<div class="feature-box-icon">
											<i class="fa fa-film"></i>
										</div>
										<div class="feature-box-info">
											<h4 class="heading-primary mb-none">Sliders</h4>
											<p class="tall">Lorem ipsum dolor sit amet, consectetur.</p>
										</div>
									</div>
									<div class="feature-box">
										<div class="feature-box-icon">
											<i class="fa fa-user"></i>
										</div>
										<div class="feature-box-info">
											<h4 class="heading-primary mb-none">Icons</h4>
											<p class="tall">Lorem ipsum dolor sit amet, consectetur adip.</p>
										</div>
									</div>
									<div class="feature-box">
										<div class="feature-box-icon">
											<i class="fa fa-bars"></i>
										</div>
										<div class="feature-box-info">
											<h4 class="heading-primary mb-none">Buttons</h4>
											<p class="tall">Lorem ipsum dolor sit, consectetur adip.</p>
										</div>
									</div>
									<div class="feature-box">
										<div class="feature-box-icon">
											<i class="fa fa-desktop"></i>
										</div>
										<div class="feature-box-info">
											<h4 class="heading-primary mb-none">Lightbox</h4>
											<p class="tall">Lorem sit amet, consectetur adip.</p>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<h2>and more...</h2>
				
							<div class="panel-group" id="accordion">
								<div class="panel panel-default">
									<div class="panel-heading">
										<h4 class="panel-title">
											<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
												<i class="fa fa-usd"></i>
												Pricing Tables
											</a>
										</h4>
									</div>
									<div id="collapseOne" class="accordion-body collapse in">
										<div class="panel-body">
											Donec tellus massa, tristique sit amet condim vel, facilisis quis sapien. Praesent id enim sit amet odio vulputate eleifend in in tortor.
										</div>
									</div>
								</div>
								<div class="panel panel-default">
									<div class="panel-heading">
										<h4 class="panel-title">
											<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
												<i class="fa fa-comment"></i>
												Contact Forms
											</a>
										</h4>
									</div>
									<div id="collapseTwo" class="accordion-body collapse">
										<div class="panel-body">
											Donec tellus massa, tristique sit amet condimentum vel, facilisis quis sapien.
										</div>
									</div>
								</div>
								<div class="panel panel-default">
									<div class="panel-heading">
										<h4 class="panel-title">
											<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
												<i class="fa fa-laptop"></i>
												Portfolio Pages
											</a>
										</h4>
									</div>
									<div id="collapseThree" class="accordion-body collapse">
										<div class="panel-body">
											Donec tellus massa, tristique sit amet condimentum vel, facilisis quis sapien.
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				
					<hr class="tall">
				
					<div class="row center">
						<div class="col-md-12">
							<h2 class="mb-sm word-rotator-title">
								We're not the only ones
								<strong>
									<span class="word-rotate" data-plugin-options='{"delay": 3500, "animDelay": 400}'>
										<span class="word-rotate-items">
											<span>excited</span>
											<span>happy</span>
										</span>
									</span>
								</strong>
								about Porto Template...
							</h2>
							<h4 class="heading-primary lead tall">20,000 customers in 100 countries use Porto Template. Meet our customers.</h4>
						</div>
					</div>
				
					<div class="row center">
						<div class="owl-carousel owl-theme" data-plugin-options='{"items": 6, "autoplay": true, "autoplayTimeout": 3000}'>
							<div>
								<img class="img-responsive" src="img/logos/logo-1.png" alt="">
							</div>
							<div>
								<img class="img-responsive" src="img/logos/logo-2.png" alt="">
							</div>
							<div>
								<img class="img-responsive" src="img/logos/logo-3.png" alt="">
							</div>
							<div>
								<img class="img-responsive" src="img/logos/logo-4.png" alt="">
							</div>
							<div>
								<img class="img-responsive" src="img/logos/logo-5.png" alt="">
							</div>
							<div>
								<img class="img-responsive" src="img/logos/logo-6.png" alt="">
							</div>
							<div>
								<img class="img-responsive" src="img/logos/logo-4.png" alt="">
							</div>
							<div>
								<img class="img-responsive" src="img/logos/logo-2.png" alt="">
							</div>
						</div>
					</div>
				
				</div>
				
				<section class="section section-custom-map">
					<section class="section section-default section-footer">
						<div class="container">
							<div class="row">
								<div class="col-md-6">
									<div class="recent-posts mb-xl">
										<h2>Latest <strong>Blog</strong> Posts</h2>
										<div class="row">
											<div class="owl-carousel owl-theme mb-none" data-plugin-options='{"items": 1}'>
												<div>
													<div class="col-md-6">
														<article>
															<div class="date">
																<span class="day">15</span>
																<span class="month">Jan</span>
															</div>
															<h4 class="heading-primary"><a href="blog-post.html">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a></h4>
															<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec hendrerit vehicula est, in consequat libero. <a href="/" class="read-more">read more <i class="fa fa-angle-right"></i></a></p>
														</article>
													</div>
													<div class="col-md-6">
														<article>
															<div class="date">
																<span class="day">15</span>
																<span class="month">Jan</span>
															</div>
															<h4 class="heading-primary"><a href="blog-post.html">Lorem ipsum dolor</a></h4>
															<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec hendrerit vehicula est, in consequat. <a href="/" class="read-more">read more <i class="fa fa-angle-right"></i></a></p>
														</article>
													</div>
												</div>
												<div>
													<div class="col-md-6">
														<article>
															<div class="date">
																<span class="day">12</span>
																<span class="month">Jan</span>
															</div>
															<h4 class="heading-primary"><a href="blog-post.html">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a></h4>
															<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec hendrerit vehicula est, in consequat libero. <a href="/" class="read-more">read more <i class="fa fa-angle-right"></i></a></p>
														</article>
													</div>
													<div class="col-md-6">
														<article>
															<div class="date">
																<span class="day">11</span>
																<span class="month">Jan</span>
															</div>
															<h4 class="heading-primary"><a href="blog-post.html">Lorem ipsum dolor</a></h4>
															<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. <a href="/" class="read-more">read more <i class="fa fa-angle-right"></i></a></p>
														</article>
													</div>
												</div>
												<div>
													<div class="col-md-6">
														<article>
															<div class="date">
																<span class="day">15</span>
																<span class="month">Jan</span>
															</div>
															<h4 class="heading-primary"><a href="blog-post.html">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a></h4>
															<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec hendrerit vehicula est, in consequat libero. <a href="/" class="read-more">read more <i class="fa fa-angle-right"></i></a></p>
														</article>
													</div>
													<div class="col-md-6">
														<article>
															<div class="date">
																<span class="day">15</span>
																<span class="month">Jan</span>
															</div>
															<h4 class="heading-primary"><a href="blog-post.html">Lorem ipsum dolor</a></h4>
															<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec hendrerit vehicula est, in consequat. <a href="/" class="read-more">read more <i class="fa fa-angle-right"></i></a></p>
														</article>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-md-6">
									<h2><strong>What</strong> Client’s Say</h2>
									<div class="row">
										<div class="owl-carousel owl-theme mb-none" data-plugin-options='{"items": 1}'>
											<div>
												<div class="col-md-12">
													<div class="testimonial testimonial-primary">
														<blockquote>
															<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec hendrerit vehicula est, in consequat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec hendrerit vehicula est, in consequat.  Donec hendrerit vehicula est, in consequat.  Donec hendrerit vehicula est, in consequat.</p>
														</blockquote>
														<div class="testimonial-arrow-down"></div>
														<div class="testimonial-author">
															<div class="testimonial-author-thumbnail img-thumbnail">
																<img src="img/clients/client-1.jpg" alt="">
															</div>
															<p><strong>John Smith</strong><span>CEO & Founder - Okler</span></p>
														</div>
													</div>
												</div>
											</div>
											<div>
												<div class="col-md-12">
													<div class="testimonial testimonial-primary">
														<blockquote>
															<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec hendrerit vehicula est, in consequat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec hendrerit vehicula est, in consequat.</p>
														</blockquote>
														<div class="testimonial-arrow-down"></div>
														<div class="testimonial-author">
															<div class="testimonial-author-thumbnail img-thumbnail">
																<img src="img/clients/client-1.jpg" alt="">
															</div>
															<p><strong>John Smith</strong><span>CEO & Founder - Okler</span></p>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</section>
				</section>
			</div>
    @endsection
