<?php

use App\Http\Controllers\Frontend\IndexController;
use Illuminate\Support\Facades\Route;


// Route::get('/about-us', function () {
//     return view('frontend.about.about');
// })->name('frontend.about');

// Start Frontend Code //////////////////////////////////
Route::controller(IndexController::class)->group(function () {
    ///About US pages related routes
    Route::get('/about-us', 'FrontendAbout')->name('frontend.about');

    ///Service page related routes
    Route::get('/all-service', 'AllService')->name('all.service');
    Route::get('/service-details/{id}', 'ServiceDetails')->name('service.details');

    // Project page related routes
    Route::get('/all-project', 'AllProject')->name('all.project');
    Route::get('/project-details/{id}', 'ProjectDetails')->name('project.details');

    //Team  page related routes 
    Route::get('/all-team', 'AllTeam')->name('all.team');
    Route::get('/team-details/{id}', 'TeamDetails')->name('team.details');

    // Blog page related routes
    Route::get('/blog', 'blog')->name('blog');
    Route::get('/blog/details/{id}', 'blogDetails')->name('blog.details');

    // sister concern page related routes
    Route::get('/sister-concern', 'sisterConcern')->name('sister.concern');
    Route::get('/sister-concern/details/{id}', 'sisterConcernDetails')->name('sister.concern.details');

    // CSR Activities page related routes
    Route::get('/csr-activities', 'csrActivities')->name('csr.activities');
    Route::get('/csr-activities/details/{id}', 'csrActivitiesDetails')->name('csr.activities.details');

    // contact us page related routes
    Route::get('/contuct-us', 'ContactUs')->name('contact.us');
    Route::post('/contact/store', 'ContactStore')->name('contact.store');
    Route::get('/contact/list', 'ContactList')->name('contact.list');
    Route::get('/contact/delete/{id}', 'ContactDelete')->name('contact.delete');

    //Subscribe
    Route::post('/subscribe', 'Subscribe')->name('store.subscribe');
    Route::get('/subscribe/list', 'SubscribeList')->name('subscribe.list');
    Route::get('/subscribe/delete/{id}', 'SubscribeDelete')->name('subscribe.delete');
   
    // choose us
    Route::get('/choose-us/details', 'chooseUsDetails')->name('choose-us.details');

    //Carrier
    Route::get('/carrier', 'carrier')->name('carrier');
    Route::get('/carrier/details/{id}', 'carrierDetails')->name('carrier.details');

    //404 page
    Route::fallback(function () {
        return view('frontend.errors.404');
    });
    //achievements Details
    // Route::get('/achievements-details/{id}', 'AchievementsDetails')->name('achiements.details');
});