@extends('layouts.main')
@section('content')

{{-- <header id="header" class="fixed-top d-flex align-items-center header-transparent"> --}}
    <header id="header" class="fixed-top d-flex align-items-center ">
   <div class="container d-flex align-items-center justify-content-between">

      <div class="logo">
         <!-- <h1><a href="index.html"><span>SN</span></a></h1> -->
         <!-- Uncomment below if you prefer to use an image logo -->
         <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>
      </div>

      <nav id="navbar" class="navbar">
         <ul>
            <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
            <li><a class="nav-link scrollto" href="#about">About</a></li>

            <li><a class="nav-link scrollto" href="#project">Project</a></li>
            <li><a class="nav-link scrollto" href="#team">Team</a></li>
            <!-- <li><a class="nav-link scrollto" href="#pricing">Pricing</a></li> -->
            <!-- <li class="dropdown"><a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#">Drop Down 1</a></li>
              <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li>
              <li><a href="#">Drop Down 2</a></li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li>
            </ul>
          </li> -->
            <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
         </ul>
         <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

   </div>
</header><!-- End Header -->

<!-- ======= Hero Section ======= -->
<section id="hero">

   <div class="container">
      <div class="row justify-content-between">
         <div class="col-lg-7 pt-5 pt-lg-0 order-2 order-lg-1 d-flex align-items-center">
            <div data-aos="zoom-out">
               <h1>Want Your Own customized <span>Software?</span></h1>
               <h2>We can create you own software according to your requirement</h2>
               <div class="text-center text-lg-start">
                  <a href="#about" class="btn-get-started scrollto">Get Started</a>
               </div>
            </div>
         </div>
         <div class="col-lg-4 order-1 order-lg-2 hero-img" data-aos="zoom-out" data-aos-delay="300">
            <img src="assets/img/hero-img.png" class="img-fluid animated" alt="">
         </div>
      </div>
   </div>

   <svg class="hero-waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 28 " preserveAspectRatio="none">
      <defs>
         <path id="wave-path" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z">
      </defs>
      <g class="wave1">
         <use xlink:href="#wave-path" x="50" y="3" fill="rgba(255,255,255, .1)">
      </g>
      <g class="wave2">
         <use xlink:href="#wave-path" x="50" y="0" fill="rgba(255,255,255, .2)">
      </g>
      <g class="wave3">
         <use xlink:href="#wave-path" x="50" y="9" fill="#fff">
      </g>
   </svg>

</section><!-- End Hero -->

