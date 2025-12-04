<div>
    <!-- Simplicity is an acquired taste. - Katharine Gerould -->
    <form action="{{ url('my/name') }}" method="POST">
    @csrf
    @method('DELETE')
        <b>Name : </b><input type="text" name="name" id="name">
        <input type="submit" value="delete">
    </form>
</div>
