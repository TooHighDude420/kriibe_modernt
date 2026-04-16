<div class="w-[90%]">
    <form action="{{ route('menu.store') }}" method="POST">
        @csrf

        <label for="name">Name</label>
        <input type="text" id="name" name="name">

        <label for="price">Price</label>
        <input type="number" id="price" name="price">

        <label for="imagepath">imagepath</label>
        <input type="text" id="imagepath" name="imagepath">

        <input class="w-[80%]" type="submit" value="Submit">
    </form>
</div>