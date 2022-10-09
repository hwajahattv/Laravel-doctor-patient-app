@extends('doctor.parent.master')
@section('content')
    <div class="container rounded bg-white mt-5 mb-5">
        <form action="{{ url('/patientProfileEdit/' . $userInfo->user_id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-md-3 border-right">
                    <div class="d-flex flex-column align-items-center text-center p-3 py-5">

                        @if ($userInfo === null)
                            <img alt="No image added."
                                onerror="this.onerror=null; this.src='{{ asset('images/uploads/patient/profilePic/male.jpg') }}'"
                                style="width:110px; height:110px;"
                                src="{{ asset('images/uploads/doctor/profilePic/' . $userInfo->profilePicture) }}" />
                        @elseif ($userInfo->gender === 'female')
                            <td><img alt="No image added."
                                    onerror="this.onerror=null; this.src='{{ asset('images/uploads/patient/profilePic/Female.jpg') }}'"
                                    style="width:110px; height:110px;"
                                    src="{{ asset('images/uploads/doctor/profilePic/' . $userInfo->profilePicture) }}" />
                            </td>
                        @else
                            <td><img alt="No image added."
                                    onerror="this.onerror=null; this.src='{{ asset('images/uploads/patient/profilePic/male.jpg') }}'"
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

                        <div class="mt-5 text-center">
                            <input type="submit" value="Save" class="btn btn-primary profile-button" />
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="p-3 py-5">
                        <div class="d-flex justify-content-between align-items-center experience"><span>
                                <h4 class="text-right">Insurance Details</h4><br>
                            </span></div>
                        <div class="col-md-12"><label class="labels">Insurance Number</label>
                            <x-ProfileInputField name="insuranceNumber" type="text"
                                placeholder="Enter insurance Number" value="{{ $userInfo->insuranceNumber }}"
                                onkeypress="" />
                        </div>
                        <div class="col-md-12"><label class="labels">Insurance Company</label>
                            <x-ProfileInputField name="insuranceCompany" type="text"
                                placeholder="Enter name of your Insurance Company"
                                value="{{ $userInfo->insuranceCompany }}" onkeypress="" />
                        </div>

                        <div class="col-md-12">
                            <label class="labels">Upload display image:</label>
                            <input type="file" class="form-control" name="patientImageName" />
                            <input type="hidden" name="current_image" value="{{ $userInfo->profilePicture }}">
                        </div>
                    </div>
                </div>
            </div>

    </div>
    </div>
    </form>
    </div>
@endsection
