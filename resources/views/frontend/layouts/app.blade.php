<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from kalanidhithemes.com/live-preview/landing-page/apper/all-demo/01-app-landing-page-defoult/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 22 Nov 2022 11:34:52 GMT -->

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $tags['title'] }}</title>

    <!-- icofont-css-link -->
    <link rel="stylesheet" href="{{ asset('frontend/css/icofont.min.css') }}">
    <!-- Owl-Carosal-Style-link -->
    <link rel="stylesheet" href="{{ asset('frontend/css/owl.carousel.min.css') }}">
    <!-- Bootstrap-Style-link -->
    <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap.min.css') }}">
    <!-- Aos-Style-link -->
    <link rel="stylesheet" href="{{ asset('frontend/css/aos.css') }}">
    <!-- Coustome-Style-link -->
    <link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}">
    <!-- Responsive-Style-link -->
    <link rel="stylesheet" href="{{ asset('frontend/css/responsive.css') }}">
    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('frontend/images/logo_fevicon.png') }}" type="image/x-icon">

</head>

<body>

    <!-- Page-wrapper-Start -->
    <div class="page_wrapper">

        <!-- Preloader -->
        <div id="preloader">
            <div id="loader"></div>
        </div>

        <!-- Header Start -->
        <header style="margin-top: -20px">
            <!-- container start -->
            <div class="container">
                <!-- navigation bar -->
                <nav class="navbar navbar-expand-lg">
                    <a class="navbar-brand" href="{{ config('global.base_path') }}">
                        <img src="{{ asset('frontend/images/logo.png') }}" alt="image">
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
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
                                <a class="nav-link" href="/">Home</a>
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
        @yield('content')

        <!-- Footer-Section start -->
        <footer>
            <div class="top_footer" id="contact">
                <!-- animation line -->
                <div class="anim_line dark_bg">
                    <span><img src="{{ asset('frontend/images/anim_line.png') }}" alt="anim_line"></span>
                    <span><img src="{{ asset('frontend/images/anim_line.png') }}" alt="anim_line"></span>
                    <span><img src="{{ asset('frontend/images/anim_line.png') }}" alt="anim_line"></span>
                    <span><img src="{{ asset('frontend/images/anim_line.png') }}" alt="anim_line"></span>
                    <span><img src="{{ asset('frontend/images/anim_line.png') }}" alt="anim_line"></span>
                    <span><img src="{{ asset('frontend/images/anim_line.png') }}" alt="anim_line"></span>
                    <span><img src="{{ asset('frontend/images/anim_line.png') }}" alt="anim_line"></span>
                    <span><img src="{{ asset('frontend/images/anim_line.png') }}" alt="anim_line"></span>
                    <span><img src="{{ asset('frontend/images/anim_line.png') }}" alt="anim_line"></span>
                </div>
                <!-- container start -->
                <div class="container">
                    <!-- row start -->
                    <div class="row">
                        <!-- footer link 1 -->
                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="abt_side">
                                <div class="logo"> <img src="{{ asset('frontend/images/logo.png') }}" alt="image">
                                </div>
                                <ul>
                                    <li><a href="mailto:{{config('global.email')}}">{{config('global.email')}}</a></li>
                                    <li><a href="tel:{{config('global.contact_no')}}">{{config('global.contact_no')}}</a></li>
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
                                    <li><a href="/">Home</a></li>
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
                                            <img src="{{ asset('frontend/images/appstore_blue.png') }}"
                                                alt="image">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="{{ asset('frontend/images/googleplay_blue.png') }}"
                                                alt="image">
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
                        <div class="text-center">
                            <p>© Copyrights <?php echo date('Y'); ?>. All rights reserved.</p>
                        </div>
                    </div>
                    <!-- row end -->
                </div>
                <!-- container end -->
            </div>

            <!-- go top button -->
            <div class="go_top">
                <span><img src="{{ asset('frontend/images/go_top.png') }}" alt="image"></span>
            </div>
        </footer>
        <!-- Footer-Section end -->

        <!-- VIDEO MODAL -->
        <div class="modal fade youtube-video" id="myModal" tabindex="-1" role="dialog"
            aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <button id="close-video" type="button" class="button btn btn-default text-right"
                        data-dismiss="modal">
                        <i class="icofont-close-line-circled"></i>
                    </button>
                    <div class="modal-body">
                        <div id="video-container" class="video-container">
                            <iframe id="youtubevideo" src="#" width="640" height="360" frameborder="0"
                                allowfullscreen></iframe>
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
    <script src="{{ asset('frontend/js/jquery.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- owl-js-Link -->
    <script src="{{ asset('frontend/js/owl.carousel.min.js') }}"></script>
    <!-- bootstrap-js-Link -->
    <script src="{{ asset('frontend/js/bootstrap.min.js') }}"></script>
    <!-- aos-js-Link -->
    <script src="{{ asset('frontend/js/aos.js') }}"></script>
    <!-- main-js-Link -->
    <script src="{{ asset('frontend/js/main.js') }}"></script>
    {{--  --}}
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
</body>


<!-- Mirrored from kalanidhithemes.com/live-preview/landing-page/apper/all-demo/01-app-landing-page-defoult/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 22 Nov 2022 11:36:11 GMT -->

</html>
