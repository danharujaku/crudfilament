<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\Pengumuman;

class BerandaController extends Controller
{
    public function index() {
    $artikel = Article::latest()->take(5)->get();
    return view('beranda', compact('artikel'));
}

public function pengumuman() {
    $pengumuman = Pengumuman::latest()->get();
    return view('pengumuman', compact('pengumuman'));
}
}
