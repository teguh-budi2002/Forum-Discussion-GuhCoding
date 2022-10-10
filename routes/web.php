<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ForumController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\SocialController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Api\GetPostController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\VerificationController;
use App\Http\Controllers\Auth\ForgotPasswordController;

Route::get('/', [HomeController::class, 'home'])->name('home.main')->middleware('home_guard');

Route::prefix('auth')->middleware('home_guard')->group(function() {
    // Register
    Route::get('register', [RegisterController::class, 'showRegistrationForm']);
    Route::post('send', [RegisterController::class, 'regisUser'])->name('send.regis');
    // Login
    Route::get('login/', [LoginController::class, 'showLoginForm'])->middleware('throttle:60,1')->name('login.form');
    Route::post('send-login', [LoginController::class, 'logProcess'])->name('send.login');

    //Forgot Password
    Route::get('forgot-password', [ForgotPasswordController::class, 'forgotForm']);
    Route::post('submit-email', [ForgotPasswordController::class, 'submitForgotPasswordForm'])->name('forget.password.post');

    Route::get('reset/password/{token}', [ForgotPasswordController::class, 'resetForm']);
    Route::post('reset/password/{email}', [ForgotPasswordController::class, 'formSubmited']);

    Route::get('/facebook', [SocialController::class, 'redirectToFB'])->middleware('throttle:60,1')->name('login.fb');
    Route::get('/facebook/callback', [SocialController::class, 'handleCallback']);
});

//livesearch
Route::get('search', [PostController::class, 'filterSearch']);

//Verification routes
Route::get('email/verify', [VerificationController::class, 'show'])->name('verification.notice');
Route::get('/email/verify/{id}/{hash}', [VerificationController::class, 'verify'])->name('verification.verify')->middleware(['auth', 'signed']);
Route::post('/email/resend', [VerificationController::class, 'resend'])->name('verification.resend');

//Forum Postingan User
Route::get('forum', [ForumController::class, 'index'])->name('forum-home');

//Postingan User Berdasarkan Slug
Route::get('/forum/postingan/{post:slug}', [ForumController::class, 'showUserPost'])->name('article');

//Semua Postingan User
Route::get('/postingan/{user:name}', [PostController::class, 'getUserPost']);

//Auth Cheker
Route::get('/user/status', function() {
    return ['isLoggedIn' => Auth::check()];
});

//Category Post Berdasarkan Slug
Route::get('/forum/postingan/categories/{category:slug}', [ForumController::class, 'showCategoryPost']);
//Ban User
Route::put('ban/user/{email}', [PostController::class, 'banUser'])->name('ban.user');
//Unban User
Route::put('unban/user/{email}', [PostController::class, 'unbanUser'])->name('unban.user');

//After Login!
Auth::routes(['verify' => true]);
Route::middleware(['auth', 'verified', 'web'])->group(function() {

    // Logout
    Route::post('logout', [LogoutController::class, 'logout'])->name('send.logout');
    Route::get('/home', [HomeController::class, 'index'])->name('home.auth');
    Route::get('/forum/buat/pertanyaan', [ForumController::class, 'createQuestion']);
    Route::get('/forum/edit/pertanyaan/{post:slug}', [ForumController::class, 'EditQuestion']);

    //Profile User
    Route::resource('profile', ProfileController::class);
    Route::get('edit-image', [ImageController::class, 'indexImage']);
    Route::put('send-image/{id}', [ImageController::class,'uploadImage'])->name('send.image');
    Route::delete('delete-image/{id}', [ImageController::class,'deleteImage'])->name('del.image');

    //Rules Forum
    Route::get('/forum/rules', [ForumController::class, 'viewRules']);

    //Posting Question
    Route::post('/forum/send', [PostController::class, 'store'])->name('question.send');
    //Edit Question
    Route::put('/edit/send/{id}', [PostController::class, 'update'])->name('question.edit');

    //User Comment
    Route::post('/comment/send', [CommentController::class, 'store'])->name('comment.send');

    //Delete Comment
    Route::delete('/comment/delete/{comment}', [CommentController::class, 'destroy'])->name('comment.delete');

    //Delete Comment
    Route::delete('/reply/delete/{id}', [CommentController::class, 'destroyReply'])->name('reply.delete');
});

