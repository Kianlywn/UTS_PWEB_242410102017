@extends('layouts.app')
@section('title', 'Login')
@section('content')
<div class="content-box max-w-md mx-auto bg-gray-800 text-white p-6 rounded-xl shadow-md transition duration-500">
    <h2 class="text-2xl font-bold mb-4 text-center">Login TrackrPlay</h2>
    @error('login')
        <p class="text-red-400 text-center mb-3">{{ $message }}</p>
    @enderror
    <form action="{{ route('login.do') }}" method="POST" class="space-y-4">
        @csrf
        <div>
            <label class="block mb-1 font-medium">Username</label>
            <input type="text" name="username" required class="w-full border rounded-lg px-3 py-2 text-black">
        </div>
        <div>
            <label class="block mb-1 font-medium">Password</label>
            <input type="password" name="password" required class="w-full border rounded-lg px-3 py-2 text-black">
        </div>
        <button type="submit" class="w-full bg-indigo-600 hover:bg-indigo-700 py-2 rounded-lg">Masuk</button>
    </form>
</div>
@endsection
