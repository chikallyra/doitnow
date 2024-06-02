<?php
use App\Models\Blog;
use Faker\Guesser\Name;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CompanyDashboardController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PlatformController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\SocialiteController;
use App\Http\Controllers\RegistrasiController;
use App\Http\Controllers\StatController;

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
Route::middleware(['auth', 'user-access:user'])->group(function () {
  
    Route::get('/home', [HomeController::class, 'index'])->name('home');
});

//Auth Company
Route::middleware(['auth', 'user-access:company'])->group(function () {
  
    Route::get('/company/home', [HomeController::class, 'companyHome'])->name('company.home');
});

//Auth Admin
Route::middleware(['auth', 'user-access:admin'])->group(function () {
  
    Route::get('/admin/home', [HomeController::class, 'adminHome'])->name('admin.home');
    Route::post('/admin/add', [BlogController::class, 'store'])->name('addBlog');

});


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

// untuk blog
Route::get('/blog', [BlogController::class, 'index'])->name('blog');
Route::get('/blog/{slug}', [BlogController::class, 'show'])->name('blog.show');

// platform
Route::get('/platform', [PlatformController::class, 'index']);

// Dashboard admin
Route::get('/dashboard', [DashboardController::class, 'index']);
Route::get('/dashboard/create', [DashboardController::class, 'create'])->name('create.blog');

// Dashboard Company
Route::get('/dashboardcompany', [CompanyDashboardController::class, 'index']);
Route::get('/dashboardcompany/create', [CompanyDashboardController::class, 'create'] )->name('create.mission');

// untuk statistik
Route::get('/stat', [StatController::class, 'index'])->name('stat');