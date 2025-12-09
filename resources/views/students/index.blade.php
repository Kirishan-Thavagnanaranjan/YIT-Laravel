{{-- @dd($students) --}}
<div>
    {{--
    <pre>
    {{ $students }}
    </pre> --}}
    <table border="1">
        <tr>
            <th>Id</th>
            <th>First Name</th>
            <th>Last Name</th>
        </tr>
        @foreach ($students as $student)
            <tr>
                <td>{{ $student->id }}</td>
                <td>{{ $student->first_name }}</td>
                <td>{{ $student->last_name }}</td>
                <td><a href="{{ url('students/'.$student->id) }}">Show</a></td>
                <td><a href="{{ route('students.edit',$student->id) }}">Edit</a></td>
                <td>
                    <form action="students/{{ $student->id }}" method="POST">
                        @csrf
                        @method('delete')
                        <input type="submit" value="Delete">
                    </form>
                </td>
            </tr>
        @endforeach

    </table>
    <a href="/students/create"><button>Create</button></a>


</div>