
  
@extends('layouts.home')
@section('dynamic')  
  
  
  
  <!-- Start Hero Seciton -->
  
  
  <div class="st-height-b80 st-height-lg-b80"></div>
  <section class="st-hero-wrap st-parallax">
    <div class="st-hero st-style1 st-ripple-version">
      <div class="container">
        <div class="st-hero-text">
          
          <h3>Hello, I’m</h3>
          <h1>{{$users->f_name}}<br>{{$users->l_name}}
          </h1>
          <h2>{{$users->occupation}}</h2>
          <div class="st-hero-btn">
            <a href="#contact" class="st-btn st-style1 st-color1 st-smooth-move">Hire me</a>
          </div>
        </div>
      </div>
    </div>
    <!-- Hero Image - Social Link Group -->
    <div class="st-hero-img st-to-right">
      <img class="wow fadeInRight" src="{{ url('image/profile/'.$users->image) }}">
      <div class="st-social-group wow fadeInLeft">
        <div class="st-social-link">
          <a href="#" class="st-social-btn active">
            <span class="st-social-icon"><i class="fab fa-facebook"></i></span>
            <span class="st-icon-name">Facebook</span>
          </a>
          <a href="#" class="st-social-btn">
            <span class="st-social-icon"><i class="fab fa-instagram"></i></span>
            <span class="st-icon-name">Instagram</span>
          </a>
          <a href="#" class="st-social-btn">
            <span class="st-social-icon"><i class="fab fa-tiktok"></i></span>
            <span class="st-icon-name">Tiktok</span>
          </a>
          <a href="#" class="st-social-btn">
            <span class="st-social-icon"><i class="fab fa-linkedin"></i></span>
            <span class="st-icon-name">LinkedIn</span>
          </a>
        </div>
      </div>
    </div>
    <div id="particles-js"></div>
  </section>
  <!-- End Hero Seciton -->

  <!-- Start About Seciton -->
  <section id="about" class="st-about-wrap">
    <div class="st-height-b100 st-height-lg-b80"></div>
    <div class="container">
      <div class="st-section-heading st-style1">
        <h4 class="st-section-heading-title">ABOUT ME</h4>
        <h2 class="st-section-heading-subtitle">ABOUT ME</h2>
      </div>
      <div class="st-height-b25 st-height-lg-b25"></div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-lg-6 wow fadeInLeft">
          <div class="st-about-img-wrap">
            <div class="st-about-img st-dynamic-bg st-bg" data-src="{{ url('image/profile/'.$users->services_image) }}"></div>
          </div>
          <div class="st-height-b0 st-height-lg-b30"></div>
        </div>
        <div class="col-lg-6">
          <div class="st-vertical-middle">
            <div class="st-vertical-middle-in">
              <div class="st-text-block st-style1">
                <h2 class="st-text-block-title">Hi There! I'm <span>{{ $users->f_name }}</span><span> {{ $users->l_name }}</span> </h2>
                <h4 class="st-text-block-subtitle">{{ $users->occupation }}</h4>
                <div class="st-text-block-text">
                  <p>{{$users->description}}</p>
                </div>
                <ul class="st-text-block-details st-mp0">
                  <li><span>Birthday</span> : <span>{{$users->db}}</span></li>
                  <li><span>Phone</span> : <span>{{$users->phone}}</span></li>
                  <li><span>Email</span> : <a href="mailto:{{$users->email}}"><span>{{$users->email}}</span></a></li>
                  <li><span>Address</span> : <span>{{$users->address}}</span></li>
                  <li><span>Language</span> : <span>{{$users->language}}</span></li>
                  <li><span>Freelance</span> : <span>avilable</span></li>
                </ul>
                <div class="st-text-block-btn">
                  <a href="#" class="st-btn st-style1 st-color1">Download CV</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End About Seciton -->

  <!-- Start Service Seciton -->
  <section>
    <div class="st-height-b100 st-height-lg-b80"></div>
    <div class="container">
      <div class="st-section-heading st-style1">
        <h4 class="st-section-heading-title">SERVICES</h4>
        <h2 class="st-section-heading-subtitle">SERVICES</h2>
      </div>
      <div class="st-height-b25 st-height-lg-b25"></div>
    </div>

    <!-- Iconbox Container -->

    <div class="container">
      <div class="row">
        @foreach ($services as $services )
        <div class="col-lg-4 col-md-6">
          <div class="st-iconbox st-style1">
            <div class="{{ $services->icon }}"></div>
            <h2 class="st-iconbox-title">{{ $services->title }}</h2>
            <div class="st-iconbox-text">{{ $services->description }}</div>
          </div>
          <div class="st-height-b30 st-height-lg-b30"></div>
        </div> 
        @endforeach
      </div>
    </div>
    <div class="st-height-b100 st-height-lg-b80"></div>
  </section>
  <!-- End Service Seciton -->

  <!-- Start Skill Seciton -->
  <section class="st-dark-bg">
    <div class="st-height-b100 st-height-lg-b80"></div>
    <div class="container">
      <div class="st-section-heading st-style1">
        <h4 class="st-section-heading-title">MY SKILLS</h4>
        <h2 class="st-section-heading-subtitle">MY SKILLS</h2>
      </div>
      <div class="st-height-b25 st-height-lg-b25"></div>
    </div>

    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <div class="st-skill-wrap">
            <div class="st-skill-heading">
              <h2 class="st-skill-title">{{ $users->skill_title}}</h2>
              <div class="st-skill-subtitle">{{ $users->skill_description}}</div>
            </div><!-- .st-skill-heading -->
          </div>
        </div>

        <!-- Progressbar -->

        <div class="col-lg-6">
          <div class="st-height-b0 st-height-lg-b30"></div>
          <div class="st-progressbar-wrap">
            @foreach ($skills as $skills )
            <div class="st-height-b30 st-height-lg-b20"></div>
            <div class="st-single-progressbar">
              <div class="st-progressbar-heading">
                <h3 class="st-progressbar-title">{{ $skills->section}}</h3>
                <div class="st-progressbar-percentage wow fadeInLeft" data-wow-duration="1.5s" data-wow-delay="0.5s">{{ $skills->percentage}}%</div>
              </div>
              <div class="st-progressbar" data-progress="{{ $skills->percentage}}">
                <div class="st-progressbar-in wow fadeInLeft"></div>
              </div>
            </div>   
            @endforeach
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Skill Seciton -->

  <!-- Start Portfolio Seciton -->
  <section id="portfolio">
    <div class="st-height-b100 st-height-lg-b80"></div>
    <div class="container">
      <div class="st-section-heading st-style1">
        <h4 class="st-section-heading-title">PORTFOLIOS</h4>
        <h2 class="st-section-heading-subtitle">PORTFOLIOS</h2>
      </div>
      <div class="st-height-b25 st-height-lg-b25"></div>
    </div>
    <div class="container">
      <div class="row">
        @foreach ($portfolio as $portfolio)
        <div class="col-lg-4 col-md-6 pb-5">
          <div class="st-portfolio-single st-style1 st-lightgallery">
            <div class="st-portfolio-item">
                <div class="st-portfolio-img st-zoom-in">
                  <img src="{{ url('image/portfolio/'.$portfolio->image) }}" alt="portfolio">
                  <a href="{{ $portfolio->link }}" target="_blank" class="btn btn-primary"> See projects</a>
                </div>
            </div>
          </div>
        </div>  
        @endforeach
      </div>
    </div>
    <div class="st-height-b100 st-height-lg-b80"></div>
  </section>
  <!-- End Portfolio Seciton -->

  
  <!-- Start Blog Seciton -->
  <section id="blog">
    <div class="st-height-b100 st-height-lg-b80"></div>
    <div class="container">
      <div class="st-section-heading st-style1">
        <h4 class="st-section-heading-title">BLOG</h4>
        <h2 class="st-section-heading-subtitle">LATEST NEWS</h2>
      </div>
      <div class="st-height-b25 st-height-lg-b25"></div>
    </div>

    <!-- Latest News Container -->

    <div class="container">
      <div class="st-slider st-style2">
        <div class="slick-container" data-autoplay="0" data-loop="1" data-speed="600" data-center="0"
          data-slides-per-view="responsive" data-xs-slides="1" data-sm-slides="2" data-md-slides="3"
          data-lg-slides="3" data-add-slides="3">
          <div class="slick-wrapper">
            @foreach ($blog as $blog)
            <div class="slick-slide-in">
              <div class="st-post-single st-style1">
                <div class="st-post-thumb st-zoom">
                  <img src="{{ url('image/blog/'.$blog->image) }}" class="st-zoom-in" alt="blog1">
                </div>
                <div class="st-post-info">
                  <div class="st-post-date">
                    By:
                    <span class="st-post-author">{{ $users->l_name}}</span>
                    <span class="st-post-date-divider">|</span>
                    <span class="st-post-publish-date">{{ $blog->date}}</span>
                  </div>
                  <h4 class="st-post-title">{{ $blog->title}}</h4>
                  <a href="{{ url('/blog/full_detail/'.$blog->id)}}" class="link-view">Read more <span class="icon-arr"></span></a>

                </div>
              </div>
            </div>
            <!-- .slick-slide-in -->
              
            @endforeach
            
            
          </div>
        </div><!-- .slick-container -->
        <div class="pagination st-style1 st-flex st-hidden"></div>
        <!-- If dont need Pagination then add class .st-hidden -->
      </div><!-- .st-slider -->
    </div>
    <div class="st-height-b95 st-height-lg-b75"></div>
  </section>
  <!-- End Blog Seciton -->

  <!-- Start Contact Seciton -->
  <section id="contact" class="st-dark-bg">
    <div class="st-height-b100 st-height-lg-b80"></div>
    <div class="container">
      <div class="st-section-heading st-style1">
        <h4 class="st-section-heading-title">CONTACT ME</h4>
        <h2 class="st-section-heading-subtitle">CONTACT ME</h2>
      </div>
      <div class="st-height-b25 st-height-lg-b25"></div>
    </div>

    <!-- Contact Container -->

    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <h3 class="st-contact-title">Just say Hello</h3>
          <div id="st-alert"></div>
          <form action="#" method="POST" class="st-contact-form" id="contact-form">
            <div class="st-form-field">
              <input type="text" id="name" name="name" placeholder="Your Name" required>
            </div>
            <div class="st-form-field">
              <input type="text" id="email" name="email" placeholder="Your Email" required>
            </div>
            <div class="st-form-field">
              <input type="text" id="subject" name="subject" placeholder="Your Subject" required>
            </div>
            <div class="st-form-field">
              <textarea cols="30" rows="10" id="msg" name="msg" placeholder="Your Message" required></textarea>
            </div>
            <button class="st-btn st-style1 st-color1" type="submit" id="submit" name="submit">Send message</button>
          </form>
        </div>
        <div class="st-height-b0 st-height-lg-b30"></div>

        <div class="col-lg-6">
          <div class="st-height-b0 st-height-lg-b40"></div>
          <h3 class="st-contact-title">Contact Info</h3>
          <div class="st-contact-text">
            Contact me I will response as soon as possible!
          </div>
          <div class="st-contact-info-wrap">
            <div class="st-single-contact-info">
              <i class="fas fa-envelope"></i>
              <div class="st-single-info-details">
                <h4>Email</h4>
                <a href="mailto:{{$users->email}}">{{$users->email}}</a>
              </div>
            </div>
            <div class="st-single-contact-info">
              <i class="fas fa-phone-alt"></i>
              <div class="st-single-info-details">
                <h4>Phone</h4>
                <span>{{$users->phone}}</span>
              </div>
            </div>
            <div class="st-single-contact-info">
              <i class="fas fa-map-marker-alt"></i>
              <div class="st-single-info-details">
                <h4>Address</h4>
                <span>{{$users->address}}</span>
              </div>
            </div>
            <div class="st-social-info">
              <div class="st-social-text">Visite my social profile and get connected</div>
              <div class="st-social-link">
                <a href="#" class="st-social-btn active">
                  <span class="st-social-icon"><i class="fab fa-facebook"></i></span>
                  <span class="st-icon-name">Facebook</span>
                </a>
                <a href="#" class="st-social-btn">
                  <span class="st-social-icon"><i class="fab fa-instagram"></i></span>
                  <span class="st-icon-name">Instagram</span>
                </a>
                <a href="#" class="st-social-btn">
                  <span class="st-social-icon"><i class="fab fa-tiktok"></i></span>
                  <span class="st-icon-name">Tiktok</span>
                </a>
                <a href="#" class="st-social-btn">
                  <span class="st-social-icon"><i class="fab fa-linkedin"></i></span>
                  <span class="st-icon-name">LinkedIn</span>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="st-height-b100 st-height-lg-b80"></div>
  </section>
  <!-- End Contact Seciton -->
  @endsection