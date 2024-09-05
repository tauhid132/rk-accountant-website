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
                    <h1 class="text-anime-style-3">Our Blog</h1>
                    <nav class="wow fadeInUp" data-wow-delay="0.25s">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">blog</li>
                        </ol>
                    </nav>
                </div>
                <!-- Page Header Box End -->
            </div>
        </div>
    </div>
</div>
<!-- Page Header End -->

<!-- Our blog Section start -->
<div class="page-blog">
    <div class="container">
        <div class="row">
            @foreach ($blogs as $blog)
            <div class="col-lg-4 col-md-6">
                <!-- Blog Item Start -->
                <div class="blog-item wow fadeInUp" data-wow-delay="0.25s">
                    <!-- Post Featured Image Start-->
                    <div class="post-featured-image">
                        <figure class="image-anime">
                            <a href="#"><img src="{{ asset('images/blog_images') }}/{{ $blog->cover_image }}" alt=""></a>
                        </figure>
                    </div>
                    <!-- Post Featured Image End -->
                    
                    <!-- post Item Body Start -->
                    <div class="post-item-body">
                        <h2><a href="#">{{ $blog->title }}</a></h2>                            
                        <p>{!! strip_tags(\Illuminate\Support\Str::limit($blog->body, 150, $end='...')) !!}</p>
                    </div>
                    <!-- Post Item Body End-->
                    
                    <!-- Post Item Footer Start-->
                    <div class="post-item-footer">
                        <a href="#" class="btn-default">read more</a>
                    </div>
                    <!-- Post Item Footer End-->
                </div>
                <!-- Blog Item End -->
            </div>
            @endforeach
            
        </div>
        {{-- {{ $blogs->links() }} --}}
        <div class="row">
            <div class="col-md-12">
                <!-- Post Pagination Start -->
                <div class="post-pagination wow fadeInUp" data-wow-delay="0.75s">
                    {{ $blogs->links() }}
                    {{-- <ul class="pagination">
                        <li><a href="#"><i class="fa-solid fa-arrow-left-long"></i></a></li>
                        <li class="active"><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#"><i class="fa-solid fa-arrow-right-long"></i></a></li>
                    </ul> --}}
                </div>
                <!-- Post Pagination End -->
            </div>
        </div>
    </div>
</div>
<!-- Our blog Section End -->

@endsection