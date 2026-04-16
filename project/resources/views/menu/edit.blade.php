<x-layouts.kribbem_base>
    <div class="w-[90%] h-[95%] flex justify-center gap-y-5 bg-[#222222] border-2 border-[#353232] rounded-lg">
        <x-edit-menu-item :menu="$menu"/>
    </div>
    @if(session('success'))
        <script>
            alert("{{ session('success') }}")
        </script>
    @endif
</x-layouts.kribbem_base>