<main id="main">

   <!-- ======= About Section ======= -->
   <section id="about" class="about">
      <div class="container-fluid">

         <div class="row">
            <!-- <div class="col-xl-5 col-lg-6 video-box d-flex justify-content-center align-items-stretch" data-aos="fade-right">
            <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="venobox play-btn mb-4" data-vbtype="video" data-autoplay="true"></a>
          </div> -->
            <div class="col-xl-5 col-lg-6 video-box d-flex justify-content-center align-items-stretch" data-aos="fade-right">
               <!-- <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="venobox play-btn mb-4" data-vbtype="video" data-autoplay="true"></a>
           -->
            </div>
            <div class="col-xl-7 col-lg-6 icon-boxes d-flex flex-column align-items-stretch justify-content-center py-5 px-lg-5" data-aos="fade-left">
               <h3>What we do </h3>
               <p>We Make Our client happy with our service</p>

               <div class="icon-box" data-aos="zoom-in" data-aos-delay="100">
                  <div class="icon"><i class="bx bx-window-alt"></i></div>
                  <h4 class="title"><a href="">Web Applications</a></h4>
                  <p class="description">We can create,maintain any kind of web related application to the Cloude Server</p>
               </div>


               <div class="icon-box" data-aos="zoom-in" data-aos-delay="100">
                  <div class="icon"><i class="bx bx-fingerprint"></i></div>
                  <h4 class="title"><a href="">Web Hosting/Web Deploy</a></h4>
                  <p class="description">We can deploy any kind of web related application to the Cloude Server</p>
               </div>

               <div class="icon-box" data-aos="zoom-in" data-aos-delay="100">
                  <div class="icon"><i class="bx bx-mobile-alt"></i></div>
                  <h4 class="title"><a href="">Mobile APPs(IOS/Android)</a></h4>
                  <p class="description">We can create any kind of Mobile applications.</p>
               </div>

               <div class="icon-box" data-aos="zoom-in" data-aos-delay="200">
                  <div class="icon"><i class="bx bx-gift"></i></div>
                  <h4 class="title"><a href="">Digital Marketing</a></h4>
                  <p class="description">Want to reach out more customer</p>
               </div>

               <!-- <div class="icon-box" data-aos="zoom-in" data-aos-delay="300">
              <div class="icon"><i class="bx bx-atom"></i></div>
              <h4 class="title"><a href="">Data Mining</a></h4>
              <p class="description">Explicabo est voluptatum asperiores consequatur magnam. Et veritatis odit. Sunt aut deserunt minus aut eligendi omnis</p>
            </div> -->
               <div class="icon-box" data-aos="zoom-in" data-aos-delay="300">
                  <div class="icon"><i class="bx bx-atom"></i></div>
                  <h4 class="title"><a href="">UI/UX </a></h4>
                  <p class="description"></p>
               </div>
               <div class="icon-box" data-aos="zoom-in" data-aos-delay="300">
                  <div class="icon"><i class="bx bx-atom"></i></div>
                  <h4 class="title"><a href="">Graphic Designing</a></h4>
                  <p class="description"></p>
               </div>

            </div>
         </div>

      </div>
   </section><!-- End About Section -->

   <!-- ======= Team Section ======= -->
   <section id="project" class="team">
      <div class="container">

         <div class="section-title" data-aos="fade-up">
            <h2>Project</h2>
            <p>From Client</p>
         </div>

         <div class="row" data-aos="fade-left">
            <div class="col-lg-3 col-md-6 mt-5 mt-md-0">
               <div class="member" data-aos="zoom-in" data-aos-delay="200">

                  <a href="https://sharewarenepal.com/ohanav1/">
                     <div class="member-info">
                        <h4>Office Management System</h4>
                        <span>Web/Local </span>

                     </div>
                  </a>
               </div>
            </div>
            <div class="col-lg-3 col-md-6">
               <div class="member" data-aos="zoom-in" data-aos-delay="100">
                  <a href="https://sharewarenepal.com/estate/">
                     <div class="member-info">
                        <h4>E-commerce</h4>
                        <a href="https://multi.sharewarenepal.com/">
                           <span>Multivendor /Single</span></a>
                        </br>

                     </div>

               </div>
            </div>



            <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
               <div class="member" data-aos="zoom-in" data-aos-delay="300">
                  <a href="https://sharewarenepal.com/estate/">
                     <div class="member-info">
                        <h4>Hotel Management System</h4>
                        <span>Multi/single</span>
                  </a>
               </div>
            </div>
         </div>

         <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
            <div class="member" data-aos="zoom-in" data-aos-delay="400">
               <a href="https://gharbasi.com/">

                  <div class="member-info">
                     <h4>Smart Location </h4>
                     <span>Distance measurement</span>

                  </div>
               </a>
            </div>
         </div>

         <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
            <div class="member" data-aos="zoom-in" data-aos-delay="400">
               <a href="https://sharewarenepal.com/estate/">

                  <div class="member-info">
                     <h4>EStates </h4>
                     <span>Online Rent/House management</span>

                  </div>
               </a>
            </div>
         </div>

      </div>

      </div>
   </section><!-- End Team Section -->




   <!-- ======= Counts Section ======= -->
   <section id="counts" class="counts">
      <div class="container">

         <div class="row" data-aos="fade-up">

            <div class="col-lg-3 col-md-6">
               <div class="count-box">
                  <i class="bi bi-emoji-smile"></i>
                  <span data-purecounter-start="0" data-purecounter-end="6" data-purecounter-duration="1" class="purecounter"></span>
                  <p>Happy Clients</p>
               </div>
            </div>

            <div class="col-lg-3 col-md-6 mt-5 mt-md-0">
               <div class="count-box">
                  <i class="bi bi-journal-richtext"></i>
                  <span data-purecounter-start="0" data-purecounter-end="4" data-purecounter-duration="1" class="purecounter"></span>
                  <p>Projects</p>
               </div>
            </div>

            <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
               <div class="count-box">
                  <i class="bi bi-headset"></i>
                  <span>24/7</span>
                  <p>Hours Of Support</p>
               </div>
            </div>

            <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
               <div class="count-box">
                  <i class="bi bi-people"></i>
                  <span data-purecounter-start="0" data-purecounter-end="15" data-purecounter-duration="1" class="purecounter"></span>
                  <p>Hard Workers</p>
               </div>
            </div>

         </div>

      </div>
   </section><!-- End Counts Section -->



   <!-- ======= Team Section ======= -->
   <section id="team" class="team">
      <div class="container">

         <div class="section-title" data-aos="fade-up">
            <h2>Our Hard Working Team</h2>
            <p>{{$settings->ourteamtext}}</p>
         </div>

         <div class="row" data-aos="fade-left">

            @foreach($members as $member)
            <div class="col-lg-3 col-md-6 mt-5 mt-md-0">
               <div class="member" data-aos="zoom-in" data-aos-delay="200">
                  <div class="pic"><img src="{{ asset($member->memberImage)}}" class="img-fluid" alt="{{ $member->memberName }} Image"></div>
                  <div class="member-info">
                     <h4>{{ $member->memberName }}</h4>
                     <span>{{ $member->memberPost }}</span>
                     <div class="social">
                        <a href=""><i class="bi bi-twitter"></i></a>
                        <a href=""><i class="bi bi-facebook"></i></a>
                        <a href=""><i class="bi bi-instagram"></i></a>
                        <!-- <a href=""><i class="bi bi-linkedin"></i></a> -->
                     </div>
                  </div>
               </div>
            </div>
            @endforeach



         </div>

      </div>
   </section><!-- End Team Section -->



   <!-- ======= Contact Section ======= -->
   <section id="contact" class="contact">
      <div class="container">

         <div class="section-title" data-aos="fade-up">
            <h2>Contact</h2>
            <p>Contact Us</p>
         </div>

         <div class="row">

            <div class="col-lg-4" data-aos="fade-right" data-aos-delay="100">
               <div class="info">
                  <div class="address">
                     <i class="bi bi-geo-alt"></i>
                     <h4>Location:</h4>
                     <p>{{$settings->company_location}}</p>
                  </div>

                  <div class="email">
                     <i class="bi bi-envelope"></i>
                     <h4>Email:</h4>
                     <p>{{$settings->email}}</p>
                  </div>

                  <div class="phone">
                     <i class="bi bi-phone"></i>
                     <h4>Call:</h4>
                     <p>{{$settings->phone_number}}</p>
                  </div>

               </div>

            </div>

            <div class="col-lg-8 mt-5 mt-lg-0" data-aos="fade-left" data-aos-delay="200">
               <x-alert />
               <form id="contact" enctype="multipart/form-data" method="post" role="form" class="php-email-form" action="{{ route('createmessage')}}">

                  {{ csrf_field() }}
                  <div class="row">
                     <div class="col-md-6 form-group">
                        <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                     </div>
                     <div class="col-md-6 form-group mt-3 mt-md-0">
                        <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                     </div>
                  </div>
                  <div class="form-group mt-3">
                     <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
                  </div>
                  <div class="form-group mt-3">
                     <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
                  </div>
                  <div class="my-3">
                     <div class="loading">Loading</div>
                     <div class=""></div>
                     <div class="sent-message">Your message has been sent. Thank you!</div>
                  </div>
                  <div class="text-center"><button type="submit">Send Message</button></div>
               </form>

            </div>

         </div>

      </div>
   </section><!-- End Contact Section -->

