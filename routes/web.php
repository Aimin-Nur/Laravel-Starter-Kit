<?php

use App\Http\Controllers\Admin\AttributesController;
use App\Http\Controllers\Admin\CalendarController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ChatController;
use App\Http\Controllers\Admin\CouponsController;
use App\Http\Controllers\Admin\CustomerController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\EmailController;
use App\Http\Controllers\Admin\FaqsController;
use App\Http\Controllers\Admin\InventoryController;
use App\Http\Controllers\Admin\InvoiceController;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Admin\PagesController;
use App\Http\Controllers\Admin\PermissionController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\Admin\PurchaseController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\SellerController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\TodoController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoutingController;
use Illuminate\Container\Attributes\Auth;

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

require __DIR__ . '/auth.php';

Route::group(['middleware' => 'auth'], function () {
    // Route::get('/', [RoutingController::class, 'index'])->name('root');

    // // Rute untuk level kedua dan ketiga harus diletakkan lebih spesifik
    // Route::get('{first}/{second}/{third}', [RoutingController::class, 'thirdLevel'])->name('third');
    // Route::get('{first}/{second}', [RoutingController::class, 'secondLevel'])->name('second');

    // // Rute wildcard terakhir untuk memastikan tidak bertabrakan
    // Route::get('{any}', [RoutingController::class, 'root'])->name('any');
});


Route::group([
    'middleware' => ['auth', 'role:SuperAdmin|Admin', 'permission:AdminPanel access'],
    'prefix'     => 'admin',
    'as'         => 'admin.'
], function () {
    Route::get('/', [RoutingController::class, 'index'])->name('root');

    Route::resource('dashboard', DashboardController::class);

    Route::resource('product', ProductController::class);
    Route::get('grid', [ProductController::class, 'grid'])->name('product.grid');

    Route::resource('category', CategoryController::class);

    Route::resource('inventory', InventoryController::class);
    Route::get('receivedorders', [InventoryController::class, 'orders'])->name('inventory.received-orders');

    Route::resource('order', OrderController::class);
    Route::get('checkout', [OrderController::class, 'checkout'])->name('order.checkout');
    Route::get('cart', [OrderController::class, 'cart'])->name('order.cart');

    Route::resource('purchase', PurchaseController::class);
    Route::get('order/purchase', [PurchaseController::class, 'order'])->name('purchase.order');
    Route::get('return', [PurchaseController::class, 'return'])->name('purchase.return');

    Route::resource('attribute', AttributesController::class);

    Route::resource('invoice', InvoiceController::class);

    Route::resource('setting', SettingController::class);

    Route::resource('customer', CustomerController::class);

    Route::resource('seller', SellerController::class);

    Route::resource('coupons', CouponsController::class);

    Route::resource('chat', ChatController::class);

    Route::resource('email', EmailController::class);

    Route::resource('calendar', CalendarController::class);

    Route::resource('todo', TodoController::class);

    Route::resource('faqs', FaqsController::class);

    Route::get('pages/welcome', [PagesController::class, 'welcome'])->name('pages.welcome');
    Route::get('pages/coming-soon', [PagesController::class, 'comingSoon'])->name('pages.comingSoon');
    Route::get('pages/timeline', [PagesController::class, 'timeline'])->name('pages.timeline');
    Route::get('pages/pricing', [PagesController::class, 'princing'])->name('pages.pricing');
    Route::get('pages/maintenance', [PagesController::class, 'maintenance'])->name('pages.maintenance');
    Route::get('pages/404/error', [PagesController::class, 'notFound'])->name('pages.404');
    Route::get('pages/signin', [PagesController::class, 'signin'])->name('pages.signin');
    Route::get('pages/signup', [PagesController::class, 'signup'])->name('pages.signup');
    Route::get('pages/reset-password', [PagesController::class, 'resetPassword'])->name('pages.reset-password');
    Route::get('pages/lock-screen', [PagesController::class, 'lockScreen'])->name('pages.lock-screen');
    Route::get('pages/widget', [PagesController::class, 'widget'])->name('pages.widget');







    Route::resource('profile', ProfileController::class)->except(['edit', 'create']);
    Route::patch('admin/profile/{user}/passUpdate', [ProfileController::class, 'passUpdate'])->name('profile.passUpdate');
    Route::patch('admin/profile/{user}/othersUpdate', [ProfileController::class, 'othersUpdate'])->name('profile.othersUpdate');

    Route::resource('roles', RoleController::class);
    Route::get('data', [RoleController::class, 'getRolesData'])->name('roles.data');

    Route::post('admin/roles/edit/{id}', [RoleController::class, 'edit'])->name('roles.edit');
    Route::resource('permissions', PermissionController::class);
});

