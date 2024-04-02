@extends('frontend/layouts/app')
@section('content')
    <!-- Banner-Section-Start -->
    <section class="banner_section">
      <!-- container start -->
      <div class="container">
      	<!-- vertical animation line -->
        <div class="anim_line">
            <span><img src="{{asset('frontend/images/anim_line.png')}}" alt="anim_line"></span>
            <span><img src="{{asset('frontend/images/anim_line.png')}}" alt="anim_line"></span>
            <span><img src="{{asset('frontend/images/anim_line.png')}}" alt="anim_line"></span>
            <span><img src="{{asset('frontend/images/anim_line.png')}}" alt="anim_line"></span>
            <span><img src="{{asset('frontend/images/anim_line.png')}}" alt="anim_line"></span>
            <span><img src="{{asset('frontend/images/anim_line.png')}}" alt="anim_line"></span>
            <span><img src="{{asset('frontend/images/anim_line.png')}}" alt="anim_line"></span>
            <span><img src="{{asset('frontend/images/anim_line.png')}}" alt="anim_line"></span>
            <span><img src="{{asset('frontend/images/anim_line.png')}}" alt="anim_line"></span>
        </div>
        <!-- row start -->
        <div class="row">
          <div class="col-lg-6 col-md-12"  data-aos="fade-right" data-aos-duration="1500">
          	<!-- banner text -->
            <div class="banner_text">
              <!-- h1 -->
              <h1>Best way to <span>manage your customers.</span></h1>
              <!-- p -->
              <p>Optimize customer management with our intuitive fitness studio training session app.
              </p>
            </div>
            <!-- app buttons -->
            <ul class="app_btn">
              <li>
                <a href="{{config('global.android_app_link')}}">
                  <img class="blue_img" src="{{asset('frontend/images/appstore_blue.png')}}" alt="image" >
                  <img class="white_img" src="{{asset('frontend/images/appstore_white.png')}}" alt="image" >
                </a>
              </li>
              <li>
                <a href="{{config('global.ios_app_link')}}">
                  <img class="blue_img" src="{{asset('frontend/images/googleplay_blue.png')}}" alt="image" >
                  <img class="white_img" src="{{asset('frontend/images/googleplay_white.png')}}" alt="image" >
                </a>
              </li>
            </ul>

          </div>

          <!-- banner slides start -->
          <div class="col-lg-6 col-md-12"  data-aos="fade-in" data-aos-duration="1500">
            <div class="banner_slider">
              <div class="left_icon">
                <img src="{{asset('frontend/images/message_icon.png')}}" alt="image" >
              </div>
              <div class="right_icon">
                <img src="{{asset('frontend/images/shield_icon.png')}}" alt="image" >
              </div>
              <div id="frmae_slider" class="owl-carousel owl-theme">
                <div class="item">
                  <div class="slider_img">
                    <img src="{{asset('frontend/images/fitness_screen1.png')}}" alt="image" class="py-3 rounded ">
                  </div>
                </div>
                <div class="item">
                  <div class="slider_img">
                    <img src="{{asset('frontend/images/fitness_screen2.png')}}" alt="image" class="py-4 rounded">
                  </div>
                </div>
              </div>
              <div class="slider_frame">
                <img src="{{asset('frontend/images/mobile_frame_svg.svg')}}" alt="image" >
              </div>
            </div>
          </div>
          <!-- banner slides end -->

        </div>
        <!-- row end -->
      </div>
      <!-- container end -->
    </section>
    <!-- Banner-Section-end -->

    <!-- Features-Section-Start -->
    <section class="row_am features_section" id="features">
      <!-- container start -->
      <div class="container">
        <div class="section_title" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="100">
          <!-- h2 -->
          <h2><span>Features</span> that makes app different!</h2>
          <!-- p -->
          <p>Explore the distinctive offerings of Studio Sunlife, where we redefine the fitness experience <br> with personalized classes featuring dance, kickboxing, and more, alongside real-time progress tracking and exciting <br> challenges. Join us and embark on a journey towards holistic wellness..</p>
        </div>
        <div class="feature_detail">
          <!-- feature box left -->
          <div class="left_data feature_box">

          	<!-- feature box -->
            <div class="data_block" data-aos="fade-right" data-aos-duration="1500">
              <div class="icon">
                <img src="{{asset('frontend/images/secure_data.png')}}" alt="image" >
              </div>
              <div class="text">
                <h4>Secure data</h4>
                <p>Studio Sunlife ensures the highest level of security for your data, safeguarding your privacy while you prioritize your wellness journey.</p>
              </div>
            </div>

            <!-- feature box -->
            <div class="data_block" data-aos="fade-right" data-aos-duration="1500">
              <div class="icon">
                <img src="{{asset('frontend/images/functional.png')}}" alt="image" >
              </div>
              <div class="text">
                <h4>Fully functional</h4>
                <p>Experience Studio Sunlife in its entirety - a fully functional platform designed to seamlessly integrate into your lifestyle.</p>
              </div>
            </div>
          </div>

          <!-- feature box right -->
          <div class="right_data feature_box">

          	<!-- feature box -->
            <div class="data_block" data-aos="fade-left" data-aos-duration="1500">
              <div class="icon">
                <img src="{{asset('frontend/images/live-chat.png')}}" alt="image" >
              </div>
              <div class="text">
                <h4>Notifications</h4>
                <p>Notifications to members about upcoming classes, schedule changes, promotions, or important announcements via email, SMS, or push notifications.</p>
              </div>
            </div>

            <!-- feature box -->
            <div class="data_block" data-aos="fade-left" data-aos-duration="1500">
              <div class="icon">
                <img src="{{asset('frontend/images/support.png')}}" alt="image" >
              </div>
              <div class="text">
                <h4>24/7 Support</h4>
                <p>Experience unparalleled support with Studio Sunlife's round-the-clock assistance, ensuring you never face your fitness journey alone.</p>
              </div>
            </div>

          </div>
          <!-- feature image -->

          <div class="feature_img" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="100">
            <img src="{{asset('frontend/images/features_frame.png')}}" alt="image" >
          </div>
        </div>
      </div>
      <!-- container end -->
    </section>
    <!-- Features-Section-end -->

    <!-- About-App-Section-Start -->
    <section class="row_am about_app_section">
      <!-- container start -->
      <div class="container">
      	<!-- row start -->
        <div class="row">
          <div class="col-lg-6">

          	<!-- about images -->
            <div class="about_img" data-aos="fade-in" data-aos-duration="1500">
              <div class="frame_img">
                <img class="moving_position_animatin" src="{{asset('frontend/images/about-frame.png')}}" alt="image" >
              </div>
              <div class="screen_img rounded">
                <img class="moving_animation" src="{{asset('frontend/images/about-screen-1.png')}}" alt="image" style="">
              </div>
            </div>
          </div>
          <div class="col-lg-6">

          	<!-- about text -->
            <div class="about_text">
              <div class="section_title" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="100">

              	<!-- h2 -->
                <h2>Some awesome words <span>about app.</span></h2>

                <!-- p -->
                <p>
                  Studio Sunlife encapsulates innovation and vitality in every pixel, offering an immersive fitness experience like no other. With seamless design and intuitive functionality, it's your ultimate companion on the path to wellness, empowering you to thrive with every workout. Studio Sunlife ensures the highest level of security for your data, safeguarding your privacy while you prioritize your wellness journey. Experience unparalleled support with Studio Sunlife's round-the-clock assistance, ensuring you never face your fitness journey alone.
                </p>
              </div>

              <!-- UL -->

              <!-- UL end -->
            </div>
          </div>
        </div>
        <!-- row end -->
      </div>
      <!-- container end -->
    </section>
    <!-- About-App-Section-end -->


    <!-- Beautifull-interface-Section start -->
    <section class="row_am interface_section">
	  <!-- container start -->
      <div class="container-fluid">
        <div class="section_title" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="300">
            <!-- h2 -->
            <h2>Beautiful <span>interface</span></h2>
            <!-- p -->
            <p>
              Experience the allure of Studio Sunlife's beautiful interface, <br> meticulously crafted to enhance your fitness journey.
            </p>
        </div>

          <!-- screen slider start -->
          <div class="screen_slider" >
            <div id="screen_slider" class="owl-carousel owl-theme">
              <div class="item">
                <div class="screen_frame_img">
                    <img src="{{asset('frontend/images/fitness_screen1.png')}}" alt="image" >
                </div>
              </div>
              <div class="item">
                <div class="screen_frame_img">
                    <img src="{{asset('frontend/images/fitness_screen2.png')}}" alt="image" >
                </div>
              </div>
              <div class="item">
                <div class="screen_frame_img">
                    <img src="{{asset('frontend/images/fitness_screen8.png')}}" alt="image" >
                </div>
              </div>
              <div class="item">
                <div class="screen_frame_img">
                    <img src="{{asset('frontend/images/fitness_screen4.png')}}" alt="image" >
                </div>
              </div>
              <div class="item">
                <div class="screen_frame_img">
                    <img src="{{asset('frontend/images/fitness_screen6.png')}}" alt="image" >
                </div>
              </div>
          </div>
          </div>
          <!-- screen slider end -->
      </div>
      <!-- container end -->
    </section>
    <!-- Beautifull-interface-Section end -->
  @endsection