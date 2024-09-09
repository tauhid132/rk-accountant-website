<div class="service-sidebar">
    <div class="service-catagery-list wow fadeInUp">
        <h3>our services</h3>
        <ul>
            <li><a class="{{ Request::is('services/annual-accounts') ? 'active':''  }}"  href="{{ route('view.annual.accounts') }}">Annual Accounts</a></li>
            <li><a class="{{ Request::is('services/bookkeeping') ? 'active':''  }}" href="{{ route('view.book.keeping') }}">Book keeping</a></li>
            <li><a href="#">Business Taxation</a></li>
            <ul style="margin-left: 30px" class="mb-4">
                <li><a class="{{ Request::is('services/vat-service') ? 'active':''  }}"  href="{{ route('view.vat.services') }}">Vat Service</a></li>
                <li><a class="{{ Request::is('services/inheritance-tax') ? 'active':''  }}"  href="{{ route('view.inheritance.tax') }}">Inheritance Tax</a></li>
                <li><a class="{{ Request::is('services/capital-gains-tax') ? 'active':''  }}"  href="{{ route('view.capital.gains.tax') }}">Capital Gains Tax</a></li>
                <li><a class="{{ Request::is('services/corporate-tax-planning') ? 'active':''  }}"  href="{{ route('view.corporate.tax.planning') }}">Corporate Tax Planning</a></li>
            </ul>
            <li><a class="{{ Request::is('services/business-planning') ? 'active':''  }}" href="{{ route('view.business.planning') }}">Business Planning</a></li>
            <li><a class="{{ Request::is('services/cashflow-forecasts') ? 'active':''  }}" href="{{ route('view.cashflow.forecasts') }}">Cashflow Forecasts</a></li>
            <li><a class="{{ Request::is('services/company-secretarial-services') ? 'active':''  }}" href="{{ route('view.company.secretarial.services') }}">Company Secretarial Services</a></li>
        </ul>
    </div>
</div>