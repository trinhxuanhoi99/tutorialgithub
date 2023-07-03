<form action="{{route('Postform')}}" method="post">
    @csrf
    <input type="text" name="hoten">
    <input type="submit">
</form>

