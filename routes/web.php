<?php

use App\Http\Controllers\BlogCategoryController;
use App\Models\Blog;
use Faker\Guesser\Name;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CobaStepController;
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
use App\Http\Controllers\NotificationController;
use App\Http\Controllers\UserMissionController;
use App\Models\CobaStep;
use App\Models\MissionCategory;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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

Route::get('/coba', function () {
    return view('company.dashboardcompany.coba-create');
});

Route::post('coba/store', [CobaStepController::class, 'store'])->name('step.store');

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

//Auth Missionary
Route::middleware(['auth', 'user-access:user', 'check_banned'])->group(function () {
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    // platform
    Route::get('/platform', [PlatformController::class, 'index'])->name('platform');
    Route::get('/platform/misi/{id}', [PlatformController::class, 'misi'])->name('platform.misi');
    Route::get('/platform/addfriend', [PlatformController::class, 'addfriend'])->name('platform.addfriend');
    Route::get('/platform/history', [PlatformController::class, 'history'])->name('platform.history');
    Route::get('/platform/notif', [PlatformController::class, 'notif'])->name('platform.notif');
    Route::get('/platform/mission_c', [PlatformController::class, 'mission_c'])->name('platform.mission_c');
    Route::get('/platform/profil/{id}', [PlatformController::class, 'profil'])->name('platform.profil');
    Route::put('/platform/profil/{id}/edit', [PlatformController::class, 'updateProfile'])->name('platform.profil.edit');

    //misi
    Route::post('/api/take-mission', [UserMissionController::class, 'takeMission'])->name('take-mission');
    Route::post('/api/complete-step', [UserMissionController::class, 'completeStep']);
    Route::post('/api/complete-mission', [UserMissionController::class, 'completeMission']);


    // notifikasi 
    Route::post('/notify/new-mission/{missionId}', [NotificationController::class, 'notifyNewMission']);
    Route::post('/notify/mission-error/{userMissionId}', [NotificationController::class, 'notifyMissionError']);
    Route::post('/notify/reward-received/{userRewardId}', [NotificationController::class, 'notifyRewardReceived']);

    Route::get('/notifications', [NotificationController::class, 'getNotifications']);


});

//Auth Company
Route::middleware(['auth', 'user-access:company'])->group(function () {

    // Dashboard Company
    Route::get('/dashboard/company', [CompanyDashboardController::class, 'index'])->name('company');
    Route::get('/company/create', [CompanyDashboardController::class, 'create'])->name('create.mission');
    Route::get('/company/edit/{id}', [MissionController::class, 'edit'])->name('edit.mission');
    Route::put('/company/update/{mission}', [MissionController::class, 'update'])->name('update.mission');
    Route::post('/dashboard/company/mission', [MissionController::class, 'store'])->name('mission.store');
    Route::get('/company/{id}/show', [MissionController::class, 'show'])->name('show.mission');
    Route::delete('/company/{mission}/delete', [MissionController::class, 'destroy'])->name('delete.mission');
});

//Auth Admin
Route::middleware(['auth', 'user-access:admin'])->group(function () {

    Route::get('/admin/dashboard', [DashboardController::class, 'index'])->name('admin');

    //CMS Blog
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
    Route::put('/admin/{missionCategory}/dashboard/update', [MissionCategoryController::class, 'update'])->name('mcategories.update');
    Route::delete('/admin/{missionCategory}/dashboard/delete', [MissionCategoryController::class, 'destroy'])->name('mcategories.delete');

    // CMS Blog Categories
    Route::get('/admin/dashboard/create/bcategories', [BlogCategoryController::class, 'create'])->name('bcategories.create');
    Route::post('/admin/dashboard/store/bcategories', [BlogCategoryController::class, 'store'])->name('bcategories.store');
    Route::get('/admin/{blogCategory}/dashboard/bedit', [BlogCategoryController::class, 'edit'])->name('bcategories.edit');
    Route::put('/admin/{blogCategory}/dashboard/update', [BlogCategoryController::class, 'update'])->name('bcategories.update');
    Route::delete('/admin/{blogCategory}/dashboard/delete', [BlogCategoryController::class, 'destroy'])->name('bcategories.delete');

    // Ban & Unban User
    Route::put('/admin/user/{user}/ban', [UserController::class, 'banUser'])->name('user.ban');
    Route::put('/admin/user/{user}/unban', [UserController::class, 'unbanUser'])->name('user.unban');
    Route::get('/admin/user/{user}/edit', [UserController::class, 'edit'])->name('user.edit');
    Route::put('/admin/user/{user}/update', [UserController::class, 'update'])->name('user.update');

    // CMS Missionary

    Route::get('/admin/user/mission/{id}', [DashboardController::class, 'userMission'])->name('admin.user.missions');
    Route::get('/admin/mission', [DashboardController::class, 'listMission'])->name('admin.missions');
    Route::get('/admin/mission/{id}', [DashboardController::class, 'showMission'])->name('admin.missions.show');
    Route::post('/admin/missions/{id}/validate', [DashboardController::class, 'validateMission'])->name('admin.missions.validate');
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

// untuk statistik
Route::get('/stat', [StatController::class, 'index'])->name('stat');
