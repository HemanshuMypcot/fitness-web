<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from kalanidhithemes.com/live-preview/landing-page/apper/all-demo/01-app-landing-page-defoult/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 22 Nov 2022 11:34:52 GMT -->
<head>

  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>{{ $tags['title'] }}</title>

  <!-- icofont-css-link -->
  <link rel="stylesheet" href="{{asset('frontend/css/icofont.min.css')}}">
  <!-- Owl-Carosal-Style-link -->
  <link rel="stylesheet" href="{{asset('frontend/css/owl.carousel.min.css')}}">
  <!-- Bootstrap-Style-link -->
  <link rel="stylesheet" href="{{asset('frontend/css/bootstrap.min.css')}}">
  <!-- Aos-Style-link -->
  <link rel="stylesheet" href="{{asset('frontend/css/aos.css')}}">
  <!-- Coustome-Style-link -->
  <link rel="stylesheet" href="{{asset('frontend/css/style.css')}}">
  <!-- Responsive-Style-link -->
  <link rel="stylesheet" href="{{asset('frontend/css/responsive.css')}}">
  <!-- Favicon -->
  <link rel="shortcut icon" href="{{asset('frontend/images/logo_fevicon.png')}}" type="image/x-icon">

</head>

<body>

  <!-- Page-wrapper-Start -->
  <div class="page_wrapper">

    <!-- Preloader -->
    <div id="preloader">
      <div id="loader"></div>
    </div>

    <!-- Header Start -->
    <header>
      <!-- container start -->
      <div class="container">
      	<!-- navigation bar -->
        <nav class="navbar navbar-expand-lg">
          <a class="navbar-brand" href="{{config('global.base_path')}}">
            <img src="{{asset('frontend/images/logo.png')}}" alt="image" >
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon">
              <!-- <i class="icofont-navigation-menu ico_menu"></i> -->
              <div class="toggle-wrap">
                <span class="toggle-bar"></span>
              </div>
            </span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
              <!-- secondery menu start -->
              <li class="nav-item">
                <a class="nav-link" href="{{config('global.base_path')}}">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="privacy">Privacy Policy</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="terms">Terms & Conditions</a>
              </li>
              <li class="nav-item">
                <a class="nav-link dark_btn" href="contact_us">Contact Us</a>
              </li>
            </ul>
          </div>
        </nav>
        <!-- navigation end -->
      </div>
      <!-- container end -->
    </header>
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

<footer>
  <div class="top_footer" id="contact">
    <!-- animation line -->
    <div class="anim_line dark_bg">
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
      <!-- container start -->
      <div class="container">
        <!-- row start -->
        <div class="row">
            <!-- footer link 1 -->
            <div class="col-lg-4 col-md-6 col-12">
                <div class="abt_side">
                  <div class="logo"> <img src="{{asset('frontend/images/logo.png')}}" alt="image" ></div>
                  <ul>
                    <li><a href="mailto:{{$ContactContent['system_email']}}">{{$ContactContent['system_email']}}</a></li>
                    <li><a href="tel:{{$ContactContent['system_contact_no']}}">{{$ContactContent['system_contact_no']}}</a></li>
                  </ul>
                </div>
            </div>

            <!-- footer link 2 -->
            <div class="col-lg-3 col-md-6 col-12">
                <div class="links">
                  <h3>Useful Links</h3>
                    <ul>
                      <li><a href="{{config('global.base_path')}}">Home</a></li>
                      <li><a href="privacy">Privacy Policy</a></li>
                      <li><a href="terms">Terms & Conditions</a></li>
                    </ul>
                </div>
            </div>

            <!-- footer link 3 -->
            <div class="col-lg-3 col-md-6 col-12">
              <div class="links">
                <h3>Help & Suport</h3>
                  <ul>
                    <li><a href="contact_us">Contact Us</a></li>
                  </ul>
              </div>
            </div>

            <!-- footer link 4 -->
            <div class="col-lg-2 col-md-6 col-12">
              <div class="try_out">
                  <h3>Let’s Try Out</h3>
                  <ul class="app_btn">
                    <li>
                      <a href="{{config('global.ios_app_link')}}">
                        <img src="{{asset('frontend/images/appstore_blue.png')}}" alt="image" >
                      </a>
                    </li>
                    <li>
                      <a href="{{config('global.android_app_link')}}">
                        <img src="{{asset('frontend/images/googleplay_blue.png')}}" alt="image" >
                      </a>
                    </li>
                  </ul>
              </div>
            </div>
        </div>
        <!-- row end -->
    </div>
    <!-- container end -->
  </div>

  <!-- last footer -->
  <div class="bottom_footer">
    <!-- container start -->
      <div class="container">
        <!-- row start -->
        <div class="">
          <div class="text-center ">
              <p>© Copyrights <?php echo date('Y') ?>. All rights reserved.</p>
          </div>
      </div>
      <!-- row end -->
      </div>
      <!-- container end -->
  </div>

  <!-- go top button -->
  <div class="go_top">
      <span><img src="{{asset('frontend/images/go_top.png')}}" alt="image" ></span>
  </div>
</footer>
<!-- Footer-Section end -->


<div class="purple_backdrop"></div>

</div>
<!-- Page-wrapper-End -->

<!-- Jquery-js-Link -->
<script src="{{asset('frontend/js/jquery.js')}}"></script>
<!-- owl-js-Link -->
<script src="{{asset('frontend/js/owl.carousel.min.js')}}"></script>
<!-- bootstrap-js-Link -->
<script src="{{asset('frontend/js/bootstrap.min.js')}}"></script>
<!-- aos-js-Link -->
<script src="{{asset('frontend/js/aos.js')}}"></script>
<!-- main-js-Link -->
<script src="{{asset('frontend/js/main.js')}}"></script>

</body>


<!-- Mirrored from kalanidhithemes.com/live-preview/landing-page/apper/all-demo/01-app-landing-page-defoult/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 22 Nov 2022 11:36:11 GMT -->
</html>
