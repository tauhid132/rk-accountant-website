@extends('master')
@section('page-title', "RK Accountants")
@section('main-body')
<!-- Hero Section Start -->
<div class="hero light-bg-section">
    <div class="container">
        <div class="tiny-slider arrow-round arrow-hover arrow-dark">
            <div class="tiny-slider-inner rounded-2" data-autoplay="true" data-arrow="true" data-dots="true" data-items="1" >
                <div>
                    <div class="row align-items-center">
                        <div class="col-lg-5">
                            <!-- Hero Left Content Start -->
                            <div class="hero-content">
                                <div class="section-title mb-3">
                                    <h1>Get Bookkeping, Cashflow Forecast Services</h1>
                                </div>
                                <div class="hero-content-body wow fadeInUp" data-wow-delay="0.5s">
                                    <p>In suscipit urna mi, vel rutrum metus consequat ac. Integer ac magna pharetra, vestibulum augue eget, pharetra mauris. Maecenas non elit viverra, sollicitudin quam.</p>
                                </div>
                                
                                <div class="hero-content-footer wow fadeInUp" data-wow-delay="0.75s">
                                    <a href="#" class="btn-default">work with us</a>
                                </div>
                            </div>
                            <!-- Hero Left Content End -->
                        </div>
                        
                        <div class="col-lg-7">
                            <!-- Hero Image Start -->
                            
                            <div class="hero-image">
                                <figure>
                                    <img style="border-radius: 20px; width:100%" src="{{ asset('images/accounting.jpg') }}" alt="">
                                </figure>                            
                            </div>
                            
                            
                            
                            <!-- Hero Image End -->
                        </div>
                    </div>
                </div>

                <div>
                    <div class="row align-items-center">
                        <div class="col-lg-5">
                            <!-- Hero Left Content Start -->
                            <div class="hero-content">
                                <div class="section-title mb-3">
                                    <h1>Get Annual Accounts, Business Planning</h1>
                                </div>
                                <div class="hero-content-body wow fadeInUp" data-wow-delay="0.5s">
                                    <p>In suscipit urna mi, vel rutrum metus consequat ac. Integer ac magna pharetra, vestibulum augue eget, pharetra mauris. Maecenas non elit viverra, sollicitudin quam.</p>
                                </div>
                                
                                <div class="hero-content-footer wow fadeInUp" data-wow-delay="0.75s">
                                    <a href="#" class="btn-default">work with us</a>
                                </div>
                            </div>
                            <!-- Hero Left Content End -->
                        </div>
                        
                        <div class="col-lg-7">
                            <!-- Hero Image Start -->
                            
                            <div class="hero-image">
                                <figure>
                                    <img style="border-radius: 20px;  width:100%" src="{{ asset('images/accounting3.jpg') }}" alt="">
                                </figure>                            
                            </div>
                            
                            
                            
                            <!-- Hero Image End -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Hero Section End -->

<!-- Our Employee Section Start -->
<div class="our-employee">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-3">
                <div class="employee-image">
                    <img src="{{ asset('assets/images/employee-img.png') }}" alt="">
                </div>
            </div>
            
            <div class="col-lg-9">
                <!-- Employee Content Start -->
                <div class="employee-content">
                    <!-- Section Title Start -->
                    <div class="section-title">
                        <h3 class="wow fadeInUp">About Us</h3>
                        <h2 class="text-anime-style-3">ABOUT <span>RK CONSULTANTS</span></h2>
                    </div>
                    <!-- Section Title End -->
                    
                    <!-- Employee Body Start -->
                    <div class="employee-body wow fadeInUp" data-wow-delay="0.25s">
                        <p>We are well established professionally qualified and experienced firm of accountants and tax adviser and having long track record in providing Accounting, Tax and other financial services which include all comprehensive value added services to its esteemed clients ensuring top most quality and standards.</p>
                        <p>Our professional bodies regulate our activities and conduct. The people behind the company pose strong professional back ground on which the successes for the years are written. We have to compulsorily undertake Continuing Professional Education / development to keep abreast of legislative and regulatory changes affecting our work.</p>
                        <p>We believe and trust that this should give you the assurance of quality and standard of competence to deal with your financial and taxation affairs professionally and to a very high standard for an affordable fee.</p>
                    </div>
                    <!-- Employee Body End -->
                    
                    <!-- Employee Footer Start -->
                    {{-- <div class="employee-footer">
                        <!-- Employee Counter Box Start -->
                        <div class="employee-counter-box">
                            <h3><span class="counter">500</span>+</h3>
                            <p>successful audits</p>
                        </div>
                        <!-- Employee Counter Box End -->
                        
                        <!-- Employee Counter Box Start -->
                        <div class="employee-counter-box">
                            <h3><span class="counter">98</span>%</h3>
                            <p>on-time filing rate</p>
                        </div>
                        <!-- Employee Counter Box End -->
                    </div> --}}
                    <!-- Employee Footer End -->
                </div>
                <!-- Employee Content End -->
            </div>
        </div>
    </div>
