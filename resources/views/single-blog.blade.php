@extends('master')
@section('page-title', $blog->title)
@section('main-body')
<div class="page-header light-bg-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="page-header-box">
                    <h1 class="text-anime-style-3">{{ $blog->title }}</h1>
                    <div class="post-single-meta wow fadeInUp" data-wow-delay="0.25s">
                        <ul>
                            <li><i class="fa-regular fa-user"></i> {{ $blog->author->name }}</li>
                            <li><i class="fa-regular fa-clock"></i> {{ $blog->created_at->format('F j, Y') }}</li>
                        </ul>
                    </div>		
                </div>
            </div>
        </div>
    </div>
</div>

<div class="page-single-post">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="post-content">
                    <div class="post-image">
                        <figure class="image-anime reveal">
                            <img src="{{ asset('images/blog_images') }}/{{ $blog->cover_image }}" alt="">
                        </figure>
                    </div>
                    <div class="post-entry">
                        <p>{!! $blog->body !!}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection