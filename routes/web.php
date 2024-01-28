<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExamController;

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

Route::get('/', [ExamController::class, 'home'])->name('home');
Route::get('/exam', [ExamController::class, 'index'])->name('exam');
Route::post('/exam', [ExamController::class, 'answer'])->name('answer');
Route::get('/edit/{id}', [ExamController::class, 'edit'])->name('edit');
Route::get('/question', [ExamController::class, 'question'])->name('question');
Route::post('/question', [ExamController::class, 'questionCreate'])->name('question.create');
Route::get('/result', [ExamController::class, 'result'])->name('result');
Route::post('/result', [ExamController::class, 'getResult'])->name('update');
