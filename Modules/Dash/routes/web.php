<?php


use Illuminate\Support\Facades\Route;
use Modules\Dash\App\Http\Controllers\AboutController;
use Modules\Dash\App\Http\Controllers\auth\LoginController;
use Modules\Dash\App\Http\Controllers\auth\RegisterController;
use Modules\Dash\App\Http\Controllers\BlogController;
use Modules\Dash\App\Http\Controllers\HomeController;
use Modules\Dash\App\Http\Controllers\Job\JobController;


//Route::group([], function () {
//    Route::resource('/', [HomeController::class,'index'])->names('home');
//});


Route::domain('{subdomain}.localhost.com')->group(function () {
    // Your "dash" subdomain-specific routes go here
//    echo phpinfo();
//    return response('Custom message', 200);

});

Route::get('/', [HomeController::class, 'index'])->name('Home');
Route::get('/about', [AboutController::class, 'index'])->name('About')->middleware('role:super_admin');
Route::get('/join-as-master', [JobController::class, 'index'])->name('joinAsMaster')->middleware('role::user,developer,admin,manager,master');
Route::post('/join-as-master', [JobController::class, 'action'])->middleware('role::user,developer,admin,manager,master');
Route::get('/post-job', [JobController::class, 'postJobIndex'])->middleware('role::user,developer,admin,manager,master')->name('post.job');
Route::post('/post-job', [JobController::class, 'postJob'])->middleware('role::user,developer,admin,manager,master');

Route::group(['prefix' => 'blog'], function () {
    Route::get('/list', [BlogController::class, 'index'])->name('blogIndex');
    Route::get('/add', [BlogController::class, 'addBlogView'])->name('addBlogView');
    Route::post('/add', [BlogController::class, 'addBlog'])->name('addBlog');
    Route::get('/{id}/details', [BlogController::class, 'details'])->name('blogDetails');
});

Route::get('/login', [LoginController::class, 'index'])->name("Login");
Route::post('/login', [LoginController::class, 'login'])->name("login.action");
Route::get('/logout', [LoginController::class, 'logout'])->name("logout");
Route::get('/register', [RegisterController::class, 'index'])->name("Register");
Route::post('/register', [RegisterController::class, 'register'])->name('register.action');