</div>
<!-- Our Employee Section End -->
<!-- Why Choose Us Section Start -->
<div class="why-choose-us light-bg-section">
    <div class="container">
        <div class="row section-row align-items-center">
            <div class="col-lg-12">
                <!-- Section Title Start -->
                <div class="section-title">
                    <h3 class="wow fadeInUp">why choose us</h3>
                    <h2 class="text-anime-style-3">We specialise in catering for small and medium-sized businesses, providing simple practical solutions for all type of business structures.</h2>
                </div>
                <!-- Section Title End -->
            </div>
        </div>
        
        <div class="row">
            <div class="col-lg-12">
                <!-- Why Choose Image Box Start -->
                <div class="why-choose-image-box wow fadeInUp" data-wow-delay="0.25s">
                    <!-- Why Choose Image Start -->
                    <div class="why-choose-image">
                        <img src="{{ asset('assets/images/why-choose-us-img.jpg') }}" alt="">
                    </div>
                    <!-- Why Choose Image End -->
                    
                    <!-- Why Choose Content Start -->
                    <div class="why-choose-content">
                        <!-- Why Choose Title Start -->
                        <div class="why-choose-title">
                            <h2 class="text-anime-style-3">Experience seamless, secure, and efficient account management</h2>
                        </div>
                        <!-- Why Choose Title End -->
                        
                        <!-- Why Choose Counter Start -->
                        <div class="why-choose-counter">
                            <h3><span class="counter">12</span> Years</h3>
                            <p>in accounting services</p>
                        </div>
                        <!-- Why Choose Counter End -->
                    </div>
                    <!-- Why Choose Content End -->
                </div>
                <!-- Why Choose Image Box End -->
            </div>                
        </div>
        
        
        
        
        <div class="row">
            <!-- We Help Content Start -->
            <div class="we-help-content">
                <!-- We Help Box Start -->
                <div class="we-help-box wow fadeInUp">
                    <div class="icon-box">
                        <i class="fa fa-lightbulb"></i>
                    </div>
                    <div class="we-help-title">
                        <h3>Tailored Solutions</h3>
                    </div>
                </div>
                <!-- We Help Box End -->
                
                <!-- We Help Box Start -->
                <div class="we-help-box wow fadeInUp" data-wow-delay="0.25s">
                    <div class="icon-box">
                        <i class="fa fa-line-chart"></i>
                    </div>
                    <div class="we-help-title">
                        <h3>Business Oriented Solutions</h3>
                    </div>
                </div>
                <!-- We Help Box End -->
                
                <!-- We Help Box Start -->
                <div class="we-help-box wow fadeInUp" data-wow-delay="0.5s">
                    <div class="icon-box">
                        <i class="fa fa-check"></i>
                    </div>
                    <div class="we-help-title">
                        <h3>Fixed Price Guarenteed</h3>
                    </div>
                </div>
                <!-- We Help Box End -->
                <!-- We Help Box Start -->
                <div class="we-help-box wow fadeInUp" data-wow-delay="0.5s">
                    <div class="icon-box">
                        <i class="fa fa-smile"></i>
                    </div>
                    <div class="we-help-title">
                        <h3>100% Customer Satisfaction</h3>
                    </div>
                </div>
                <!-- We Help Box End -->
                
                
            </div>
            <!-- We Help Content End -->
        </div>
    </div>
