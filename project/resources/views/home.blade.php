<x-layouts.kribbem_base>
    <div class="bg-[#1A1A1A] w-[80%] h-[20%] flex flex-col justify-around items-center rounded-lg border-2 border-[#403C3C]">
        <div class="h-[20%] w-[95%] flex justify-between items-center">
            <p> Populaire gerechten </p>
            <a href={{ url('menu') }} class="text-[#BE4E14]">
                Bekijk meer
            </a>
        </div>
        <div class="w-full h-[80%] flex justify-around items-center">
            @foreach ($preview as $prev)
                <x-prev-card :menu="$prev" />
            @endforeach
        </div>
    </div>
</x-layouts.kribbem_base>