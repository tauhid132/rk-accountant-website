<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\ContactUsSubmissionController;
use App\Http\Controllers\CustomerReviewController;
use App\Http\Controllers\NewsLetterSubscriptionController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\QuotationController;
use App\Models\Booking;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [PageController::class, 'viewHomePage'])->name('view.home.page');
Route::get('/contact-us', [PageController::class, 'viewContactUs'])->name('view.contact.us');
Route::post('/contact-us/submit-contact-form', [ContactUsSubmissionController::class, 'submitContactUs'])->name('submit.contact.us');
Route::get('/blogs', [PageController::class, 'viewBlogs'])->name('view.blogs');
Route::get('/blog/{slug}', [PageController::class, 'viewSingleBlog'])->name('view.single.blog');
Route::get('/about-us', [PageController::class, 'viewAboutUs'])->name('view.about.us');
Route::get('/book-service', [PageController::class, 'viewBookService'])->name('view.book.service');
Route::post('/book-service', [BookingController::class, 'bookService']);

Route::get('/services/annual-accounts', [PageController::class, 'viewAnnualAccounts'])->name('view.annual.accounts');
Route::get('/services/bookkeeping', [PageController::class, 'viewBookkeeping'])->name('view.book.keeping');
Route::get('/services/business-planning', [PageController::class, 'viewBusinessPlanning'])->name('view.business.planning');
Route::get('/services/cashflow-forecasts', [PageController::class, 'viewCashflowForecasts'])->name('view.cashflow.forecasts');
Route::get('/services/company-secretarial-services', [PageController::class, 'viewCompanySecretarialServices'])->name('view.company.secretarial.services');
Route::get('/individual-services/self-assessment', [PageController::class, 'viewSelfAssessment'])->name('view.self.assessment');
Route::get('/individual-services/personal-tax-planning', [PageController::class, 'viewPersonalTaxPlanning'])->name('view.personal.tax.planning');
Route::get('/individual-services/wealth-management', [PageController::class, 'viewWealthManagement'])->name('view.wealth.management');

Route::get('/services/vat-service', [PageController::class, 'viewVatServices'])->name('view.vat.services');
Route::get('/services/inheritance-tax', [PageController::class, 'viewInheritanceTax'])->name('view.inheritance.tax');
Route::get('/services/capital-gains-tax', [PageController::class, 'viewCapitalGainsTax'])->name('view.capital.gains.tax');
Route::get('/services/corporate-tax-planning', [PageController::class, 'viewCorporateTaxPlanning'])->name('view.corporate.tax.planning');

Route::post('/subscribe-newsletter', [NewsLetterSubscriptionController::class, 'subscribeNewsletter'])->name('subscribe.newsletter');

Route::get('/privacy-policy', [PageController::class, 'viewPrivacyPolicy'])->name('view.privacy.policy');
Route::get('terms-and-conditions', [PageController::class, 'viewTermsConditions'])->name('view.terms.conditions');
Route::get('quotation', [PageController::class, 'viewQuotation'])->name('view.quotation');
Route::post('quotation', [QuotationController::class, 'saveQuotation']);


Route::middleware('auth')->prefix('admin')->group(function () {
    Route::get('/dashboard', [UserController::class, 'viewDashboard'])->name('view.dashboard');

    Route::get('/users/view-users', [UserController::class, 'viewUsers'])->name('viewUsers');
    Route::get('/users/get-users', [UserController::class, 'getUsers'])->name('getUsers');
    Route::post('/users/detete-users',[UserController::class, 'deleteUser'])->name('deleteUser');
    Route::post('/users/disable-enable-user',[UserController::class, 'disableEnableUser'])->name('disableEnableUser');
    Route::post('/users/add-new-admin',[UserController::class, 'addNewAdmin'])->name('addNewAdmin');
    Route::post('/users/change-password',[UserController::class, 'changePassword'])->name('changePassword');
    
    
    //Blogs
    Route::get('blogs/all-blogs',[BlogController::class, 'viewAllBlogs'])->name('viewAllBlogs');
    Route::get('blogs/get-blogs',[BlogController::class, 'getBlogs'])->name('getBlogs');
    Route::get('blogs/create-new',[BlogController::class, 'ViewCreateNewBlog'])->name('createNewBlog');
    Route::post('blogs/create-new',[BlogController::class, 'createNewBlog']);
    Route::get('blogs/edit-blog/{id}',[BlogController::class, 'viewEditBlog'])->name('editBlog');
    Route::post('blogs/edit-blog/{id}',[BlogController::class, 'editBlog']);
    Route::post('blogs/delete-blog',[BlogController::class, 'deleteBlog'])->name('deleteBlog');

    Route::get('bookings/view-bookings',[BookingController::class, 'viewBookings'])->name('view.bookings');
    Route::get('bookings/get-bookings',[BookingController::class, 'getBookings'])->name('get.bookings');
    Route::get('contact-forms/view-submits',[ContactUsSubmissionController::class, 'viewSubmits'])->name('view.contact.submits');
    Route::get('contact-forms/get-sybmits',[ContactUsSubmissionController::class, 'getSubmits'])->name('get.contact.submits');
    Route::get('newsletter/view-submits',[NewsLetterSubscriptionController::class, 'viewSubmits'])->name('view.newsletter.submits');
    Route::get('newsletter/get-submits',[NewsLetterSubscriptionController::class, 'getSubmits'])->name('get.newsletter.submits');

    Route::get('customer-reviews/view-reviews',[CustomerReviewController::class, 'viewReviews'])->name('view.customer.reviews');
    Route::get('customer-reviews/get-reviews',[CustomerReviewController::class, 'getReviews'])->name('get.customer.reviews');
    Route::post('customer-reviews/add-new-review',[CustomerReviewController::class, 'addReview'])->name('add.review');
    Route::post('customer-reviews/fetch-review',[CustomerReviewController::class, 'fetchReview'])->name('fetch.review');

    Route::get('generate-sitemap',[PageController::class, 'generateSitemap'])->name('generate.sitemap');

    Route::get('projects/all-projects',[PortfolioController::class, 'viewProjects'])->name('viewProjects');
    Route::get('projects/all-projects/get-projects',[PortfolioController::class, 'getProjects'])->name('getProjects');
    Route::get('projects/create-new-project',[PortfolioController::class, 'viewCreateNewProject'])->name('viewCreateNewProject');
    Route::post('projects/create-new-project',[PortfolioController::class, 'createNewProject']);
    Route::get('projects/edit-project/{id}',[PortfolioController::class, 'viewEditProject'])->name('viewEditProject');
    Route::post('projects/edit-project/{id}',[PortfolioController::class, 'editProject']);
    Route::post('projects/delete-project',[PortfolioController::class, 'deleteProject'])->name('deleteProject');

    Route::middleware('auth')->prefix('profile')->group(function () {
        Route::get('/my-profile', [ProfileController::class, 'viewMyProfile'])->name('viewMyProfile');
        Route::post('/my-profile', [ProfileController::class, 'changeProfileInfo']);
        Route::get('/change-password', [ProfileController::class, 'viewChangePassword'])->name('viewChangePassword');
        Route::post('/change-password', [ProfileController::class, 'changePassword']);
        Route::post('/change-profile-image', [ProfileController::class, 'changeProfileImage'])->name('changeProfileImage');
    
    });
});


require __DIR__.'/auth.php';
