@extends('master')
@section('page-title', "RK Accountants")
@section('main-body')
 <div class="page-header light-bg-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="page-header-box">
                    <h1 class="text-anime-style-3">Wealth Management</h1>
                    <nav class="wow fadeInUp" data-wow-delay="0.25s">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">home</a></li>
                            <li class="breadcrumb-item"><a href="#">services</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Wealth Management</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="page-service-single">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="service-single-content">
                    <div class="service-entry">
                        <h2 class="text-anime-style-3">Get Started with our Wealth Management Service</h2>
                        <p class="wow fadeInUp">We can help ensure that your personal wealth is managed as tax-efficiently as possible.</p>
                        
                        <h4 class="text-anime-style-3 mt-5 mb-4">We can advise with</h4>
                        <div class="customer-Benefit-content wow fadeInUp" data-wow-delay="0.5s">
                            <ul>
                                <li>Personal tax planning.</li>
                                <li>Extracting profit from your business.</li>
                                <li>Remuneration strategies.</li>
                                <li>Tax-efficient savings and investments.</li>
                                <li>Planning for a comfortable retirement.</li>
                                <li>CEstate and inheritance tax planning.</li>
                                <li>Gifting strategies.</li>
                            </ul>
                        </div>
                    </div>
                </div>                    
            </div>

            <div class="col-lg-4">
                @include('services.services-sidebar')
            </div>
        </div>
    </div>
</div>
@endsection