@extends('layouts.layout')
    @section('title', "Portfolio")

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
								<h1>Ajax on Modal</h1>
							</div>
						</div>
					</div>
				</section>

				<div class="container">

					<ul class="nav nav-pills sort-source" data-sort-id="portfolio" data-option-key="filter" data-plugin-options='{"layoutMode": "fitRows", "filter": "*"}'>
						<li data-option-value="*" class="active"><a href="#">Show All</a></li>
						<li data-option-value=".websites"><a href="#">Websites</a></li>
						<li data-option-value=".logos"><a href="#">Logos</a></li>
						<li data-option-value=".brands"><a href="#">Brands</a></li>
						<li data-option-value=".medias"><a href="#">Medias</a></li>
					</ul>

					<hr>

					<div class="row">

						<ul class="portfolio-list sort-destination popup-gallery-ajax" data-sort-id="portfolio">
							<li class="col-md-3 col-sm-6 col-xs-12 isotope-item brands">
								<div class="portfolio-item">
									<a href="{{URL::asset('project1')}}" data-ajax-on-modal>
										<span class="thumb-info thumb-info-lighten">
											<span class="thumb-info-wrapper">
												<img src="img/projects/project.jpg" class="img-responsive" alt="">
												<span class="thumb-info-title">
													<span class="thumb-info-inner">Presentation</span>
													<span class="thumb-info-type">Brand</span>
												</span>
												<span class="thumb-info-action">
													<span class="thumb-info-action-icon"><i class="fa fa-plus-square"></i></span>
												</span>
											</span>
										</span>
									</a>
								</div>
							</li>
							<li class="col-md-3 col-sm-6 col-xs-12 isotope-item medias">
								<div class="portfolio-item">
									<a href="{{URL::asset('project2')}}" data-ajax-on-modal>
										<span class="thumb-info thumb-info-lighten">
											<span class="thumb-info-wrapper">
												<img src="img/projects/project-1.jpg" class="img-responsive" alt="">
												<span class="thumb-info-title">
													<span class="thumb-info-inner">Porto Watch</span>
													<span class="thumb-info-type">Media</span>
												</span>
												<span class="thumb-info-action">
													<span class="thumb-info-action-icon"><i class="fa fa-plus-square"></i></span>
												</span>
											</span>
										</span>
									</a>
								</div>
							</li>
							<li class="col-md-3 col-sm-6 col-xs-12 isotope-item logos">
								<div class="portfolio-item">
									<a href="{{URL::asset('project3')}}" data-ajax-on-modal>
										<span class="thumb-info thumb-info-lighten">
											<span class="thumb-info-wrapper">
												<img src="img/projects/project-2.jpg" class="img-responsive" alt="">
												<span class="thumb-info-title">
													<span class="thumb-info-inner">Identity</span>
													<span class="thumb-info-type">Logo</span>
												</span>
												<span class="thumb-info-action">
													<span class="thumb-info-action-icon"><i class="fa fa-plus-square"></i></span>
												</span>
											</span>
										</span>
									</a>
								</div>
							</li>
							<li class="col-md-3 col-sm-6 col-xs-12 isotope-item brands">
								<div class="portfolio-item">
									<a href="{{URL::asset('project4')}}" data-ajax-on-modal>
										<span class="thumb-info thumb-info-lighten">
											<span class="thumb-info-wrapper">
												<img src="img/projects/project-3.jpg" class="img-responsive" alt="">
												<span class="thumb-info-title">
													<span class="thumb-info-inner">Watch Mockup</span>
													<span class="thumb-info-type">Brand</span>
												</span>
												<span class="thumb-info-action">
													<span class="thumb-info-action-icon"><i class="fa fa-plus-square"></i></span>
												</span>
											</span>
										</span>
									</a>
								</div>
							</li>
							<li class="col-md-3 col-sm-6 col-xs-12 isotope-item logos">
								<div class="portfolio-item">
									<a href="{{URL::asset('project5')}}" data-ajax-on-modal>
										<span class="thumb-info thumb-info-lighten">
											<span class="thumb-info-wrapper">
												<img src="img/projects/project-4.jpg" class="img-responsive" alt="">
												<span class="thumb-info-title">
													<span class="thumb-info-inner">Three Bottles</span>
													<span class="thumb-info-type">Logo</span>
												</span>
												<span class="thumb-info-action">
													<span class="thumb-info-action-icon"><i class="fa fa-plus-square"></i></span>
												</span>
											</span>
										</span>
									</a>
								</div>
							</li>
							<li class="col-md-3 col-sm-6 col-xs-12 isotope-item brands">
								<div class="portfolio-item">
									<a href="{{URL::asset('project6')}}" data-ajax-on-modal>
										<span class="thumb-info thumb-info-lighten">
											<span class="thumb-info-wrapper">
												<img src="img/projects/project-5.jpg" class="img-responsive" alt="">
												<span class="thumb-info-title">
													<span class="thumb-info-inner">Company T-Shirt</span>
													<span class="thumb-info-type">Brand</span>
												</span>
												<span class="thumb-info-action">
													<span class="thumb-info-action-icon"><i class="fa fa-plus-square"></i></span>
												</span>
											</span>
										</span>
									</a>
								</div>
							</li>
							<li class="col-md-3 col-sm-6 col-xs-12 isotope-item websites">
								<div class="portfolio-item">
									<a href="{{URL::asset('project7')}}" data-ajax-on-modal>
										<span class="thumb-info thumb-info-lighten">
											<span class="thumb-info-wrapper">
												<img src="img/projects/project-6.jpg" class="img-responsive" alt="">
												<span class="thumb-info-title">
													<span class="thumb-info-inner">Mobile Mockup</span>
													<span class="thumb-info-type">Website</span>
												</span>
												<span class="thumb-info-action">
													<span class="thumb-info-action-icon"><i class="fa fa-plus-square"></i></span>
												</span>
											</span>
										</span>
									</a>
								</div>
							</li>
							<li class="col-md-3 col-sm-6 col-xs-12 isotope-item medias">
								<div class="portfolio-item">
									<a href="{{URL::asset('project8')}}" data-ajax-on-modal>
										<span class="thumb-info thumb-info-lighten">
											<span class="thumb-info-wrapper">
												<img src="img/projects/project-7.jpg" class="img-responsive" alt="">
												<span class="thumb-info-title">
													<span class="thumb-info-inner">Porto Label</span>
													<span class="thumb-info-type">Media</span>
												</span>
												<span class="thumb-info-action">
													<span class="thumb-info-action-icon"><i class="fa fa-plus-square"></i></span>
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

@endsection