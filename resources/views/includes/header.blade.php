<header class="main-header">
  <div class="header-sticky">
    <nav class="navbar navbar-expand-lg">
      <div class="container">
        <a class="navbar-brand" href="{{ route('view.home.page') }}">
          <img src="{{ asset('images/logo.png') }}" style="height: 30px;" alt="Logo">
        </a>
        <div class="collapse navbar-collapse main-menu">
          <div class="nav-menu-wrapper">
            <ul class="navbar-nav mr-auto" id="menu">
              <li class="nav-item"><a class="nav-link" href="{{ route('view.home.page') }}">Home</a></li>                                
              <li class="nav-item"><a class="nav-link" href="{{ route('view.about.us') }}">About Us</a></li>
              <li class="nav-item submenu"><a class="nav-link" href="#">Services</a>
                <ul>                                        
                  <li class="nav-item"><a class="nav-link" href="{{ route('view.annual.accounts') }}">Annual Accounts</a></li>
                  <li class="nav-item"><a class="nav-link" href="{{ route('view.book.keeping') }}">Bookkeeping</a></li>
                  <li class="nav-item submenu"><a class="nav-link" href="#">Services</a>
                    <ul>                                        
                      <li class="nav-item"><a class="nav-link" href="{{ route('view.annual.accounts') }}">Annual Accounts</a></li>
                      <li class="nav-item"><a class="nav-link" href="{{ route('view.book.keeping') }}">Bookkeeping</a></li>
                      <li class="nav-item"><a class="nav-link" href="team.html">Business Taxation</a></li>
                      <li class="nav-item"><a class="nav-link" href="{{ route('view.business.planning') }}">Business Planning</a></li>
                      <li class="nav-item"><a class="nav-link" href="{{ route('view.cashflow.forecasts') }}">Cashflow Forecasts</a></li>
                      <li class="nav-item"><a class="nav-link" href="{{ route('view.company.secretarial.services') }}">Company Secretarial Services</a></li>
                    </ul>
                  </li>
                  <li class="nav-item"><a class="nav-link" href="{{ route('view.business.planning') }}">Business Planning</a></li>
                  <li class="nav-item"><a class="nav-link" href="{{ route('view.cashflow.forecasts') }}">Cashflow Forecasts</a></li>
                  <li class="nav-item"><a class="nav-link" href="{{ route('view.company.secretarial.services') }}">Company Secretarial Services</a></li>
                </ul>
              </li>
              <li class="nav-item submenu"><a class="nav-link" href="#">Services For Individuals</a>
                <ul>                                        
                  <li class="nav-item"><a class="nav-link" href="{{ route('view.self.assessment') }}">Self Assesment</a></li>
                  <li class="nav-item"><a class="nav-link" href="{{ route('view.personal.tax.planning') }}">Personal Tax Planning</a></li>
                  <li class="nav-item"><a class="nav-link" href="{{ route('view.wealth.management') }}">Wealth Management</a></li>
                </ul>
              </li>
              <li class="nav-item"><a class="nav-link" href="{{ route('view.blogs') }}">Blog</a></li>
              <li class="nav-item"><a class="nav-link" href="{{ route('view.contact.us') }}">Contact Us</a></li>
      
              <li class="nav-item highlighted-menu"><a class="nav-link" href="#">Get A Quote</a></li>                               
            </ul>
          </div>
          <div class="header-btn d-inline-flex">
            <a href="#" class="btn-default">Get A Quote</a>
          </div>
        </div>
        <div class="navbar-toggle"></div>
      </div>
    </nav>
    <div class="responsive-menu"></div>
  </div>
</header>