@extends('master')
@section('page-title', "Yeols Limited")
@section('main-body')
<!-- Page Header Start -->
<div class="page-header light-bg-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <!-- Page Header Box Start -->
                <div class="page-header-box">
                    <h1 class="text-anime-style-3">Page Not Found!</h1>
                    <nav class="wow fadeInUp" data-wow-delay="0.25s">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">404 error</li>
                        </ol>
                    </nav>
                </div>
                <!-- Page Header Box End -->
            </div>
        </div>
    </div>
</div>
<!-- Page Header End -->

<!-- error section start -->
<div class="error-page">
    <div class="container">
        <div class="row">
            <div class="error-page-image wow fadeInUp" data-wow-delay="0.25s">
                <img src="{{ asset('assets/images/404-error-img.png') }}" alt="">
            </div>
            <div class="error-page-content">
                <div class="error-page-content-heading">
                    <h2 class="text-anime-style-3">Oops! sorry, we could not find the page</h2>
                </div>
                <a class="btn-default wow fadeInUp" data-wow-delay="0.25s" href="{{ route('view.home.page') }}">Back To Home</a>
            </div>
        </div>
    </div>
</div>
<!-- error section end -->
@endsection