@extends('layouts.app')

@section('content')
<h2 class="text-2xl font-bold mb-4">Daftar Pengumuman</h2>

<div class="space-y-4">
    @foreach ($pengumuman as $item)
    <div class="bg-white p-4 rounded-xl shadow">
        <h4 class="text-lg font-semibold">{{ $item->judul }}</h4>
        <p class="text-sm text-gray-500">{{ \Carbon\Carbon::parse($item->tanggal_rilis)->translatedFormat('d F Y') }}</p>
        <p class="mt-1 text-sm">{{ $item->isi }}</p>
    </div>
    @endforeach
</div>
@endsection
