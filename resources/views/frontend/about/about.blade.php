@extends('frontend.app')

@section('content')

    <section class="page-header">

        <div class="page-header__bg" style="background-image: url(assets/images/backgrounds/page-header-bg-1-1.jpg);"></div>

        <!-- /.page-header__bg -->

        <div class="container">

            <div class="page-header__content">

                <h2 class="page-header__title bw-split-in-right">About us</h2>

                <ul class="gotur-breadcrumb list-unstyled">

                    <li><a href="index.html">Home</a></li>

                    <li><span>About us</span></li>

                </ul><!-- /.thm-breadcrumb list-unstyled -->

            </div><!-- /.page-header__content -->

        </div><!-- /.container -->

    </section><!-- /.page-header -->





    <section class="about-two about-two--two section-space" id="about">

        <div class="container">

            <div class="row gutter-y-40">

                <div class="col-lg-6">

                    <div class="about-two__thumb wow fadeInLeft" data-wow-duration='1500ms' data-wow-delay='300ms'>

                        <div class="about-two__thumb__item  ">

                            <img src="assets/images/about/about-2-1.jpg" alt="gotur image">

                        </div>

                        <!-- /.about-two__thumb__item -->

                        <div class="about-two__thumb__item-small  ">

                            <img src="assets/images/about/about-s-2-1.jpg" alt="gotur image">

                        </div>

                        <!-- /.about-two__thumb__item -->

                        <div class="about-two__thumb__funfact">

                            <div class="about-two__thumb__funfact__icon">

                                <i class="icon-icon-4"></i>

                            </div>

                            <!-- /.about-two__thumb__funfact__icon -->

                            <div class="about-two__thumb__funfact__content count-box">

                                <h2 class="about-two__thumb__funfact__count">

                                    <span class="count-text" data-stop="25" data-speed="2000"></span>

                                    <span>Years</span>

                                </h2>

                                <!-- /.about-two__thumb__funfact__count -->

                                <p class="about-two__thumb__funfact__text">Of Experience</p>

                                <!-- /.about-two__thumb__funfact__text -->

                            </div>

                            <!-- /.about-two__thumb__funfact__content -->

                        </div>

                        <!-- /.about-two__thumb__funfact -->

                        <div class="about-two__thumb__item-element">

                            <img src="assets/images/shapes/corki.png" alt="gotur image">

                        </div>

                        <!-- /.about-two__thumb__item -->

                    </div>

                    <!-- /.about-two__left -->

                </div>

                <!-- /.col-lg-6 -->

                <div class="col-lg-6">

                    <div class="about-two__right">

                        <div class="sec-title  ">

                            <h6 class="sec-title__tagline bw-split-in-right">About company</h6>

                            <!-- /.sec-title__tagline -->

                            <h3 class="sec-title__title bw-split-in-left">Great Opportunity for Adventure & Travels</h3>

                            <!-- /.sec-title__title -->

                        </div>

                        <!-- /.sec-title -->

                        <p class="about-two__top__text wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='300ms'>I
                            would
                            like to introduce our company (Trip Mee) that has been in business for the past 08 years. We
                            have been
                            an established and popular company with an excellent track record for the best customer
                            satisfaction.
                            We have never compromised on the quality and the services provided to the customer.</p>

                        <p class="about-two__top__text wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='300ms'>We
                            believe
                            in keeping the customers happy and providing them with products at a very competent price. We
                            would
                            like to offer our service to you and will contact you for further discussion at a time
                            convenient to
                            you. We have listed below the holiday package details which match your needs. Below you can
                            review
                            this quotation & advise us for modifications. When it is ready as per your requirements, we can
                            confirm your booking.</p>

                        <!-- /.about-two__top__text -->

                        {{-- <div class="about-two__feature">

                            <div class="row gutter-y-20 gutter-x-20">

                                <div class="col-xl-6 col-lg-12 col-md-6 wow fadeInUp" data-wow-duration='1500ms'
                                    data-wow-delay='300ms'>

                                    <div class="about-two__feature-vestion">

                                        <div class="about-two__feature_icon">

                                            <i class="icon-flag"></i>

                                        </div>

                                        <!-- /.about-two__feature_icon -->

                                        <div class="about-two__feature-content">

                                            <h5 class="about-two__feature-title">Trusted travel guide</h5>

                                            <!-- /.about-two__feature-title -->

                                            <p class="about-two__feature-text">Aliquam erat volutpat Nullam imperdiet</p>

                                            <!-- /.about-two__feature-text -->

                                        </div>

                                        <!-- /.about-two__feature-content -->

                                    </div>

                                    <!-- /.about-two__feature-vestion -->

                                </div>

                                <!-- /.col-xl-6 col-lg-12 col-md-6 -->

                                <div class="col-xl-6 col-lg-12 col-md-6">

                                    <div class="about-two__feature-vestion wow fadeInUp" data-wow-duration='1500ms'
                                        data-wow-delay='400ms'>

                                        <div class="about-two__feature_icon">

                                            <i class="icon-misstion"></i>

                                        </div>

                                        <!-- /.about-two__feature_icon -->

                                        <div class="about-two__feature-content">

                                            <h5 class="about-two__feature-title">Mission & Vision</h5>

                                            <!-- /.about-two__feature-title -->

                                            <p class="about-two__feature-text">Ut vehiculadictumst. Maecenas ante.</p>

                                            <!-- /.about-two__feature-text -->

                                        </div>

                                        <!-- /.about-two__feature-content -->

                                    </div>

                                    <!-- /.about-two__feature-vestion -->

                                </div>

                                <!-- /.col-xl-6 col-lg-12 col-md-6 -->

                            </div>

                            <!-- /.row -->

                        </div> --}}

                        <!-- /.about-two__feature -->

                        <div class="about-two__button wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='300ms'>

                            <a href="blog-details-left.html" class="gotur-btn gotur-btn--primary">

                                Discover More <span class="icon"><i class="icon-right"></i></span><!-- /.icon -->

                            </a>

                            {{-- <div class="about-two__button__author">

                                <div class="about-two__button__author__thumb">

                                    <img src="assets/images/resources/about-author-1-1.png" alt="author">

                                </div>

                                <!-- /.about-two__button__call__icon -->

                                <div class="about-two__button__author__content">

                                    <h5 class="about-two__button__author__name">Ronald Richards</h5>

                                    <span class="about-two__button__author__dec">Co,

                                        Founder</span><!-- /.about-two__button__author__dec -->

                                </div>

                                <!-- /.about-two__button__call__content -->

                            </div> --}}

                            <!-- /.about-two__button__call -->

                        </div>

                        <!-- /.about-two__button -->

                    </div>

                    <!-- /.about-two__right -->

                </div>

                <!-- /.col-lg-6 -->

            </div>

            <!-- /.row -->

        </div>

        <!-- /.container -->

        {{-- <div class="client-carousel  wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='500ms'>

            <div class="container">

                <h6 class="client-carousel__title">1k + Brands Trust Us</h6>

                <!-- /.client-carousel__title -->

                <div class="client-carousel__one gotur-owl__carousel owl-theme owl-carousel" data-owl-options='{

                         "items": 5,

                         "margin": 65,

                         "smartSpeed": 700,

                         "loop":true,

                         "autoplay": false,

                         "nav":false,

                         "dots":false,

                         "navText": ["<span class=\"icon-left-arrow\"></span>","<span class=\"icon-right-arrow\"></span>"],

                         "responsive":{

                         "0":{

                         "items": 2,

                         "margin": 30

                         },

                         "431":{

                         "items": 1,

                         "margin": 30

                         },

                         "500":{

                         "items": 2,

                         "margin": 40

                         },

                         "768":{

                         "items": 3,

                         "margin": 50

                         },

                         "992":{

                         "items": 4,

                         "margin": 60

                         },

                         "1200":{

                         "items": 5,

                         "margin": 100

                         }

                         }

                         }'>

                    <div class="client-carousel__one__item">

                        <img src="assets/images/brand/brand-1-1.png" alt="gotur" class="client-carousel__one__image">

                        <img src="assets/images/brand/brand-hover-1-1.png" alt="gotur"
                            class="client-carousel__one__hover-image">

                    </div>

                    <!-- /.owl-slide-item-->

                    <div class="client-carousel__one__item">

                        <img src="assets/images/brand/brand-1-1.png" alt="gotur" class="client-carousel__one__image">

                        <img src="assets/images/brand/brand-hover-1-1.png" alt="gotur"
                            class="client-carousel__one__hover-image">

                    </div>

                    <!-- /.owl-slide-item-->

                    <div class="client-carousel__one__item">

                        <img src="assets/images/brand/brand-1-1.png" alt="gotur" class="client-carousel__one__image">

                        <img src="assets/images/brand/brand-hover-1-1.png" alt="gotur"
                            class="client-carousel__one__hover-image">

                    </div>

                    <!-- /.owl-slide-item-->

                    <div class="client-carousel__one__item">

                        <img src="assets/images/brand/brand-1-1.png" alt="gotur" class="client-carousel__one__image">

                        <img src="assets/images/brand/brand-hover-1-1.png" alt="gotur"
                            class="client-carousel__one__hover-image">

                    </div>

                    <!-- /.owl-slide-item-->

                    <div class="client-carousel__one__item">

                        <img src="assets/images/brand/brand-1-1.png" alt="gotur" class="client-carousel__one__image">

                        <img src="assets/images/brand/brand-hover-1-1.png" alt="gotur"
                            class="client-carousel__one__hover-image">

                    </div>

                    <!-- /.owl-slide-item-->

                    <div class="client-carousel__one__item">

                        <img src="assets/images/brand/brand-1-1.png" alt="gotur" class="client-carousel__one__image">

                        <img src="assets/images/brand/brand-hover-1-1.png" alt="gotur"
                            class="client-carousel__one__hover-image">

                    </div>

                    <!-- /.owl-slide-item-->

                </div>

                <!-- /.thm-owl__slider -->

            </div>

            <!-- /.container -->

        </div> --}}

        <!-- /.client-carousel -->

        <div class="about-two__element-one">

            <img src="assets/images/shapes/about-1-1.png" alt>

        </div>

        <!-- /.about-two__element-one -->

        <div class="about-two__element-two">

            <img src="assets/images/shapes/corki.png" alt="gotur image">

        </div>

        <!-- /.about-two__element-one -->

    </section>

    <section class="cta-two">

        <div class="cta-two__bg wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="300ms"
            style="background-image: url(assets/images/backgrounds/cta-bg-1-1.jpg);"></div><!-- /.cta-two__bg -->

        <div class="container">

            <div class="row justify-content-between align-items-center">

                <div class="col-lg-6"></div><!-- /.col-lg-6 -->

                <div class="col-lg-6">

                    <div class="cta-two__content wow fadeInRight" data-wow-duration='1500ms' data-wow-delay='400ms'>

                        <div class="cta-two__content__inner">

                            <div class="sec-title text-center">

                                <h6 class="sec-title__tagline bw-split-in-right">What We’re Offering</h6>

                                <!-- /.sec-title__tagline -->

                                <h3 class="sec-title__title bw-split-in-left">Get 30% Discount Every Tour</h3>

                                <!-- /.sec-title__title -->

                            </div><!-- /.sec-title -->

                            <div class="time-wepper" data-leading-zeros="true" data-enable-days="true"
                                data-deadline-date="dynamicDate">

                            </div>

                            <div class="cta-two__btn">

                                <a href="checkout.html" class="gotur-btn gotur-btn--base">Start Booking <span
                                        class="icon"><i class="icon-right"></i></span></a>

                            </div><!-- /.cta-two__btn -->

                        </div><!-- /.cta-two__content__inner -->

                    </div><!-- /.cta-two__content -->

                </div><!-- /.col-lg-6 -->

            </div><!-- /.row -->

        </div><!-- /.container -->

        <div class="cta-two__thumb wow fadeInLeft" data-wow-duration='1500ms' data-wow-delay='400ms'>

            <div class="cta-two__thumb__item">

                <img src="assets/images/resources/cta-man-1-1.png" alt="cta image">

            </div><!-- /.cta-two__thumb__item -->

            <div class="cta-two__thumb__popup">

                <img src="assets/images/shapes/cta-1-1-popup.png" alt="cta image">

            </div><!-- /.cta-two__thumb__popup -->

            <div class="cta-two__thumb__element"></div><!-- /.cta-two__thumb__element -->

        </div><!-- /.cta-two__thumb -->

        <div class="cta-two__element">

            <img src="assets/images/shapes/cta-1-1-bg-shape.png" alt>

        </div><!-- /.cta-two__element -->

    </section><!-- /.cta-two -->

    <section class="how-to-work section-space">

        <div class="container">

            <div class="sec-title text-center">

                <h6 class="sec-title__tagline bw-split-in-right">How It Works</h6><!-- /.sec-title__tagline -->

                <h3 class="sec-title__title bw-split-in-left">How It Works Step by Step</h3><!-- /.sec-title__title -->

            </div><!-- /.sec-title -->

            <div class="row gutter-y-40">

                <div class="col-lg-4 col-md-6">

                    <div class="how-to-work__item wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="300ms">

                        <div class="how-to-work__icon">

                            <i class="icon-icon-1"></i>

                            <span class="how-to-work__icon__count"></span>

                        </div><!-- /.how-to-work__icon -->

                        <h4 class="how-to-work__title">Select Destination </h4><!-- /.how-to-work__title -->

                        

                    </div><!-- /.how-to-work__item -->

                </div><!-- /.col-lg-4 -->

                <div class="col-lg-4 col-md-6">

                    <div class="how-to-work__item wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="500ms">

                        <div class="how-to-work__icon">

                            <i class="icon-icon-2"></i>

                            <span class="how-to-work__icon__count"></span>

                        </div><!-- /.how-to-work__icon -->

                        <h4 class="how-to-work__title">Make an Appointments</h4><!-- /.how-to-work__title -->

                        

                    </div><!-- /.how-to-work__item -->

                </div><!-- /.col-lg-4 -->

                <div class="col-lg-4 col-md-6">

                    <div class="how-to-work__item wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="700ms">

                        <div class="how-to-work__icon">

                            <i class="icon-like"></i>

                            <span class="how-to-work__icon__count"></span>

                        </div><!-- /.how-to-work__icon -->

                        <h4 class="how-to-work__title">Enjoy Our Tour</h4><!-- /.how-to-work__title -->

                        

                    </div><!-- /.how-to-work__item -->

                </div><!-- /.col-lg-4 -->

            </div><!-- /.row -->

            <div class="how-to-work__shape">

                <img src="assets/images/shapes/line-how-to.png" alt>

            </div><!-- /.how-to-work__shape -->

        </div><!-- /.container -->

        <div class="how-to-work__element">

            <img src="assets/images/resources/how-lagges.png" alt>

        </div><!-- /.how-to-work__element -->

    </section><!-- /.how-to-work -->

@endsection