<?php

use App\Http\Controllers\BlogCategoryController;
use App\Models\Blog;
use Faker\Guesser\Name;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CompanyDashboardController;
use App\Http\Controllers\CreateController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DashboardQuestionsController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MissionCategoryController;
use App\Http\Controllers\MissionController;
use App\Http\Controllers\PlatformController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\SocialiteController;
use App\Http\Controllers\RegistrasiController;
use App\Http\Controllers\StatController;
use App\Http\Controllers\UserController;
use App\Models\MissionCategory;

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
    $blog = Blog::orderBy('id', 'desc')->paginate(3);
    return view('home', compact('blog'));
})->name('index');

Route::get('/blog/index', function () {
    $blog3 = Blog::latest()->paginate(3);
    return view('blog.index', compact('blog3'));
})->name('blog.index');

// Registrasi
Route::get('/registrasi', [RegistrasiController::class, 'regisCompany'])->middleware(['guest'])->name('register.com');
Route::get('/registrasi/mission', [RegistrasiController::class, 'regisMiss'])->middleware(['guest'])->name('register.miss');
Route::post('/registrasi/company', [RegistrasiController::class, 'company'])->name('register.company');
Route::post('/registrasi/user', [RegistrasiController::class, 'user'])->name('register.user');

// About us
Route::get('/about', function () {
    return view('about');
});

// Contact us
Route::get('/contact', [QuestionController::class, 'index'])->name('contact');
Route::post('/contact', [QuestionController::class, 'store'])->name('question');

// Login
Route::get('/login', [LoginController::class, 'index'])->name('login.mail');
Route::post('/login', [LoginController::class, 'submitEmail'])->name('login.getemail');

Route::get('/login/password', [LoginController::class, 'password'])->name('login.password');
Route::post('/login/password', [LoginController::class, 'login'])->name('login');

//Auth User
Route::middleware(['auth', 'user-access:user', 'check_banned'])->group(function () {
    Route::get('/home', [HomeController::class, 'index'])->name('home');
});

//Auth Company
Route::middleware(['auth', 'user-access:company'])->group(function () {

    // Dashboard Company
    Route::get('/dashboard/company', [CompanyDashboardController::class, 'index'])->name('company');
    Route::get('/company/create', [CompanyDashboardController::class, 'create'])->name('create.mission');
    Route::post('/dashboard/company/mission', [MissionController::class, 'store'])->name('mission.store');
});

//Auth Admin
Route::middleware(['auth', 'user-access:admin'])->group(function () {
    //CMS Blog
    Route::get('/admin/dashboard', [DashboardController::class, 'index'])->name('admin');
    Route::get('/admin/dashboard/blog', [DashboardController::class, 'blog'])->name('table.blog');
    Route::get('/admin/dashboard/create', [BlogController::class, 'create'])->name('blog.create');
    Route::post('/admin/dashboard/store', [BlogController::class, 'store'])->name('blog.store');
    Route::get('/admin/{blog}/blog/edit', [BlogController::class, 'edit'])->name('edit.blog');
    Route::put('/admin/{blog}/blog/update', [BlogController::class, 'update'])->name('update.blog');
    Route::delete('/admin/{blog}/blog/destroy', [BlogController::class, 'destroy'])->name('destroy.blog');

    // CMS Question
    Route::get('/admin/dashboard/question', [QuestionController::class, 'question'])->name('question.home');
    Route::get('/admin/question/{question}/show', [QuestionController::class, 'show'])->name('question.show');

    // CMS Mission Categories
    Route::get('/admin/dashboard/categories', [MissionCategoryController::class, 'categories'])->name('categories.home');
    Route::get('/admin/dashboard/create/mcategories', [MissionCategoryController::class, 'create'])->name('mcategories.create');
    Route::post('/admin/dashboard/store/mcategories', [MissionCategoryController::class, 'store'])->name('mcategories.store');
    Route::get('/admin/{missionCategory}/dashboard/edit', [MissionCategoryController::class, 'edit'])->name('mcategories.edit');
    Route::delete('/admin/{missionCategory}/dashboard/delete', [MissionCategoryController::class, 'destroy'])->name('mcategories.delete');

    // CMS Blog Categories
    Route::get('/admin/dashboard/create/bcategories', [BlogCategoryController::class, 'create'])->name('bcategories.create');
    Route::post('/admin/dashboard/store/bcategories', [BlogCategoryController::class, 'store'])->name('bcategories.store');
    Route::get('/admin/{id}/dashboard/bedit', [BlogCategoryController::class, 'edit'])->name('bcategories.edit');
    Route::delete('/admin/{blogCategory}/dashboard/delete', [BlogCategoryController::class, 'destroy'])->name('bcategories.delete');

    // Ban & Unban User
    Route::put('/admin/user/{user}/ban', [UserController::class, 'banUser'])->name('user.ban');
    Route::put('/admin/user/{user}/unban', [UserController::class, 'unbanUser'])->name('user.unban');
    Route::get('/admin/user/{user}/edit', [UserController::class, 'edit'])->name('user.edit');
    Route::put('/admin/user/{user}/update', [UserController::class, 'update'])->name('user.update');
});


// untuk blog
Route::get('/blog', [BlogController::class, 'index'])->name('blog');
Route::get('/blog/{slug}', [BlogController::class, 'show'])->name('blog.show');
Route::post('/admin/dashboard/store', [BlogController::class, 'store'])->name('blog.store');

// Untuk redirect ke Google
Route::get('login/google/redirect', [SocialiteController::class, 'redirect'])
    ->middleware(['guest'])
    ->name('redirect');

// Untuk callback dari Google
Route::get('login/google/callback', [SocialiteController::class, 'callback'])
    ->middleware(['guest'])
    ->name('callback');

// Untuk logout
Route::post('logout', [SocialiteController::class, 'logout'])
    ->middleware(['auth'])
    ->name('logout');

// platform
Route::get('/platform', [PlatformController::class, 'index']);
Route::get('/platform/misi', [PlatformController::class, 'misi'])->name('platform.misi');
Route::get('/platform/addfriend', [PlatformController::class, 'addfriend'])->name('platform.addfriend');
Route::get('/platform/history', [PlatformController::class, 'history'])->name('platform.history');
Route::get('/platform/notif', [PlatformController::class, 'notif'])->name('platform.notif');
Route::get('/platform/mission_c', [PlatformController::class, 'mission_c'])->name('platform.mission_c');
Route::get('/platform/profil', [PlatformController::class, 'profil'])->name('platform.profil');

// // Dashboard admin
// Route::get('/admin/dasboard', [DashboardController::class, 'index'])->name('admin');
// Route::get('/admin/dasboard/blog', [DashboardController::class, 'blog'])->name('table.blog');
// Route::get('/admin/dasboard/create', [BlogController::class, 'create'])->name('create.blog');
// Route::get('/admin/dasboard/edit', [DashboardController::class, 'edit'])->name('edit.blog');
// Route::get('/admin/dasboard/show', [DashboardController::class, 'show'])->name('show.blog');

// // Dashboard Company
// Route::get('/dashboardcompany', [CompanyDashboardController::class, 'index']);
// Route::get('/dashboardcompany/create', [CompanyDashboardController::class, 'create'] )->name('create.mission');

// untuk statistik
Route::get('/stat', [StatController::class, 'index'])->name('stat');
