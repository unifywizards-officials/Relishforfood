@extends('layouts.guest.master')

@section('page_level_style')

@endsection

@section('content')

<section class="page-header" style="background-image: url(guest/images/backgrounds/MSE-bg.png);">
			<div class="container">
				<ul class="list-unstyled breadcrumb-one">
					<li><a href="index.php">Home</a></li>
					<li><span>MSME </span></li>
				</ul><!-- /.list-unstyled breadcrumb-one -->
				<h2 class="page-header__title">Launching Dreams: Empowering Startups for Success </h2>
			</div><!-- /.container -->
		</section><!-- /.page-header -->




		<section class="about-six about-six--pad-top about-six--pad-bottom">
			<div class="about-six__bg" style="background-image: url(guest/images/backgrounds/about-six-bg-1-1.png);">
			</div><!-- /.about-six__bg -->
			<div class="about-six__shape float-bob-x"
				style="background-image: url(guest/images/shapes/about-six-s-1.png)"></div>
			<!-- /.about-six__shape -->
			<div class="container">
				<div class="row gutter-y-60">
					<div class="col-lg-6">
						<div class="about-six__images">
							<img src="{{asset('guest/images/service-images/startups/startup-side.png')}}" alt="">
							<img src="{{asset('guest/images/service-images/startups/startup-main.png')}}" alt="">
						</div><!-- /.about-six__images -->
					</div><!-- /.col-lg-6 -->
					<div class="col-lg-6">
						<div class="about-six__content">
							<div class="sec-title text-start">
								<p class="sec-title__tagline">STARTUP PROGRAMS</p><!-- /.sec-title__tagline -->
								<h2 class="sec-title__title">Building Entrepreneurship Ecosystem
								</h2>
							</div><!-- /.sec-title -->
							<div class="about-six__content__text">We connect people and organizations to the knowledge,
								networks, and companies in Punjab Angels. We leverage our 38 years of experience and our
								proven impact on a global scale – as well as our vast network in local ecosystem, to
								provide resources for both U.S. and global entrepreneurs, innovators, and business
								leaders to help build and scale your company and innovation.
							</div>
							<div class="about-six__content__text">Our customized programs for entrepreneurs, corporate
								executives, university students, and strategic partnerships with top Silicon Valley
								technology companies provide the necessary tools to drive impact and thrive in today’s
								fast-paced digital economy.
							</div>

							<!-- /.about-six__content__text -->
							<!-- /.list-unstyled about-six__list -->
							<div class="about-six__btns">
								<a href="about.php" class="thm-btn about-six__btn">
									<span>Let's Connect </span>
								</a><!-- /.thm-btn about-six__btn -->
							</div><!-- /.about-six__btns -->
						</div><!-- /.about-six__content -->
					</div><!-- /.col-lg-6 -->
				</div><!-- /.row -->
			</div><!-- /.container -->
		</section><!-- /.about-six -->


		<section class="faq-one">
			<div class="faq-one__bg"
				style="background: url(guest/images/backgrounds/FAQ-bg.png); background-size: cover;"></div>
			<!-- /.faq-one__bg -->
			<div class="container">
				<div class="row gutter-y-60">
					<div class="col-lg-6">
						<div class="faq-one__content">
							<div class="sec-title text-start">
								<p class="sec-title__tagline">Gateway of Opportunity for Startups </p>
								<!-- /.sec-title__tagline -->
								<h2 class="sec-title__title">Here Startups are in Focus: We Nurture Ideas, to Ignite
									Success </h2>
							</div><!-- /.sec-title -->

							<!-- /.faq-one__content__text -->
							<div class="accordion faq-one__accordion" id="faq-one__accordion-1">
								<div class="accordion-item faq-one__accordion__item">
									<h2 class="accordion-header faq-one__accordion__header"
										id="faq-one__accordion-1__heading-1">
										<button class="accordion-button faq-one__accordion__button" type="button"
											data-bs-toggle="collapse" data-bs-target="#faq-one__accordion-1__collapse-1"
											aria-expanded="true" aria-controls="faq-one__accordion-1__collapse-1">
											Fund Raising
											<span class="faq-one__accordion__icon"></span>
											<!-- /.faq-one__accordion__icon -->
										</button>
									</h2>
									<div id="faq-one__accordion-1__collapse-1"
										class="accordion-collapse collapse show faq-one__accordion__collapse"
										aria-labelledby="faq-one__accordion-1__heading-1"
										data-bs-parent="#faq-one__accordion-1">
										<div class="accordion-body faq-one__accordion__body">Grants from Govt. and
											Institutions, Banks and Investors </div>
									</div>
								</div>
								<div class="accordion-item faq-one__accordion__item">
									<h2 class="accordion-header faq-one__accordion__header"
										id="faq-one__accordion-1__heading-2">
										<button class="accordion-button faq-one__accordion__button collapsed"
											type="button" data-bs-toggle="collapse"
											data-bs-target="#faq-one__accordion-1__collapse-2" aria-expanded="false"
											aria-controls="faq-one__accordion-1__collapse-2">
											Due Diligence
											<span class="faq-one__accordion__icon"></span>
										</button>
									</h2>
									<div id="faq-one__accordion-1__collapse-2"
										class="accordion-collapse faq-one__accordion__collapse collapse"
										aria-labelledby="faq-one__accordion-1__heading-2"
										data-bs-parent="#faq-one__accordion-1">
										<div class="accordion-body faq-one__accordion__body">We offer the needed
											Consulting to help your startup thrive </div>
									</div>
								</div>



								<div class="accordion-item faq-one__accordion__item">
									<h2 class="accordion-header faq-one__accordion__header"
										id="faq-one__accordion-1__heading-3">
										<button class="accordion-button faq-one__accordion__button collapsed"
											type="button" data-bs-toggle="collapse"
											data-bs-target="#faq-one__accordion-1__collapse-3" aria-expanded="false"
											aria-controls="faq-one__accordion-1__collapse-3">
											Mentorship
											<span class="faq-one__accordion__icon"></span>
										</button>
									</h2>
									<div id="faq-one__accordion-1__collapse-3"
										class="accordion-collapse faq-one__accordion__collapse collapse"
										aria-labelledby="faq-one__accordion-1__heading-3"
										data-bs-parent="#faq-one__accordion-1">
										<div class="accordion-body faq-one__accordion__body">Accelerator programs,
											Masterclasses, Podcasts </div>
									</div>
								</div>



								<div class="accordion-item faq-one__accordion__item">
									<h2 class="accordion-header faq-one__accordion__header"
										id="faq-one__accordion-1__heading-4">
										<button class="accordion-button faq-one__accordion__button collapsed"
											type="button" data-bs-toggle="collapse"
											data-bs-target="#faq-one__accordion-1__collapse-4" aria-expanded="false"
											aria-controls="faq-one__accordion-1__collapse-4">
											Existing Incubation Centers
											<span class="faq-one__accordion__icon"></span>
										</button>
									</h2>
									<div id="faq-one__accordion-1__collapse-4"
										class="accordion-collapse faq-one__accordion__collapse collapse"
										aria-labelledby="faq-one__accordion-1__heading-4"
										data-bs-parent="#faq-one__accordion-1">
										<div class="accordion-body faq-one__accordion__body">Colleges and Institutions
										</div>
									</div>
								</div>




								<div class="accordion-item faq-one__accordion__item">
									<h2 class="accordion-header faq-one__accordion__header"
										id="faq-one__accordion-1__heading-5">
										<button class="accordion-button faq-one__accordion__button collapsed"
											type="button" data-bs-toggle="collapse"
											data-bs-target="#faq-one__accordion-1__collapse-5" aria-expanded="false"
											aria-controls="faq-one__accordion-1__collapse-5">
											Foundation Course for Start Ups
											<span class="faq-one__accordion__icon"></span>
										</button>
									</h2>
									<div id="faq-one__accordion-1__collapse-5"
										class="accordion-collapse faq-one__accordion__collapse collapse"
										aria-labelledby="faq-one__accordion-1__heading-5"
										data-bs-parent="#faq-one__accordion-1">
										<div class="accordion-body faq-one__accordion__body">Awareness from idea to IPO,
											founders/shareholders agreement, stages of Start-Ups </div>
									</div>
								</div>







							</div>
						</div><!-- /.faq-one__content -->
					</div><!-- /.col-lg-6 -->
					<div class="col-lg-6">
						<div class="faq-one__image">
							<img src="{{asset('guest/images/resources/Entrepreneurial-Success.png')}}" alt="">
						</div><!-- /.faq-one__image -->
					</div><!-- /.col-lg-6 -->
				</div><!-- /.row -->
			</div><!-- /.container -->
		</section>






		<section class="about-six about-six--pad-top ">
			<div class="container">

				<div class="sec-title text-center">
					<p class="sec-title__tagline">WHY CHOOSE OUR SERVICES</p>
					<!-- /.sec-title__tagline -->
					<h2 class="sec-title__title"> Our Approaches
					</h2>
					<p>In order to be eligible for tax holiday under the Income Tax Act, the start up must be a Private
						limited company or a LLP and DPIIT recognised.</p>
				</div>

				<div class="row">

					<div class="parent parent-custom col-lg-6 col-sm-12 p-b-30">
						<div class="card-service">
							<div class="logo">
								<span class="circle circle1"></span>
								<span class="circle circle2"></span>
								<span class="circle circle3"></span>
								<span class="circle circle4"></span>
								<span class="circle circle5">
									<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 29.667 31.69" class="svg">
										<path id="Path_6" data-name="Path 6"
											d="M12.827,1.628A1.561,1.561,0,0,1,14.31,0h2.964a1.561,1.561,0,0,1,1.483,1.628v11.9a9.252,9.252,0,0,1-2.432,6.852q-2.432,2.409-6.963,2.409T2.4,20.452Q0,18.094,0,13.669V1.628A1.561,1.561,0,0,1,1.483,0h2.98A1.561,1.561,0,0,1,5.947,1.628V13.191a5.635,5.635,0,0,0,.85,3.451,3.153,3.153,0,0,0,2.632,1.094,3.032,3.032,0,0,0,2.582-1.076,5.836,5.836,0,0,0,.816-3.486Z"
											transform="translate(0 0)"></path>
										<path id="Path_7" data-name="Path 7"
											d="M75.207,20.857a1.561,1.561,0,0,1-1.483,1.628h-2.98a1.561,1.561,0,0,1-1.483-1.628V1.628A1.561,1.561,0,0,1,70.743,0h2.98a1.561,1.561,0,0,1,1.483,1.628Z"
											transform="translate(-45.91 0)"></path>
										<path id="Path_8" data-name="Path 8"
											d="M0,80.018A1.561,1.561,0,0,1,1.483,78.39h26.7a1.561,1.561,0,0,1,1.483,1.628v2.006a1.561,1.561,0,0,1-1.483,1.628H1.483A1.561,1.561,0,0,1,0,82.025Z"
											transform="translate(0 -51.963)"></path>
									</svg>
								</span>

							</div>
							<div class="glass"></div>
							<div class="content">
								<span class="title">Survival</span>
								<span class="text">
									<ul>
										<li>Maximum work done by entrepreneur</li>
										<li>Becomes most valuable employee of the company</li>
										<li>Works till he reaches next stage</li>
									</ul>

								</span>
							</div>
							<!-- <div class="bottom">

								<div class="social-buttons-container">
									<button class="social-button .social-button1">
										<svg viewBox="0 0 30 30" xmlns="http://www.w3.org/2000/svg" class="svg">
											<path
												d="M 9.9980469 3 C 6.1390469 3 3 6.1419531 3 10.001953 L 3 20.001953 C 3 23.860953 6.1419531 27 10.001953 27 L 20.001953 27 C 23.860953 27 27 23.858047 27 19.998047 L 27 9.9980469 C 27 6.1390469 23.858047 3 19.998047 3 L 9.9980469 3 z M 22 7 C 22.552 7 23 7.448 23 8 C 23 8.552 22.552 9 22 9 C 21.448 9 21 8.552 21 8 C 21 7.448 21.448 7 22 7 z M 15 9 C 18.309 9 21 11.691 21 15 C 21 18.309 18.309 21 15 21 C 11.691 21 9 18.309 9 15 C 9 11.691 11.691 9 15 9 z M 15 11 A 4 4 0 0 0 11 15 A 4 4 0 0 0 15 19 A 4 4 0 0 0 19 15 A 4 4 0 0 0 15 11 z">
											</path>
										</svg></button>
									<button class="social-button .social-button2">
										<svg viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg" class="svg">
											<path
												d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z">
											</path>
										</svg>
									</button>
									<button class="social-button .social-button3">
										<svg viewBox="0 0 640 512" xmlns="http://www.w3.org/2000/svg" class="svg">
											<path
												d="M524.531,69.836a1.5,1.5,0,0,0-.764-.7A485.065,485.065,0,0,0,404.081,32.03a1.816,1.816,0,0,0-1.923.91,337.461,337.461,0,0,0-14.9,30.6,447.848,447.848,0,0,0-134.426,0,309.541,309.541,0,0,0-15.135-30.6,1.89,1.89,0,0,0-1.924-.91A483.689,483.689,0,0,0,116.085,69.137a1.712,1.712,0,0,0-.788.676C39.068,183.651,18.186,294.69,28.43,404.354a2.016,2.016,0,0,0,.765,1.375A487.666,487.666,0,0,0,176.02,479.918a1.9,1.9,0,0,0,2.063-.676A348.2,348.2,0,0,0,208.12,430.4a1.86,1.86,0,0,0-1.019-2.588,321.173,321.173,0,0,1-45.868-21.853,1.885,1.885,0,0,1-.185-3.126c3.082-2.309,6.166-4.711,9.109-7.137a1.819,1.819,0,0,1,1.9-.256c96.229,43.917,200.41,43.917,295.5,0a1.812,1.812,0,0,1,1.924.233c2.944,2.426,6.027,4.851,9.132,7.16a1.884,1.884,0,0,1-.162,3.126,301.407,301.407,0,0,1-45.89,21.83,1.875,1.875,0,0,0-1,2.611,391.055,391.055,0,0,0,30.014,48.815,1.864,1.864,0,0,0,2.063.7A486.048,486.048,0,0,0,610.7,405.729a1.882,1.882,0,0,0,.765-1.352C623.729,277.594,590.933,167.465,524.531,69.836ZM222.491,337.58c-28.972,0-52.844-26.587-52.844-59.239S193.056,219.1,222.491,219.1c29.665,0,53.306,26.82,52.843,59.239C275.334,310.993,251.924,337.58,222.491,337.58Zm195.38,0c-28.971,0-52.843-26.587-52.843-59.239S388.437,219.1,417.871,219.1c29.667,0,53.307,26.82,52.844,59.239C470.715,310.993,447.538,337.58,417.871,337.58Z">
											</path>
										</svg>
									</button>
								</div>
								
							</div> -->
						</div>
					</div>

					<div class="parent parent-custom col-lg-6 col-sm-12 p-b-30">
						<div class="card-service card-service-2">
							<div class="logo">
								<span class="circle circle1"></span>
								<span class="circle circle2"></span>
								<span class="circle circle3"></span>
								<span class="circle circle4"></span>
								<span class="circle circle5">
									<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 29.667 31.69" class="svg">
										<path id="Path_6" data-name="Path 6"
											d="M12.827,1.628A1.561,1.561,0,0,1,14.31,0h2.964a1.561,1.561,0,0,1,1.483,1.628v11.9a9.252,9.252,0,0,1-2.432,6.852q-2.432,2.409-6.963,2.409T2.4,20.452Q0,18.094,0,13.669V1.628A1.561,1.561,0,0,1,1.483,0h2.98A1.561,1.561,0,0,1,5.947,1.628V13.191a5.635,5.635,0,0,0,.85,3.451,3.153,3.153,0,0,0,2.632,1.094,3.032,3.032,0,0,0,2.582-1.076,5.836,5.836,0,0,0,.816-3.486Z"
											transform="translate(0 0)"></path>
										<path id="Path_7" data-name="Path 7"
											d="M75.207,20.857a1.561,1.561,0,0,1-1.483,1.628h-2.98a1.561,1.561,0,0,1-1.483-1.628V1.628A1.561,1.561,0,0,1,70.743,0h2.98a1.561,1.561,0,0,1,1.483,1.628Z"
											transform="translate(-45.91 0)"></path>
										<path id="Path_8" data-name="Path 8"
											d="M0,80.018A1.561,1.561,0,0,1,1.483,78.39h26.7a1.561,1.561,0,0,1,1.483,1.628v2.006a1.561,1.561,0,0,1-1.483,1.628H1.483A1.561,1.561,0,0,1,0,82.025Z"
											transform="translate(0 -51.963)"></path>
									</svg>
								</span>

							</div>
							<div class="glass"></div>
							<div class="content">
								<span class="title">Struggle</span>
								<span class="text">
									<ul>
										<li>Business model</li>
										<li>Product</li>
										<li>Service</li>
										<li>Refine processes</li>
									</ul>
								</span>
							</div>
							<!-- <div class="bottom">

								<div class="social-buttons-container">
									<button class="social-button .social-button1">
										<svg viewBox="0 0 30 30" xmlns="http://www.w3.org/2000/svg" class="svg">
											<path
												d="M 9.9980469 3 C 6.1390469 3 3 6.1419531 3 10.001953 L 3 20.001953 C 3 23.860953 6.1419531 27 10.001953 27 L 20.001953 27 C 23.860953 27 27 23.858047 27 19.998047 L 27 9.9980469 C 27 6.1390469 23.858047 3 19.998047 3 L 9.9980469 3 z M 22 7 C 22.552 7 23 7.448 23 8 C 23 8.552 22.552 9 22 9 C 21.448 9 21 8.552 21 8 C 21 7.448 21.448 7 22 7 z M 15 9 C 18.309 9 21 11.691 21 15 C 21 18.309 18.309 21 15 21 C 11.691 21 9 18.309 9 15 C 9 11.691 11.691 9 15 9 z M 15 11 A 4 4 0 0 0 11 15 A 4 4 0 0 0 15 19 A 4 4 0 0 0 19 15 A 4 4 0 0 0 15 11 z">
											</path>
										</svg></button>
									<button class="social-button .social-button2">
										<svg viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg" class="svg">
											<path
												d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z">
											</path>
										</svg>
									</button>
									<button class="social-button .social-button3">
										<svg viewBox="0 0 640 512" xmlns="http://www.w3.org/2000/svg" class="svg">
											<path
												d="M524.531,69.836a1.5,1.5,0,0,0-.764-.7A485.065,485.065,0,0,0,404.081,32.03a1.816,1.816,0,0,0-1.923.91,337.461,337.461,0,0,0-14.9,30.6,447.848,447.848,0,0,0-134.426,0,309.541,309.541,0,0,0-15.135-30.6,1.89,1.89,0,0,0-1.924-.91A483.689,483.689,0,0,0,116.085,69.137a1.712,1.712,0,0,0-.788.676C39.068,183.651,18.186,294.69,28.43,404.354a2.016,2.016,0,0,0,.765,1.375A487.666,487.666,0,0,0,176.02,479.918a1.9,1.9,0,0,0,2.063-.676A348.2,348.2,0,0,0,208.12,430.4a1.86,1.86,0,0,0-1.019-2.588,321.173,321.173,0,0,1-45.868-21.853,1.885,1.885,0,0,1-.185-3.126c3.082-2.309,6.166-4.711,9.109-7.137a1.819,1.819,0,0,1,1.9-.256c96.229,43.917,200.41,43.917,295.5,0a1.812,1.812,0,0,1,1.924.233c2.944,2.426,6.027,4.851,9.132,7.16a1.884,1.884,0,0,1-.162,3.126,301.407,301.407,0,0,1-45.89,21.83,1.875,1.875,0,0,0-1,2.611,391.055,391.055,0,0,0,30.014,48.815,1.864,1.864,0,0,0,2.063.7A486.048,486.048,0,0,0,610.7,405.729a1.882,1.882,0,0,0,.765-1.352C623.729,277.594,590.933,167.465,524.531,69.836ZM222.491,337.58c-28.972,0-52.844-26.587-52.844-59.239S193.056,219.1,222.491,219.1c29.665,0,53.306,26.82,52.843,59.239C275.334,310.993,251.924,337.58,222.491,337.58Zm195.38,0c-28.971,0-52.843-26.587-52.843-59.239S388.437,219.1,417.871,219.1c29.667,0,53.307,26.82,52.844,59.239C470.715,310.993,447.538,337.58,417.871,337.58Z">
											</path>
										</svg>
									</button>
								</div>
								
							</div> -->
						</div>
					</div>

					<div class="parent parent-custom col-lg-6 col-sm-12 p-b-30">
						<div class="card-service card-service-3">
							<div class="logo">
								<span class="circle circle1"></span>
								<span class="circle circle2"></span>
								<span class="circle circle3"></span>
								<span class="circle circle4"></span>
								<span class="circle circle5">
									<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 29.667 31.69" class="svg">
										<path id="Path_6" data-name="Path 6"
											d="M12.827,1.628A1.561,1.561,0,0,1,14.31,0h2.964a1.561,1.561,0,0,1,1.483,1.628v11.9a9.252,9.252,0,0,1-2.432,6.852q-2.432,2.409-6.963,2.409T2.4,20.452Q0,18.094,0,13.669V1.628A1.561,1.561,0,0,1,1.483,0h2.98A1.561,1.561,0,0,1,5.947,1.628V13.191a5.635,5.635,0,0,0,.85,3.451,3.153,3.153,0,0,0,2.632,1.094,3.032,3.032,0,0,0,2.582-1.076,5.836,5.836,0,0,0,.816-3.486Z"
											transform="translate(0 0)"></path>
										<path id="Path_7" data-name="Path 7"
											d="M75.207,20.857a1.561,1.561,0,0,1-1.483,1.628h-2.98a1.561,1.561,0,0,1-1.483-1.628V1.628A1.561,1.561,0,0,1,70.743,0h2.98a1.561,1.561,0,0,1,1.483,1.628Z"
											transform="translate(-45.91 0)"></path>
										<path id="Path_8" data-name="Path 8"
											d="M0,80.018A1.561,1.561,0,0,1,1.483,78.39h26.7a1.561,1.561,0,0,1,1.483,1.628v2.006a1.561,1.561,0,0,1-1.483,1.628H1.483A1.561,1.561,0,0,1,0,82.025Z"
											transform="translate(0 -51.963)"></path>
									</svg>
								</span>

							</div>
							<div class="glass"></div>
							<div class="content">
								<span class="title">Stable</span>
								<span class="text">
									<ul>
										<li>Acquire new customers</li>
										<li>Fund raising</li>
										<li>Team building</li>
										<li>Brain stroming</li>
									</ul>
								</span>
							</div>
							<!-- <div class="bottom">

								<div class="social-buttons-container">
									<button class="social-button .social-button1">
										<svg viewBox="0 0 30 30" xmlns="http://www.w3.org/2000/svg" class="svg">
											<path
												d="M 9.9980469 3 C 6.1390469 3 3 6.1419531 3 10.001953 L 3 20.001953 C 3 23.860953 6.1419531 27 10.001953 27 L 20.001953 27 C 23.860953 27 27 23.858047 27 19.998047 L 27 9.9980469 C 27 6.1390469 23.858047 3 19.998047 3 L 9.9980469 3 z M 22 7 C 22.552 7 23 7.448 23 8 C 23 8.552 22.552 9 22 9 C 21.448 9 21 8.552 21 8 C 21 7.448 21.448 7 22 7 z M 15 9 C 18.309 9 21 11.691 21 15 C 21 18.309 18.309 21 15 21 C 11.691 21 9 18.309 9 15 C 9 11.691 11.691 9 15 9 z M 15 11 A 4 4 0 0 0 11 15 A 4 4 0 0 0 15 19 A 4 4 0 0 0 19 15 A 4 4 0 0 0 15 11 z">
											</path>
										</svg></button>
									<button class="social-button .social-button2">
										<svg viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg" class="svg">
											<path
												d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z">
											</path>
										</svg>
									</button>
									<button class="social-button .social-button3">
										<svg viewBox="0 0 640 512" xmlns="http://www.w3.org/2000/svg" class="svg">
											<path
												d="M524.531,69.836a1.5,1.5,0,0,0-.764-.7A485.065,485.065,0,0,0,404.081,32.03a1.816,1.816,0,0,0-1.923.91,337.461,337.461,0,0,0-14.9,30.6,447.848,447.848,0,0,0-134.426,0,309.541,309.541,0,0,0-15.135-30.6,1.89,1.89,0,0,0-1.924-.91A483.689,483.689,0,0,0,116.085,69.137a1.712,1.712,0,0,0-.788.676C39.068,183.651,18.186,294.69,28.43,404.354a2.016,2.016,0,0,0,.765,1.375A487.666,487.666,0,0,0,176.02,479.918a1.9,1.9,0,0,0,2.063-.676A348.2,348.2,0,0,0,208.12,430.4a1.86,1.86,0,0,0-1.019-2.588,321.173,321.173,0,0,1-45.868-21.853,1.885,1.885,0,0,1-.185-3.126c3.082-2.309,6.166-4.711,9.109-7.137a1.819,1.819,0,0,1,1.9-.256c96.229,43.917,200.41,43.917,295.5,0a1.812,1.812,0,0,1,1.924.233c2.944,2.426,6.027,4.851,9.132,7.16a1.884,1.884,0,0,1-.162,3.126,301.407,301.407,0,0,1-45.89,21.83,1.875,1.875,0,0,0-1,2.611,391.055,391.055,0,0,0,30.014,48.815,1.864,1.864,0,0,0,2.063.7A486.048,486.048,0,0,0,610.7,405.729a1.882,1.882,0,0,0,.765-1.352C623.729,277.594,590.933,167.465,524.531,69.836ZM222.491,337.58c-28.972,0-52.844-26.587-52.844-59.239S193.056,219.1,222.491,219.1c29.665,0,53.306,26.82,52.843,59.239C275.334,310.993,251.924,337.58,222.491,337.58Zm195.38,0c-28.971,0-52.843-26.587-52.843-59.239S388.437,219.1,417.871,219.1c29.667,0,53.307,26.82,52.844,59.239C470.715,310.993,447.538,337.58,417.871,337.58Z">
											</path>
										</svg>
									</button>
								</div>
								
							</div> -->
						</div>
					</div>


					<div class="parent parent-custom col-lg-6 col-sm-12 p-b-30">
						<div class="card-service card-service-4">
							<div class="logo">
								<span class="circle circle1"></span>
								<span class="circle circle2"></span>
								<span class="circle circle3"></span>
								<span class="circle circle4"></span>
								<span class="circle circle5">
									<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 29.667 31.69" class="svg">
										<path id="Path_6" data-name="Path 6"
											d="M12.827,1.628A1.561,1.561,0,0,1,14.31,0h2.964a1.561,1.561,0,0,1,1.483,1.628v11.9a9.252,9.252,0,0,1-2.432,6.852q-2.432,2.409-6.963,2.409T2.4,20.452Q0,18.094,0,13.669V1.628A1.561,1.561,0,0,1,1.483,0h2.98A1.561,1.561,0,0,1,5.947,1.628V13.191a5.635,5.635,0,0,0,.85,3.451,3.153,3.153,0,0,0,2.632,1.094,3.032,3.032,0,0,0,2.582-1.076,5.836,5.836,0,0,0,.816-3.486Z"
											transform="translate(0 0)"></path>
										<path id="Path_7" data-name="Path 7"
											d="M75.207,20.857a1.561,1.561,0,0,1-1.483,1.628h-2.98a1.561,1.561,0,0,1-1.483-1.628V1.628A1.561,1.561,0,0,1,70.743,0h2.98a1.561,1.561,0,0,1,1.483,1.628Z"
											transform="translate(-45.91 0)"></path>
										<path id="Path_8" data-name="Path 8"
											d="M0,80.018A1.561,1.561,0,0,1,1.483,78.39h26.7a1.561,1.561,0,0,1,1.483,1.628v2.006a1.561,1.561,0,0,1-1.483,1.628H1.483A1.561,1.561,0,0,1,0,82.025Z"
											transform="translate(0 -51.963)"></path>
									</svg>
								</span>

							</div>
							<div class="glass"></div>
							<div class="content">
								<span class="title">Scale</span>
								<span class="text">

									<ul>
										<li>Revenue increase without a substantial increase in resources</li>

										<li> Wealth / Value Creation</li>

										<li>Automate everything you can</li>
									</ul>

								</span>
							</div>
							<!-- <div class="bottom">

								<div class="social-buttons-container">
									<button class="social-button .social-button1">
										<svg viewBox="0 0 30 30" xmlns="http://www.w3.org/2000/svg" class="svg">
											<path
												d="M 9.9980469 3 C 6.1390469 3 3 6.1419531 3 10.001953 L 3 20.001953 C 3 23.860953 6.1419531 27 10.001953 27 L 20.001953 27 C 23.860953 27 27 23.858047 27 19.998047 L 27 9.9980469 C 27 6.1390469 23.858047 3 19.998047 3 L 9.9980469 3 z M 22 7 C 22.552 7 23 7.448 23 8 C 23 8.552 22.552 9 22 9 C 21.448 9 21 8.552 21 8 C 21 7.448 21.448 7 22 7 z M 15 9 C 18.309 9 21 11.691 21 15 C 21 18.309 18.309 21 15 21 C 11.691 21 9 18.309 9 15 C 9 11.691 11.691 9 15 9 z M 15 11 A 4 4 0 0 0 11 15 A 4 4 0 0 0 15 19 A 4 4 0 0 0 19 15 A 4 4 0 0 0 15 11 z">
											</path>
										</svg></button>
									<button class="social-button .social-button2">
										<svg viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg" class="svg">
											<path
												d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z">
											</path>
										</svg>
									</button>
									<button class="social-button .social-button3">
										<svg viewBox="0 0 640 512" xmlns="http://www.w3.org/2000/svg" class="svg">
											<path
												d="M524.531,69.836a1.5,1.5,0,0,0-.764-.7A485.065,485.065,0,0,0,404.081,32.03a1.816,1.816,0,0,0-1.923.91,337.461,337.461,0,0,0-14.9,30.6,447.848,447.848,0,0,0-134.426,0,309.541,309.541,0,0,0-15.135-30.6,1.89,1.89,0,0,0-1.924-.91A483.689,483.689,0,0,0,116.085,69.137a1.712,1.712,0,0,0-.788.676C39.068,183.651,18.186,294.69,28.43,404.354a2.016,2.016,0,0,0,.765,1.375A487.666,487.666,0,0,0,176.02,479.918a1.9,1.9,0,0,0,2.063-.676A348.2,348.2,0,0,0,208.12,430.4a1.86,1.86,0,0,0-1.019-2.588,321.173,321.173,0,0,1-45.868-21.853,1.885,1.885,0,0,1-.185-3.126c3.082-2.309,6.166-4.711,9.109-7.137a1.819,1.819,0,0,1,1.9-.256c96.229,43.917,200.41,43.917,295.5,0a1.812,1.812,0,0,1,1.924.233c2.944,2.426,6.027,4.851,9.132,7.16a1.884,1.884,0,0,1-.162,3.126,301.407,301.407,0,0,1-45.89,21.83,1.875,1.875,0,0,0-1,2.611,391.055,391.055,0,0,0,30.014,48.815,1.864,1.864,0,0,0,2.063.7A486.048,486.048,0,0,0,610.7,405.729a1.882,1.882,0,0,0,.765-1.352C623.729,277.594,590.933,167.465,524.531,69.836ZM222.491,337.58c-28.972,0-52.844-26.587-52.844-59.239S193.056,219.1,222.491,219.1c29.665,0,53.306,26.82,52.843,59.239C275.334,310.993,251.924,337.58,222.491,337.58Zm195.38,0c-28.971,0-52.843-26.587-52.843-59.239S388.437,219.1,417.871,219.1c29.667,0,53.307,26.82,52.844,59.239C470.715,310.993,447.538,337.58,417.871,337.58Z">
											</path>
										</svg>
									</button>
								</div>
								
							</div> -->
						</div>
					</div>

				</div>
			</div>
		</section>


		<section class="sec-pad-top sec-pad-bottom video-one">
			<div class="container">
				<div class="video-one__inner"
					style="background-image:url(guest/images/backgrounds/video-inner-bg-1-1.png);">
					<div class="row gutter-y-60">
						<div class="col-md-12 col-lg-6">
							<div class="video-one__content">
								<a href="https://www.youtube.com/watch?v=CWCPovmNWK8"
									class="video-one__btn video-popup">
									<i class="fa fa-play"></i>
									<span class="video-one__btn__arrow"></span>
								</a>
								<h3 class="video-one__title count-box counted">Open the door to possibilities.
									<!-- <br>
									$<span class="count-text" data-stop="3800" data-speed="1500"></span> to poor
									childrens -->
								</h3><!-- /.video-one__title -->
								<ul class="list-unstyled video-one__list">
									<li>
										<i class="fa fa-check-circle"></i>
										Register now and be part of a community that transforms visions into thriving
										success stories.
									</li>

								</ul><!-- /.list-unstyled video-one__list -->
							</div><!-- /.video-one__content -->
						</div>
						<div class="col-md-12 col-lg-6">
							<form action="{{asset('guest/inc/sendemail.php"
								class=" contact-one__form video-one__form contact-form-validated"
								novalidate="novalidate">
								<div class="row">
									<div class="col-md-6">
										<input type="text" placeholder="Your name" name="name">
									</div><!-- /.col-md-6 -->
									<div class="col-md-6">
										<input type="text" placeholder="Your phone" name="phone">
									</div><!-- /.col-md-6 -->
									<div class="col-md-12">
										<input type="text" placeholder="Email address" name="email">
									</div><!-- /.col-md-6 -->
									<div class="col-md-12">
										<input type="text" placeholder="Location" name="location">
									</div><!-- /.col-md-6 -->
									<div class="col-md-12">
										<textarea name="message" placeholder="Message"></textarea>
									</div><!-- /.col-md-12 -->
									<div class="col-md-12">
										<button type="submit" class="thm-btn contact-one__btn"><span>Continue
												now</span></button>
									</div><!-- /.col-md-12 -->
								</div><!-- /.row -->

							</form><!-- /.video-one__form -->
						</div>
					</div><!-- /.row -->
				</div><!-- /.video-one__inner -->
			</div>
		</section>
@endsection

@section('page_level_script')
@endsection