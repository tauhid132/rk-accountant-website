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
              <li class="nav-item"><a class="nav-link {{ Request::is('/') ? 'active':''  }}" href="{{ route('view.home.page') }}">Home</a></li>                                
              <li class="nav-item"><a class="nav-link {{ Request::is('about-us') ? 'active':''  }}" href="{{ route('view.about.us') }}">About Us</a></li>
              
              <li class="nav-item submenu"><a class="nav-link {{ Request::is('services/*') ? 'active':''  }}" href="#">Services</a>
                <ul>                                        
                  <li class="nav-item"><a class="nav-link {{ Request::is('services/annual-accounts*') ? 'active':''  }}" href="{{ route('view.annual.accounts') }}">Annual Accounts</a></li>
                  <li class="nav-item"><a class="nav-link {{ Request::is('services/bookkeeping*') ? 'active':''  }}" href="{{ route('view.book.keeping') }}">Bookkeeping</a></li>
                  <li class="nav-item"><a class="nav-link {{ Request::is('services/business-planning*') ? 'active':''  }}" href="{{ route('view.business.planning') }}">Business Planning</a></li>
                  <li class="nav-item"><a class="nav-link {{ Request::is('services/vat-service*') ? 'active':''  }}" href="{{ route('view.vat.services') }}">VAT Service</a></li>
                  <li class="nav-item"><a class="nav-link {{ Request::is('services/inheritance-tax*') ? 'active':''  }}" href="{{ route('view.inheritance.tax') }}">Inheritance Tax</a></li>
                  <li class="nav-item"><a class="nav-link {{ Request::is('services/capital-gains-tax*') ? 'active':''  }}" href="{{ route('view.capital.gains.tax') }}">Capital Gains Tax</a></li>
                  <li class="nav-item"><a class="nav-link {{ Request::is('services/corporate-tax-planning*') ? 'active':''  }}" href="{{ route('view.corporate.tax.planning') }}">Corporate Tax Planning</a></li>
                  <li class="nav-item"><a class="nav-link {{ Request::is('services/cashflow-forecasts*') ? 'active':''  }}" href="{{ route('view.cashflow.forecasts') }}">Cashflow Forecasts</a></li>
                  <li class="nav-item"><a class="nav-link {{ Request::is('services/company-secretarial-services*') ? 'active':''  }}" href="{{ route('view.company.secretarial.services') }}">Company Secretarial Services</a></li>
                </ul>
              </li>
              <li class="nav-item submenu"><a class="nav-link {{ Request::is('individual-services/*') ? 'active':''  }}" href="#">Services For Individuals</a>
                <ul>                                        
                  <li class="nav-item"><a class="nav-link {{ Request::is('individual-services/self-assessment*') ? 'active':''  }}" href="{{ route('view.self.assessment') }}">Self Assesment</a></li>
                  <li class="nav-item"><a class="nav-link {{ Request::is('individual-services/personal-tax-planning*') ? 'active':''  }}" href="{{ route('view.personal.tax.planning') }}">Personal Tax Planning</a></li>
                  <li class="nav-item"><a class="nav-link {{ Request::is('individual-services/wealth-management*') ? 'active':''  }}" href="{{ route('view.wealth.management') }}">Wealth Management</a></li>
                </ul>
              </li>
              <li class="nav-item"><a class="nav-link {{ Request::is('blogs') ? 'active':''  }}" href="{{ route('view.blogs') }}">Blogs</a></li>
              <li class="nav-item"><a class="nav-link {{ Request::is('contact-us') ? 'active':''  }}" href="{{ route('view.contact.us') }}">Contact Us</a></li>
      
              <li class="nav-item highlighted-menu"><a class="nav-link" href="{{ route('view.quotation') }}">Get A Quote</a></li>                               
            </ul>
          </div>
          <div class="header-btn d-inline-flex">
            <a href="{{ route('view.quotation') }}" class="btn-default">Get A Quote</a>
          </div>
        </div>
        <div class="navbar-toggle"></div>
      </div>
    </nav>
    <div class="responsive-menu"></div>
  </div>
</header>