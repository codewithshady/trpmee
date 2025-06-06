@extends('frontend.app')

@section('content')

    <section class="page-header">

        <div class="page-header__bg" style="background-image: url(assets/images/backgrounds/page-header-bg-1-1.jpg);"></div>

        <!-- /.page-header__bg -->

        <div class="container">

            <div class="page-header__content">

                <h2 class="page-header__title bw-split-in-right">Contact us</h2>

                <ul class="gotur-breadcrumb list-unstyled">

                    <li><a href="index.html">Home</a></li>

                    <li><span>Contact us</span></li>

                </ul><!-- /.thm-breadcrumb list-unstyled -->

            </div><!-- /.page-header__content -->

        </div><!-- /.container -->

    </section><!-- /.page-header -->



    <section class="contact-top section-space">

        <div class="container">

            <div class="row gutter-y-30">

                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='300ms'>

                    <div class="contact-top__item">

                        <div class="contact-top__item__icon">

                            <i class="icon-pin"></i>

                        </div><!-- /.contact-top__item__icon -->

                        <h4 class="contact-top__item__title">Our Address</h4><!-- /.contact-top__item__title -->

                        <p class="contact-top__item__text">88, 1st floor, Phoenix Paragon Plaza, 1B, W, Kurla, Mumbai,
                            Maharashtra 400070</p>

                        <!-- /.contact-top__item__text -->

                    </div><!-- /.contact-top__item -->

                </div><!-- /.col-lg-4 col-md-6 -->

                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='500ms'>

                    <div class="contact-top__item">

                        <div class="contact-top__item__icon">

                            <i class="icon-mail-3"></i>

                        </div><!-- /.contact-top__item__icon -->

                        <h4 class="contact-top__item__title"><a
                                href="mailto:tripmeetravels@gmail.com">tripmeetravels@gmail.com</a></h4>

                        <!-- /.contact-top__item__title -->

                        <p class="contact-top__item__text">Email us anytime for anykind ofquety.</p>

                        <!-- /.contact-top__item__text -->

                    </div><!-- /.contact-top__item -->

                </div><!-- /.col-lg-4 col-md-6 -->

                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='700ms'>

                    <div class="contact-top__item">

                        <div class="contact-top__item__icon">

                            <i class="icon-call-3"></i>

                        </div><!-- /.contact-top__item__icon -->

                        <h4 class="contact-top__item__title">Hot:<a href="tel:8291188657">+91 829 118 8657</a></h4>

                        <!-- /.contact-top__item__title -->

                        <p class="contact-top__item__text">Call us any kind suppor,we will wait for it.</p>

                        <!-- /.contact-top__item__text -->

                    </div><!-- /.contact-top__item -->

                </div><!-- /.col-lg-4 col-md-6 -->

            </div><!-- /.row -->

        </div><!-- /.container -->

    </section><!-- /.contact-top -->



    <section class="contact-page section-space-bottom">

        <div class="container">

            <div class="row gutter-y-30">

                <div class="col-lg-6 wow fadeInLeft" data-wow-duration='1500ms' data-wow-delay='300ms'>

                    <div class="contact-page__map">

                        <div class="google-map google-map__@@extraClassName">

                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15083.641296903352!2d72.874498!3d19.06768!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7c8878e3f4b31%3A0xda9a5bd857487a14!2sTripmee%20Travel%20Service!5e0!3m2!1sen!2sin!4v1748863775867!5m2!1sen!2sin"
                                width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"></iframe>

                        </div>

                        <!-- /.google-map -->

                    </div><!-- /.contact-page__map -->

                </div><!-- /.col-lg-5 -->

                <div class="col-lg-6 wow fadeInRight" data-wow-duration='1500ms' data-wow-delay='300ms'>

                    <div class="contact-page__contact">

                        <h2 class="contact-page__title">Ready to Get Started?</h2><!-- /.contact-page__title -->

                        <p class="contact-page__text">Nullam varius, erat quis iaculis dictum, eros urna varius eros, ut

                            blandit felis odio in turpis. Quisque rhoncus</p><!-- /.contact-page__text -->

                        <form class="comments-form__form contact-form-validated form-one">

                            <div class="form-one__group">

                                <div class="form-one__control">

                                    <label for="name">Your Name*</label>

                                    <input type="text" name="name" id="name" placeholder="Your Name">

                                </div>

                                <div class="form-one__control">

                                    <label for="email">Your Email*</label>

                                    <input type="email" name="email" id="email" placeholder="Your Email">

                                </div>

                                <div class="form-one__control form-one__control--full">

                                    <label for="message">Message*</label>

                                    <textarea name="message" id="message" placeholder="Write Message . . "></textarea>

                                </div>

                                <div class="form-one__control form-one__control--full">

                                    <button type="submit" class="gotur-btn gotur-btn--base">Send Message<i
                                            class="icon-arrow-right"></i></button>

                                </div>

                            </div>

                        </form>

                    </div><!-- /.contact-page__contact -->

                </div><!-- /.col-lg-6 -->

            </div><!-- /.row -->

        </div><!-- /.container -->

    </section><!-- /.contact-page -->

@endsection