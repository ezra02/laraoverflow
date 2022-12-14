<?php

use App\Http\Controllers\Auth\EmailVerificationController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\QuestionController;
use App\Http\Livewire\Auth\Login;
use App\Http\Livewire\Auth\Passwords\Confirm;
use App\Http\Livewire\Auth\Passwords\Email;
use App\Http\Livewire\Auth\Passwords\Reset;
use App\Http\Livewire\Auth\Register;
use App\Http\Livewire\Auth\Verify;
use App\Http\Livewire\Question\Create;
use App\Http\Livewire\Question\Edit;
use App\Http\Livewire\Question\Index;
use App\Http\Livewire\Question\Search;
use App\Http\Livewire\Question\Show;
use App\Http\Livewire\Team\Create as TeamCreate;
use Illuminate\Support\Facades\Route;


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


Route::get('/', function(){
    return view('welcome');
})->name('home');

Route::middleware('guest')->group(function () {
    Route::get('login', Login::class)
        ->name('login');

    Route::get('register', Register::class)
        ->name('register');
});

Route::get('password/reset', Email::class)
    ->name('password.request');

Route::get('password/reset/{token}', Reset::class)
    ->name('password.reset');

Route::middleware('auth')->group(function () {
    Route::get('email/verify', Verify::class)
        ->middleware('throttle:6,1')
        ->name('verification.notice');

    Route::get('password/confirm', Confirm::class)
        ->name('password.confirm');
});

Route::middleware('auth')->group(function () {
    Route::get('email/verify/{id}/{hash}', EmailVerificationController::class)
        ->middleware('signed')
        ->name('verification.verify');

    Route::post('logout', LogoutController::class)
        ->name('logout');
});

Route::prefix('questions')->group(function(){
    Route::get('/',Index::class)->name('questions.index');
    Route::get('create',Create::class)->name('questions.create')->middleware('auth');
    Route::get('{question}',Show::class)->name('questions.show');
    Route::get('{question}/edit',Edit::class);
});

Route::prefix('teams')->group(function(){
    Route::get('/',Index::class)->name('teams.index');
    Route::get('create',TeamCreate::class)->name('teams.create')->middleware('auth');
    Route::get('{question}',Show::class);
});

Route::get('about',function(){
    return view('about');
});

Route::get('/results',Search::class)->name('question.search');

Route::get('/test',function(){

});