</main><!-- End #main -->
@endsection




  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-4 col-md-6">
            <div class="footer-info">
              <h3>{{$settings->company_name}}</h3>
              <p class="pb-3"><em>{!! str_limit($settings->client, $limit = 30 ) !!}</em></p>
              <p>
                {{$settings->company_name}}<br><br>
                <strong>Phone:</strong> {{$settings->phone_number}}<br>
                <strong>Email:</strong> {{$settings->email}}<br>
              </p>
              <div class="social-links mt-3">
                <!-- <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a> -->
                <a href="https://www.facebook.com/profile.php?id=100075694552743" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="https://www.instagram.com/sharewarenepal/" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="https://github.com/sharewarenepal" class="google-plus"><i class="bx bxl-github"></i></a>
                <a href="https://www.linkedin.com/in/shareware-nepal-767293228/" class="linkedin"><i class="bx bxl-linkedin"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#hero">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#about">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="{{ url('/service') }}">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#project">Terms of service</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="{{ url('/contact') }}">Contact</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
            </ul>
          </div>

         <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Our Newsletter</h4>
            <p>Suscribe for offer </p>


            <form enctype="multipart/form-data" method="post" action="{{ url('suscribe')}}">
                {{ csrf_field() }}
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>

          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>{{$settings->company_name}}</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        Designed by <a href="https://www.prasundahal.com.np/">{{$settings->company_name}}</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <!-- <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  <div id="preloader"></div> -->





</body>

</html>