</div>
<!-- Why Choose Us Section End -->


<div class="our-employee">
    <div class="container">
        <div class="customer-Benefit">
            <div class="row align-items-center">
                <div class="col-md-5">
                    <!-- Customer Benefits Image Start -->
                    <div class="customer-benefit-image">
                        <figure class="image-anime reveal">
                            <img src="{{ asset('images/accounting3.jpg') }}" alt="">
                        </figure>
                    </div>
                    <!-- Customer Benefits Image End -->
                </div>
                <div class="col-md-7">
                    <!-- Customer Benefits Content Start -->
                    <div class="customer-Benefit-content wow fadeInUp" data-wow-delay="0.5s">
                        <h3>Our Services Includes</h3>
                        <p>Simplify the concepts of depreciation and amortization for non-accountants, templates for businesses explaining their.</p>
                        <div class="row">
                            <div class="col-md-6">
                                <ul>
                                    <li>Annual Accounts</li>
                                    <li>Bookkeeping</li>
                                    <li>vat-service</li>
                                    <li>Inheritance TAX</li>
                                    
                                </ul>
                            </div>
                            <div class="col-md-6">
                                <ul>
                                    <li>capital-gains-tax</li>
                                    <li>Corporate tax planning</li>
                                    <li>Business Planning</li>
                                </ul>
                            </div>
                        </div>
                        
                    </div>
                    <!-- Customer Benefits Content End -->
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Our Services Start -->
<div class="our-service light-bg-section">
    <div class="container">
        <div class="row section-row align-items-center">
            <div class="col-lg-12">
                <!-- Section Title Start -->
                <div class="section-title">
                    <h3 class="wow fadeInUp">our services</h3>
                    <h2 class="text-anime-style-3">SMALL BUSINESS ACCOUNTANTS | LONDON | RK ACCOUNTANTS LONDON</h2>
                </div>
                <!-- Section Title End -->
            </div>
            
            <div class="col-lg-12 mt-2">
                <!-- Section Title Content Start -->
                <div class=" wow fadeInUp" data-wow-delay="0.25s">
                    <p>Having been established for years, RK Accountants stands high among the renowned accountancy firms in London for offering excellent accounting and taxation advice to corporates, as well as individuals. Our clients base range from individuals who are seeking general financial advice to sole traders, limited companies or partnerships. Whatever your goals are, this leading firm is always eager to offer advice and support through its specialized Small Business Accountants team based in London.</p>
                </div>
                <!-- Section Title Content End -->
            </div>
        </div>
        
        <div class="row">
            <div class="col-md-4">
                <!-- Service Item Start -->
                <div class="service-item wow fadeInUp" data-wow-delay="0.25s">
                    <div class="service-image">
                        <figure class="image-anime">
                            <a href="#"><img src="{{ asset('assets/images/service-img-1.jpg') }}" alt=""></a>
                        </figure>
                    </div>
                    <div class="service-content">
                        <h3>Self Assessment</h3>
                        <div class="service-readmore-btn">
                            <a href="#" class="btn-default">read more</a>
                        </div>
                    </div>
                </div>
                <!-- Service Item End -->
            </div>
            
            <div class="col-md-4">
                <!-- Service Item Start -->
                <div class="service-item wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-image">
                        <figure class="image-anime">
                            <a href="#"><img src="{{ asset('images/tax-planning.jpg') }}" alt=""></a>
                        </figure>
                    </div>
                    <div class="service-content">
                        <h3>Personal Tax Planning</h3>
                        <div class="service-readmore-btn">
                            <a href="#" class="btn-default">read more</a>
                        </div>
                    </div>
                </div>
                <!-- Service Item End -->
            </div>
            
            <div class="col-md-4">
                <!-- Service Item Start -->
                <div class="service-item wow fadeInUp" data-wow-delay="0.75s">
                    <div class="service-image">
                        <figure class="image-anime">
                            <a href="#"><img src="{{ asset('images/wealth-management.jpg') }}" alt=""></a>
                        </figure>
                    </div>
                    <div class="service-content">
                        <h3>Wealth Management</h3>
                        <div class="service-readmore-btn">
                            <a href="#" class="btn-default">read more</a>
                        </div>
                    </div>
                </div>
                <!-- Service Item End -->
            </div>
            
            <!-- Services Footer Btn Start -->
            <div class="service-footer-btn wow fadeInUp" data-wow-delay="0.5s">
                <a href="#" class="btn-default">view all services</a>
            </div>
            <!-- Services Footer Btn End -->
        </div>
    </div>
