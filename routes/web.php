<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\MatakuliahController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\HomeController;

Route::get('/pcr', function () {
    return 'Selamat datang di website PCR!';
});

Route::get('/mahasiswa', function () {
    return 'Hai nopri';
});

Route::get('/nama/{param1}', function ($param1) {
    return 'Hello Mahasiswa: '.$param1;
});


// ? setelah param agar menjadi optional
Route::get('/nim/{param1?}', function ($param1 = '-') {
    return 'Nim saya: '.$param1;
});


Route::get('/mahasiswa/{param1}', [MahasiswaController::class, 'show']);

Route::get('/about', function () {
    return view('halaman-about');
});

Route::get('/matakuliah/show/{param1?}', [MatakuliahController::class, 'show']);
Route::get('/matakuliah', [MatakuliahController::class, 'show']);

Route::post('question/store', [QuestionController::class, 'store'])
		->name('question.store');

Route::get('/home', [HomeController::class, 'index']);
