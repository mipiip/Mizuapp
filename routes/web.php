<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\QuestionController;


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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', [HomeController::class, 'index']);



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/questions', [QuestionController::class, 'index']);
    Route::post('/questions/store', [QuestionController::class, 'store']);
    Route::get('/questions/result',[QuestionController::class,'result']);
    Route::get('/mypage',[QuestionController::class,'mypage']);
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/profile/create', [ProfileController::class, 'create']);  //投稿フォームの表示
    Route::post('/profile', [ProfileController::class, 'store']);  //画像を含めた投稿の保存処理
    Route::get('/profiles/{profile}', [ProfileController::class, 'show']); //投稿詳細画面の表示
    Route::get('/logout', function(){return view('logout');});
});

require __DIR__.'/auth.php';
