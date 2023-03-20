<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\GroupController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\AchievementController;
use App\Http\Controllers\ParenttController;
use App\Http\Controllers\ServiceController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\NumberController;
use App\Http\Controllers\HumanController;

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

Route::get('/lang/{lang}', function ($lang) {
    session(['lang' => $lang]);
    return back();
}
);

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

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

Route::get('/', [PageController::class, 'index']);
Route::get('/groups', [PageController::class, 'groups'])->name('groups');
Route::get('/teachers', [PageController::class, 'teachers'])->name('teachers');
Route::get('/achievements', [PageController::class, 'achievements'])->name('achievements');
Route::get('/gallery', [PageController::class, 'gallery'])->name('gallery');
Route::get('/blog', [PageController::class, 'blog'])->name('blog');

Route::prefix('admin/')->name('admin.')->middleware(['auth'])->group(function () {
    
    Route::get('/home', function () {
        return view('admin.layouts.dashboard');
    }
    );
        


    Route::resource('/groups', GroupController::class );
    Route::resource('/achievements', AchievementController::class );
    Route::resource('/parents', ParenttController::class );
    Route::resource('/services', ServiceController::class );
    Route::resource('/teachers', TeacherController::class );
    Route::resource('/numbers', NumberController::class );
    Route::resource('/humans', HumanController::class );
});

