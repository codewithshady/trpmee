@extends('frontend.app')
@section('content')
    <section class="page-header">
        <div class="page-header__bg" style="background-image: url(assets/images/backgrounds/page-header-bg-1-1.jpg);"></div>
        <!-- /.page-header__bg -->
        <div class="container">
            <div class="page-header__content">
                <h2 class="page-header__title bw-split-in-right">Tour Listing</h2>
                <ul class="gotur-breadcrumb list-unstyled">
                    <li><a href="index.html">Home</a></li>
                    <li><span>Tour Listing</span></li>
                </ul><!-- /.thm-breadcrumb list-unstyled -->
            </div><!-- /.page-header__content -->
        </div><!-- /.container -->
    </section><!-- /.page-header -->

    <section class="tour-listing-page section-space">
        <div class="container">
            <div class="row gutter-y-30 gutter-x-30">
                <div class="col-lg-4 col-md-6">
                    <div class="listing-card-four wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='100ms'>
                        <div class="listing-card-four__image">
                            <img src="assets/images/blog/listing-list-4-1.jpg"
                                alt="All Inclusive Ultimate Circle Island Day with Lunch">
                            <div class="listing-card-four__btn-group">


                                <div class="listing-card-four__featured">Featured</div>
                                <!-- /.listing-card-four__featured -->

                            </div><!-- /.listing-card-four__btn-group -->
                            <div class="listing-card-four__btns">
                                <a href="#"><i class="far fa-heart"></i></a>
                                <div class="listing-card-four__btns__hover">
                                    <a href="#" class="listing-card-four__popup card__popup" data-gallery-options='{
                            "items": [
                                {
                                    "src": "assets/images/blog/listing-1-1.jpg"
                                },
                                {
                                    "src": "assets/images/blog/listing-1-2.jpg"
                                },
                                {
                                    "src": "assets/images/blog/listing-1-3.jpg"
                                }
                            ],
                            "gallery": {
                                "enabled": true
                            },
                            "type": "image"
                        }'>
                                        <span class="icon-image"></span>
                                    </a>
                                    <a class="video-popup" href="https://www.youtube.com/watch?v=0MuL8fd3pb8"><span
                                            class="icon-video"></span></a>
                                </div><!-- /.listing-card-four__btns__hover -->
                            </div>
                            <ul class="listing-card-four__meta list-unstyled">
                                <li>
                                    <a href="tour-listing-details-2.html"> <span class="listing-card-four__meta__icon"> <i
                                                class="icon-pin1"></i> </span>Slingerland</a>
                                </li>
                                <li>
                                    <a href="tour-listing-details-2.html"> <span class="listing-card-four__meta__icon"> <i
                                                class="icon-calendar"></i> </span>6 Days, 3 Night</a>
                                </li>
                            </ul><!-- /.listing-card-four__meta -->
                            <a href="tour-listing-details-2.html" class="listing-card-four__image__overly"></a>
                        </div><!-- /.listing-card-four__image -->
                        <div class="listing-card-four__content">
                            <div class="listing-card-four__rating">
                                <span>(10 Review)</span>
                                <i class="icon-star"></i>
                                <i class="icon-star"></i>
                                <i class="icon-star"></i>
                                <i class="icon-star"></i>
                                <i class="icon-star"></i>
                            </div><!-- /.listing-card-four__rating -->
                            <h3 class="listing-card-four__title"><a href="tour-listing-details-2.html">All Inclusive
                                    Ultimate Circle Island Day with Lunch</a></h3><!-- /.listing-card-four__title -->

                            <div class="listing-card-four__content__btn">
                                <div class="listing-card-four__price">
                                    <span class="listing-card-four__price__sub">Per Day</span>
                                    <span class="listing-card-four__price__number">$59.00</span>
                                </div><!-- /.listing-card-four__price -->
                                <a href="\single_destination" class="listing-card-four__btn gotur-btn"> Book Now
                                    <span class="icon"><i class="icon-right"></i> </span></a>
                            </div><!-- /.listing-card-four__content__btn -->
                        </div><!-- /.listing-card-four__content -->
                    </div><!-- /.listing-card-four -->
                </div><!-- /.col-lg-4 col-md-6 -->
                <div class="col-lg-4 col-md-6">
                    <div class="listing-card-four wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='100ms'>
                        <div class="listing-card-four__image">
                            <img src="assets/images/blog/listing-list-4-2.jpg"
                                alt="Molokini and Turtle Town Snorkeling Adventure Aboard">
                            <div class="listing-card-four__btn-group">

                                <div class="listing-card-four__discount">-40% Off</div>
                                <!-- /.listing-card-four__discount -->


                                <div class="listing-card-four__featured">Featured</div>
                                <!-- /.listing-card-four__featured -->

                            </div><!-- /.listing-card-four__btn-group -->
                            <div class="listing-card-four__btns">
                                <a href="#"><i class="far fa-heart"></i></a>
                                <div class="listing-card-four__btns__hover">
                                    <a href="#" class="listing-card-four__popup card__popup" data-gallery-options='{
                            "items": [
                                {
                                    "src": "assets/images/blog/listing-1-1.jpg"
                                },
                                {
                                    "src": "assets/images/blog/listing-1-2.jpg"
                                },
                                {
                                    "src": "assets/images/blog/listing-1-3.jpg"
                                }
                            ],
                            "gallery": {
                                "enabled": true
                            },
                            "type": "image"
                        }'>
                                        <span class="icon-image"></span>
                                    </a>
                                    <a class="video-popup" href="https://www.youtube.com/watch?v=0MuL8fd3pb8"><span
                                            class="icon-video"></span></a>
                                </div><!-- /.listing-card-four__btns__hover -->
                            </div>
                            <ul class="listing-card-four__meta list-unstyled">
                                <li>
                                    <a href="tour-listing-details-2.html"> <span class="listing-card-four__meta__icon"> <i
                                                class="icon-pin1"></i> </span>Slingerland</a>
                                </li>
                                <li>
                                    <a href="tour-listing-details-2.html"> <span class="listing-card-four__meta__icon"> <i
                                                class="icon-calendar"></i> </span>6 Days, 3 Night</a>
                                </li>
                            </ul><!-- /.listing-card-four__meta -->
                            <a href="tour-listing-details-2.html" class="listing-card-four__image__overly"></a>
                        </div><!-- /.listing-card-four__image -->
                        <div class="listing-card-four__content">
                            <div class="listing-card-four__rating">
                                <span>(10 Review)</span>
                                <i class="icon-star"></i>
                                <i class="icon-star"></i>
                                <i class="icon-star"></i>
                                <i class="icon-star"></i>
                                <i class="icon-star"></i>
                            </div><!-- /.listing-card-four__rating -->
                            <h3 class="listing-card-four__title"><a href="tour-listing-details-2.html">Molokini and Turtle
                                    Town Snorkeling Adventure Aboard</a></h3><!-- /.listing-card-four__title -->

                            <div class="listing-card-four__content__btn">
                                <div class="listing-card-four__price">
                                    <span class="listing-card-four__price__sub">Per Day</span>
                                    <span class="listing-card-four__price__number">$59.00</span>
                                </div><!-- /.listing-card-four__price -->
                                <a href="/single_destination" class="listing-card-four__btn gotur-btn"> Book Now
                                    <span class="icon"><i class="icon-right"></i> </span></a>
                            </div><!-- /.listing-card-four__content__btn -->
                        </div><!-- /.listing-card-four__content -->
                    </div><!-- /.listing-card-four -->
                </div><!-- /.col-lg-4 col-md-6 -->
                <div class="col-lg-4 col-md-6">
                    <div class="listing-card-four wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='100ms'>
                        <div class="listing-card-four__image">
                            <img src="assets/images/blog/listing-list-4-3.jpg"
                                alt="All Inclusive Ultimate Circle Island Day with Lunch">
                            <div class="listing-card-four__btn-group">


                                <div class="listing-card-four__featured">Featured</div>
                                <!-- /.listing-card-four__featured -->

                            </div><!-- /.listing-card-four__btn-group -->
                            <div class="listing-card-four__btns">
                                <a href="#"><i class="far fa-heart"></i></a>
                                <div class="listing-card-four__btns__hover">
                                    <a href="#" class="listing-card-four__popup card__popup" data-gallery-options='{
                            "items": [
                                {
                                    "src": "assets/images/blog/listing-1-1.jpg"
                                },
                                {
                                    "src": "assets/images/blog/listing-1-2.jpg"
                                },
                                {
                                    "src": "assets/images/blog/listing-1-3.jpg"
                                }
                            ],
                            "gallery": {
                                "enabled": true
                            },
                            "type": "image"
                        }'>
                                        <span class="icon-image"></span>
                                    </a>
                                    <a class="video-popup" href="https://www.youtube.com/watch?v=0MuL8fd3pb8"><span
                                            class="icon-video"></span></a>
                                </div><!-- /.listing-card-four__btns__hover -->
                            </div>
                            <ul class="listing-card-four__meta list-unstyled">
                                <li>
                                    <a href="tour-listing-details-2.html"> <span class="listing-card-four__meta__icon"> <i
                                                class="icon-pin1"></i> </span>Slingerland</a>
                                </li>
                                <li>
                                    <a href="tour-listing-details-2.html"> <span class="listing-card-four__meta__icon"> <i
                                                class="icon-calendar"></i> </span>6 Days, 3 Night</a>
                                </li>
                            </ul><!-- /.listing-card-four__meta -->
                            <a href="tour-listing-details-2.html" class="listing-card-four__image__overly"></a>
                        </div><!-- /.listing-card-four__image -->
                        <div class="listing-card-four__content">
                            <div class="listing-card-four__rating">
                                <span>(10 Review)</span>
                                <i class="icon-star"></i>
                                <i class="icon-star"></i>
                                <i class="icon-star"></i>
                                <i class="icon-star"></i>
                                <i class="icon-star"></i>
                            </div><!-- /.listing-card-four__rating -->
                            <h3 class="listing-card-four__title"><a href="tour-listing-details-2.html">All Inclusive
                                    Ultimate Circle Island Day with Lunch</a></h3><!-- /.listing-card-four__title -->

                            <div class="listing-card-four__content__btn">
                                <div class="listing-card-four__price">
                                    <span class="listing-card-four__price__sub">Per Day</span>
                                    <span class="listing-card-four__price__number">$59.00</span>
                                </div><!-- /.listing-card-four__price -->
                                <a href="/single_destination" class="listing-card-four__btn gotur-btn"> Book Now
                                    <span class="icon"><i class="icon-right"></i> </span></a>
                            </div><!-- /.listing-card-four__content__btn -->
                        </div><!-- /.listing-card-four__content -->
                    </div><!-- /.listing-card-four -->
                </div><!-- /.col-lg-4 col-md-6 -->
                <div class="col-lg-4 col-md-6">
                    <div class="listing-card-four wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='100ms'>
                        <div class="listing-card-four__image">
                            <img src="assets/images/blog/listing-list-4-4.jpg"
                                alt="Molokini and Turtle Town Snorkeling Adventure Aboard">
                            <div class="listing-card-four__btn-group">


                                <div class="listing-card-four__featured">Featured</div>
                                <!-- /.listing-card-four__featured -->

                            </div><!-- /.listing-card-four__btn-group -->
                            <div class="listing-card-four__btns">
                                <a href="#"><i class="far fa-heart"></i></a>
                                <div class="listing-card-four__btns__hover">
                                    <a href="#" class="listing-card-four__popup card__popup" data-gallery-options='{
                            "items": [
                                {
                                    "src": "assets/images/blog/listing-1-1.jpg"
                                },
                                {
                                    "src": "assets/images/blog/listing-1-2.jpg"
                                },
                                {
                                    "src": "assets/images/blog/listing-1-3.jpg"
                                }
                            ],
                            "gallery": {
                                "enabled": true
                            },
                            "type": "image"
                        }'>
                                        <span class="icon-image"></span>
                                    </a>
                                    <a class="video-popup" href="https://www.youtube.com/watch?v=0MuL8fd3pb8"><span
                                            class="icon-video"></span></a>
                                </div><!-- /.listing-card-four__btns__hover -->
                            </div>
                            <ul class="listing-card-four__meta list-unstyled">
                                <li>
                                    <a href="tour-listing-details-2.html"> <span class="listing-card-four__meta__icon"> <i
                                                class="icon-pin1"></i> </span>Slingerland</a>
                                </li>
                                <li>
                                    <a href="tour-listing-details-2.html"> <span class="listing-card-four__meta__icon"> <i
                                                class="icon-calendar"></i> </span>6 Days, 3 Night</a>
                                </li>
                            </ul><!-- /.listing-card-four__meta -->
                            <a href="tour-listing-details-2.html" class="listing-card-four__image__overly"></a>
                        </div><!-- /.listing-card-four__image -->
                        <div class="listing-card-four__content">
                            <div class="listing-card-four__rating">
                                <span>(10 Review)</span>
                                <i class="icon-star"></i>
                                <i class="icon-star"></i>
                                <i class="icon-star"></i>
                                <i class="icon-star"></i>
                                <i class="icon-star"></i>
                            </div><!-- /.listing-card-four__rating -->
                            <h3 class="listing-card-four__title"><a href="tour-listing-details-2.html">Molokini and Turtle
                                    Town Snorkeling Adventure Aboard</a></h3><!-- /.listing-card-four__title -->

                            <div class="listing-card-four__content__btn">
                                <div class="listing-card-four__price">
                                    <span class="listing-card-four__price__sub">Per Day</span>
                                    <span class="listing-card-four__price__number">$59.00</span>
                                </div><!-- /.listing-card-four__price -->
                                <a href="/single_destination" class="listing-card-four__btn gotur-btn"> Book Now
                                    <span class="icon"><i class="icon-right"></i> </span></a>
                            </div><!-- /.listing-card-four__content__btn -->
                        </div><!-- /.listing-card-four__content -->
                    </div><!-- /.listing-card-four -->
                </div><!-- /.col-lg-4 col-md-6 -->
                <div class="col-lg-4 col-md-6">
                    <div class="listing-card-four wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='100ms'>
                        <div class="listing-card-four__image">
                            <img src="assets/images/blog/listing-list-4-1.jpg"
                                alt="All Inclusive Ultimate Circle Island Day with Lunch">
                            <div class="listing-card-four__btn-group">


                                <div class="listing-card-four__featured">Featured</div>
                                <!-- /.listing-card-four__featured -->

                            </div><!-- /.listing-card-four__btn-group -->
                            <div class="listing-card-four__btns">
                                <a href="#"><i class="far fa-heart"></i></a>
                                <div class="listing-card-four__btns__hover">
                                    <a href="#" class="listing-card-four__popup card__popup" data-gallery-options='{
                            "items": [
                                {
                                    "src": "assets/images/blog/listing-1-1.jpg"
                                },
                                {
                                    "src": "assets/images/blog/listing-1-2.jpg"
                                },
                                {
                                    "src": "assets/images/blog/listing-1-3.jpg"
                                }
                            ],
                            "gallery": {
                                "enabled": true
                            },
                            "type": "image"
                        }'>
                                        <span class="icon-image"></span>
                                    </a>
                                    <a class="video-popup" href="https://www.youtube.com/watch?v=0MuL8fd3pb8"><span
                                            class="icon-video"></span></a>
                                </div><!-- /.listing-card-four__btns__hover -->
                            </div>
                            <ul class="listing-card-four__meta list-unstyled">
                                <li>
                                    <a href="tour-listing-details-2.html"> <span class="listing-card-four__meta__icon"> <i
                                                class="icon-pin1"></i> </span>Slingerland</a>
                                </li>
                                <li>
                                    <a href="tour-listing-details-2.html"> <span class="listing-card-four__meta__icon"> <i
                                                class="icon-calendar"></i> </span>6 Days, 3 Night</a>
                                </li>
                            </ul><!-- /.listing-card-four__meta -->
                            <a href="tour-listing-details-2.html" class="listing-card-four__image__overly"></a>
                        </div><!-- /.listing-card-four__image -->
                        <div class="listing-card-four__content">
                            <div class="listing-card-four__rating">
                                <span>(10 Review)</span>
                                <i class="icon-star"></i>
                                <i class="icon-star"></i>
                                <i class="icon-star"></i>
                                <i class="icon-star"></i>
                                <i class="icon-star"></i>
                            </div><!-- /.listing-card-four__rating -->
                            <h3 class="listing-card-four__title"><a href="tour-listing-details-2.html">All Inclusive
                                    Ultimate Circle Island Day with Lunch</a></h3><!-- /.listing-card-four__title -->

                            <div class="listing-card-four__content__btn">
                                <div class="listing-card-four__price">
                                    <span class="listing-card-four__price__sub">Per Day</span>
                                    <span class="listing-card-four__price__number">$59.00</span>
                                </div><!-- /.listing-card-four__price -->
                                <a href="/single_destination" class="listing-card-four__btn gotur-btn"> Book Now
                                    <span class="icon"><i class="icon-right"></i> </span></a>
                            </div><!-- /.listing-card-four__content__btn -->
                        </div><!-- /.listing-card-four__content -->
                    </div><!-- /.listing-card-four -->
                </div><!-- /.col-lg-4 col-md-6 -->
                <div class="col-lg-4 col-md-6">
                    <div class="listing-card-four wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='100ms'>
                        <div class="listing-card-four__image">
                            <img src="assets/images/blog/listing-list-4-2.jpg"
                                alt="Molokini and Turtle Town Snorkeling Adventure Aboard">
                            <div class="listing-card-four__btn-group">

                                <div class="listing-card-four__discount">-40% Off</div>
                                <!-- /.listing-card-four__discount -->


                                <div class="listing-card-four__featured">Featured</div>
                                <!-- /.listing-card-four__featured -->

                            </div><!-- /.listing-card-four__btn-group -->
                            <div class="listing-card-four__btns">
                                <a href="#"><i class="far fa-heart"></i></a>
                                <div class="listing-card-four__btns__hover">
                                    <a href="#" class="listing-card-four__popup card__popup" data-gallery-options='{
                            "items": [
                                {
                                    "src": "assets/images/blog/listing-1-1.jpg"
                                },
                                {
                                    "src": "assets/images/blog/listing-1-2.jpg"
                                },
                                {
                                    "src": "assets/images/blog/listing-1-3.jpg"
                                }
                            ],
                            "gallery": {
                                "enabled": true
                            },
                            "type": "image"
                        }'>
                                        <span class="icon-image"></span>
                                    </a>
                                    <a class="video-popup" href="https://www.youtube.com/watch?v=0MuL8fd3pb8"><span
                                            class="icon-video"></span></a>
                                </div><!-- /.listing-card-four__btns__hover -->
                            </div>
                            <ul class="listing-card-four__meta list-unstyled">
                                <li>
                                    <a href="tour-listing-details-2.html"> <span class="listing-card-four__meta__icon"> <i
                                                class="icon-pin1"></i> </span>Slingerland</a>
                                </li>
                                <li>
                                    <a href="tour-listing-details-2.html"> <span class="listing-card-four__meta__icon"> <i
                                                class="icon-calendar"></i> </span>6 Days, 3 Night</a>
                                </li>
                            </ul><!-- /.listing-card-four__meta -->
                            <a href="tour-listing-details-2.html" class="listing-card-four__image__overly"></a>
                        </div><!-- /.listing-card-four__image -->
                        <div class="listing-card-four__content">
                            <div class="listing-card-four__rating">
                                <span>(10 Review)</span>
                                <i class="icon-star"></i>
                                <i class="icon-star"></i>
                                <i class="icon-star"></i>
                                <i class="icon-star"></i>
                                <i class="icon-star"></i>
                            </div><!-- /.listing-card-four__rating -->
                            <h3 class="listing-card-four__title"><a href="tour-listing-details-2.html">Molokini and Turtle
                                    Town Snorkeling Adventure Aboard</a></h3><!-- /.listing-card-four__title -->

                            <div class="listing-card-four__content__btn">
                                <div class="listing-card-four__price">
                                    <span class="listing-card-four__price__sub">Per Day</span>
                                    <span class="listing-card-four__price__number">$59.00</span>
                                </div><!-- /.listing-card-four__price -->
                                <a href="/single_destination" class="listing-card-four__btn gotur-btn"> Book Now
                                    <span class="icon"><i class="icon-right"></i> </span></a>
                            </div><!-- /.listing-card-four__content__btn -->
                        </div><!-- /.listing-card-four__content -->
                    </div><!-- /.listing-card-four -->
                </div><!-- /.col-lg-4 col-md-6 -->
                <div class="col-12">
                    <ul class="post-pagination justify-content-center" data-wow-duration='1500ms' data-wow-delay='500ms'>
                        <li> <a href="#" class="previous">Previous</a> </li>
                        <li> <a href="#">1</a></li>
                        <li> <a href="#">2</a></li>
                        <li> <a href="#">3</a></li>
                        <li> <a href="#">...</a></li>
                        <li class="active"> <a href="#" class="next">Next</a> </li>
                    </ul><!-- /.post-pagination -->
                </div><!-- /.col-12 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.tour-listing-page -->


@endsection