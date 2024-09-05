@extends('master')
@section('page-title', "Contact Us")
@section('main-body')
<div class="page-header light-bg-section">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="page-header-box">
          <h1 class="text-anime-style-3">Contact us</h1>
          <nav class="wow fadeInUp" data-wow-delay="0.25s">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="#">home</a></li>
              <li class="breadcrumb-item active" aria-current="page">contact us</li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="location-map">
  <div class="container">
    <div class="row section-row align-items-center">
      <div class="col-lg-6">
        <div class="section-title">
          <h3 class="wow fadeInUp">location</h3>
          <h2 class="text-anime-style-3">How to reach our location</h2>
        </div>
      </div>
      
      <div class="col-lg-6">
        <div class="section-title-content wow fadeInUp" data-wow-delay="0.25s">
          <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate.</p>
        </div>
      </div>
    </div>
    
    <div class="row">
      <div class="col-lg-12">
        <div class="google-map">
          <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d56481.31329163797!2d-82.30112043759952!3d27.776444959332093!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sUnited%20States%20solar!5e0!3m2!1sen!2sin!4v1706008331370!5m2!1sen!2sin" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
      </div>
    </div>
  </div>
</div>


<div class="contact-us light-bg-section mb-5">
  <div class="container">
    <div class="row section-row align-items-center">
      <div class="col-lg-5">
        <div class="section-title">
          <h3 class="wow fadeInUp">get in touch</h3>
          <h2 class="text-anime-style-3">Needs help? let's get in touch</h2>
        </div>
        <div class="contact-us-details wow fadeInUp mt-4" data-wow-delay="0.5s">
          <ul>
              <li><i class="fa fa-phone me-2"></i>(+0) 020 7375 2010</li>
              <li><i class="fa fa-envelope me-2"></i>info@rkaccountants.com</li>
              <li><i class="fa fa-map-marker me-2"></i> 85 Myrdle St, Whitechapel, London E1 1HL</li>
          </ul>
      </div>
      
      </div>
      <div class="col-lg-7">
        
        <div class="contact-form mt-4 wow fadeInUp" data-wow-delay="0.25s">
          <form id="contactForm" action="#" method="POST" data-toggle="validator">
            <div class="row">
              <div class="form-group col-md-6 mb-4">
                <input type="text" name="fname" class="form-control" id="fname" placeholder="first name" required="">
                <div class="help-block with-errors"></div>
              </div>
              
              <div class="form-group col-md-6 mb-4">
                <input type="text" name="lname" class="form-control" id="lname" placeholder="last name" required="">
                <div class="help-block with-errors"></div>
              </div>
              
              <div class="form-group col-md-6 mb-4">
                <input type="email" name="email" class="form-control" id="email" placeholder="email" required="">
                <div class="help-block with-errors"></div>
              </div>
              
              <div class="form-group col-md-6 mb-4">
                <input type="text" name="phone" class="form-control" id="phone" placeholder="Phone" required="">
                <div class="help-block with-errors"></div>
              </div>
              
              <div class="form-group col-md-12 mb-4">
                <textarea name="msg" class="form-control" id="msg" rows="7" placeholder="write a message" required=""></textarea>
                <div class="help-block with-errors"></div>
              </div>
              
              <div class="col-md-12">
                <button type="submit" class="btn-default">submit now</button>
                <div id="msgSubmit" class="h3 hidden"></div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
    
    
  </div>
</div>


@endsection