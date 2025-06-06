@extends('frontend.app')
@section('content')
    <section class="page-header">
        <div class="page-header__bg" style="background-image: url(assets/images/backgrounds/page-header-bg-1-1.jpg);"></div>
        <!-- /.page-header__bg -->
        <div class="container">
            <div class="page-header__content">
                <h2 class="page-header__title bw-split-in-right">Our Gallery</h2>
                <ul class="gotur-breadcrumb list-unstyled">
                    <li><a href="index.html">Home</a></li>
                    <li><span>Our Gallery</span></li>
                </ul><!-- /.thm-breadcrumb list-unstyled -->
            </div><!-- /.page-header__content -->
        </div><!-- /.container -->
    </section><!-- /.page-header -->

    <section class="gallery-page section-space">
        <div class="container">
            <div class="row masonry-layout gutter-y-30 gutter-x-30">
                <div class="col-md-6 col-lg-4">
                    <div class="gallery-page__card">
                        <img src="assets/images/gallery/gallery-1-1.jpg" alt="gotur">
                        <div class="gallery-page__card__hover">
                            <a href="assets/images/gallery/gallery-1-1.jpg" class="img-popup">
                                <div class="gallery-page__card__icon">
                                    <span class="gallery-page__card__icon__item"></span>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="gallery-page__card">
                        <img src="assets/images/gallery/gallery-1-2.jpg" alt="gotur">
                        <div class="gallery-page__card__hover">
                            <a href="assets/images/gallery/gallery-1-2.jpg" class="img-popup">
                                <div class="gallery-page__card__icon">
                                    <span class="gallery-page__card__icon__item"></span>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="gallery-page__card">
                        <img src="assets/images/gallery/gallery-1-3.jpg" alt="gotur">
                        <div class="gallery-page__card__hover">
                            <a href="assets/images/gallery/gallery-1-3.jpg" class="img-popup">
                                <div class="gallery-page__card__icon">
                                    <span class="gallery-page__card__icon__item"></span>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="gallery-page__card">
                        <img src="assets/images/gallery/gallery-1-4.jpg" alt="gotur">
                        <div class="gallery-page__card__hover">
                            <a href="assets/images/gallery/gallery-1-4.jpg" class="img-popup">
                                <div class="gallery-page__card__icon">
                                    <span class="gallery-page__card__icon__item"></span>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="gallery-page__card">
                        <img src="assets/images/gallery/gallery-1-6.jpg" alt="gotur">
                        <div class="gallery-page__card__hover">
                            <a href="assets/images/gallery/gallery-1-6.jpg" class="img-popup">
                                <div class="gallery-page__card__icon">
                                    <span class="gallery-page__card__icon__item"></span>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="gallery-page__card">
                        <img src="assets/images/gallery/gallery-1-5.jpg" alt="gotur">
                        <div class="gallery-page__card__hover">
                            <a href="assets/images/gallery/gallery-1-5.jpg" class="img-popup">
                                <div class="gallery-page__card__icon">
                                    <span class="gallery-page__card__icon__item"></span>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="gallery-page__card">
                        <img src="assets/images/gallery/gallery-1-8.jpg" alt="gotur">
                        <div class="gallery-page__card__hover">
                            <a href="assets/images/gallery/gallery-1-8.jpg" class="img-popup">
                                <div class="gallery-page__card__icon">
                                    <span class="gallery-page__card__icon__item"></span>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="gallery-page__card">
                        <img src="assets/images/gallery/gallery-1-7.jpg" alt="gotur">
                        <div class="gallery-page__card__hover">
                            <a href="assets/images/gallery/gallery-1-7.jpg" class="img-popup">
                                <div class="gallery-page__card__icon">
                                    <span class="gallery-page__card__icon__item"></span>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection