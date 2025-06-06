@extends('frontend.app')
@section('content')
    <section class="page-header">
        <div class="page-header__bg" style="background-image: url(assets/images/backgrounds/page-header-bg-1-1.jpg);"></div>
        <!-- /.page-header__bg -->
        <div class="container">
            <div class="page-header__content">
                <h2 class="page-header__title bw-split-in-right">destination Details</h2>
                <ul class="gotur-breadcrumb list-unstyled">
                    <li><a href="index.html">Home</a></li>
                    <li><span>destination Details</span></li>
                </ul><!-- /.thm-breadcrumb list-unstyled -->
            </div><!-- /.page-header__content -->
        </div><!-- /.container -->
    </section><!-- /.page-header -->

    <section class="destination-details section-space">
        <div class="container">
            <div class="destination-carousel">
                <div class="destination-carousel__inner gotur-owl__carousel gotur-owl__carousel--basic-nav owl-carousel owl-theme"
                    data-owl-options='{
                    "items": 1,
                    "margin": 30,
                    "loop": true,
                    "smartSpeed": 700,
                    "nav": true,
                    "navText": ["<span class=\"icon-arrow-left\"></span>","<span class=\"icon-arrow-right\"></span>"],
                    "dots": false,
                    "autoplay": false
                }'>
                    <div class="item">
                        <div class="destination-carousel__item">
                            <img src="assets/images/backgrounds/destination-slider-1-1.jpg" alt="destination">
                        </div><!-- /.destination-carousel__item -->
                    </div><!-- /.item -->
                    <div class="item">
                        <div class="destination-carousel__item">
                            <img src="assets/images/backgrounds/destination-slider-1-2.jpg" alt="destination">
                        </div><!-- /.destination-carousel__item -->
                    </div><!-- /.item -->
                    <div class="item">
                        <div class="destination-carousel__item">
                            <img src="assets/images/backgrounds/destination-slider-1-3.jpg" alt="destination">
                        </div><!-- /.destination-carousel__item -->
                    </div><!-- /.item -->
                    <div class="item">
                        <div class="destination-carousel__item">
                            <img src="assets/images/backgrounds/destination-slider-1-4.jpg" alt="destination">
                        </div><!-- /.destination-carousel__item -->
                    </div><!-- /.item -->
                    <div class="item">
                        <div class="destination-carousel__item">
                            <img src="assets/images/backgrounds/destination-slider-1-2.jpg" alt="destination">
                        </div><!-- /.destination-carousel__item -->
                    </div><!-- /.item -->
                    <div class="item">
                        <div class="destination-carousel__item">
                            <img src="assets/images/backgrounds/destination-slider-1-3.jpg" alt="destination">
                        </div><!-- /.destination-carousel__item -->
                    </div><!-- /.item -->
                </div><!-- /.destination-carousel__inner -->
            </div><!-- /.destination-carousel -->
            <div class="row gutter-y-30">
                <div class="col-lg-8">
                    <div class="destination-details__content">

                        <div class="destination-details__content__item">
                            <h3 class="destination-details__title wow fadeInUp" data-wow-duration='1500ms'
                                data-wow-delay='500ms'>Overview</h3><!-- /.destination-details__title -->
                            <p class="destination-details__text wow fadeInUp" data-wow-duration='1500ms'
                                data-wow-delay='500ms'>Consectetur adipisicing elit sed do eiusmod tempor is incididunt ut
                                labore et dolore of magna aliqua. ut enim ad minim veniam made of owl the quis nostrud
                                exercitation ullamco laboris nisi ut aliquip ex ea dolor commodo consequat duis aute irure
                                and dolor in reprehenderit.Nullam semper quam mauris nec mollis felis aliquam eu ut non
                                gravida mi phasellus.</p><!-- /.destination-details__text -->
                        </div><!-- /.destination-details__content__item -->

                        <div class="destination-details__content__item">
                            <h3 class="destination-details__title wow fadeInUp" data-wow-duration='1500ms'
                                data-wow-delay='500ms'>Top Destinations</h3><!-- /.destination-details__title -->
                            <p class="destination-details__text wow fadeInUp" data-wow-duration='1500ms'
                                data-wow-delay='500ms'>Nullam semper quam mauris, nec mollis felis aliquam eu. Ut non
                                gravida mi. Phasellus sagittis mauris sit amet augue imperdiet pretium. Ut neque ex,
                                hendrerit nec faucibus a, convallis a ipsum. Vestibulum nunc erat, venenatis et arcu eget,
                                placerat imperdiet mauris.</p><!-- /.destination-details__text -->
                        </div><!-- /.destination-details__content__item -->

                        <div class="destination-details__content__thumb wow fadeInUp" data-wow-duration='1500ms'
                            data-wow-delay='500ms'>
                            <div class="row gutter-y-30">
                                <div class="col-md-6">
                                    <div class="destination-details__content__thumb__item"><img
                                            src="assets/images/destination/destination-d-s-1.jpg" alt="destination details">
                                    </div><!-- /.destination-details__content__thumb -->
                                </div><!-- /.col-md-6 -->
                                <div class="col-md-6">
                                    <div class="destination-details__content__thumb__item"><img
                                            src="assets/images/destination/destination-d-s-2.jpg" alt="destination details">
                                    </div><!-- /.destination-details__content__thumb -->
                                </div><!-- /.col-md-6 -->
                            </div><!-- /.row -->
                        </div><!-- /.destination-details__content__thumb -->

                        <div class="destination-details__content__faq destination-details__content__item">
                            <h3 class="destination-details__title wow fadeInUp" data-wow-duration='1500ms'
                                data-wow-delay='500ms'>Free Ask Question?</h3><!-- /.destination-details__title -->
                            <div class="faq-page__accordion faq-accordion gotur-accordion" data-grp-name="gotur-accordion">
                                <div class="accordion wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='500ms'>
                                    <div class="accordion-title">
                                        <h4 class="accordion-title__text">How long should a business plan be?<span
                                                class="accordion-title__icon"></span></h4>
                                    </div><!-- /.accordian-title -->
                                    <div class="accordion-content">
                                        <div class="inner">
                                            <p class="inner__text">Nulla facilisi. Vestibulum tristique sem in eros eleifend
                                                imperdiet. Donec quis convallis neque. In id lacus pulvinar lacus, eget
                                                vulputate lectus. Ut viverra bibendum lorem, at tempus nibh mattis in. Sed a
                                                massa eget lacus consequat auctor.</p>
                                        </div><!-- /.accordian-content -->
                                    </div>
                                </div><!-- /.accordian-item -->
                                <div class="accordion active wow fadeInUp" data-wow-duration='1500ms'
                                    data-wow-delay='500ms'>
                                    <div class="accordion-title">
                                        <h4 class="accordion-title__text">What is included in your services?<span
                                                class="accordion-title__icon"></span></h4>
                                    </div><!-- /.accordian-title -->
                                    <div class="accordion-content">
                                        <div class="inner">
                                            <p class="inner__text">Nulla facilisi. Vestibulum tristique sem in eros eleifend
                                                imperdiet. Donec quis convallis neque. In id lacus pulvinar lacus, eget
                                                vulputate lectus. Ut viverra bibendum lorem, at tempus nibh mattis in. Sed a
                                                massa eget lacus consequat auctor.</p>
                                        </div><!-- /.accordian-content -->
                                    </div>
                                </div><!-- /.accordian-item -->
                                <div class="accordion wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='500ms'>
                                    <div class="accordion-title">
                                        <h4 class="accordion-title__text">What type of company is measured?<span
                                                class="accordion-title__icon"></span></h4>
                                    </div><!-- /.accordian-title -->
                                    <div class="accordion-content">
                                        <div class="inner">
                                            <p class="inner__text">Nulla facilisi. Vestibulum tristique sem in eros eleifend
                                                imperdiet. Donec quis convallis neque. In id lacus pulvinar lacus, eget
                                                vulputate lectus. Ut viverra bibendum lorem, at tempus nibh mattis in. Sed a
                                                massa eget lacus consequat auctor.</p>
                                        </div><!-- /.accordian-content -->
                                    </div>
                                </div><!-- /.accordian-item -->
                                <div class="accordion wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='500ms'>
                                    <div class="accordion-title">
                                        <h4 class="accordion-title__text">What type of company is measured?<span
                                                class="accordion-title__icon"></span></h4>
                                    </div><!-- /.accordian-title -->
                                    <div class="accordion-content">
                                        <div class="inner">
                                            <p class="inner__text">Nulla facilisi. Vestibulum tristique sem in eros eleifend
                                                imperdiet. Donec quis convallis neque. In id lacus pulvinar lacus, eget
                                                vulputate lectus. Ut viverra bibendum lorem, at tempus nibh mattis in. Sed a
                                                massa eget lacus consequat auctor.</p>
                                        </div><!-- /.accordian-content -->
                                    </div>
                                </div><!-- /.accordian-item -->
                            </div>
                        </div><!-- /.destination-details__content__faq -->
                    </div><!-- /.destination-details__content -->
                </div><!-- /.col-lg-8 -->
                <div class="col-lg-4">
                    <aside class="destination-details__sidebar">
                        <div class="destination-details__sidebar__item destination-details__sidebar__item-list wow fadeInUp"
                            data-wow-duration='1500ms' data-wow-delay='500ms'>
                            <h4 class="destination-details__sidebar__title wow fadeInUp" data-wow-duration='1500ms'
                                data-wow-delay='500ms'>Some Information</h4><!-- /.destination-details__sidebar__title -->
                            <ul class="destination-details__sidebar__list">
                                <li>
                                    <p class="destination-details__sidebar__text"> <i class="icon-check-star"></i> County:
                                    </p><!-- /.destination-details__sidebar__text -->
                                    <span>London</span>
                                </li>
                                <li>
                                    <p class="destination-details__sidebar__text"> <i class="icon-check-star"></i>Visa
                                        Requirements:</p><!-- /.destination-details__sidebar__text -->
                                    <span>Yes</span>
                                </li>
                                <li>
                                    <p class="destination-details__sidebar__text"> <i class="icon-check-star"></i>Per
                                        Person:</p><!-- /.destination-details__sidebar__text -->
                                    <span>$150</span>
                                </li>
                                <li>
                                    <p class="destination-details__sidebar__text"> <i class="icon-check-star"></i>
                                        Languages:</p><!-- /.destination-details__sidebar__text -->
                                    <span>English</span>
                                </li>
                                <li>
                                    <p class="destination-details__sidebar__text"> <i class="icon-check-star"></i>Area(Km4):
                                    </p><!-- /.destination-details__sidebar__text -->
                                    <span>90.000 Km5</span>
                                </li>
                            </ul>
                        </div><!-- /.destination-details__sidebar__item -->
                        <div class="destination-details__sidebar__item destination-details__sidebar__item-map wow fadeInUp"
                            data-wow-duration='1500ms' data-wow-delay='500ms'>
                            <iframe title="template google map"
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4562.753041141002!2d-118.80123790098536!3d34.152323469614075!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80e82469c2162619%3A0xba03efb7998eef6d!2sCostco+Wholesale!5e0!3m2!1sbn!2sbd!4v1562518641290!5m2!1sbn!2sbd"
                                class="map__@@extraClassName" allowfullscreen></iframe>
                        </div><!-- /.destination-details__sidebar__item destination-details__sidebar__item-map -->
                    </aside><!-- /.destination-details__sidebar -->
                </div><!-- /.col-lg-4 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.destination-details -->


@endsection