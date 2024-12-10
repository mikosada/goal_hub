<div class="w-full flex justify-between items-center px-12 py-6 bg-white/30">
    <div class="flex justify-start items-center w-1/3">
        <div class="text-3xl font-bold text-green-800">
            Goal<span class="text-green-500">Hub</span>
        </div>
    </div>
    <div class="flex justify-around items-center w-1/3">
        <a href="{{ url('/') }}" class="font-semibold px-4 py-1">Home</a>
        <a href="{{ url('/sewa') }} class="font-semibold px-4 py-1"">Sewa Lapangan</a>
        <a href="{{ url('/contact') }} class="font-semibold px-4 py-1"">Contact Us</a>
    </div>
    <div class="flex justify-end items-center w-1/3 gap-8">
        @if (Route::has('login'))
        @auth
        <x-app-layout>
        </x-app-layout>
        @else
        <a href="{{ url('/login') }}" class="font-semibold px-4 py-1">Login</a>
        @if (Route::has('register'))
        <a href="{{ url('/register') }}" class="bg-green-600 text-white font-semibold px-4 py-1 rounded-full">Signup</a>
        @endif
        @endauth
        </nav>
        @endif   
        </div> 
</div>