@extends('layouts.app')
@section('title', 'Profile')
@section('content')
<div class="content-box max-w-md mx-auto bg-gray-800 text-white p-6 rounded-xl shadow-md transition duration-500 text-center">
    <img src="https://yt3.googleusercontent.com/8Mq3FWiKvVZWOjIlYCP9B1P0q8p99iHlpux9osVSe9g0wIZsoxRhL02dxcorEpx7z2TZV9NknQ=s900-c-k-c0x00ffffff-no-rj" alt="Foto Profil" class="w-24 h-24 rounded-full mx-auto mb-4 border">
    <h2 class="text-2xl font-bold mb-2">{{ $username }}</h2>
    <p class="text-gray-400 mb-4">Gamer Sejati 🎮</p>
    <div class="space-y-2 text-left">
        <p><strong>Type Gamer:</strong> Casual</p>
        <p><strong>Bergabung:</strong> 2025</p>
        <p><strong>Deskripsi:</strong> My istri banyak banget💔🥀</p>
    </div>
</div>
@endsection
