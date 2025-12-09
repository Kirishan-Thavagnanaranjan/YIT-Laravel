<div>
    <form action="{{ route('students.update',$student->id) }}" method="post">
    @csrf
    @method('PUT')
    <label for="first_name">First Name :</label>
    <input type="text" name="first_name" id="first_name" value="{{ $student->first_name }}"><br>
    <label for="last_name">Last Name :</label>
    <input type="text" name="last_name" id="last_name" value="{{ $student->last_name }}"><br>
    <input type="submit" value="Update">
    </form>
</div>
