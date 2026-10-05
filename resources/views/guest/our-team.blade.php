@extends('layouts.guest.master')

@section('page_level_style')

@endsection

@section('content')

<section class="page-header" style="background-image: url(guest/images/backgrounds/team.png);">
            <div class="container">
                <ul class="list-unstyled breadcrumb-one">
                    <li><a href="index.php">Home</a></li>
                    <li><span>Team </span></li>
                </ul><!-- /.list-unstyled breadcrumb-one -->
                <h2 class="page-header__title">Faces Behind the Magic: <br> Meet Our Extraordinary Team </h2>

            </div><!-- /.container -->
        </section><!-- /.page-header -->



        <section class="about-three">
            <div class="about-three__shape wow slideInLeft" data-wow-duration="1500ms" style="z-index: -1;"></div>
            <!-- /.about-three__shape -->
            <div class="container">
                <div class="row gutter-y-60">
                    <div class="col-md-12 col-lg-5">
                        <div class="about-three__content">
                            <div class="sec-title">
                                <p class="sec-title__tagline">Our Team:</p><!-- /.sec-title__tagline -->
                                <h2 class="sec-title__title"> Beyond Titles, A Crew <br>of Talents and Experience </h2>
                            </div><!-- /.sec-title -->
                            <div class="about-three__text">Our team is the heartbeat of our organization, a diverse and
                                talented group of individuals who bring a wealth of experience and passion to the table.
                                Committed to turning dreams into reality, each team member plays a unique role. United
                                with a shared vision, we thrive on collaboration, innovation, and a relentless pursuit
                                of excellence. Meet the faces behind the magic, the driving force that propels us
                                towards new heights. </div><!-- /.about-three__text -->


                        </div><!-- /.about-three__content -->
                    </div><!-- /.col-md-12 col-lg-5 -->
                    <div class="col-md-12 col-lg-7">
                        <div class="about-three__image">
                            <img src="{{asset('guest/images/resources/about-1-1.jpg')}}" alt="">
                        </div><!-- /.about-three__image -->
                    </div><!-- /.col-md-12 col-lg-7 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section>



        <section class="sec-pad-top sec-pad-bottom about-one">
            <div class="about-one__shape-1 float-bob-y">
                <img src="{{asset('guest/images/shapes/about-1-1.png')}}" alt="">
            </div><!-- /.about-one__shape-1 -->
            <div class="about-one__shape-2 float-bob-x">
                <img src="{{asset('guest/images/shapes/about-1-1.png')}}" alt="">
            </div><!-- /.about-one__shape-2 -->
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="about-one__images wow fadeInLeft" data-wow-duration="1500ms">
                            <img src="{{asset('guest/images/sahil-makkar.png')}}" alt="">
                            <img src="{{asset('guest/images/resources/secoandry.png')}}" alt="">
                        </div><!-- /.about-one__images -->
                    </div><!-- /.col-lg-6 -->
                    <div class="col-lg-6">
                        <div class="about-one__content">
                            <div class="sec-title">

                                <h2 class="sec-title__title">The Chairman </h2>
                            </div><!-- /.sec-title -->
                            <!-- /.about-one__list -->

                            <p class="about-one__text"> 11 years of Experience as a Chartered Accountant, Alumnus of
                                Indian School of Business (ISB) and Executive Education from Indian Institute of
                                Management (IIM)- Bangalore. Educationist teaching finance to Civil Services aspirants
                                and MBA executives for 12 years. He has also done post Qualification certificate courses
                                on Company Valuations, Concurrent Audit of Banks, Anti-Money Laundering Laws. </p>
                            <div class="about-one__meta clearfix">
                                <img src="{{asset('guest/images/resources/ceo.png')}}" alt="">
                                <h3 class="about-one__name">Mr. Sahil Makkar</h3>
                                <!-- /.about-one__name -->
                                <p class="about-one__designation">CEO & CO Founder</p>
                                <!-- /.about-one__designation -->
                            </div><!-- /.about-one__meta -->
                        </div><!-- /.about-one__content -->
                    </div><!-- /.col-lg-6 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.sec-pad-top sec-pad-bottom -->


        <section class="sec-pad-top sec-pad-bottom sponsor-carousel">
            <div class="container">
                <div class="sec-title text-center">
                    <p class="sec-title__tagline">Expert Team Members</p>
                    <!-- /.sec-title__tagline -->
                    <h2 class="sec-title__title"> Board of Advisors
                    </h2>
                    <p>Our Eminent Board of advisor constitutes brilliant minds from distinct domains with years of
                        experience.</p>
                </div>
                <div class="thm-tns__carousel" id="sponsor-carousel-6" data-tns-options='{
					"container": "#sponsor-carousel-6",
					"loop": true,
					"autoplay": true,
					"items": 2,
					"gutter": 30,
					"mouseDrag": true,
					"touch": true,
					"nav": false,
					"autoplayButtonOutput": false,
					"controls": false,
					"responsive": {
						"0": {
							"items": 2,
							"gutter": 30
						},
						"576": {
							"items": 3,
							"gutter": 30
						},
						"768": {
							"items": 3,
							"gutter": 30
						},
						"992": {
							"items": 3,
							"gutter": 50
						},
						"1200": {
							"items": 3,
							"gutter": 100
						}
					}
				}'>
                    <div class="item">
                        <div class="gallery-card">
                            <div class="gallery-card__image">
                                <img src="{{asset('guest/images/gallery/advisor-1-1.png')}}" alt="">
                            </div>
                            <div class="gallery-card__content">
                                <a href="https://www.linkedin.com/in/raman-bhalla-28604425/">
                                    <h4>Raman Bhalla</h4>
                                    <p>President and CEO SIPBN Venture Capitalist, Mergers and Acquisitions</p>
                                    <i class="fab fa-linkedin"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="gallery-card">
                            <div class="gallery-card__image">
                                <img src="{{asset('guest/images/gallery/advisor-1-2.png')}}" alt="">
                            </div>
                            <div class="gallery-card__content">
                                <a href="https://www.linkedin.com/in/dr-srinivasan-r-iyengar-33a98619/">
                                    <h4>Mr. Srinivasan R. Iynegar</h4>
                                    <p>Director JBIMS (Jamana Lal Bajaj Institute of Management Studies)</p>
                                    <i class="fab fa-linkedin"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="gallery-card">
                            <div class="gallery-card__image">
                                <img src="{{asset('guest/images/gallery/advisor-1-3.png')}}" alt="">
                            </div>
                            <div class="gallery-card__content">
                                <a href="https://www.linkedin.com/in/iqbalsingh2/">
                                    <h4>Mr. Iqbal Singh</h4>
                                    <p>Founder & MD at Innovative Financial Management (IFM)</p>
                                    <i class="fab fa-linkedin"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="gallery-card">
                            <div class="gallery-card__image">
                                <img src="{{asset('guest/images/gallery/advisor-1-4.png')}}" alt="">
                            </div>
                            <div class="gallery-card__content">
                                <a href="https://www.linkedin.com/in/rramanan27/">
                                    <h4>Mr. Ramanan Ramanathan</h4>
                                    <p>Mission Director • Atal Innovation Mission</p>
                                    <i class="fab fa-linkedin"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="gallery-card">
                            <div class="gallery-card__image">
                                <img src="{{asset('guest/images/gallery/advisor-1-5.png')}}" alt="">
                            </div>
                            <div class="gallery-card__content">
                                <a href="https://www.linkedin.com/in/puneet-verma-0a74769/">
                                    <h4>Mr Puneet Verma</h4>
                                    <p>Founder & CEO Cybrain Software Solutions</p>
                                    <i class="fab fa-linkedin"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="gallery-card">
                            <div class="gallery-card__image">
                                <img src="{{asset('guest/images/gallery/advisor-1-6.png')}}" alt="">
                            </div>
                            <div class="gallery-card__content">
                                <a href="https://www.linkedin.com/in/atulmehta07/">
                                    <h4>Atul Mehta</h4>
                                    <p>Senior Vice President Of Sales at Razorpay</p>
                                    <br>
                                    <i class="fab fa-linkedin"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section><!-- /.sec-pad-top sec-pad-bottom -->

        <section class="sec-pad-top sec-pad-bottom sponsor-carousel">
            <div class="container">
                <div class="sec-title text-center">
                    <p class="sec-title__tagline">TEAM MEMBER</p>
                    <!-- /.sec-title__tagline -->
                    <h2 class="sec-title__title"> Turnaround Specialist
                    </h2>
                    <p>Expert Turnaround Specialists who revive struggling businesses and drive sustainable growth. Unlock your business’s full potential with our team.</p>
                </div>

                <div class="row">
                    <div class="item col-lg-3 col-md-6 col-sm-12 p-t-30">
                        <div class="gallery-card">
                            <div class="gallery-card__image">
                                <img src="{{asset('guest/images/team/ajaysharma.webp')}}" alt="">
                            </div>
                            <div class="gallery-card__content">
                                <a class="img-popup" href="{{asset('guest/images/team/ajaysharma.webp')}}">
                                    <h4>Ajay Sharma</h4>
                                    <p>Operations</p>
                                    <i class="fab fa-linkedin"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="item col-lg-3 col-md-6 col-sm-12 p-t-30">
                        <div class="gallery-card">
                            <div class="gallery-card__image">
                                <img src="{{asset('guest/images/team/Atul-Mehta.webp')}}" alt="">
                            </div>
                            <div class="gallery-card__content">
                                <a class="img-popup" href="{{asset('guest/images/team/Atul-Mehta.webp')}}">
                                    <h4>Atul Mehta</h4>
                                    <p>Sr. Vice President Razorpay</p>
                                    <p>Sales</p>
                                    <i class="fab fa-linkedin"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="item col-lg-3 col-md-6 col-sm-12 p-t-30">
                        <div class="gallery-card">
                            <div class="gallery-card__image">
                                <img src="{{asset('guest/images/team/Iqbal-Singh-Ratta.webp')}}" alt="">
                            </div>
                            <div class="gallery-card__content">
                                <a class="img-popup" href="{{asset('guest/images/team/Iqbal-Singh-Ratta.webp')}}">
                                    <h4>Iqbal Singh Ratta</h4>
                                    <p>Legal</p>
                                    <p>Advocate with 44 years experience in corprate and commercial laws, presented nationally and Internationally</p>
                                    <i class="fab fa-linkedin"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="item col-lg-3 col-md-6 col-sm-12 p-t-30">
                        <div class="gallery-card">
                            <div class="gallery-card__image">
                                <img src="{{asset('guest/images/team/Hirdesh-Madaan.webp')}}" alt="">
                            </div>
                            <div class="gallery-card__content">
                                <a class="img-popup" href="{{asset('guest/images/team/Hirdesh-Madaan.webp')}}">
                                    <h4>Hirdesh Madaan</h4>
                                    <p>Operations</p>
                                    <p>Co-founder hitbullseye Trustee Mind Tree Schools Ex-President for TiE Punjab and Chandigarh</p>
                                    <i class="fab fa-linkedin"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="item col-lg-3 col-md-6 col-sm-12 p-t-30">
                        <div class="gallery-card">
                            <div class="gallery-card__image">
                                <img src="{{asset('guest/images/team/Joseph-Jude.webp')}}" alt="">
                            </div>
                            <div class="gallery-card__content">
                                <a class="img-popup" href="{{asset('guest/images/team/Joseph-Jude.webp')}}">
                                    <h4>Joseph Jude</h4>
                                    <p>Information Technology</p>
                                    <p>CTO, Net Solutions Advisor  (e-Governence) Ministry of Corporate affairs (2009-14)</p>
                                    <i class="fab fa-linkedin"></i>
                                </a>
                            </div>
                        </div>
                    </div>


                    <div class="item col-lg-3 col-md-6 col-sm-12 p-t-30">
                        <div class="gallery-card">
                            <div class="gallery-card__image">
                                <img src="{{asset('guest/images/team/CA.Raman-Seth.webp')}}" alt="">
                            </div>
                            <div class="gallery-card__content">
                                <a class="img-popup" href="{{asset('guest/images/team/CA.Raman-Seth.webp')}}">
                                    <h4>CA.Raman Seth</h4>
                                    <p>Taxation</p>
                                    <i class="fab fa-linkedin"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="item col-lg-3 col-md-6 col-sm-12 p-t-30">
                        <div class="gallery-card">
                            <div class="gallery-card__image">
                                <img src="{{asset('guest/images/team/Sahil-Malhotra.webp')}}" alt="">
                            </div>
                            <div class="gallery-card__content">
                                <a class="img-popup" href="{{asset('guest/images/team/Sahil-Malhotra.webp')}}">
                                    <h4>CS Sahil Malhotra</h4>
                                    <p>Secretarial compliances</p>
                                    <p>Corprate Laws, Merger & Amalgamation, FDI, Experience of Dealing with more than 500 clients.</p>
                                    <i class="fab fa-linkedin"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="item col-lg-3 col-md-6 col-sm-12 p-t-30">
                        <div class="gallery-card">
                            <div class="gallery-card__image">
                                <img src="{{asset('guest/images/team/Manish-Verma.webp')}}" alt="">
                            </div>
                            <div class="gallery-card__content">
                                <a class="img-popup" href="{{asset('guest/images/team/Manish-Verma.webp')}}">
                                    <h4>Mr. Manish Verma</h4>
                                    <p>Distribution, Sales and Service Management</p>
                                    <p>20 Years of corprate experience</p>
                                    <i class="fab fa-linkedin"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="item col-lg-3 col-md-6 col-sm-12 p-t-30">
                        <div class="gallery-card">
                            <div class="gallery-card__image">
                                <img src="{{asset('guest/images/team/P-K-Khurana.webp')}}" alt="">
                            </div>
                            <div class="gallery-card__content">
                                <a class="img-popup" href="{{asset('guest/images/team/P-K-Khurana.webp')}}">
                                    <h4>P K Khurana</h4>
                                    <p>Public Relations</p>
                                    <p>With more than 40 years of experience in PR. AKA Happiness Guru.</p>
                                    <i class="fab fa-linkedin"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="item col-lg-3 col-md-6 col-sm-12 p-t-30">
                        <div class="gallery-card">
                            <div class="gallery-card__image">
                                <img src="{{asset('guest/images/team/TannishthaM.webp')}}" alt="">
                            </div>
                            <div class="gallery-card__content">
                                <a class="img-popup" href="{{asset('guest/images/team/TannishthaM.webp')}}">
                                    <h4>Tannishtha</h4>
                                    <p>Marketing Collaterals</p>
                                    <p>Director at Steady Turtle Media, New Delhi 
                                        <br>MBA from NMIMS
                                    </p>
                                    <i class="fab fa-linkedin"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="item col-lg-3 col-md-6 col-sm-12 p-t-30">
                        <div class="gallery-card">
                            <div class="gallery-card__image">
                                <img src="{{asset('guest/images/team/Shekhar-Kapur.webp')}}" alt="">
                            </div>
                            <div class="gallery-card__content">
                                <a class="img-popup" href="{{asset('guest/images/team/Shekhar-Kapur.webp')}}">
                                    <h4>Shekhar Kapur</h4>
                                    <p>Business relationship & Liasoning</p>
                                    <p>With 42 years of Experience
                                        in Business relationship and
                                        Government Liasoning .</p>
                                    <i class="fab fa-linkedin"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="item col-lg-3 col-md-6 col-sm-12 p-t-30 ">
                        <div class="gallery-card">
                            <div class="gallery-card__image">
                                <img src="{{asset('guest/images/team/Prerna-Kalra.webp')}}" alt="">
                            </div>
                            <div class="gallery-card__content">
                                <a class="img-popup" href="{{asset('guest/images/team/Prerna-Kalra.webp')}}">
                                    <h4>Prerna Kalra</h4>
                                    <p>Human Resource</p>
                                    <p>with 22+ years of experience.
                                        Held senior positions in
                                        companies like
                                        Quark, Dell, IBM and Edifecs.</p>
                                    <i class="fab fa-linkedin"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="item col-lg-3 col-md-6 col-sm-12 p-t-30">
                        <div class="gallery-card">
                            <div class="gallery-card__image">
                                <img src="{{asset('guest/images/team/Sahil-Vohra.webp')}}" alt="">
                            </div>
                            <div class="gallery-card__content">
                                <a class="img-popup" href="{{asset('guest/images/team/Sahil-Vohra.webp')}}">
                                    <h4>Mr. Sahil Vohra</h4>
                                    <p>Sales</p>
                                    <p>National Sales Manager at
                                        ITC Limited,
                                        handling the All India Rurban
                                        (Rural + Urban) business for
                                        entire FMCG.
                                        </p>
                                    <i class="fab fa-linkedin"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="item col-lg-3 col-md-6 col-sm-12 p-t-30">
                        <div class="gallery-card">
                            <div class="gallery-card__image">
                                <img src="{{asset('guest/images/team/Dr-Madan-M-Singh-Aulakh.webp')}}" alt="">
                            </div>
                            <div class="gallery-card__content">
                                <a class="img-popup" href="{{asset('guest/images/team/Dr-Madan-M-Singh-Aulakh.webp')}}">
                                    <h4>Dr Madan M Singh Aulakh</h4>
                                    <p>Human Resource</p>
                                    <p>Experience of 16 years in
                                        Ranbaxy Laboratories & Sun
                                        Pharma.
                                        </p>

                                    <i class="fab fa-linkedin"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="item col-lg-3 col-md-6 col-sm-12 p-t-30">
                        <div class="gallery-card">
                            <div class="gallery-card__image">
                                <img src="{{asset('guest/images/team/puneet-verma.webp')}}" alt="">
                            </div>
                            <div class="gallery-card__content">
                                <a class="img-popup" href="{{asset('guest/images/team/puneet-verma.webp')}}">
                                    <h4>Mr. Puneet Verma</h4>
                                    <p>Technology</p>
                                    <p>Founder & CEO of Cybrain
                                        Software Solutions</p>
                                    <i class="fab fa-linkedin"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="item col-lg-3 col-md-6 col-sm-12 p-t-30">
                        <div class="gallery-card">
                            <div class="gallery-card__image">
                                <img src="{{asset('guest/images/team/sundeep-gaba.webp')}}" alt="">
                            </div>
                            <div class="gallery-card__content">
                                <a class="img-popup" href="{{asset('guest/images/team/sundeep-gaba.webp')}}">
                                    <h4>Mr. Sundeep Gaba</h4>
                                    <p>Vice Director, Roche - Switzerland</p>
                                    <i class="fab fa-linkedin"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section><!-- /.sec-pad-top sec-pad-bottom -->
@endsection

@section('page_level_script')
@endsection