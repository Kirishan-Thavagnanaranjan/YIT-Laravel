@extends ('layouts.master')
@section('title', 'About')
@section('content')




    <div class="section">

        <div class="p-5 w-50 card d-flex " style="width: 60%">

            <form action="{{ url('save') }}" method="post" autocomplete="on" enctype="multipart/form-data" class="b-">
                @csrf
                <div class="form-header container text-center h1">Student Registration</div>
                <div class="line-break row">
                    <label for="myfile" class="col-form-label col">Select student picture</label>
                    <input type="file" name="myfile" id="myfile" accept="image/jpg" class="col">
                    {{ $mydata['myfile'] }}
                </div>
                <div class="line-break row">
                    <label for="father_name" class="col-form-label col">Father Name</label>
                    <input type="text" class="form-control col" name="father_name" id="father_name"
                        placeholder="Enter the father name.." required>
                </div>
                <div class="line-break row">
                    <label for="student_name" class="col-form-label col">Student Name</label>
                    <input type="text" class="form-control col" name="student_name" id="student_name"
                        placeholder="Enter the student name.." required>
                </div>
                <div class="line-break row">
                    <label for="admission_number" class="col-form-label col">Admission Number</label>
                    <input type="text" class="form-control col" name="admission_number" id="admission_number"
                        placeholder="Enter your admission number." required>
                </div>
                <div class="line-break row">
                    <label for="grade_id" class="col-form-label col">Grade</label>
                    <select name="grade_id" id="grade_id" class="form-control col">
                        <option value="">-- Select Grade --</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                    </select>
                </div>
                <div class="line-break row">
                    <label for="nic" class="col-form-label col">NIC</label>
                    <input type="number" class="form-control col" name="nic" id="nic" placeholder="Enter the nic..">
                </div>
                <div class="line-break row">
                    <label for="dob" class="col-form-label col">Date Of Birth</label>
                    <input type="date" class="form-control col" name="dob" id="dob">
                </div>
                <div class="row">
                    <div class="col">
                        <div class="col"><label for="">Gender</label></div>
                    </div>
                    <div class="col">
                    <div class="d-flex">
                        <div class="col"><input type="radio" class="mx-2" value="male" name="gender" id="gender"><label for="col-form-label">Male</label></div>
                        <div class="col"><input type="radio" class="mx-2" value="female" name="gender" id="gender"><label for="col-form-label">Female</label></div>
                        <div class="col"><input type="radio" class="mx-2" value="other" name="gender" id="gender"><label for="col-form-label">Other</label></div>
                    </div>
                    </div>
                </div>
                <div class="line-break row">
                    <label for="telephone_number" class="col-form-label col">Phone Number</label>
                    <input type="tel" class="form-control col" name="telephone_number" id="telephone_number"
                        placeholder="Enter your phone Number">
                </div>
                <div class="line-break row">
                    <label for="address" class="col-form-label col">Address</label>
                    <input type="text" class="form-control col" name="address" id="address"
                        placeholder="Enter the address..">
                </div>
                <div class="line-break d-grid gap-2 d-md-flex justify-content-md-end">
                    <input type="reset" value="Reset" class="col btn btn-primary"> <input type="submit" value="Submit"
                        class="col btn btn-success">
                </div>

            </form>
        </div>
    </div>


@endsection