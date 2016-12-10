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
<<<<<<< HEAD
                            <!--<?php print_r($portfolio)?>-->
							@foreach($portfolio as $port)
                            {{$port->images(0)->url}}
                            @foreach($port->images as $k => $image)
                            @if($k == 0)
                            {{$image->url}}
                            @endif
                            @endforeach
                            @foreach($port->skills as $k => $skill)
                            @if($k == 0)
                            {{$skill->name}}
                            @endif
                            @endforeach

=======
							@foreach($portfolio as $k => $port)

                            {{--@foreach($port->skills() as skill)
                            {{$skill}}
                            @endforeach--}}
>>>>>>> Images prortfolio working

                                <li class="col-md-3 col-sm-6 col-xs-12 isotope-item brands">
                                    <div class="portfolio-item">
                                        <a href="{{URL::asset('project1')}}" data-ajax-on-modal>
                                            <span class="thumb-info thumb-info-lighten">
                                                <span class="thumb-info-wrapper">
<<<<<<< HEAD
                                                    <img src="" class="img-responsive" alt="">
=======

                                                    <img src="{{$port["images"] ? $port["images"][0]["url"] : "/default.jpg" }}" class="img-responsive" alt="">

>>>>>>> Images prortfolio working
                                                    <span class="thumb-info-title">
                                                        <span class="thumb-info-inner"> {{ $port["name"] }}</span>
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

                            @endforeach

						</ul>
					</div>

				</div>

			</div>

@endsection