</div>
<!-- Our Services End -->

<!-- State Counter Section Start -->
<div class="state-counter">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-5">
                <!-- Section Title Start -->
                <div class="section-title">
                    <h3 class="wow fadeInUp">state of affairs</h3>
                    <h2 class="text-anime-style-3">Keeping you informed on tax laws and financial trends</h2>
                </div>
                <!-- Section Title End -->
                
                <!-- Counter Contact Btn Start -->
                <div class="counter-contact-btn wow fadeInUp" data-wow-delay="0.25s">
                    <a href="#" class="btn-default">contact us</a>
                </div>
                <!-- Counter Contact Btn End -->
            </div>
            
            <div class="col-lg-7">
                <!-- State Image Counter Start -->
                <div class="state-image-counter-1">
                    <!-- Counter Box Start -->
                    <div class="counter-box wow fadeInUp">
                        <div class="counter-content">
                            <h3><span class="counter">10</span>+</h3>
                            <p>Years in Business</p>
                        </div>
                    </div>
                    <!-- Counter Box End -->
                    
                    <!-- Counter Box Image Start -->
                    <div class="counter-box counter-image wow fadeInUp" data-wow-delay="0.25s">
                        <figure class="image-anime">
                            <img src="{{ asset('assets/images/counter-img-1.jpg') }}" alt="">
                        </figure>
                    </div>
                    <!-- Counter Box Image End -->
                    
                    <!-- Counter Box Start -->
                    <div class="counter-box wow fadeInUp" data-wow-delay="0.5s">
                        <div class="counter-content">
                            <h3><span class="counter">300</span>+</h3>
                            <p>Clients Served</p>
                        </div>
                    </div>
                    <!-- Counter Box End -->
                </div>
                <!-- State Image Counter End -->
                
                <!-- State Image Counter Start -->
                <div class="state-image-counter-2">
                    <!-- Counter Box Image Start -->
                    <div class="counter-box counter-image wow fadeInUp" data-wow-delay="0.75s">
                        <figure class="image-anime">
                            <img src="{{ asset('assets/images/counter-img-2.jpg') }}" alt="">
                        </figure>
                    </div>
                    <!-- Counter Box Image End -->
                    
                    <!-- Counter Box Start -->
                    <div class="counter-box wow fadeInUp" data-wow-delay="1s">
                        <div class="counter-content">
                            <h3><span class="counter">1000</span>+</h3>
                            <p>Overall Services</p>
                        </div>
                    </div>
                    <!-- Counter Box End -->
                    
                    <!-- Counter Box Image Start -->
                    <div class="counter-box counter-image wow fadeInUp" data-wow-delay="1.25s">
                        <figure class="image-anime">
                            <img src="{{ asset('assets/images/counter-img-3.jpg') }}" alt="">
                        </figure>
                    </div>
                    <!-- Counter Box Image End -->
                </div>
                <!-- State Image Counter End -->
            </div>
        </div>
    </div>
</div>
<!-- State Counter Section End -->





<!-- Cta Box Section Start -->
<div class="cta-box">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8">
                <!-- Section Title Start -->
                <div class="section-title">
                    <h2 class="text-anime-style-3">Looking for a premium accounting for your business?</h2>
                </div>
                <!-- Section Title End -->
            </div>
            
            <div class="col-lg-4">
                <!-- Section Btn Start -->
                <div class="section-btn wow fadeInUp" data-wow-delay="0.25s">
                    <a href="#" class="btn-default btn-highlighted btn-large">get started</a>
                </div>
                <!-- Section Btn End -->
            </div>
        </div>
    </div>
