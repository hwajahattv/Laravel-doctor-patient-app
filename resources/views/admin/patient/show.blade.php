@extends('admin.master.parent')

@section('content1')
    <div class="container">
        <h1 class="text-center display-3">List of All Patients</h1>
        <table class="table table-bordered">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Insurance Number</th>
                <th>mobileNumber</th>
                <th>email</th>
                <th>Insurance Company</th>
                <th>DP</th>
                <th colspan="2">Actions</th>
            </tr>

            @foreach ($alldata as $abc)
                <tr>
                    <td>{{ $abc->id }}</td>
                    <td>{{ $abc->name }}</td>
                    <td>{{ $abc->insuranceNumber }}</td>
                    <td>{{ $abc->mobileNumber }}</td>
                    <td>{{ $abc->email }}</td>
                    <td>{{ $abc->insuranceCompany }}</td>


                    @if ($abc->gender === 'female')
                        <td><img alt="No image added."
                                onerror="this.onerror=null; this.src='{{ asset('images/uploads/patient/profilePic/female.jpg') }}'"
                                style="width:110px; height:110px;"
                                src="{{ asset('images/uploads/doctor/profilePic/' . $abc->profilePicture) }}" /></td>
                    @else
                        <td><img alt="No image added."
                                onerror="this.onerror=null; this.src='{{ asset('images/uploads/patient/profilePic/male.jpg') }}'"
                                style="width:110px; height:110px;"
                                src="{{ asset('images/uploads/doctor/profilePic/' . $abc->profilePicture) }}" /></td>
                    @endif

                    <td><a href="{{ url('/patientProfileEdit/' . $abc->user_id) }}" class="btn btn-outline-info">Edit</a>
                    </td>
                    <td><a href="{{ url('/deletePatient/' . $abc->user_id) }}" class="btn btn-outline-danger"
                            onclick="return confirm('Are you sure to delete Patient Record')">Delete</a>
                    </td>
                </tr>
            @endforeach
        </table>
        {{-- <div class="row">{{ $alldata->links() }}</div> --}}
    @endsection
