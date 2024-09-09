@extends('master')
@section('page-title', "Blogs | RK Accountants")
@section('main-body')
<div class="page-header light-bg-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="page-header-box">
                    <h1 class="text-anime-style-3">Our Blog</h1>
                    <nav class="wow fadeInUp" data-wow-delay="0.25s">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">blog</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="page-blog">
    <div class="container">
        <div class="row">
            @foreach ($blogs as $blog)
            <div class="col-lg-4 col-md-6">
                <div class="blog-item wow fadeInUp" data-wow-delay="0.25s">
                    <div class="post-featured-image">
                        <figure class="image-anime">
                            <a href="{{ route('view.single.blog', $blog->slug) }}"><img src="{{ asset('images/blog_images') }}/{{ $blog->cover_image }}" alt=""></a>
                        </figure>
                    </div>

                    <div class="post-item-body">
                        <h2><a href="{{ route('view.single.blog', $blog->slug) }}">{{ $blog->title }}</a></h2>                            
                        <p>{!! strip_tags(\Illuminate\Support\Str::limit($blog->body, 150, $end='...')) !!}</p>
                    </div>

                    <div class="post-item-footer">
                        <a href="{{ route('view.single.blog', $blog->slug) }}" class="btn-default">read more</a>
                    </div>
                </div>
            </div>
            @endforeach
            
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="post-pagination wow fadeInUp" data-wow-delay="0.75s">
                    {{ $blogs->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection