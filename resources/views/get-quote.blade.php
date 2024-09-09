@extends('master')
@section('page-title', "Request A Quotation | RK Accountants")
@section('main-body')
<div class="page-header light-bg-section">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="page-header-box">
          <h1 class="text-anime-style-3">Request A Quotation</h1>
          <nav class="wow fadeInUp" data-wow-delay="0.25s">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="#">home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Request A Quotation</li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="contact-us light-bg-section mt-5 mb-5">
  <div class="container">
    <div class="row section-row">
      <div class="col-lg-12">
        <div class="section-title mb-4">
          <h3 class="wow fadeInUp">Interested in our service?</h3>
          <h2 class="text-anime-style-3">Request a Quotation</h2>
          <hr>
        </div>
        
        @foreach ($errors->all() as $error)
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong> {{ $error }}</strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endforeach
        @if(session()->has('error'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong> {{ session()->get('error') }}</strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif
        @if(session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>  {{ session()->get('success') }}</strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif
      </div>
      <div class="col-lg-6">
        <form method="post" action="{{ route('view.quotation') }}">
          @csrf
          <div class="mt-4 wow fadeInUp" data-wow-delay="0.25s">
            <div class="row g-3">
              <div class="col-md-12">
                <label class="form-label"><b>Choose Service</b><span class="text-danger">*</span></label>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-check radio-bg-light">
                      <input class="form-check-input" type="checkbox" name="services[]" value="Annual Accounts Preparation" required>
                      <label class="form-check-label" for="flexRadioDefault1">
                        Annual Accounts Preparation
                      </label>
                    </div>
                    <div class="form-check radio-bg-light">
                      <input class="form-check-input" type="checkbox" name="services[]" value="Business Tax">
                      <label class="form-check-label" for="flexRadioDefault2">
                        Business Tax
                      </label>
                    </div>
                    <div class="form-check radio-bg-light">
                      <input class="form-check-input" type="checkbox" name="services[]" value="Leagal Advice">
                      <label class="form-check-label" for="flexRadioDefault3">
                        Legal Advice
                      </label>
                    </div>
                    <div class="form-check radio-bg-light">
                      <input class="form-check-input" type="checkbox" name="services[]" value="Self Assessment Tax Returns">
                      <label class="form-check-label" for="flexRadioDefault3">
                        Self Assessment Tax Returns
                      </label>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-check radio-bg-light">
                      <input class="form-check-input" type="checkbox" name="services[]" value="Payroll">
                      <label class="form-check-label" for="flexRadioDefault1">
                        Payroll
                      </label>
                    </div>
                    <div class="form-check radio-bg-light">
                      <input class="form-check-input" type="checkbox" name="services[]" value="Bookkeping">
                      <label class="form-check-label" for="flexRadioDefault2">
                        Bookkeeping
                      </label>
                    </div>
                    <div class="form-check radio-bg-light">
                      <input class="form-check-input" type="checkbox" name="services[]" value="Vat Returns">
                      <label class="form-check-label" for="flexRadioDefault3">
                        VAT Returns
                      </label>
                    </div>
                    
                  </div>
                  
                  
                </div>
              </div>
              <div class="col-md-12">
                <label class="form-label"><b>Legal status of your business?</b><span class="text-danger">*</span></label>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-check radio-bg-light">
                      <input class="form-check-input" type="radio" name="legal_status" value="Sole Trader" required>
                      <label class="form-check-label" for="flexRadioDefault1">
                        Sole Trader
                      </label>
                    </div>
                    <div class="form-check radio-bg-light">
                      <input class="form-check-input" type="radio" name="legal_status" value="Partnership">
                      <label class="form-check-label" for="flexRadioDefault2">
                        Partnership
                      </label>
                    </div>
                    
                  </div>
                  <div class="col-md-6">
                    <div class="form-check radio-bg-light">
                      <input class="form-check-input" type="radio" name="legal_status" value="Limited Liability Partnership">
                      <label class="form-check-label" for="flexRadioDefault3">
                        Limited Liability Partnership
                      </label>
                    </div>
                    <div class="form-check radio-bg-light">
                      <input class="form-check-input" type="radio" name="legal_status" value="Limited Company">
                      <label class="form-check-label" for="flexRadioDefault3">
                        Limited Company
                      </label>
                    </div>
                  </div>
                </div>
              </div>
              
              <div class="col-md-12">
                <label class="form-label"><b>Number of monthly transactions (in and out)?</b><span class="text-danger">*</span></label>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-check radio-bg-light">
                      <input class="form-check-input" type="radio" name="monthly_transections" value="1-25" required>
                      <label class="form-check-label" for="flexRadioDefault1">
                        1 - 25
                      </label>
                    </div>
                    <div class="form-check radio-bg-light">
                      <input class="form-check-input" type="radio" name="monthly_transections" value="26-50">
                      <label class="form-check-label" for="flexRadioDefault2">
                        26 - 50
                      </label>
                    </div>
                    <div class="form-check radio-bg-light">
                      <input class="form-check-input" type="radio" name="monthly_transections" value="51-100">
                      <label class="form-check-label" for="flexRadioDefault2">
                        51 - 100
                      </label>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-check radio-bg-light">
                      <input class="form-check-input" type="radio" name="monthly_transections" value="100-200">
                      <label class="form-check-label" for="flexRadioDefault3">
                        100 - 200
                      </label>
                    </div>
                    <div class="form-check radio-bg-light">
                      <input class="form-check-input" type="radio" name="monthly_transections" value="Over 201">
                      <label class="form-check-label" for="flexRadioDefault3">
                        Over 201
                      </label>
                    </div>
                  </div>
                </div>
              </div>
              
              <div class="col-md-12">
                <label class="form-label"><b>What best describes your accounting records?</b><span class="text-danger">*</span></label>
                <select class="form-select js-choice" name="record_type" required>
                  <option selected="" value="{{ null }}">Select One</option> 
                  <option value="Sage">Sage</option> 
                  <option value="Quickbooks">Quickbooks</option> 
                  <option value="VT">VT</option> 
                  <option value="Other computerised">Other computerised</option> 
                  <option value="Cash Book Pro">Cash Book Pro</option> 
                  <option value="Own spreadsheet template">Own spreadsheet template</option> 
                  <option value="We intend to use online package">We intend to use online package</option> 
                  <option value="Manual">Manual</option> 
                  <option value="No bookkeeping - Bag of records">No bookkeeping - Bag of records</option> 
                  <option value="No bookkeeping - Organised records">No bookkeeping - Organised records</option>
                </select>
              </div>
              
              <div class="col-md-12">
                <label class="form-label"><b>Title</b><span class="text-danger">*</span></label>
                <select class="form-select js-choice" name="title">
                  <option selected="" value="{{ null }}">Select Title</option> 
                  <option value="Mr">Mr</option> 
                  <option value="Mrs">Mrs</option> 
                  <option value="Ms">Ms</option> 
                  <option value="Dr">Dr</option> 
                </select>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="contact-formd mt-4 wow fadeInUp" data-wow-delay="0.25s">
            <div class="row g-3">
              
              <div class="col-md-6">
                <label class="form-label"><b>Full Name</b><span class="text-danger">*</span></label>
                <input type="text" class="form-control" name="full_name" placeholder="Enter your full name" required>
              </div>
              
              <div class="col-md-6">
                <label class="form-label"><b>Company Name</b><span class="text-danger">*</span></label>
                <input type="text" class="form-control" name="company_name" placeholder="Enter your company name" required>
              </div>
              
              <div class="col-md-6">
                <label class="form-label"><b>Email Address</b><span class="text-danger">*</span></label>
                <input type="email" class="form-control" name="email_address" placeholder="Enter your email address" required>
              </div>
              <div class="col-md-6">
                <label class="form-label"><b>Phone</b></label>
                <input type="text" class="form-control" name="mobile_number" placeholder="Enter your phone number">
              </div>
              <div class="col-12">
                <label class="form-label"><b>Location</b></label>
                <textarea class="form-control" rows="3" name="location" spellcheck="false"></textarea>
              </div>
              <div class="col-md-12">
                <label class="form-label"><b>Approximate turnover</b></label>
                <input type="text" class="form-control" name="approximate_turnover" placeholder="Enter Approximate turnover">
              </div>
              <div class="col-md-12">
                <label class="form-label"><b>How many directors?</b></label>
                <input type="text" class="form-control" name="number_of_directors"  placeholder="Enter number of directors">
              </div>
              <div class="col-md-12">
                <label class="form-label"><b>How many employees?</b></label>
                <input type="text" class="form-control" name="number_of_employees" placeholder="Enter number of employees">
              </div>
              
              <div class="col-12 text-end">
                <button type="submit" class="btn-default">submit now</button>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
    
    
  </div>
</div>


@endsection