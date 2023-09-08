<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\FoodItemController;




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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

//カテゴリページを表示
Route::get('/category', [CategoryController::class, 'view'])->name('category');
//登録した食品一覧ページを表示
Route::get('/food_item',[FoodItemController::class, 'foodview'])->name('fooditem');
//食品追加ページを表示
Route::get('/food_add',[FoodItemController::class, 'foodadd'])->name('foodadd');
//入力した食品をテーブルに保存
Route::post('/food_add',[FoodItemController::class,'store'])->name('foodstore');
//編集用ページを表示
Route::get('/food_edit/{post}',[FoodItemController::class, 'edit'])->name('foodedit');
//更新機能用ルート
Route::put('/food_item/{post}',[FoodItemController::class, 'update'])->name('foodupdate');
//削除機能用ルート
Route::delete('/food_item/{post}', [FoodItemController::class, 'destroy'])->name('fooddestroy');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


