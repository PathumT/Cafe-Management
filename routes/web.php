<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\ReservationController;


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

Route::get('/', function () {
    return view('home');
});

Route::get('/admin_dashboard', function () {
    return view('layouts.admin-dashboard');
});

Auth::routes();

Route::get('/home',                                     [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware(['auth'])->group(function () {
    // ...
});
Route::get('register',                                  [App\Http\Controllers\Auth\RegisterController::class, 'showRegistrationForm'])->name('register');
Route::get('dashboard',                                 [App\Http\Controllers\HomeController::class, 'dashboard'])->name('dashboard');
//contact
Route::get('contact',                                   [App\Http\Controllers\OrderController::class, 'contact'])->name('contact');

//account managemnt
Route::get('account_management',                        [App\Http\Controllers\AccountController::class, 'account_management'])->name('account_management');
Route::post('create_account',                           [App\Http\Controllers\AccountController::class, 'createaccount'])->name('create_account');
Route::get('deleteaccount/{id}',                        [App\Http\Controllers\AccountController::class, 'deleteaccount']);
Route::post('updateaccount/{id}',                       [App\Http\Controllers\AccountController::class, 'updateaccount'])->name('updateaccount');
Route::get('account_edit/{id}',                         [App\Http\Controllers\AccountController::class, 'account_edit'])->name('account_edit');

//user
Route::get('user_list',                                 [App\Http\Controllers\AccountController::class, 'user_list'])->name('user_list');

//booking
Route::get('bocking_mg',                                [App\Http\Controllers\ReservationController::class, 'bocking_mg'])->name('bocking_mg');
Route::get('shop_menu',                                 [App\Http\Controllers\ReservationController::class, 'shop_menu'])->name('shop_menu');
Route::post('addItems',                                  [App\Http\Controllers\ReservationController::class, 'addItems']);
Route::get('member_manage',                             [App\Http\Controllers\ReservationController::class, 'member_manage'])->name('member_manage');
Route::get('deleters/{id}',                             [App\Http\Controllers\ReservationController::class, 'deleters']);

//table booking
Route::get('table_reservation',                         [App\Http\Controllers\BookingController::class, 'table_reservation'])->name('table_reservation');
Route::get('table_selection',                           [App\Http\Controllers\BookingController::class, 'table_selection'])->name('table_selection');
Route::get('table-selection-check',                     [App\Http\Controllers\BookingController::class, 'table_selection_check'])->name('table_selection_check');
Route::post('/saveReservation',                         [ReservationController::class, 'storeReservation']);
Route::post('/saveTable',                               [ReservationController::class, 'storeTable']);
Route::get('/checkAvailability',                        [ReservationController::class, 'checkAvailbility']);
Route::post('/saveReservation',                         [ReservationController::class, 'saveReservation'])->middleware('auth');
Route::get('/manage-reservation',                       [ReservationController::class, 'manageReservations']);
Route::get('/deleteReservation/{id}',                   [ReservationController::class, 'deleteReservation']);
Route::get('/editReservation/{id}',                     [ReservationController::class, 'editReservation']);
Route::post('/updateReservation',                       [ReservationController::class, 'updateReservation']);

Route::resource('menu',                                 App\Http\Controllers\MenuItemController::class);
Route::resource('menupdf',                              App\Http\Controllers\MenuItemPDFController::class)->only("create");

//shop
Route::get('shop',                                      [App\Http\Controllers\ShopController::class, 'shop'])->name('shop');

//cart
Route::get('cart',                                      [App\Http\Controllers\CartController::class, 'cart'])->name('cart')->middleware('auth');
Route::put('/cart/{id}',                                [App\Http\Controllers\CartController::class, 'update'])->name('cart.update');

//market
Route::get('market',                                    [App\Http\Controllers\CartController::class, 'market'])->name('market')->middleware('auth');
Route::get('member',                                    [App\Http\Controllers\CartController::class, 'member'])->name('member')->middleware('auth');

//delivery
Route::get('delivery',                                  [App\Http\Controllers\DeliveryController::class, 'delivery'])->name('delivery');

//orderDetails
Route::get('orderDetails',                              [App\Http\Controllers\OrderController::class, 'orderDetails'])->name('orderDetails');

//testmail
Route::get('/send-email',                               [AccountController::class, 'index']);


















Route::post('/logout', function () {
    Auth::logout();
    return redirect('/login');
})->name('logout');
