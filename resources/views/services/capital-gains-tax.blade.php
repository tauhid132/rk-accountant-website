@extends('master')
@section('page-title', "RK Accountants")
@section('main-body')
 <div class="page-header light-bg-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="page-header-box">
                    <h1 class="text-anime-style-3">Capital Gains Tax</h1>
                    <nav class="wow fadeInUp" data-wow-delay="0.25s">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">home</a></li>
                            <li class="breadcrumb-item"><a href="#">services</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Capital Gains Tax</li>
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
                        <h2 class="text-anime-style-3">Get Started with our Capital Gains Tax Service</h2>
                        <p class="wow fadeInUp">Careful planning of capital asset disposals is essential in order to minimise capital gains tax. We have wide ranging experience in dealing with all aspects of capital taxes and provide accountancy services to assist our clients with calculating potential capital gains tax. We ensure that available reliefs such as entrepreneurs relief, principal private residence relief and lettings relief are maximised together with exemptions such as the annual exemption, spouse exemption or gifts to charity. In addition to this we also offer a specialist service for UK property owned by non-residents.</p>
                        <h4 class="text-anime-style-3 mt-5 mb-4">We Provide</h4>
                        <div class="customer-Benefit-content wow fadeInUp" data-wow-delay="0.5s">
                            <ul>
                                <li><b>Tax Liability Assessment:</b> Expert evaluation of your capital gains tax liability, including personal and business assets.</li>
                                <li><b>Asset Disposal Advice:</b> Strategic guidance on the sale or transfer of assets to minimize tax exposure.</li>
                                <li><b>Annual Exemption Planning:</b> Advice on utilizing the annual capital gains tax exemption to reduce overall tax liability.</li>
                                <li><b>Property and Real Estate Gains:</b> Specialized assistance in handling capital gains tax on property sales, including private residences and investment properties.</li>
                                <li><b>Foreign Asset Taxation:</b> Assistance with managing capital gains tax on overseas assets and ensuring compliance with international tax laws.</li>
                                <li><b>Shares and Securities:</b> Tailored advice on capital gains tax related to investments in shares, bonds, and other securities.</li>
                                <li><b>Reliefs and Exemptions:</b> Expert guidance on available reliefs such as Entrepreneurs' Relief, Rollover Relief, and Investors' Relief.</li>
                                <li><b>Inheritance and Capital Gains:</b> Integrated services for managing the interaction between inheritance tax and capital gains tax.</li>
                                <li><b>Tax Deferral Strategies:</b> Advice on deferring tax liabilities using investments or other financial vehicles.</li>
                                <li><b>Wealth Preservation:</b> Long-term strategies to protect wealth from excessive capital gains taxation, ensuring maximum retention of profits.</li>
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