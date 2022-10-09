@extends('doctor.parent.master')
@section('content')
    <div class="container rounded bg-white mt-5 mb-5">
        {{-- <form action="{{ route('postEditProfile') }}" method="POST" enctype="multipart/form-data"> --}}
        <form action="{{ url('/profileEdit/' . $userInfo->user_id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-md-3 border-right">
                    <div class="d-flex flex-column align-items-center text-center p-3 py-5">
                        @if ($userInfo->gender === 'Female')
                            <td><img alt="No image added."
                                    onerror="this.onerror=null; this.src='{{ asset('images/uploads/doctor/profilePic/avatarFemale.jpeg') }}'"
                                    style="width:110px; height:110px;"
                                    src="{{ asset('images/uploads/doctor/profilePic/' . $userInfo->profilePicture) }}" />
                            </td>
                        @else
                            <td><img alt="No image added."
                                    onerror="this.onerror=null; this.src='{{ asset('images/uploads/doctor/profilePic/avatar.jpg') }}'"
                                    style="width:110px; height:110px;"
                                    src="{{ asset('images/uploads/doctor/profilePic/' . $userInfo->profilePicture) }}" />
                            </td>
                        @endif
                        <span class="font-weight-bold">{{ $userInfo->name }}</span><span
                            class="text-black-50">{{ $userInfo->email }}</span><span>
                        </span>
                    </div>
                </div>
                <div class="col-md-5 border-right">
                    <div class="p-3 py-5">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <h4 class="text-right">Personal Information</h4>
                        </div>
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <label class="labels">Name</label>
                                <x-ProfileInputField name="first_name" type="text" placeholder="first name"
                                    value="{{ $userInfo->name }}" onkeypress="" />
                            </div>
                            <div class="col-md-6">
                                <label class="labels">Last Name</label>
                                <x-ProfileInputField name="last_name" type="text" placeholder="Last name" value=""
                                    onkeypress="" />
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-1">
                                <label class="labels">Gender &nbsp;</label>
                            </div>
                            <div class="col-md-5">
                                <select name="gender" class="form-control">
                                    @if ($userInfo->gender == 'male')
                                        <option selected value="male">Male</option>
                                        <option value="female">Female</option>
                                    @else
                                        <option value="male">Male</option>
                                        <option selected value="female">Female</option>
                                    @endif
                                </select>
                            </div>
                            <div class="col-md-1">
                                <label class="labels">D.O.B</label>
                            </div>
                            <div class="col-md-5">
                                <input type="date" name="DOB"class="form-control"
                                    value="{{ $userInfo->dateOfBirth }}">
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-md-6"><label class="labels">PhoneNumber</label>
                                <x-ProfileInputField name="mobileNumber" type="text" placeholder="Enter phone number"
                                    value="{{ $userInfo->mobileNumber }}" onkeypress="return onlyNumberKey(event)" />
                            </div>
                            <div class="col-md-6"><label class="labels">Email ID</label>
                                <x-ProfileInputField name="emailAddress" type="email" placeholder="Enter email"
                                    value="{{ $userInfo->email }}" onkeypress="" />
                            </div>
                            <div class="col-md-6"><label class="labels">CNIC#</label>
                                <x-ProfileInputField name="NIC#" type="text" placeholder="Enter CNIC#"
                                    value="{{ $userInfo->nicNumber }}" onkeypress="return onlyNumberKey(event)" />
                            </div>
                            <div class="col-md-6"><label class="labels">PMDC Reg. Number</label>
                                <x-ProfileInputField name="licenseNumber" type="text" placeholder="Enter PMDC Number"
                                    value="{{ $userInfo->licenseNumber }}" onkeypress="" />
                            </div>
                            <div class="col-md-12"><label class="labels">Address</label>
                                <x-ProfileInputField name="mailingAddress" type="text" placeholder="Enter address"
                                    value="{{ $userInfo->address }}" onkeypress="" />
                            </div>
                            <div class="col-md-6"><label class="labels">City</label>
                                <x-ProfileInputField name="city" type="text" placeholder="Enter city name"
                                    value="{{ $userInfo->city }}" onkeypress="" />
                            </div>
                            <div class="col-md-6"><label class="labels">Country</label>
                                <x-ProfileInputField name="country" type="text" placeholder="Enter country name"
                                    value="{{ $userInfo->country }}" onkeypress="" />
                            </div>
                        </div>

                    </div>
                </div>

                <div class="col-md-4">
                    <div class="p-3 py-5">
                        <div class="d-flex justify-content-between align-items-center experience"><span>
                                <h4 class="text-right">Education and Work Details</h4><br>
                            </span></div>
                        <div class="col-md-12"><label class="labels">Education</label>
                            <x-ProfileInputField name="qualification" type="text"
                                placeholder="Enter most recent degree" value="{{ $userInfo->qualification }}"
                                onkeypress="" />
                        </div>
                        <div class="col-md-12"><label class="labels">Institution of Qualification</label>
                            <x-ProfileInputField name="institutionOfQualification" type="text"
                                placeholder="Enter your Institution of Qualification"
                                value="{{ $userInfo->institutionOfQualification }}" onkeypress="" />
                        </div>
                        <div class="col-md-12"><label class="labels">Institution of Service</label>
                            <x-ProfileInputField name="institutionOfService" type="text"
                                placeholder="Enter your Institution of Service"
                                value="{{ $userInfo->institutionOfService }}" onkeypress="" />
                        </div>
                        <div class="col-md-12"><label class="labels">Designation</label>
                            <x-ProfileInputField name="designation" type="text" placeholder="Enter your Designation"
                                value="{{ $userInfo->designation }}" onkeypress="" />
                        </div>
                        <div class="col-md-12"><label class="labels">Specialization</label>
                            <x-ProfileInputField name="specialization" type="text"
                                placeholder="Enter your Specialization" value="{{ $userInfo->specialization }}"
                                onkeypress="" />
                        </div>
                        <div class="col-md-12"><label class="labels">Department</label>
                            <x-ProfileInputField name="department" type="text" placeholder="Enter department"
                                value="{{ $userInfo->department }}" onkeypress="" />
                        </div>
                        <div class="col-md-12">
                            <label class="labels">Upload display image:</label>
                            <input type="file" class="form-control" name="doctorImageName" />
                            <input type="hidden" name="current_image" value="{{ $userInfo->profilePicture }}">
                        </div>


                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <h3>Doctor's Duty Roaster</h3>
                <div class="col-md-12">
                    {{-- <label class="labels">Give your schedule</label> --}}
                    <table class="table thead-dark table-bordered table-hover table-dark schedulerTable" id="example">
                    </table>
                    {{-- <div id="log" class="log"></div> --}}
                    <input type="hidden" name="scheduledSlots"id="testoutput"
                        value="{{ json_encode($scheduledSlots) }}">
                </div>
            </div>
            <div class="mt-5 text-center">
                <input type="submit" value="Save" class="btn btn-primary profile-button" />
            </div>


    </div>
    </div>
    </form>

    </div>
@endsection
@section('script')
    <script>
        $(document).ready(function() {
            var object = $('#testoutput').val();
            //     console.log(object);
            $('#example').scheduler({
                data: JSON.parse(object)
            });
        });
    </script>
@endsection
