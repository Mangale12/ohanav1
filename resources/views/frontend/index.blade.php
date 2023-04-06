@extends('layouts.main')
@section('content')
<!-- ======= Hero Section ======= -->
<section id="hero">
   <div class="container">
      <div class="row justify-content-between">
         <div class="col-lg-7 pt-5 pt-lg-0 order-2 order-lg-1 d-flex align-items-center">
            <div data-aos="zoom-out">

               <h1>{{ $sliders[0]->title }}</span></h1>
               <h2>{{ $sliders[0]->subtitle1 }}</h2>
               <div class="text-center text-lg-start">
                  <a href="#about" class="btn-get-started scrollto">Get Started</a>
               </div>
            </div>
         </div>

         <div class="col-lg-4 order-1 order-lg-2 hero-img" data-aos="zoom-out" data-aos-delay="300">
            <img src="{{ asset('public/media/slider/'.$sliders[0]->image) }}" class="img-fluid animated" alt="ssss">
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
                @foreach($services as $service)
                <div class="icon-box" data-aos="zoom-in" data-aos-delay="100">
                    <div class="icon">{!! $service->icon !!}</div>
                    <h4 class="title"><a href="">{{ $service->service }}</a></h4>
                    <p class="description">{{ \Illuminate\Support\Str::limit($service->description, 150, $end='...') }}</p>
                 </div>
                @endforeach



               {{-- <div class="icon-box" data-aos="zoom-in" data-aos-delay="100">
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
               </div> --}}

               <!-- <div class="icon-box" data-aos="zoom-in" data-aos-delay="300">
              <div class="icon"><i class="bx bx-atom"></i></div>
              <h4 class="title"><a href="">Data Mining</a></h4>
              <p class="description">Explicabo est voluptatum asperiores consequatur magnam. Et veritatis odit. Sunt aut deserunt minus aut eligendi omnis</p>
            </div> -->
               {{-- <div class="icon-box" data-aos="zoom-in" data-aos-delay="300">
                  <div class="icon"><i class="bx bx-atom"></i></div>
                  <h4 class="title"><a href="">UI/UX </a></h4>
                  <p class="description"></p>
               </div>
               <div class="icon-box" data-aos="zoom-in" data-aos-delay="300">
                  <div class="icon"><i class="bx bx-atom"></i></div>
                  <h4 class="title"><a href="">Graphic Designing</a></h4>
                  <p class="description"></p>
               </div> --}}

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
            @foreach ($projects as $project)
            <div class="col-lg-3 col-md-6 mt-5 mt-md-0">
                <div class="member" data-aos="zoom-in" data-aos-delay="200">

                   <a href="{{ $project->location }}">
                      <div class="member-info">
                         <h4>{{ $project->projectName }}</h4>
                         <span>{{ $project->subName }} </span>

                      </div>
                   </a>
                </div>
             </div>
            @endforeach

            {{-- <div class="col-lg-3 col-md-6">
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
         </div> --}}

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
                  <div class="pic">
                    @if($member->memberImage != null)
                        @if(file_exists(public_path('media/team/'.$member->memberImage))){}
                        <img src="{{ asset('media/team/'.$member->memberImage)}}" class="img-fluid" alt="{{ $member->memberName }} Image">
                        @endif
                    @endif
                </div>
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
                        <input type="text" name="first_name" class="form-control" id="name" placeholder="Your First Name" required>
                     </div>
                     <div class="col-md-6 form-group mt-3 mt-md-0">
                        <input type="text" class="form-control" name="last_name" id="last_name" placeholder="Your Email" required>
                     </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6 form-group">
                       <input type="text" name="phone" class="form-control" id="phone" placeholder="Your Phone" required>
                    </div>
                    <div class="col-md-6 form-group mt-3 mt-md-0">
                       <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                    </div>
                 </div>
                  {{-- <div class="form-group mt-3">
                     <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
                  </div>
                  <div class="form-group mt-3">
                     <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
                  </div> --}}
                  <div class="my-3">
                     <div class="loading">Loading</div>
                     <div class=""></div>
                     <div class="sent-message">Your message has been sent. Thank you!</div>
                  </div>
                  <div class="text-center"><button type="submit" id="send-message">Send Message</button></div>
               </form>

            </div>

         </div>

      </div>
   </section><!-- End Contact Section -->

</main><!-- End #main -->
@endsection



