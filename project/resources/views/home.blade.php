<x-layouts.kribbem_base>
    <div class="bg-[#1A1A1A] w-[80%] h-[20%] flex justify-around items-center rounded-lg">
        @foreach ($preview as $prev)
            <x-prev-card :menu="$prev" />
        @endforeach
    </div>
</x-layouts.kribbem_base>