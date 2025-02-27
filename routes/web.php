<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('index');
})->name('top');

// 会社
Route::get('/company-info', function () {
    return view('company-info');
})->name('company.info');
Route::get('/company-philosophy', function () {
    return view('company-philosophy');
})->name('company.philosophy');

// サービス
Route::get('/service-web', function () {
    return view('service-web');
})->name('service.web');

// ソリューション
Route::get('/solutions-01', function () {
    return view('solutions-01');
})->name('solutions.01');

// ポリシー
Route::get('/policy-privacy', function () {
    return view('policy-privacy');
})->name('policy.privacy');
Route::get('/policy-security', function () {
    return view('policy-security');
})->name('policy.security');
Route::get('/policy-use', function () {
    return view('policy-use');
})->name('policy.use');

// メールでお問い合わせ
Route::get('/contact', [ContactController::class, 'form'])->name('contact.form');
Route::post('/contact/confirm', [ContactController::class, 'confirm'])->name('contact.confirm');
Route::post('/contact/send', [ContactController::class, 'send'])->name('contact.send');
Route::get('/contact/thanks', [ContactController::class, 'thanks'])->name('contact.thanks');