<?php

use Illuminate\Support\Facades\Route;

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
Route::get('/login', [App\Http\Controllers\Auth\LoginController::class, 'index'])->name('auth.login');
Route::post('/login/user', [App\Http\Controllers\Auth\LoginController::class, 'postLogin'])->name('user.login');
Route::get('/register', [App\Http\Controllers\Auth\RegisterController::class, 'index'])->name('register');
Route::post('/register/user', [App\Http\Controllers\Auth\RegisterController::class, 'create'])->name('user.register');
Route::get('email/verify/{token}', [App\Http\Controllers\Auth\VerificationController::class, 'verifyUser'])->name('user.verification');
Route::get('/logout', [App\Http\Controllers\Auth\LoginController::class,'logout'])->name('auth.logout');
Route::get('/forgot/password', [App\Http\Controllers\Auth\ForgotPasswordController::class, 'passwordReset'])->name('user.forgot.password');
Route::post('/send/recovery/link', [App\Http\Controllers\Auth\ForgotPasswordController::class, 'postForgotPassword'])->name('user.send.password.recovery.link');
Route::get('change/password/{token}', [App\Http\Controllers\Auth\ForgotPasswordController::class, 'changePassword'])->name('user.post.change.password');
Route::post('reset/password/', [App\Http\Controllers\Auth\ForgotPasswordController::class, 'resetPassword'])->name('user.post.reset.password');

Route::get('/', [App\Http\Controllers\PagesController::class, 'index'])->name('home');
Route::get('/about_us', [App\Http\Controllers\PagesController::class, 'about'])->name('about');
Route::get('/contact', [App\Http\Controllers\PagesController::class, 'contact'])->name('contact');
Route::get('/customers-agreement', [App\Http\Controllers\PagesController::class, 'customersAgreement'])->name('customersAgreement');
Route::get('/education', [App\Http\Controllers\PagesController::class, 'education'])->name('education');
Route::get('/customers', [App\Http\Controllers\PagesController::class, 'customers'])->name('customers');

Route::get('/dashboard', [App\Http\Controllers\AppController::class, 'dashboard'])->name('user.dashboard');
Route::get('/demo', [App\Http\Controllers\AppController::class, 'demo'])->name('user.demo');
Route::post('/process/trade', [App\Http\Controllers\AppController::class, 'processTrade'])->name('user.process.trade');

Route::get('/deposit', [App\Http\Controllers\AppController::class, 'funding'])->name('user.funding');
Route::post('/process/deposit', [App\Http\Controllers\AppController::class, 'processFunding'])->name('user.process.funding');

Route::get('/withdrawal', [App\Http\Controllers\AppController::class, 'withdrawal'])->name('user.withdrawal');
Route::post('/process/withdrawal', [App\Http\Controllers\AppController::class, 'processWithdrawals'])->name('user.process.withdrawals');


Route::get('/transaction_history', [App\Http\Controllers\AppController::class, 'transaction_history'])->name('user.transaction_history');
Route::get('/demo_history', [App\Http\Controllers\AppController::class, 'demo_history'])->name('user.demo_history');
Route::get('/deposit_history', [App\Http\Controllers\AppController::class, 'deposit_history'])->name('user.deposit_history');
Route::get('/withdrawal_history', [App\Http\Controllers\AppController::class, 'withdrawal_history'])->name('user.withdrawal_history');
Route::get('/profile', [App\Http\Controllers\AppController::class, 'profile'])->name('user.profile');


Route::get('/admin', [App\Http\Controllers\AdminController::class, 'index'])->name('user.admin');

Route::get('/admin/all_payment_method', [App\Http\Controllers\AdminController::class, 'allPaymentMethod'])->name('user.admin.all.payment.method');
Route::post('/edit/payment_method', [App\Http\Controllers\AdminController::class, 'editPaymentMethod'])->name('user.edit.payment.method');
Route::post('/process_funds', [App\Http\Controllers\AdminController::class, 'processFunds'])->name('user.process.fund.method');

Route::get('/admin/all_withdrawal', [App\Http\Controllers\AdminController::class, 'allWithdrawal'])->name('user.admin.all_withdrawal');
Route::get('/admin/all_deposit', [App\Http\Controllers\AdminController::class, 'allDeposit'])->name('user.admin.all_deposit');
Route::post('/delete_account', [App\Http\Controllers\AdminController::class, 'deleteAccount'])->name('user.delete.account');
Route::post('/approve_withdrawal', [App\Http\Controllers\AdminController::class, 'approveWithdrawal'])->name('user.approve.withdrawl');
Route::post('/approve_deposit', [App\Http\Controllers\AdminController::class, 'approveDeposit'])->name('user.approve.deposit');

Route::get('/admin/all_trade', [App\Http\Controllers\AdminController::class, 'allTrading'])->name('user.admin.all.trade');
Route::post('/trade_action', [App\Http\Controllers\AdminController::class, 'tradeAction'])->name('user.trade.action');









// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
