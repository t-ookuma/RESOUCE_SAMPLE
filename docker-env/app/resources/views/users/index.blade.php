
<!-- get => [index(), create(), show()] -->
<!-- post => store() -->

<!-- UsersController -> update() -->
<form action="/users" method="post">
    @csrf
    @method('PUT')
    <!-- 省略 -->
    <input type="submit" value="">
</form>

<!-- UsersController -> delete() -->
<form action="/users" method="post">
    @csrf
    @method('DELETE')
    <!-- 省略 -->
    <input type="submit" value="">
</form>