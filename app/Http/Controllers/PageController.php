<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Portfolio;
use Illuminate\Http\Request;
use App\Models\CustomerReview;
use Spatie\Sitemap\SitemapGenerator;

class PageController extends Controller
{
    public function viewHomePage(){
        return view('home',[
            'blogs' => Blog::latest()->take(3)->get(),
            'reviews' => CustomerReview::all()
        ]);
    }
    public function viewContactUs(){
        return view('contact-us');
    }
    public function viewBlogs(){
        return view('blogs',[
            'blogs' => Blog::paginate(3)
        ]);
    }
    public function viewSingleBlog($slug){
        return view('single-blog',[
            'blog' => Blog::where('slug', $slug)->first()
        ]);
    }
    public function viewAboutUs(){
        return view('about-us');
    }
    public function viewBookService(){
        return view('book-service');
    }

    public function viewAnnualAccounts(){
        return view('services.annual-services');
    }
    public function viewBookkeeping(){
        return view('services.bookkeeping');
    }
    public function viewBusinessPlanning(){
        return view('services.business-planning');
    }
    public function viewCashflowForecasts(){
        return view('services.cashflow-forecasts');
    }
    public function viewCompanySecretarialServices(){
        return view('services.company-secretarial-services');
    }
    public function viewSelfAssessment(){
        return view('services.self-assessment');
    }

    public function viewPersonalTaxPlanning(){
        return view('services.personal-tax-planning');
    }
    public function viewWealthManagement(){
        return view('services.wealth-management');
    }
    public function viewVatServices(){
        return view('services.vat-services');
    }
    public function viewInheritanceTax(){
        return view('services.inheritance-tax');
    }
    public function viewCapitalGainsTax(){
        return view('services.capital-gains-tax');
    }
    public function viewCorporateTaxPlanning(){
        return view('services.corporate-tax-planning');
    }
    public function viewPrivacyPolicy(){
        return view('privacy-policy');
    }
    public function viewTermsConditions(){
        return view('terms-conditions');
    }
    public function viewQuotation(){
        return view('get-quote');
    }
  
    public function viewPortfolios(){
        return view('portfolios',[
            'portfolios' => Portfolio::all()
        ]);
    }
    public function viewSingleProject($id){
        return view('single-project',[
            'project' => Portfolio::find($id)
        ]);
    }

    public function generateSitemap(){
        $path = public_path('sitemap.xml');
        SitemapGenerator::create('https://pestcontrol-dubai.ae')->writeToFile($path);
    }
}
