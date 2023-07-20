<form action="{{route('post-register')}}" method="Post">
    @csrf
    <input type="text" name="email">
    <input type="text" name="username">
    <input type="text" name="name">
    <input type="password" name="password">
    <input type="text" name="phonenumber">
    <input type="submit" value="register">
</form>
