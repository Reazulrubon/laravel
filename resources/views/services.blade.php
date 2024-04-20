@extends('layout')

@section('title')
   services
@endsection

@section('content')

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
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt dolore magna aliqua</p>
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
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt dolore magna aliqua</p>
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
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt dolore magna aliqua</p>
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

@endsection