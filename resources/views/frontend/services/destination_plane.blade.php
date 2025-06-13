@extends('frontend.app')
@section('content')
<section class="page-header">
    <div class="page-header__bg" style="background-image: url({{ asset('assets/images/backgrounds/page-header-bg-1-1.jpg') }});"></div>
    <!-- /.page-header__bg -->
    <div class="container">
        <div class="page-header__content">
            <h2 class="page-header__title bw-split-in-right">Tour Listing</h2>
            <ul class="gotur-breadcrumb list-unstyled">
                <li><a href="{{ url('/') }}">Home</a></li>
                <li><span>Tour Listing</span></li>
            </ul><!-- /.thm-breadcrumb list-unstyled -->
        </div><!-- /.page-header__content -->
    </div><!-- /.container -->
</section><!-- /.page-header -->

<section class="tour-listing-page section-space">
    <div class="container">
        <div class="row gutter-y-30 gutter-x-30">
            @foreach($tours as $tour)
            <div class="col-lg-4 col-md-6">
                <div class="listing-card-four wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='100ms'>
                    <div class="listing-card-four__image">
                        <img src="{{ asset('storage/' . $tour->image) }}" alt="{{ $tour->title }}">
                        <div class="listing-card-four__btn-group">
                            @if($tour->discount)
                            <div class="listing-card-four__discount">-{{ $tour->discount }}% Off</div>
                            <!-- /.listing-card-four__discount -->
                            @endif

                            @if($tour->is_featured)
                            <div class="listing-card-four__featured">Featured</div>
                            <!-- /.listing-card-four__featured -->
                            @endif
                        </div><!-- /.listing-card-four__btn-group -->
                        <div class="listing-card-four__btns">
                            <a href="#"><i class="far fa-heart"></i></a>
                            <div class="listing-card-four__btns__hover">
                                <a href="#" class="listing-card-four__popup card__popup" data-gallery-options='{
                            "items": [
                                {
                                    "src": "{{ asset('storage/' . $tour->image) }}"
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
                                <a href="{{ route('single.destination', ['id'=>$tour->id])
 }}"> <span class="listing-card-four__meta__icon"> <i
                                            class="icon-pin1"></i> </span>{{ $tour->location }}</a>
                            </li>
                            <li>
                                <a href="{{ route('single.destination', ['id'=>$tour->id])
 }}"> <span class="listing-card-four__meta__icon"> <i
                                            class="icon-calendar"></i> </span>{{ $tour->duration ?? 'N/A' }}</a>
                            </li>
                        </ul><!-- /.listing-card-four__meta -->
                        <a href="{{ route('single.destination', ['id'=>$tour->id])
 }}" class="listing-card-four__image__overly"></a>
                    </div><!-- /.listing-card-four__image -->
                    <div class="listing-card-four__content">
                        <div class="listing-card-four__rating">
                            <span>({{ $tour->rating }} Review)</span>
                            @for ($i = 0; $i < 5; $i++)
                                <i class="icon-star{{ $i < $tour->rating ? '' : '-empty' }}"></i>
                                @endfor
                        </div><!-- /.listing-card-four__rating -->
                        <h3 class="listing-card-four__title">
                            <a href="{{ route('single.destination', ['id'=>$tour->id])
 }}">{{ $tour->title }}</a>
                        </h3><!-- /.listing-card-four__title -->

                        <div class="listing-card-four__content__btn">
                            <div class="listing-card-four__price">
                                <span class="listing-card-four__price__sub">Per Day</span>
                                <span class="listing-card-four__price__number">${{ number_format($tour->price, 2) }}</span>
                            </div><!-- /.listing-card-four__price -->
                            <a href="{{ route('single.destination', ['id'=>$tour->id])
 }}" class="listing-card-four__btn gotur-btn"> Book Now
                                <span class="icon"><i class="icon-right"></i> </span></a>
                        </div><!-- /.listing-card-four__content__btn -->
                    </div><!-- /.listing-card-four__content -->
                </div><!-- /.listing-card-four -->
            </div><!-- /.col-lg-4 col-md-6 -->
            @endforeach
        </div><!-- /.row -->

        <!-- Pagination -->
        <div class="col-12">
            <ul class="post-pagination justify-content-center" data-wow-duration='1500ms' data-wow-delay='500ms'>
                @if ($tours->onFirstPage())
                <li><a href="#" class="previous disabled">Previous</a></li>
                @else
                <li><a href="{{ $tours->previousPageUrl() }}" class="previous">Previous</a></li>
                @endif

                @foreach ($tours->getUrlRange(1, $tours->lastPage()) as $page => $url)
                @if ($page == $tours->currentPage())
                <li class="active"><a href="#">{{ $page }}</a></li>
                @else
                <li><a href="{{ $url }}">{{ $page }}</a></li>
                @endif
                @endforeach

                @if ($tours->hasMorePages())
                <li><a href="{{ $tours->nextPageUrl() }}" class="next">Next</a></li>
                @else
                <li><a href="#" class="next disabled">Next</a></li>
                @endif
            </ul><!-- /.post-pagination -->
        </div><!-- /.col-12 -->
    </div><!-- /.container -->
</section><!-- /.tour-listing-page -->
@endsection