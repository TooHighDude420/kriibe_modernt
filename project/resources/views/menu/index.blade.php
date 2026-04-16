<x-layouts.kribbem_base>
    <div class="w-[90%] flex flex-col gap-y-10 content-center">
    @foreach ($menu as $menuItem)
        <x-menu_card :menu="$menuItem" />
    @endforeach
</x-layouts.kribbem_base>