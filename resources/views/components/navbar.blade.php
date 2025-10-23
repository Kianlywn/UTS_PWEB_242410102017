<nav class="bg-gray-800 text-white p-4 transition duration-500" id="navbar">
    <div class="container mx-auto flex justify-between items-center">
        <div class="flex gap-4 items-center">
            <a href="{{ route('dashboard') }}" class="font-bold text-lg">🎮 TrackrPlay</a>
            @if(session('username'))
                <a href="{{ route('pengelolaan') }}" class="hover:underline">Pengelolaan</a>
                <a href="{{ route('profile') }}" class="hover:underline">Profile</a>
            @endif
        </div>

        <div class="flex items-center gap-3">
            <button id="themeToggle" class="text-xl focus:outline-none hover:scale-110 transition">🌙</button>

            @if(session('username'))
                <span>Halo, <strong>{{ $username }}</strong></span>
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button class="bg-red-600 hover:bg-red-700 px-3 py-1 rounded">Logout</button>
                </form>
            @else
                <button id="registerButton" class="bg-indigo-600 hover:bg-indigo-700 px-3 py-1 rounded">Register</button>
            @endif
        </div>
    </div>

    <div id="registerModal" class="fixed inset-0 bg-gray-800 bg-opacity-50 hidden items-center justify-center z-50">
        <div class="bg-white text-gray-800 rounded-lg shadow-lg p-6 max-w-sm w-full text-center">
            <h2 class="text-xl font-semibold mb-4">Fitur Belum Tersedia</h2>
            <p class="mb-6">Maaf, fitur register masih dalam pengembangan.</p>
            <button id="closeModal" class="bg-indigo-600 hover:bg-indigo-700 text-white px-4 py-2 rounded">Tutup</button>
        </div>
    </div>

    <script>
        const registerButton = document.getElementById('registerButton');
        const registerModal = document.getElementById('registerModal');
        const closeModal = document.getElementById('closeModal');

        if (registerButton) registerButton.addEventListener('click', () => {
            registerModal.classList.remove('hidden');
            registerModal.classList.add('flex');
        });

        closeModal.addEventListener('click', () => {
            registerModal.classList.add('hidden');
            registerModal.classList.remove('flex');
        });

        registerModal.addEventListener('click', e => {
            if (e.target === registerModal) registerModal.classList.add('hidden');
        });
    </script>
</nav>
