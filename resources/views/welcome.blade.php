@extends('layout');

@section('title')
    Home
@endsection

@section('content')
    <!-- Start Home Slider Section -->
    <div class="home-slider-area">
        <div class="home-slider flickity-dots-absolute"
            data-flickity='{ "bgLazyLoad": 1, "bgLfazyLoad": true, "fade": false, "wrapAround": true, "prevNextButtons": true, "autoPlay": 7000, "pauseAutoPlayOnHover": false }'>
            @forelse ($slider as $slider_item)
                <div class="home-slider-single-item"
                    data-flickity-bg-lazyload="{{ asset('pictures/' . $slider_item->photo) }}">
                    <div class="container">
                        <div class="row d-flex align-items-center">
                            <div class="col">
                                <div class="home-slider-content">
                                    <h1 class="home-slider-title">{{ $slider_item->name }}</h1>
                                    <div class="home-slider-description">
                                        <p>{{ $slider_item->designation }}</p>
                                    </div>
                                    <div class="home-slider-btn-box">
                                        <a href="#0" class="btn btn-primary mr-15">Contact Us</a>
                                        <a href="#0" class="btn btn-primary">IT Solution</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @empty
            @endforelse
        </div>
    </div>






    <!-- End Home Slider Section -->
    <!-- Start Services Section -->
    <section class="services-area-1 section-padding">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="section-title">
                        <h6>What We Do</h6>
                        <h2>Our Services</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="single-services-box-1 single-services-box-img-1">
                        <div class="services-icon-12">
                            <i class="devops icon"></i>
                        </div>
                        <h3>Business Consulting</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt dolore
                            magna aliqua</p>
                        <div class="services-btn">
                            <a href="single-services.html" class="services-btn-one">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-services-box-1 single-services-box-img-2">
                        <div class="services-icon-12">
                            <i class="machineLearning icon"></i>
                        </div>
                        <h3>Technology Services</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt dolore
                            magna aliqua</p>
                        <div class="services-btn">
                            <a href="single-services.html" class="services-btn-one">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-services-box-1 single-services-box-img-3">
                        <div class="services-icon-12">
                            <i class="microservice icon"></i>
                        </div>
                        <h3>Digital Solutions</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt dolore
                            magna aliqua</p>
                        <div class="services-btn">
                            <a href="single-services.html" class="services-btn-one">Read More</a>
                        </div>
                    </div>
                </div>
                <!-- Service more button -->
                <div class="col-lg-12 col-md-12">
                    <div class="services-more-btn-box text-center">
                        <a class="btn btn-primary" href="#0">View All Services</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Services Section -->
    <!-- Start About Section -->
    <section class="about-area bg-grey section-padding">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-12">
                    <div class="about-content">
                        <h6>IT Solution Company</h6>
                        <h2>We design, develop, implement and support <span class="color-text">IT Systems</span></h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua. exercitation ullamco laboris nisi ut aliquip ex ea commodo
                            consequat aute irure dolor in reprehenderit velit.</p>

                        <div class="about-blockquote">
                            <h3>We are a highly trained and qualified team ready to provide viable IT solutions together
                                with full-time support and expert advice to fulfill your business needs.</h3>

                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="about-image">
                        <img src="assets/img/about.jpg" alt="img">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End About Section -->
    <!-- Start Why Choose Us Section -->
    <section class="whychoose-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="section-title">
                        <h6>TechSoft So Different?</h6>
                        <h2>Why Trust Us?</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach ($trust as $d)
                    <div class="col-lg-4 col-md-6">
                        <div class="whychoose-single-item">
                            <div class="whychoose-icon-box">
                                <img src="{{ asset('pictures/' . $d->photo) }}" alt="">
                            </div>
                            <div class="whychoose-info">
                                <h3>{{ $d->name }}</h3>
                                <p>{{ $d->designation }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>


            {{-- <div class="col-lg-4 col-md-6">
                    <div class="whychoose-single-item">
                        <div class="whychoose-icon-box">
							<img src="assets/img/icon/icon-2.svg" alt="svg icon">
                        </div>
                        <div class="whychoose-info">
                            <h3>Network Monitoring</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt dolore</p>
                        </div>
                    </div>
                </div> --}}
            {{-- <div class="col-lg-4 col-md-6">
                    <div class="whychoose-single-item">
                        <div class="whychoose-icon-box">
							<img src="assets/img/icon/icon-3.svg" alt="svg icon">
                        </div>
                        <div class="whychoose-info">
                            <h3>Network Security</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt dolore</p>
                        </div>
                    </div>
                </div> --}}
            {{-- <div class="col-lg-4 col-md-6">
                    <div class="whychoose-single-item">
                        <div class="whychoose-icon-box">
							<img src="assets/img/icon/icon-4.svg" alt="svg icon">
                        </div>
                        <div class="whychoose-info">
                            <h3>Managed IT Service</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt dolore</p>
                        </div>
                    </div>
                </div> --}}
            {{-- <div class="col-lg-4 col-md-6">
                    <div class="whychoose-single-item">
                        <div class="whychoose-icon-box">
							<img src="assets/img/icon/icon-5.svg" alt="svg icon">
                        </div>
                        <div class="whychoose-info">
                            <h3>Dedicated IT Support</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt dolore</p>
                        </div>
                    </div>
                </div> --}}
            {{-- <div class="col-lg-4 col-md-6">
                    <div class="whychoose-single-item">
                        <div class="whychoose-icon-box">
							<img src="assets/img/icon/icon-6.svg" alt="svg icon">
                        </div>
                        <div class="whychoose-info">
                            <h3>Custom Developed Software</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt dolore</p>
                        </div>
                    </div>
                </div> --}}
        </div>
        </div>
    </section>
    <!-- End Why Choose Us Section -->
    <!-- Start Project Section -->
    <section id="project" class="project-area project-area-1 bg-grey section-padding">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="section-title">
                        <h6>Featured Works</h6>
                        <h2>Case Studies</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="single-project">
                        <div class="project-image">
                            <img src="assets/img/projects/work-1.jpg" alt="image">
                        </div>
                        <div class="works-overly-info">
                            <div class="text">
                                <h3><a href="#">Insurance IT Solutions</a></h3>
                                <a href="#" class="works-category">View Project</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-project">
                        <div class="project-image">
                            <img src="assets/img/projects/work-2.jpg" alt="image">
                        </div>
                        <div class="works-overly-info">
                            <div class="text">
                                <h3><a href="#">IT Services</a></h3>
                                <a href="#" class="works-category">View Project</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-project">
                        <div class="project-image">
                            <img src="assets/img/projects/work-3.jpg" alt="image">
                        </div>
                        <div class="works-overly-info">
                            <div class="text">
                                <h3><a href="#">Business Intelligence</a></h3>
                                <a href="#" class="works-category">View Project</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-project">
                        <div class="project-image">
                            <img src="assets/img/projects/work-4.jpg" alt="image">
                        </div>
                        <div class="works-overly-info">
                            <div class="text">
                                <h3><a href="#">IT Consulting</a></h3>
                                <a href="#" class="works-category">View Project</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-project">
                        <div class="project-image">
                            <img src="assets/img/projects/work-5.jpg" alt="image">
                        </div>
                        <div class="works-overly-info">
                            <div class="text">
                                <h3><a href="#">Managed Analytics</a></h3>
                                <a href="#" class="works-category">View Project</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-project">
                        <div class="project-image">
                            <img src="assets/img/projects/work-6.jpg" alt="image">
                        </div>
                        <div class="works-overly-info">
                            <div class="text">
                                <h3><a href="#">Data Security</a></h3>
                                <a href="#" class="works-category">View Project</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- project more button -->
                <div class="col-lg-12 col-md-12">
                    <div class="project-more-btn-box text-center">
                        <a class="btn btn-primary" href="#0">View All Projects</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Projects Section -->


    <!-- Start Team Section -->
    <section class="team-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="section-title">
                        <h6>Our Leadership</h6>
                        <h2>Team Members</h2>
                    </div>
                </div>
            </div>

            <div class="row">
                @foreach ($data as $d)
                    <div class="col-lg-3 col-md-6">
                        <div class="single-team-box">
                            <div class="team-image">
                                <img class="img-fluid w-100" src="{{ asset('pictures/' . $d->photo) }}" alt="">
                                <div class="team-social-box">
                                    <div class="team-social-icon">
                                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                                        <a href="#"><i class="fab fa-twitter"></i></a>
                                        <a href="#"><i class="fab fa-linkedin"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="team-info">
                                <h3>{{ $d->name }}</h3>
                                <span>{{ $d->designation }}</span>
                            </div>
                        </div>
                    </div>
                @endforeach
                {{-- <div class="col-lg-3 col-md-6">
					<div class="single-team-box">
						<div class="team-image">
							<img src="assets/img/team/team-2.jpg" alt="team" />
							<div class="team-social-box">
								<div class="team-social-icon">
									<a href="#"><i class="fab fa-facebook-f"></i></a>
									<a href="#"><i class="fab fa-twitter"></i></a>
									<a href="#"><i class="fab fa-linkedin"></i></a>
								</div>
							</div>
						</div>
						<div class="team-info">
							<h3>Morris Nelson</h3>
							<span>Staffing Director</span>
						</div>
					</div>
				</div> --}}
                {{-- <div class="col-lg-3 col-md-6">
					<div class="single-team-box">
						<div class="team-image">
							<img src="assets/img/team/team-3.jpg" alt="team" />
							<div class="team-social-box">
								<div class="team-social-icon">
									<a href="#"><i class="fab fa-facebook-f"></i></a>
									<a href="#"><i class="fab fa-twitter"></i></a>
									<a href="#"><i class="fab fa-linkedin"></i></a>
								</div>
							</div>
						</div>
						<div class="team-info">
							<h3>Travis Wallace</h3>
							<span>Content Executive</span>
						</div>
					</div>
				</div> --}}
                {{-- <div class="col-lg-3 col-md-6">
					<div class="single-team-box">
						<div class="team-image">
							<img src="assets/img/team/team-4.jpg" alt="team" />
							<div class="team-social-box">
								<div class="team-social-icon">
									<a href="#"><i class="fab fa-facebook-f"></i></a>
									<a href="#"><i class="fab fa-twitter"></i></a>
									<a href="#"><i class="fab fa-linkedin"></i></a>
								</div>
							</div>
						</div>
						<div class="team-info">
							<h3>Steve Frazier</h3>
							<span>Technical Executive</span>
						</div>
					</div>
				</div> --}}
            </div>
        </div>
    </section>
    <!-- End Team Section -->
    <!-- Start Testimonials Section -->
    <section class="testimonial-area pt-50 pb-100">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title">
                        <h6>Our Client Say</h6>
                        <h2>Testimonials</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="testimonial-slide">
                        <div class="owl-carousel owl-theme">
                            <!-- testimonials item -->
                            <div class="single-testimonial">
                                <div class="testimonial-content-inner">
                                    <div class="testimonial-text">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                            incididunt ut laboredolore magna aliqua</p>
                                        <div class="rating-box">
                                            <ul>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                            </ul>
                                            <h6>Google</h6>
                                        </div>
                                    </div>
                                    <div class="author-info-box">
                                        <div class="author-img">
                                            <img src="assets/img/client/testimonial-1.jpg" alt="testimonial">
                                        </div>
                                        <div class="author-bio-info">
                                            <h3>Saabir al-Obeid</h3>
                                            <span>Managing Director</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- testimonials item -->
                            <div class="single-testimonial">
                                <div class="testimonial-content-inner">
                                    <div class="testimonial-text">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                            incididunt ut laboredolore magna aliqua</p>
                                        <div class="rating-box">
                                            <ul>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                            </ul>
                                            <h6>Google</h6>
                                        </div>
                                    </div>
                                    <div class="author-info-box">
                                        <div class="author-img">
                                            <img src="assets/img/client/testimonial-2.jpg" alt="testimonial">
                                        </div>
                                        <div class="author-bio-info">
                                            <h3>Ruben Houston</h3>
                                            <span>Service Manager</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- testimonials item -->
                            <div class="single-testimonial">
                                <div class="testimonial-content-inner">
                                    <div class="testimonial-text">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                            incididunt ut laboredolore magna aliqua</p>
                                        <div class="rating-box">
                                            <ul>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                            </ul>
                                            <h6>Google</h6>
                                        </div>
                                    </div>
                                    <div class="author-info-box">
                                        <div class="author-img">
                                            <img src="assets/img/client/testimonial-3.jpg" alt="testimonial">
                                        </div>
                                        <div class="author-bio-info">
                                            <h3>Rose Hopkins</h3>
                                            <span>Account Manager</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- testimonials item -->
                            <div class="single-testimonial">
                                <div class="testimonial-content-inner">
                                    <div class="testimonial-text">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                            incididunt ut laboredolore magna aliqua</p>
                                        <div class="rating-box">
                                            <ul>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                            </ul>
                                            <h6>Google</h6>
                                        </div>
                                    </div>
                                    <div class="author-info-box">
                                        <div class="author-img">
                                            <img src="assets/img/client/testimonial-4.jpg" alt="testimonial">
                                        </div>
                                        <div class="author-bio-info">
                                            <h3>Monica Frazier</h3>
                                            <span>Solutions Coordinator</span>
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
    <!-- End Testimonials Section -->
    <!-- Start Blog Section -->
    <section class="blog-area bg-grey section-padding">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="section-title">
                        <h6>Our Latest Blog</h6>
                        <h2>News & Updates</h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6">
                    <div class="single-blog">
                        <div class="post-img">
                            <a href="#">
                                <img src="assets/img/blog/blog-1.jpg" alt="" />
                            </a>
                        </div>
                        <div class="blog-content">
                            <div class="blog-date">
                                <ul class="blog-list">
                                    <li>
                                        <h6>20 January - 2024</h6>
                                    </li>
                                    <li><span class="blog-inline-sep">|</span></li>
                                    <li><a href="#">Technology</a></li>
                                </ul>
                            </div>
                            <div class="blog-body-title">
                                <h3><a href="#">What Could 5g Change About The Way We Use Technology?</a></h3>
                            </div>
                            <div class="blog-body-text">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                    ut labore veniam dolore.</p>
                            </div>
                            <div class="blog-bottom-text-link"> <a href="#">+ Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-blog">
                        <div class="post-img">
                            <a href="#">
                                <img src="assets/img/blog/blog-2.jpg" alt="" />
                            </a>
                        </div>
                        <div class="blog-content">
                            <div class="blog-date">
                                <ul class="blog-list">
                                    <li>
                                        <h6>25 January - 2024</h6>
                                    </li>
                                    <li><span class="blog-inline-sep">|</span></li>
                                    <li><a href="#">IT Services</a></li>
                                </ul>
                            </div>
                            <div class="blog-body-title">
                                <h3><a href="#">3 Factors To Consider When Choosing A Managed It Services</a></h3>
                            </div>
                            <div class="blog-body-text">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                    ut labore veniam dolore.</p>
                            </div>
                            <div class="blog-bottom-text-link"> <a href="#">+ Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-blog">
                        <div class="post-img">
                            <a href="#">
                                <img src="assets/img/blog/blog-3.jpg" alt="" />
                            </a>
                        </div>
                        <div class="blog-content">
                            <div class="blog-date">
                                <ul class="blog-list">
                                    <li>
                                        <h6>30 January - 2024</h6>
                                    </li>
                                    <li><span class="blog-inline-sep">|</span></li>
                                    <li><a href="#">Business</a></li>
                                </ul>
                            </div>
                            <div class="blog-body-title">
                                <h3><a href="#">How To Quickly Shift To A Work-from-home Business Model</a></h3>
                            </div>
                            <div class="blog-body-text">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                    ut labore veniam dolore.</p>
                            </div>
                            <div class="blog-bottom-text-link"> <a href="#">+ Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="blog-more-btn-box mt-45 text-center">
                        <a href="#0" class="btn btn-primary mr-15">Get Free Quote</a>
                        <a href="#0" class="btn btn-primary">View All Blog</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Blog Section -->
    <!-- Start Hire Section -->
    <section class="consultation-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="consultation-content text-center">
                        <h2>We’re here to help and answer any question you might have.</h2>
                        <p>Free Consultation About Our IT Solutions For Your Business</p>
                        <a href="tel:080707555321" class="btn btn-primary"> Let’s Talk Now</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Hire Section -->
    <!-- Start Partner Logo Section -->
    <div class="partner-area">
        <div class="container">
            <div id="partner-carousel" class="partner-carousel owl-carousel owl-theme owl-loaded">
                <div class="partner-item">
                    <a href="#0">
                        <img src="assets/img/partner-logo/client-1.png" alt="partner-image">
                    </a>
                </div>
                <div class="partner-item">
                    <a href="#0">
                        <img src="assets/img/partner-logo/client-2.png" alt="partner-image">
                    </a>
                </div>
                <div class="partner-item">
                    <a href="#0">
                        <img src="assets/img/partner-logo/client-3.png" alt="partner-image">
                    </a>
                </div>
                <div class="partner-item">
                    <a href="#0">
                        <img src="assets/img/partner-logo/client-4.png" alt="partner-image">
                    </a>
                </div>
                <div class="partner-item">
                    <a href="#0">
                        <img src="assets/img/partner-logo/client-5.png" alt="partner-image">
                    </a>
                </div>
                <div class="partner-item">
                    <a href="#0">
                        <img src="assets/img/partner-logo/client-6.png" alt="partner-image">
                    </a>
                </div>
                <div class="partner-item">
                    <a href="#0">
                        <img src="assets/img/partner-logo/client-7.png" alt="partner-image">
                    </a>
                </div>
                <div class="partner-item">
                    <a href="#0">
                        <img src="assets/img/partner-logo/client-8.png" alt="partner-image">
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- End Partner Logo Section -->
@endsection
