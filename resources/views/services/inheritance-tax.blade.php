@extends('master')
@section('page-title', "RK Accountants")
@section('main-body')
 <div class="page-header light-bg-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="page-header-box">
                    <h1 class="text-anime-style-3">Inheritance Tax</h1>
                    <nav class="wow fadeInUp" data-wow-delay="0.25s">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">home</a></li>
                            <li class="breadcrumb-item"><a href="#">services</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Inheritance Tax</li>
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
                        <h2 class="text-anime-style-3">Get Started with our Inheritance Tax Service</h2>
                        <p class="wow fadeInUp">Our estate and inheritance tax planning specialists work with you to identify ways to minimise your inheritance tax liabilities. We’ll look at tax minimisation opportunities, including trusts, and help you make best use of the gifts and exemptions allowed under IHT rules, including lifetime gifts, annual gifts, gifts to charities and agricultural and business property relief. We will look at your estate from all angles so that, for example, a gift that saves inheritance tax does not create a higher alternative tax liability.</p>
                        <h4 class="text-anime-style-3 mt-5 mb-4">We Provide</h4>
                        <div class="customer-Benefit-content wow fadeInUp" data-wow-delay="0.5s">
                            <ul>
                                <li><b>Tax Planning Consultation:</b> Comprehensive guidance to reduce inheritance tax liability through effective planning strategies.</li>
                                <li><b>Estate Valuation:</b> Accurate assessment of the value of the estate, including property, investments, and personal assets.</li>
                                <li><b>Gift Strategies:</b> Advice on lifetime gifts to reduce inheritance tax and maximize exemptions.</li>
                                <li><b>Use of Trusts:</b> Implementing and managing trusts to protect assets and reduce the tax burden.</li>
                                <li><b>Business Relief and Agricultural Relief:</b> Assisting in claims for relief on qualifying business or agricultural assets.</li>
                                <li><b>Nil Rate Band and Residence Nil Rate Band:</b> Advice on utilizing the maximum tax-free allowance for inheritance.</li>
                                <li><b>Charitable Giving:</b> Guidance on how charitable donations can lower inheritance tax rates.</li>
                                <li><b>Wealth Preservation:</b> Long-term strategies to preserve family wealth for future generations.</li>
                                <li><b>Succession Planning:</b> Tailored advice on passing wealth efficiently and legally to beneficiaries.</li>
                                <li><b>HMRC Liaison:</b> Handling communication and submission of paperwork with HM Revenue & Customs (HMRC) on your behalf.</li>
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