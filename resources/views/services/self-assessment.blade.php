@extends('master')
@section('page-title', "RK Accountants")
@section('main-body')
 <div class="page-header light-bg-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="page-header-box">
                    <h1 class="text-anime-style-3">Self Assessment</h1>
                    <nav class="wow fadeInUp" data-wow-delay="0.25s">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">home</a></li>
                            <li class="breadcrumb-item"><a href="#">services</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Self Assessment</li>
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
                        <h2 class="text-anime-style-3">Get Started with our Self Assesment Service</h2>
                        <p class="wow fadeInUp">We can relieve you of the self assessment burden and save you time, worry and money by handling this process for you. We will do all the necessary computations, complete your return and even offer advice on how you can minimise your tax liability.</p>
                        
                        <h4 class="text-anime-style-3 mt-5 mb-4">We can assure our clients that much of the worry and hassle of producing your tax return can be removed by allowing us to do it for you. Our dedicated tax team at RK and Co can help by</h4>
                        <div class="customer-Benefit-content wow fadeInUp" data-wow-delay="0.5s">
                            <ul>
                                <li>Filling in your return and advising of the potential reliefs available.</li>
                                <li>Ensuring that the returns will be filed online on time when this becomes compulsory.</li>
                                <li>Liaising with your bank, building society, stockbrokers etc to gather the relevant data for your annual returns.</li>
                                <li>Calculating your tax liability.</li>
                                <li>Advising you when various payments are due and how much to pay.</li>
                                <li>Advising on appropriate record retention.</li>
                                <li>Antroducing you to any relevant tax saving ideas We can deal directly with HM Revenue and Customs on your behalf and, should you be selected for a self assessment enquiry, act for you at any meetings.</li>
                                
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