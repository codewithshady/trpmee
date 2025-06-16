@extends('frontend.app')
@section('content')
    <section class="page-header">
        <div class="page-header__bg" style="background-image: url({{ $destination->main_image ? asset('storage/' . $destination->main_image) : asset('assets/images/backgrounds/page-header-bg-1-1.jpg') }});"></div>
        <!-- /.page-header__bg -->
        <div class="container">
            <div class="page-header__content">
                <h2 class="page-header__title bw-split-in-right">{{ $destination->title ?? 'destination Details' }}</h2>
                <ul class="gotur-breadcrumb list-unstyled">
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li><span>{{ $destination->title ?? 'destination Details' }}</span></li>
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
                    @if($destination->gallery_images && count($destination->gallery_images) > 0)
                        @foreach($destination->gallery_images as $image)
                            <div class="item">
                                <div class="destination-carousel__item">
                                    <img src="{{ asset('storage/' . $image) }}" alt="{{ $destination->title }}">
                                </div><!-- /.destination-carousel__item -->
                            </div><!-- /.item -->
                        @endforeach
                    @endif
                       
                </div><!-- /.destination-carousel__inner -->
            </div><!-- /.destination-carousel -->
            <div class="row gutter-y-30">
                <div class="col-lg-8">
                    <div class="destination-details__content">

                        <div class="destination-details__content__item">
                            <h3 class="destination-details__title wow fadeInUp" data-wow-duration='1500ms'
                                data-wow-delay='500ms'>Overview</h3><!-- /.destination-details__title -->
                            <p class="destination-details__text wow fadeInUp" data-wow-duration='1500ms'
                                data-wow-delay='500ms'>{!!  $destination->description ?? 'Consectetur adipisicing elit sed do eiusmod tempor is incididunt ut labore et dolore of magna aliqua. ut enim ad minim veniam made of owl the quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea dolor commodo consequat duis aute irure and dolor in reprehenderit.Nullam semper quam mauris nec mollis felis aliquam eu ut non gravida mi phasellus.' !!}</p><!-- /.destination-details__text -->
                        </div><!-- /.destination-details__content__item -->

                        
                        <div class="destination-details__content__thumb wow fadeInUp" data-wow-duration='1500ms'
                            data-wow-delay='500ms'>
                            <div class="row gutter-y-30">
                                <div class="col-md-6">
                                    <div class="destination-details__content__thumb__item">
                                        @if($destination->gallery_images && count($destination->gallery_images) > 0)
                                            <img src="{{ asset('storage/' . $destination->gallery_images[0]) }}" alt="destination details">
                                        @else
                                            <img src="assets/images/destination/destination-d-s-1.jpg" alt="destination details">
                                        @endif
                                    </div><!-- /.destination-details__content__thumb -->
                                </div><!-- /.col-md-6 -->
                                <div class="col-md-6">
                                    <div class="destination-details__content__thumb__item">
                                        @if($destination->gallery_images && count($destination->gallery_images) > 1)
                                            <img src="{{ asset('storage/' . $destination->gallery_images[1]) }}" alt="destination details">
                                        @else
                                            <img src="assets/images/destination/destination-d-s-2.jpg" alt="destination details">
                                        @endif
                                    </div><!-- /.destination-details__content__thumb -->
                                </div><!-- /.col-md-6 -->
                            </div><!-- /.row -->
                        </div><!-- /.destination-details__content__thumb -->

                       
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
                                    <span>{{ $destination->country ?? 'London' }}</span>
                                </li>
                                <li>
                                    <p class="destination-details__sidebar__text"> <i class="icon-check-star"></i>Visa
                                        Requirements:</p><!-- /.destination-details__sidebar__text -->
                                    <span>{{ $destination->visa_required ? 'Yes' : 'No' }}</span>
                                </li>
                                <li>
                                    <p class="destination-details__sidebar__text"> <i class="icon-check-star"></i>Per
                                        Person:</p><!-- /.destination-details__sidebar__text -->
                                    <span>${{ $destination->price_per_person ? number_format($destination->price_per_person, 0) : '150' }}</span>
                                </li>
                                <li>
                                    <p class="destination-details__sidebar__text"> <i class="icon-check-star"></i>
                                        Languages:</p><!-- /.destination-details__sidebar__text -->
                                    <span>{{ $destination->language ?? 'English' }}</span>
                                </li>
                                <li>
                                    <p class="destination-details__sidebar__text"> <i class="icon-check-star"></i>Area:
                                    </p><!-- /.destination-details__sidebar__text -->
                                    <span>{{ $destination->area ?? '90.000 Km' }}</span>
                                </li>
                            </ul>
                        </div><!-- /.destination-details__sidebar__item -->
                        <div class="destination-details__sidebar__item destination-details__sidebar__item-map wow fadeInUp"
                            data-wow-duration='1500ms' data-wow-delay='500ms'>
                            @if($destination->map_embed)
                             <iframe title="template google map"
                                    src="{{ $destination->map_embed }}"
                                    class="map__@@extraClassName" allowfullscreen></iframe>
                                
                            @else
                                <iframe title="template google map"
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4562.753041141002!2d-118.80123790098536!3d34.152323469614075!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80e82469c2162619%3A0xba03efb7998eef6d!2sCostco+Wholesale!5e0!3m2!1sbn!2sbd!4v1562518641290!5m2!1sbn!2sbd"
                                    class="map__@@extraClassName" allowfullscreen></iframe>
                            @endif
                        </div><!-- /.destination-details__sidebar__item destination-details__sidebar__item-map -->
                    </aside><!-- /.destination-details__sidebar -->
                </div><!-- /.col-lg-4 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.destination-details -->


@endsection