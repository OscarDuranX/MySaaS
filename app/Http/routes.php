<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});



/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {

    Route::get('auth/{provider}', 'Auth\SocialAuthController@redirectToProvider');
    Route::get('auth/{provider}/callback', 'Auth\SocialAuthController@handleProviderCallback');

    Route::get('plans', 'PlansController@Index');

    Route::get('register_subscription', function(){
        return view('auth.register_subscription');
    });

    Route::post('subscription_payment', 'SubscriptionController@subscribe');



    //Route::post('registerAndSubscribeToStrip', '@ReportsController');

    Route::get('reports/dailySales','ReportsController@dailySales');

    Route::get('downloadInvoice','PDFController@downloadInvoice');

    Route::get('Invoice','PDFController@invoiceHtml');

    Route::get('JsPDF', 'JsPDFController@index');

    Route::get('users', 'UsersController@index');
    Route::post('users', 'UsersController@store');
    Route::put('users', 'UsersController@update');
    Route::put('users', 'UsersController@delete');




});
