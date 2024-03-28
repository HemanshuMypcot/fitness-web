@extends('frontend/layouts/app')
@section('content')
<!-- BredCrumb-Section -->
<div class="bred_crumb">
    <div class="container">
      <!-- shape animation  -->
      <span class="banner_shape1"> <img src="{{asset('frontend/images/banner-shape1.png')}}" alt="image" > </span>
      <span class="banner_shape2"> <img src="{{asset('frontend/images/banner-shape2.png')}}" alt="image" > </span>
      <span class="banner_shape3"> <img src="{{asset('frontend/images/banner-shape3.png')}}" alt="image" > </span>

      <div class="bred_text">
        <h1>Have questions? look here</h1>
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting</p>
        <ul>
          <li><a href="/">Home</a></li>
          <li><span>»</span></li>
          <li><a href="faq">Faq</a></li>
        </ul>
      </div>
    </div>
  </div>

  <!-- FAQ-Section start -->
  <section class="row_am faq_section">
    <!-- container start -->
    <div class="container">

      <!-- faq data -->
      <div class="faq_panel">
        <div class="accordion" id="accordionExample">

          <div class="card" data-aos="fade-up" >
            <div class="card-header" id="headingOne">
              <h2 class="mb-0">
                <button type="button" class="btn btn-link active" data-toggle="collapse" data-target="#collapseOne">
                  <i class="icon_faq icofont-plus"></i></i> How can i pay ?</button>
              </h2>
            </div>
            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
              <div class="card-body">
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry lorem Ipsum has. been the
                  industrys standard dummy text ever since the when an unknown printer took a galley of type and
                  scrambled it to make a type specimen book. It has survived not only five cen turies but also the
                  leap into electronic typesetting, remaining essentially unchanged.</p>
              </div>
            </div>
          </div>

          <div class="card" data-aos="fade-up" >
            <div class="card-header" id="headingTwo">
              <h2 class="mb-0">
                <button type="button" class="btn btn-link collapsed" data-toggle="collapse"
                  data-target="#collapseTwo"><i class="icon_faq icofont-plus"></i></i> How to setup account ?</button>
              </h2>
            </div>
            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
              <div class="card-body">
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry lorem Ipsum has. been the
                  industrys standard dummy text ever since the when an unknown printer took a galley of type and
                  scrambled it to make a type specimen book. It has survived not only five cen turies but also the
                  leap into electronic typesetting, remaining essentially unchanged.</p>
              </div>
            </div>
          </div>

          <div class="card" data-aos="fade-up" >
            <div class="card-header" id="headingThree">
              <h2 class="mb-0">
                <button type="button" class="btn btn-link collapsed" data-toggle="collapse"
                  data-target="#collapseThree"><i class="icon_faq icofont-plus"></i></i>What is process to get refund
                  ?</button>
              </h2>
            </div>
            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
              <div class="card-body">
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry lorem Ipsum has. been the
                  industrys standard dummy text ever since the when an unknown printer took a galley of type and
                  scrambled it to make a type specimen book. It has survived not only five cen turies but also the
                  leap into electronic typesetting, remaining essentially unchanged.</p>
              </div>
            </div>
          </div>

          <div class="card" data-aos="fade-up" >
            <div class="card-header" id="headingFour">
              <h2 class="mb-0">
                <button type="button" class="btn btn-link collapsed" data-toggle="collapse"
                  data-target="#collapseFour"><i class="icon_faq icofont-plus"></i></i>What is process to get refund ?
                </button>
              </h2>
            </div>

            <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
              <div class="card-body">
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry lorem Ipsum has. been the
                  industrys standard dummy text ever since the when an unknown printer took a galley of type and
                  scrambled it to make a type specimen book. It has survived not only five cen turies but also the
                  leap into electronic typesetting, remaining essentially unchanged.</p>
              </div>
            </div>
          </div>

          <div class="card" data-aos="fade-up" >
            <div class="card-header" id="headingFive">
              <h2 class="mb-0">
                <button type="button" class="btn btn-link collapsed" data-toggle="collapse"
                  data-target="#collapseFive"><i class="icon_faq icofont-plus"></i></i>Can i get code bug support for customization ?
                </button>
              </h2>
            </div>

            <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionExample">
              <div class="card-body">
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry lorem Ipsum has. been the
                  industrys standard dummy text ever since the when an unknown printer took a galley of type and
                  scrambled it to make a type specimen book. It has survived not only five cen turies but also the
                  leap into electronic typesetting, remaining essentially unchanged.</p>
              </div>
            </div>
          </div>

          <div class="card" data-aos="fade-up" >
            <div class="card-header" id="headingSix">
              <h2 class="mb-0">
                <button type="button" class="btn btn-link collapsed" data-toggle="collapse"
                  data-target="#collapseSix"><i class="icon_faq icofont-plus"></i></i>Lorem Ipsum is simply dummy text of the printing and typesetting ?
                </button>
              </h2>
            </div>

            <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordionExample">
              <div class="card-body">
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry lorem Ipsum has. been the
                  industrys standard dummy text ever since the when an unknown printer took a galley of type and
                  scrambled it to make a type specimen book. It has survived not only five cen turies but also the
                  leap into electronic typesetting, remaining essentially unchanged.</p>
              </div>
            </div>
          </div>

          <div class="card" data-aos="fade-up" >
            <div class="card-header" id="headingSeven">
              <h2 class="mb-0">
                <button type="button" class="btn btn-link collapsed" data-toggle="collapse"
                  data-target="#collapseSeven"><i class="icon_faq icofont-plus"></i></i>Lorem Ipsum is simply dummy text of the printing and typesetting ?
                </button>
              </h2>
            </div>

            <div id="collapseSeven" class="collapse" aria-labelledby="headingSeven" data-parent="#accordionExample">
              <div class="card-body">
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry lorem Ipsum has. been the
                  industrys standard dummy text ever since the when an unknown printer took a galley of type and
                  scrambled it to make a type specimen book. It has survived not only five cen turies but also the
                  leap into electronic typesetting, remaining essentially unchanged.</p>
              </div>
            </div>
          </div>


        </div>
      </div>
    </div>
    <!-- container end -->
  </section>
  <!-- FAQ-Section end -->

   <!-- Download-Free-App-section-Start  -->
   <section class="row_am free_app_section review_freeapp" id="getstarted">
      <!-- container start -->
      <div class="container">
          <div class="free_app_inner" data-aos="fade-in" data-aos-duration="1500" data-aos-delay="100">
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

  <!-- News-Letter-Section-Start -->
  <section class="newsletter_section">
    <!-- container start -->
    <div class="container">
      <div class="newsletter_box">
        <div class="section_title" data-aos="fade-in" data-aos-duration="1500" data-aos-delay="100">
          <!-- h2 -->
          <h2>Subscribe newsletter</h2>
          <!-- p -->
          <p>Be the first to recieve all latest post in your inbox</p>
        </div>
        <form action="#" data-aos="fade-in" data-aos-duration="1500" data-aos-delay="100">
          <div class="form-group">
            <input type="email" class="form-control" placeholder="Enter your email">
          </div>
          <div class="form-group">
            <button class="btn">SUBMIT</button>
          </div>
        </form>
      </div>
    </div>
    <!-- container end -->
  </section>
  <!-- News-Letter-Section-end -->
  @endsection