@extends('frontend/layouts/app')
@section('content')
    <div class="bred_crumb">
        <div class="container">
            <!-- shape animation  -->
            <span class="banner_shape1"> <img src="{{ asset('frontend/images/banner-shape1.png') }}" alt="image"> </span>
            <span class="banner_shape2"> <img src="{{ asset('frontend/images/banner-shape2.png') }}" alt="image"> </span>
            <span class="banner_shape3"> <img src="{{ asset('frontend/images/banner-shape3.png') }}" alt="image"> </span>

            <div class="bred_text">
                <h1>Contact us</h1>
                <p>If you have an query, please get in touch with us, we will revert back quickly.</p>
                <ul>
                    <li><a href="/">Home</a></li>
                    <li><span>»</span></li>
                    <li><a href="contact_us">Contact us</a></li>
                </ul>
            </div>
        </div>
    </div>


    <!-- Contact Us Section Start -->
    <section class="contact_page_section mb-4">
        <div class="container">
            <div class="contact_inner">
                <div class="contact_form">
                    <div class="section_title">
                        <h2>Leave a <span>message</span></h2>
                        <p>Fill up form below, our team will get back soon</p>
                    </div>
                    <form action="{{ route('contact_us') }}" method="post" id="contactForm">
                        @csrf
                        <div class="form-group">
                            <input type="text" placeholder="Name" name="name" class="form-control"
                                oninput="validateNameInput(this)" >
                        </div>
                        <div class="form-group">
                            <input type="email" placeholder="Email" name="email" class="form-control"
                                oninput="validateEmailInput(this)" >
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" name="message" placeholder="Your message"></textarea>
                        </div>
                        <div class="form-group mb-0">
                            <button type="submit" class="btn puprple_btn" id="contactBtn">SEND MESSAGE</button>
                        </div>
                    </form>
                </div>
                <div class="contact_info">
                    <ul class="contact_info_list">
                        <li>
                            <div class="img">
                                <img src="{{ asset('frontend/images/mail_icon.png') }}" alt="image">
                            </div>
                            <div class="text">
                                <span>Email Us</span>
                                <a
                                    href="mailto:{{ $ContactContent['system_email'] }}">{{ $ContactContent['system_email'] }}</a>
                            </div>
                        </li>
                        <li>
                            <div class="img">
                                <img src="{{ asset('frontend/images/call_icon.png') }}" alt="image">
                            </div>
                            <div class="text">
                                <span>Call Us</span>
                                <a
                                    href="tel:{{ $ContactContent['system_contact_no'] }}">{{ $ContactContent['system_contact_no'] }}</a>
                            </div>
                        </li>
                        <li>
                            <div class="img">
                                <img src="{{ asset('frontend/images/location_icon.png') }}" alt="image">
                            </div>
                            <div class="text">
                                <span>Visit Us</span>
                                <p>{{ $ContactContent['address'] }}</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Us Section End -->
@endsection
