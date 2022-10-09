@extends('admin.master.parent')

@section('content1')
    <div class="container">
        <h1 class="text-center display-3">List of All Admins</h1>
        <table class="table table-bordered">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>email</th>
                <th>DP</th>
                <th>Actions</th>
            </tr>

            @foreach ($alldata as $abc)
                <tr>
                    <td>{{ $abc->id }}</td>
                    <td>{{ $abc->name }}</td>
                    <td>{{ $abc->email }}</td>
                    @if ($abc->gender === 'Female')
                        <td><img alt="No image added." onerror="this.onerror=null; this.src='{{ asset('images/admin.jpg') }}'"
                                style="width:110px; height:110px;"
                                src="{{ asset('images/uploads/doctor/profilePic/' . $abc->profilePicture) }}" /></td>
                    @else
                        <td><img alt="No image added." onerror="this.onerror=null; this.src='{{ asset('images/admin.jpg') }}'"
                                style="width:110px; height:110px;"
                                src="{{ asset('images/uploads/doctor/profilePic/' . $abc->profilePicture) }}" /></td>
                    @endif
                    {{-- <td><a href="{{ url('/profileEdit/' . $abc->user_id) }}" class="btn btn-outline-info">Edit</a></td> --}}
                    <td><a href="{{ url('/deleteAdmin/' . $abc->id) }}" class="btn btn-outline-danger"
                            onclick="return confirm('Are you sure to delete User {{ $abc->name }} Record')">Delete
                            User</a>
                    </td>
                </tr>
            @endforeach
        </table>
        {{-- <div class="row">{{ $alldata->links() }}</div> --}}
    @endsection
