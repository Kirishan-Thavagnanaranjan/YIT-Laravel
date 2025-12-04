<div>
    <!-- Live as if you were to die tomorrow. Learn as if you were to live forever. - Mahatma Gandhi -->
    <form action="{{ url('my/name') }}" method="POST">
    @csrf
    @method('PUT')
        <b>Name : </b><input type="text" name="name" id="name">
        <input type="submit" value="Submit">
    </form>
</div>