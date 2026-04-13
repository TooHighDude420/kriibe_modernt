<div class="w-1/4 h-[80%] flex bg-[#222222] border-2 border-[#353232]">
    <div class="w-1/2 h-full flex justify-center items-center">
        <img class="h-[80%]" src="{{ Storage::url($menu->imagepath) }}">
    </div>
    <div class="h-full w-full flex justify-center items-center">
        <h1>{{ $menu->name }}</h1>
    </div>
</div>