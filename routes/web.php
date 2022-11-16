<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AuthenController;
use App\Http\Controllers\CreateUserController;
use App\Http\Controllers\HomeController;
// app\Http\Controllers\Admin


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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';


Route::get('login', [AuthenController::class, 'create'])
                ->name('create');
Route::get('/tuyendung',function(){
    return view('tuyendung');
});


// Admin (Manh)
Route::get('/create/job',function(){return view('job.create');});               
Route::post('/admin/create/write', [CreateUserController::class, 'createJob']);

//getList db:job
Route::get('/index', [HomeController::class, 'index'])->name('index');
Route::get('admin/jobs/search', [HomeController::class, 'search']);

Route::get('/admin/jobs/edit/{id}', [CreateUserController::class, 'edit']);
Route::post('/admin/jobs/update/{id}', [CreateUserController::class, 'update']);
Route::get('/admin/jobs/delete/{id}', [CreateUserController::class, 'delete']);
Route::get('/admin/jobs/detail/{id}', [CreateUserController::class, 'detail']);

Route::get('/admin/jobs/edit/{id}', [CreateUserController::class, 'edit']);
Route::post('/admin/jobs/update/{id}', [CreateUserController::class, 'update']);