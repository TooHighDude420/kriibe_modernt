<div class="w-[90%] h-[40%] bg-[#222222] border-2 border-[#353232] rounded-lg">
    <a class="w-full h-full flex justify-center" href="{{ route('menu.show', $menu->id) }}">
        <div class="w-1/2 h-full flex justify-center items-center">
            <img class="h-[80%] rounded-lg" src="{{ Storage::url($menu->imagepath) }}">
        </div>
        <div class="h-full w-[40%] flex justify-around items-center">
            <h1>{{ $menu->name }}</h1>
            <p>{{ $menu->price }}</p>
        </div>
    </a>
</div>