@extends('admin.index')

@section('title')
    Admin | Panel
@endsection

@section('adminc')
    <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1><marquee>Welcome to dashboard..</marquee></h1>
          </div>
          <div class="col-sm-6 bg-info">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active ">Blank Page</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

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
                      <img src="assets/img/about.jpg"  alt="img" >
                  </div>
              </div>
          </div>
      </div>
  </section>
  <!-- End About Section -->
@endsection