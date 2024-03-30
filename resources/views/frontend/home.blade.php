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
                <a class="nav-link" href="faq">FAQs</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contact_us">Contact Us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="privacy">Privacy Policy</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="terms">Terms & Conditions</a>
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
                <a href="#">
                  <img class="blue_img" src="{{asset('frontend/images/appstore_blue.png')}}" alt="image" >
                  <img class="white_img" src="{{asset('frontend/images/appstore_white.png')}}" alt="image" >
                </a>
              </li>
              <li>
                <a href="#">
                  <img class="blue_img" src="{{asset('frontend/images/googleplay_blue.png')}}" alt="image" >
                  <img class="white_img" src="{{asset('frontend/images/googleplay_white.png')}}" alt="image" >
                </a>
              </li>
            </ul>

            <!-- users -->
            <div class="used_app">
              <ul>
                <li><img src="{{asset('frontend/images/used01.png')}}" alt="image" ></li>
                <li><img src="{{asset('frontend/images/used02.png')}}" alt="image" ></li>
                <li><img src="{{asset('frontend/images/used03.png')}}" alt="image" ></li>
                <li><img src="{{asset('frontend/images/used04.png')}}" alt="image" ></li>
              </ul>
              <p>12M + <br> used this app</p>
            </div>
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

    <!-- Trusted Section start -->
    <section class="row_am trusted_section">
      <!-- container start -->
      <div class="container">
        <div class="section_title" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="100">
          <!-- h2 -->
          <h2>Trusted by <span>150+</span> companies</h2>
          <!-- p -->
          <p>Studio Sunlife to prioritize health and wellness with our trusted solutions. Experience <br> our tailored fitness programs designed for success.</p>
        </div>

        <!-- logos slider start -->
        <div class="company_logos" >
          <div id="company_slider" class="owl-carousel owl-theme">
            <div class="item">
              <div class="logo">
                <img src="{{asset('frontend/images/paypal.png')}}" alt="image" >
              </div>
            </div>
            <div class="item">
              <div class="logo">
                <img src="{{asset('frontend/images/spoty.png')}}" alt="image" >
              </div>
            </div>
            <div class="item">
              <div class="logo">
                <img src="{{asset('frontend/images/shopboat.png')}}" alt="image" >
              </div>
            </div>
            <div class="item">
              <div class="logo">
                <img src="{{asset('frontend/images/slack.png')}}" alt="image" >
              </div>
            </div>
            <div class="item">
              <div class="logo">
                <img src="{{asset('frontend/images/envato.png')}}" alt="image" >
              </div>
            </div>
            <div class="item">
              <div class="logo">
                <img src="{{asset('frontend/images/paypal.png')}}" alt="image" >
              </div>
            </div>
            <div class="item">
              <div class="logo">
                <img src="{{asset('frontend/images/spoty.png')}}" alt="image" >
              </div>
            </div>
            <div class="item">
              <div class="logo">
                <img src="{{asset('frontend/images/shopboat.png')}}" alt="image" >
              </div>
            </div>
          </div>
        </div>
        <!-- logos slider end -->
      </div>
      <!-- container end -->
    </section>
    <!-- Trusted Section ends -->


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
                <h4>Live chat</h4>
                <p>Experience real-time support and guidance with Studio Sunlife's live chat feature, ensuring personalized assistance at your fingertips.</p>
              </div>
            </div>

            <!-- feature box -->
            <div class="data_block" data-aos="fade-left" data-aos-duration="1500">
              <div class="icon">
                <img src="{{asset('frontend/images/support.png')}}" alt="image" >
              </div>
              <div class="text">
                <h4>24-7 Support</h4>
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


    <!-- How-It-Workes-Section-Start -->
    <section class="row_am how_it_works" id="how_it_work">
      <!-- container start -->
      <div class="container">
        <div class="how_it_inner">
          <div class="section_title" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="300">
          	<!-- h2 -->
            <h2><span>How it works</span> - 3 easy steps</h2>
            <!-- p -->
            <p>Experience Studio Sunlife's seamless journey in 3 easy steps: Set your goals, <br> access personalized fitness plans, and engage in live virtual classes, empowering your path to wellness.</p>
          </div>
          <div class="step_block">
          	<!-- UL -->
            <ul>
              <!-- step -->
              <li>
                <div class="step_text" data-aos="fade-right" data-aos-duration="1500">
                  <h4>Download app</h4>
                  <div class="app_icon">
                    <a href="#"><i class="icofont-brand-android-robot"></i></a>
                    <a href="#"><i class="icofont-brand-apple"></i></a>
                    <a href="#"><i class="icofont-brand-windows"></i></a>
                  </div>
                  <p>Download App either for Windows, Mac or Android</p>
                </div>
                <div class="step_number">
                  <h3>01</h3>
                </div>
                <div class="step_img" data-aos="fade-left" data-aos-duration="1500">
                  <img src="{{asset('frontend/images/download_app.jpg')}}" alt="image" >
                </div>
              </li>

              <!-- step -->
              <li>
                <div class="step_text" data-aos="fade-left" data-aos-duration="1500">
                  <h4>Create account</h4>
                  <span>14 days free trial</span>
                  <p>Sign up free for App account. One account for all devices.</p>
                </div>
                <div class="step_number">
                  <h3>02</h3>
                </div>
                <div class="step_img" data-aos="fade-right" data-aos-duration="1500">
                  <img src="{{asset('frontend/images/create_account.jpg')}}" alt="image" >
                </div>
              </li>

              <!-- step -->
              <li>
                <div class="step_text" data-aos="fade-right" data-aos-duration="1500">
                  <h4>It’s done, enjoy the app</h4>
                  <span>Have any questions check our <a href="faq">FAQs</a></span>
                  <p>Get most amazing app experience,Explore and share the app</p>
                </div>
                <div class="step_number">
                  <h3>03</h3>
                </div>
                <div class="step_img" data-aos="fade-left" data-aos-duration="1500">
                  <img src="{{asset('frontend/images/enjoy_app.jpg')}}" alt="image" >
                </div>
              </li>
            </ul>
          </div>
        </div>

        <!-- video section start -->
        <div class="yt_video" data-aos="fade-in" data-aos-duration="1500">
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
          <div class="thumbnil">
            <img src="{{asset('frontend/images/yt_thumb.png')}}" alt="image" >
            <a class="popup-youtube play-button" data-url="https://www.youtube.com/embed/tgbNymZ7vqY?autoplay=1&mute=1" data-toggle="modal" data-target="#myModal" title="XJj2PbenIsU">
              <span class="play_btn">
                <img src="{{asset('frontend/images/play_icon.png')}}" alt="image" >
                <div class="waves-block">
                  <div class="waves wave-1"></div>
                  <div class="waves wave-2"></div>
                  <div class="waves wave-3"></div>
                </div>
              </span>
              Let’s see virtually how it works
              <span>Watch video</span>
            </a>
          </div>
        </div>
        <!-- video section end -->
      </div>
      <!-- container end -->
    </section>
    <!-- How-It-Workes-Section-end -->

    <!-- Testimonial-Section start -->
    <section class="row_am testimonial_section">
      <!-- container start -->
      <div class="container">
        <div class="section_title" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="300">
          <!-- h2 -->
          <h2>What our <span>customer say</span></h2>
          <!-- p -->
          <p>Discover what our customers are saying about Studio Sunlife: 'Life-changing workouts,' <br> 'Unmatched support and motivation,</p>
        </div>
        <div class="testimonial_block" data-aos="fade-in" data-aos-duration="1500">
          <div id="testimonial_slider" class="owl-carousel owl-theme">
          	<!-- user 1 -->
            <div class="item">
              <div class="testimonial_slide_box">
                <div class="rating">
                  <span><i class="icofont-star"></i></span>
                  <span><i class="icofont-star"></i></span>
                  <span><i class="icofont-star"></i></span>
                  <span><i class="icofont-star"></i></span>
                  <span><i class="icofont-star"></i></span>
                </div>
                <p class="review">
                  “ Studio Sunlife has completely transformed our approach to employee wellness. The tailored programs and seamless user experience have been instrumental in boosting morale and productivity. ”
                </p>
                <div class="testimonial_img">
                  <img src="{{asset('frontend/images/testimonial_user1.png')}}" alt="image" >
                </div>
                <h3>Shayna John</h3>
                <span class="designation">Careative inc</span>
              </div>
            </div>

            <!-- user 2 -->
            <div class="item">
              <div class="testimonial_slide_box">
                <div class="rating">
                  <span><i class="icofont-star"></i></span>
                  <span><i class="icofont-star"></i></span>
                  <span><i class="icofont-star"></i></span>
                  <span><i class="icofont-star"></i></span>
                  <span><i class="icofont-star"></i></span>
                </div>
                <p class="review">
                  “ I've tried various fitness apps, but Studio Sunlife stands out with its intuitive design and personalized workout plans. It's like having a personal trainer in my pocket!”
                </p>
                <div class="testimonial_img">
                  <img src="{{asset('frontend/images/testimonial_user2.png')}}" alt="image" >
                </div>
                <h3>Willium Den</h3>
                <span class="designation">Careative inc</span>
              </div>
            </div>

            <!-- user 3 -->
            <div class="item">
              <div class="testimonial_slide_box">
                <div class="rating">
                  <span><i class="icofont-star"></i></span>
                  <span><i class="icofont-star"></i></span>
                  <span><i class="icofont-star"></i></span>
                  <span><i class="icofont-star"></i></span>
                  <span><i class="icofont-star"></i></span>
                </div>
                <p class="review">
                  “ As a company, we prioritize employee well-being, and Fitness Sunlife has been an invaluable partner in achieving that goal. The platform's accessibility and comprehensive tracking features have garnered positive feedback from our entire team. ”
                </p>
                <div class="testimonial_img">
                  <img src="{{asset('frontend/images/testimonial_user3.png')}}" alt="image" >
                </div>
                <h3>Cyrus Stephen</h3>
                <span class="designation">Careative inc</span>
              </div>

            </div>
          </div>

          <!-- total review -->
          <div class="total_review">
            <div class="rating">
              <span><i class="icofont-star"></i></span>
              <span><i class="icofont-star"></i></span>
              <span><i class="icofont-star"></i></span>
              <span><i class="icofont-star"></i></span>
              <span><i class="icofont-star"></i></span>
              <p>5.0 / 5.0</p>
            </div>
          </div>

          <!-- avtar faces -->
          <div class="avtar_faces">
            <img src="{{asset('frontend/images/avtar_testimonial.png')}}" alt="image" >
          </div>
        </div>
      </div>
      <!-- container end -->
    </section>
    <!-- Testimonial-Section end -->

    <!-- FAQ-Section start -->
    <section class="row_am faq_section">
      <!-- container start -->
      <div class="container">
        <div class="section_title" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="300">
          <!-- h2 -->
          <h2><span>FAQ</span> - Frequently Asked Questions</h2>
          <!-- p -->
          <p>Explore our FAQ for quick solutions to common inquiries about <br> Studio Fitness and our comprehensive offerings.</p>
        </div>
        <!-- faq data -->
        <div class="faq_panel">
          <div class="accordion" id="accordionExample">
            <div class="card" data-aos="fade-up" data-aos-duration="1500">
              <div class="card-header" id="headingOne">
                <h2 class="mb-0">
                  <button type="button" class="btn btn-link active" data-toggle="collapse" data-target="#collapseOne">
                  	<i class="icon_faq icofont-plus"></i></i> What makes Studio Sunlife unique ?</button>
                </h2>
              </div>
              <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                <div class="card-body">
                  <p>Studio Sunlife stands out with its tailored classes spanning various disciplines like dance and kickboxing and engaging challenges, offering a holistic fitness experience.</p>
                </div>
              </div>
            </div>
            <div class="card" data-aos="fade-up" data-aos-duration="1500">
              <div class="card-header" id="headingTwo">
                <h2 class="mb-0">
                  <button type="button" class="btn btn-link collapsed" data-toggle="collapse"
                    data-target="#collapseTwo"><i class="icon_faq icofont-plus"></i></i> How do I register for an activity on Studio Sunlife ?</button>
                </h2>
              </div>
              <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                <div class="card-body">
                  <p>To register for an activity, log in to your Studio Sunlife account and navigate to the 'Categories' section. Browse through the available activities, select the one you're interested in, and click on the 'Register' or 'Book Now' button to secure your spot.</p>
                </div>
              </div>
            </div>
            <div class="card" data-aos="fade-up" data-aos-duration="1500">
              <div class="card-header" id="headingThree">
                <h2 class="mb-0">
                  <button type="button" class="btn btn-link collapsed" data-toggle="collapse"
                    data-target="#collapseThree"><i class="icon_faq icofont-plus"></i></i>What happens if I need to cancel my registration for an activity ?</button>
                </h2>
              </div>
              <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                <div class="card-body">
                  <p>If you need to cancel your registration for an activity, you can do so through the Studio Sunlife app or website. Navigate to your booked session if the session is ongoing so you can't cancel, find the one you wish to cancel, and follow the prompts to withdraw your registration.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- container end -->
    </section>
    <!-- FAQ-Section end -->

    <!-- Beautifull-interface-Section start -->
    <section class="row_am interface_section">
	  <!-- container start -->
      <div class="container-fluid">
        <div class="section_title" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="300">
            <!-- h2 -->
            <h2>Beautifull <span>interface</span></h2>
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
                    <img src="{{asset('frontend/images/fitness_screen3.png')}}" alt="image" >
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

    <!-- Download-Free-App-section-Start  -->
    <section class="row_am free_app_section" id="getstarted">
    	<!-- container start -->
        <div class="container">
            <div class="free_app_inner" data-aos="fade-in" data-aos-duration="1500" data-aos-delay="100">
              <!-- vertical line animation -->
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
              	<!-- row start -->
                <div class="row">
                	<!-- content -->
                    <div class="col-md-6">
                        <div class="free_text">
                            <div class="section_title">
                                <h2>Let’s download free from apple and play store</h2>
                                <p>Instant free download from apple and play store orem Ipsum is simply dummy text of the printing.
                                  and typese tting indus orem Ipsum has beenthe standard</p>
                            </div>
                            <ul class="app_btn">
                              <li>
                                <a href="#">
                                  <img src="{{asset('frontend/images/appstore_blue.png')}}" alt="image" >
                                </a>
                              </li>
                              <li>
                                <a href="#">
                                  <img src="{{asset('frontend/images/googleplay_blue.png')}}" alt="image" >
                                </a>
                              </li>
                            </ul>
                        </div>
                    </div>

                    <!-- images -->
                    <div class="col-md-6">
                        <div class="free_img">
                            <img src="{{asset('frontend/images/download-screen01.png')}}" alt="image" >
                            <img class="mobile_mockup" src="{{asset('frontend/images/download-screen02.png')}}" alt="image" >
                        </div>
                    </div>
                </div>
                <!-- row end -->
            </div>
        </div>
        <!-- container end -->
    </section>
    <!-- Download-Free-App-section-end  -->

    {{-- <!-- Story-Section-Start -->
    <section class="row_am latest_story" id="blog">
     <!-- container start -->
      <div class="container">
          <div class="section_title" data-aos="fade-in" data-aos-duration="1500" data-aos-delay="100">
              <h2>Read latest <span>story</span></h2>
              <p>Lorem Ipsum is simply dummy text of the printing and typese tting <br> indus orem Ipsum has beenthe standard dummy.</p>
          </div>
          <!-- row start -->
          <div class="row">
          	<!-- story -->
            <div class="col-md-4">
                <div class="story_box" data-aos="fade-up" data-aos-duration="1500">
                    <div class="story_img">
                      <img src="{{asset('frontend/images/story01.png')}}" alt="image" >
                      <span>45 min ago</span>
                    </div>
                    <div class="story_text">
                        <h3>Cool features added!</h3>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting
                          industry lorem Ipsum has.</p>
                        <a href="blog-single.html">READ MORE</a>
                    </div>
                </div>
            </div>

            <!-- story -->
            <div class="col-md-4">
                <div class="story_box" data-aos="fade-up" data-aos-duration="1500">
                    <div class="story_img">
                      <img src="{{asset('frontend/images/story02.png')}}" alt="image" >
                      <span>45 min ago</span>
                    </div>
                    <div class="story_text">
                          <h3>Top rated app! Yupp.</h3>
                        <p>Simply dummy text of the printing and typesetting industry lorem Ipsum has Lorem Ipsum is.</p>
                        <a href="blog-single.html">READ MORE</a>
                    </div>
                </div>
            </div>

            <!-- story -->
            <div class="col-md-4">
                <div class="story_box" data-aos="fade-up" data-aos-duration="1500">
                    <div class="story_img">
                      <img src="{{asset('frontend/images/story03.png')}}" alt="image" >
                      <span>45 min ago</span>
                    </div>
                    <div class="story_text">
                          <h3>Creative ideas on app.</h3>
                        <p>Printing and typesetting industry lorem Ipsum has Lorem simply dummy text of the.</p>
                        <a href="blog-single.html">READ MORE</a>
                    </div>
                </div>
            </div>
          </div>
          <!-- row end -->
      </div>
      <!-- container end -->
    </section>
    <!-- Story-Section-end --> --}}


