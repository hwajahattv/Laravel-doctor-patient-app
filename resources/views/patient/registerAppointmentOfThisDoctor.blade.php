@extends('patient.parent.master')
@section('content')
    <div class="row">
        <div class="col-lg-6">
            <div class="contact-area pl-0 pl-lg-5">
                <div class="section-title">
                    <h3>Request
                        <span> An Appointment of:</span>
                    </h3>
                </div>
                <form name="contact_form" class="default-form contact-form"
                    action="{{ url('/registerAppointment/' . $patientData->user_id) }}" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="team-member">
                                <img loading="lazy"
                                    src="{{ asset('images/uploads/doctor/profilePic/' . $thisDoctorData->profilePicture) }}"
                                    alt="doctor" class="img-fluid">
                                <div class="contents text-center">
                                    <h4>{{ $thisDoctorData->name }}</h4>
                                    <p>{{ $thisDoctorData->designation }}</p>
                                    <p>Department</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input class="form-control" type="text" name="Name" value="{{ $patientData->name }}"
                                    placeholder="Name" required="">
                            </div>
                            <div class="form-group">
                                <input class="form-control" type="email" name="Email"
                                    value="{{ $patientData->email }}" placeholder="Email" required="">
                            </div>
                            <div class="form-group">
                                <input class="form-control" type="text" name="Phone"
                                    value="{{ $patientData->mobileNumber }}" placeholder="Phone" required="">
                            </div>
                            <div class="form-group">
                                <input class="form-control" type="text" name="Date" placeholder="Date" required=""
                                    id="datepicker" autocomplete="off">
                                <i class="fa fa-calendar" aria-hidden="true"></i>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="hidden" name="doctorId" value="{{ $thisDoctorData->id }}"
                                    id="selectDoctor" />
                            </div>
                            <div class="form-group">
                                <input type="hidden" id="availableSlots" name="selectSlot" value=""
                                    class="form-control" placeholder="Slot ID">
                                <input type="hidden" id="availableDay" name="selectDay" value="{{ $dayData }}"
                                    class="form-control">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <textarea class="form-control" name="form_message" placeholder="Your Message" required=""></textarea>
                            </div>
                            @error('selectSlot')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                            <div class="form-group text-center">
                                <button type="submit" class="btn-style-one">submit now</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="section-title">
                <h3>
                    <span>Pick your slot</span>
                </h3>
                <h6 class="text-center display-6">Select the appointment date first then select the desired timeslot.
                    date.</h6>
                <div class="alert alert-light" id="availableSlotsButtons"></div>
            </div>
        </div>
    </div>
@endsection


@section('script')
    <script src='{{ asset('/js/appointmenSchedulerOfSelectedDoctor.js') }}' type="text/javascript"></script>
@endsection
