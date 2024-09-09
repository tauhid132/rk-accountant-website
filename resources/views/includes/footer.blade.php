 
 <footer class="main-footer">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="footer-about">
          <div class="row">
            <div class="col-lg-12">
              <div class="footer-title">
                <h2>Trusted by businesses and individuals across the country</h2>
                
              </div>
            </div>
          </div>
        </div>
        
        <div class="footer-body">
          <div class="row">
            <div class="col-lg-3">
              <div class="subscribe-newsletter">
                <div class="newsletter-title">
                  <h3>newsletter signup</h3>
                </div>
                <div class="newsletters-form">
                 <form class="mail-box" method="post" action="{{ route('subscribe.newsletter') }}">
                    <input type="email" class="form-control" placeholder="Enter Your Email" required>
                  </form>
                  <div class="subscribe-btn">
                    <a href="#" class="btn-default">subscribe now</a>
                  </div>
                </div>
                
              </div>
              
            </div>
            
            <div class="col-lg-9">
              <div class="row">
                <div class="col-md-3 col-6">
                  <div class="footer-links">
                    <h2 class="text-default">Quick Links</h2>
                    <ul>
                      <li><a href="{{ route('view.home.page') }}">Home</a></li>
                      <li><a href="{{ route('view.about.us') }}">About Us</a></li>
                      <li><a href="{{ route('view.blogs') }}">Blogs</a></li>
                      <li><a href="{{ route('view.contact.us') }}">Contact Us</a></li>
                      <li><a href="{{ route('view.quotation') }}">Get A Quote</a></li>
                    </ul>
                  </div>
                </div>
                <div class="col-md-3 col-6">
                  <div class="footer-links">
                    <h2>Our Services</h2>
                    <ul>
                      <li><a href="{{ route('view.annual.accounts') }}">Annual Accounts</a></li>
                      <li><a href="{{ route('view.book.keeping') }}">Bookkeeping</a></li>
                      <li><a href="{{ route('view.vat.services') }}">VAT Service</a></li>
                      <li><a href="{{ route('view.inheritance.tax') }}">Inheritance TAX</a></li>
                      <li><a href="{{ route('view.capital.gains.tax') }}">Capital Gains TAX</a></li>
                    </ul>
                  </div>
                </div>
                
                <div class="col-md-3 col-6 mt-4">
                  <div class="footer-links">
                    <h2></h2>
                    <ul>
                      <li><a href="{{ route('view.corporate.tax.planning') }}">Corporate TAX Planning</a></li>
                      <li><a href="{{ route('view.business.planning') }}">Business Planning</a></li>
                      <li><a href="{{ route('view.company.secretarial.services') }}">Company Secretarial Services</a></li>
                      <li><a href="{{ route('view.self.assessment') }}">Self Assessment</a></li>
                      <li><a href="{{ route('view.personal.tax.planning') }}">Personal Tax Planning</a></li>
                    </ul>
                  </div>
                </div>
                
                <div class="col-md-3">
                  <div class="footer-contact">
                    <h2>Contact</h2>
                    <ul>
                      <li><a href="#">info@rkaccountants.com</a></li>
                      <li><a href="#"> (+020) 7375 2010</a></li>
                    </ul>
                    <div class="mt-4 footer-social-media wow fadeInUp" style="text-align: left !important" data-wow-delay="0.5s">
                      <ul>
                        <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                        <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                        <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>											
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <center><p class="text-white mt-1">Registered with Companies House for England and Wales under company registration number 07272939</p></center>
        <div class="footer-copyright">
          <div class="row align-items-center">
            <div class="col-lg-12">
              <div class="d-flex justify-content-between">
                <div class="footer-copyright-text ">
                  <p>copyright © {{ date('Y') }} <a class="footer-website-url" href="https://www.rkaccountants.com/">RK Accountants</a> | All Rights Reserved.</p>
                </div>
                <div class="footer-copyright-text privacy-policy">
                  <a class="m-1" href="{{ route('view.privacy.policy') }}">Privacy Policy</a> <span> | </span>
                  <a class="m-1" href="{{ route('view.terms.conditions') }}">Terms & Conditions</a>
                </div>
              </div>
              
            </div>
          </div>						
        </div>
      </div>
    </div>
  </div>
</footer>