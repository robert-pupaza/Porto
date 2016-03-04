@extends('layouts.layout')
    @section('title', "About Me")

@section('body')
<div role="main" class="main">

				<section class="page-header">
					<div class="container">
						<div class="row">
							<div class="col-md-12">
								<ul class="breadcrumb">
									<li><a href="#">Home</a></li>
									<li class="active">About Us</li>
								</ul>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<h1>About Me</h1>
							</div>
						</div>
					</div>
				</section>

				<div class="container">
					<div class="row">
						<div class="col-md-4">
							<div class="owl-carousel owl-theme" data-plugin-options='{"items": 1, "margin": 10}'>
								<div>
									<span class="img-thumbnail">
										<img alt="" height="300" class="img-responsive" src="img/team/team-3.jpg">
									</span>
								</div>
								<div>
									<span class="img-thumbnail">
										<img alt="" height="300" class="img-responsive" src="img/team/team-9.jpg">
									</span>
								</div>
							</div>
						</div>
						<div class="col-md-8">

							<h2 class="mb-none">Joe <strong>Doe</strong></h2>
							<h4 class="heading-primary">Web Designer</h4>

							<hr class="solid">

							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur pellentesque neque eget diam posuere porta. Quisque ut nulla at nunc <a href="#">vehicula</a> lacinia. Proin adipiscing porta tellus, ut feugiat nibh adipiscing sit amet. In eu justo a felis faucibus ornare vel id metus. Vestibulum ante ipsum primis in faucibus.</p>

							<ul class="list list-icons">
								<li><i class="fa fa-check"></i> Fusce sit amet orci quis arcu vestibulum vestibulum sed ut felis.</li>
								<li><i class="fa fa-check"></i> Phasellus in risus quis lectus iaculis vulputate id quis nisl.</li>
								<li><i class="fa fa-check"></i> Iaculis vulputate id quis nisl.</li>
							</ul>

						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<hr>
						</div>
					</div>
					<div class="row mt-xlg">
						<div class="col-md-3">
							<div class="circular-bar">
								<div class="circular-bar-chart" data-percent="75" data-plugin-options='{"barColor": "#E36159"}'>
									<strong>HTML/CSS</strong>
									<label><span class="percent">75</span>%</label>
								</div>
							</div>
						</div>
						<div class="col-md-3">
							<div class="circular-bar">
								<div class="circular-bar-chart" data-percent="85" data-plugin-options='{"barColor": "#0088CC", "delay": 300}'>
									<strong>Design</strong>
									<label><span class="percent">85</span>%</label>
								</div>
							</div>
						</div>
						<div class="col-md-3">
							<div class="circular-bar">
								<div class="circular-bar-chart" data-percent="60" data-plugin-options='{"barColor": "#2BAAB1", "delay": 600}'>
									<strong>WordPress</strong>
									<label><span class="percent">60</span>%</label>
								</div>
							</div>
						</div>
						<div class="col-md-3">
							<div class="circular-bar">
								<div class="circular-bar-chart" data-percent="95" data-plugin-options='{"barColor": "#353535", "delay": 900}'>
									<strong>Photoshop</strong>
									<label><span class="percent">95</span>%</label>
								</div>
							</div>
						</div>
					</div>
				</div>

				<section class="parallax section section-parallax section-center" data-stellar-background-ratio="0.5" style="background-image: url(img/parallax-transparent.jpg);">
					<div class="container">
						<div class="row">
							<div class="col-md-12">
								<div class="owl-carousel owl-theme nav-bottom rounded-nav mt-lg mb-none" data-plugin-options='{"items": 1, "loop": false}'>
									<div>
										<div class="col-md-12">
											<div class="testimonial testimonial-style-6 testimonial-with-quotes mb-none">
												<blockquote>
													<p>Joe Doe is the smartest guy I ever met, he provides great tech service for each template and allows me to become more knowledgeable as a designer.</p>
												</blockquote>
												<div class="testimonial-author">
													<p><strong>John Smith</strong><span>CEO & Founder - Okler</span></p>
												</div>
											</div>
										</div>
									</div>
									<div>
										<div class="col-md-12">
											<div class="testimonial testimonial-style-6 testimonial-with-quotes mb-none">
												<blockquote>
													<p>He provides great tech service for each template and allows me to become more knowledgeable as a designer.</p>
												</blockquote>
												<div class="testimonial-author">
													<p><strong>John Smith</strong><span>CEO & Founder - Okler</span></p>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>

				<div class="container">
					<div class="row">
						<div class="col-md-12">

							<h4 class="mt-xlg mb-none text-uppercase">My <strong>Work</strong></h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
								
							<div class="row">

								<ul class="portfolio-list">
									<li class="col-md-3 col-sm-6 col-xs-12">
										<div class="portfolio-item">
											<a href="portfolio-single-small-slider.html">
												<span class="thumb-info thumb-info-lighten">
													<span class="thumb-info-wrapper">
														<img src="img/projects/project.jpg" class="img-responsive" alt="">
														<span class="thumb-info-title">
															<span class="thumb-info-inner">Presentation</span>
															<span class="thumb-info-type">Brand</span>
														</span>
														<span class="thumb-info-action">
															<span class="thumb-info-action-icon"><i class="fa fa-link"></i></span>
														</span>
													</span>
												</span>
											</a>
										</div>
									</li>
									<li class="col-md-3 col-sm-6 col-xs-12">
										<div class="portfolio-item">
											<a href="portfolio-single-small-slider.html">
												<span class="thumb-info thumb-info-lighten">
													<span class="thumb-info-wrapper">
														<img src="img/projects/project-2.jpg" class="img-responsive" alt="">
														<span class="thumb-info-title">
															<span class="thumb-info-inner">Identity</span>
															<span class="thumb-info-type">Logo</span>
														</span>
														<span class="thumb-info-action">
															<span class="thumb-info-action-icon"><i class="fa fa-link"></i></span>
														</span>
													</span>
												</span>
											</a>
										</div>
									</li>
									<li class="col-md-3 col-sm-6 col-xs-12">
										<div class="portfolio-item">
											<a href="portfolio-single-small-slider.html">
												<span class="thumb-info thumb-info-lighten">
													<span class="thumb-info-wrapper">
														<img src="img/projects/project-3.jpg" class="img-responsive" alt="">
														<span class="thumb-info-title">
															<span class="thumb-info-inner">Watch Mockup</span>
															<span class="thumb-info-type">Brand</span>
														</span>
														<span class="thumb-info-action">
															<span class="thumb-info-action-icon"><i class="fa fa-link"></i></span>
														</span>
													</span>
												</span>
											</a>
										</div>
									</li>
									<li class="col-md-3 col-sm-6 col-xs-12">
										<div class="portfolio-item">
											<a href="portfolio-single-small-slider.html">
												<span class="thumb-info thumb-info-lighten">
													<span class="thumb-info-wrapper">
														<img src="img/projects/project-4.jpg" class="img-responsive" alt="">
														<span class="thumb-info-title">
															<span class="thumb-info-inner">Three Bottles</span>
															<span class="thumb-info-type">Logo</span>
														</span>
														<span class="thumb-info-action">
															<span class="thumb-info-action-icon"><i class="fa fa-link"></i></span>
														</span>
													</span>
												</span>
											</a>
										</div>
									</li>
								</ul>

							</div>
						</div>
					</div>
				</div>

			</div>

@endsection