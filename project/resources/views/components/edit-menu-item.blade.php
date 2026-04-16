<div class="w-[90%]">
    <form action="{{ route('menu.update', $menu->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label for="name">Name</label>
        <input class="text-black" type="text" id="name" name="name" value="{{ $menu->name }}">

        <label for="price">Price</label>
        <input class="text-black" type="number" id="price" name="price" value="{{ $menu->price }}">

        <label for="imagepath">imagepath</label>
        <input class="text-black" type="text" id="imagepath" name="imagepath" value="{{ $menu->imagepath }}">

        <input class="w-[80%]" type="submit" value="Submit">
    </form>
</div>
