<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BerandaController;
use App\Models\Article;
// use App\Models\Artikel;
use App\Models\Pengumuman;

Route::get('/', [BerandaController::class, 'index']);
Route::get('/pengumuman', [BerandaController::class, 'pengumuman']);

// Route::get('/', function () {
//     return view('beranda', [
//         'artikels' => Article::latest()->get()
//     ]);
// });

// Route::get('/pengumuman', function () {
//     return view('pengumuman', [
//         'pengumumans' => Pengumuman::latest()->get()
//     ]);
// });