<!-- Footer-Section start -->
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
                    <li><a href="#">support@example.com</a></li>
                    <li><a href="#">+1-900-123 4567</a></li>
                  </ul>
                  <ul class="social_media">
                      <li><a href="#"><i class="icofont-facebook"></i></a></li>
                      <li><a href="#"><i class="icofont-twitter"></i></a></li>
                      <li><a href="#"><i class="icofont-instagram"></i></a></li>
                      <li><a href="#"><i class="icofont-pinterest"></i></a></li>
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
                    <li><a href="faq">FAQs</a></li>
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
                      <a href="#">
                        <img src="{{asset('frontend/images/appstore_blue.png')}}" alt="image" >
                      </a>
                    </li>
                    <li>
                      <a href="#">
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

<!-- VIDEO MODAL -->
<div class="modal fade youtube-video" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
<div class="modal-dialog" role="document">
  <div class="modal-content">
    <button id="close-video" type="button" class="button btn btn-default text-right" data-dismiss="modal">
      <i class="icofont-close-line-circled"></i>
    </button>
      <div class="modal-body">
          <div id="video-container" class="video-container">
              <iframe id="youtubevideo" src="#" width="640" height="360" frameborder="0" allowfullscreen></iframe>
          </div>
      </div>
      <div class="modal-footer">
      </div>
  </div>
</div>
</div>

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
