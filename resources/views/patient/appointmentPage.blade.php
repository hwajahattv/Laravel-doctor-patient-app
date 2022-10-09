@extends('patient.parent.master')
@section('content')
    <div class="container row">
        @foreach ($appointment as $appointment)
            <div class="card col-md-4" style="width: 18rem;">
                {{-- <img class="card-img-top"
                    src="{{ 'images/uploads/doctor/profilePic/' . $appointment->Doctor->profilePicture }}"
                    alt="Card image cap"> --}}
                    @if ($appointment->Doctor->profilePicture === null)
                    <img alt="No image added."
                        onerror="this.onerror=null; this.src='{{ asset('images/uploads/patient/profilePic/male.jpg') }}'"
                        style="width:110px; height:110px;"
                        src="{{ asset('images/uploads/doctor/profilePic/' . $appointment->Doctor->profilePicture) }}" />
                @elseif ($appointment->Doctor->gender === 'female')
                    <td><img alt="No image added."
                            onerror="this.onerror=null; this.src='{{ asset('images/uploads/patient/profilePic/Female.jpg') }}'"
                            style="width:110px; height:110px;"
                            src="{{ asset('images/uploads/doctor/profilePic/' . $appointment->Doctor->profilePicture) }}" />
                    </td>
                @else
                    <td><img alt="No image added."
                            onerror="this.onerror=null; this.src='{{ asset('images/uploads/patient/profilePic/male.jpg') }}'"
                            style="width:110px; height:110px;"
                            src="{{ asset('images/uploads/doctor/profilePic/' . $appointment->Doctor->profilePicture) }}" />
                    </td>
                @endif
                <div class="card-body">
                    <h6 class="card-text">Appointment with:</h6>
                    <h5 class="card-title">{{ $appointment->Doctor->name }}</h5>
                </div>
                <div class="alert">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item timeslotClass"><input class="timeslotClassInput" type="hidden"
                                value="{{ $appointment->doctor_slot->slot_number }}" /></li>
                        <li class="list-group-item dayClass"><input class="dayClassInput" type="hidden"
                                value="{{ $appointment->doctor_slot->day }}" /></li>
                        <li class="list-group-item">Department: {{ $appointment->department }}</li>
                        <li class="list-group-item">Date: {{ $appointment->date }}</li>
                    </ul>
                    <p class="card-text">Message: {{ $appointment->message }}</p>
                </div>
                <div class="card-body">
                    <a href="#" class="card-link">Card link</a>
                    <a href="#" class="card-link">Another link</a>
                </div>
            </div>
        @endforeach

    </div>
@endsection

@section('script')
    <script type="text/javascript">
        $(document).ready(function() {
            //     document.getElementById("timeslot").textContent += " Hello bhai jaan.";
            var divs = document.querySelectorAll(".timeslotClass");
            var inputfields = document.querySelectorAll(".timeslotClassInput");
            console.log(divs.length);
            var slotHourStart;
            var slotminStart;
            var slotHourEnd;
            var slotminSEnd;
            for (var i = 0; i < divs.length; i++) {
                slot = inputfields[i].value;

                if (slot == 0) {
                    slotHourStart = "12";
                    slotMinStart = "00";
                    slotHourEnd = "12";
                    slotMinEnd = "30";
                    startAmPm = "AM";
                    endAmPm = "AM";
                } else if (slot == 23) {
                    slotHourStart = "11";
                    slotMinStart = "30";
                    slotHourEnd = "12";
                    slotMinEnd = "00";
                    startAmPm = "AM";
                    endAmPm = "Noon";
                } else if (slot == 24) {
                    slotHourStart = "12";
                    slotMinStart = "00";
                    slotHourEnd = "12";
                    slotMinEnd = "30";
                    startAmPm = "Noon";
                    endAmPm = "PM";
                } else if (slot == 25) {
                    slotHourStart = "12";
                    slotMinStart = "30";
                    slotHourEnd = "1";
                    slotMinEnd = "00";
                    startAmPm = "PM";
                    endAmPm = "PM";
                } else if (slot == 47) {
                    slotHourStart = "11";
                    slotMinStart = "30";
                    slotHourEnd = "12";
                    slotMinEnd = "00";
                    startAmPm = "PM";
                    endAmPm = "AM";
                } else {
                    slotHourStart = Math.floor(slot / 2);
                    if (slot % 2 == 0) {
                        slotMinStart = '00';
                        slotMinEnd = '30';
                        slotHourEnd = slotHourStart;

                    } else {
                        slotMinStart = '30';
                        slotMinEnd = '00';
                        slotHourEnd = slotHourStart + 1;
                    }
                    if (slot > 25 && slot < 47) {
                        slotHourStart -= 12;
                        slotHourEnd -= 12;
                        startAmPm = "PM";
                        endAmPm = "PM";
                    } else {
                        startAmPm = "AM";
                        endAmPm = "AM";
                    }
                }
                divs[i].innerHTML = "Time slot:" + slotHourStart +
                    ":" + slotMinStart + startAmPm + "-" +
                    slotHourEnd + ":" + slotMinEnd + endAmPm + divs[i].innerHTML;
            }
            var daydivs = document.querySelectorAll(".dayClass");
            var dayinputfields = document.querySelectorAll(".dayClassInput");
            var days = new Array(7);
            days[0] = "Sunday";
            days[1] = "Monday";
            days[2] = "Tuesday";
            days[3] = "Wednesday";
            days[4] = "Thursday";
            days[5] = "Friday";
            days[6] = "Saturday";
            days[7] = "Sunday";
            for (var i = 0; i < daydivs.length; i++) {
                daydivs[i].innerHTML = days[dayinputfields[i].value] + daydivs[i].innerHTML;
            }
        });
    </script>
@endsection
