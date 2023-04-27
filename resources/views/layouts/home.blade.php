<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
  <!-- Meta Tags -->
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="author" content="Laralink">
  <!-- Page Title -->
  <title>Abdulraziq Rohilli</title>
  
  <!-- Favicon Icon -->
  <link rel="icon" href="{{ asset('frontend/assets/img/favicon.png') }}" />
  <!-- Stylesheets -->
  <link rel="stylesheet" href="{{ asset('frontend/assets/css/bootstrap.min.css') }}" />
  <link rel="stylesheet" href="{{ asset('frontend/assets/css/fontawesome.css') }}" />
  <link rel="stylesheet" href="{{ asset('frontend/assets/css/slick.css') }}" />
  <link rel="stylesheet" href="{{ asset('frontend/assets/css/lightgallery.min.css') }}" />
  <link rel="stylesheet" href="{{ asset('frontend/assets/css/animate.css') }}" />
  <link rel="stylesheet" href="{{ asset('frontend/assets/css/style.css') }}" />
</head>

<body id="home">
  <!-- Start Header Section -->
  <header class="st-site-header st-style1 st-sticky-header">
    <div class="st-main-header">
      <div class="container">
        <div class="st-main-header-in">
          <div class="st-main-header-left">
            <a class="st-site-branding" href="index.html"><img src="{{ asset('frontend/assets/img/logo.png') }}" alt="Rohilli"></a>
          </div>
          <div class="st-main-header-right">
            <div class="st-nav">
              <ul class="st-nav-list st-onepage-nav">
                <li><a href="#home" class="st-smooth-move">Home</a></li>
                <li><a href="#about" class="st-smooth-move">About</a></li>
                <li><a href="#portfolio" class="st-smooth-move">Portfolio</a></li>
                <li><a href="#blog" class="st-smooth-move">Blog</a></li>
                <li><a href="#contact" class="st-smooth-move">Contact</a></li>
              </ul>
              <div class="sp-phone">
                <svg viewBox="0 0 513.64 513.64">
                  <g>
                    <g>
                      <path d="M499.66,376.96l-71.68-71.68c-25.6-25.6-69.12-15.359-79.36,17.92c-7.68,23.041-33.28,35.841-56.32,30.72c-51.2-12.8-120.32-79.36-133.12-133.12c-7.68-23.041,7.68-48.641,30.72-56.32c33.28-10.24,43.52-53.76,17.92-79.36l-71.68-71.68c-20.48-17.92-51.2-17.92-69.12,0l-48.64,48.64c-48.64,51.2,5.12,186.88,125.44,307.2c120.32,120.32,256,176.641,307.2,125.44l48.64-48.64C517.581,425.6,517.581,394.88,499.66,376.96z" />
                    </g>
                  </g>
                </svg>
                <div class="sp-phone-no"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>
  <!-- End Header Section -->

  @yield('dynamic')


  <!-- Scripts -->
  <script src="{{ asset('frontend/assets/js/jquery-1.12.4.min.js') }}"></script>
  <script src="{{ asset('frontend/assets/js/jquery.slick.min.js') }}"></script>
  <script src="{{ asset('frontend/assets/js/lightgallery.min.js') }}"></script>
  <script src="{{ asset('frontend/assets/js/wow.min.js') }}"></script>
  <script src="{{ asset('frontend/assets/js/ripples.min.js') }}"></script>
  <script src="{{ asset('frontend/assets/js/particles.min.js') }}"></script>
  <script src="{{ asset('frontend/assets/js/main.js') }}"></script>
</body>

</html>
