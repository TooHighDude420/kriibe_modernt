<nav class="w-[80%] h-[50%] bg-[#222222] border-2 border-[#424040] rounded-full">
    <div class="w-full h-full flex justify-between items-center">
        <div class="h-[95%] w-[20%] flex justify-center items-center">
            <img class="h-full w-[40%]" src="{{ Storage::url('logo/mini_logo.png') }}" alt="logo">
        </div>
        
        <div class="w-[30%] h-full flex justify-between items-center">
            <a href={{ url('/') }} class="h-[90%] w-1/5 hover:bg-[#612507] rounded-lg {{ Route::is('home') ? 'bg-[#612507]' : '' }}">
                <div class="h-full w-full flex justify-around items-center">
                    <img class="h-[80%] w-[80%]" src="{{ Storage::url('icons/home.svg') }}" alt="logo">
                </div>
            </a>
            <a href={{ url('menu') }} class="h-[90%] w-1/5 hover:bg-[#612507] rounded-lg {{ Route::is('menu.index') ? 'bg-[#612507]'  : '' }}" id="adm">
                <div class="h-full w-full flex justify-around items-center">
                    <img class="h-[80%] w-[80%]" src="{{ Storage::url('icons/menu.svg') }}" alt="logo">
                </div>
            </a>
            <a href={{ url('about') }} class="h-[90%] w-1/5 hover:bg-[#612507] rounded-lg {{ Route::is('about') ? 'bg-[#612507]'  : '' }}">
                <div class="h-full w-full flex justify-around items-center">
                    <img class="h-[80%] w-[80%]" src="{{ Storage::url('icons/info.svg') }}" alt="logo">
                </div>
            </a>
            <a href={{ url('login') }} class="h-[90%] w-1/5 hover:bg-[#612507] rounded-lg {{ Route::is('login') ? 'bg-[#612507]'  : '' }}">
                <div class="h-full w-full flex justify-around items-center">
                    <img class="h-[80%] w-[80%]" src="{{ Storage::url('icons/lock.svg') }}" alt="logo">
                </div>
            </a>
        </div>

        <div class="h-[95%] w-[20%] flex justify-center items-center">
            @if(Route::is('menu.index'))
                <img class="h-full w-[50%]" src="{{ Storage::url('logo/mini_logo.png') }}" alt="logo">
            @endif
        </div>

        @auth
            <div>
                <a href="{{ route('logout') }}">Logout</a>
            </div>
        @endauth
    </div>
</nav>