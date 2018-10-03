<?php

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

Route::get('/', 'UserController@ind');
Route::get('contact', 'ContactController@getContact');
Route::post('contact', 'ContactController@postContact');

Route::get('privacypolicy', 'UserController@privacy');
Route::get('faq', 'UserController@faq');

Route::get('admin-register/werbrtyrsequew/ntui', 'AdminController@admin_reg')->name('auth.admin-register');
Route::post('admin-register/post-werbrtyrsequew/ntui', 'AdminController@p_admin_reg')->name('auth.a_register');
// Authentication Routes...
Route::get('auth/login', 'SigningController@showForm')->name('auth.login');
Route::post('login', 'Auth\LoginController@login');
Route::get('logout', 'Auth\LoginController@logout')->name('logout');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');

// Registration Routes...
Route::get('auth/register', 'SignupController@showRegistrationForm')->name('auth.register');
Route::post('auth/register', 'SignupController@postRegistration');
Route::get('account/register', 'SignupController@ntui')->name('auth.ref_register');
Route::post('account/post-register', 'SignupController@postRegistrationForm');

// Password Reset Routes...
Route::get('password/reset', 'SigningController@showLinkRequestForm')->name('password.request');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('password/reset/{token}', 'SigningController@showResetForm')->name('password.reset');
Route::post('password/reset', 'Auth\ResetPasswordController@reset');


Route::get('user/dashboard', 'HomeController@dashboard')->name('user.dashboard');
Route::get('user/profile', 'HomeController@profile')->name('user.profile');
Route::get('user/referral', 'HomeController@myReferral')->name('user.referral');
Route::get('user/add-fund', 'HomeController@addFund')->name('user.add-fund');
Route::get('user/add-fund/checkout', 'CoinpaymentsController@checkout')->name('user.add-funds');
//Route::post('donate', 'CoinpaymentsController@donation')->name('donate');
Route::get('user/withdraw-fund', 'HomeController@withdrawFund')->name('user.withdraw-fund');
Route::post('user/post-withdraw', 'HomeController@postWithdraw')->name('user.post-withdraw');
Route::post('user/post-referral-withdraw', 'HomeController@postReferralWithdrawal')->name('user.post-referral-withdraw');
Route::get('user/create-announcement', 'AdminController@announcement');
Route::post('user/post-create-announcement', 'AdminController@postAnnouncement');
Route::get('user/transactions', 'HomeController@myTransactions');
Route::get('user/admin-transactions', 'HomeController@adminTransactions');
Route::get('user/admin-referrals', 'HomeController@adminReferrals');
Route::get('user/admin-withdrawals', 'HomeController@adminWithdrawals');
Route::get('/confirm-payment/{id}', 'AdminController@confirm_payment');
Route::get('/confirm-withdrawal-payment/{id}', 'AdminController@confirm_withdrawal_payment');
Route::get('/confirm-referral-withdrawal-payment/{id}', 'AdminController@confirm_referral_withdrawal_payment');
Route::get('user/manage-users', 'HomeController@manageUsers')->name('user.manage-users');
Route::get('/purge-user/{id}', 'AdminController@purgeUser');
Route::get('user/manage-users/{id}/edit', 'AdminController@getEditUsers')->name('user.manage-users-edit');
Route::post('user/manage-users/edit', 'AdminController@postEditUsers')->name('user.manage-users-post-edit');
Route::get('user/admin-transactions/{id}/edit', 'AdminController@editUsersTransaction')->name('user.admin-transactions-edit');
Route::post('user/admin-transactions/edit', 'AdminController@postEditUsersTransaction')->name('user.admin-transactions-post-edit');
Route::get('user/admin-transactions/{id}', [
    'uses' => 'AdminController@deleteTransaction',
    'as' => 'admin.delete-transaction'
]);
Route::get('user/fund-users', 'AdminController@fundUsers')->name('user.fund-users');
Route::post('user/post-fund-users', 'AdminController@postFunding')->name('post-user.fund-users');

Route::get('user/admin-referrals/{id}/edit', 'AdminController@editUsersReferral')->name('user.admin-referral-edit');
Route::post('user/admin-referrals/edit', 'AdminController@postEditUsersReferral')->name('user.admin-referral-post-edit');
Route::get('user/admin-referrals/{id}', [
    'uses' => 'AdminController@deleteReferral',
    'as' => 'admin.delete-referral'
]);

Route::get('user/withdrawals', 'HomeController@myWithdrawals');
Route::get('user/admin-withdrawals/{id}/edit', 'AdminController@editUsersWithdrawal')->name('user.admin-withdrawals-edit');
Route::post('user/admin-withdrawals/edit', 'AdminController@postEditUsersWithdrawal')->name('user.admin-withdrawals-post-edit');
Route::get('user/admin-withdrawals/{id}', [
    'uses' => 'AdminController@deleteWithdrawal',
    'as' => 'admin.delete-withdrawal'
]);


Route::group(['prefix' => 'api', 'middleware' => 'auth' ], function(){
    Route::get('user', function (Request $request) {
        //return $request->user();
        return auth()->user();
    });
    Route::get('link', 'Api\HomeController@link');
    Route::post('update-profile', 'Api\HomeController@postUpdate');
    Route::post('update-profile-picture', 'Api\HomeController@update_profile_picture');
    Route::get('referrals', 'Api\HomeController@myReferrals');
    Route::get('referrals-count', 'Api\HomeController@myReferralsCount');
    Route::get('all-users', 'Api\HomeController@allUsers');
    Route::get('notifications', 'Api\HomeController@getNotifications');
    Route::post('notifications/read', 'Api\HomeController@read');
    Route::get('notifications-count', 'Api\HomeController@getNotificationsCount');
    Route::post('donate', 'CoinpaymentsController@donation')->name('donate');
    Route::post('ipn', 'CoinpaymentsController@validateIpn');
    //Route::post('withdraw', 'CoinpaymentsController@withdraw')->name('withdraw');
    Route::get('announcement', 'Api\HomeController@announcement');
    Route::get('contracts', 'Api\HomeController@getTransaction');
    Route::get('transactions', 'Api\HomeController@getContracts');
    Route::get('transactions-admin', 'Api\HomeController@getContractForAdmin');
    Route::get('withdrawals-admin', 'Api\HomeController@getWithdrawalsForAdmin');
    Route::get('referral-sum', 'Api\HomeController@getReferral');
    Route::get('withdraw-amt', 'Api\HomeController@getStuff');
    Route::get('referral-amt', 'Api\HomeController@apiReferralWithdraw');
    Route::get('client-withdrawal', 'Api\HomeController@clientWithdrawal');
});

Route::get('login', ['as' => 'login', 'uses' => function() {
    return redirect()->to(url('/'));
}]);
Route::get('register', function () {
    return redirect()->to(url('/'));
});
