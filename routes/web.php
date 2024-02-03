<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\frontend\HomeController;
use App\Http\Controllers\admin\TestimonialController;

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

Route::name('frontend.')->group(function () {
    Route::get('/', [HomeController::class, 'index'])->name('home');
    Route::get('/about',[HomeController::class,'about'])->name('about');
    Route::get('/contact',[HomeController::class,'contact'])->name('contact');

});


Route::redirect("/admin", "/login");

Route::group(['prefix' => 'admin'], function () {
    Route::name('admin.')->group(function () {

        Route::group(['middleware' => 'admin.auth'], function () {
            // Route::get('/', [DashboardController::class, 'index'])->name('index');
            Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');




            // Testimonials
            Route::name('testimonial.')->group(function () {
                Route::get('/testimonials', [TestimonialController::class, 'index'])->name('index');
                Route::get('/testimonials/create', [TestimonialController::class, 'create'])->name('create');
                Route::post('/testimonials/store', [TestimonialController::class, 'store'])->name('store');
                Route::get('/testimonials/edit/{id}', [TestimonialController::class, 'edit'])->name('edit');
                Route::post('/testimonials/update/{id}', [TestimonialController::class, 'update'])->name('update');
                Route::get('/testimonials/destroy/{id}', [TestimonialController::class, 'destroy'])->name('destroy');
            });
              // projects
              Route::name('product.')->group(function () {
                Route::get('/products', [ProductController::class, 'index'])->name('index');
                Route::get('/categories/addcategory', [CategoryController::class, 'addcategory'])->name('addcategory');
                Route::get('/categories/indexcategory', [CategoryController::class, 'indexcategory'])->name('indexcategory');
                Route::post('/categories/storecategory', [CategoryController::class, 'storecategory'])->name('storecategory');
                Route::post('/categories/update/{id}', [ProductController::class, 'update'])->name('update');
                Route::get('/categories/destroys/{id}', [CategoryController::class, 'destroys'])->name('destroys');
                Route::get('/products/show/{id}', [ProductController::class, 'show'])->name('show');
                Route::get('/products/create', [ProductController::class, 'create'])->name('create');
                Route::post('/products/create', [ProductController::class, 'create'])->name('create');
                Route::post('/products/store', [ProductController::class, 'store'])->name('store');
                Route::get('/products/edit/{id}', [ProductController::class, 'edit'])->name('edit');
                Route::post('/products/update/{id}', [ProductController::class, 'update'])->name('update');

                Route::get('/products/destroy/{id}', [ProductController::class, 'destroy'])->name('destroy');
                Route::get('/products/{product_id}/image/create', [ProductController::class, 'create_image'])->name('image.create');
                Route::post('/products/{product_id}/image/store', [ProductController::class, 'store_image'])->name('image.store');
                Route::get('/products/{product_id}/image/destroy/{image_id}', [ProductController::class, 'destroy_image'])->name('image.destroy');
            });


            Route::get('/website-settings', [WebsiteSettingController::class, 'index'])->name('website-settings.index');
            Route::get('/website-settings/edit/{slug}', [WebsiteSettingController::class, 'edit'])->name('website-settings.edit');
            Route::post('/website-settings/update/{slug}', [WebsiteSettingController::class, 'update'])->name('website-settings.update');

             // contact form
             Route::get('/message', [FormController::class, 'message_index'])->name('message.index');
             Route::get('/message/destroy/{id}', [FormController::class, 'message_destroy'])->name('message.destroy');
             Route::post('/message/export', [FormController::class, 'message_export'])->name('message.export');

             Route::get('/profile', [ProfileController::class, 'profile'])->name('profile');

        });
    });


    Route::post('/profile/image/update', [ProfileController::class, 'image_update'])->name('profile.image.update');
    Route::get('/profile/image/destroy', [ProfileController::class, 'image_destroy'])->name('profile.image.destroy');
});







Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');


});
require __DIR__ . '/auth.php';
