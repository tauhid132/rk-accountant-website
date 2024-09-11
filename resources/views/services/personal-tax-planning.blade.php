@extends('master')
@section('page-title', "RK Accountants")
@section('main-body')
 <div class="page-header light-bg-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="page-header-box">
                    <h1 class="text-anime-style-3">Personal Tax Planning</h1>
                    <nav class="wow fadeInUp" data-wow-delay="0.25s">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">home</a></li>
                            <li class="breadcrumb-item"><a href="#">services</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Personal Tax Planning</li>
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
                        <h2 class="text-anime-style-3">Get Started with our Perosnal Tax Planning Service</h2>
                        <p class="wow fadeInUp">Our services are not restricted to businesses and we have a large core of personal tax clients. Whether you need assistance with your self assessment tax returns or advice on inheritance tax planning, we can help you.</p>
                        
                        <h4 class="text-anime-style-3 mt-5 mb-4">Our dedicated team can provide the following services:</h4>
                        <div class="customer-Benefit-content wow fadeInUp" data-wow-delay="0.5s">
                            <ul>
                                <li>Advice on minimising tax liability for all personal taxes including.</li>
                                <li>Income tax</li>
                                <li>Capital gains tax (CGT).</li>
                                <li>Inheritance tax (IHT).</li>
                                <li>Non-domiciliary taxes.</li>
                                <li>Completion and filing of relevant returns.</li>
                                <li>Advice on what payments are due and when.</li>
                                <li>Advice on trusts and estates.</li>
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