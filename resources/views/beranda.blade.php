@extends('layouts.app')

@section('content')
<!-- Hero Section -->
<div class="bg-cover bg-center rounded-xl h-60 mb-8" style="background-image: url('{{ asset('storage/artikel/' . $artikel->first()->foto ?? '') }}')">
    <div class="bg-black bg-opacity-50 h-full flex items-center justify-center text-white text-center px-4">
        <div>
            <h2 class="text-2xl md:text-4xl font-bold">Selamat Datang di Website Sekolah</h2>
            <p class="mt-2 text-sm md:text-lg">Informasi terkini seputar kegiatan dan berita sekolah</p>
        </div>
    </div>
</div>

<!-- Artikel Section -->
<h3 class="text-xl font-semibold mb-4">Artikel Terbaru</h3>
<div class="grid md:grid-cols-3 gap-6">
    @foreach ($artikel as $item)
    <div class="bg-white rounded-xl shadow p-4">
        <img src="{{ asset('storage/' . $item->foto) }}" alt="{{ $item->judul }}" class="rounded mb-3 h-40 w-full object-cover">
        <h4 class="text-lg font-semibold mb-1">{{ $item->judul }}</h4>
        <p class="text-sm text-gray-500">{{ \Carbon\Carbon::parse($item->tanggal_rilis)->translatedFormat('d F Y') }}</p>
        <p class="text-sm mt-2">{{ \Str::limit(strip_tags($item->isi), 100) }}</p>
    </div>
    @endforeach
</div>
@endsection
