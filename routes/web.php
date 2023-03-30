<?php

use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OurWorkController;
use App\Models\AboutUsCertificates;
use App\Models\AboutUsContentData;
use App\Models\ContactUsOurOffice;
use App\Models\OurWorkContent;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

// Home Page Routes
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/home_header_image', [HomeController::class, 'homeHeaderImage'])->name('home_header_image');
Route::post('/save_home_header_image/{id}', [HomeController::class, 'saveHomeHeaderImage'])->name('save_home_header_image');
Route::get('/hero_section', [HomeController::class, 'heroSection'])->name('hero_section');
Route::post('/save_hero_section/{id}', [HomeController::class, 'saveHeroSection'])->name('save_hero_section');
Route::post('/save_our_vision/{id}', [HomeController::class, 'saveOurVision'])->name('save_our_vision');
Route::post('/save_our_mission/{id}', [HomeController::class, 'saveOurMission'])->name('save_our_mission');
Route::post('/save_our_morals/{id}', [HomeController::class, 'saveOurMorals'])->name('save_our_morals');
Route::get('/home_about_us', [HomeController::class, 'homeAboutUs'])->name('home_about_us');
Route::post('/save_home_about_us/{id}', [HomeController::class, 'saveHomeAboutUs'])->name('save_home_about_us');
Route::get('/home_trading', [HomeController::class, 'homeTrading'])->name('home_trading');
Route::post('/save_home_trading/{id}', [HomeController::class, 'saveHomeTrading'])->name('save_home_trading');
Route::post('/save_home_data_trading', [HomeController::class, 'saveHomeDataTrading'])->name('save_home_data_trading');
Route::get('/edit_home_data_trading/{id}', [HomeController::class, 'editHomeDataTrading'])->name('edit_home_data_trading');
Route::post('/update_home_data_trading/{id}', [HomeController::class, 'updateHomeDataTrading'])->name('update_home_data_trading');
Route::get('/delete_home_data_trading/{id}', [HomeController::class, 'deleteHomeDataTrading'])->name('delete_home_data_trading');
Route::get('/home_engineering', [HomeController::class, 'homeEngineering'])->name('home_engineering');
Route::post('/save_home_engineering/{id}', [HomeController::class, 'saveHomeEngineering'])->name('save_home_engineering');
Route::post('/save_home_data_engineering', [HomeController::class, 'saveHomeDataEngineering'])->name('save_home_data_engineering');
Route::get('/edit_home_data_engineering/{id}', [HomeController::class, 'editHomeDataEngineering'])->name('edit_home_data_engineering');
Route::post('/update_home_data_engineering/{id}', [HomeController::class, 'updateHomeDataEngineering'])->name('update_home_data_engineering');
Route::get('/delete_home_data_engineering/{id}', [HomeController::class, 'deleteHomeDataEngineering'])->name('delete_home_data_engineering');
Route::get('/home_logistic_services', [HomeController::class, 'homeLogisticServices'])->name('home_logistic_services');
Route::post('/save_home_logistic_services/{id}', [HomeController::class, 'saveHomeLogisticServices'])->name('save_home_logistic_services');
Route::post('/save_home_data_logistic_services', [HomeController::class, 'saveHomeDataLogisticServices'])->name('save_home_data_logistic_services');
Route::get('/edit_home_data_logistic_services/{id}', [HomeController::class, 'editHomeDataLogisticServices'])->name('edit_home_data_logistic_services');
Route::post('/update_home_data_logistic_services/{id}', [HomeController::class, 'updateHomeDataLogisticServices'])->name('update_home_data_logistic_services');
Route::get('/delete_home_data_logistic_services/{id}', [HomeController::class, 'deleteHomeDataLogisticServices'])->name('delete_home_data_logistic_services');
Route::get('/home_our_partner', [HomeController::class, 'homeOurPartner'])->name('home_our_partner');
Route::post('/save_home_our_partner', [HomeController::class, 'saveHomeOurPartner'])->name('save_home_our_partner');
Route::get('/edit_home_our_partner/{id}', [HomeController::class, 'editHomeOurPartner'])->name('edit_home_our_partner');
Route::post('/update_home_our_partner/{id}', [HomeController::class, 'updateHomeOurPartner'])->name('update_home_our_partner');
Route::get('/delete_home_our_partner/{id}', [HomeController::class, 'deleteHomeOurPartner'])->name('delete_home_our_partner');
// end Home Page Routes

