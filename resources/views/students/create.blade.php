<div>
    <form action="/students" method="post">
    @csrf
    <label for="first_name">First Name :</label>
    <input type="text" name="first_name" id="first_name"><br>
    <label for="last_name">Last Name :</label>
    <input type="text" name="last_name" id="last_name"><br>
    <input type="submit" value="Submit">
    </form>
</div>