@extends('layouts.guest.master')

@section('title',$blog->meta_title)
@section('description',$blog->meta_description)
@section('keywords',$blog->meta_keyword)

@section('page_level_style')

@endsection

@section('content')

<section class="page-header" style="background-image: url(guest/images/events/event-detail-bg.jpg);">
			<div class="container">
				<ul class="list-unstyled breadcrumb-one">
					<li><a href="{{ route('homepage') }}">Home</a></li>
					<li><span>Events</span></li>
				</ul><!-- /.list-unstyled breadcrumb-one -->
				<h2 class="page-header__title">Events Details</h2>
			</div><!-- /.container -->
		</section><!-- /.page-header -->

		<section class="sec-pad-top sec-pad-bottom events-details">
			<div class="container">
				<div class="events-details__image">
					<img src="{{asset($blog->image)}}" alt="{{$blog->image_alt}}">
					<?php $date = \Carbon\Carbon::parse($blog->publish_date); ?>
					<div class="events-card__date">{{$date->format('d')}} {{$date->format('F')}}</div><!-- /.events-card__date -->

				</div><!-- /.events-details__image -->
				<div class="row gutter-y-60">
					<div class="col-lg-8">
						<div class="events-details__content">
							<h3 class="events-card__title">{{$blog->heading}}</h3><!-- /.events-card__title -->
							{!! $blog->long_description !!}
							@php
							$currentDate = \Carbon\Carbon::now()->format('Y-m-d');
                    		$publishDate = \Carbon\Carbon::parse($blog->publish_date)->format('Y-m-d');
							@endphp

							@if($currentDate >= $publishDate)
							<div class="alert alert-warning" role="alert">
							Event registration closed.
							</div>
							@else
							<a href="{{ route('eventFormView', [$blog->slug]) }}" class="thm-btn events-details__btn"><span>Register your
								seat</span></a>
							@endif

							
						</div><!-- /.events-details__content -->

						
					</div><!-- /.col-lg-8 -->
					<div class="col-lg-4">
						<div class="events-details__sidebar">
							<div class="events-details__sidebar__single">
								<div class="events-details__sidebar__info">
									<p>
										<span>Starting time:</span>
										{{ \Carbon\Carbon::createFromFormat('H:i', $blog->start_time)->format('h:i A') }} to {{ \Carbon\Carbon::createFromFormat('H:i', $blog->end_time)->format('h:i A') }}
									</p>
									<p>
										<span>Date:</span>
									
										{{ \Carbon\Carbon::parse($blog->publish_date)->format('d F, Y') }}
									</p>
									<p>
										<span>Categroy:</span>
										@foreach($blog->event_category as $category)
											{{-- <a href="#">{{$category->category_name->category_name}}</a> --}}
											<a href="#">{{$category->category_name->category_name}}</a>,
										@endforeach
									</p>
									<p>
										<span>Website:</span>
										<a href="#">@if($blog->website)
											{{$blog->website}}
											@else 
											N/A
											@endif</a>
									</p>
									<p>
										<span>Location:</span>
										{{$blog->location}}
									</p>
								</div><!-- /.events-details__sidebar__info -->
							</div><!-- /.events-details__sidebar__single -->
							<div class="events-details__sidebar__single">
								<iframe
									src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4562.753041141002!2d-118.80123790098536!3d34.152323469614075!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80e82469c2162619%3A0xba03efb7998eef6d!2sCostco+Wholesale!5e0!3m2!1sbn!2sbd!4v1562518641290!5m2!1sbn!2sbd"
									class="events-details__sidebar__map" allowfullscreen></iframe>
							</div><!-- /.events-details__sidebar__single -->

							<div class="events-details__sidebar__single">
								<div class="events-details__sidebar__social">
									<a href="#"><i class="fab fa-twitter"></i></a>
									<a href="#"><i class="fab fa-facebook"></i></a>
									<a href="#"><i class="fab fa-pinterest"></i></a>
									<a href="#"><i class="fab fa-instagram"></i></a>
								</div>
							</div><!-- /.events-details__sidebar__single -->
						</div><!-- /.events-details__sidebar -->
					</div><!-- /.col-lg-4 -->
				</div><!-- /.row -->
			</div><!-- /.container -->
		</section><!-- /.sec-pad-top sec-pad-bottom -->
@endsection

@section('page_level_script')
<script>

</script>
@endsection