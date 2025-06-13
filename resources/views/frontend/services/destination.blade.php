@extends('frontend.app')

@section('content')
<section class="page-header">
    <div class="page-header__bg" style="background-image: url('{{ asset('assets/images/backgrounds/page-header-bg-1-1.jpg') }}');"></div>
    <!-- /.page-header__bg -->
    <div class="container">
        <div class="page-header__content">
            <h2 class="page-header__title bw-split-in-right">Our Destination</h2>
            <ul class="gotur-breadcrumb list-unstyled">
                <li><a href="{{ url('/') }}">Home</a></li>
                <li><span>Our Destination</span></li>
            </ul><!-- /.thm-breadcrumb list-unstyled -->
        </div><!-- /.page-header__content -->
    </div><!-- /.container -->
</section><!-- /.page-header -->

<section class="destination-two section-space">
    <div class="container">
        <div class="row gutter-y-30 gutter-x-30">
            @forelse($destinations as $index => $destination)
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="destination-card-two after-color-{{ ($index % 6) + 1 }} wow fadeInUp" data-wow-duration='1500ms'
                        data-wow-delay='{{ 100 + ($index % 3) * 200 }}ms'>
                        <div class="destination-card-two__thumb">
                            <img src="{{ asset('storage/' . $destination->image) }}" alt="{{ $destination->title }}">
                            <a href="#" class="destination-card-two__overly"></a>
                        </div><!-- /.destination-card-two__thumb -->
                        <div class="destination-card-two__content">
                            <h3 class="destination-card-two__title"><a href="{{ route('destination.plane',['id' => $destination->id]) }}">{{ $destination->title }}</a>
                            </h3><!-- /.destination-card-two__title -->
                        </div><!-- /.destination-one__content -->
                    </div><!-- /.destination-one -->
                </div><!-- /.col-lg-4 col-md-4 col-sm-6 -->
            @empty
                <div class="col-12">
                    <div class="text-center">
                        <p>No destinations available.</p>
                    </div>
                </div>
            @endforelse
            
            <div class="col-12">
                @if($destinations->hasPages())
                    <ul class="post-pagination justify-content-center" data-wow-duration='1500ms' data-wow-delay='500ms'>
                        {{-- Previous Page Link --}}
                        @if ($destinations->onFirstPage())
                            <li><span class="previous">Previous</span></li>
                        @else
                            <li><a href="{{ $destinations->previousPageUrl() }}" class="previous">Previous</a></li>
                        @endif

                        {{-- Pagination Elements --}}
                        @foreach ($destinations->getUrlRange(1, $destinations->lastPage()) as $page => $url)
                            @if ($page == $destinations->currentPage())
                                <li class="active"><a href="#">{{ $page }}</a></li>
                            @else
                                <li><a href="{{ $url }}">{{ $page }}</a></li>
                            @endif
                        @endforeach

                        {{-- Next Page Link --}}
                        @if ($destinations->hasMorePages())
                            <li><a href="{{ $destinations->nextPageUrl() }}" class="next">Next</a></li>
                        @else
                            <li class="active"><span class="next">Next</span></li>
                        @endif
                    </ul><!-- /.post-pagination -->
                @endif
            </div><!-- /.col-12 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.destination-two -->
@endsection