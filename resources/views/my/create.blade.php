<div>
    <!-- Well begun is half done. - Aristotle -->
    <form action="{{ url('my') }}" method="POST">
        @csrf
        <b>Name : </b><input type="text" name="name" id="name">
        <input type="submit" value="Submit">
    </form>
</div>
