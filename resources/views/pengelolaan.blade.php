@extends('layouts.app')
@section('title', 'pengelolaan')
@section('content')
<div class="content-box bg-gray-800 text-white p-6 rounded-xl shadow-md transition duration-500">
    <h1 class="text-2xl font-bold mb-4 text-center">Daftar Game Kamu</h1>
    <div class="overflow-x-auto">
        <table class="min-w-full">
            <thead class="bg-indigo-600 text-white">
                <tr>
                    <th class="py-2 px-4 text-left">Judul Game</th>
                    <th class="py-2 px-4 text-left">Genre</th>
                    <th class="py-2 px-4 text-left">Tanggal Selesai</th>
                    <th class="py-2 px-4 text-center">Status</th>
                </tr>
            </thead>
            <tbody>
                {{-- looping data --}}
                @foreach($games as $game)
                <tr class="border-b hover:bg-gray-800 transition">
                    <td class="py-2 px-4">{{ $game['judul'] }}</td>
                    <td class="py-2 px-4">{{ $game['genre'] }}</td>
                    <td class="py-2 px-4">{{ $game['selesai'] }}</td>
                    <td class="py-2 px-4 text-center">
                        @if($game['status'])
                            <span class="text-green-400 font-semibold">✅ Sudah Dimainkan</span>
                        @else
                            <span class="text-yellow-400 font-semibold">⏳ Belum Dimainkan</span>
                        @endif
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
