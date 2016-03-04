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
									<li class="active">Portfolio</li>
								</ul>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<h1>Small Slider</h1>
							</div>
						</div>
					</div>
				</section>

				<div class="container">

					<div class="row">
						<div class="col-md-12">
							<div class="portfolio-title">
								<div class="row">
									<div class="portfolio-nav-all col-md-1">
										<a href="portfolio-single-small-slider.html" data-tooltip data-original-title="Back to list"><i class="fa fa-th"></i></a>
									</div>
									<div class="col-md-10 center">
										<h2 class="mb-none">Porto Watch</h2>
									</div>
									<div class="portfolio-nav col-md-1">
										<a href="portfolio-single-small-slider.html" class="portfolio-nav-prev" data-tooltip data-original-title="Previous"><i class="fa fa-chevron-left"></i></a>
										<a href="portfolio-single-small-slider.html" class="portfolio-nav-next" data-tooltip data-original-title="Next"><i class="fa fa-chevron-right"></i></a>
									</div>
								</div>
							</div>

							<hr class="tall">
						</div>
					</div>

					<div class="row">
						<div class="col-md-4">

							<div class="owl-carousel owl-theme" data-plugin-options='{"items": 1, "margin": 10, "animateOut": "fadeOut", "autoplay": true, "autoplayTimeout": 3000}'>
								<div>
									<span class="img-thumbnail">
										<img alt="" class="img-responsive" src="img/projects/project-1.jpg">
									</span>
								</div>
								<div>
									<span class="img-thumbnail">
										<img alt="" class="img-responsive" src="img/projects/project-1-2.jpg">
									</span>
								</div>
							</div>

						</div>

						<div class="col-md-8">

							<div class="portfolio-info">
								<div class="row">
									<div class="col-md-12 center">
										<ul>
											<li>
												<a href="#" data-tooltip data-original-title="Like"><i class="fa fa-heart"></i>14</a>
											</li>
											<li>
												<i class="fa fa-calendar"></i> 01 January 2016
											</li>
											<li>
												<i class="fa fa-tags"></i> <a href="#">Brand</a>, <a href="#">Design</a>
											</li>
										</ul>
									</div>
								</div>
							</div>

							<h5 class="mt-sm">Project Description</h5>
							<p class="mt-xlg">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tempus nibh sed elimttis adipiscing. Fusce in hendrerit purus. Suspendisse potenti. Proin quis eros odio, dapibus dictum mauris. Donec nisi libero, adipiscing id pretium eget, consectetur sit amet leo. Nam at eros quis mi egestas fringilla non nec purus.</p>

							<a href="#" class="btn btn-primary btn-icon"><i class="fa fa-external-link"></i>Live Preview</a> <span class="arrow hlb appear-animation" data-appear-animation="rotateInUpLeft" data-appear-animation-delay="800"></span>

							<ul class="portfolio-details">
								<li>
									<h5 class="mt-sm mb-xs">Skills</h5>

									<ul class="list list-inline list-icons">
										<li><i class="fa fa-check-circle"></i> Design</li>
										<li><i class="fa fa-check-circle"></i> HTML/CSS</li>
										<li><i class="fa fa-check-circle"></i> Javascript</li>
										<li><i class="fa fa-check-circle"></i> Backend</li>
									</ul>
								</li>
								<li>
									<h5 class="mt-sm mb-xs">Client</h5>
									<p>Okler Themes</p>
								</li>
							</ul>

						</div>
					</div>

				</div>

			</div>

			<section class="call-to-action call-to-action-default with-button-arrow call-to-action-in-footer">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<div class="call-to-action-content">
								<h3>Porto is <strong>everything</strong> you need to create an <strong>awesome</strong> website!</h3>
								<p>The <strong>#1 Selling</strong> HTML Site Template on ThemeForest</p>
							</div>
							<div class="call-to-action-btn">
								<a href="http://themeforest.net/item/porto-responsive-html5-template/4106987" target="_blank" class="btn btn-lg btn-primary">Buy Now!</a><span class="arrow hlb hidden-xs hidden-sm hidden-md" data-appear-animation="rotateInUpLeft" style="top: -12px;"></span>
							</div>
						</div>
					</div>
				</div>
			</section>
@endsection