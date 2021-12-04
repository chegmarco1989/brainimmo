<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Brain Technologie - Immo Detail</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ asset('assets/img/favicon.png') }}" rel="icon">
  <link href="{{ asset('assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('assets/vendor/animate.css/animate.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">

</head>

<body>

  <!-- ======= Header/Navbar ======= -->
  <nav class="navbar navbar-default navbar-trans navbar-expand-lg fixed-top">
    <div class="container">
      <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarDefault" aria-controls="navbarDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span></span>
        <span></span>
        <span></span>
      </button>
      <a class="navbar-brand text-brand" href="index.html">Brain<span class="color-b">Immo</span></a>

      <div class="navbar-collapse collapse justify-content-center" id="navbarDefault">
        <ul class="navbar-nav">

        <!--  <li class="nav-item">
            <a class="nav-link active" href="index.html">Home</a>
          </li>

          <li class="nav-item">
            <a class="nav-link " href="about.html">About</a>
          </li>

          <li class="nav-item">
            <a class="nav-link " href="property-grid.html">Property</a>
          </li>

          <li class="nav-item">
            <a class="nav-link " href="blog-grid.html">Blog</a>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Pages</a>
            <div class="dropdown-menu">
              <a class="dropdown-item " href="property-single.html">Property Single</a>
              <a class="dropdown-item " href="blog-single.html">Blog Single</a>
              <a class="dropdown-item " href="agents-grid.html">Agents Grid</a>
              <a class="dropdown-item " href="agent-single.html">Agent Single</a>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="contact.html">Contact</a>
          </li> -->
		  
		  @if (Route::has('login'))
                @auth
                    <li class="nav-item">
						<a href="{{ url('/home') }}" class="nav-link ">
							Home
						</a>
					</li>
                @else
					<li class="nav-item">
						<a href="{{ route('login') }}" class="nav-link ">
							<i class="bi bi-file-earmark-lock"></i> Log in
						</a>
					</li>
					@if (Route::has('register'))
						<li class="nav-item">
							<a href="{{ route('register') }}" class="nav-link ">
								<i class="bi bi-person-plus-fill"></i> Register
							</a>
						</li>
					@endif
                @endauth
          @endif
        </ul>
      </div>

      <!-- ======= <button type="button" class="btn btn-b-n navbar-toggle-box navbar-toggle-box-collapse" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01">
        <i class="bi bi-search"></i>
      </button> -->

    </div>
  </nav><!-- End Header/Navbar -->

	<main id="main">
	<!-- ======= Intro Single ======= -->
		<section class="intro-single">
		  <div class="container">
			<div class="row">
			  <div class="col-md-12 col-lg-8">
				<div class="title-single-box">
				  <h1 class="title-single">{{ $post->title }}</h1>
				  <span class="color-text-a">...</span>
				</div>
			  </div>
			  <div class="col-md-12 col-lg-4">
				<nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
				  <ol class="breadcrumb">
					<li class="breadcrumb-item">
					  <a href="index.html">Home</a>
					</li>
					<li class="breadcrumb-item">
					  <a href="property-grid.html">Properties</a>
					</li>
					<li class="breadcrumb-item active" aria-current="page">
					  {{ $post->title }}
					</li>
				  </ol>
				</nav>
			  </div>
			</div>
		  </div>
		</section><!-- End Intro Single-->

		<!-- ======= Property Single ======= -->
		<section class="property-single nav-arrow-b">
		  <div class="container">
			<div class="row justify-content-center">
			  <div class="col-lg-8">
				<div id="property-single-carousel" class="swiper">
				  <div class="swiper-wrapper">
					<div class="carousel-item-b swiper-slide">
					  <img src="/images/{{ $post->image_url }}" alt="">
					</div>
				  </div>
				</div>
				<div class="property-single-carousel-pagination carousel-pagination"></div>
			  </div>
			</div>

			<div class="row">
			  <div class="col-sm-12">

				<div class="row justify-content-between">
				  <div class="col-md-5 col-lg-4">
					<div class="property-price d-flex justify-content-center foo">
					  <div class="card-header-c d-flex">
						<div class="card-box-ico">
						  <span class="bi bi-cash">$</span>
						</div>
						<div class="card-title-c align-self-center">
						  <h5 class="title-c">{{ $post->price }} </h5>
						</div>
					  </div>
					</div>
					<div class="property-summary">
					  <div class="row">
						<div class="col-sm-12">
						  <div class="title-box-d section-t4">
							<h3 class="title-d">Quick Summary</h3>
						  </div>
						</div>
					  </div>
					  <div class="summary-list">
						<ul class="list">
						  <li class="d-flex justify-content-between">
							<strong>Property ID:</strong>
							<span>1134</span>
						  </li>
						  <li class="d-flex justify-content-between">
							<strong>Location:</strong>
							<span>Chicago, IL 606543</span>
						  </li>
						  <li class="d-flex justify-content-between">
							<strong>Property Type:</strong>
							<span>House</span>
						  </li>
						  <li class="d-flex justify-content-between">
							<strong>Status:</strong>
							<span>Sale</span>
						  </li>
						  <li class="d-flex justify-content-between">
							<strong>Area:</strong>
							<span>340m
							  <sup>2</sup>
							</span>
						  </li>
						  <li class="d-flex justify-content-between">
							<strong>Beds:</strong>
							<span>4</span>
						  </li>
						  <li class="d-flex justify-content-between">
							<strong>Baths:</strong>
							<span>2</span>
						  </li>
						  <li class="d-flex justify-content-between">
							<strong>Garage:</strong>
							<span>1</span>
						  </li>
						</ul>
					  </div>
					</div>
				  </div>
				  <div class="col-md-7 col-lg-7 section-md-t3">
					<div class="row">
					  <div class="col-sm-12">
						<div class="title-box-d">
						  <h3 class="title-d">Property Description</h3>
						</div>
					  </div>
					</div>
					<div class="property-description">
					  <p class="description color-text-a">
						{{ $post->description }} 
					  </p>
					  <p class="description color-text-a no-margin">
						...
					  </p>
					</div>
				   </div>
				</div>
			  </div>
			
			</div>
		  </div>
		</section><!-- End Property Single-->
	  </main><!-- End #main -->
  
  <p></p>
  <p></p>
  <p></p>

  <!-- ======= Footer ======= -->
  <footer>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <nav class="nav-footer">
            <ul class="list-inline">
              <li class="list-inline-item">
                <a href="#">Home</a>
              </li>
              <li class="list-inline-item">
                <a href="#">About</a>
              </li>
              <li class="list-inline-item">
                <a href="#">Property</a>
              </li>
              <li class="list-inline-item">
                <a href="#">Blog</a>
              </li>
              <li class="list-inline-item">
                <a href="#">Contact</a>
              </li>
            </ul>
          </nav>
          <div class="socials-a">
            <ul class="list-inline">
              <li class="list-inline-item">
                <a href="#">
                  <i class="bi bi-facebook" aria-hidden="true"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="bi bi-twitter" aria-hidden="true"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="bi bi-instagram" aria-hidden="true"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="bi bi-linkedin" aria-hidden="true"></i>
                </a>
              </li>
            </ul>
          </div>
          <div class="copyright-footer">
            <p class="copyright color-text-a">
              &copy; Copyright
              <span class="color-a">Brain Technologie</span> All Rights Reserved.
            </p>
          </div>
          <div class="credits">
           Designed by <a href="">Marc-Aurèle CHEGNIMONHAN</a>
          </div>
        </div>
      </div>
    </div>
  </footer><!-- End  Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('assets/js/main.js') }}"></script>

</body>

</html>