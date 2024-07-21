<?php
use Illuminate\Support\Facades\Route;
// use App\Http\Middleware\Admin;
use BayAreaWebPro\MultiStepForms\MultiStepForm;
// Backend Controllers
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\QuizController;
use App\Http\Controllers\QuestionController;
// Frontend Controllers
use App\Http\Controllers\PagesController;
use App\Http\Controllers\AuthController;

/*
|--------------------------------------------------------------------------
| Frontend Routes
|--------------------------------------------------------------------------
*/

// Login Routes
Route::get('/', [AuthController::class, 'index'])->name('login');
Route::get('register', [AuthController::class, 'register'])->name('register');
Route::post('post-login', [AuthController::class, 'postLogin'])->name('login.post');
Route::post('post-registration', [AuthController::class, 'postRegistration'])->name('register.post');
Route::get('logout', [AuthController::class, 'logout'])->name('logout');

Route::group(['middleware' => 'auth'], function () {
    Route::get('/quizzes', [PagesController::class, "quizzes"])->name('home');
    Route::get('/quiz/{id}', [PagesController::class, "viewQuiz"])->name('quiz.view');
    Route::get('/start-quiz/{id}', [PagesController::class, "startQuiz"])->name('quiz.start');
    Route::post('/quiz-result', [PagesController::class, "result"])->name('quiz.result');
    Route::get('/about-us', [PagesController::class, "aboutUs"])->name('about_us');
    Route::get('/profile', [PagesController::class, "profile"])->name('profile');
    Route::post('/profile-update/{id}', [PagesController::class, "profileUpdate"])->name('profile.update');
});




// // Forget Password Routes
// Route::get('/password/reset', 'Backend\Auth\ForgetPasswordController@showLinkRequestForm')->name('admin.password.request');
// Route::post('/password/reset/submit', 'Backend\Auth\ForgetPasswordController@reset')->name('admin.password.update');
/*
|--------------------------------------------------------------------------
| Backend Routes
|--------------------------------------------------------------------------
*/

Route::group(['prefix' => 'admin', 'middleware' => 'admin'], function () {
    Route::get('/dashboard', [DashboardController::class, "dashboard"])->name('dashboard');
    Route::get('/quiz-results', [QuizController::class, "quizResults"])->name('quizs.results');
    Route::resource('categories', CategoriesController::class);
    Route::resource('users', UserController::class);
    Route::resource('quizs', QuizController::class);
    Route::resource('questions', QuestionController::class);
});

//Đăng đã ở đây
// Route::get('/', function(){
//     echo "Đăng đã ở đây";
// });

//Minh dat ne