// About US Routes
Route::get('/about_header_image', [AboutUsController::class, 'aboutHeaderImage'])->name('about_header_image');
Route::post('/save_about_header_image/{id}', [AboutUsController::class, 'saveAboutHeaderImage'])->name('save_about_header_image');
Route::get('/about_us_content', [AboutUsController::class, 'aboutUsContent'])->name('about_us_content');
Route::post('/save_about_us_content_image/{id}', [AboutUsController::class, 'saveAboutUsContentImage'])->name('save_about_us_content_image');
Route::post('/save_about_us_content_data', [AboutUsController::class, 'saveAboutUsContentData'])->name('save_about_us_content_data');
Route::get('/edit_about_us_content_data/{id}', [AboutUsController::class, 'editAboutUsContentData'])->name('edit_about_us_content_data');
Route::post('/update_about_us_content_data/{id}', [AboutUsController::class, 'updateAboutUsContentData'])->name('update_about_us_content_data');
Route::get('/delete_about_us_content_data/{id}', [AboutUsController::class, 'deleteAboutUsContentData'])->name('delete_about_us_content_data');
Route::get('/certificates', [AboutUsController::class, 'certificates'])->name('certificates');
Route::post('/save_certificates', [AboutUsController::class, 'saveCertificates'])->name('save_certificates');
Route::get('/edit_certificates/{id}', [AboutUsController::class, 'editCertificates'])->name('edit_certificates');
Route::post('/update_certificates/{id}', [AboutUsController::class, 'updateCertificates'])->name('update_certificates');
Route::get('/delete_certificates/{id}', [AboutUsController::class, 'deleteCertificates'])->name('delete_certificates');
Route::get('/organization_chart', [AboutUsController::class, 'organizationChart'])->name('organization_chart');
Route::post('/save_organization_chart/{id}', [AboutUsController::class, 'saveOrganizationChart'])->name('save_organization_chart');
// end About Us Routes

// Our Work Routes
Route::get('/our_work_header_image', [OurWorkController::class, 'ourWorkHeaderImage'])->name('our_work_header_image');
Route::post('/save_our_work_header_image', [OurWorkController::class, 'saveOurWorkHeaderImage'])->name('save_our_work_header_image');
Route::get('/our_work_content', [OurWorkController::class, 'ourWorkContent'])->name('our_work_content');
Route::post('/save_our_work_content', [OurWorkController::class, 'saveOurWorkContent'])->name('save_our_work_content');
Route::get('/edit_our_work_content/{id}', [OurWorkController::class, 'editOurWorkContent'])->name('edit_our_work_content');
Route::post('/update_our_work_content/{id}', [OurWorkController::class, 'updateOurWorkContent'])->name('update_our_work_content');
Route::get('/delete_our_work_content/{id}', [OurWorkController::class, 'deleteOurWorkContent'])->name('delete_our_work_content');
// end Our Work Routes

// Contact Us Routes
Route::get('/contact_us_our_office', [ContactUsController::class, 'contactUsOurOffice'])->name('contact_us_our_office');
Route::post('/save_contact_us_our_office/{id}', [ContactUsController::class, 'saveContactUsOurOffice'])->name('save_contact_us_our_office');
Route::get('/contact_us_touch', [ContactUsController::class, 'contactUsTouch'])->name('contact_us_touch');
Route::post('/save_contact_us_touch/{id}', [ContactUsController::class, 'saveContactUsTouch'])->name('save_contact_us_touch');
Route::get('/contact_us_follow_us', [ContactUsController::class, 'contactUsFollowUs'])->name('contact_us_follow_us');
Route::post('/save_contact_us_follow_us/{id}', [ContactUsController::class, 'saveContactUsFollowUs'])->name('save_contact_us_follow_us');
// end Contact Us Routes
