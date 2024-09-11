@extends('master')
@section('page-title', "RK Accountants")
@section('main-body')
 <div class="page-header light-bg-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="page-header-box">
                    <h1 class="text-anime-style-3">VAT Service</h1>
                    <nav class="wow fadeInUp" data-wow-delay="0.25s">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">home</a></li>
                            <li class="breadcrumb-item"><a href="#">services</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Vat Service</li>
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
                        <h2 class="text-anime-style-3">Get Started with our Vat Service</h2>
                        <p class="wow fadeInUp">Many businesses unintentionally over or underpay Value Added Tax (VAT) as a result of its complexity.</p>
                        <p class="wow fadeInUp">The widening parameters of this burdensome tax, frequent changes and increasing penalty regime made by HM Revenue and Customs often require the assistance of a professional to ensure that businesses comply with the relevant regulations.</p>
                        
                        <h4 class="text-anime-style-3 mt-5 mb-4">We provide an efficient VAT service, which includes</h4>
                        <div class="customer-Benefit-content wow fadeInUp" data-wow-delay="0.5s">
                            <ul>
                                <li>Assistance with VAT registration.</li>
                                <li>Advice on VAT planning and administration.</li>
                                <li>Use of the most appropriate scheme.</li>
                                <li>VAT control and reconciliation.</li>
                                <li>Help with completing VAT returns.</li>
                                <li>Planning to minimise future problems with HM Revenue and Customs.</li>
                                <li>Negotiating with HM Revenue and Customs in disputes and representing you at VAT tribunals</li>
                            </ul>
                        </div>
                    </div>
                    <a href="{{ route('view.contact.us') }}" class="btn-default mt-5 wow fadeInUp" data-wow-delay="1s">Fore More Information, Please Contact Us</a>
                </div>                    
            </div>

            <div class="col-lg-4">
                @include('services.services-sidebar')
            </div>
        </div>
    </div>
</div>
@endsection