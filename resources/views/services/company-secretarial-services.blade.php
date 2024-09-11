@extends('master')
@section('page-title', "RK Accountants")
@section('main-body')
 <div class="page-header light-bg-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="page-header-box">
                    <h1 class="text-anime-style-3">Company Secretarial Services</h1>
                    <nav class="wow fadeInUp" data-wow-delay="0.25s">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">home</a></li>
                            <li class="breadcrumb-item"><a href="#">services</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Company Secretarial Services</li>
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
                        <h2 class="text-anime-style-3">Get Started with our Company Secretarial Services</h2>
                        <p class="wow fadeInUp">The companies act places strict obligations on companies to submit the required documents according to deadlines.

                            At RK & Co, we can take care of all your daunting paperwork to keep your hands and mind free.</p>
                        
                        <h4 class="text-anime-style-3 mt-5 mb-4">We offer a number of company secretarial services:</h4>
                        <div class="customer-Benefit-content wow fadeInUp" data-wow-delay="0.5s">
                            <ul>
                                <li><b>COMPANY FORMATION:</b> Company formation can be a daunting process with form filling and registration. We can assist you in forming a company, providing a certificate of incorporation, share certificate and company’s memorandum and articles of association.</li>
                                <li><b>PEOPLE WITH SIGNIFICANT CONTROL(PSC) REGISTER:</b> All UK companies are required to maintain a PSC Register. This is to increase transparency in the ownership and control of companies. We can help you set this up so you are meeting your legal obligations.</li>
                                <li><b>COMPANY SEARCHES:</b> In times of economic uncertainty, all businesses need to gather as much information about new customers, and their credit status, as they can. We can undertake company searches on our clients behalf and interpret information filed at Companies House.</li>
                                <li><b>CHANGES IN COMPANY OFFICERS:</b> When a new officer is appointed or terminated, the Registrar of Companies needs to be notified. We can file the necessary forms with Companies house on your behalf.</li>
                                <li><b>RESTRUCTURING OF SHARES CAPITAL:</b> At some point in the future you may need to amend the company’s share capital structure. We can guide you through this process of changing voting and dividend rights and can ensure that the appropriate paperwork is completed and filed.</li>
                                
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