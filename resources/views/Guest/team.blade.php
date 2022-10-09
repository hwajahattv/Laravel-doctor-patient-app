@extends('Guest.parent.master')
@section('content')
    <section class="team-section section">
        <div class="container">
            <div class="section-title text-center">
                <h3>Our Expert
                    <span>Doctors</span>
                </h3>
                <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem illo, rerum
                    <br>natus nobis deleniti doloremque minima odit voluptatibus ipsam animi?
                </p>
            </div>
            <div class="row justify-content-center">
                @foreach ($doctorData as $doctor)
                    <div class="col-lg-4 col-md-6">
                        <div class="team-member">
                            <img loading="lazy"
                                src="{{ asset('images/uploads/doctor/profilePic/' . $doctor->profilePicture) }}"
                                alt="doctor" class="img-fluid">
                            <div class="contents text-center">
                                <h4>{{ $doctor->name }}</h4>
                                <p>{{ $doctor->designation }}</p>
                                <a href="{{ url('/registerAppointmentOfThisDoctor') . '/' . $doctor->id }}"
                                    class="btn btn-main">Book
                                    Appointment</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
