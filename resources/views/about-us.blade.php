@extends('master')
@section('page-title', "About Us | RK Accountants")
@section('main-body')
<!-- Page Header Start -->
<div class="page-header light-bg-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <!-- Page Header Box Start -->
                <div class="page-header-box">
                    <h1 class="text-anime-style-3">About us</h1>
                    <nav class="wow fadeInUp" data-wow-delay="0.25s">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">about us</li>
                        </ol>
                    </nav>
                </div>
                <!-- Page Header Box End -->
            </div>
        </div>
    </div>
</div>
<!-- Page Header End -->
 <!-- Page About Section Start -->
 <div class="page-about">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <!-- About Us Image Start -->
                <div class="page-about-image">
                    <!-- About Image Start -->
                    <div class="about-img-1">
                        <figure class="image-anime reveal">
                            <img src="{{ asset('assets/images/page-about-1.jpg') }}" alt="">
                        </figure>
                    </div>
                    <!-- About Image End -->

                    <!-- About Image Start -->
                    <div class="about-img-2">
                        <figure class="image-anime reveal">
                            <img src="{{ asset('assets/images/page-about-2.jpg') }}" alt="">
                        </figure>
                    </div>
                    <!-- About Image End -->
                    
                    <!-- Satisfied Client Start -->
                    <div class="satisfied-client">
                        <div class="satisfied-client-icon">
                            <img src="images/icon-satisfied-client.svg" alt="">
                        </div>
                        <div class="satisfied-client-content">
                            <h3><span class="counter">300</span>+</h3>
                            <p>satisfied client</p>
                        </div>
                    </div>
                    <!-- Satisfied Client End -->
                </div>
                <!-- About Us Image End -->
            </div>

            <div class="col-lg-6">
                <!-- About Us Content Start -->
                <div class="about-content">
                    <!-- Section Title Start -->
                    <div class="section-title">
                        <h3 class="wow fadeInUp">about our company</h3>
                        <h2 class="text-anime-style-3">RK Accountants</h2>
                    </div>
                    <!-- Section Title End -->

                    <!-- About Content Body Start -->
                    <div class="about-content-body wow fadeInUp mt-3" data-wow-delay="0.25s">
                        <p>We are well established professionally qualified and experienced firm of accountants and tax adviser and having long track record in providing Accounting, Tax and other financial services which include all comprehensive value added services to its esteemed clients ensuring top most quality and standards.​</p>

                            <p class="mt-4">Our professional bodies regulate our activities and conduct. The people behind the company pose strong professional back ground on which the successes for the years are written. We have to compulsorily undertake Continuing Professional Education / development to keep abreast of legislative and regulatory changes affecting our work.</p>
                            
                           <p class="mt-4"> We believe and trust that this should give you the assurance of quality and standard of competence to deal with your financial and taxation affairs professionally and to a very high standard for an affordable fee.</p>
                    </div>
                    <!-- About Content Body End -->

                    <!-- About Content Footer Start -->
                    
                </div>
                <!-- About Us Content End -->
            </div>
        </div>
    </div>
</div>
<!-- Page About Section End -->

