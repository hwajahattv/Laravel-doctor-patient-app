@extends('admin.master.parent')

@section('content1')
    <div class="container">
        <h1 class="text-center display-3">List of All Doctors</h1>
        <table class="table table-bordered">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>designation</th>
                <th>mobileNumber</th>
                <th>email</th>
                <th>institutionOfService</th>
                <th>DP</th>
                <th colspan="2">Actions</th>
            </tr>

            @foreach ($alldata as $abc)
                <tr>
                    <td>{{ $abc->id }}</td>
                    <td>{{ $abc->name }}</td>
                    <td>{{ $abc->designation }}</td>
                    <td>{{ $abc->mobileNumber }}</td>
                    <td>{{ $abc->email }}</td>
                    <td>{{ $abc->institutionOfService }}</td>


                    @if ($abc->gender === 'Female')
                        <td><img alt="No image added."
                                onerror="this.onerror=null; this.src='{{ asset('images/uploads/doctor/profilePic/avatarFemale.jpeg') }}'"
                                style="width:110px; height:110px;"
                                src="{{ asset('images/uploads/doctor/profilePic/' . $abc->profilePicture) }}" /></td>
                    @else
                        <td><img alt="No image added."
                                onerror="this.onerror=null; this.src='{{ asset('images/uploads/doctor/profilePic/avatar.jpg') }}'"
                                style="width:110px; height:110px;"
                                src="{{ asset('images/uploads/doctor/profilePic/' . $abc->profilePicture) }}" /></td>
                    @endif

                    <td><a href="{{ url('/profileEdit/' . $abc->user_id) }}" class="btn btn-outline-info">Edit</a></td>
                    <td><a href="{{ url('/deleteDoctor/' . $abc->id) }}" class="btn btn-outline-danger"
                            onclick="return confirm('Are you sure to delete Dr. {{ $abc->name }}s Record')">Delete</a>
                    </td>
                </tr>
            @endforeach
        </table>
        {{-- <div class="row">{{ $alldata->links() }}</div> --}}
    @endsection
