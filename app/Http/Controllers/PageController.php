<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function loginPage()
    {
        if (session('username')) {
            return redirect('/dashboard?username=' . session('username'));
        }
        return view('login');
    }

    public function doLogin(Request $request)
    {
        $request->validate([
            'username' => 'required|string',
            'password' => 'required|string',
        ]);

        if ($request->username === 'Miradayo' && $request->password === 'mywife123') {
            $request->session()->put('username', $request->username);

            return redirect('/dashboard?username=' . $request->username);
        }

        return back()->withErrors(['login' => 'Username atau password salah!']);
    }

    public function dashboard(Request $request)
    {
        if (!session('username')) {
            return redirect()->route('login.page');
        }

        $username = $request->query('username', session('username'));

        $games = $this->GamesArray();
        $total = count($games);
        $played = collect($games)->where('status', true)->count();
        $notPlayed = $total - $played;

        return view('dashboard', compact('games', 'total', 'played', 'notPlayed', 'username'));
    }

    public function pengelolaan(Request $request)
    {
        if (!session('username')) return redirect()->route('login.page');

        $username = $request->query('username', session('username'));
        $games = $this->GamesArray();

        return view('pengelolaan', compact('games', 'username'));
    }

    public function profile(Request $request)
    {
        if (!session('username')) return redirect()->route('login.page');

        $username = $request->query('username', session('username'));

        return view('profile', compact('username'));
    }

    private function GamesArray()
    {
        return [
            ['judul' => 'Buckshot Roulette', 'genre' => 'Horror', 'selesai' => '-', 'status' => false],
            ['judul' => 'Elden Ring', 'genre' => 'Action RPG', 'selesai' => '3 September 2025', 'status' => true],
            ['judul' => 'Hollow Knight', 'genre' => 'Metroidvania', 'selesai' => '12 Agustus 2025', 'status' => true],
            ['judul' => 'Hades', 'genre' => 'Roguelike', 'selesai' => '19 Oktober 2025', 'status' => true],
            ['judul' => 'Rune Factory 5', 'genre' => 'Fantasy RPG', 'selesai' => '-', 'status' => false],
            ['judul' => 'Red Dead Redemption', 'genre' => 'Action RPG', 'selesai' => '-', 'status' => false],
            ['judul' => 'Stardew Valley', 'genre' => 'Simulation', 'selesai' => '-', 'status' => false],
        ];
    }
}
