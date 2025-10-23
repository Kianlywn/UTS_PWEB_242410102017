@extends('layouts.app')
@section('title', 'Dashboard')
@section('content')
<div class="content-box text-center bg-gray-800 text-white p-6 rounded-xl shadow-md transition duration-500">
    <h1 class="text-3xl font-bold mb-4">Selamat datang, {{ $username }} 🎮</h1>
    <div class="grid grid-cols-1 sm:grid-cols-3 gap-4 max-w-4xl mx-auto mb-8 transition duration-500">
        <div class="bg-gray-800 text-white p-4 rounded-xl shadow">
            <h3>Total Game</h3>
            <p class="text-2xl font-bold">{{ $total }}</p>
        </div>
        <div class="bg-gray-800 text-white p-4 rounded-xl shadow">
            <h3>Sudah Dimainkan</h3>
            <p class="text-2xl font-bold text-green-400">{{ $played }}</p>
        </div>
        <div class="bg-gray-800 text-white p-4 rounded-xl shadow">
            <h3>Belum Dimainkan</h3>
            <p class="text-2xl font-bold text-yellow-400">{{ $notPlayed }}</p>
        </div>
    </div>

    {{-- add game manual no array--}}
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 max-w-4xl mx-auto">
        <div class="bg-gray-800 p-4 rounded-xl shadow-md overflow-x-auto transition duration-500">
            <h2 class="text-xl font-semibold mb-3 text-indigo-400">🎮 Game yang baru saja kamu tambahkan</h2>
            <table class="min-w-full text-left">
                <thead>
                    <tr class="border-b border-gray-800 text-white">
                        <th class="py-2 px-3">Judul Game</th>
                        <th class="py-2 px-3">Genre</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="border-b border-gray-800 text-white">
                        <td class="py-2 px-3">Rune Factory 5</td>
                        <td class="py-2 px-3">Action RPG</td>
                    </tr>
                    <tr class="border-b border-gray-800 text-white">
                        <td class="py-2 px-3">Buckshot Roulette</td>
                        <td class="py-2 px-3">Roulette Horror</td>
                    </tr>
                    <tr class="border-b border-gray-800 text-white">
                        <td class="py-2 px-3">Red Dead Redemption 2</td>
                        <td class="py-2 px-3">Action Adventure</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="bg-gray-800 p-4 rounded-xl shadow-md overflow-x-auto transition duration-500">
            <h2 class="text-xl font-semibold mb-3 text-indigo-400">📅 Tanggal Game Diselesaikan</h2>
            <table class="min-w-full text-left">
                <thead>
                    <tr class="border-b border-gray-800 text-white">
                        <th class="py-2 px-3">Judul Game</th>
                        <th class="py-2 px-3">Tanggal Selesai</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="border-b border-gray-800 text-white">
                        <td class="py-2 px-3">Hollow Knight</td>
                        <td class="py-2 px-3">12 Agustus 2025</td>
                    </tr>
                    <tr class="border-b border-gray-800 text-white">
                        <td class="py-2 px-3">Elden Ring</td>
                        <td class="py-2 px-3">3 September 2025</td>
                    </tr>
                    <tr class="border-b border-gray-800 text-white">
                        <td class="py-2 px-3">Hades</td>
                        <td class="py-2 px-3">19 Oktober 2025</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
