{{-- @dd($students) --}}
<div>
    {{-- <pre>
    {{ $students }}
    </pre> --}}
    <table border="1">
        <tr>
            <th>Id</th>
            <th>First Name</th>
            <th>Last Name</th>
        </tr>
         @foreach ($students as $student )
         <tr>
            <td>{{ $student->id }}</td>
            <td>{{ $student->first_name }}</td>
            <td>{{ $student->last_name }}</td>
            <td><a href="students/{{ $student->id }}">Show</a></td>
         </tr>
         @endforeach
        
    </table>
       
   
</div>
