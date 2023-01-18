
<!-- get => [index(), create(), show()] -->
<!-- post => store() -->

<!-- UsersController -> update() -->
<form action="/users" method="post">
    @method('PUT')
    @csrf
    <!-- 省略 -->
    <input type="submit" value="">
</form>

<!-- UsersController -> delete() -->
<form action="/users" method="post">
    @method('DELETE')
    @csrf
    <!-- 省略 -->
    <input type="submit" value="">
</form>