</div>
<!-- Cta Box Section End -->



<!-- Our Pricing Section Start -->
<div class="our-pricing light-bg-section mt-5">
    <div class="container">
        <div class="row section-row align-items-center">
            <div class="col-lg-12">
                <!-- Section Title Start -->
                <div class="section-title">
                    <h3 class="wow fadeInUp">Our Services</h3>
                    <h2 class="text-anime-style-3">BUSINESS ACCOUNTANTS</h2>
                    <p class="mt-2">If you are looking for Small Business Accountants based in London, RK Accountants is your one-stop solution for bookkeeping, accounts, tax, business planning and advice.</p>
                </div>
                <!-- Section Title End -->
            </div>
        </div>
        
        <div class="row">
            <div class="col-lg-3">
                <!-- Why Choose Item Start -->
                <div class="why-choose-item wow fadeInUp" data-wow-delay="0.25s">
                    <div class="icon-box">
                        <img src="{{ asset('assets/images/icon-why-choose-1.svg') }}" alt="">
                    </div>
                    <div class="why-choose-body">
                        <h3>Annual Accounts</h3>
                        <p>All businesses are required to prepare annual accounts whether you are a sole trader, partnership or a limited company. We can help you prepare your year end statutory accounts, so you can focus on building and growing your business.</p>
                    </div>
                </div>
                <!-- Why Choose Item End -->
            </div>
            
            <div class="col-lg-3">
                <!-- Why Choose Item Start -->
                <div class="why-choose-item wow fadeInUp" data-wow-delay="0.5s">
                    <div class="icon-box">
                        <img src="{{ asset('assets/images/icon-why-choose-2.svg') }}" alt="">
                    </div>
                    <div class="why-choose-body">
                        <h3>Bookkeping</h3>
                        <p>Our business support network is available to our clients from the first day of your business start-up, through every stage of your business development. Our team has extensive experience in assisting an guiding businesses to be well</p>
                    </div>
                </div>
                <!-- Why Choose Item End -->
            </div>
            
            <div class="col-lg-3">
                <!-- Why Choose Item Start -->
                <div class="why-choose-item wow fadeInUp" data-wow-delay="0.75s">
                    <div class="icon-box">
                        <img src="{{ asset('assets/images/icon-why-choose-3.svg') }}" alt="">
                    </div>
                    <div class="why-choose-body">
                        <h3>Business Planning</h3>
                        <p>Our business support network is available to our clients from the first day of your business start-up, through every stage of your business development. Our team has extensive experience in assisting an guiding businesses to be well</p>
                    </div>
                </div>
                <!-- Why Choose Item End -->
            </div>
            <div class="col-lg-3">
                <!-- Why Choose Item Start -->
                <div class="why-choose-item wow fadeInUp" data-wow-delay="0.75s">
                    <div class="icon-box">
                        <img src="{{ asset('assets/images/icon-why-choose-2.svg') }}" alt="">
                    </div>
                    <div class="why-choose-body">
                        <h3>Cashflow Forecasts</h3>
                        <p>If you are a new or established business, raising finance can be a difficult and time consuming exercise. We can help you prepare and monitor your cashflow statements, making comparisons and budgeting where necessary.</p>
                    </div>
                </div>
                <!-- Why Choose Item End -->
            </div>
        </div>
    </div>
</div>
<!-- Our Pricing Section End -->



<!-- Our blog Section start -->
<div class="our-blog">
    <div class="container">
        <div class="row section-row align-items-center">
            <div class="col-lg-12">
                <!-- Section Title Start -->
                <div class="section-title">
                    <h3 class="wow fadeInUp">our blog</h3>
                    <h2 class="text-anime-style-3">Uncover our latest posts and updates</h2>
                </div>
                <!-- Section Title End -->
            </div>
        </div>
        
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
    </div>
</div>
<!-- Our blog Section End -->

@endsection