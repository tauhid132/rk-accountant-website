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
                    <h1 class="text-anime-style-3">Annual Accounts</h1>
                    <nav class="wow fadeInUp" data-wow-delay="0.25s">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">home</a></li>
                            <li class="breadcrumb-item"><a href="#">services</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Annual Accounts</li>
                        </ol>
                    </nav>
                </div>
                <!-- Page Header Box End -->
            </div>
        </div>
    </div>
</div>
<!-- Page Header End -->

<!-- Single Service Page Start -->
<div class="page-service-single">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="service-single-content">
                    <div class="service-entry">
                        <h2 class="text-anime-style-3">Annual Accounts</h2>
                        <p class="wow fadeInUp">All businesses are required to prepare annual accounts whether you are a sole trader, partnership or a limited company. We can help you prepare your year end statutory accounts, so you can focus on building and growing your business. We enjoy this process as we learn about your business and are then able to offer business advice on how you can operate more effectively. It is also an opportunity to explain to our clients what all the figures on the accounts actually mean, identifying and highlighting any problem areas where we can work together to implement agreed solutions.</p>
                        <p class="wow fadeInUp" data-wow-delay="0.25s">Many organisations can use your produced accounts such as HMRC, Companies House, lenders and potential purchasers. They can also request for interim management accounts which we can prepare at regular intervals, or for a particular set time period. This will show up to date information on your current performance and profitability, and serve as a tool in the operation control of the business to allow proactive action to be taken where necessary.</p>
                        <p class="wow fadeInUp" data-wow-delay="0.50s">We will deal with all your tax affairs for the business and file your accounts on time so you can avoid unwanted penalties.</p>
                      

                        
                        <h4 class="text-anime-style-3 mt-5 mb-4">With the support of our experienced staff and advanced systems, we are equipped to deal with</h4>
                        <div class="customer-Benefit-content wow fadeInUp" data-wow-delay="0.5s">
                            <ul>
                                <li>Filling in your return and advising of the potential reliefs available</li>
                                <li>Ensuring that the returns will be filed online on time when this becomes compulsory</li>
                                <li>Liaising with your bank, building society, stockbrokers etc to gather the relevant data for your annual returns</li>
                                <li>Calculating your tax liability</li>
                                <li>Advising you when various payments are due and how much to pay</li>
                                <li>Advising on appropriate record retention</li>
                                <li>Introducing you to any relevant tax saving ideas We can deal directly with HM Revenue and Customs on your behalf and, should you be selected for a self assessment enquiry, act for you at any meetings.</li>
                              
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