{{-- <!-- Why Choose Us Section Start -->
<div class="why-choose-us light-bg-section">
    <div class="container">
        <div class="row section-row align-items-center">
            <div class="col-lg-6">
                <!-- Section Title Start -->
                <div class="section-title">
                    <h3 class="wow fadeInUp">why choose us</h3>
                    <h2 class="text-anime-style-3">The work process of accounting solutions</h2>
                </div>
                <!-- Section Title End -->
            </div>

            <div class="col-lg-6">
                <!-- Section Title Content Start -->
                <div class="section-title-content wow fadeInUp" data-wow-delay="0.25s">
                    <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate.</p>
                </div>
                <!-- Section Title Content End -->
            </div>
        </div>

        <div class="row">
            <div class="col-lg-4">
                <!-- Why Choose Item Start -->
                <div class="why-choose-item wow fadeInUp" data-wow-delay="0.25s">
                    <div class="icon-box">
                        <img src="images/icon-why-choose-4.svg" alt="">
                    </div>
                    <div class="why-choose-body">
                        <h3>better financial insights</h3>
                        <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque.</p>
                    </div>
                </div>
                <!-- Why Choose Item End -->
            </div>

            <div class="col-lg-4">
                <!-- Why Choose Item Start -->
                <div class="why-choose-item wow fadeInUp" data-wow-delay="0.5s">
                    <div class="icon-box">
                        <img src="images/icon-why-choose-5.svg" alt="">
                    </div>
                    <div class="why-choose-body">
                        <h3>streamlined operations</h3>
                        <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque.</p>
                    </div>
                </div>
                <!-- Why Choose Item End -->
            </div>

            <div class="col-lg-4">
                <!-- Why Choose Item Start -->
                <div class="why-choose-item wow fadeInUp" data-wow-delay="0.75s">
                    <div class="icon-box">
                        <img src="images/icon-why-choose-6.svg" alt="">
                    </div>
                    <div class="why-choose-body">
                        <h3>confirm</h3>
                        <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque.</p>
                    </div>
                </div>
                <!-- Why Choose Item End -->
            </div>
        </div>
    </div>
</div>
<!-- Why Choose Us Section End -->

<!-- Our Clients Section Start -->
<div class="our-clients">
    <div class="container">
        <div class="row section-row align-items-center">
            <div class="col-lg-6">
                <!-- Section Title Start -->
                <div class="section-title">
                    <h3 class="wow fadeInUp">our clients</h3>
                    <h2 class="text-anime-style-3">We help global brands deliver great results</h2>
                </div>
                <!-- Section Title End -->
            </div>

            <div class="col-lg-6">
                <!-- Section Title Content Start -->
                <div class="section-title-content wow fadeInUp" data-wow-delay="0.25s">
                    <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate.</p>
                </div>
                <!-- Section Title Content End -->
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <!-- Clients Logo Start -->
                <div class="client-logo wow fadeInUp" data-wow-delay="0.5s">
                    <!-- client Item Start -->
                    <div class="client-item">
                        <img src="images/icon-client-logo-1.svg" alt="">
                    </div>
                    <!-- client Item End -->

                    <!-- client Item Start -->
                    <div class="client-item">
                        <img src="images/icon-client-logo-2.svg" alt="">
                    </div>
                    <!-- client Item End -->

                    <!-- client Item Start -->
                    <div class="client-item">
                        <img src="images/icon-client-logo-3.svg" alt="">
                    </div>
                    <!-- client Item End -->

                    <!-- client Item Start -->
                    <div class="client-item">
                        <img src="images/icon-client-logo-4.svg" alt="">
                    </div>
                    <!-- client Item End -->

                    <!-- client Item Start -->
                    <div class="client-item">
                        <img src="images/icon-client-logo-5.svg" alt="">
                    </div>
                    <!-- client Item End -->

                    <!-- client Item Start -->
                    <div class="client-item">
                        <img src="images/icon-client-logo-6.svg" alt="">
                    </div>
                    <!-- client Item End -->

                    <!-- client Item Start -->
                    <div class="client-item">
                        <img src="images/icon-client-logo-7.svg" alt="">
                    </div>
                    <!-- client Item End -->
                </div>
                <!-- Clients Logo End -->
            </div>
        </div>
    </div>
</div>
<!-- Our Clients Section End -->



<!-- Client Testimonials Start -->
<div class="client-testimonials">
    <div class="container">
        <div class="row section-row align-items-center">
            <div class="col-lg-6">
                <div class="client-testimonials-content">
                    <!-- Section Title Start -->
                    <div class="section-title">
                        <h3 class="wow fadeInUp">testimonials</h3>
                        <h2 class="text-anime-style-3">Real stories of success and satisfaction</h2>
                    </div>
                    <!-- Section Title End -->

                    <!-- Section Body Start -->
                    <div class="section-body">
                        <p class="wow fadeInUp" data-wow-delay="0.25s">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti.</p>
                        <a href="#" class="btn-default wow fadeInUp" data-wow-delay="0.5s">contact us</a>
                    </div>
                    <!-- Section Body Btn End -->
                </div>
            </div>

            <div class="col-lg-6">
                <!-- Testimonial Slider Start -->
                <div class="testimonial-slider">
                    <div class="swiper">
                        <div class="swiper-wrapper">
                            <!-- Testimonial Slide Start -->
                            <div class="swiper-slide">
                                <div class="testimonial-item">	
                                    <div class="testimonial-header">
                                        <div class="author-image">
                                            <figure class="image-anime">
                                                <img src="images/author-1.jpg" alt="">
                                            </figure>
                                        </div>
                                        <div class="author-content">
                                            <h2>john doe</h2>
                                            <p>(customer)</p>
                                        </div>
                                    </div>
                                    <div class="testimonial-body">
                                       <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate. Lorem Ipsum is simply dummy text of the printing and typesetting industry Lorem Ipsum has been the industry's standard .</p>									
                                    </div>													
                                </div>
                            </div>
                            <!-- Testimonial Slide End -->
                            
                            <!-- Testimonial Slide Start -->
                            <div class="swiper-slide">
                                <div class="testimonial-item">	
                                    <div class="testimonial-header">
                                        <div class="author-image">
                                            <figure class="image-anime">
                                                <img src="images/author-2.jpg" alt="">
                                            </figure>
                                        </div>
                                        <div class="author-content">
                                            <h2>banson doe</h2>
                                            <p>(CEO)</p>
                                        </div>
                                    </div>
                                    <div class="testimonial-body">
                                       <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate. Lorem Ipsum is simply dummy text of the printing and typesetting industry Lorem Ipsum has been the industry's standard .</p>									
                                    </div>													
                                </div>
                            </div>
                            <!-- Testimonial Slide End -->

                            <!-- Testimonial Slide Start -->
                            <div class="swiper-slide">
                                <div class="testimonial-item">	
                                    <div class="testimonial-header">
                                        <div class="author-image">
                                            <figure class="image-anime">
                                                <img src="images/author-3.jpg" alt="">
                                            </figure>
                                        </div>
                                        <div class="author-content">
                                            <h2>arita banson</h2>
                                            <p>(employee)</p>
                                        </div>
                                    </div>
                                    <div class="testimonial-body">
                                       <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate. Lorem Ipsum is simply dummy text of the printing and typesetting industry Lorem Ipsum has been the industry's standard .</p>									
                                    </div>													
                                </div>
                            </div>
                            <!-- Testimonial Slide End -->
                        </div>
                        <div class="hero-button-prev"></div>
                        <div class="hero-button-next"></div>
                    </div>
                </div>
                <!-- Testimonial Slider End -->
            </div>
        </div>
    </div>
</div>
<!-- Client Testimonials End --> --}}


@endsection