@extends('master')
@section('page-title', "RK Accountants")
@section('main-body')
 <div class="page-header light-bg-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="page-header-box">
                    <h1 class="text-anime-style-3">Business Planning</h1>
                    <nav class="wow fadeInUp" data-wow-delay="0.25s">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">home</a></li>
                            <li class="breadcrumb-item"><a href="#">services</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Business Planning</li>
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
                        <h2 class="text-anime-style-3">Get Started with our Business Planning Service</h2>
                        <p class="wow fadeInUp">Our business support network is available to our clients from the first day of your business start-up, through every stage of your business development. Our team has extensive experience in assisting an guiding businesses to be well equipped with the correct business knowledge and tools to be able to succeed at every stage. We act as a silent partner in your business, providing direction and insight from an outward perspective.</p>
                        
                        <h4 class="text-anime-style-3 mt-5 mb-4">Bring us your business ideas and we will help you to evaluate them in a constructive and optimistic manner. We can also help you with</h4>
                        <div class="customer-Benefit-content wow fadeInUp" data-wow-delay="0.5s">
                            <ul>
                                <li>Development of a strategic business plan, setting out objectives, opportunities, constraints and an action plan.</li>
                                <li>Preparation of an overall business plan incorporating cash flow forecast, profit forecast and an assessment of anticipated working capital requirements.</li>
                                <li>Advice on business finance whether through bank funding, factoring, invoice discounting or external investment.</li>
                                <li>Managements of the banking relationship and ensuring a good working relation with the principle source of day to day finance, including reviews of banking covenants and key performance indicators.</li>
                                <li>Profit improvement and managing growth. Objective review of revenue and expenditure streams.</li>
                                <li>Tax planning, retirement planning, pensions and investment advice.</li>
                                <li>Advice relating to the sale of a business; advising in terms of maximising sale proceeds, minimising tax liabilities, and protecting management and employee interests.</li>
                                <li>Managing due diligence process on behalf of clients, whether selling or acquiring.</li>
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